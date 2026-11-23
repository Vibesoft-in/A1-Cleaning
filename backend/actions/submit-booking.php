<?php
/**
 * Action Handler: Process Booking Form Submission
 * Path: /backend/actions/submit-booking.php
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../helpers/security.php';

Security::startSession();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: " . SITE_URL . "/book-now/");
    exit;
}

// 1. Honeypot Anti-Spam Check (Invisible to humans, filled by bots)
if (!empty($_POST['website_url'])) {
    // Silently abort bot submissions
    header("Location: " . SITE_URL . "/book-now/thank-you/");
    exit;
}

// 2. Validate CSRF Token
$csrfToken = $_POST['csrf_token'] ?? '';
if (!Security::validateCsrfToken($csrfToken)) {
    $_SESSION['form_error'] = "Session expired or invalid form request. Kripya dobara try karein.";
    header("Location: " . SITE_URL . "/book-now/");
    exit;
}

// 3. Clean & Sanitize Inputs
$name = Security::cleanInput($_POST['name'] ?? '');
$phoneInput = Security::cleanInput($_POST['phone'] ?? '');
$city = Security::cleanInput($_POST['city'] ?? '');
$service = Security::cleanInput($_POST['service'] ?? '');
$preferredDate = Security::cleanInput($_POST['preferred_date'] ?? '');
$address = Security::cleanInput($_POST['address'] ?? '');
$message = Security::cleanInput($_POST['message'] ?? '');
$sourcePage = Security::cleanInput($_POST['source_page'] ?? 'Direct /book-now/');

// 4. Validate Phone Number (10 digits India)
$phone = Security::validateIndianPhone($phoneInput);
if (!$phone) {
    $_SESSION['form_error'] = "Kripya sahi 10-digit mobile number dalein.";
    header("Location: " . SITE_URL . "/book-now/");
    exit;
}

if (empty($name) || empty($city) || empty($service)) {
    $_SESSION['form_error'] = "Kripya sabhi zaroori fields (Name, Phone, City, Service) bharein.";
    header("Location: " . SITE_URL . "/book-now/");
    exit;
}

// 5. Save to MySQL Database
$db = getDbConnection();
$savedSuccessfully = false;

if ($db) {
    try {
        $stmt = $db->prepare("INSERT INTO bookings (name, phone, city, service, preferred_date, address, message, source_page, ip_address) 
                              VALUES (:name, :phone, :city, :service, :preferred_date, :address, :message, :source_page, :ip_address)");
        
        $dbDate = !empty($preferredDate) ? date('Y-m-d', strtotime($preferredDate)) : null;
        $ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';

        $stmt->execute([
            ':name' => $name,
            ':phone' => $phone,
            ':city' => $city,
            ':service' => $service,
            ':preferred_date' => $dbDate,
            ':address' => $address,
            ':message' => $message,
            ':source_page' => $sourcePage,
            ':ip_address' => $ip
        ]);
        $savedSuccessfully = true;
    } catch (Exception $e) {
        error_log("Failed to insert booking into DB: " . $e->getMessage());
    }
}

// 6. Optional Notification Email (Can be configured with SMTP)
$emailSubject = "New Booking Lead: {$service} in {$city} - {$name}";
$emailBody = "New Cleaning Enquiry Received:\n\n" .
             "Name: {$name}\n" .
             "Phone: +91 {$phone}\n" .
             "City: {$city}\n" .
             "Service: {$service}\n" .
             "Preferred Date: {$preferredDate}\n" .
             "Address: {$address}\n" .
             "Message: {$message}\n" .
             "Source: {$sourcePage}\n" .
             "Time: " . date('d-m-Y H:i:s') . "\n";

@mail(BUSINESS_EMAIL, $emailSubject, $emailBody, "From: " . BUSINESS_EMAIL);

// 7. Store booking success details in session for the Thank-you page
$_SESSION['last_booking'] = [
    'name' => $name,
    'phone' => $phone,
    'city' => $city,
    'service' => $service
];

// 8. Redirect to conversion confirmation page
header("Location: " . SITE_URL . "/book-now/thank-you/");
exit;


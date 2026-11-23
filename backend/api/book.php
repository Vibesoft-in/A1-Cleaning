<?php
/**
 * API: Submit Booking / Lead Request
 * Endpoint: POST /api/book
 * Accepts: JSON payload or Form data
 * Used by: Website AJAX & Mobile App
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../helpers/security.php';
require_once __DIR__ . '/../helpers/api-response.php';

ApiResponse::init();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    ApiResponse::error('Method not allowed. Use POST.', 405);
}

// Read payload (supports JSON and form-data)
$input = ApiResponse::getRequestData();

// 1. Honeypot check (ignore bot spam)
if (!empty($input['website_url'])) {
    ApiResponse::success(['booking_id' => 0], 'Booking received.');
}

// 2. Extract & Sanitize fields
$name = Security::cleanInput($input['name'] ?? '');
$phoneInput = Security::cleanInput($input['phone'] ?? '');
$city = Security::cleanInput($input['city'] ?? '');
$service = Security::cleanInput($input['service'] ?? '');
$preferredDate = Security::cleanInput($input['preferred_date'] ?? '');
$address = Security::cleanInput($input['address'] ?? '');
$message = Security::cleanInput($input['message'] ?? '');
$source = Security::cleanInput($input['source'] ?? 'Mobile App / API');

$errors = [];

if (empty($name)) {
    $errors[] = 'Name is required.';
}

$phone = Security::validateIndianPhone($phoneInput);
if (!$phone) {
    $errors[] = 'A valid 10-digit Indian phone number is required (e.g. 7906366271).';
}

if (empty($city)) {
    $errors[] = 'City is required.';
}

if (empty($service)) {
    $errors[] = 'Service is required.';
}

if (!empty($errors)) {
    ApiResponse::error('Validation failed. Please correct the fields.', 422, $errors);
}

// 3. Save to Database
$db = getDbConnection();
$bookingId = null;

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
            ':source_page' => $source,
            ':ip_address' => $ip
        ]);
        $bookingId = $db->lastInsertId();
    } catch (Exception $e) {
        error_log("API Booking insert failed: " . $e->getMessage());
    }
}

// 4. Send Email Notification
$emailSubject = "App/API Booking: {$service} in {$city} - {$name}";
$emailBody = "New Cleaning Booking Received via API:\n\n" .
             "Booking ID: " . ($bookingId ?? 'N/A') . "\n" .
             "Name: {$name}\n" .
             "Phone: +91 {$phone}\n" .
             "City: {$city}\n" .
             "Service: {$service}\n" .
             "Preferred Date: {$preferredDate}\n" .
             "Address: {$address}\n" .
             "Message: {$message}\n" .
             "Source: {$source}\n" .
             "Date: " . date('d-m-Y H:i:s') . "\n";

@mail(BUSINESS_EMAIL, $emailSubject, $emailBody, "From: " . BUSINESS_EMAIL);

// 5. Generate direct WhatsApp confirmation link for the App
$waConfirmMsg = "Hi A1 Cleaning, my name is {$name}. I just submitted a booking for {$service} in {$city}. Please confirm my slot.";
$waConfirmUrl = "https://wa.me/917906366271?text=" . rawurlencode($waConfirmMsg);

// 6. Return Clean Success JSON
ApiResponse::success([
    'booking_id' => $bookingId,
    'name' => $name,
    'phone' => '+91' . $phone,
    'city' => $city,
    'service' => $service,
    'preferred_date' => $preferredDate,
    'whatsapp_direct_url' => $waConfirmUrl
], 'Booking request submitted successfully! Our team will call you within 15-30 minutes to confirm.', 201);


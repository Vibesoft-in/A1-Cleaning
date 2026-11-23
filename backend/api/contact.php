<?php
/**
 * API: Submit General Contact Inquiry
 * Endpoint: POST /api/contact
 * Accepts: JSON payload or Form data
 * Used by: Website Contact Form & Mobile App
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../helpers/security.php';
require_once __DIR__ . '/../helpers/api-response.php';

ApiResponse::init();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    ApiResponse::error('Method not allowed. Use POST.', 405);
}

$input = ApiResponse::getRequestData();

// Honeypot check
if (!empty($input['website_url'])) {
    ApiResponse::success(['inquiry_id' => 0], 'Inquiry received.');
}

$name = Security::cleanInput($input['name'] ?? '');
$phoneInput = Security::cleanInput($input['phone'] ?? '');
$email = Security::cleanInput($input['email'] ?? '');
$subject = Security::cleanInput($input['subject'] ?? 'General Inquiry');
$message = Security::cleanInput($input['message'] ?? '');
$source = Security::cleanInput($input['source'] ?? 'Mobile App / Contact Form');

$errors = [];

if (empty($name)) {
    $errors[] = 'Name is required.';
}

$phone = Security::validateIndianPhone($phoneInput);
if (!$phone) {
    $errors[] = 'A valid 10-digit Indian phone number is required.';
}

if (empty($message)) {
    $errors[] = 'Message is required.';
}

if (!empty($errors)) {
    ApiResponse::error('Validation failed. Please correct the fields.', 422, $errors);
}

// Save to Database
$db = getDbConnection();
$inquiryId = null;

if ($db) {
    try {
        $stmt = $db->prepare("INSERT INTO inquiries (name, phone, email, subject, message, source_page) 
                              VALUES (:name, :phone, :email, :subject, :message, :source_page)");
        $stmt->execute([
            ':name' => $name,
            ':phone' => $phone,
            ':email' => $email,
            ':subject' => $subject,
            ':message' => $message,
            ':source_page' => $source
        ]);
        $inquiryId = $db->lastInsertId();
    } catch (Exception $e) {
        error_log("API Contact insert failed: " . $e->getMessage());
    }
}

// Send Notification Email
$emailSubject = "New Contact Inquiry from {$name} ({$subject})";
$emailBody = "New Inquiry Details:\n\n" .
             "Name: {$name}\n" .
             "Phone: +91 {$phone}\n" .
             "Email: {$email}\n" .
             "Subject: {$subject}\n" .
             "Message: {$message}\n" .
             "Source: {$source}\n" .
             "Date: " . date('d-m-Y H:i:s') . "\n";

@mail(BUSINESS_EMAIL, $emailSubject, $emailBody, "From: " . BUSINESS_EMAIL);

ApiResponse::success([
    'inquiry_id' => $inquiryId,
    'name' => $name,
    'phone' => '+91' . $phone,
    'message' => $message
], 'Your message has been sent successfully! We will get in touch shortly.');


<?php
/**
 * A1 Cleaning - Master Configuration
 * All NAP (Name, Address, Phone) & system constants defined here.
 */

// Environment check & Base URL determination
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$script_name = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/index.php'));
$base_path = ($script_name === '/' || $script_name === '\\' || $script_name === '.') ? '' : rtrim($script_name, '/');

// Base URL for relative asset linking and canonicals
define('SITE_URL', $protocol . $host . $base_path);
define('CANONICAL_DOMAIN', 'https://a1cleaning.in');

// Master Business NAP Data (Strictly matching Blueprint)
define('BUSINESS_NAME', 'A1 Cleaning');
define('BUSINESS_TAGLINE', 'Professional Cleaning Service');
define('BUSINESS_SLOGAN', 'Every Space. Expertly Cleaned.');
define('BUSINESS_PHONE', '+91 79063 66271');
define('BUSINESS_PHONE_RAW', '+917906366271');
define('BUSINESS_WHATSAPP_LINK', 'https://wa.me/917906366271');
define('BUSINESS_EMAIL', 'enquire@a1cleaning.in');

// Primary Kashipur Physical Office Address
define('BUSINESS_STREET', 'Kumaun Market, Ramnagar Rd');
define('BUSINESS_CITY', 'Kashipur');
define('BUSINESS_STATE', 'Uttarakhand');
define('BUSINESS_POSTCODE', '244713');
define('BUSINESS_COUNTRY', 'IN');
define('BUSINESS_ADDRESS', BUSINESS_STREET . ', ' . BUSINESS_CITY . ', ' . BUSINESS_STATE . ' ' . BUSINESS_POSTCODE);
define('BUSINESS_LATITUDE', 29.2104);
define('BUSINESS_LONGITUDE', 78.9619);
define('SERVICE_RADIUS_METERS', 60000); // 60 km radius

// Operating Hours
define('BUSINESS_HOURS_DAYS', ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']);
define('BUSINESS_HOURS_OPEN', '08:00');
define('BUSINESS_HOURS_CLOSE', '19:00');

// Social & Profile Links
define('LINK_GBP_CID', 'https://maps.google.com/?cid=YOUR_GBP_CID');
define('LINK_FACEBOOK', 'https://www.facebook.com/A1CleaningOfficial');
define('LINK_INSTAGRAM', 'https://www.instagram.com/A1CleaningOfficial');
define('LINK_JUSTDIAL', 'https://www.justdial.com/Kashipur/A1-Cleaning');

// Database Configuration (Default XAMPP)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'a1_cleaning');

// =========================================================================
// API KEYS & SECURITY TOKENS (For Mobile App & External Services)
// =========================================================================
// 1. Mobile App Client API Key (Include in header: X-API-KEY)
define('APP_API_KEY_PUBLIC', 'a1_clean_pub_917906366271');
define('APP_API_KEY_SECRET', 'a1_clean_sec_8f93b2a7d4e1c5098142766');

// 2. Third-Party Service Keys (Placeholders - Replace with your real live keys)
define('GOOGLE_MAPS_API_KEY', 'AIzaSy_YOUR_GOOGLE_MAPS_API_KEY');
define('GA4_MEASUREMENT_ID', 'G-YOUR_GA4_ID');
define('GTM_CONTAINER_ID', 'GTM-YOUR_GTM_ID');
define('SMTP_HOST', 'smtp.hostinger.com'); // or mail.a1cleaning.in
define('SMTP_USER', 'enquire@a1cleaning.in');
define('SMTP_PASS', 'YOUR_EMAIL_PASSWORD');
define('SMTP_PORT', 587);



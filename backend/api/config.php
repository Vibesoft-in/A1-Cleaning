<?php
/**
 * API: Get Business Master Configuration & NAP
 * Endpoint: GET /api/config
 * Used by: Website & Mobile App (Eliminates hardcoded contacts)
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../helpers/api-response.php';

ApiResponse::init();

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    ApiResponse::error('Method not allowed. Use GET.', 405);
}

$data = [
    'brand' => [
        'name' => BUSINESS_NAME,
        'tagline' => BUSINESS_TAGLINE,
        'slogan' => BUSINESS_SLOGAN,
        'logo' => [
            'horizontal' => SITE_URL . '/assets/images/brand/logo-horizontal.png',
            'badge' => SITE_URL . '/assets/images/brand/logo-round-badge.png',
            'square' => SITE_URL . '/assets/images/brand/logo-dark-square.png'
        ]
    ],
    'contact' => [
        'phone' => BUSINESS_PHONE,
        'phone_raw' => BUSINESS_PHONE_RAW,
        'call_url' => 'tel:' . BUSINESS_PHONE_RAW,
        'whatsapp_url' => BUSINESS_WHATSAPP_LINK,
        'email' => BUSINESS_EMAIL,
        'mail_url' => 'mailto:' . BUSINESS_EMAIL
    ],
    'location' => [
        'address' => BUSINESS_STREET,
        'city' => BUSINESS_CITY,
        'state' => BUSINESS_STATE,
        'postcode' => BUSINESS_POSTCODE,
        'country' => BUSINESS_COUNTRY,
        'full_address' => BUSINESS_STREET . ', ' . BUSINESS_CITY . ', ' . BUSINESS_STATE . ' ' . BUSINESS_POSTCODE,
        'latitude' => BUSINESS_LATITUDE,
        'longitude' => BUSINESS_LONGITUDE,
        'service_radius_km' => 60,
        'service_radius_meters' => SERVICE_RADIUS_METERS
    ],
    'operating_hours' => [
        'days' => BUSINESS_HOURS_DAYS,
        'opens' => BUSINESS_HOURS_OPEN,
        'closes' => BUSINESS_HOURS_CLOSE,
        'display' => 'Monday – Saturday: 08:00 AM – 07:00 PM (Sunday by appointment)'
    ],
    'social_links' => [
        'google_business' => LINK_GBP_CID,
        'facebook' => LINK_FACEBOOK,
        'instagram' => LINK_INSTAGRAM,
        'justdial' => LINK_JUSTDIAL
    ]
];

ApiResponse::success($data, 'Business configuration retrieved successfully.');


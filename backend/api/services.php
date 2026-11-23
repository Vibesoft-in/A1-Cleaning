<?php
/**
 * API: Get Services List or Single Service Details
 * Endpoint: GET /api/services
 * Optional Query: ?slug=sofa-cleaning
 * Used by: Website & Mobile App
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../helpers/api-response.php';

ApiResponse::init();

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    ApiResponse::error('Method not allowed. Use GET.', 405);
}

$servicesList = require __DIR__ . '/../data/services.php';
$requestedSlug = strtolower(trim($_GET['slug'] ?? ''));

if (!empty($requestedSlug)) {
    if (isset($servicesList[$requestedSlug])) {
        $service = $servicesList[$requestedSlug];
        $service['page_url'] = SITE_URL . '/services/' . $requestedSlug . '/';
        ApiResponse::success($service, 'Service details retrieved successfully.');
    } else {
        ApiResponse::error("Service with slug '{$requestedSlug}' not found.", 404);
    }
}

// Return all services as an indexed array for easy app listing
$formattedList = [];
foreach ($servicesList as $slug => $item) {
    $item['page_url'] = SITE_URL . '/services/' . $slug . '/';
    $formattedList[] = $item;
}

ApiResponse::success([
    'total' => count($formattedList),
    'services' => $formattedList
], 'All services retrieved successfully.');


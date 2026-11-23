<?php
/**
 * API: Get Operating Cities & Coverage Locations
 * Endpoint: GET /api/cities
 * Optional Query: ?slug=kashipur
 * Used by: Website & Mobile App
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../helpers/api-response.php';

ApiResponse::init();

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    ApiResponse::error('Method not allowed. Use GET.', 405);
}

$citiesList = require __DIR__ . '/../data/cities.php';
$requestedSlug = strtolower(trim($_GET['slug'] ?? ''));

if (!empty($requestedSlug)) {
    if (isset($citiesList[$requestedSlug])) {
        $city = $citiesList[$requestedSlug];
        $city['page_url'] = SITE_URL . '/' . $requestedSlug . '/';
        ApiResponse::success($city, 'City details retrieved successfully.');
    } else {
        ApiResponse::error("City with slug '{$requestedSlug}' not found.", 404);
    }
}

$formattedList = [];
foreach ($citiesList as $slug => $city) {
    $city['page_url'] = SITE_URL . '/' . $slug . '/';
    $formattedList[] = $city;
}

ApiResponse::success([
    'total' => count($formattedList),
    'service_radius_km' => 60,
    'cities' => $formattedList
], 'Cities list retrieved successfully.');


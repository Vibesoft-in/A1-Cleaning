<?php
/**
 * API: Get Transparent Pricing Matrix
 * Endpoint: GET /api/pricing
 * Used by: Website & Mobile App
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../helpers/api-response.php';

ApiResponse::init();

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    ApiResponse::error('Method not allowed. Use GET.', 405);
}

$servicesList = require __DIR__ . '/../data/services.php';

$pricingTable = [];
foreach ($servicesList as $slug => $svc) {
    $pricingTable[] = [
        'service_slug' => $slug,
        'service_name' => $svc['name'],
        'starting_price' => $svc['starting_price'],
        'time_estimate' => $svc['time_estimate'],
        'short_desc' => $svc['short_desc']
    ];
}

ApiResponse::success([
    'currency' => 'INR',
    'pricing_policy' => 'Prices are starting-from estimates. Final quotations depend on property size and condition inspection.',
    'items' => $pricingTable
], 'Pricing matrix retrieved successfully.');


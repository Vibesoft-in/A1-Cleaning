<?php
/**
 * A1 Cleaning - Master Router & Front Controller
 * Maps clean, human & SEO-friendly URLs directly to views
 * Supports both Local XAMPP (/A1-Cleaning/...) and Live Production Domain (/)
 */

require_once __DIR__ . '/backend/config/config.php';
require_once __DIR__ . '/backend/helpers/seo-helper.php';

// Load Master Data
$servicesList = require __DIR__ . '/backend/data/services.php';
$citiesList = require __DIR__ . '/backend/data/cities.php';

// Parse Clean URL Path
$requestUri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
if ($scriptDir !== '/' && strpos($requestUri, $scriptDir) === 0) {
    $requestUri = substr($requestUri, strlen($scriptDir));
}
$path = trim($requestUri, '/');
$segments = $path ? explode('/', $path) : [];

// 1. Root / Homepage
if (empty($segments) || $segments[0] === 'index.php') {
    require __DIR__ . '/frontend/views/home.php';
    exit;
}

$firstSegment = strtolower($segments[0]);

// =========================================================================
// REST API ROUTING (For Website AJAX & Future Mobile Application)
// =========================================================================
if ($firstSegment === 'api') {
    require_once __DIR__ . '/backend/helpers/api-response.php';
    $apiEndpoint = strtolower($segments[1] ?? '');

    switch ($apiEndpoint) {
        case 'config':
            require __DIR__ . '/backend/api/config.php';
            exit;
        case 'services':
            require __DIR__ . '/backend/api/services.php';
            exit;
        case 'cities':
            require __DIR__ . '/backend/api/cities.php';
            exit;
        case 'pricing':
            require __DIR__ . '/backend/api/pricing.php';
            exit;
        case 'reviews':
            require __DIR__ . '/backend/api/reviews.php';
            exit;
        case 'book':
            require __DIR__ . '/backend/api/book.php';
            exit;
        case 'contact':
            require __DIR__ . '/backend/api/contact.php';
            exit;
        default:
            ApiResponse::error("API endpoint '/api/{$apiEndpoint}' does not exist.", 404);
            exit;
    }
}

// 2. Services Hubs
if ($firstSegment === 'services') {
    if (count($segments) === 1) {
        require __DIR__ . '/frontend/views/services-index.php';
        exit;
    }
    if (count($segments) === 2) {
        $serviceSlug = strtolower($segments[1]);
        if (isset($servicesList[$serviceSlug])) {
            $currentServiceData = $servicesList[$serviceSlug];
            require __DIR__ . '/frontend/views/service-hub.php';
            exit;
        }
    }
}

// 3. City Hubs (e.g. /kashipur/) & City x Service Matrix (e.g. /kashipur/sofa-cleaning/)
if (isset($citiesList[$firstSegment])) {
    $currentCityData = $citiesList[$firstSegment];

    if (count($segments) === 1) {
        // City Hub (/kashipur/)
        require __DIR__ . '/frontend/views/city-hub.php';
        exit;
    }

    if (count($segments) === 2) {
        // City x Service Landing Page (/kashipur/sofa-cleaning/)
        $serviceSlug = strtolower($segments[1]);
        if (isset($servicesList[$serviceSlug])) {
            $currentServiceData = $servicesList[$serviceSlug];
            require __DIR__ . '/frontend/views/city-service.php';
            exit;
        }
    }
}

// 4. Booking Funnel
if ($firstSegment === 'book-now') {
    if (count($segments) === 1) {
        require __DIR__ . '/frontend/views/book-now.php';
        exit;
    }
    if (count($segments) === 2 && strtolower($segments[1]) === 'thank-you') {
        require __DIR__ . '/frontend/views/thank-you.php';
        exit;
    }
}

// 5. Support Pages & Account Dashboard
switch ($firstSegment) {
    case 'account':
    case 'my-account':
    case 'profile':
    case 'rewards':
        require __DIR__ . '/frontend/views/account.php';
        exit;
    case 'about':
    case 'about-us':
        require __DIR__ . '/frontend/views/about.php';
        exit;
    case 'contact':
        require __DIR__ . '/frontend/views/contact.php';
        exit;
    case 'pricing':
        require __DIR__ . '/frontend/views/pricing.php';
        exit;
    case 'gallery':
        require __DIR__ . '/frontend/views/gallery.php';
        exit;
    case 'reviews':
        require __DIR__ . '/frontend/views/reviews.php';
        exit;
}

// 6. 404 Fallback for any unknown route
http_response_code(404);
require __DIR__ . '/frontend/views/404.php';
exit;


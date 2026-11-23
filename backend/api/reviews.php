<?php
/**
 * API: Get Customer Reviews & Testimonials
 * Endpoint: GET /api/reviews
 * Used by: Website & Mobile App
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../helpers/api-response.php';

ApiResponse::init();

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    ApiResponse::error('Method not allowed. Use GET.', 405);
}

$reviews = [
    [
        'id' => 1,
        'customer_name' => 'Vikas Agarwal',
        'city' => 'Kashipur',
        'locality' => 'Awas Vikas Colony',
        'service' => 'Home & Sofa Cleaning',
        'rating' => 5,
        'comment' => 'Industrial area ke pass hamare ghar mein kaali mitti bahut jamti thi. A1 Cleaning ki team ne floor scrubbing aur sofa deep shampooing aisi ki ki ghar naya sa lagne laga. Very polite and professional staff!',
        'date' => '2026-10-14'
    ],
    [
        'id' => 2,
        'customer_name' => 'Rohit Negi',
        'city' => 'Ramnagar',
        'locality' => 'Dhikuli (Corbett)',
        'service' => 'Resort Cottage Deep Cleaning',
        'rating' => 5,
        'comment' => 'Hamare resort ke 6 cottages ki move-in and deep sanitization karwayi thi weekend rush se pehle. Time par aate hain aur machines standard commercial quality ki hain. Highly recommended for Corbett homestays!',
        'date' => '2026-10-28'
    ],
    [
        'id' => 3,
        'customer_name' => 'Mohd. Tariq',
        'city' => 'Jaspur',
        'locality' => 'Subhash Chowk',
        'service' => 'Water Tank Cleaning',
        'rating' => 5,
        'comment' => 'Overhead water tank mein hard water ki moti papdi jam gayi thi. Machine se bilkul saaf kar diya aur paani ab ekdum crystal clear aa raha hai. Rate bhi bilkul reasonable the.',
        'date' => '2026-11-02'
    ]
];

ApiResponse::success([
    'total' => count($reviews),
    'average_rating' => 5.0,
    'reviews' => $reviews
], 'Reviews retrieved successfully.');


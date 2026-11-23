<?php
/**
 * API Response & CORS Helper
 * Formats standardized JSON responses for Website & Mobile App consumption
 */

class ApiResponse {

    /**
     * Send CORS and JSON Headers
     */
    public static function init() {
        // Allow Cross-Origin Requests for Mobile Apps & Web Clients
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, X-API-KEY");
        header("Content-Type: application/json; charset=UTF-8");

        // Handle preflight OPTIONS request
        if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
            http_response_code(200);
            exit;
        }
    }

    /**
     * Validate Client API Key (Optional / Enforceable)
     */
    public static function checkApiKey() {
        $apiKey = $_SERVER['HTTP_X_API_KEY'] ?? $_GET['api_key'] ?? null;
        if (!$apiKey || ($apiKey !== APP_API_KEY_PUBLIC && $apiKey !== APP_API_KEY_SECRET)) {
            self::error('Unauthorized: Invalid or missing X-API-KEY header.', 401);
        }
        return true;
    }

    /**
     * Get Request Body (Supports both JSON payload and standard FormData)
     */
    public static function getRequestData() {
        $contentType = $_SERVER['CONTENT_TYPE'] ?? '';
        if (stripos($contentType, 'application/json') !== false) {
            $rawInput = file_get_contents('php://input');
            $data = json_decode($rawInput, true);
            return is_array($data) ? $data : [];
        }
        return $_POST;
    }

    /**
     * Send Successful JSON Response
     */
    public static function success($data = null, $message = 'Success', $statusCode = 200) {
        self::init();
        http_response_code($statusCode);
        echo json_encode([
            'success' => true,
            'status' => 'success',
            'message' => $message,
            'data' => $data,
            'timestamp' => date('c')
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        exit;
    }

    /**
     * Send Error JSON Response
     */
    public static function error($message = 'An error occurred', $statusCode = 400, $errors = []) {
        self::init();
        http_response_code($statusCode);
        echo json_encode([
            'success' => false,
            'status' => 'error',
            'message' => $message,
            'errors' => $errors,
            'timestamp' => date('c')
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        exit;
    }
}


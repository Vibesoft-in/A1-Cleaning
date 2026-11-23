<?php
/**
 * Security, Anti-Spam & Input Validation Helper
 */

class Security {

    /**
     * Start session safely if not already active
     */
    public static function startSession() {
        if (session_status() === PHP_SESSION_NONE) {
            @session_start();
        }
    }

    /**
     * Generate CSRF Token
     */
    public static function generateCsrfToken() {
        self::startSession();
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }

    /**
     * Validate CSRF Token
     */
    public static function validateCsrfToken($token) {
        self::startSession();
        if (!empty($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token)) {
            return true;
        }
        return false;
    }

    /**
     * Clean & sanitize string inputs
     */
    public static function cleanInput($data) {
        if ($data === null) return '';
        $data = trim($data);
        $data = stripslashes($data);
        return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    }

    /**
     * Validate 10-digit Indian phone numbers
     */
    public static function validateIndianPhone($phone) {
        // Strip non-numeric chars
        $digits = preg_replace('/[^0-9]/', '', $phone);
        if (strlen($digits) === 12 && substr($digits, 0, 2) === '91') {
            $digits = substr($digits, 2);
        }
        if (strlen($digits) === 11 && substr($digits, 0, 1) === '0') {
            $digits = substr($digits, 1);
        }
        return (strlen($digits) === 10 && preg_match('/^[6-9]\d{9}$/', $digits)) ? $digits : false;
    }
}

-- A1 Cleaning MySQL Database Schema
-- Run this in phpMyAdmin or MySQL CLI to create database and tables

CREATE DATABASE IF NOT EXISTS `a1_cleaning` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `a1_cleaning`;

-- 1. Bookings & Lead Capture Table
CREATE TABLE IF NOT EXISTS `bookings` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(150) NOT NULL,
    `phone` VARCHAR(20) NOT NULL,
    `city` VARCHAR(100) NOT NULL,
    `service` VARCHAR(150) NOT NULL,
    `preferred_date` DATE NULL,
    `address` TEXT NULL,
    `message` TEXT NULL,
    `source_page` VARCHAR(255) NULL,
    `status` ENUM('New', 'Contacted', 'Scheduled', 'Completed', 'Cancelled') DEFAULT 'New',
    `ip_address` VARCHAR(45) NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 2. General Inquiries Table (from Contact page)
CREATE TABLE IF NOT EXISTS `inquiries` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(150) NOT NULL,
    `phone` VARCHAR(20) NOT NULL,
    `email` VARCHAR(150) NULL,
    `subject` VARCHAR(200) NULL,
    `message` TEXT NOT NULL,
    `source_page` VARCHAR(255) NULL,
    `status` ENUM('Unread', 'Responded', 'Archived') DEFAULT 'Unread',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


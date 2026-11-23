<?php
/**
 * Mobile Right Sidebar Drawer Component
 * Exact match to user reference architecture:
 * - Slides in smoothly from the right
 * - Branded Deep Green / Fresh Green header with avatar & close button
 * - Quick Action cards (Your Bookings / Need Help)
 * - Navigation links in clean rounded white card with icons & chevron arrows
 * - Quick contact footer with WhatsApp
 */
require_once __DIR__ . '/../../backend/config/config.php';
$servicesList = require __DIR__ . '/../../backend/data/services.php';
?>

<!-- Backdrop Overlay -->
<div class="a1-drawer-backdrop" id="a1-drawer-backdrop" aria-hidden="true"></div>

<!-- Right Slide-out Sidebar Drawer -->
<aside class="a1-right-drawer" id="a1-right-drawer" aria-label="Mobile Navigation Drawer" aria-hidden="true">
  
  <!-- 1. Drawer Header -->
  <div class="a1-drawer-header">
    <div class="a1-drawer-user-block">
      <div class="a1-drawer-avatar">
        <span class="material-symbols-outlined">person</span>
      </div>
      <div class="a1-drawer-user-meta">
        <h3 class="a1-drawer-user-title">Welcome Guest</h3>
        <p class="a1-drawer-user-sub">Doorstep Mechanized Cleaning</p>
      </div>
    </div>
    
    <button type="button" class="a1-drawer-close-btn" id="a1-drawer-close" aria-label="Close menu">
      <span class="material-symbols-outlined">close</span>
    </button>
  </div>

  <div class="a1-drawer-content">

    <!-- 2. Two Quick Action Cards (Side-by-Side) -->
    <div class="a1-drawer-action-cards">
      <a href="<?= SITE_URL ?>/book-now/" class="a1-drawer-action-card">
        <div class="a1-drawer-action-icon bg-mint">
          <span class="material-symbols-outlined text-fresh-green">calendar_month</span>
        </div>
        <div class="a1-drawer-action-info">
          <strong>Your Bookings</strong>
          <span>Book or Track</span>
        </div>
      </a>

      <a href="<?= SITE_URL ?>/contact/" class="a1-drawer-action-card <?= ($currentRoute ?? '') === 'contact' ? 'active' : '' ?>">
        <div class="a1-drawer-action-icon bg-mint">
          <span class="material-symbols-outlined text-fresh-green">support_agent</span>
        </div>
        <div class="a1-drawer-action-info">
          <strong>Contact Us</strong>
          <span>Helpdesk &amp; 24/7 Desk</span>
        </div>
      </a>
    </div>

    <!-- 3. Navigation List Card (Rounded White Card with Icons & Chevrons) -->
    <div class="a1-drawer-nav-card">
      <ul class="a1-drawer-nav-list">
        <li>
          <a href="<?= SITE_URL ?>/" class="a1-drawer-nav-item <?= ($currentRoute ?? '') === 'home' ? 'active' : '' ?>">
            <span class="a1-drawer-item-icon"><span class="material-symbols-outlined">home</span></span>
            <span class="a1-drawer-item-label">Home</span>
            <span class="material-symbols-outlined a1-drawer-arrow">chevron_right</span>
          </a>
        </li>

        <li>
          <a href="<?= SITE_URL ?>/services/" class="a1-drawer-nav-item <?= ($currentRoute ?? '') === 'services' ? 'active' : '' ?>">
            <span class="a1-drawer-item-icon"><span class="material-symbols-outlined">cleaning_services</span></span>
            <span class="a1-drawer-item-label">Services</span>
            <span class="material-symbols-outlined a1-drawer-arrow">chevron_right</span>
          </a>
        </li>

        <li>
          <a href="<?= SITE_URL ?>/pricing/" class="a1-drawer-nav-item <?= ($currentRoute ?? '') === 'pricing' ? 'active' : '' ?>">
            <span class="a1-drawer-item-icon"><span class="material-symbols-outlined">sell</span></span>
            <span class="a1-drawer-item-label">Pricing Studio</span>
            <span class="material-symbols-outlined a1-drawer-arrow">chevron_right</span>
          </a>
        </li>

        <li>
          <a href="<?= SITE_URL ?>/about/" class="a1-drawer-nav-item <?= ($currentRoute ?? '') === 'about' ? 'active' : '' ?>">
            <span class="a1-drawer-item-icon"><span class="material-symbols-outlined">info</span></span>
            <span class="a1-drawer-item-label">About Us</span>
            <span class="material-symbols-outlined a1-drawer-arrow">chevron_right</span>
          </a>
        </li>

        <li>
          <a href="<?= SITE_URL ?>/contact/" class="a1-drawer-nav-item <?= ($currentRoute ?? '') === 'contact' ? 'active' : '' ?>">
            <span class="a1-drawer-item-icon"><span class="material-symbols-outlined">call</span></span>
            <span class="a1-drawer-item-label">Contact Us</span>
            <span class="material-symbols-outlined a1-drawer-arrow">chevron_right</span>
          </a>
        </li>

        <li>
          <a href="<?= SITE_URL ?>/reviews/" class="a1-drawer-nav-item <?= ($currentRoute ?? '') === 'reviews' ? 'active' : '' ?>">
            <span class="a1-drawer-item-icon"><span class="material-symbols-outlined">star</span></span>
            <span class="a1-drawer-item-label">Customer Reviews</span>
            <span class="material-symbols-outlined a1-drawer-arrow">chevron_right</span>
          </a>
        </li>
      </ul>
    </div>

    <!-- 4. Dedicated Contact Us & Helpdesk Section Card -->
    <div class="a1-drawer-contact-card">
      <div class="a1-drawer-contact-head">
        <div class="a1-drawer-contact-badge-icon">
          <span class="material-symbols-outlined text-fresh-green">support_agent</span>
        </div>
        <div class="a1-drawer-contact-head-text">
          <span class="a1-drawer-contact-tag">24/7 CUSTOMER CARE</span>
          <strong class="a1-drawer-contact-title">Contact &amp; Help Desk</strong>
          <p class="a1-drawer-contact-desc">Got questions or need an instant doorstep quote?</p>
        </div>
      </div>
      <div class="a1-drawer-contact-actions">
        <a href="<?= SITE_URL ?>/contact/" class="a1-drawer-contact-btn primary">
          <span class="material-symbols-outlined" style="font-size: 16px;">contact_page</span>
          <span>Contact Us Page</span>
        </a>
        <a href="tel:<?= BUSINESS_PHONE_RAW ?>" class="a1-drawer-contact-btn secondary" aria-label="Call +91 79063 66271">
          <span class="material-symbols-outlined" style="font-size: 16px;">call</span>
          <span>Call Desk</span>
        </a>
      </div>
    </div>

    <!-- 4. Sign In / My Account Card (Matching Refixel App Architecture) -->
    <div class="a1-drawer-auth-card">
      <a href="<?= SITE_URL ?>/my-account/" class="a1-drawer-auth-link">
        <div class="a1-drawer-auth-icon">
          <span class="material-symbols-outlined">person</span>
        </div>
        <div class="a1-drawer-auth-text">
          <strong>Sign In / My Account</strong>
          <span>Manage bookings &amp; CleanCoins</span>
        </div>
        <span class="material-symbols-outlined a1-drawer-arrow">chevron_right</span>
      </a>
    </div>

    <!-- 5. Drawer Footer Contact & Socials -->
    <div class="a1-drawer-footer-card">
      <a href="https://wa.me/917906366271?text=Hi%20A1%20Cleaning,%20I%20need%20a%20doorstep%20cleaning%20quote." target="_blank" rel="noopener" class="a1-drawer-whatsapp-btn">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="#FFFFFF" aria-hidden="true" style="flex-shrink: 0;">
          <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.275.015.376-.101c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12 0 2.115.547 4.102 1.504 5.835l-1.596 5.83 5.968-1.566c1.674.912 3.585 1.401 5.624 1.401 6.627 0 12-5.373 12-12 0-6.627-5.373-12-12-12zm0 21.6c-1.848 0-3.565-.544-5.017-1.48l-.36-.233-3.725.977.994-3.629-.255-.407c-1.042-1.661-1.637-3.626-1.637-5.828 0-5.293 4.307-9.6 9.6-9.6 5.293 0 9.6 4.307 9.6 9.6 0 5.293-4.307 9.6-9.6 9.6z"/>
        </svg>
        <span>Chat on WhatsApp</span>
      </a>

      <div class="a1-drawer-socials">
        <span class="a1-drawer-socials-label">Follow A1 Cleaning</span>
        <div class="a1-drawer-social-icons">
          <a href="https://facebook.com" target="_blank" rel="noopener" aria-label="Facebook">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
          <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </a>
          <a href="https://youtube.com" target="_blank" rel="noopener" aria-label="YouTube">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
          </a>
        </div>
      </div>
      
      <div class="a1-drawer-service-cities">
        <span class="material-symbols-outlined icon-xs text-fresh-green">location_on</span>
        <span>Serving: <strong>Kashipur</strong> • <strong>Jaspur</strong> • <strong>Ramnagar</strong></span>
      </div>
    </div>

  </div>

</aside>

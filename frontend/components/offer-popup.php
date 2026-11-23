<?php
/**
 * Promotional Offer POSTER Modal Component
 * Matches Target Reference Poster Layout 1:1 with High-Fidelity Visuals
 * Strict 4-Color Theme: Deep Green (#0B2922), Fresh Green (#22A06B), Soft Mint (#EAF3EE), White (#FFFFFF)
 */
?>

<!-- Promotional Offer Poster Modal -->
<div id="offer-modal-overlay" class="offer-modal-overlay" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="poster-main-title">
  <div class="offer-poster-container">
    
    <!-- Top-Left & Bottom-Right Decorative Corner Swooshes (A1 Theme) -->
    <div class="poster-decor-swoosh top-left">
      <svg viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0C60 0 160 50 160 160H0V0Z" fill="url(#swoosh-grad-tl)" opacity="0.18"/>
        <path d="M0 0C40 0 120 40 120 120H0V0Z" fill="url(#swoosh-grad-tl-inner)" opacity="0.25"/>
        <defs>
          <linearGradient id="swoosh-grad-tl" x1="0" y1="0" x2="160" y2="160" gradientUnits="userSpaceOnUse">
            <stop stop-color="#22A06B"/>
            <stop offset="1" stop-color="#EAF3EE" stop-opacity="0"/>
          </linearGradient>
          <linearGradient id="swoosh-grad-tl-inner" x1="0" y1="0" x2="120" y2="120" gradientUnits="userSpaceOnUse">
            <stop stop-color="#22A06B"/>
            <stop offset="1" stop-color="#22A06B" stop-opacity="0"/>
          </linearGradient>
        </defs>
      </svg>
    </div>

    <div class="poster-decor-swoosh bottom-right">
      <svg viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M160 160C100 160 0 110 0 0H160V160Z" fill="url(#swoosh-grad-br)" opacity="0.18"/>
        <path d="M160 160C120 160 40 120 40 40H160V160Z" fill="url(#swoosh-grad-br-inner)" opacity="0.25"/>
        <defs>
          <linearGradient id="swoosh-grad-br" x1="160" y1="160" x2="0" y2="0" gradientUnits="userSpaceOnUse">
            <stop stop-color="#22A06B"/>
            <stop offset="1" stop-color="#EAF3EE" stop-opacity="0"/>
          </linearGradient>
          <linearGradient id="swoosh-grad-br-inner" x1="160" y1="160" x2="40" y2="40" gradientUnits="userSpaceOnUse">
            <stop stop-color="#22A06B"/>
            <stop offset="1" stop-color="#22A06B" stop-opacity="0"/>
          </linearGradient>
        </defs>
      </svg>
    </div>

    <!-- Floating Close Button (Top Right) -->
    <button type="button" class="poster-close-btn" id="offer-modal-close-btn" aria-label="Close offer poster">
      <span class="material-symbols-outlined">close</span>
    </button>

    <!-- Poster Header Area -->
    <div class="poster-header-wrap">
      
      <!-- Top Pill Badge with Spark Marks -->
      <div class="poster-pill-badge-wrap">
        <svg class="poster-sparks left" width="22" height="18" viewBox="0 0 24 20" fill="none">
          <line x1="2" y1="10" x2="8" y2="10" stroke="#22A06B" stroke-width="2.5" stroke-linecap="round"/>
          <line x1="5" y1="3" x2="10" y2="7" stroke="#22A06B" stroke-width="2.5" stroke-linecap="round"/>
          <line x1="5" y1="17" x2="10" y2="13" stroke="#22A06B" stroke-width="2.5" stroke-linecap="round"/>
        </svg>
        <div class="poster-top-pill">
          <span class="material-symbols-outlined icon-xs">bolt</span>
          <span>LIMITED TIME DEALS</span>
        </div>
        <svg class="poster-sparks right" width="22" height="18" viewBox="0 0 24 20" fill="none">
          <line x1="22" y1="10" x2="16" y2="10" stroke="#22A06B" stroke-width="2.5" stroke-linecap="round"/>
          <line x1="19" y1="3" x2="14" y2="7" stroke="#22A06B" stroke-width="2.5" stroke-linecap="round"/>
          <line x1="19" y1="17" x2="14" y2="13" stroke="#22A06B" stroke-width="2.5" stroke-linecap="round"/>
        </svg>
      </div>

      <!-- Main Headline: Doorstep Special Offers -->
      <h2 id="poster-main-title" class="poster-headline">
        <span class="text-deep-green">Doorstep</span> <span class="text-fresh-green">Special Offers</span>
      </h2>

      <!-- Subtitle with side divider lines -->
      <div class="poster-subline-wrap">
        <span class="subline-divider"></span>
        <span class="poster-subtitle">Professional Home Cleaning at Your Doorstep</span>
        <span class="subline-divider"></span>
      </div>
    </div>

    <!-- 3 Horizontal Deal Cards (Exact Layout as Reference Image) -->
    <div class="poster-deals-list">
      
      <!-- Deal Card 1 (Top / Best Deal): Buy 2 Get 1 FREE -->
      <div class="poster-deal-card deal-best-deal">
        <div class="deal-card-media">
          <img src="<?= SITE_URL ?>/assets/images/services/sofa-cleaning.jpg" alt="Sofa & Fabric Upholstery Cleaning">
          <div class="deal-media-badge badge-fire">
            <span class="material-symbols-outlined icon-xs">local_fire_department</span>
            <span>BEST DEAL</span>
          </div>
        </div>
        <div class="deal-card-content">
          <h3 class="deal-title">
            Book 2, Get 1 <span class="deal-free-pill">FREE</span>
          </h3>
          <div class="deal-coupon-dashed" onclick="copyCouponCode('BUY2GET1', this)" title="Click to copy coupon code">
            <span class="coupon-txt">Code: <strong class="coupon-highlight">BUY2GET1</strong></span>
            <span class="coupon-copy-icon"><span class="material-symbols-outlined icon-xs">content_copy</span></span>
          </div>
        </div>
      </div>

      <!-- Deal Card 2 (Middle): Full Home Deep Clean 25% OFF -->
      <div class="poster-deal-card deal-discount">
        <div class="deal-card-media">
          <img src="<?= SITE_URL ?>/assets/images/services/home-cleaning.jpg" alt="Full Home Deep Cleaning Service">
          <div class="deal-media-badge badge-bolt">
            <span class="material-symbols-outlined icon-xs">bolt</span>
            <span>25% OFF</span>
          </div>
        </div>
        <div class="deal-card-content">
          <h3 class="deal-title">Full Home Deep Clean</h3>
          <div class="deal-coupon-dashed" onclick="copyCouponCode('HOME25', this)" title="Click to copy coupon code">
            <span class="coupon-txt">Code: <strong class="coupon-highlight">HOME25</strong></span>
            <span class="coupon-copy-icon"><span class="material-symbols-outlined icon-xs">content_copy</span></span>
          </div>
        </div>
      </div>

      <!-- Deal Card 3 (Bottom): 6-Stage UV Tank Disinfection -->
      <div class="poster-deal-card deal-uv">
        <div class="deal-card-media">
          <img src="<?= SITE_URL ?>/assets/images/services/water-tank-cleaning.jpg" alt="UV Water Tank Disinfection">
          <div class="deal-media-badge badge-water">
            <span class="material-symbols-outlined icon-xs">water_drop</span>
            <span>FREE UV</span>
          </div>
        </div>
        <div class="deal-card-content">
          <h3 class="deal-title">6-Stage UV Tank Disinfection</h3>
          <div class="deal-coupon-dashed" onclick="copyCouponCode('FREETANK', this)" title="Click to copy coupon code">
            <span class="coupon-txt">Code: <strong class="coupon-highlight">FREETANK</strong></span>
            <span class="coupon-copy-icon"><span class="material-symbols-outlined icon-xs">content_copy</span></span>
          </div>
        </div>
      </div>

    </div>

    <!-- Trust Badges Row (3 columns) -->
    <div class="poster-trust-row">
      <div class="poster-trust-item">
        <span class="material-symbols-outlined trust-icon">verified_user</span>
        <span>Verified Staff</span>
      </div>
      <div class="poster-trust-item">
        <span class="material-symbols-outlined trust-icon">health_and_safety</span>
        <span>Safe &amp; Hygienic</span>
      </div>
      <div class="poster-trust-item">
        <span class="material-symbols-outlined trust-icon">eco</span>
        <span>Eco-Friendly</span>
      </div>
    </div>

    <!-- Dual Action CTA Buttons (Pill Shapes) -->
    <div class="poster-actions-row">
      <a href="<?= SITE_URL ?>/book-now/?coupon=BUY2GET1" class="btn-poster-primary">
        <span class="material-symbols-outlined icon-sm">calendar_month</span>
        <span>Book Now</span>
        <span class="material-symbols-outlined icon-sm">arrow_forward</span>
      </a>
      <a href="https://wa.me/917906366271?text=Hi%20A1%20Cleaning,%20I%20want%20to%20claim%20the%20Special%20Offers%20(Code:%20BUY2GET1)" target="_blank" rel="noopener" class="btn-poster-whatsapp">
        <span class="material-symbols-outlined icon-sm">chat</span>
        <span>Claim on WhatsApp</span>
      </a>
    </div>

  </div>
</div>

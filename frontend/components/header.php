<?php
/**
 * Header Component - Exact 1:1 Ditto OwnWash UI Architecture for A1 Cleaning
 * Color Palette:
 * - Deep Green:  #0B2922
 * - Fresh Green: #22A06B
 * - Soft Mint:   #EAF3EE
 * - White:       #FFFFFF
 */
require_once __DIR__ . '/../../backend/config/config.php';
require_once __DIR__ . '/icons.php';
$servicesList = require __DIR__ . '/../../backend/data/services.php';
$citiesList = require __DIR__ . '/../../backend/data/cities.php';
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  
  <!-- Primary Meta Tags -->
  <title><?= htmlspecialchars($pageTitle ?? BUSINESS_NAME . ' – Doorstep Cleaning & Detailing Services') ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription ?? 'India\'s trusted doorstep cleaning service in Kashipur, Jaspur & Ramnagar. Mechanized sofa, tank, kitchen, carpet & home cleaning. Call ' . BUSINESS_PHONE) ?>">
  <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl ?? CANONICAL_DOMAIN . '/') ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
  
  <!-- Google Material Symbols Outlined -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  
  <!-- Stylesheet with Cache Busting -->
  <link rel="stylesheet" href="<?= SITE_URL ?>/assets/css/style.css?v=<?= filemtime(__DIR__ . '/../../assets/css/style.css') ?>">
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?= SITE_URL ?>/assets/images/brand/logo-round-badge.png">
  <link rel="apple-touch-icon" href="<?= SITE_URL ?>/assets/images/brand/logo-round-badge.png">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl ?? CANONICAL_DOMAIN . '/') ?>">
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle ?? BUSINESS_NAME) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($pageDescription ?? BUSINESS_TAGLINE) ?>">
  <meta property="og:image" content="<?= SITE_URL ?>/assets/images/brand/logo-horizontal.png">
  <meta property="og:locale" content="en_IN">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle ?? BUSINESS_NAME) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription ?? BUSINESS_TAGLINE) ?>">
  <meta name="twitter:image" content="<?= SITE_URL ?>/assets/images/brand/logo-horizontal.png">

  <?php if (!empty($isNoIndex)): ?>
    <meta name="robots" content="noindex, nofollow">
  <?php else: ?>
    <meta name="robots" content="index, follow">
  <?php endif; ?>

  <!-- JSON-LD Structured Data Schema -->
  <?php if (!empty($pageSchemaJson)): ?>
    <script type="application/ld+json">
      <?= $pageSchemaJson ?>
    </script>
  <?php endif; ?>
</head>
<body>

  <!-- =========================================================================
       1. TOP ANNOUNCEMENT MARQUEE BAR (CONTINUOUS SEAMLESS LOOP)
       ========================================================================= -->
  <aside class="ownwash-topbar ownwash-marquee-bar" aria-label="Offers Announcement Bar">
    <div class="marquee-track">
      <!-- Group 1 -->
      <div class="marquee-content">
        <span class="marquee-item"><span class="material-symbols-outlined icon-xs text-fresh-green">local_fire_department</span> <strong>Mega Combo Offer:</strong> Book 2 Services, Get 1 Bathroom Deep Clean <strong>100% FREE</strong> • Code: <code>BUY2GET1</code></span>
        <span class="marquee-sep">•</span>
        <span class="marquee-item"><span class="material-symbols-outlined icon-xs text-fresh-green">bolt</span> Flat <strong>25% OFF</strong> on Full Home Deep Cleaning • Code: <code>HOME25</code></span>
        <span class="marquee-sep">•</span>
        <span class="marquee-item"><span class="material-symbols-outlined icon-xs text-fresh-green">water_drop</span> <strong>Free 6-Stage UV Tank Disinfection</strong> on Full Home Wash • Code: <code>FREETANK</code></span>
        <span class="marquee-sep">•</span>
        <span class="marquee-item"><span class="material-symbols-outlined icon-xs text-fresh-green">verified</span> Zero Advance Payment • Pay After 100% Satisfaction</span>
        <span class="marquee-sep">•</span>
        <span class="marquee-item"><span class="material-symbols-outlined icon-xs text-fresh-green">location_on</span> Doorstep Mechanized Service in Kashipur, Jaspur &amp; Ramnagar</span>
        <span class="marquee-sep">•</span>
        <span class="marquee-item"><span class="material-symbols-outlined icon-xs text-fresh-green">eco</span> 100% Eco-Safe Chemicals &amp; German High-Pressure Machines</span>
        <span class="marquee-sep">•</span>
      </div>
      <!-- Group 2 (Duplicate for Seamless Infinite Loop) -->
      <div class="marquee-content" aria-hidden="true">
        <span class="marquee-item"><span class="material-symbols-outlined icon-xs text-fresh-green">local_fire_department</span> <strong>Mega Combo Offer:</strong> Book 2 Services, Get 1 Bathroom Deep Clean <strong>100% FREE</strong> • Code: <code>BUY2GET1</code></span>
        <span class="marquee-sep">•</span>
        <span class="marquee-item"><span class="material-symbols-outlined icon-xs text-fresh-green">bolt</span> Flat <strong>25% OFF</strong> on Full Home Deep Cleaning • Code: <code>HOME25</code></span>
        <span class="marquee-sep">•</span>
        <span class="marquee-item"><span class="material-symbols-outlined icon-xs text-fresh-green">water_drop</span> <strong>Free 6-Stage UV Tank Disinfection</strong> on Full Home Wash • Code: <code>FREETANK</code></span>
        <span class="marquee-sep">•</span>
        <span class="marquee-item"><span class="material-symbols-outlined icon-xs text-fresh-green">verified</span> Zero Advance Payment • Pay After 100% Satisfaction</span>
        <span class="marquee-sep">•</span>
        <span class="marquee-item"><span class="material-symbols-outlined icon-xs text-fresh-green">location_on</span> Doorstep Mechanized Service in Kashipur, Jaspur &amp; Ramnagar</span>
        <span class="marquee-sep">•</span>
        <span class="marquee-item"><span class="material-symbols-outlined icon-xs text-fresh-green">eco</span> 100% Eco-Safe Chemicals &amp; German High-Pressure Machines</span>
        <span class="marquee-sep">•</span>
      </div>
    </div>
  </aside>

  <!-- =========================================================================
       2. MAIN HEADER BAR (DEEP GREEN #0B2922 BACKGROUND - OWNWASH DITTO STYLE)
       Logo | Search Bar | Sign In | Wishlist (0) | Cart (0)
       ========================================================================= -->
  <header class="ownwash-main-header">
    <div class="container header-grid-row">
      
      <!-- Logo Left -->
      <a href="<?= SITE_URL ?>/" class="site-logo" aria-label="A1 Cleaning Homepage">
        <img src="<?= SITE_URL ?>/assets/images/brand/logo-horizontal-white.png" alt="A1 Cleaning Logo" width="180" height="46">
      </a>

      <!-- Center Search Bar with Google Material Search Icon -->
      <div class="ownwash-search-wrap">
        <input 
          type="text" 
          id="ownwash-search-input" 
          class="ownwash-search-field" 
          placeholder="Search for products, categories or brands..." 
          autocomplete="off"
        >
        <button type="button" class="ownwash-search-icon-btn" aria-label="Search">
          <span class="material-symbols-outlined">search</span>
        </button>
      </div>

      <!-- Right Header Tools: Sign In, Wishlist, Cart -->
      <div class="ownwash-header-tools">
        
        <!-- My Account / Profile -->
        <a href="<?= SITE_URL ?>/my-account/" class="tool-link sign-in-tool">
          <span class="material-symbols-outlined tool-main-icon">person</span>
          <div class="tool-text-group">
            <span class="tool-tiny">My Account</span>
            <span class="tool-main">50 Coins 🪙</span>
          </div>
        </a>

        <!-- Helpline Number with Interactive Dropdown (Before Wishlist & Cart) -->
        <div class="header-helpline-dropdown" id="header-helpline-container">
          <button type="button" class="tool-link helpline-tool-btn" id="helpline-dropdown-trigger" aria-haspopup="true" aria-expanded="false" aria-label="Customer Helpline">
            <span class="material-symbols-outlined tool-main-icon helpline-icon-pulse">call</span>
            <div class="tool-text-group">
              <span class="tool-tiny">24/7 Helpline</span>
              <span class="tool-main d-flex align-center gap-1">
                <span>+91 79063 66271</span>
                <span class="material-symbols-outlined icon-xs dropdown-caret">expand_more</span>
              </span>
            </div>
          </button>
          
          <!-- Dropdown Element -->
          <div class="helpline-dropdown-menu" id="header-helpline-menu" role="menu">
            <div class="helpline-menu-header">
              <span class="live-status-dot"></span>
              <span class="live-status-text">Available Now (8 AM – 9 PM)</span>
            </div>
            <div class="helpline-menu-body">
              <a href="tel:<?= BUSINESS_PHONE_RAW ?>" class="helpline-menu-item call-item" role="menuitem">
                <div class="helpline-item-icon bg-mint">
                  <span class="material-symbols-outlined icon-sm text-fresh-green">phone_in_talk</span>
                </div>
                <div class="helpline-item-info">
                  <strong>Direct Phone Call</strong>
                  <span class="phone-num-display"><?= BUSINESS_PHONE ?></span>
                  <span class="helpline-item-desc">Instant quotes &amp; doorstep booking</span>
                </div>
                <span class="material-symbols-outlined icon-xs item-arrow">arrow_forward</span>
              </a>

              <a href="https://wa.me/917906366271?text=Hi%20A1%20Cleaning,%20I%20want%20to%20get%20a%20doorstep%20cleaning%20quote." target="_blank" rel="noopener" class="helpline-menu-item whatsapp-item" role="menuitem">
                <div class="helpline-item-icon bg-fresh-green text-white">
                  <span class="material-symbols-outlined icon-sm">chat</span>
                </div>
                <div class="helpline-item-info">
                  <strong>WhatsApp Instant Quote</strong>
                  <span class="phone-num-display">Share photos for quick estimate</span>
                  <span class="helpline-item-desc">Replies in under 5 minutes</span>
                </div>
                <span class="material-symbols-outlined icon-xs item-arrow">arrow_forward</span>
              </a>
            </div>
            
            <div class="helpline-menu-footer">
              <span class="material-symbols-outlined icon-xs text-fresh-green">location_on</span>
              <span>Serving: <strong>Kashipur</strong> • <strong>Jaspur</strong> • <strong>Ramnagar</strong></span>
            </div>
          </div>
        </div>

        <!-- Wishlist Icon with 0 Badge -->
        <a href="<?= SITE_URL ?>/services/" class="tool-link icon-badge-tool" aria-label="Wishlist">
          <span class="tool-icon-wrapper">
            <span class="material-symbols-outlined tool-main-icon">favorite_border</span>
            <span class="tool-count-badge">0</span>
          </span>
        </a>

        <!-- Cart Icon with 0 Badge -->
        <a href="<?= SITE_URL ?>/book-now/" class="tool-link icon-badge-tool" aria-label="Cart">
          <span class="tool-icon-wrapper">
            <span class="material-symbols-outlined tool-main-icon">shopping_cart</span>
            <span class="tool-count-badge">0</span>
          </span>
        </a>

      </div>

    </div>
  </header>

  <!-- =========================================================================
       3. SUB-NAVIGATION BAR (PURE WHITE #FFFFFF - OWNWASH DITTO STYLE)
       Home | Service | About Us | Contact | Franchise | Review | Top Services v
       ========================================================================= -->
  <nav class="ownwash-subnav" aria-label="Sub Navigation">
    <div class="container d-flex justify-between align-center">
      
      <!-- Left / Center Links -->
      <ul class="subnav-links-list" id="main-nav-menu">
        <li>
          <a href="<?= SITE_URL ?>/" class="subnav-link <?= ($currentRoute ?? '') === 'home' ? 'active' : '' ?>">Home</a>
        </li>
        <li>
          <a href="<?= SITE_URL ?>/services/" class="subnav-link <?= ($currentRoute ?? '') === 'services' ? 'active' : '' ?>">Services</a>
        </li>
        <li>
          <a href="<?= SITE_URL ?>/about/" class="subnav-link <?= ($currentRoute ?? '') === 'about' ? 'active' : '' ?>">About Us</a>
        </li>
        <li>
          <a href="<?= SITE_URL ?>/contact/" class="subnav-link <?= ($currentRoute ?? '') === 'contact' ? 'active' : '' ?>">Contact</a>
        </li>
        <li>
          <a href="<?= SITE_URL ?>/pricing/" class="subnav-link <?= ($currentRoute ?? '') === 'pricing' ? 'active' : '' ?>">Pricing</a>
        </li>
        <li>
          <a href="<?= SITE_URL ?>/reviews/" class="subnav-link <?= ($currentRoute ?? '') === 'reviews' ? 'active' : '' ?>">Reviews</a>
        </li>
      </ul>

      <!-- Right: Top Services Dropdown -->
      <div class="subnav-right-dropdown" id="top-services-trigger">
        <span class="dropdown-label">Top Services <span class="material-symbols-outlined icon-sm">expand_more</span></span>
        <div class="subnav-dropdown-menu" id="top-services-menu">
          <?php foreach ($servicesList as $sSlug => $sData): ?>
            <a href="<?= SITE_URL ?>/services/<?= $sSlug ?>/" class="subnav-dropdown-item">
              <?= htmlspecialchars($sData['name']) ?> (<?= $sData['starting_price'] ?>)
            </a>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </nav>

  <!-- Mobile Right Sidebar Drawer Component -->
  <?php require __DIR__ . '/mobile-drawer.php'; ?>

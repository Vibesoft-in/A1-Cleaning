<?php
/**
 * My Account & Loyalty Rewards Portal View: /my-account/
 * Features a modern Left Sidebar with multi-tab navigation:
 * 1. Overview (Quick stats, active milestone trackbar, recent activity)
 * 2. Active Coupons (All 3 live vouchers with 1-click copy & book)
 * 3. Coin Wallet (CleanCoins balance, rules, transactions)
 * 4. Cleaning History (Detailed past bookings, status, re-book)
 * 5. Settings & Addresses (Profile edit, saved doorstep addresses, preferences)
 * Strict 4-Color Theme: Deep Green (#0B2922), Fresh Green (#22A06B), Soft Mint (#EAF3EE), White (#FFFFFF)
 */
require_once __DIR__ . '/../components/icons.php';

$pageTitle = "My Account & CleanCoins™ Rewards – A1 Cleaning";
$pageDescription = "Manage your A1 Cleaning profile, saved doorstep addresses, view CleanCoins wallet balance, active coupons, and track past cleaning history.";
$canonicalUrl = SeoHelper::getCanonicalUrl('my-account');
$currentRoute = 'account';
$hideFooter = true;

require __DIR__ . '/../components/header.php';
?>

<main class="account-portal-fullpage">
  
  <!-- =====================================================================
       PERMANENT LEFT SIDEBAR NAVIGATION (Flush to Left Screen Edge)
       ===================================================================== -->
  <aside class="account-permanent-sidebar" aria-label="Account Navigation">
        
        <!-- User Profile Mini Card -->
        <div class="sidebar-user-card">
          <div class="user-avatar-wrap">
            <span class="user-avatar-initial" id="sidebar-avatar-initial">G</span>
            <span class="user-online-dot" title="Account Active"></span>
          </div>
          <div class="user-details">
            <h2 class="user-display-name" id="sidebar-user-name">Gaurav Bisht</h2>
            <span class="user-membership-pill">
              <span class="material-symbols-outlined icon-xs">verified</span> CleanClub™ Member
            </span>
            <span class="user-phone-meta" id="sidebar-user-phone">
              <span class="material-symbols-outlined icon-xs">call</span> +91 79063 66271
            </span>
          </div>
        </div>

        <!-- Mobile Active Tab Indicator & Filter Trigger (Shown only on <= 991px) -->
        <div class="account-mobile-tab-pill-bar" id="account-mobile-tab-pill-bar" onclick="window.openAccountMobileDrawer && window.openAccountMobileDrawer()" title="Tap to switch tabs">
          <div class="mobile-tab-pill-left">
            <span class="material-symbols-outlined mobile-tab-pill-icon" id="mobile-pill-icon">dashboard</span>
            <div class="mobile-tab-pill-text">
              <span class="mobile-tab-pill-sub">ACTIVE TAB</span>
              <strong class="mobile-tab-pill-title" id="mobile-pill-title">Overview</strong>
            </div>
          </div>
          <button type="button" class="mobile-tab-filter-trigger" aria-label="Open Filter Menu">
            <span class="material-symbols-outlined icon-xs">tune</span>
            <span>Tabs</span>
            <span class="mobile-trigger-badge" id="mobile-trigger-coupons-badge">3</span>
            <span class="material-symbols-outlined icon-xs">keyboard_arrow_down</span>
          </button>
        </div>

        <!-- Sidebar Navigation Menu -->
        <nav class="sidebar-nav-menu">
          <ul class="sidebar-nav-list" role="tablist">
            
            <!-- 1. Overview -->
            <li class="nav-item" role="presentation">
              <button type="button" class="sidebar-nav-link active" data-tab-target="tab-overview" role="tab" aria-selected="true" id="nav-btn-overview">
                <span class="material-symbols-outlined nav-icon">dashboard</span>
                <span class="nav-label">Overview</span>
              </button>
            </li>

            <!-- 2. Active Coupons -->
            <li class="nav-item" role="presentation">
              <button type="button" class="sidebar-nav-link" data-tab-target="tab-coupons" role="tab" aria-selected="false" id="nav-btn-coupons">
                <span class="material-symbols-outlined nav-icon">local_activity</span>
                <span class="nav-label">Active Coupons</span>
                <span class="nav-badge-pill">3</span>
              </button>
            </li>

            <!-- 3. Coin Wallet -->
            <li class="nav-item" role="presentation">
              <button type="button" class="sidebar-nav-link" data-tab-target="tab-wallet" role="tab" aria-selected="false" id="nav-btn-wallet">
                <span class="material-symbols-outlined nav-icon">account_balance_wallet</span>
                <span class="nav-label">Coin Wallet</span>
                <span class="nav-coins-badge" id="sidebar-coins-badge">50 🪙</span>
              </button>
            </li>

            <!-- 4. Cleaning History -->
            <li class="nav-item" role="presentation">
              <button type="button" class="sidebar-nav-link" data-tab-target="tab-history" role="tab" aria-selected="false" id="nav-btn-history">
                <span class="material-symbols-outlined nav-icon">history</span>
                <span class="nav-label">Cleaning History</span>
                <span class="nav-badge-subtle">1</span>
              </button>
            </li>

            <!-- 5. Invoices & Receipts -->
            <li class="nav-item" role="presentation">
              <button type="button" class="sidebar-nav-link" data-tab-target="tab-invoices" role="tab" aria-selected="false" id="nav-btn-invoices">
                <span class="material-symbols-outlined nav-icon">receipt_long</span>
                <span class="nav-label">Invoices</span>
                <span class="nav-badge-subtle">1</span>
              </button>
            </li>

            <!-- 6. Settings & Addresses -->
            <li class="nav-item" role="presentation">
              <button type="button" class="sidebar-nav-link" data-tab-target="tab-settings" role="tab" aria-selected="false" id="nav-btn-settings">
                <span class="material-symbols-outlined nav-icon">settings</span>
                <span class="nav-label">Settings &amp; Addresses</span>
              </button>
            </li>

          </ul>
        </nav>

        <!-- Sidebar Support Help Box -->
        <div class="sidebar-help-widget">
          <div class="help-head">
            <span class="material-symbols-outlined icon-sm text-fresh-green">support_agent</span>
            <strong>Need Assistance?</strong>
          </div>
          <p class="help-sub">Contact our Kashipur customer care for custom quotes or slot changes.</p>
          <a href="https://wa.me/917906366271?text=Hi%20A1%20Cleaning,%20I%20need%20help%20with%20my%20account" target="_blank" rel="noopener" class="btn btn-whatsapp-sm">
            <span class="material-symbols-outlined icon-xs">chat</span> WhatsApp Help
          </a>
        </div>

        <!-- Sidebar Sign Out Action -->
        <div class="sidebar-logout-wrap">
          <a href="<?= SITE_URL ?>/" class="sidebar-logout-link" onclick="if(confirm('Are you sure you want to log out?')){ alert('Logged out successfully.'); }">
            <span class="material-symbols-outlined icon-sm">logout</span>
            <span>Sign Out</span>
          </a>
        </div>

      </aside>

  <!-- =====================================================================
       RIGHT MAIN CONTENT AREA (Scrolls Naturally, Sidebar Stays Permanent)
       ===================================================================== -->
  <section class="account-right-main">
    
    <!-- Portal Top Bar inside Main Area -->
    <div class="account-main-topbar">
      <h1 class="greeting-heading">My Account &amp; Rewards</h1>
      <div class="topbar-action-group">
        <a href="<?= SITE_URL ?>/book-now/" class="btn btn-action greeting-book-btn">
          <span class="material-symbols-outlined icon-sm">add</span> Book New Cleaning
        </a>
      </div>
    </div>

    <!-- Tabs Wrapper -->
    <div class="account-tabs-wrapper">

      <!-- ===================================================================
           TAB 1: OVERVIEW PANEL
           =================================================================== -->
      <div class="account-tab-panel active" id="tab-overview" role="tabpanel" aria-labelledby="nav-btn-overview">
          
          <!-- 4 Quick Stats Cards -->
          <div class="overview-stats-grid">
            
            <!-- Stat 1: CleanCoins -->
            <div class="stat-metric-card" onclick="switchAccountTab('tab-wallet')">
              <div class="metric-icon-box bg-mint">
                <span class="material-symbols-outlined">toll</span>
              </div>
              <div class="metric-data">
                <span class="metric-val" id="stat-coins-val">50 CleanCoins</span>
                <span class="metric-label">Worth ₹200 Savings</span>
              </div>
              <span class="metric-arrow"><span class="material-symbols-outlined icon-xs">arrow_forward</span></span>
            </div>

            <!-- Stat 2: Milestone -->
            <div class="stat-metric-card">
              <div class="metric-icon-box bg-green">
                <span class="material-symbols-outlined">military_tech</span>
              </div>
              <div class="metric-data">
                <span class="metric-val">1 of 5 Completed</span>
                <span class="metric-label">Road to Free Service (20%)</span>
              </div>
            </div>

            <!-- Stat 3: Active Coupons -->
            <div class="stat-metric-card" onclick="switchAccountTab('tab-coupons')">
              <div class="metric-icon-box bg-mint">
                <span class="material-symbols-outlined">confirmation_number</span>
              </div>
              <div class="metric-data">
                <span class="metric-val">3 Active Coupons</span>
                <span class="metric-label">Save Up to 25% + Free Wash</span>
              </div>
              <span class="metric-arrow"><span class="material-symbols-outlined icon-xs">arrow_forward</span></span>
            </div>

            <!-- Stat 4: Tax Invoices & Receipts -->
            <div class="stat-metric-card" onclick="switchAccountTab('tab-invoices')">
              <div class="metric-icon-box bg-mint">
                <span class="material-symbols-outlined text-fresh-green">receipt_long</span>
              </div>
              <div class="metric-data">
                <span class="metric-val">1 Paid Invoice</span>
                <span class="metric-label">#INV-9482 (₹1,199) • PDF</span>
              </div>
              <span class="metric-arrow"><span class="material-symbols-outlined icon-xs">arrow_forward</span></span>
            </div>

          </div>

          <!-- Highlight 1: 5-Service Milestone Progress Tracker Card -->
          <div class="panel-card milestone-overview-card">
            <div class="card-header-flex">
              <div>
                <span class="panel-tag-kicker">Milestone Reward Program</span>
                <h3 class="panel-card-title">Road to 1 FREE Doorstep Service</h3>
              </div>
              <span class="status-pill-green">1 / 5 Completed (20%)</span>
            </div>

            <p class="panel-card-sub">
              Book doorstep cleanings across Kashipur, Jaspur or Ramnagar. On your <strong>5th cleaning</strong>, receive any service up to <strong>₹1,000 completely FREE</strong>!
            </p>

            <!-- Visual 5-Node Trackbar -->
            <div class="account-track-wrap">
              <div class="track-bar-rail">
                <div class="track-bar-fill" style="width: 20%;"></div>
              </div>
              <div class="track-steps-grid">
                
                <div class="track-step-node node-completed">
                  <div class="step-bullet"><span class="material-symbols-outlined icon-xs">check</span></div>
                  <div class="step-meta">
                    <strong>1st Service</strong>
                    <span>Completed ✓</span>
                  </div>
                </div>

                <div class="track-step-node node-active">
                  <div class="step-bullet">2</div>
                  <div class="step-meta">
                    <strong>2nd Service</strong>
                    <span class="text-fresh-green">Next Goal</span>
                  </div>
                </div>

                <div class="track-step-node">
                  <div class="step-bullet">3</div>
                  <div class="step-meta">
                    <strong>3rd Service</strong>
                    <span>+50 Coins</span>
                  </div>
                </div>

                <div class="track-step-node">
                  <div class="step-bullet">4</div>
                  <div class="step-meta">
                    <strong>4th Service</strong>
                    <span>+50 Coins</span>
                  </div>
                </div>

                <div class="track-step-node node-reward">
                  <div class="step-bullet reward-bullet"><span class="material-symbols-outlined icon-xs">card_giftcard</span></div>
                  <div class="step-meta">
                    <strong class="text-fresh-green">5th Service</strong>
                    <span class="font-bold">100% FREE</span>
                  </div>
                </div>

              </div>
            </div>

            <div class="track-bottom-bar">
              <div class="track-hint">
                <span class="material-symbols-outlined icon-xs text-fresh-green">info</span>
                <span>Earn <strong>+50 CleanCoins</strong> on any booking above ₹1,000. Collect 250 coins to also unlock another free service.</span>
              </div>
              <a href="<?= SITE_URL ?>/book-now/" class="btn btn-primary btn-sm">
                Book 2nd Service <span class="material-symbols-outlined icon-xs">arrow_forward</span>
              </a>
            </div>
          </div>

          <!-- Highlight 2: Recent Cleaning & Quick Actions Grid -->
          <div class="overview-split-row">
            
            <!-- Latest Cleaning Summary -->
            <div class="panel-card flex-1">
              <div class="card-header-flex">
                <h3 class="panel-card-title">Recent Cleaning</h3>
                <button type="button" class="btn-text-link" onclick="switchAccountTab('tab-history')">View All</button>
              </div>

              <div class="recent-booking-box">
                <div class="booking-top-row">
                  <div>
                    <span class="booking-code">#A1-9482</span>
                    <h4 class="booking-service">Sofa &amp; Fabric Shampooing (5-Seater)</h4>
                  </div>
                  <span class="badge-status-completed">Completed ✓</span>
                </div>
                <div class="booking-details-list">
                  <span><span class="material-symbols-outlined icon-xs">calendar_today</span> 15 Nov 2026</span>
                  <span><span class="material-symbols-outlined icon-xs">location_on</span> Awas Vikas Colony, Kashipur</span>
                  <span><span class="material-symbols-outlined icon-xs">payments</span> ₹1,199 (Paid via UPI)</span>
                </div>
                <div class="booking-reward-highlight">
                  <span class="material-symbols-outlined icon-xs text-fresh-green">stars</span>
                  <span>Earned <strong>+50 CleanCoins</strong> &amp; counted as 1st service milestone.</span>
                </div>
              </div>
            </div>

            <!-- Active Vouchers Quick Preview -->
            <div class="panel-card flex-1">
              <div class="card-header-flex">
                <h3 class="panel-card-title">Featured Promo Codes</h3>
                <button type="button" class="btn-text-link" onclick="switchAccountTab('tab-coupons')">All Vouchers</button>
              </div>

              <div class="quick-vouchers-list">
                
                <div class="quick-voucher-item">
                  <div class="qv-left">
                    <span class="qv-code" onclick="copyCouponCode('BUY2GET1', this)"><code>BUY2GET1</code></span>
                    <span class="qv-title">Book 2 Services, Get 1 FREE</span>
                  </div>
                  <a href="<?= SITE_URL ?>/book-now/?coupon=BUY2GET1" class="btn btn-outline-sm">Apply</a>
                </div>

                <div class="quick-voucher-item">
                  <div class="qv-left">
                    <span class="qv-code" onclick="copyCouponCode('HOME25', this)"><code>HOME25</code></span>
                    <span class="qv-title">Flat 25% Off Full Home Deep Clean</span>
                  </div>
                  <a href="<?= SITE_URL ?>/book-now/?coupon=HOME25" class="btn btn-outline-sm">Apply</a>
                </div>

              </div>
            </div>

          </div>

        </div>

        <!-- ===================================================================
             TAB 2: ACTIVE COUPONS PANEL
             =================================================================== -->
        <div class="account-tab-panel" id="tab-coupons" role="tabpanel" aria-labelledby="nav-btn-coupons">
          
          <div class="panel-section-header">
            <div>
              <span class="panel-tag-kicker">Exclusive Discounts &amp; Deals</span>
              <h3 class="panel-main-heading">My Active Vouchers</h3>
              <p class="panel-sub-text">Apply any of these verified promotional promo codes during your online booking or WhatsApp confirmation.</p>
            </div>
            <button type="button" class="btn btn-outline-sm trigger-offer-modal" onclick="if(window.openOfferModal) window.openOfferModal();">
              <span class="material-symbols-outlined icon-xs">local_fire_department</span> View Deals Poster
            </button>
          </div>

          <!-- Coupons Grid -->
          <div class="coupons-cards-grid">
            
            <!-- Coupon Card 1: BUY2GET1 -->
            <div class="account-coupon-box featured-box">
              <div class="coupon-box-top">
                <span class="coupon-pill-badge badge-popular">🔥 MOST POPULAR</span>
                <span class="coupon-validity-text">Valid: Doorstep Service</span>
              </div>
              <div class="coupon-box-body">
                <h4 class="coupon-offer-title">Book 2 Services, Get 1 FREE</h4>
                <p class="coupon-offer-desc">
                  Book any 2 services (e.g. Sofa Shampooing + Kitchen Deep Clean) and receive 1 Bathroom Mechanized Deep Cleaning 100% FREE.
                </p>
                <div class="coupon-terms-row">
                  <span><span class="material-symbols-outlined icon-xs">check</span> Valid across Kashipur, Jaspur &amp; Ramnagar</span>
                  <span><span class="material-symbols-outlined icon-xs">schedule</span> Expires: 31 Dec 2026</span>
                </div>
              </div>
              <div class="coupon-box-footer">
                <div class="coupon-code-chip" onclick="copyCouponCode('BUY2GET1', this)" title="Click to copy code">
                  <code>BUY2GET1</code>
                  <span class="copy-hint"><span class="material-symbols-outlined icon-xs">content_copy</span> Copy</span>
                </div>
                <a href="<?= SITE_URL ?>/book-now/?coupon=BUY2GET1" class="btn btn-action btn-sm">
                  Apply &amp; Book Now <span class="material-symbols-outlined icon-xs">arrow_forward</span>
                </a>
              </div>
            </div>

            <!-- Coupon Card 2: HOME25 -->
            <div class="account-coupon-box">
              <div class="coupon-box-top">
                <span class="coupon-pill-badge badge-dark">⚡ FLAT 25% OFF</span>
                <span class="coupon-validity-text">Full Home Cleaning</span>
              </div>
              <div class="coupon-box-body">
                <h4 class="coupon-offer-title">Full Home Deep Cleaning Package</h4>
                <p class="coupon-offer-desc">
                  Flat 25% discount on full home deep wash for apartments, villas, and bungalows with single-disc mechanized floor scrubbing.
                </p>
                <div class="coupon-terms-row">
                  <span><span class="material-symbols-outlined icon-xs">check</span> Applies to 2BHK, 3BHK, 4BHK &amp; Villas</span>
                  <span><span class="material-symbols-outlined icon-xs">schedule</span> Expires: 31 Dec 2026</span>
                </div>
              </div>
              <div class="coupon-box-footer">
                <div class="coupon-code-chip" onclick="copyCouponCode('HOME25', this)" title="Click to copy code">
                  <code>HOME25</code>
                  <span class="copy-hint"><span class="material-symbols-outlined icon-xs">content_copy</span> Copy</span>
                </div>
                <a href="<?= SITE_URL ?>/book-now/?coupon=HOME25" class="btn btn-action btn-sm">
                  Apply &amp; Book Now <span class="material-symbols-outlined icon-xs">arrow_forward</span>
                </a>
              </div>
            </div>

            <!-- Coupon Card 3: FREETANK -->
            <div class="account-coupon-box">
              <div class="coupon-box-top">
                <span class="coupon-pill-badge badge-mint">💧 FREE UPGRADE</span>
                <span class="coupon-validity-text">Water Tank Disinfection</span>
              </div>
              <div class="coupon-box-body">
                <h4 class="coupon-offer-title">Free 6-Stage Water Tank UV Treatment</h4>
                <p class="coupon-offer-desc">
                  Get high-intensity antibacterial UV germicidal radiation disinfection complimentary when booking full home deep cleaning.
                </p>
                <div class="coupon-terms-row">
                  <span><span class="material-symbols-outlined icon-xs">check</span> Destroys 99.9% pathogens &amp; algae</span>
                  <span><span class="material-symbols-outlined icon-xs">schedule</span> Expires: 31 Dec 2026</span>
                </div>
              </div>
              <div class="coupon-box-footer">
                <div class="coupon-code-chip" onclick="copyCouponCode('FREETANK', this)" title="Click to copy code">
                  <code>FREETANK</code>
                  <span class="copy-hint"><span class="material-symbols-outlined icon-xs">content_copy</span> Copy</span>
                </div>
                <a href="<?= SITE_URL ?>/book-now/?coupon=FREETANK" class="btn btn-action btn-sm">
                  Apply &amp; Book Now <span class="material-symbols-outlined icon-xs">arrow_forward</span>
                </a>
              </div>
            </div>

          </div>

        </div>

        <!-- ===================================================================
             TAB 3: COIN WALLET PANEL
             =================================================================== -->
        <div class="account-tab-panel" id="tab-wallet" role="tabpanel" aria-labelledby="nav-btn-wallet">
          
          <!-- Milestone Trackbar Card for CleanCoins (Exact 1:1 Match with User Reference) -->
          <div class="panel-card milestone-overview-card wallet-milestone-card">
            <div class="card-header-flex">
              <div>
                <span class="panel-tag-kicker">AVAILABLE CLEANCOINS™ BALANCE</span>
                <h3 class="panel-card-title">Road to 1 FREE Doorstep Service</h3>
              </div>
              <span class="status-pill-green" id="wallet-progress-badge">50 / 250 Coins (20%)</span>
            </div>

            <p class="panel-card-sub">
              Book doorstep cleanings across Kashipur, Jaspur or Ramnagar. On collecting <strong>250 CleanCoins</strong>, receive any service up to <strong>₹1,000 completely FREE</strong>!
            </p>

            <!-- Visual 5-Node Stepper Trackbar -->
            <div class="account-track-wrap">
              <div class="track-bar-rail">
                <div class="track-bar-fill" id="wallet-meter-fill" style="width: 20%;"></div>
              </div>
              <div class="track-steps-grid">
                
                <!-- Node 1: 50 Coins (Completed) -->
                <div class="track-step-node node-completed" id="wallet-node-1">
                  <div class="step-bullet"><span class="material-symbols-outlined icon-xs">check</span></div>
                  <div class="step-meta">
                    <strong>50 Coins</strong>
                    <span>Completed ✓</span>
                  </div>
                </div>

                <!-- Node 2: 100 Coins (Next Goal) -->
                <div class="track-step-node node-active" id="wallet-node-2">
                  <div class="step-bullet">2</div>
                  <div class="step-meta">
                    <strong>100 Coins</strong>
                    <span class="text-fresh-green">Next Goal</span>
                  </div>
                </div>

                <!-- Node 3: 150 Coins -->
                <div class="track-step-node" id="wallet-node-3">
                  <div class="step-bullet">3</div>
                  <div class="step-meta">
                    <strong>150 Coins</strong>
                    <span>+50 Coins</span>
                  </div>
                </div>

                <!-- Node 4: 200 Coins -->
                <div class="track-step-node" id="wallet-node-4">
                  <div class="step-bullet">4</div>
                  <div class="step-meta">
                    <strong>200 Coins</strong>
                    <span>+50 Coins</span>
                  </div>
                </div>

                <!-- Node 5: 250 Coins Reward -->
                <div class="track-step-node node-reward" id="wallet-node-5">
                  <div class="step-bullet reward-bullet"><span class="material-symbols-outlined icon-xs">card_giftcard</span></div>
                  <div class="step-meta">
                    <strong class="text-fresh-green">250 Coins</strong>
                    <span class="font-bold">100% FREE</span>
                  </div>
                </div>

              </div>
            </div>

            <!-- Bottom Hint & Action Button -->
            <div class="track-bottom-bar">
              <div class="track-hint">
                <span class="material-symbols-outlined icon-xs text-fresh-green">info</span>
                <span>Current Balance: <strong id="wallet-balance-num">50</strong> CleanCoins (= ₹200). Collect 250 coins to unlock 100% free service.</span>
              </div>
              <a href="<?= SITE_URL ?>/book-now/" class="btn btn-primary btn-sm">
                Book 2nd Service <span class="material-symbols-outlined icon-xs">arrow_forward</span>
              </a>
            </div>
          </div>

          <!-- 3 Coin Program Rules -->
          <div class="wallet-rules-grid">
            
            <div class="rule-card">
              <div class="rule-icon-circle"><span class="material-symbols-outlined">payments</span></div>
              <span class="rule-num">RULE 01</span>
              <h4>Earn 50 Coins per ₹1,000+</h4>
              <p>Every completed doorstep cleaning with a bill of ₹1,000 or higher earns you instant 50 CleanCoins in your wallet.</p>
            </div>

            <div class="rule-card rule-highlight">
              <div class="rule-icon-circle"><span class="material-symbols-outlined">redeem</span></div>
              <span class="rule-num">RULE 02</span>
              <h4>250 Coins = 1 FREE Service</h4>
              <p>Accumulate 250 CleanCoins and exchange them for any ₹1,000 cleaning service of your choice, 100% free of charge.</p>
            </div>

            <div class="rule-card">
              <div class="rule-icon-circle"><span class="material-symbols-outlined">celebration</span></div>
              <span class="rule-num">RULE 03</span>
              <h4>5th Cleaning = FREE</h4>
              <p>In addition to coins, your 5th doorstep cleaning order automatically unlocks a 100% free cleaning service milestone!</p>
            </div>

          </div>

          <!-- CleanCoins Ledger Table -->
          <div class="panel-card">
            <h4 class="panel-card-title mb-3">CleanCoins Transaction Ledger</h4>
            <div class="ledger-table-wrap">
              <table class="ledger-table">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Activity / Booking</th>
                    <th>Status</th>
                    <th>Coins</th>
                    <th>Balance</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>15 Nov 2026</td>
                    <td>
                      <strong>Sofa &amp; Fabric Shampooing</strong>
                      <span class="text-muted block text-xs">Booking ID: #A1-9482 (₹1,199 Paid)</span>
                    </td>
                    <td><span class="badge-status-completed">Credited ✓</span></td>
                    <td class="text-fresh-green font-bold">+50 Coins</td>
                    <td class="font-bold">50 Coins</td>
                  </tr>
                  <tr>
                    <td>10 Nov 2026</td>
                    <td>
                      <strong>Account Activation Bonus</strong>
                      <span class="text-muted block text-xs">CleanClub™ Registration</span>
                    </td>
                    <td><span class="badge-status-subtle">Activated</span></td>
                    <td class="text-muted">0 Coins</td>
                    <td>0 Coins</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>

        <!-- ===================================================================
             TAB 4: CLEANING HISTORY PANEL
             =================================================================== -->
        <div class="account-tab-panel" id="tab-history" role="tabpanel" aria-labelledby="nav-btn-history">
          
          <div class="panel-section-header">
            <div>
              <span class="panel-tag-kicker">Order Archive</span>
              <h3 class="panel-main-heading">Cleaning Service History</h3>
              <p class="panel-sub-text">Review your past doorstep cleanings, technician details, and paid receipts.</p>
            </div>
            <a href="<?= SITE_URL ?>/book-now/" class="btn btn-action btn-sm">
              <span class="material-symbols-outlined icon-xs">add</span> Book New Service
            </a>
          </div>

          <!-- Booking Card 1: Completed -->
          <div class="history-record-card">
            <div class="record-top-row">
              <div class="record-id-group">
                <span class="record-id-pill">BOOKING #A1-9482</span>
                <h4 class="record-service-title">Sofa &amp; Fabric Shampooing (5-Seater)</h4>
              </div>
              <div class="record-status-pill badge-status-completed">
                <span class="material-symbols-outlined icon-xs">check_circle</span> Completed
              </div>
            </div>

            <div class="record-meta-grid">
              <div class="meta-item">
                <span class="meta-label"><span class="material-symbols-outlined icon-xs">calendar_today</span> Service Date</span>
                <span class="meta-val">15 Nov 2026, 11:00 AM</span>
              </div>
              <div class="meta-item">
                <span class="meta-label"><span class="material-symbols-outlined icon-xs">person</span> Assigned Technician</span>
                <span class="meta-val">Rajesh Kumar (Verified Staff)</span>
              </div>
              <div class="meta-item">
                <span class="meta-label"><span class="material-symbols-outlined icon-xs">location_on</span> Service Location</span>
                <span class="meta-val">House #42, Lane 3, Awas Vikas, Kashipur</span>
              </div>
              <div class="meta-item">
                <span class="meta-label"><span class="material-symbols-outlined icon-xs">receipt</span> Paid Amount</span>
                <span class="meta-val font-bold text-deep-green">₹1,199 (UPI - Paid)</span>
              </div>
            </div>

            <div class="record-reward-banner">
              <div class="r-reward-left">
                <span class="material-symbols-outlined icon-sm text-fresh-green">military_tech</span>
                <span>Milestone Impact: Counted as <strong>Service 1 of 5</strong> • Earned <strong>+50 CleanCoins</strong></span>
              </div>
              <div class="r-reward-actions">
                <a href="<?= SITE_URL ?>/book-now/?service=sofa-cleaning" class="btn btn-outline-sm">
                  Book Again
                </a>
                <button type="button" class="btn btn-text-link" onclick="alert('Receipt for Booking #A1-9482 has been sent to your WhatsApp number!');">
                  <span class="material-symbols-outlined icon-xs">download</span> Receipt
                </button>
              </div>
            </div>
          </div>

          <!-- Upcoming Prompt Box -->
          <div class="history-prompt-box">
            <div class="prompt-icon-box">
              <span class="material-symbols-outlined icon-md text-fresh-green">cleaning_services</span>
            </div>
            <div class="prompt-text">
              <h4>Ready for Your 2nd Cleaning Service?</h4>
              <p>Book a kitchen chimney wash, bathroom descaling, or UV water tank cleaning to reach step 2 of your Free Service milestone and earn your next 50 coins!</p>
            </div>
            <a href="<?= SITE_URL ?>/book-now/" class="btn btn-action">
              Book Service #2 <span class="material-symbols-outlined icon-xs">arrow_forward</span>
            </a>
          </div>

        </div>

        <!-- ===================================================================
             TAB 5: INVOICES & RECEIPTS PANEL
             =================================================================== -->
        <div class="account-tab-panel" id="tab-invoices" role="tabpanel" aria-labelledby="nav-btn-invoices">
          
          <div class="panel-section-header">
            <div>
              <span class="panel-tag-kicker">TAX RECEIPTS &amp; BILLS</span>
              <h3 class="panel-main-heading">Invoices &amp; Payment Receipts</h3>
            </div>
            <span class="status-pill-green">1 Paid Invoice</span>
          </div>

          <!-- Invoice Summary Card -->
          <div class="panel-card" style="background: linear-gradient(135deg, var(--color-deep-green) 0%, #153E34 100%); color: #FFFFFF; padding: 1.5rem 1.75rem; border-radius: 16px; margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: space-between; gap: 1.5rem; flex-wrap: wrap;">
            <div>
              <span style="font-size: 0.72rem; font-weight: 800; color: #72E2B0; text-transform: uppercase; letter-spacing: 0.08em; display: inline-flex; align-items: center; gap: 4px; margin-bottom: 0.25rem;">
                <span class="material-symbols-outlined icon-xs text-fresh-green">verified</span> GST TAX INVOICES ARCHIVE
              </span>
              <h4 style="font-size: 1.3rem; font-weight: 800; color: #FFFFFF; margin: 0 0 0.25rem;">Download Official Service Receipts</h4>
              <p style="font-size: 0.84rem; color: #D6E8DC; margin: 0;">Verified tax receipts with GSTIN breakdown and mechanized technician certification stamp.</p>
            </div>
            <a href="<?= SITE_URL ?>/book-now/" class="btn btn-action btn-sm">
              <span class="material-symbols-outlined icon-xs">add</span> Book New Service
            </a>
          </div>

          <!-- Invoices Table Card -->
          <div class="panel-card" style="margin-bottom: 1.5rem;">
            <div class="card-header-flex" style="margin-bottom: 1.25rem;">
              <h4 class="panel-card-title">Completed Service Invoices</h4>
              <span style="font-size: 0.8rem; color: var(--color-text-muted);">Total Billed: <strong style="color: var(--color-deep-green);">₹1,199</strong></span>
            </div>

            <div class="ledger-table-wrap">
              <table class="ledger-table">
                <thead>
                  <tr>
                    <th>Invoice #</th>
                    <th>Service &amp; Address</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Payment</th>
                    <th style="text-align: right;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <strong style="color: var(--color-deep-green); font-size: 0.92rem;">#INV-9482</strong><br>
                      <span style="font-size: 0.72rem; color: var(--color-text-muted);">Booking: #A1-9482</span>
                    </td>
                    <td>
                      <strong style="color: var(--color-deep-green); font-size: 0.88rem;">Sofa &amp; Fabric Shampooing (5-Seater)</strong><br>
                      <span style="font-size: 0.74rem; color: var(--color-text-muted);">Awas Vikas, Kashipur, Uttarakhand</span>
                    </td>
                    <td style="font-size: 0.82rem; color: var(--color-text-muted);">
                      15 Nov 2026
                    </td>
                    <td>
                      <strong style="color: var(--color-deep-green); font-size: 0.95rem;">₹1,199</strong><br>
                      <span style="font-size: 0.72rem; color: var(--color-text-muted);">Incl. 18% GST</span>
                    </td>
                    <td>
                      <span class="ledger-badge-credit">PAID (UPI)</span>
                    </td>
                    <td style="text-align: right;">
                      <button type="button" class="btn btn-outline-sm" onclick="downloadInvoiceMock('INV-9482', 'Sofa & Fabric Shampooing (5-Seater)', '1,199')" title="Download Tax Invoice PDF">
                        <span class="material-symbols-outlined icon-xs">download</span> Invoice PDF
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <!-- GST Compliance Note -->
          <div style="background: var(--color-white); border: 1.5px solid var(--color-border); border-radius: 14px; padding: 1.25rem 1.5rem; display: flex; align-items: flex-start; gap: 1rem;">
            <span class="material-symbols-outlined icon-md text-fresh-green" style="flex-shrink: 0;">receipt_long</span>
            <div style="font-size: 0.84rem; color: var(--color-text-main); line-height: 1.5;">
              <strong style="color: var(--color-deep-green); display: block; font-size: 0.9rem; margin-bottom: 2px;">GST Compliance &amp; Corporate Invoicing</strong>
              All A1 Cleaning invoices are compliant with Indian GST laws. If you require your company's GSTIN or legal entity name added to your invoices, please update in <a href="javascript:void(0)" onclick="switchAccountTab('tab-settings')" style="color: var(--color-fresh-green); font-weight: 700;">Settings &amp; Addresses</a> or contact our Kashipur billing helpline at <strong><a href="tel:<?= BUSINESS_PHONE_RAW ?>" style="color: var(--color-fresh-green);"><?= BUSINESS_PHONE ?></a></strong>.
            </div>
          </div>

        </div>

        <!-- ===================================================================
             TAB 6: SETTINGS & ADDRESSES PANEL
             =================================================================== -->
        <div class="account-tab-panel" id="tab-settings" role="tabpanel" aria-labelledby="nav-btn-settings">
          
          <div class="panel-section-header">
            <div>
              <span class="panel-tag-kicker">Account Preferences</span>
              <h3 class="panel-main-heading">Profile &amp; Doorstep Addresses</h3>
              <p class="panel-sub-text">Change your personal details, update your saved doorstep cleaning address, and manage notification preferences.</p>
            </div>
          </div>

          <!-- Settings Form with Local Storage Sync & Toast Feedback -->
          <form id="account-settings-form" onsubmit="saveAccountSettings(event)">
            
            <!-- Section 1: Profile Information -->
            <div class="panel-card mb-4">
              <div class="card-header-flex mb-3">
                <h4 class="panel-card-title">
                  <span class="material-symbols-outlined icon-sm text-fresh-green">person</span>
                  Personal Profile
                </h4>
                <span class="status-pill-green">Verified CleanClub™ Account</span>
              </div>

              <div class="form-row-2col">
                <div class="form-group">
                  <label for="profile-full-name" class="form-label">Full Name *</label>
                  <input type="text" id="profile-full-name" class="form-input" value="Gaurav Bisht" required>
                </div>
                <div class="form-group">
                  <label for="profile-phone" class="form-label">Mobile Number * (For OTP &amp; WhatsApp)</label>
                  <input type="tel" id="profile-phone" class="form-input" value="+91 79063 66271" required>
                </div>
              </div>

              <div class="form-row-2col">
                <div class="form-group">
                  <label for="profile-email" class="form-label">Email Address (For Tax Invoices)</label>
                  <input type="email" id="profile-email" class="form-input" value="gaurav.bisht@example.com">
                </div>
                <div class="form-group">
                  <label for="profile-preferred-time" class="form-label">Preferred Cleaning Slot</label>
                  <select id="profile-preferred-time" class="form-input">
                    <option value="morning" selected>Morning Slot (9:00 AM – 1:00 PM)</option>
                    <option value="afternoon">Afternoon Slot (1:00 PM – 4:00 PM)</option>
                    <option value="evening">Evening Slot (4:00 PM – 7:30 PM)</option>
                  </select>
                </div>
              </div>
            </div>

            <!-- Section 2: Saved Doorstep Cleaning Address -->
            <div class="panel-card mb-4">
              <div class="card-header-flex mb-3">
                <h4 class="panel-card-title">
                  <span class="material-symbols-outlined icon-sm text-fresh-green">home_pin</span>
                  Doorstep Service Address
                </h4>
                <span class="status-pill-subtle">Primary Service Location</span>
              </div>

              <p class="text-sm text-muted mb-3">This is where our cleaning technicians and commercial equipment will arrive for your bookings.</p>

              <div class="form-group mb-3">
                <label for="address-street" class="form-label">House / Flat / Building No. &amp; Street *</label>
                <input type="text" id="address-street" class="form-input" value="House #42, Lane 3, Near City Park" required>
              </div>

              <div class="form-row-3col">
                <div class="form-group">
                  <label for="address-colony" class="form-label">Colony / Area / Landmark *</label>
                  <input type="text" id="address-colony" class="form-input" value="Awas Vikas Colony" required>
                </div>
                <div class="form-group">
                  <label for="address-city" class="form-label">City *</label>
                  <select id="address-city" class="form-input" required>
                    <option value="Kashipur" selected>Kashipur (Head Office)</option>
                    <option value="Ramnagar">Ramnagar</option>
                    <option value="Jaspur">Jaspur</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="address-pincode" class="form-label">Pincode *</label>
                  <input type="text" id="address-pincode" class="form-input" value="244713" required>
                </div>
              </div>
            </div>

            <!-- Section 3: Notification Preferences -->
            <div class="panel-card mb-4">
              <h4 class="panel-card-title mb-3">
                <span class="material-symbols-outlined icon-sm text-fresh-green">notifications_active</span>
                Communication Preferences
              </h4>

              <div class="checkbox-options-list">
                <label class="custom-check-row">
                  <input type="checkbox" id="pref-whatsapp" checked>
                  <span class="check-box-indicator"></span>
                  <span class="check-text-group">
                    <strong>WhatsApp Booking Updates</strong>
                    <span>Receive instant booking confirmation, technician dispatch alerts, and digital receipts on WhatsApp.</span>
                  </span>
                </label>

                <label class="custom-check-row">
                  <input type="checkbox" id="pref-promos" checked>
                  <span class="check-box-indicator"></span>
                  <span class="check-text-group">
                    <strong>Exclusive Coupons &amp; Coin Milestone Alerts</strong>
                    <span>Get notified whenever a new 25% OFF deal or CleanCoins bonus is added to your account.</span>
                  </span>
                </label>
              </div>
            </div>

            <!-- Form Action Submit Button -->
            <div class="settings-action-bar">
              <button type="submit" class="btn btn-action btn-lg">
                <span class="material-symbols-outlined icon-sm">save</span> Save Profile &amp; Address
              </button>
              <span class="settings-save-feedback" id="settings-save-feedback"></span>
            </div>

          </form>

        </div>

    </div><!-- /.account-tabs-wrapper -->

    <!-- Right-Side Account Portal Copyright & Policy Links (Dashboard-only) -->
    <footer class="account-dashboard-footer" aria-label="Portal footer">
      <div class="account-footer-inner">
        <p class="account-footer-copy">&copy; <?= date('Y') ?> A1 Cleaning. All rights reserved. Doorstep Cleaning &amp; Detailing.</p>
        <div class="account-footer-links">
          <a href="<?= SITE_URL ?>/privacy/">Privacy Policy</a>
          <span class="footer-dot">•</span>
          <a href="<?= SITE_URL ?>/terms/">Terms of Service</a>
          <span class="footer-dot">•</span>
          <a href="<?= SITE_URL ?>/sitemap.xml">Sitemap</a>
        </div>
      </div>
    </footer>

  </section><!-- /.account-right-main -->
</main><!-- /.account-portal-fullpage -->

<!-- Mobile Floating Action Filter Button (Shown only on <= 991px, Refixel Style) -->
<button type="button" 
        class="account-mobile-filter-fab" 
        id="account-mobile-filter-fab" 
        aria-label="Open Account Navigation" 
        aria-expanded="false" 
        aria-controls="account-mobile-drawer"
        title="View Coupons, Wallet & Account Menu">
  <span class="material-symbols-outlined fab-icon">tune</span>
  <span class="fab-badge" id="fab-coupons-badge" title="3 Active Coupons">3</span>
</button>

<!-- Mobile Navigation Drawer Backdrop -->
<div class="account-drawer-backdrop" id="account-drawer-backdrop" aria-hidden="true"></div>

<!-- Mobile Navigation Drawer / Offcanvas (Refixel Style) -->
<aside class="account-mobile-drawer" id="account-mobile-drawer" aria-label="Account Navigation Menu" aria-hidden="true">
  
  <!-- Drawer Header -->
  <div class="account-drawer-header">
    <div class="drawer-header-title-wrap">
      <span class="material-symbols-outlined drawer-header-icon">tune</span>
      <h3 class="drawer-header-title">Account Menu</h3>
    </div>
    <button type="button" class="drawer-close-btn" id="account-drawer-close-btn" aria-label="Close Account Menu">
      <span class="material-symbols-outlined">close</span>
    </button>
  </div>

  <!-- Drawer User Profile Mini Card -->
  <div class="drawer-user-card">
    <div class="drawer-avatar-wrap">
      <span class="drawer-avatar-initial" id="drawer-avatar-initial">G</span>
    </div>
    <div class="drawer-user-info">
      <div class="drawer-user-name" id="drawer-user-name">Gaurav Bisht</div>
      <div class="drawer-user-badge">
        <span class="material-symbols-outlined icon-xs">verified</span> CleanClub™ Member
      </div>
    </div>
  </div>

  <!-- Drawer Menu Navigation List -->
  <nav class="drawer-nav-menu">
    <div class="drawer-nav-group-title">NAVIGATION &amp; REWARDS</div>
    <ul class="drawer-nav-list" role="tablist">
      
      <!-- 1. Overview -->
      <li class="drawer-nav-item" role="presentation">
        <button type="button" class="drawer-nav-link active" data-drawer-tab="tab-overview" role="tab" aria-selected="true">
          <div class="drawer-nav-icon-box">
            <span class="material-symbols-outlined">dashboard</span>
          </div>
          <div class="drawer-nav-text-col">
            <span class="drawer-nav-label">Overview</span>
            <span class="drawer-nav-desc">Summary &amp; Milestone Progress</span>
          </div>
          <span class="material-symbols-outlined drawer-nav-arrow">chevron_right</span>
        </button>
      </li>

      <!-- 2. Active Coupons -->
      <li class="drawer-nav-item" role="presentation">
        <button type="button" class="drawer-nav-link" data-drawer-tab="tab-coupons" role="tab" aria-selected="false">
          <div class="drawer-nav-icon-box">
            <span class="material-symbols-outlined">local_activity</span>
          </div>
          <div class="drawer-nav-text-col">
            <span class="drawer-nav-label">Active Coupons</span>
            <span class="drawer-nav-desc">Discounts &amp; 3 Live Vouchers</span>
          </div>
          <span class="drawer-item-badge badge-green" id="drawer-coupons-badge">3 Active</span>
          <span class="material-symbols-outlined drawer-nav-arrow">chevron_right</span>
        </button>
      </li>

      <!-- 3. Coin Wallet -->
      <li class="drawer-nav-item" role="presentation">
        <button type="button" class="drawer-nav-link" data-drawer-tab="tab-wallet" role="tab" aria-selected="false">
          <div class="drawer-nav-icon-box">
            <span class="material-symbols-outlined">account_balance_wallet</span>
          </div>
          <div class="drawer-nav-text-col">
            <span class="drawer-nav-label">Coin Wallet</span>
            <span class="drawer-nav-desc">CleanCoins balance &amp; rules</span>
          </div>
          <span class="drawer-item-badge badge-gold" id="drawer-coins-badge">50 🪙</span>
          <span class="material-symbols-outlined drawer-nav-arrow">chevron_right</span>
        </button>
      </li>

      <!-- 4. Cleaning History -->
      <li class="drawer-nav-item" role="presentation">
        <button type="button" class="drawer-nav-link" data-drawer-tab="tab-history" role="tab" aria-selected="false">
          <div class="drawer-nav-icon-box">
            <span class="material-symbols-outlined">history</span>
          </div>
          <div class="drawer-nav-text-col">
            <span class="drawer-nav-label">Cleaning History</span>
            <span class="drawer-nav-desc">Past doorstep bookings</span>
          </div>
          <span class="drawer-item-badge badge-subtle">1</span>
          <span class="material-symbols-outlined drawer-nav-arrow">chevron_right</span>
        </button>
      </li>

      <!-- 5. Invoices & Receipts -->
      <li class="drawer-nav-item" role="presentation">
        <button type="button" class="drawer-nav-link" data-drawer-tab="tab-invoices" role="tab" aria-selected="false">
          <div class="drawer-nav-icon-box">
            <span class="material-symbols-outlined">receipt_long</span>
          </div>
          <div class="drawer-nav-text-col">
            <span class="drawer-nav-label">Invoices &amp; Receipts</span>
            <span class="drawer-nav-desc">GST compliant tax receipts</span>
          </div>
          <span class="drawer-item-badge badge-subtle">1</span>
          <span class="material-symbols-outlined drawer-nav-arrow">chevron_right</span>
        </button>
      </li>

      <!-- 6. Settings & Addresses -->
      <li class="drawer-nav-item" role="presentation">
        <button type="button" class="drawer-nav-link" data-drawer-tab="tab-settings" role="tab" aria-selected="false">
          <div class="drawer-nav-icon-box">
            <span class="material-symbols-outlined">settings</span>
          </div>
          <div class="drawer-nav-text-col">
            <span class="drawer-nav-label">Settings &amp; Addresses</span>
            <span class="drawer-nav-desc">Edit profile &amp; saved locations</span>
          </div>
          <span class="material-symbols-outlined drawer-nav-arrow">chevron_right</span>
        </button>
      </li>

    </ul>
  </nav>

  <!-- Drawer Help Widget (Refixel Style "Need Help Choosing?") -->
  <div class="drawer-help-card">
    <div class="drawer-help-head">
      <div class="drawer-help-icon-wrap">
        <span class="material-symbols-outlined">support_agent</span>
      </div>
      <div class="drawer-help-text">
        <strong class="drawer-help-title">Need Assistance?</strong>
        <p class="drawer-help-desc">Talk to our Kashipur customer care coordinator for custom quotes or slot changes.</p>
      </div>
    </div>
    <a href="https://wa.me/917906366271?text=Hi%20A1%20Cleaning,%20I%20need%20help%20with%20my%20account" target="_blank" rel="noopener" class="btn btn-drawer-whatsapp">
      <span class="material-symbols-outlined icon-sm">chat</span> WhatsApp Help
    </a>
  </div>

  <!-- Drawer Sign Out Link -->
  <div class="drawer-logout-wrap">
    <a href="<?= SITE_URL ?>/" class="drawer-logout-btn" onclick="if(confirm('Are you sure you want to log out?')){ alert('Logged out successfully.'); }">
      <span class="material-symbols-outlined icon-sm">logout</span> Sign Out
    </a>
  </div>

</aside>

<!-- Floating Toast Notification for Settings & Copy Actions -->
<div id="account-toast" class="account-floating-toast" role="status" aria-live="polite">
  <span class="material-symbols-outlined icon-sm toast-icon">check_circle</span>
  <span class="toast-message" id="toast-message">Changes saved successfully!</span>
</div>

<!-- Tab Navigation & Settings Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  // 1. Sidebar & Drawer Tab Switching Logic
  const navButtons = document.querySelectorAll('.sidebar-nav-link[data-tab-target]');
  const drawerLinks = document.querySelectorAll('.drawer-nav-link[data-drawer-tab]');
  const tabPanels = document.querySelectorAll('.account-tab-panel');

  const tabMetaMap = {
    'tab-overview': { name: 'Overview', icon: 'dashboard' },
    'tab-coupons': { name: 'Active Coupons', icon: 'local_activity' },
    'tab-wallet': { name: 'Coin Wallet', icon: 'account_balance_wallet' },
    'tab-history': { name: 'Cleaning History', icon: 'history' },
    'tab-invoices': { name: 'Invoices & Receipts', icon: 'receipt_long' },
    'tab-settings': { name: 'Settings & Addresses', icon: 'settings' }
  };

  window.switchAccountTab = function (targetId) {
    if (!targetId) return;

    // Remove active state from all buttons and panels
    navButtons.forEach(function (btn) {
      const isTarget = btn.getAttribute('data-tab-target') === targetId;
      btn.classList.toggle('active', isTarget);
      btn.setAttribute('aria-selected', isTarget ? 'true' : 'false');
    });

    drawerLinks.forEach(function (btn) {
      const isTarget = btn.getAttribute('data-drawer-tab') === targetId;
      btn.classList.toggle('active', isTarget);
      btn.setAttribute('aria-selected', isTarget ? 'true' : 'false');
    });

    tabPanels.forEach(function (panel) {
      const isTarget = panel.id === targetId;
      panel.classList.toggle('active', isTarget);
    });

    // Update Mobile Status Pill
    const meta = tabMetaMap[targetId] || tabMetaMap['tab-overview'];
    const pillTitle = document.getElementById('mobile-pill-title');
    const pillIcon = document.getElementById('mobile-pill-icon');
    if (pillTitle) pillTitle.textContent = meta.name;
    if (pillIcon) pillIcon.textContent = meta.icon;

    // Update URL hash smoothly without scrolling
    const cleanHash = targetId.replace('tab-', '');
    if (history.replaceState) {
      history.replaceState(null, null, '#' + cleanHash);
    } else if (history.pushState) {
      history.pushState(null, null, '#' + cleanHash);
    }

    // Animate Coin Bar on Wallet Tab View
    if (targetId === 'tab-wallet') {
      const fillEl = document.getElementById('wallet-meter-fill');
      if (fillEl) {
        fillEl.style.width = '0%';
        setTimeout(function () {
          const currentVal = parseInt(document.getElementById('wallet-balance-num')?.textContent || '50', 10);
          const pct = Math.min(Math.round((currentVal / 250) * 100), 100);
          fillEl.style.width = pct + '%';
        }, 120);
      }
    }

    // Scroll to top of panels on mobile
    if (window.innerWidth <= 991) {
      const targetPanel = document.getElementById(targetId);
      if (targetPanel) {
        targetPanel.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    }
  };

  navButtons.forEach(function (btn) {
    btn.addEventListener('click', function () {
      const targetId = this.getAttribute('data-tab-target');
      window.switchAccountTab(targetId);
    });
  });

  // Mobile Drawer Toggle Handlers
  const drawer = document.getElementById('account-mobile-drawer');
  const backdrop = document.getElementById('account-drawer-backdrop');
  const fab = document.getElementById('account-mobile-filter-fab');
  const closeBtn = document.getElementById('account-drawer-close-btn');

  window.openAccountMobileDrawer = function () {
    if (!drawer || !backdrop) return;
    drawer.classList.add('active');
    backdrop.classList.add('active');
    drawer.setAttribute('aria-hidden', 'false');
    if (fab) fab.setAttribute('aria-expanded', 'true');
    document.body.classList.add('account-drawer-open');
  };

  window.closeAccountMobileDrawer = function () {
    if (!drawer || !backdrop) return;
    drawer.classList.remove('active');
    backdrop.classList.remove('active');
    drawer.setAttribute('aria-hidden', 'true');
    if (fab) fab.setAttribute('aria-expanded', 'false');
    document.body.classList.remove('account-drawer-open');
  };

  if (fab) {
    fab.addEventListener('click', function (e) {
      e.stopPropagation();
      if (drawer && drawer.classList.contains('active')) {
        window.closeAccountMobileDrawer();
      } else {
        window.openAccountMobileDrawer();
      }
    });
  }

  if (closeBtn) closeBtn.addEventListener('click', window.closeAccountMobileDrawer);
  if (backdrop) backdrop.addEventListener('click', window.closeAccountMobileDrawer);
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && drawer && drawer.classList.contains('active')) {
      window.closeAccountMobileDrawer();
    }
  });

  drawerLinks.forEach(function (btn) {
    btn.addEventListener('click', function () {
      const targetId = this.getAttribute('data-drawer-tab');
      window.switchAccountTab(targetId);
      window.closeAccountMobileDrawer();
    });
  });

  // 2. Hash deep linking on load (e.g. /my-account/#coupons or #invoices or #settings)
  function handleInitialHash() {
    const rawHash = window.location.hash.replace('#', '');
    if (rawHash) {
      const validTargets = ['overview', 'coupons', 'wallet', 'history', 'invoices', 'settings'];
      if (validTargets.includes(rawHash)) {
        window.switchAccountTab('tab-' + rawHash);
        // Ensure browser stays at the top without jumping down
        window.scrollTo(0, 0);
      }
    }
  }
  handleInitialHash();

  // 2b. Download / Print Tax Invoice Helper
  window.downloadInvoiceMock = function (invId, serviceName, amount) {
    if (window.showAccountToast) {
      showAccountToast('Generating Tax Invoice #' + invId + '...');
    }
    setTimeout(function () {
      const win = window.open('', '_blank', 'width=800,height=850');
      if (win) {
        win.document.write(`<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Tax Invoice ${invId} - A1 Cleaning</title>
  <style>
    body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif; padding: 40px; color: #0B2922; line-height: 1.5; }
    .inv-header { border-bottom: 2.5px solid #22A06B; padding-bottom: 20px; display: flex; justify-content: space-between; align-items: flex-start; }
    .brand-title { font-size: 26px; font-weight: 900; color: #0B2922; margin: 0; }
    .brand-title span { color: #22A06B; }
    .brand-sub { font-size: 13px; color: #555; margin-top: 3px; }
    .inv-meta-right { text-align: right; }
    .inv-tag { font-size: 22px; font-weight: 900; color: #22A06B; }
    .paid-badge { display: inline-block; background: #EAF3EE; color: #22A06B; border: 1.5px solid #22A06B; font-size: 11px; font-weight: 800; padding: 3px 10px; border-radius: 20px; margin-top: 6px; }
    .address-box { margin: 25px 0 20px; background: #F8FBF9; border: 1px solid #E2ECE5; border-radius: 8px; padding: 16px; font-size: 13px; }
    .table { width: 100%; border-collapse: collapse; margin: 25px 0; }
    .table th { background: #0B2922; color: #fff; text-align: left; padding: 12px; font-size: 13px; }
    .table td { border-bottom: 1px solid #eee; padding: 14px 12px; font-size: 13px; }
    .total-row td { font-weight: 800; font-size: 15px; border-top: 2px solid #0B2922; }
    .footer-note { margin-top: 40px; border-top: 1px dashed #ccc; padding-top: 15px; font-size: 11px; color: #666; text-align: center; }
  </style>
</head>
<body>
  <div class="inv-header">
    <div>
      <h1 class="brand-title">A1 <span>CLEANING</span></h1>
      <div class="brand-sub">India's Trusted Doorstep Mechanized Sanitization Platform</div>
      <div class="brand-sub">GSTIN: 05AAACA1234F1Z9 • Ramnagar Rd, Kashipur, UK 244713</div>
    </div>
    <div class="inv-meta-right">
      <div class="inv-tag">TAX INVOICE</div>
      <div>Invoice No: <strong>#${invId}</strong></div>
      <div>Date: <strong>15 Nov 2026</strong></div>
      <div>Payment: <strong>UPI (Instant Verified)</strong></div>
      <div class="paid-badge">PAID IN FULL ✓</div>
    </div>
  </div>
  <div class="address-box">
    <strong>Billed To Customer:</strong> Gaurav Bisht<br>
    <strong>Service Location:</strong> Awas Vikas, Kashipur, Uttarakhand - 244713<br>
    <strong>Registered Phone:</strong> +91 79063 66271
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>Service Description</th>
        <th>SAC Code</th>
        <th>Tax Rate</th>
        <th style="text-align: right;">Amount (INR)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <strong>${serviceName}</strong><br>
          <span style="font-size: 12px; color: #666;">Mechanized Foam Extraction, Disinfection & Odor Removal</span>
        </td>
        <td>998533</td>
        <td>18% (9% CGST + 9% SGST)</td>
        <td style="text-align: right;">₹${amount}</td>
      </tr>
      <tr class="total-row">
        <td colspan="3" style="text-align: right;">Total Amount Paid (Inclusive of Taxes):</td>
        <td style="text-align: right; color: #22A06B; font-size: 16px;">₹${amount}</td>
      </tr>
    </tbody>
  </table>
  <div class="footer-note">
    This is an authentic computer-generated GST tax invoice. Authorized Signatory: A1 Cleaning Services Kashipur.<br>
    Helpline: +91 79063 66271 • Email: enquire@a1cleaning.in • Web: a1cleaning.in
  </div>
  <script>window.onload = function() { window.print(); };<\/script>
</body>
</html>`);
        win.document.close();
      }
    }, 450);
  };

  // 3. Keep sidebar permanently fixed right below the subnav & full screen height
  function syncSidebarPosition() {
    const sidebar = document.querySelector('.account-permanent-sidebar');
    const subnav = document.querySelector('.ownwash-subnav');
    if (!sidebar || !subnav || window.innerWidth <= 991) return;
    const subnavRect = subnav.getBoundingClientRect();
    const targetTop = Math.max(Math.round(subnavRect.bottom), 52);
    sidebar.style.top = targetTop + 'px';
    sidebar.style.height = 'calc(100vh - ' + targetTop + 'px)';
  }
  window.addEventListener('scroll', syncSidebarPosition, { passive: true });
  window.addEventListener('resize', syncSidebarPosition, { passive: true });
  syncSidebarPosition();

  // 4. Dynamic CleanCoins update helper (fills progress bar smoothly)
  window.setCleanCoins = function (coins) {
    const totalTarget = 250;
    const count = parseInt(coins, 10) || 0;
    const pct = Math.min(Math.max(Math.round((count / totalTarget) * 100), 0), 100);

    const balanceNum = document.getElementById('wallet-balance-num');
    const meterFill = document.getElementById('wallet-meter-fill');
    const badgeEl = document.getElementById('wallet-progress-badge');
    const sidebarBadge = document.getElementById('sidebar-coins-badge');
    const drawerCoinsBadge = document.getElementById('drawer-coins-badge');
    const statCoinsVal = document.getElementById('stat-coins-val');

    if (balanceNum) balanceNum.textContent = count;
    if (meterFill) meterFill.style.width = pct + '%';
    if (badgeEl) badgeEl.textContent = count + ' / ' + totalTarget + ' Coins (' + pct + '%)';
    if (sidebarBadge) sidebarBadge.textContent = count + ' 🪙';
    if (drawerCoinsBadge) drawerCoinsBadge.textContent = count + ' 🪙';
    if (statCoinsVal) statCoinsVal.textContent = count + ' CleanCoins';
  };

  // 3. Load Saved Settings from localStorage if available
  try {
    const saved = localStorage.getItem('a1_user_profile_data');
    if (saved) {
      const data = JSON.parse(saved);
      if (data.name) {
        document.getElementById('profile-full-name').value = data.name;
        document.getElementById('sidebar-user-name').textContent = data.name;
        document.getElementById('sidebar-avatar-initial').textContent = data.name.charAt(0).toUpperCase();
        const drawerName = document.getElementById('drawer-user-name');
        const drawerInitial = document.getElementById('drawer-avatar-initial');
        if (drawerName) drawerName.textContent = data.name;
        if (drawerInitial) drawerInitial.textContent = data.name.charAt(0).toUpperCase();
      }
      if (data.phone) {
        document.getElementById('profile-phone').value = data.phone;
        document.getElementById('sidebar-user-phone').innerHTML = '<span class="material-symbols-outlined icon-xs">call</span> ' + data.phone;
      }
      if (data.email) document.getElementById('profile-email').value = data.email;
      if (data.street) document.getElementById('address-street').value = data.street;
      if (data.colony) document.getElementById('address-colony').value = data.colony;
      if (data.city) document.getElementById('address-city').value = data.city;
      if (data.pincode) document.getElementById('address-pincode').value = data.pincode;
      
      const summary = (data.colony || 'Awas Vikas') + ', ' + (data.city || 'Kashipur');
      const sumEl = document.getElementById('stat-address-summary');
      if (sumEl) sumEl.textContent = summary;
    }
  } catch (err) {}

  // 4. Save Settings Handler
  window.saveAccountSettings = function (e) {
    e.preventDefault();
    const name = document.getElementById('profile-full-name').value.trim();
    const phone = document.getElementById('profile-phone').value.trim();
    const email = document.getElementById('profile-email').value.trim();
    const street = document.getElementById('address-street').value.trim();
    const colony = document.getElementById('address-colony').value.trim();
    const city = document.getElementById('address-city').value;
    const pincode = document.getElementById('address-pincode').value.trim();

    const profileData = {
      name: name,
      phone: phone,
      email: email,
      street: street,
      colony: colony,
      city: city,
      pincode: pincode
    };

    try {
      localStorage.setItem('a1_user_profile_data', JSON.stringify(profileData));
    } catch (err) {}

    // Update UI elements in real time
    if (name) {
      document.getElementById('sidebar-user-name').textContent = name;
      document.getElementById('sidebar-avatar-initial').textContent = name.charAt(0).toUpperCase();
      const drawerName = document.getElementById('drawer-user-name');
      const drawerInitial = document.getElementById('drawer-avatar-initial');
      if (drawerName) drawerName.textContent = name;
      if (drawerInitial) drawerInitial.textContent = name.charAt(0).toUpperCase();
    }
    if (phone) {
      document.getElementById('sidebar-user-phone').innerHTML = '<span class="material-symbols-outlined icon-xs">call</span> ' + phone;
    }
    const summary = (colony || 'Awas Vikas') + ', ' + city;
    const sumEl = document.getElementById('stat-address-summary');
    if (sumEl) sumEl.textContent = summary;

    showAccountToast('Profile & Doorstep Address updated successfully!');
  };

  // Helper toast notification
  window.showAccountToast = function (msg) {
    const toast = document.getElementById('account-toast');
    const msgEl = document.getElementById('toast-message');
    if (!toast || !msgEl) return;
    msgEl.textContent = msg;
    toast.classList.add('active');
    setTimeout(function () {
      toast.classList.remove('active');
    }, 2800);
  };
});
</script>

<?php require __DIR__ . '/../components/footer.php'; ?>

<?php
/**
 * A1 Cleaning - CleanCoins™ Loyalty Track Bar Component
 * Displays after 1st service to gamify progress towards 1 FREE Service.
 * Rules:
 * - 1st Service Completed -> 1/5 Steps Done, 50 CleanCoins Earned
 * - Har ₹1000+ service par -> 50 CleanCoins
 * - 250 CleanCoins -> ₹1,000 value ki koi bhi service FREE
 * - 5 Services complete -> 1 Service 100% FREE!
 * - Strictly follows 4-Color Theme: Deep Green (#0B2922), Fresh Green (#22A06B), Soft Mint (#EAF3EE), White (#FFFFFF)
 */
?>

<!-- CleanCoins™ Loyalty Track Bar Banner -->
<div id="loyalty-trackbar-wrapper" class="loyalty-trackbar-wrapper" role="region" aria-label="Loyalty Rewards Tracker">
  <div class="container">
    <div class="loyalty-trackbar-card">
      
      <!-- Top Bar: Title & Balance -->
      <div class="trackbar-header-row">
        <div class="trackbar-title-group">
          <div class="trackbar-icon-box">
            <span class="material-symbols-outlined icon-md">military_tech</span>
          </div>
          <div>
            <div class="trackbar-badge-row">
              <span class="trackbar-tag-pill">CleanCoins™ Rewards Club</span>
              <span class="trackbar-step-pill">1 of 5 Completed (20%)</span>
            </div>
            <h3 class="trackbar-title">Road to 1 FREE Cleaning Service!</h3>
            <p class="trackbar-subtitle">
              Sirf <strong>4 services aur</strong> book karein aur unlock karein <strong>₹1,000 tak ki koi bhi service 100% FREE</strong>!
            </p>
          </div>
        </div>

        <!-- CleanCoins Balance Box & Actions -->
        <div class="trackbar-balance-actions">
          <div class="clean-coins-chip" title="CleanCoins Balance">
            <span class="coin-icon">🪙</span>
            <div class="coin-val-group">
              <span class="coin-number">50</span>
              <span class="coin-label">CleanCoins</span>
            </div>
          </div>
          <button type="button" class="trackbar-toggle-btn" id="trackbar-minimize-btn" aria-label="Toggle Rewards Bar" title="Minimize/Expand">
            <span class="material-symbols-outlined icon-sm">expand_less</span>
          </button>
        </div>
      </div>

      <!-- Expandable Body: 5-Step Visual Road & Rules -->
      <div class="trackbar-body" id="trackbar-collapsible-body">
        
        <!-- 5-Step Progress Track -->
        <div class="loyalty-milestone-track">
          <div class="milestone-track-line">
            <div class="milestone-track-fill" style="width: 20%;"></div>
          </div>

          <div class="milestone-steps-grid">
            <!-- Step 1: Completed -->
            <div class="milestone-step step-completed">
              <div class="step-circle">
                <span class="material-symbols-outlined icon-sm">check</span>
              </div>
              <div class="step-info">
                <span class="step-label">1st Service</span>
                <span class="step-coins">+50 Coins ✓</span>
              </div>
            </div>

            <!-- Step 2 -->
            <div class="milestone-step step-pending">
              <div class="step-circle">2</div>
              <div class="step-info">
                <span class="step-label">2nd Service</span>
                <span class="step-coins">+50 Coins</span>
              </div>
            </div>

            <!-- Step 3 -->
            <div class="milestone-step step-pending">
              <div class="step-circle">3</div>
              <div class="step-info">
                <span class="step-label">3rd Service</span>
                <span class="step-coins">+50 Coins</span>
              </div>
            </div>

            <!-- Step 4 -->
            <div class="milestone-step step-pending">
              <div class="step-circle">4</div>
              <div class="step-info">
                <span class="step-label">4th Service</span>
                <span class="step-coins">+50 Coins</span>
              </div>
            </div>

            <!-- Step 5: Reward Milestone -->
            <div class="milestone-step step-reward">
              <div class="step-circle reward-circle">
                <span class="material-symbols-outlined icon-sm">card_giftcard</span>
              </div>
              <div class="step-info">
                <span class="step-label reward-label">FREE Service!</span>
                <span class="step-coins reward-val">₹1,000 Voucher</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Trackbar Bottom Benefits & Actions -->
        <div class="trackbar-footer-row">
          <div class="trackbar-rules-chips">
            <span class="rule-chip"><span class="material-symbols-outlined icon-xs">bolt</span> ₹1000+ Service = 50 Coins</span>
            <span class="rule-chip"><span class="material-symbols-outlined icon-xs">redeem</span> 250 Coins = 1k Free Service</span>
            <span class="rule-chip"><span class="material-symbols-outlined icon-xs">verified</span> 5 Services = 1 Free Service</span>
          </div>

          <div class="trackbar-buttons">
            <a href="<?= SITE_URL ?>/my-account/" class="btn btn-outline trackbar-btn-account">
              <span class="material-symbols-outlined icon-sm">person</span> My Account &amp; Rewards
            </a>
            <a href="<?= SITE_URL ?>/book-now/" class="btn btn-action trackbar-btn-book">
              Book Next Service <span class="material-symbols-outlined icon-sm">arrow_forward</span>
            </a>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>

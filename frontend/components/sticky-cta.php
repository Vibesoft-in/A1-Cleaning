<?php
/**
 * Mobile Bottom Sticky CTA
 * High-converting instant access to Call & WhatsApp
 */
require_once __DIR__ . '/../../backend/config/config.php';

// Generate dynamic context message for WhatsApp
$waMessage = "Hi A1 Cleaning, I need a cleaning quote.";
if (!empty($currentServiceData) && !empty($currentCityData)) {
    $waMessage = "Hi A1 Cleaning, I need a quote for " . $currentServiceData['name'] . " in " . $currentCityData['name'] . ".";
} elseif (!empty($currentServiceData)) {
    $waMessage = "Hi A1 Cleaning, I need a quote for " . $currentServiceData['name'] . ".";
} elseif (!empty($currentCityData)) {
    $waMessage = "Hi A1 Cleaning, I need a cleaning quote in " . $currentCityData['name'] . ".";
}

$waLink = "https://wa.me/917906366271?text=" . rawurlencode($waMessage);
?>

<nav class="a1-mobile-bottom-nav" aria-label="Mobile Navigation Bar">
  <div class="a1-bottom-nav-inner">
    
    <!-- 1. Home -->
    <a href="<?= SITE_URL ?>/" class="a1-bottom-nav-tab <?= ($currentRoute ?? '') === 'home' ? 'active' : '' ?>">
      <span class="material-symbols-outlined nav-tab-icon">home</span>
      <span class="nav-tab-label">Home</span>
    </a>

    <!-- 2. Booking -->
    <a href="<?= SITE_URL ?>/book-now/" class="a1-bottom-nav-tab <?= ($currentRoute ?? '') === 'book-now' ? 'active' : '' ?>">
      <span class="material-symbols-outlined nav-tab-icon">calendar_month</span>
      <span class="nav-tab-label">Booking</span>
    </a>

    <!-- 3. WhatsApp (Floating Action FAB - Official Icon, No Text) -->
    <a href="<?= $waLink ?>" target="_blank" rel="noopener" class="a1-bottom-nav-tab tab-whatsapp" aria-label="Chat on WhatsApp">
      <div class="whatsapp-circle-btn">
        <svg width="25" height="25" viewBox="0 0 24 24" fill="#FFFFFF" aria-hidden="true">
          <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.275.015.376-.101c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12 0 2.115.547 4.102 1.504 5.835l-1.596 5.83 5.968-1.566c1.674.912 3.585 1.401 5.624 1.401 6.627 0 12-5.373 12-12 0-6.627-5.373-12-12-12zm0 21.6c-1.848 0-3.565-.544-5.017-1.48l-.36-.233-3.725.977.994-3.629-.255-.407c-1.042-1.661-1.637-3.626-1.637-5.828 0-5.293 4.307-9.6 9.6-9.6 5.293 0 9.6 4.307 9.6 9.6 0 5.293-4.307 9.6-9.6 9.6z"/>
        </svg>
      </div>
    </a>

    <!-- 4. Pricing / Services -->
    <a href="<?= SITE_URL ?>/pricing/" class="a1-bottom-nav-tab <?= ($currentRoute ?? '') === 'pricing' ? 'active' : '' ?>">
      <span class="material-symbols-outlined nav-tab-icon">sell</span>
      <span class="nav-tab-label">Pricing</span>
    </a>

    <!-- 5. Menu (Opens Right Sidebar Drawer) -->
    <button type="button" class="a1-bottom-nav-tab tab-menu" id="bottom-bar-menu-btn" aria-label="Open Navigation Menu">
      <span class="material-symbols-outlined nav-tab-icon">menu</span>
      <span class="nav-tab-label">Menu</span>
    </button>

  </div>
</nav>


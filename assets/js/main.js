/**
 * A1 Cleaning - Main Client JavaScript
 * Includes Mobile Menu, City Picker Dropdown, Category Tab Filtering,
 * FAQ Accordion, GA4/GTM Tracking, and Form Validation
 */

document.addEventListener('DOMContentLoaded', function () {
  // 1. Mobile Menu & Right Sidebar Drawer Toggle
  const mobileToggle = document.getElementById('mobile-menu-toggle');
  const bottomBarMenuBtn = document.getElementById('bottom-bar-menu-btn');
  const rightDrawer = document.getElementById('a1-right-drawer');
  const drawerBackdrop = document.getElementById('a1-drawer-backdrop');
  const drawerCloseBtn = document.getElementById('a1-drawer-close');
  const navMenu = document.getElementById('main-nav-menu');

  function openRightDrawer() {
    if (rightDrawer) {
      rightDrawer.classList.add('open');
      rightDrawer.setAttribute('aria-hidden', 'false');
    }
    if (drawerBackdrop) {
      drawerBackdrop.classList.add('active');
      drawerBackdrop.setAttribute('aria-hidden', 'false');
    }
    if (mobileToggle) {
      mobileToggle.setAttribute('aria-expanded', 'true');
    }
    document.body.classList.add('drawer-open');
  }

  function closeRightDrawer() {
    if (rightDrawer) {
      rightDrawer.classList.remove('open');
      rightDrawer.setAttribute('aria-hidden', 'true');
    }
    if (drawerBackdrop) {
      drawerBackdrop.classList.remove('active');
      drawerBackdrop.setAttribute('aria-hidden', 'true');
    }
    if (mobileToggle) {
      mobileToggle.setAttribute('aria-expanded', 'false');
    }
    document.body.classList.remove('drawer-open');
  }

  function toggleRightDrawer() {
    if (rightDrawer && rightDrawer.classList.contains('open')) {
      closeRightDrawer();
    } else {
      openRightDrawer();
    }
  }

  // Header Hamburger Click -> Opens Drawer
  if (mobileToggle) {
    mobileToggle.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      toggleRightDrawer();
    });
  }

  // Bottom Navigation "Menu" Button -> Opens Drawer
  if (bottomBarMenuBtn) {
    bottomBarMenuBtn.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      openRightDrawer();
    });
  }

  // Drawer Close Button
  if (drawerCloseBtn) {
    drawerCloseBtn.addEventListener('click', function (e) {
      e.preventDefault();
      closeRightDrawer();
    });
  }

  // Backdrop Click -> Closes Drawer
  if (drawerBackdrop) {
    drawerBackdrop.addEventListener('click', function () {
      closeRightDrawer();
    });
  }

  // Close Drawer on Link Click inside Drawer
  if (rightDrawer) {
    rightDrawer.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        closeRightDrawer();
      });
    });
  }

  // Escape key closes Drawer
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && rightDrawer && rightDrawer.classList.contains('open')) {
      closeRightDrawer();
    }
  });

  // Legacy fallback if navMenu exists
  if (navMenu) {
    navMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', function () {
        navMenu.classList.remove('open');
      });
    });
  }

  // 2. City Dropdown Toggle (OwnWash Feature)
  const cityTrigger = document.getElementById('header-city-trigger');
  const cityDropdown = document.getElementById('header-city-dropdown');

  if (cityTrigger && cityDropdown) {
    cityTrigger.addEventListener('click', function (e) {
      e.stopPropagation();
      cityDropdown.classList.toggle('active');
    });

    document.addEventListener('click', function (e) {
      if (!cityTrigger.contains(e.target)) {
        cityDropdown.classList.remove('active');
      }
    });
  }

  // 2b. Header Helpline Dropdown Toggle
  const helplineContainer = document.getElementById('header-helpline-container');
  const helplineTrigger = document.getElementById('helpline-dropdown-trigger');

  if (helplineContainer && helplineTrigger) {
    helplineTrigger.addEventListener('click', function (e) {
      e.stopPropagation();
      helplineContainer.classList.toggle('active');
      const isExpanded = helplineContainer.classList.contains('active');
      helplineTrigger.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
    });

    document.addEventListener('click', function (e) {
      if (!helplineContainer.contains(e.target)) {
        helplineContainer.classList.remove('active');
        helplineTrigger.setAttribute('aria-expanded', 'false');
      }
    });
  }

  // 3. Service Category Tabs Filter (OwnWash Signature Feature)
  const tabButtons = document.querySelectorAll('.tab-filter-btn');
  const serviceCards = document.querySelectorAll('.ownwash-service-card');

  if (tabButtons.length > 0 && serviceCards.length > 0) {
    tabButtons.forEach(function (button) {
      button.addEventListener('click', function () {
        // Toggle active button
        tabButtons.forEach(function (btn) { btn.classList.remove('active'); });
        this.classList.add('active');

        var filter = this.getAttribute('data-filter');

        serviceCards.forEach(function (card) {
          var category = card.getAttribute('data-category');
          if (filter === 'all' || category === filter) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  }

  // 4. FAQ Accordion Interaction
  const faqQuestions = document.querySelectorAll('.faq-question');
  faqQuestions.forEach(function (button) {
    button.addEventListener('click', function () {
      const currentItem = this.closest('.faq-item');
      const isActive = currentItem.classList.contains('active');

      document.querySelectorAll('.faq-item').forEach(function (item) {
        item.classList.remove('active');
      });

      if (!isActive) {
        currentItem.classList.add('active');
      }
    });
  });

  // 5. GTM / GA4 dataLayer Click Tracking (Call & WhatsApp)
  document.addEventListener('click', function (e) {
    var a = e.target.closest('a');
    if (!a) return;

    var href = a.getAttribute('href') || '';
    var parts = window.location.pathname.split('/').filter(Boolean);
    var city = parts[0] || '';
    var service = parts[1] || '';

    var payload = {
      page_path: window.location.pathname,
      city: city,
      service: service
    };

    if (href.indexOf('tel:') === 0) {
      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push(Object.assign({ event: 'click_call' }, payload));
    } else if (href.indexOf('wa.me') !== -1) {
      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push(Object.assign({ event: 'click_whatsapp' }, payload));
    }
  });

  // 6. Form Client-side validation (10 digit India phone)
  const bookingForms = document.querySelectorAll('.validate-booking-form');
  bookingForms.forEach(function (form) {
    form.addEventListener('submit', function (e) {
      const phoneInput = form.querySelector('input[name="phone"]');
      if (phoneInput) {
        const val = phoneInput.value.replace(/[^0-9]/g, '');
        const validPhone = (val.length === 10 && /^[6-9]\d{9}$/.test(val));
        if (!validPhone) {
          e.preventDefault();
          alert('Kripya valid 10-digit mobile number enter karein (e.g. 7906366271).');
          phoneInput.focus();
        }
      }
    });
  });

  // 7. First-Load Promotional Offer Modal Popup & Global Triggers
  const offerModal = document.getElementById('offer-modal-overlay');
  const offerCloseBtn = document.getElementById('offer-modal-close-btn');

  window.openOfferModal = function () {
    if (!offerModal) return;
    offerModal.classList.add('active');
    offerModal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  };

  window.closeOfferModal = function () {
    if (!offerModal) return;
    offerModal.classList.remove('active');
    offerModal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    try {
      sessionStorage.setItem('a1_offer_popup_dismissed_now', 'true');
    } catch (err) {}
  };

  if (offerModal) {
    // Check if dismissed in active session or force query
    const urlParams = new URLSearchParams(window.location.search);
    const forceShow = urlParams.has('offer') || urlParams.has('offers') || window.location.hash === '#offers';
    let isDismissed = false;
    try {
      isDismissed = sessionStorage.getItem('a1_offer_popup_dismissed_now') === 'true';
    } catch (err) {}

    // Show popup smoothly after 900ms on first load or when forced (never auto-interrupt checkout or cart)
    const isCartOrBookingPage = window.location.pathname.includes('/cart') || window.location.pathname.includes('/book-now');
    if (forceShow || (!isDismissed && !isCartOrBookingPage)) {
      setTimeout(function () {
        window.openOfferModal();
      }, 900);
    }

    // Close button click
    if (offerCloseBtn) {
      offerCloseBtn.addEventListener('click', window.closeOfferModal);
    }

    // Backdrop click outside container
    offerModal.addEventListener('click', function (e) {
      if (e.target === offerModal) {
        window.closeOfferModal();
      }
    });

    // Escape key press
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && offerModal.classList.contains('active')) {
        window.closeOfferModal();
      }
    });

    // Delegate any manual trigger buttons with .trigger-offer-modal
    document.addEventListener('click', function (e) {
      if (e.target.closest('.trigger-offer-modal') || e.target.closest('[data-open-offers]')) {
        e.preventDefault();
        window.openOfferModal();
      }
    });
  }

  // 8. Loyalty Track Bar Collapse/Expand Toggle
  const trackbarToggleBtn = document.getElementById('trackbar-minimize-btn');
  const trackbarBody = document.getElementById('trackbar-collapsible-body');

  if (trackbarToggleBtn && trackbarBody) {
    trackbarToggleBtn.addEventListener('click', function () {
      const isCollapsed = trackbarBody.classList.toggle('collapsed');
      const iconSpan = trackbarToggleBtn.querySelector('.material-symbols-outlined');
      if (iconSpan) {
        iconSpan.textContent = isCollapsed ? 'expand_more' : 'expand_less';
      }
    });
  }
});

/**
 * Global helper to copy coupon codes to clipboard
 */
function copyCouponCode(code, element) {
  if (!code) return;

  function setCopiedState() {
    if (element) {
      element.classList.add('copied');
      var originalHTML = element.innerHTML;
      element.innerHTML = '<code>' + code + '</code> <span class="copy-hint"><span class="material-symbols-outlined icon-sm">check</span> Copied!</span>';
      setTimeout(function () {
        element.classList.remove('copied');
        element.innerHTML = originalHTML;
      }, 2000);
    }
  }

  if (navigator.clipboard && window.isSecureContext) {
    navigator.clipboard.writeText(code).then(setCopiedState).catch(function () {
      fallbackCopyText(code, setCopiedState);
    });
  } else {
    fallbackCopyText(code, setCopiedState);
  }
}

function fallbackCopyText(text, callback) {
  var textArea = document.createElement('textarea');
  textArea.value = text;
  textArea.style.position = 'fixed';
  textArea.style.top = '0';
  textArea.style.left = '0';
  textArea.style.opacity = '0';
  document.body.appendChild(textArea);
  textArea.focus();
  textArea.select();
  try {
    document.execCommand('copy');
    if (callback) callback();
  } catch (err) {}
  document.body.removeChild(textArea);
}

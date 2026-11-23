<?php
/**
 * Contact Us View: /contact/
 * Vorxus Modern Dark UI Theme with 3 Highlight Cards, 2-Col Map & Form,
 * Plus Refixel-Style 2-Column SEO Frequently Asked Questions & FAQPage Schema.
 * Strict 4-Color Theme: Deep Green (#0B2922), Fresh Green (#22A06B), Soft Mint (#EAF3EE), White (#FFFFFF)
 */
$pageTitle = "Contact A1 Cleaning | Kashipur, Uttarakhand Helpline, Location & FAQs";
$pageDescription = "Contact A1 Cleaning in Kashipur, Uttarakhand. Call " . BUSINESS_PHONE . ", chat on WhatsApp, find our operating location, submit an inquiry, and read verified SEO FAQs.";
$canonicalUrl = SeoHelper::getCanonicalUrl('contact');

// High-Impact Local SEO FAQ Data for Kashipur, Ramnagar, Jaspur & Uttarakhand
$faqList = [
    [
        'q' => 'How do I book a doorstep cleaning service with A1 Cleaning?',
        'a' => 'You can book instantly online through our website, message us directly on WhatsApp (+91 79063 66271), or call our local Kashipur helpline. Simply choose your service (Home Deep Cleaning, Sofa Shampooing, Bathroom Descaling, Kitchen Degreasing, or Water Tank Cleaning), select your preferred date and time slot, and our team will arrive on time. Zero advance payment is required.'
    ],
    [
        'q' => 'Can I reschedule or cancel my booking without any fees?',
        'a' => 'Yes, absolutely. We offer 100% flexible zero-fee rescheduling and cancellation. If your schedule changes, simply notify our dispatch team on WhatsApp or call at least 2 hours prior to your booked slot, and we will update your appointment to your new convenient date and time without any penalty.'
    ],
    [
        'q' => 'Are A1 Cleaning service technicians verified and background-checked?',
        'a' => 'Yes, 100%. Every technician at A1 Cleaning undergoes comprehensive police verification, government ID validation, and specialized mechanized sanitation training. Our professionals always arrive in clean branded uniforms wearing official ID badges, protective shoe covers, and sanitized gear.'
    ],
    [
        'q' => 'Is there a service warranty or satisfaction guarantee?',
        'a' => 'Yes! We follow a strict "Pay After 100% Satisfaction" policy. Once our team completes the deep cleaning, you inspect the premises with the team supervisor. If any spot or corner is not cleaned to your complete satisfaction, we re-clean it immediately on the spot at no additional charge.'
    ],
    [
        'q' => 'How does pricing work? Are there any hidden fees or travel surcharges?',
        'a' => 'Our pricing is completely upfront and transparent. The quote you receive includes all industrial machinery, specialized chemicals, consumables, labor, and doorstep transit across Kashipur, Jaspur, Ramnagar, and nearby areas. There are zero surprise travel fees or hidden convenience surcharges.'
    ],
    [
        'q' => 'How quickly can a cleaning team arrive at my doorstep?',
        'a' => 'For pre-scheduled appointments, our team arrives punctually at your chosen slot. For emergency or same-day cleaning requests in Kashipur urban areas (such as Awas Vikas, Ramnagar Road, Station Road), our rapid dispatch mobile unit can arrive at your doorstep in 60 to 90 minutes.'
    ],
    [
        'q' => 'What payment methods do you accept after service completion?',
        'a' => 'We accept all convenient digital payment modes and cash after you have inspected and approved the service. You can pay via UPI (Google Pay, PhonePe, Paytm, BHIM), Net Banking, Credit/Debit cards, or Cash. You also receive an authentic GST tax invoice sent directly to your phone and email.'
    ],
    [
        'q' => 'What mechanized equipment and cleaning chemicals do you use?',
        'a' => 'We deploy German-engineered mechanized equipment including single-disc floor rotary scrubbers, Kärcher injection-extraction upholstery shampoo machines, high-pressure steam washers, and HEPA vacuums. All chemicals are non-toxic, divergence-grade, acid-free, and safe for kids and pets.'
    ]
];

require __DIR__ . '/../components/header.php';
?>

<!-- JSON-LD FAQPage Schema for Search Engine Rich Snippets -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php foreach ($faqList as $idx => $item): ?>
    {
      "@type": "Question",
      "name": <?= json_encode($item['q']) ?>,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": <?= json_encode($item['a']) ?>
      }
    }<?= ($idx < count($faqList) - 1) ? ',' : '' ?>
    <?php endforeach; ?>
  ]
}
</script>

<div class="vorxus-contact-page">

  <!-- =======================================================================
       1. HERO HEADER WITH TITLE & 3 FLOATING CONTACT CARDS (Vorxus Style)
       ======================================================================= -->
  <section class="vorxus-hero-section">
    <div class="container text-center">
      
      <!-- Vorxus Highlight Title -->
      <div class="vorxus-title-wrap">
        <h1 class="vorxus-main-title">
          <span class="vorxus-title-pill">Contact</span> Us
        </h1>
        <p class="vorxus-lead">
          Connect with A1 Cleaning's local operations desk. We deliver verified doorstep mechanized cleaning across Kashipur, Jaspur, Ramnagar, and surrounding towns.
        </p>
      </div>

      <!-- 3 Highlight Contact Cards Row (Vorxus Style) -->
      <div class="vorxus-cards-grid">
        
        <!-- Card 1: Phone -->
        <div class="vorxus-info-card">
          <div class="vorxus-card-icon-wrap">
            <span class="material-symbols-outlined">call</span>
          </div>
          <div class="vorxus-card-val"><?= BUSINESS_PHONE ?></div>
          <p class="vorxus-card-desc">
            Direct operations desk for instant bookings, schedule planning, and rapid emergency dispatch.
          </p>
          <div class="vorxus-card-footer">
            <span class="vorxus-pill-tag">Phone Number</span>
            <a href="tel:<?= BUSINESS_PHONE_RAW ?>" class="vorxus-action-link">
              <span>Call Us Now</span>
              <span class="material-symbols-outlined icon-xs">arrow_forward</span>
            </a>
          </div>
        </div>

        <!-- Card 2: Email & WhatsApp -->
        <div class="vorxus-info-card">
          <div class="vorxus-card-icon-wrap">
            <span class="material-symbols-outlined">mark_email_read</span>
          </div>
          <div class="vorxus-card-val"><?= BUSINESS_EMAIL ?></div>
          <p class="vorxus-card-desc">
            Send corporate inquiries, quotation requests, or chat directly with our team on WhatsApp 7 days a week.
          </p>
          <div class="vorxus-card-footer">
            <span class="vorxus-pill-tag">Email &amp; Chat</span>
            <a href="<?= BUSINESS_WHATSAPP_LINK ?>" target="_blank" rel="noopener" class="vorxus-action-link text-whatsapp">
              <span>WhatsApp Us</span>
              <span class="material-symbols-outlined icon-xs">arrow_forward</span>
            </a>
          </div>
        </div>

        <!-- Card 3: Location -->
        <div class="vorxus-info-card">
          <div class="vorxus-card-icon-wrap">
            <span class="material-symbols-outlined">location_on</span>
          </div>
          <div class="vorxus-card-val"><?= BUSINESS_CITY ?>, <?= BUSINESS_STATE ?></div>
          <p class="vorxus-card-desc">
            <?= BUSINESS_STREET ?>, <?= BUSINESS_CITY ?> - <?= BUSINESS_POSTCODE ?>. Serving 60km operational radius.
          </p>
          <div class="vorxus-card-footer">
            <span class="vorxus-pill-tag">Our Location</span>
            <a href="#vorxus-map-card" class="vorxus-action-link">
              <span>View On Map</span>
              <span class="material-symbols-outlined icon-xs">arrow_downward</span>
            </a>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- =======================================================================
       2. TRUST / CERTIFICATION RIBBON (Matching Vorxus Logo Ribbon)
       ======================================================================= -->
  <section class="vorxus-trust-ribbon">
    <div class="container">
      <div class="vorxus-trust-items-row">
        <div class="vorxus-trust-item">
          <span class="material-symbols-outlined icon-sm text-fresh-green">verified_user</span>
          <span>Police-Verified Staff</span>
        </div>
        <div class="vorxus-trust-item">
          <span class="material-symbols-outlined icon-sm text-fresh-green">precision_manufacturing</span>
          <span>Kärcher Mechanized Systems</span>
        </div>
        <div class="vorxus-trust-item">
          <span class="material-symbols-outlined icon-sm text-fresh-green">eco</span>
          <span>100% Eco-Safe Chemicals</span>
        </div>
        <div class="vorxus-trust-item">
          <span class="material-symbols-outlined icon-sm text-fresh-green">payments</span>
          <span>Pay After 100% Satisfaction</span>
        </div>
        <div class="vorxus-trust-item">
          <span class="material-symbols-outlined icon-sm text-fresh-green">receipt_long</span>
          <span>GST Compliant Invoicing</span>
        </div>
      </div>
    </div>
  </section>

  <!-- =======================================================================
       3. TWO-COLUMN SECTION: GET IN TOUCH / MAP + INTERACTIVE FORM (Vorxus Style)
       ======================================================================= -->
  <section class="vorxus-main-section">
    <div class="container">
      <div class="vorxus-2col-layout">
        
        <!-- Left Column: Get In Touch, Direct Channels & Map -->
        <div class="vorxus-col-left">
          
          <div class="vorxus-section-tag">( GET IN TOUCH )</div>
          <h2 class="vorxus-section-heading">We Are Ready to Make Your Space Spotless</h2>
          <p class="vorxus-section-lead">
            Whether you need a deep home sanitization before a festival, sofa stain extraction, or corporate facility maintenance, our Kashipur mobile units are equipped and ready.
          </p>

          <!-- Quick Channel Pills -->
          <div class="vorxus-social-channels">
            <a href="tel:<?= BUSINESS_PHONE_RAW ?>" class="vorxus-social-circle" title="Call Us Directly">
              <span class="material-symbols-outlined">call</span>
            </a>
            <a href="<?= BUSINESS_WHATSAPP_LINK ?>" target="_blank" rel="noopener" class="vorxus-social-circle circle-whatsapp" title="Chat on WhatsApp">
              <span class="material-symbols-outlined">chat</span>
            </a>
            <a href="mailto:<?= BUSINESS_EMAIL ?>" class="vorxus-social-circle" title="Email Us">
              <span class="material-symbols-outlined">mail</span>
            </a>
            <a href="https://maps.google.com/?q=Kashipur+Uttarakhand" target="_blank" rel="noopener" class="vorxus-social-circle" title="Open in Google Maps">
              <span class="material-symbols-outlined">map</span>
            </a>
          </div>

          <!-- Find Us Here Heading & Map Card -->
          <div class="vorxus-map-block" id="vorxus-map-card">
            <h3 class="vorxus-map-title">Find Us Here!</h3>
            <div class="vorxus-map-wrapper">
              <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55684.77673551532!2d78.920703!3d29.210419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390a424a1b0b65f3%3A0x6b1e6a978f8d6728!2sKashipur%2C%20Uttarakhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                width="100%" 
                height="310" 
                style="border:0; display:block;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                title="A1 Cleaning Kashipur Operational Area Map">
              </iframe>
            </div>
            <div class="vorxus-map-meta">
              <span class="material-symbols-outlined icon-xs text-fresh-green">near_me</span>
              <span>Serving Kashipur, Jaspur, Ramnagar, Bazpur, Kundeshwari &amp; Jim Corbett belt.</span>
            </div>
          </div>

        </div>

        <!-- Right Column: Interactive Contact / Booking Inquiry Form (Vorxus Style) -->
        <div class="vorxus-col-right">
          <div class="vorxus-form-card">
            
            <div class="vorxus-form-header">
              <h3 class="vorxus-form-title">Send Us a Message</h3>
              <p class="vorxus-form-desc">
                Fill in your details below. Our customer care supervisor will respond within 15 minutes with customized pricing.
              </p>
            </div>

            <form id="vorxus-contact-form" onsubmit="handleVorxusFormSubmit(event)">
              
              <!-- Row 1: Name & Email -->
              <div class="vorxus-form-row-2col">
                <div class="vorxus-form-group">
                  <label for="contact-name" class="vorxus-label">Name :</label>
                  <input type="text" id="contact-name" class="vorxus-input" placeholder="Your Full Name" required>
                </div>
                <div class="vorxus-form-group">
                  <label for="contact-email" class="vorxus-label">Email :</label>
                  <input type="email" id="contact-email" class="vorxus-input" placeholder="Your Email Address" required>
                </div>
              </div>

              <!-- Row 2: Phone & Service -->
              <div class="vorxus-form-row-2col">
                <div class="vorxus-form-group">
                  <label for="contact-phone" class="vorxus-label">Phone Number :</label>
                  <input type="tel" id="contact-phone" class="vorxus-input" placeholder="e.g. +91 79063 66271" required>
                </div>
                <div class="vorxus-form-group">
                  <label for="contact-service" class="vorxus-label">Service Needed :</label>
                  <select id="contact-service" class="vorxus-input vorxus-select">
                    <option value="Home Deep Cleaning">Full Home Deep Cleaning</option>
                    <option value="Sofa Cleaning">Sofa &amp; Fabric Shampooing</option>
                    <option value="Bathroom Cleaning">Bathroom Mechanized Descaling</option>
                    <option value="Kitchen Cleaning">Kitchen Chimney &amp; Degreasing</option>
                    <option value="Water Tank Cleaning">Water Tank 6-Stage UV Disinfection</option>
                    <option value="Carpet Cleaning">Carpet &amp; Rug Washing</option>
                    <option value="Balcony Cleaning">Balcony High-Pressure Wash</option>
                    <option value="Commercial Cleaning">Commercial &amp; Office Cleaning</option>
                    <option value="Other Custom Service">Other Custom Service</option>
                  </select>
                </div>
              </div>

              <!-- Row 3: Locality / Subject -->
              <div class="vorxus-form-group">
                <label for="contact-locality" class="vorxus-label">Locality / Address :</label>
                <input type="text" id="contact-locality" class="vorxus-input" placeholder="e.g. Awas Vikas, Kashipur or Ramnagar Road">
              </div>

              <!-- Row 4: Message -->
              <div class="vorxus-form-group">
                <label for="contact-message" class="vorxus-label">Message :</label>
                <textarea id="contact-message" class="vorxus-input vorxus-textarea" rows="4" placeholder="Tell us about your space (e.g. 3BHK flat, 5-seater L-shape sofa, immediate deep clean required)..."></textarea>
              </div>

              <!-- Submit Button -->
              <div class="vorxus-form-submit-wrap">
                <button type="submit" class="vorxus-btn-submit" id="vorxus-submit-btn">
                  <span>Send Inquiry &amp; Request Callback</span>
                  <span class="material-symbols-outlined icon-sm">send</span>
                </button>
              </div>

              <div class="vorxus-form-guarantee">
                <span class="material-symbols-outlined icon-xs text-fresh-green">lock</span>
                <span>Your information is strictly private. Zero advance payment required.</span>
              </div>

            </form>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- =======================================================================
       4. FREQUENTLY ASKED QUESTIONS SECTION (Refixel Style 2-Column Responsive Grid)
       ======================================================================= -->
  <section class="contact-faq-section" aria-label="Frequently Asked Questions">
    <div class="container">
      
      <!-- Section Header -->
      <div class="contact-faq-head text-center">
        <span class="contact-faq-badge">❓ GOT QUESTIONS?</span>
        <h2 class="contact-faq-title">Frequently Asked <span class="text-fresh-green">Questions</span></h2>
        <p class="contact-faq-sub">
          Everything you need to know about booking, pricing, mechanized equipment, service warranty, and technician verification in Kashipur, Jaspur &amp; Ramnagar.
        </p>
      </div>

      <!-- 2-Column Responsive Accordion Grid -->
      <div class="contact-faq-grid">
        
        <!-- Col 1 (Questions 1 to 4) -->
        <div class="contact-faq-col">
          <?php for ($i = 0; $i < 4; $i++): $faq = $faqList[$i]; ?>
            <div class="contact-faq-card <?= ($i === 0) ? 'is-open' : '' ?>">
              <button type="button" class="contact-faq-trigger" onclick="toggleContactFaq(this)" aria-expanded="<?= ($i === 0) ? 'true' : 'false' ?>">
                <span class="contact-faq-question"><?= htmlspecialchars($faq['q']) ?></span>
                <span class="contact-faq-icon" aria-hidden="true">+</span>
              </button>
              <div class="contact-faq-body" <?= ($i === 0) ? 'style="display: block;"' : '' ?>>
                <p><?= htmlspecialchars($faq['a']) ?></p>
              </div>
            </div>
          <?php endfor; ?>
        </div>

        <!-- Col 2 (Questions 5 to 8) -->
        <div class="contact-faq-col">
          <?php for ($i = 4; $i < 8; $i++): $faq = $faqList[$i]; ?>
            <div class="contact-faq-card">
              <button type="button" class="contact-faq-trigger" onclick="toggleContactFaq(this)" aria-expanded="false">
                <span class="contact-faq-question"><?= htmlspecialchars($faq['q']) ?></span>
                <span class="contact-faq-icon" aria-hidden="true">+</span>
              </button>
              <div class="contact-faq-body">
                <p><?= htmlspecialchars($faq['a']) ?></p>
              </div>
            </div>
          <?php endfor; ?>
        </div>

      </div>

      <!-- Bottom Help Callout Box (Refixel Style Support Card) -->
      <div class="contact-faq-bottom-box">
        <div class="bottom-box-content">
          <span class="material-symbols-outlined bottom-box-icon">headset_mic</span>
          <div>
            <strong>Still have questions or need a custom quote?</strong>
            <p>Our Kashipur service coordinators are available on WhatsApp and call 7 days a week.</p>
          </div>
        </div>
        <div class="bottom-box-actions">
          <a href="<?= BUSINESS_WHATSAPP_LINK ?>" target="_blank" rel="noopener" class="btn btn-whatsapp-faq">
            <span class="material-symbols-outlined icon-xs">chat</span> WhatsApp Chat
          </a>
          <a href="tel:<?= BUSINESS_PHONE_RAW ?>" class="btn btn-call-faq">
            <span class="material-symbols-outlined icon-xs">call</span> <?= BUSINESS_PHONE ?>
          </a>
        </div>
      </div>

    </div>
  </section>

</div><!-- /.vorxus-contact-page -->

<!-- Floating Toast Notification -->
<div id="contact-toast" class="contact-floating-toast" role="status" aria-live="polite">
  <span class="material-symbols-outlined icon-sm toast-icon">check_circle</span>
  <span class="toast-message" id="contact-toast-msg">Thank you! Your inquiry has been dispatched.</span>
</div>

<!-- Contact Page Interactive Scripts -->
<script>
// FAQ Accordion Toggle
function toggleContactFaq(button) {
  const card = button.closest('.contact-faq-card');
  const body = card.querySelector('.contact-faq-body');
  const isExpanded = card.classList.contains('is-open');

  if (isExpanded) {
    card.classList.remove('is-open');
    button.setAttribute('aria-expanded', 'false');
    if (body) body.style.display = 'none';
  } else {
    card.classList.add('is-open');
    button.setAttribute('aria-expanded', 'true');
    if (body) body.style.display = 'block';
  }
}

// Form Submission Handler with Toast & WhatsApp Forward
function handleVorxusFormSubmit(e) {
  e.preventDefault();
  const name = document.getElementById('contact-name').value.trim();
  const email = document.getElementById('contact-email').value.trim();
  const phone = document.getElementById('contact-phone').value.trim();
  const service = document.getElementById('contact-service').value;
  const locality = document.getElementById('contact-locality').value.trim();
  const message = document.getElementById('contact-message').value.trim();

  const submitBtn = document.getElementById('vorxus-submit-btn');
  submitBtn.disabled = true;
  submitBtn.innerHTML = '<span class="material-symbols-outlined icon-sm spin-icon">sync</span> Dispatching...';

  setTimeout(function () {
    submitBtn.disabled = false;
    submitBtn.innerHTML = '<span>Message Sent Successfully!</span> <span class="material-symbols-outlined icon-sm">done</span>';
    
    // Show Toast
    const toast = document.getElementById('contact-toast');
    const toastMsg = document.getElementById('contact-toast-msg');
    if (toast && toastMsg) {
      toastMsg.textContent = 'Thank you ' + name + '! We received your ' + service + ' inquiry. Calling you shortly!';
      toast.classList.add('active');
      setTimeout(function () {
        toast.classList.remove('active');
      }, 4500);
    }

    // Auto prompt optional WhatsApp forward
    const waText = encodeURIComponent(
      'Hi A1 Cleaning! My name is ' + name + '.\n' +
      'Phone: ' + phone + '\n' +
      'Service: ' + service + '\n' +
      (locality ? 'Locality: ' + locality + '\n' : '') +
      (message ? 'Requirement: ' + message : '')
    );
    const waUrl = 'https://wa.me/<?= BUSINESS_PHONE_RAW ?>?text=' + waText;

    // Reset Form after 1.5s
    setTimeout(function () {
      document.getElementById('vorxus-contact-form').reset();
      submitBtn.innerHTML = '<span>Send Instant Inquiry & Request Callback</span> <span class="material-symbols-outlined icon-sm">send</span>';
      
      // Optionally open WhatsApp in background
      if (confirm('Would you also like to open WhatsApp to chat instantly with our dispatch manager?')) {
        window.open(waUrl, '_blank');
      }
    }, 1200);

  }, 650);
}
</script>

<!-- Vorxus Scoped Styles (Strict 4-Color Theme: Deep Green #0B2922, Fresh Green #22A06B, Soft Mint #EAF3EE, White #FFFFFF) -->
<style>
/* Page Wrapper */
.vorxus-contact-page {
  background: #0B2922;
  color: #FFFFFF;
  overflow-x: hidden;
}

/* ==========================================================================
   1. HERO SECTION (Vorxus Style - Compact & Breathable)
   ========================================================================== */
.vorxus-hero-section {
  padding: 2.75rem 0 2.5rem;
  background: radial-gradient(circle at 50% 15%, rgba(34, 160, 107, 0.20) 0%, rgba(11, 41, 34, 1) 75%);
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}
.vorxus-title-wrap {
  max-width: 640px;
  margin: 0 auto 2.25rem;
}
.vorxus-main-title {
  font-size: clamp(1.75rem, 2.6vw, 2.2rem);
  font-weight: 800;
  color: #FFFFFF;
  letter-spacing: -0.02em;
  margin-bottom: 0.65rem;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
}
.vorxus-title-pill {
  background: #FFFFFF;
  color: #0B2922;
  padding: 0.12rem 0.75rem;
  border-radius: 6px;
  display: inline-block;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.25);
  line-height: 1.25;
}
.vorxus-lead {
  font-size: 0.88rem;
  color: #A3BFB3;
  line-height: 1.5;
  margin: 0;
}

/* 3 Highlight Cards Grid - Compact & Breathable */
.vorxus-cards-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.25rem;
  max-width: 1060px;
  margin: 0 auto;
}
@media (max-width: 900px) {
  .vorxus-cards-grid {
    grid-template-columns: 1fr;
    gap: 0.85rem;
    max-width: 520px;
  }
}
.vorxus-info-card {
  background: rgba(255, 255, 255, 0.035);
  border: 1px solid rgba(255, 255, 255, 0.09);
  border-radius: 14px;
  padding: 1.35rem 1.35rem 1.2rem;
  text-align: left;
  display: flex;
  flex-direction: column;
  transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.25s, box-shadow 0.25s;
  box-shadow: 0 6px 22px rgba(0, 0, 0, 0.2);
  backdrop-filter: blur(6px);
}
.vorxus-info-card:hover {
  transform: translateY(-3px);
  border-color: rgba(34, 160, 107, 0.45);
  box-shadow: 0 10px 28px rgba(0, 0, 0, 0.3);
}
.vorxus-card-icon-wrap {
  width: 38px;
  height: 38px;
  border-radius: 50%;
  background: rgba(34, 160, 107, 0.14);
  border: 1.5px solid rgba(34, 160, 107, 0.35);
  color: #22A06B;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 0.85rem;
  flex-shrink: 0;
}
.vorxus-card-icon-wrap span {
  font-size: 20px;
}
.vorxus-card-val {
  font-size: 1.08rem;
  font-weight: 800;
  color: #FFFFFF;
  margin-bottom: 0.35rem;
  letter-spacing: -0.01em;
  word-break: break-word;
}
.vorxus-card-desc {
  font-size: 0.78rem;
  color: #8FA89C;
  line-height: 1.48;
  margin: 0 0 1rem;
  flex: 1;
}
.vorxus-card-footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-top: 1px solid rgba(255, 255, 255, 0.07);
  padding-top: 0.75rem;
}
.vorxus-pill-tag {
  background: rgba(255, 255, 255, 0.06);
  color: #D2E4DC;
  font-size: 0.68rem;
  font-weight: 700;
  padding: 0.22rem 0.65rem;
  border-radius: 14px;
  border: 1px solid rgba(255, 255, 255, 0.06);
  letter-spacing: 0.02em;
}
.vorxus-action-link {
  color: #22A06B;
  font-size: 0.78rem;
  font-weight: 700;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 0.25rem;
  transition: transform 0.2s ease, color 0.2s;
}
.vorxus-action-link:hover {
  color: #34D399;
  transform: translateX(3px);
}
.vorxus-action-link.text-whatsapp {
  color: #25D366;
}

/* ==========================================================================
   2. TRUST / CERTIFICATION RIBBON (Pure White Background & Black Text)
   ========================================================================== */
.vorxus-trust-ribbon {
  background: #FFFFFF;
  border-top: 1px solid #E5EFE9;
  border-bottom: 1px solid #E5EFE9;
  padding: 0.95rem 0;
  box-shadow: 0 2px 10px rgba(11, 41, 34, 0.04);
}
.vorxus-trust-items-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
  flex-wrap: wrap;
}
.vorxus-trust-item {
  display: flex;
  align-items: center;
  gap: 0.45rem;
  font-size: 0.78rem;
  font-weight: 700;
  color: #0B2922;
}
.vorxus-trust-item span:not(.material-symbols-outlined) {
  color: #0B2922;
  font-weight: 700;
}
.vorxus-trust-item .material-symbols-outlined {
  color: #22A06B !important;
  font-size: 20px;
}
@media (max-width: 768px) {
  .vorxus-trust-items-row {
    justify-content: center;
    gap: 0.75rem 1.25rem;
  }
}

/* ==========================================================================
   3. TWO-COLUMN SECTION: GET IN TOUCH + FORM (Vorxus Style - Compact)
   ========================================================================== */
.vorxus-main-section {
  padding: 3rem 0 3.25rem;
  background: #0B2922;
}
.vorxus-2col-layout {
  display: grid;
  grid-template-columns: 1fr 1.05fr;
  gap: 2.75rem;
  align-items: start;
  max-width: 1060px;
  margin: 0 auto;
}
@media (max-width: 960px) {
  .vorxus-2col-layout {
    grid-template-columns: 1fr;
    gap: 2rem;
  }
}

/* Left Column */
.vorxus-col-left {
  display: flex;
  flex-direction: column;
}
.vorxus-section-tag {
  color: #22A06B;
  font-size: 0.72rem;
  font-weight: 800;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  margin-bottom: 0.45rem;
}
.vorxus-section-heading {
  font-size: clamp(1.45rem, 2.2vw, 1.85rem);
  font-weight: 800;
  color: #FFFFFF;
  line-height: 1.25;
  margin: 0 0 0.75rem;
}
.vorxus-section-lead {
  font-size: 0.84rem;
  color: #8FA89C;
  line-height: 1.5;
  margin: 0 0 1.25rem;
}
.vorxus-social-channels {
  display: flex;
  align-items: center;
  gap: 0.65rem;
  margin-bottom: 1.75rem;
}
.vorxus-social-circle {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
  color: #FFFFFF;
  display: flex;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  transition: all 0.2s ease;
}
.vorxus-social-circle span {
  font-size: 18px;
}
.vorxus-social-circle:hover {
  background: #22A06B;
  border-color: #22A06B;
  transform: translateY(-2px);
}
.vorxus-social-circle.circle-whatsapp:hover {
  background: #25D366;
  border-color: #25D366;
}

/* Map Card */
.vorxus-map-block {
  margin-top: 0.25rem;
}
.vorxus-map-title {
  font-size: 1.05rem;
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 0.65rem;
}
.vorxus-map-wrapper {
  border-radius: 12px;
  overflow: hidden;
  border: 1px solid rgba(255, 255, 255, 0.12);
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
  margin-bottom: 0.65rem;
}
.vorxus-map-wrapper iframe {
  height: 240px;
}
.vorxus-map-meta {
  display: flex;
  align-items: center;
  gap: 0.35rem;
  font-size: 0.76rem;
  color: #85A394;
  line-height: 1.4;
}

/* Right Column: Form Card (Vorxus Style - Compact) */
.vorxus-form-card {
  background: rgba(255, 255, 255, 0.035);
  border: 1px solid rgba(255, 255, 255, 0.09);
  border-radius: 16px;
  padding: 1.65rem 1.65rem;
  box-shadow: 0 12px 32px rgba(0, 0, 0, 0.3);
  backdrop-filter: blur(8px);
}
@media (max-width: 580px) {
  .vorxus-form-card {
    padding: 1.25rem 1rem;
  }
}
.vorxus-form-header {
  margin-bottom: 1.25rem;
}
.vorxus-form-title {
  font-size: 1.25rem;
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 0.3rem;
}
.vorxus-form-desc {
  font-size: 0.78rem;
  color: #8FA89C;
  margin: 0;
  line-height: 1.45;
}
.vorxus-form-row-2col {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 0.85rem;
}
@media (max-width: 580px) {
  .vorxus-form-row-2col {
    grid-template-columns: 1fr;
    gap: 0;
  }
}
.vorxus-form-group {
  margin-bottom: 0.85rem;
}
.vorxus-label {
  display: block;
  font-size: 0.74rem;
  font-weight: 700;
  color: #C0D6CB;
  margin-bottom: 0.35rem;
}
.vorxus-input {
  width: 100%;
  background: rgba(0, 0, 0, 0.24);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: 8px;
  color: #FFFFFF;
  padding: 0.6rem 0.85rem;
  font-size: 0.84rem;
  font-family: inherit;
  outline: none;
  transition: all 0.2s ease;
  box-sizing: border-box;
}
.vorxus-input:focus {
  border-color: #22A06B;
  background: rgba(0, 0, 0, 0.38);
  box-shadow: 0 0 0 2px rgba(34, 160, 107, 0.25);
}
.vorxus-input::placeholder {
  color: #5D796C;
}
.vorxus-select {
  appearance: none;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='14' height='14' fill='%2322A06B' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 0.85rem center;
  background-size: 12px;
  padding-right: 2rem;
  cursor: pointer;
}
.vorxus-select option {
  background: #0B2922;
  color: #FFFFFF;
}
.vorxus-textarea {
  resize: vertical;
  min-height: 75px;
}
.vorxus-form-submit-wrap {
  margin-top: 1.15rem;
}
.vorxus-btn-submit {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.45rem;
  background: #22A06B;
  color: #FFFFFF;
  font-size: 0.88rem;
  font-weight: 800;
  padding: 0.75rem 1.25rem;
  border-radius: 8px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  box-shadow: 0 4px 16px rgba(34, 160, 107, 0.3);
}
.vorxus-btn-submit:hover {
  background: #198754;
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(34, 160, 107, 0.4);
}
.vorxus-btn-submit:active {
  transform: scale(0.98);
}
.vorxus-btn-submit:disabled {
  opacity: 0.7;
  cursor: not-allowed;
  transform: none;
}
.vorxus-form-guarantee {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.35rem;
  font-size: 0.72rem;
  color: #7D9C8D;
  margin-top: 0.75rem;
  text-align: center;
}

/* ==========================================================================
   4. FREQUENTLY ASKED QUESTIONS SECTION (Refixel Style 2-Column Responsive - Compact)
   ========================================================================== */
.contact-faq-section {
  background: #F8FBF9;
  color: #0B2922;
  border-top: 1px solid rgba(255, 255, 255, 0.08);
  padding: 3rem 0 3.5rem;
}
.contact-faq-head {
  max-width: 640px;
  margin: 0 auto 2.25rem;
}
.contact-faq-badge {
  display: inline-flex;
  align-items: center;
  gap: 0.3rem;
  background: #EAF3EE;
  color: #0B2922;
  border: 1px solid #D2E3D8;
  font-size: 0.72rem;
  font-weight: 800;
  letter-spacing: 0.06em;
  padding: 0.3rem 0.85rem;
  border-radius: 50px;
  margin-bottom: 0.65rem;
  text-transform: uppercase;
}
.contact-faq-title {
  font-size: clamp(1.45rem, 2.4vw, 1.85rem);
  font-weight: 800;
  color: #0B2922;
  margin: 0 0 0.45rem;
  letter-spacing: -0.02em;
}
.contact-faq-sub {
  color: #556B63;
  font-size: 0.86rem;
  line-height: 1.45;
  margin: 0;
}
.contact-faq-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 1rem;
  align-items: start;
  max-width: 1060px;
  margin: 0 auto;
}
@media (max-width: 860px) {
  .contact-faq-grid {
    grid-template-columns: 1fr;
    gap: 0.75rem;
  }
}
.contact-faq-col {
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
}
.contact-faq-card {
  background: #FFFFFF;
  border: 1.5px solid #E2ECE5;
  border-radius: 12px;
  transition: all 0.22s ease;
  box-shadow: 0 2px 8px rgba(11, 41, 34, 0.02);
  overflow: hidden;
}
.contact-faq-card:hover {
  border-color: #B8D6C6;
  box-shadow: 0 4px 14px rgba(11, 41, 34, 0.05);
}
.contact-faq-card.is-open {
  border-color: #22A06B;
  box-shadow: 0 4px 18px rgba(34, 160, 107, 0.1);
}
.contact-faq-trigger {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0.9rem 1.15rem;
  background: transparent;
  border: none;
  cursor: pointer;
  text-align: left;
  gap: 0.85rem;
  font-family: inherit;
}
.contact-faq-question {
  font-size: 0.86rem;
  font-weight: 700;
  color: #0B2922;
  line-height: 1.4;
  transition: color 0.18s ease;
}
.contact-faq-card.is-open .contact-faq-question {
  color: #22A06B;
  font-weight: 800;
}
.contact-faq-icon {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background: #F0F5F2;
  color: #0B2922;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 16px;
  font-weight: 600;
  flex-shrink: 0;
  transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
  line-height: 1;
}
.contact-faq-card.is-open .contact-faq-icon {
  background: #22A06B;
  color: #FFFFFF;
  transform: rotate(45deg);
}
.contact-faq-body {
  display: none;
  padding: 0 1.15rem 1rem;
  border-top: 1px dashed #EAF3EE;
  padding-top: 0.75rem;
}
.contact-faq-body p {
  margin: 0;
  color: #4B5E55;
  font-size: 0.8rem;
  line-height: 1.55;
}

/* Bottom Callout Box */
.contact-faq-bottom-box {
  margin-top: 2.25rem;
  background: #FFFFFF;
  border: 1.5px solid #E2ECE5;
  border-radius: 14px;
  padding: 1.15rem 1.5rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1.25rem;
  flex-wrap: wrap;
  box-shadow: 0 3px 12px rgba(11, 41, 34, 0.04);
  max-width: 1060px;
  margin-left: auto;
  margin-right: auto;
}
.bottom-box-content {
  display: flex;
  align-items: center;
  gap: 0.85rem;
}
.bottom-box-icon {
  font-size: 26px;
  color: #22A06B;
  background: #EAF3EE;
  width: 44px;
  height: 44px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}
.bottom-box-content strong {
  font-size: 0.94rem;
  color: #0B2922;
  display: block;
  margin-bottom: 2px;
}
.bottom-box-content p {
  margin: 0;
  color: #556B63;
  font-size: 0.8rem;
}
.bottom-box-actions {
  display: flex;
  align-items: center;
  gap: 0.75rem;
}
.btn-whatsapp-faq {
  display: inline-flex;
  align-items: center;
  gap: 0.45rem;
  background: #22A06B;
  color: #FFFFFF;
  font-weight: 700;
  font-size: 0.88rem;
  padding: 0.65rem 1.25rem;
  border-radius: 8px;
  text-decoration: none;
  transition: background 0.15s ease;
}
.btn-whatsapp-faq:hover {
  background: #198754;
}
.btn-call-faq {
  display: inline-flex;
  align-items: center;
  gap: 0.45rem;
  background: #EAF3EE;
  color: #0B2922;
  border: 1px solid #D2E3D8;
  font-weight: 700;
  font-size: 0.88rem;
  padding: 0.65rem 1.25rem;
  border-radius: 8px;
  text-decoration: none;
  transition: background 0.15s ease;
}
.btn-call-faq:hover {
  background: #D7EBE0;
}
@media (max-width: 640px) {
  .contact-faq-bottom-box {
    flex-direction: column;
    align-items: flex-start;
  }
  .bottom-box-actions {
    width: 100%;
    flex-direction: column;
  }
  .btn-whatsapp-faq,
  .btn-call-faq {
    width: 100%;
    justify-content: center;
  }
}

/* Floating Toast */
.contact-floating-toast {
  position: fixed;
  bottom: 80px;
  left: 50%;
  transform: translateX(-50%) translateY(30px);
  background: #0B2922;
  color: #FFFFFF;
  padding: 0.85rem 1.35rem;
  border-radius: 50px;
  display: flex;
  align-items: center;
  gap: 0.6rem;
  font-size: 0.88rem;
  font-weight: 700;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
  border: 1.5px solid #22A06B;
  z-index: 100002;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  max-width: 90vw;
  text-align: center;
}
.contact-floating-toast.active {
  opacity: 1;
  visibility: visible;
  transform: translateX(-50%) translateY(0);
}
.contact-floating-toast .toast-icon {
  color: #22A06B;
}
.spin-icon {
  animation: spin 1s linear infinite;
}
@keyframes spin {
  from { transform: rotate(0deg); }
  to { transform: rotate(360deg); }
}
</style>

<?php require __DIR__ . '/../components/footer.php'; ?>

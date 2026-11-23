<?php
/**
 * Contact Us View: /contact/
 * 100% Consistent NAP Data with Google Map & Direct Call/WhatsApp Links
 * Includes Refixel-Style 2-Column SEO Frequently Asked Questions & FAQPage Schema
 */
$pageTitle = "Contact A1 Cleaning | Kashipur, Uttarakhand Helpline & FAQs";
$pageDescription = "Contact A1 Cleaning in Kashipur, Uttarakhand. Call " . BUSINESS_PHONE . ", chat on WhatsApp, find our operating hours, service area map, and read verified FAQs.";
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

<section class="hero-section">
  <div class="container text-center">
    <h1>Contact A1 Cleaning</h1>
    <p class="hero-lead" style="margin-left: auto; margin-right: auto;">
      We are here to help. Reach out to our local team in Kashipur for instant quotes, inquiries, and schedule planning.
    </p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 3rem;">
      <!-- Contact Information & NAP -->
      <div>
        <h2>Get in Touch</h2>
        <p style="color: var(--color-text-muted); margin-bottom: 2rem;">
          Our dispatch office is located in Kashipur, sending professional cleaning units directly to your doorstep in Kashipur, Jaspur, Ramnagar, and nearby towns.
        </p>

        <div style="margin-bottom: 1.5rem; display: flex; align-items: flex-start; gap: 1rem;">
          <div style="color: var(--color-fresh-green);"><span class="material-symbols-outlined icon-lg">location_on</span></div>
          <div>
            <strong>Registered Office &amp; Operations:</strong><br>
            <?= BUSINESS_NAME ?><br>
            <?= BUSINESS_STREET ?>,<br>
            <?= BUSINESS_CITY ?>, <?= BUSINESS_STATE ?> - <?= BUSINESS_POSTCODE ?>, India
          </div>
        </div>

        <div style="margin-bottom: 1.5rem; display: flex; align-items: flex-start; gap: 1rem;">
          <div style="color: var(--color-fresh-green);"><span class="material-symbols-outlined icon-lg">call</span></div>
          <div>
            <strong>Phone Numbers:</strong><br>
            <a href="tel:<?= BUSINESS_PHONE_RAW ?>" style="font-weight: 600; font-size: 1.1rem;"><?= BUSINESS_PHONE ?></a>
          </div>
        </div>

        <div style="margin-bottom: 1.5rem; display: flex; align-items: flex-start; gap: 1rem;">
          <div style="color: var(--color-fresh-green);"><span class="material-symbols-outlined icon-lg">chat</span></div>
          <div>
            <strong>WhatsApp Quick Support:</strong><br>
            <a href="<?= BUSINESS_WHATSAPP_LINK ?>" target="_blank" rel="noopener" class="btn btn-whatsapp" style="margin-top: 0.5rem; min-height: 40px; padding: 0.4rem 1rem;">
              Chat on WhatsApp
            </a>
          </div>
        </div>

        <div style="margin-bottom: 1.5rem; display: flex; align-items: flex-start; gap: 1rem;">
          <div style="color: var(--color-fresh-green);"><span class="material-symbols-outlined icon-lg">mail</span></div>
          <div>
            <strong>Official Email:</strong><br>
            <a href="mailto:<?= BUSINESS_EMAIL ?>"><?= BUSINESS_EMAIL ?></a>
          </div>
        </div>

        <div style="display: flex; align-items: flex-start; gap: 1rem;">
          <div style="font-size: 1.5rem; color: var(--color-accent);">⏱️</div>
          <div>
            <strong>Operating Working Hours:</strong><br>
            Monday to Saturday: 08:00 AM – 07:00 PM<br>
            Sunday: By Prior Appointment
          </div>
        </div>
      </div>

      <!-- Google Map & Coverage Area -->
      <div>
        <div style="background: var(--color-light-bg); border-radius: var(--radius-md); padding: 1.5rem; border: 1px solid var(--color-border);">
          <h3 style="margin-bottom: 1rem;">Our Operating Location</h3>
          <div style="border-radius: var(--radius-sm); overflow: hidden; box-shadow: var(--shadow-sm); margin-bottom: 1.25rem;">
            <!-- Embedded Google Map -->
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55684.77673551532!2d78.920703!3d29.210419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390a424a1b0b65f3%3A0x6b1e6a978f8d6728!2sKashipur%2C%20Uttarakhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
              width="100%" 
              height="320" 
              style="border:0; display:block;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade"
              title="A1 Cleaning Service Area Map">
            </iframe>
          </div>
          <p style="font-size: 0.9rem; color: var(--color-text-muted); margin: 0;">
            Serving Kashipur, Jaspur, Ramnagar, Bazpur, Kundeshwari, and all localities within a 60-kilometer operational radius.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================================
     FREQUENTLY ASKED QUESTIONS SECTION (Refixel Style 2-Column Responsive Grid)
     ========================================================================= -->
<section class="contact-faq-section" aria-label="Frequently Asked Questions">
  <div class="container">
    
    <!-- Section Header (Refixel Style) -->
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

<!-- FAQ Accordion Interactive Script -->
<script>
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
</script>

<!-- FAQ Section Styling (Scoped & 4-Color Brand Compliant) -->
<style>
.contact-faq-section {
  background: #F8FBF9;
  border-top: 1px solid #E2ECE5;
  padding: 4rem 0 4.5rem;
}
.contact-faq-badge {
  display: inline-flex;
  align-items: center;
  gap: 0.35rem;
  background: #EAF3EE;
  color: #0B2922;
  border: 1px solid #D2E3D8;
  font-size: 0.78rem;
  font-weight: 800;
  letter-spacing: 0.06em;
  padding: 0.4rem 1.1rem;
  border-radius: 50px;
  margin-bottom: 0.85rem;
  text-transform: uppercase;
}
.contact-faq-title {
  font-size: clamp(1.8rem, 3.2vw, 2.4rem);
  font-weight: 800;
  color: #0B2922;
  margin: 0 0 0.65rem;
  letter-spacing: -0.02em;
}
.contact-faq-sub {
  color: #556B63;
  font-size: 1rem;
  line-height: 1.55;
  max-width: 680px;
  margin: 0 auto 2.5rem;
}
.contact-faq-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 1.25rem;
  align-items: start;
}
@media (max-width: 860px) {
  .contact-faq-grid {
    grid-template-columns: 1fr;
    gap: 0.85rem;
  }
}
.contact-faq-col {
  display: flex;
  flex-direction: column;
  gap: 0.85rem;
}
.contact-faq-card {
  background: #FFFFFF;
  border: 1.5px solid #E2ECE5;
  border-radius: 14px;
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
  padding: 1.15rem 1.35rem;
  background: transparent;
  border: none;
  cursor: pointer;
  text-align: left;
  gap: 1rem;
  font-family: inherit;
}
.contact-faq-question {
  font-size: 0.96rem;
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
  width: 28px;
  height: 28px;
  border-radius: 50%;
  background: #F0F5F2;
  color: #0B2922;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 19px;
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
  padding: 0 1.35rem 1.25rem;
  border-top: 1px dashed #EAF3EE;
  padding-top: 0.85rem;
}
.contact-faq-body p {
  margin: 0;
  color: #4B5E55;
  font-size: 0.88rem;
  line-height: 1.6;
}

/* Bottom Callout Box */
.contact-faq-bottom-box {
  margin-top: 2.75rem;
  background: #FFFFFF;
  border: 1.5px solid #E2ECE5;
  border-radius: 16px;
  padding: 1.35rem 1.75rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1.5rem;
  flex-wrap: wrap;
  box-shadow: 0 3px 12px rgba(11, 41, 34, 0.04);
}
.bottom-box-content {
  display: flex;
  align-items: center;
  gap: 1rem;
}
.bottom-box-icon {
  font-size: 34px;
  color: #22A06B;
  background: #EAF3EE;
  width: 52px;
  height: 52px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}
.bottom-box-content strong {
  font-size: 1.02rem;
  color: #0B2922;
  display: block;
  margin-bottom: 2px;
}
.bottom-box-content p {
  margin: 0;
  color: #556B63;
  font-size: 0.86rem;
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
</style>

<?php require __DIR__ . '/../components/footer.php'; ?>

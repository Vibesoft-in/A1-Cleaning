<?php
/**
 * Dedicated Customer Reviews & Ratings Portal View: /reviews/
 * High-Converting Luxury Dark Bento-Grid Showcase (Inspired by Modern Dribbble/Bento Design)
 * Strict 4-Color Theme: Deep Green (#071914 / #0B2922), Fresh Green (#22A06B), Soft Mint (#EAF3EE), White (#FFFFFF)
 */
require_once __DIR__ . '/../components/icons.php';

$pageTitle = "Customer Reviews & Real Feedback in Kashipur, Jaspur & Ramnagar | A1 Cleaning";
$pageDescription = "Read verified customer reviews of A1 Cleaning services. 4.9/5 average rating across 500+ residential and commercial cleanings in Uttarakhand.";
$canonicalUrl = SeoHelper::getCanonicalUrl('reviews');
$currentRoute = 'reviews';

require __DIR__ . '/../components/header.php';
?>

<!-- Schema.org AggregateRating for Rich Google Search Snippets -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "A1 Cleaning Services Kashipur",
  "image": "<?= SITE_URL ?>/assets/images/about%20page/A1%20Cleaning%20Team%20in%20Action.png",
  "telephone": "+91-7906366271",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Awas Vikas Colony, Ramnagar Road",
    "addressLocality": "Kashipur",
    "addressRegion": "Uttarakhand",
    "postalCode": "244713",
    "addressCountry": "IN"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "524",
    "bestRating": "5",
    "worstRating": "1"
  }
}
</script>

<!-- Google Font: Caveat for Authentic Hand-Drawn Doodle Annotations -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&display=swap">

<!-- =======================================================================
     LUXURY DARK BENTO-GRID REVIEWS CANVAS
     Atmospheric Deep Forest Canvas (#071914) with Glowing Emerald & Teal Ambience
     ======================================================================= -->
<div class="rev-dark-canvas" id="reviewsPortal">

  <!-- Floating Ambient Glowing Orbs -->
  <div class="rev-ambient-glow rev-glow-top-left" aria-hidden="true"></div>
  <div class="rev-ambient-glow rev-glow-bottom-right" aria-hidden="true"></div>
  <div class="rev-ambient-glow rev-glow-center" aria-hidden="true"></div>

  <div class="container rev-canvas-container">

    <!-- ===================================================================
         TOP NAVIGATION BAR (Matching Reference 1:1)
         ❝ REviews. | Links: About • Services • Testimonials • Support | Home
         =================================================================== -->
    <header class="rev-showcase-header">
      <div class="rev-brand-title">
        <span class="rev-quote-badge" aria-hidden="true">❝</span>
        <span class="rev-logo-text">REviews.</span>
      </div>

      <nav class="rev-nav-links" aria-label="Review Categories">
        <button type="button" class="rev-nav-link active" onclick="filterBentoReviews('all', this)">All (520+)</button>
        <button type="button" class="rev-nav-link" onclick="filterBentoReviews('home', this)">Home Care</button>
        <button type="button" class="rev-nav-link" onclick="filterBentoReviews('sofa', this)">Sofa &amp; Fabric</button>
        <button type="button" class="rev-nav-link" onclick="filterBentoReviews('resort', this)">Resorts &amp; Villas</button>
        <button type="button" class="rev-nav-link" onclick="filterBentoReviews('tank', this)">Water Tank</button>
      </nav>

      <div class="rev-header-actions">
        <a href="<?= SITE_URL ?>/" class="rev-home-pill" title="Return to A1 Cleaning Home">
          <span class="material-symbols-outlined icon-xs">home</span>
          <span>Home</span>
        </a>
      </div>
    </header>

    <!-- Sub-header Headline for SEO & Authority -->
    <div class="rev-hero-intro text-center">
      <h1 class="rev-hero-title">Verified Customer Experiences</h1>
      <p class="rev-hero-sub">
        Explore genuine feedback, ratings, and unedited satisfaction reports from families, resorts, and businesses across Kashipur, Jaspur &amp; Ramnagar.
      </p>
    </div>

    <!-- ===================================================================
         VERIFIED VIDEO REVIEWS: 3D ARCHED CYLINDER VIDEO RIBBON
         Inspired by Modern Hero Video Ribbon (Continuous 60fps auto-scroll,
         uniform vertical cards, 3D parabolic arch, rotateY & depth curve, soft fade)
         =================================================================== -->
    <section class="rev-video-carousel-section" aria-label="Customer Video Reviews 3D Arched Ribbon">
      <div class="rev-video-section-header text-center">
        <div class="rev-video-badge">
          <span class="rev-video-badge-dot"></span>
          <span>Verified Video Proof</span>
        </div>
        <div class="rev-video-title-wrap">
          <h2 class="rev-video-heading">Live Cleaning In Action</h2>
          <!-- Hand-Drawn Doodle Annotation (Matching Reference Aesthetic) -->
          <div class="rev-doodle-annotation" aria-hidden="true">
            <span class="rev-doodle-text">100% Unedited Proof</span>
            <svg class="rev-doodle-arrow" width="34" height="30" viewBox="0 0 34 30" fill="none" stroke="currentColor">
              <path d="M4 4C12 4 26 8 28 22M28 22L22 19M28 22L31 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
        <p class="rev-video-subheading">Swipe or drag in any direction (left &amp; right) to explore verified doorstep cleaning results across Uttarakhand.</p>
      </div>

      <div class="rev-cylinder-viewport" id="cylinderViewport">
        <div class="rev-cylinder-track" id="cylinderTrack">
          <?php
          $videoReviews = [
            ['file' => 'sofa_shampoo_cleaning_6c6a0420.mp4', 'customer' => 'Ankit Chauhan', 'service' => 'Sofa Foam Extraction', 'badge' => 'Living Room'],
            ['file' => 'bathroom_deep_cleaning_9d6155cb_1080p.mp4', 'customer' => 'Vikram Rawat', 'service' => 'Bathroom Descaling', 'badge' => 'Deep Scrub'],
            ['file' => 'deep_home_cleaning_6ce7a0e5.mp4', 'customer' => 'Dr. Alok Verma', 'service' => 'Full Villa Deep Sanitization', 'badge' => 'Full Villa'],
            ['file' => 'balcony_and_floor_deep_scrub_9643e5bc_1080p.mp4', 'customer' => 'Ritu Joshi', 'service' => 'Balcony & Tile Rotary Scrub', 'badge' => 'Pressure Scrub'],
            ['file' => 'Person_cleaning_kitchen_82bbe15d.mp4', 'customer' => 'Meenakshi Pant', 'service' => 'Kitchen Chimney & Degreasing', 'badge' => 'Kitchen Care'],
            ['file' => 'carpet_and_rug_deep_wash_ed47a45e.mp4', 'customer' => 'Deepak Mehrotra', 'service' => 'Kashmiri Carpet Injection', 'badge' => 'Fabric Care'],
            ['file' => 'Person_cleaning_water_tank_bc0ad2f8.mp4', 'customer' => 'Praveen Bisht', 'service' => 'Water Tank UV Sanitization', 'badge' => 'Pure Water'],
            ['file' => 'curtain_steam_clean_6bd86d98.mp4', 'customer' => 'Sunita Agarwal', 'service' => 'Curtain On-Site Steaming', 'badge' => 'Steam Care']
          ];

          // Tripled array to ensure seamless infinite looping across all screen sizes
          $loopVideos = array_merge($videoReviews, $videoReviews, $videoReviews);

          foreach ($loopVideos as $idx => $v):
            $videoSrc = SITE_URL . '/assets/cleaning%20videos/' . rawurlencode($v['file']);
          ?>
            <article class="rev-cylinder-card" data-index="<?= $idx ?>" tabindex="0" role="article" aria-label="Review by <?= htmlspecialchars($v['customer']) ?>">
              <video 
                class="rev-cylinder-video" 
                src="<?= $videoSrc ?>#t=0.5" 
                preload="auto" 
                muted 
                loop 
                playsinline 
                webkit-playsinline 
                autoplay
              ></video>
              <span class="rev-cylinder-pill"><?= htmlspecialchars($v['badge']) ?></span>
              <div class="rev-cylinder-overlay">
                <div class="rev-cylinder-name"><?= htmlspecialchars($v['customer']) ?></div>
                <div class="rev-cylinder-serv"><?= htmlspecialchars($v['service']) ?></div>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ===================================================================
         THE BENTO GRID CANVAS (11 Distinct Cards matching User Reference 1:1)
         =================================================================== -->
    <main class="rev-bento-layout" id="revBentoGrid">

      <!-- ===============================================================
           COLUMN 1 (LEFT): TALL STORY CARD + TAGGED TESTIMONIAL
           =============================================================== -->
      <div class="rev-bento-col rev-col-left">

        <!-- CARD 1: Left Tall Story Card with Delivery/Work Photo (Matches Reference) -->
        <article class="rev-card rev-card-story" data-cat="home">
          <button type="button" class="rev-card-close" onclick="dismissCard(this)" aria-label="Dismiss card">✕</button>
          
          <div class="rev-story-content">
            <div class="rev-stars-row">
              <span class="rev-star">★</span>
              <span class="rev-star">★</span>
              <span class="rev-star">★</span>
              <span class="rev-star">★</span>
              <span class="rev-star">★</span>
            </div>

            <h3 class="rev-story-headline">
              Highly satisfied with doorstep service, thank you!
            </h3>

            <div class="rev-story-pills">
              <span class="rev-pill-tag">⚡ Rapid Dispatch</span>
              <span class="rev-pill-tag">🌱 Eco Chemicals</span>
              <span class="rev-pill-tag">⭐ 100% Verified</span>
            </div>

            <div class="rev-story-author">
              – @VikasAgarwal • Kashipur –
            </div>
          </div>

          <!-- Bottom High-Res Action Photograph -->
          <div class="rev-story-media">
            <img src="<?= SITE_URL ?>/assets/images/about%20page/Professional%20Green%20Team%20Cleaning%20a%20Modern%20Living%20Room.png" 
                 alt="A1 Cleaning team scrubbing living room" 
                 class="rev-story-img" 
                 loading="lazy">
            <div class="rev-media-badge">
              <span class="material-symbols-outlined icon-xs text-fresh-green">verified</span>
              <span>Floor Rotary Scrubbing</span>
            </div>
          </div>
        </article>

        <!-- CARD 11: Tagged Testimonial Card (Matches Reference Bottom-Left) -->
        <article class="rev-card rev-card-tagged" data-cat="sofa">
          <div class="rev-stars-row mb-2">
            <span class="rev-star">★</span>
            <span class="rev-star">★</span>
            <span class="rev-star">★</span>
            <span class="rev-star">★</span>
            <span class="rev-star">★</span>
          </div>

          <p class="rev-tagged-text">
            "Tile grout and sofa stains were completely extracted without any harsh chemical odour. Polite, verified technicians who respect home privacy."
          </p>

          <div class="rev-tagged-bottom">
            <span class="rev-pill-tag rev-pill-accent">Great service</span>
            <div class="rev-tagged-author">
              <img src="<?= SITE_URL ?>/assets/images/testimonials/customer-avatar-woman.jpg" alt="Elizabeth Jones" class="rev-mini-avatar">
              <div>
                <strong class="rev-author-name">Elizabeth Jones</strong>
                <span class="rev-author-role">Awas Vikas, Kashipur</span>
              </div>
            </div>
          </div>
        </article>

      </div><!-- /.rev-col-left -->


      <!-- ===============================================================
           COLUMN 2 (CENTER): CAPSULE + HERO FEATURED + FEEDBACK SLIDER
           =============================================================== -->
      <div class="rev-bento-col rev-col-center">

        <!-- CARD 2: Floating Capsule Testimonial (Matches Reference Top-Center) -->
        <article class="rev-card rev-card-capsule" data-cat="home">
          <div class="rev-capsule-head">
            <div class="rev-author-group">
              <div class="rev-avatar-duo">
                <img src="<?= SITE_URL ?>/assets/images/testimonials/customer-avatar-man.jpg" alt="Sonia" class="rev-duo-img duo-1">
                <img src="<?= SITE_URL ?>/assets/images/testimonials/customer-avatar-woman.jpg" alt="Robert" class="rev-duo-img duo-2">
              </div>
              <div>
                <div class="rev-capsule-name">Sonia &amp; Rohit Sharma</div>
                <div class="rev-capsule-time">2 days ago • Ramnagar Road</div>
              </div>
            </div>
            <div class="rev-score-badge">★ 5.0/5.0</div>
          </div>

          <p class="rev-capsule-body" id="capsuleBodyText">
            "I absolutely love the mechanized cleaning of our home. It's not only spotless but also very fresh, making it a perfect addition to our seasonal maintenance routine."
            <span class="rev-expanded-body" id="capsuleMoreText"> The team arrived with heavy German extraction vacuums and divergence chemicals. They cleaned all balcony glass panes and tile lines until everything reflected like a mirror!</span>
          </p>

          <button type="button" class="rev-toggle-btn" onclick="toggleCapsuleText(this)" aria-expanded="false">
            ▾ Read more
          </button>
        </article>

        <!-- CARD 5: Center Large Hero Featured Review (Matches Reference Center-Stage) -->
        <article class="rev-card rev-card-hero" data-cat="resort">
          <div class="rev-hero-top">
            <div class="rev-author-meta">
              <img src="<?= SITE_URL ?>/assets/images/testimonials/customer-avatar-man.jpg" alt="Matthew Rawat" class="rev-hero-avatar">
              <div>
                <h4 class="rev-hero-name">Matthew Rawat</h4>
                <div class="rev-hero-subtitle">Director at Corbett Greens Luxury Resort</div>
              </div>
            </div>
            
            <div class="rev-hero-rating-wrap">
              <div class="rev-dots-more" title="Verified Customer Feedback">•••</div>
              <span class="rev-pill-stars">★★★★★</span>
            </div>
          </div>

          <h2 class="rev-hero-quote">
            Prompt and helpful responses to our resort maintenance inquiry!
          </h2>

          <p class="rev-hero-description">
            Superb mechanized quality, standard European divergence sanitization, zero toxic residue. Our 6 cottages were handed over immaculately before the tourist weekend rush.
          </p>
        </article>

        <!-- CARD 10: Interactive Customer Happiness Slider Widget (Matches Reference) -->
        <article class="rev-card rev-card-slider">
          <div class="rev-slider-head">
            <span class="rev-slider-title">Your Feedback</span>
            <span class="rev-slider-badge" id="sliderScoreVal">100</span>
          </div>

          <div class="rev-slider-wrap">
            <input type="range" 
                   min="0" 
                   max="100" 
                   value="100" 
                   class="rev-interactive-slider" 
                   id="feedbackSlider" 
                   oninput="updateFeedbackSlider(this.value)"
                   aria-label="Your Feedback Score Slider">
            <div class="rev-slider-track-glow" id="sliderGlowBar"></div>
          </div>

          <div class="rev-slider-reaction" id="sliderReactionText">
            <span>🤩</span> <strong>100% Pristine Cleanliness</strong>
          </div>
        </article>

      </div><!-- /.rev-col-center -->


      <!-- ===============================================================
           COLUMN 3 (RIGHT): SPLIT + STATS + SEARCH + SOCIAL FEED + LIKES
           =============================================================== -->
      <div class="rev-bento-col rev-col-right">

        <!-- SUB-ROW 1: Minimal Quote (Card 3) & Split Photo (Card 4) -->
        <div class="rev-subrow-split">

          <!-- CARD 3: Minimalist Quote Card (Matches Reference Top-Right-1) -->
          <article class="rev-card rev-card-mini-quote" data-cat="home">
            <span class="rev-big-quote" aria-hidden="true">“</span>
            <p class="rev-mini-quote-text">
              "The team arrived quickly and had standard industrial machinery. I appreciate the care they took in ensuring complete bathroom sanitization."
            </p>
            <div class="rev-mini-quote-bottom">
              <div class="rev-stars-row">
                <span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span>
                <span class="rev-mini-score">(5.0)</span>
              </div>
              <div class="rev-mini-author-box">
                <span class="rev-author-name">Fanny Dodger</span>
                <span class="rev-author-role">Awas Vikas, Kashipur</span>
              </div>
            </div>
          </article>

          <!-- CARD 4: Split Media Card with Technician Photo (Matches Reference Top-Right-2) -->
          <article class="rev-card rev-card-split" data-cat="home">
            <div class="rev-split-info">
              <div class="rev-split-date">24 Nov 2026</div>
              <h3 class="rev-split-title">Incredible service</h3>
              <p class="rev-split-sub">Perfect, exceeded expectations</p>
              <div class="rev-stars-row">
                <span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span>
              </div>
            </div>
            <div class="rev-split-media">
              <img src="<?= SITE_URL ?>/assets/images/about%20page/A1%20Cleaning%20Team%20in%20Action.png" 
                   alt="Verified A1 cleaning supervisor" 
                   class="rev-split-img" 
                   loading="lazy">
            </div>
          </article>

        </div><!-- /.rev-subrow-split -->


        <!-- SUB-ROW 2: Stat Rating Widget (Card 6) & Search Widget (Card 7) -->
        <div class="rev-subrow-stats">

          <!-- CARD 6: Service Rating Stat Widget (Matches Reference) -->
          <article class="rev-card rev-card-stat">
            <span class="rev-stat-badge">99+</span>
            <div class="rev-stat-title">Service Rating</div>
            <div class="rev-stat-score">★ (4.9/5) from 520+ customers</div>
          </article>

          <!-- CARD 7: Interactive Search Pill Widget (Matches Reference) -->
          <div class="rev-search-widget">
            <div class="rev-search-inner">
              <input type="text" 
                     id="reviewSearchInput" 
                     class="rev-search-input" 
                     placeholder="Client Reviews" 
                     oninput="searchBentoReviews(this.value)"
                     aria-label="Search reviews">
              <button type="button" class="rev-search-clear" onclick="clearBentoSearch()" id="revClearBtn" aria-label="Clear search">✕</button>
              <button type="button" class="rev-search-btn" aria-label="Perform search">
                <span class="material-symbols-outlined icon-xs">search</span>
              </button>
            </div>
          </div>

        </div><!-- /.rev-subrow-stats -->


        <!-- SUB-ROW 3: Social Post (Card 8) & Likes Avatar (Card 9) -->
        <div class="rev-subrow-social">

          <!-- CARD 8: Social Feed Style Testimonial (Matches Reference) -->
          <article class="rev-card rev-card-social-feed" data-cat="sofa">
            <div class="rev-feed-handle">@MohdTariq • 12h</div>
            <h4 class="rev-feed-title">Great offers &amp; pricing</h4>
            <p class="rev-feed-body">
              UV water tank &amp; bathroom descaling combo was value for money. Removed all hard water deposits without any acid fumes. Highly recommended!
            </p>
            <div class="rev-feed-rating">
              <div class="rev-stars-row">
                <span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span>
              </div>
              <span class="rev-score-text">(5.0) All Client Score</span>
            </div>
          </article>

          <!-- CARD 9: Circular Avatar Social Card with Likes & Views (Matches Reference) -->
          <article class="rev-card rev-card-likes" data-cat="tank">
            <button type="button" class="rev-card-close" onclick="dismissCard(this)" aria-label="Dismiss card">✕</button>
            
            <div class="rev-likes-avatar-wrap">
              <img src="<?= SITE_URL ?>/assets/images/testimonials/customer-avatar-man.jpg" alt="Amit Chauhan" class="rev-likes-avatar">
            </div>

            <h4 class="rev-likes-title">Amazing Service!</h4>
            <p class="rev-likes-quote">
              When it comes to mechanized hygiene, A1 Cleaning is top-notch.
            </p>

            <!-- Interactive Live Counter -->
            <div class="rev-likes-counters">
              <button type="button" class="rev-counter-btn" id="likeBtn" onclick="incrementBentoLike()" title="Love this review">
                <span class="rev-heart-icon" id="heartIcon">❤️</span>
                <span id="likeCountVal">1,914</span>
              </button>
              <div class="rev-views-pill">
                <span>👁️</span> 21.7k
              </div>
            </div>
          </article>

        </div><!-- /.rev-subrow-social -->

      </div><!-- /.rev-col-right -->

    </main><!-- /.rev-bento-layout -->


    <!-- ===================================================================
         BOTTOM CAROUSEL CONTROLS & CALL-TO-ACTION (Matching Reference)
         =================================================================== -->
    <footer class="rev-bottom-bar">
      <!-- Carousel Arrows & Dots -->
      <div class="rev-pagination-controls">
        <button type="button" class="rev-arrow-btn" onclick="cycleReviews(-1)" aria-label="Previous review page">
          <span class="material-symbols-outlined icon-xs">arrow_back_ios_new</span>
        </button>
        <div class="rev-page-dots">
          <span class="rev-dot active"></span>
          <span class="rev-dot"></span>
          <span class="rev-dot"></span>
        </div>
        <button type="button" class="rev-arrow-btn" onclick="cycleReviews(1)" aria-label="Next review page">
          <span class="material-symbols-outlined icon-xs">arrow_forward_ios</span>
        </button>
      </div>

      <!-- Action Buttons -->
      <div class="rev-action-buttons">
        <button type="button" class="btn-rev-write" onclick="openReviewModal()">
          <span class="material-symbols-outlined icon-xs">rate_review</span>
          <span>Write a Review</span>
        </button>
        <a href="<?= SITE_URL ?>/book-now/" class="btn-rev-book">
          <span>Book Doorstep Service</span>
          <span class="material-symbols-outlined icon-xs">arrow_forward</span>
        </a>
      </div>
    </footer>

  </div><!-- /.container -->

</div><!-- /.rev-dark-canvas -->


<!-- =======================================================================
     INTERACTIVE "WRITE A REVIEW" MODAL (Glassmorphic Dark Theme)
     ======================================================================= -->
<div class="rev-modal-overlay" id="reviewModal" aria-hidden="true">
  <div class="rev-modal-card">
    <div class="rev-modal-head">
      <div class="rev-modal-title-wrap">
        <span class="material-symbols-outlined text-fresh-green">rate_review</span>
        <h3 class="rev-modal-title">Share Your Experience</h3>
      </div>
      <button type="button" class="rev-modal-close" onclick="closeReviewModal()" aria-label="Close review modal">✕</button>
    </div>

    <form onsubmit="handleReviewSubmit(event)" id="reviewSubmitForm">
      <div class="rev-modal-group">
        <label for="revModalName" class="rev-modal-label">Your Name</label>
        <input type="text" id="revModalName" class="rev-modal-input" placeholder="e.g. Rahul Sharma" required>
      </div>

      <div class="rev-modal-group">
        <label for="revModalCity" class="rev-modal-label">Your City / Colony</label>
        <input type="text" id="revModalCity" class="rev-modal-input" placeholder="e.g. Awas Vikas, Kashipur" required>
      </div>

      <div class="rev-modal-group">
        <label class="rev-modal-label">Rate Our Service</label>
        <div class="rev-modal-stars" id="starPicker">
          <button type="button" class="star-pick active" data-val="1" onclick="setModalStar(1)">★</button>
          <button type="button" class="star-pick active" data-val="2" onclick="setModalStar(2)">★</button>
          <button type="button" class="star-pick active" data-val="3" onclick="setModalStar(3)">★</button>
          <button type="button" class="star-pick active" data-val="4" onclick="setModalStar(4)">★</button>
          <button type="button" class="star-pick active" data-val="5" onclick="setModalStar(5)">★</button>
        </div>
      </div>

      <div class="rev-modal-group">
        <label for="revModalFeedback" class="rev-modal-label">Your Review &amp; Comments</label>
        <textarea id="revModalFeedback" class="rev-modal-textarea" rows="3" placeholder="Tell us how our team and equipment performed..." required></textarea>
      </div>

      <button type="submit" class="btn-rev-modal-submit" id="revSubmitBtn">
        <span>Submit Real Review</span>
        <span class="material-symbols-outlined icon-xs">send</span>
      </button>
    </form>
  </div>
</div>


<!-- =======================================================================
     SCOPED STYLES: LUXURY DARK BENTO-GRID SHOWCASE
     Matching Reference Aesthetics: Translucent Glass, Ambient Glows & Neon Accents
     ======================================================================= -->
<style>
/* ==========================================================================
   3D ARCHED CYLINDER VIDEO RIBBON (Inspired by Modern Hero Video Ribbon)
   Continuous 60fps auto-scroll marquee, uniform 9:16 vertical cards,
   3D parabolic arch (translateY + translateZ + rotateY), soft edge fade
   ========================================================================== */
.rev-video-carousel-section {
  width: 100vw;
  position: relative;
  left: 50%;
  right: 50%;
  margin-left: -50vw;
  margin-right: -50vw;
  margin-top: 1.5rem;
  margin-bottom: 3.5rem;
  overflow: visible;
}
.rev-video-section-header {
  margin-bottom: 1rem;
  padding: 0 1rem;
  position: relative;
}
.rev-video-badge {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  background: rgba(34, 160, 107, 0.16);
  border: 1px solid rgba(52, 211, 153, 0.35);
  color: #34D399;
  font-size: 0.8rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  padding: 0.35rem 0.95rem;
  border-radius: 9999px;
  margin-bottom: 0.6rem;
}
.rev-video-badge-dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background-color: #34D399;
  box-shadow: 0 0 10px #34D399;
  animation: revPulseDot 1.8s infinite ease-in-out;
}
@keyframes revPulseDot {
  0%, 100% { transform: scale(1); opacity: 1; }
  50% { transform: scale(1.4); opacity: 0.5; }
}
.rev-video-title-wrap {
  position: relative;
  display: inline-block;
  margin: 0 auto;
}
.rev-video-heading {
  font-size: 2.25rem;
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 0.45rem;
  letter-spacing: -0.02em;
}
/* Hand-Drawn Doodle Annotation (Matching Reference Aesthetic) */
.rev-doodle-annotation {
  position: absolute;
  top: -12px;
  right: -135px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  color: #34D399;
  pointer-events: none;
}
.rev-doodle-text {
  font-family: 'Caveat', 'Comic Sans MS', cursive, sans-serif;
  font-size: 1.1rem;
  font-weight: 700;
  line-height: 1;
  transform: rotate(5deg);
  white-space: nowrap;
  text-shadow: 0 0 10px rgba(52, 211, 153, 0.4);
}
.rev-doodle-arrow {
  margin-left: 10px;
  margin-top: 2px;
  color: #34D399;
  filter: drop-shadow(0 0 6px rgba(52, 211, 153, 0.4));
}
@media (max-width: 768px) {
  .rev-doodle-annotation {
    display: none;
  }
}
.rev-video-subheading {
  font-size: 0.95rem;
  color: rgba(255, 255, 255, 0.72);
  max-width: 650px;
  margin: 0 auto;
  line-height: 1.55;
}

/* Arched Ribbon Viewport: Interactive Grab / Swipeable Track (Matching Reference Image 2) */
.rev-cylinder-viewport {
  width: 100%;
  position: relative;
  overflow: hidden;
  padding: 3rem 0 2rem;
  user-select: none;
  -webkit-user-select: none;
  cursor: grab;
}
.rev-cylinder-viewport.is-dragging {
  cursor: grabbing;
}
.rev-cylinder-viewport.is-dragging .rev-cylinder-card {
  pointer-events: none;
}

/* Ribbon Track: 100% Uniform Spacing & Gaps, Zero Overlap */
.rev-cylinder-track {
  display: flex;
  align-items: center;
  gap: 16px;
  width: max-content;
  will-change: transform;
}

/* Uniform Vertical 9:16 Cards (~185px x 320px) - Matching Reference 1:1, Full Opacity, No Collisions */
.rev-cylinder-card {
  width: 185px;
  height: 320px;
  border-radius: 20px;
  overflow: hidden;
  position: relative;
  background: #0B2922;
  border: 1px solid rgba(255, 255, 255, 0.14);
  box-shadow: 0 12px 28px rgba(0, 0, 0, 0.6);
  flex-shrink: 0;
  cursor: pointer;
  will-change: transform;
  opacity: 1; /* Solid 100% opacity - No fade */
  transition: box-shadow 0.3s ease, border-color 0.3s ease;
}

.rev-cylinder-card:hover {
  border-color: #34D399;
  box-shadow: 0 18px 40px rgba(0, 0, 0, 0.8), 0 0 25px rgba(52, 211, 153, 0.45);
  z-index: 50 !important;
}

/* Pure Video inside Card */
.rev-cylinder-video {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  pointer-events: none;
}

/* Tiny Category Pill at Top Left */
.rev-cylinder-pill {
  position: absolute;
  top: 12px;
  left: 12px;
  background: rgba(7, 25, 20, 0.82);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(52, 211, 153, 0.45);
  color: #34D399;
  font-size: 0.68rem;
  font-weight: 700;
  padding: 3px 9px;
  border-radius: 9999px;
  text-transform: uppercase;
  letter-spacing: 0.04em;
  z-index: 5;
  pointer-events: none;
}

/* Soft Bottom Gradient Overlay: Only on Hover */
.rev-cylinder-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 16px 12px 12px;
  background: linear-gradient(to top, rgba(7, 25, 20, 0.95), rgba(7, 25, 20, 0.5) 60%, transparent);
  z-index: 6;
  opacity: 0;
  transform: translateY(6px);
  transition: opacity 0.3s ease, transform 0.3s ease;
  pointer-events: none;
}
.rev-cylinder-card:hover .rev-cylinder-overlay {
  opacity: 1;
  transform: translateY(0);
}
.rev-cylinder-name {
  font-size: 0.88rem;
  font-weight: 700;
  color: #FFFFFF;
  margin-bottom: 2px;
}
.rev-cylinder-serv {
  font-size: 0.7rem;
  color: #A7F3D0;
}

/* Mobile Responsive: Proportional Card Sizing */
@media (max-width: 600px) {
  .rev-cylinder-card {
    width: 145px;
    height: 250px;
    border-radius: 16px;
  }
  .rev-cylinder-track {
    gap: 10px;
  }
  .rev-cylinder-pill {
    top: 8px;
    left: 8px;
    font-size: 0.6rem;
    padding: 2px 7px;
  }
  .rev-cylinder-viewport {
    padding: 2rem 0 1rem;
  }
}

/* --------------------------------------------------------------------------
   Canvas & Ambient Lighting
   -------------------------------------------------------------------------- */
.rev-dark-canvas {
  background-color: #071914;
  background-image: 
    radial-gradient(circle at 10% 15%, rgba(34, 160, 107, 0.22) 0%, transparent 45%),
    radial-gradient(circle at 90% 85%, rgba(20, 184, 166, 0.25) 0%, transparent 50%),
    radial-gradient(circle at 50% 50%, rgba(11, 41, 34, 0.7) 0%, transparent 60%);
  color: #FFFFFF;
  min-height: 100vh;
  position: relative;
  overflow: hidden;
  padding: 1.5rem 0 3.5rem;
  box-sizing: border-box;
}
.rev-canvas-container {
  position: relative;
  z-index: 2;
  max-width: 1360px;
}
.rev-ambient-glow {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  filter: blur(80px);
  z-index: 1;
}
.rev-glow-top-left {
  top: -100px;
  left: -100px;
  width: 450px;
  height: 450px;
  background: rgba(34, 160, 107, 0.28);
}
.rev-glow-bottom-right {
  bottom: -120px;
  right: -120px;
  width: 500px;
  height: 500px;
  background: rgba(20, 184, 166, 0.22);
}
.rev-glow-center {
  top: 40%;
  left: 45%;
  width: 350px;
  height: 350px;
  background: rgba(34, 160, 107, 0.12);
}

/* --------------------------------------------------------------------------
   Top Navigation Ribbon
   -------------------------------------------------------------------------- */
.rev-showcase-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0.85rem 1.25rem;
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  margin-bottom: 1.75rem;
  gap: 1rem;
}
.rev-brand-title {
  display: flex;
  align-items: center;
  gap: 0.55rem;
}
.rev-quote-badge {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 32px;
  height: 32px;
  border-radius: 8px;
  background: rgba(255, 255, 255, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.2);
  color: #34D399;
  font-size: 1.15rem;
  line-height: 1;
}
.rev-logo-text {
  font-size: 1.35rem;
  font-weight: 800;
  color: #FFFFFF;
  letter-spacing: -0.02em;
}
.rev-nav-links {
  display: flex;
  align-items: center;
  gap: 0.65rem;
  flex-wrap: wrap;
}
.rev-nav-link {
  background: none;
  border: none;
  color: #A3B8B0;
  font-size: 0.82rem;
  font-weight: 600;
  padding: 0.35rem 0.75rem;
  border-radius: 20px;
  cursor: pointer;
  transition: all 0.2s ease;
  font-family: inherit;
}
.rev-nav-link:hover {
  color: #FFFFFF;
  background: rgba(255, 255, 255, 0.08);
}
.rev-nav-link.active {
  color: #FFFFFF;
  background: rgba(34, 160, 107, 0.35);
  border: 1px solid rgba(52, 211, 153, 0.5);
  box-shadow: 0 0 12px rgba(34, 160, 107, 0.3);
}
.rev-home-pill {
  display: inline-flex;
  align-items: center;
  gap: 0.35rem;
  color: #FFFFFF;
  text-decoration: none;
  font-size: 0.82rem;
  font-weight: 700;
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.15);
  padding: 0.4rem 0.85rem;
  border-radius: 20px;
  transition: all 0.2s ease;
}
.rev-home-pill:hover {
  background: rgba(34, 160, 107, 0.25);
  border-color: #34D399;
  color: #34D399;
}

/* Hero Intro */
.rev-hero-intro {
  max-width: 720px;
  margin: 0 auto 2.25rem;
}
.rev-hero-title {
  font-size: clamp(1.75rem, 3.2vw, 2.5rem);
  font-weight: 900;
  color: #FFFFFF;
  margin-bottom: 0.4rem;
  letter-spacing: -0.02em;
}
.rev-hero-sub {
  font-size: 0.88rem;
  color: #A3B8B0;
  line-height: 1.5;
  margin: 0;
}

/* --------------------------------------------------------------------------
   Bento Grid Layout Canvas
   -------------------------------------------------------------------------- */
.rev-bento-layout {
  display: grid;
  grid-template-columns: 285px 1.35fr 1.15fr;
  gap: 1.35rem;
  align-items: start;
}
.rev-bento-col {
  display: flex;
  flex-direction: column;
  gap: 1.35rem;
}

/* Glassmorphic Card Foundation */
.rev-card {
  background: rgba(18, 48, 38, 0.55);
  backdrop-filter: blur(18px);
  -webkit-backdrop-filter: blur(18px);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: 20px;
  padding: 1.35rem 1.4rem;
  box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.6), inset 0 1px 1px rgba(255, 255, 255, 0.1);
  position: relative;
  transition: transform 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease;
  overflow: hidden;
  box-sizing: border-box;
}
.rev-card:hover {
  transform: translateY(-3px);
  border-color: rgba(52, 211, 153, 0.45);
  box-shadow: 0 16px 40px rgba(34, 160, 107, 0.16), inset 0 1px 1px rgba(255, 255, 255, 0.2);
}
.rev-card-close {
  position: absolute;
  top: 12px;
  right: 12px;
  background: rgba(255, 255, 255, 0.1);
  border: none;
  color: #A3B8B0;
  width: 24px;
  height: 24px;
  border-radius: 50%;
  font-size: 11px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.2s ease;
  z-index: 3;
}
.rev-card-close:hover {
  background: rgba(220, 38, 38, 0.3);
  color: #F87171;
}

/* Common Stars */
.rev-stars-row {
  display: flex;
  align-items: center;
  gap: 3px;
  color: #34D399;
  font-size: 0.95rem;
}
.rev-star {
  line-height: 1;
}
.rev-pill-tag {
  display: inline-block;
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.14);
  color: #D6E8DC;
  font-size: 0.68rem;
  font-weight: 700;
  padding: 3px 9px;
  border-radius: 20px;
}
.rev-pill-accent {
  background: rgba(34, 160, 107, 0.2);
  border-color: #34D399;
  color: #A7F3D0;
}

/* --------------------------------------------------------------------------
   COLUMN 1: Specific Card Styles
   -------------------------------------------------------------------------- */
/* Card 1: Tall Story Card */
.rev-card-story {
  padding: 0;
  display: flex;
  flex-direction: column;
}
.rev-story-content {
  padding: 1.4rem 1.35rem 1.15rem;
  display: flex;
  flex-direction: column;
  gap: 0.65rem;
}
.rev-story-headline {
  font-size: 1.05rem;
  font-weight: 800;
  color: #FFFFFF;
  margin: 0;
  line-height: 1.35;
}
.rev-story-pills {
  display: flex;
  gap: 5px;
  flex-wrap: wrap;
}
.rev-story-author {
  font-size: 0.76rem;
  color: #94A3B8;
  font-style: italic;
  margin-top: 2px;
}
.rev-story-media {
  position: relative;
  width: 100%;
  height: 185px;
  overflow: hidden;
}
.rev-story-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.35s ease;
}
.rev-card-story:hover .rev-story-img {
  transform: scale(1.04);
}
.rev-media-badge {
  position: absolute;
  bottom: 8px;
  left: 8px;
  background: rgba(7, 25, 20, 0.85);
  border: 1px solid rgba(52, 211, 153, 0.3);
  padding: 2px 8px;
  border-radius: 12px;
  font-size: 0.68rem;
  color: #D6E8DC;
  display: flex;
  align-items: center;
  gap: 4px;
  backdrop-filter: blur(4px);
}

/* Card 11: Tagged Testimonial */
.rev-card-tagged {
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
}
.rev-tagged-text {
  font-size: 0.82rem;
  color: #D1D5DB;
  line-height: 1.5;
  margin: 0;
}
.rev-tagged-bottom {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 0.5rem;
  margin-top: 0.25rem;
}
.rev-tagged-author {
  display: flex;
  align-items: center;
  gap: 0.5rem;
}
.rev-mini-avatar {
  width: 34px;
  height: 34px;
  border-radius: 50%;
  object-fit: cover;
  border: 1.5px solid #34D399;
}
.rev-author-name {
  font-size: 0.78rem;
  color: #FFFFFF;
  display: block;
}
.rev-author-role {
  font-size: 0.68rem;
  color: #94A3B8;
  display: block;
}

/* --------------------------------------------------------------------------
   COLUMN 2: Center Stage Specific Cards
   -------------------------------------------------------------------------- */
/* Card 2: Floating Capsule Testimonial */
.rev-card-capsule {
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
}
.rev-capsule-head {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.rev-author-group {
  display: flex;
  align-items: center;
  gap: 0.65rem;
}
.rev-avatar-duo {
  position: relative;
  width: 48px;
  height: 32px;
}
.rev-duo-img {
  position: absolute;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  object-fit: cover;
  border: 2px solid #071914;
}
.duo-1 { left: 0; z-index: 2; }
.duo-2 { left: 16px; z-index: 1; }
.rev-capsule-name {
  font-size: 0.86rem;
  font-weight: 700;
  color: #FFFFFF;
}
.rev-capsule-time {
  font-size: 0.7rem;
  color: #94A3B8;
}
.rev-score-badge {
  font-size: 0.74rem;
  font-weight: 800;
  color: #34D399;
  background: rgba(52, 211, 153, 0.15);
  border: 1px solid rgba(52, 211, 153, 0.35);
  padding: 2px 8px;
  border-radius: 12px;
}
.rev-capsule-body {
  font-size: 0.86rem;
  color: #D1D5DB;
  line-height: 1.5;
  margin: 0;
}
.rev-expanded-body {
  display: none;
}
.rev-toggle-btn {
  background: none;
  border: none;
  color: #34D399;
  font-size: 0.76rem;
  font-weight: 700;
  cursor: pointer;
  padding: 0;
  align-self: flex-end;
  font-family: inherit;
}
.rev-toggle-btn:hover {
  text-decoration: underline;
}

/* Card 5: Hero Featured Review */
.rev-card-hero {
  background: rgba(15, 52, 40, 0.7);
  border-color: rgba(52, 211, 153, 0.28);
  padding: 1.75rem 1.65rem;
  display: flex;
  flex-direction: column;
  gap: 0.85rem;
}
.rev-hero-top {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.rev-author-meta {
  display: flex;
  align-items: center;
  gap: 0.75rem;
}
.rev-hero-avatar {
  width: 46px;
  height: 46px;
  border-radius: 50%;
  object-fit: cover;
  border: 2px solid #34D399;
}
.rev-hero-name {
  font-size: 1rem;
  font-weight: 800;
  color: #FFFFFF;
  margin: 0;
}
.rev-hero-subtitle {
  font-size: 0.74rem;
  color: #A7F3D0;
}
.rev-hero-rating-wrap {
  display: flex;
  align-items: center;
  gap: 0.65rem;
}
.rev-dots-more {
  color: #64748B;
  letter-spacing: 2px;
  font-weight: 900;
  font-size: 0.9rem;
}
.rev-pill-stars {
  background: rgba(52, 211, 153, 0.2);
  border: 1px solid rgba(52, 211, 153, 0.4);
  color: #34D399;
  font-size: 0.78rem;
  padding: 3px 10px;
  border-radius: 20px;
  letter-spacing: 1px;
}
.rev-hero-quote {
  font-size: 1.45rem;
  font-weight: 900;
  color: #FFFFFF;
  margin: 0;
  line-height: 1.25;
  letter-spacing: -0.01em;
}
.rev-hero-description {
  font-size: 0.86rem;
  color: #CBD5E1;
  line-height: 1.55;
  margin: 0;
}

/* Card 10: Interactive Feedback Slider */
.rev-card-slider {
  padding: 1.15rem 1.4rem;
}
.rev-slider-head {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 0.65rem;
}
.rev-slider-title {
  font-size: 0.88rem;
  font-weight: 700;
  color: #FFFFFF;
}
.rev-slider-badge {
  background: #34D399;
  color: #071914;
  font-size: 0.72rem;
  font-weight: 900;
  padding: 2px 8px;
  border-radius: 12px;
}
.rev-slider-wrap {
  position: relative;
  width: 100%;
  margin-bottom: 0.65rem;
}
.rev-interactive-slider {
  -webkit-appearance: none;
  appearance: none;
  width: 100%;
  height: 6px;
  background: rgba(255, 255, 255, 0.15);
  border-radius: 4px;
  outline: none;
  cursor: pointer;
}
.rev-interactive-slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 18px;
  height: 18px;
  border-radius: 50%;
  background: #34D399;
  box-shadow: 0 0 10px #34D399;
  cursor: pointer;
  transition: transform 0.15s ease;
}
.rev-interactive-slider::-webkit-slider-thumb:hover {
  transform: scale(1.25);
}
.rev-slider-reaction {
  font-size: 0.78rem;
  color: #D1D5DB;
  display: flex;
  align-items: center;
  gap: 0.45rem;
}

/* --------------------------------------------------------------------------
   COLUMN 3: Right Side Specific Cards
   -------------------------------------------------------------------------- */
/* Subrow 1: Split Minimal Quote & Split Media */
.rev-subrow-split {
  display: grid;
  grid-template-columns: 1fr 1.1fr;
  gap: 1.15rem;
}
.rev-card-mini-quote {
  padding: 1.15rem 1.25rem;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.rev-big-quote {
  font-size: 2rem;
  line-height: 1;
  color: #34D399;
  margin-bottom: 0.25rem;
}
.rev-mini-quote-text {
  font-size: 0.74rem;
  color: #D1D5DB;
  line-height: 1.45;
  margin: 0 0 0.85rem;
}
.rev-mini-quote-bottom {
  display: flex;
  flex-direction: column;
  gap: 0.35rem;
}
.rev-mini-score {
  font-size: 0.7rem;
  color: #94A3B8;
  margin-left: 2px;
}
.rev-mini-author-box {
  display: flex;
  flex-direction: column;
}

/* Card 4: Split Media Card */
.rev-card-split {
  padding: 0;
  display: grid;
  grid-template-columns: 1fr 110px;
  overflow: hidden;
}
.rev-split-info {
  padding: 1.15rem 1rem 1.15rem 1.2rem;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.rev-split-date {
  font-size: 0.68rem;
  color: #94A3B8;
  font-weight: 600;
}
.rev-split-title {
  font-size: 0.98rem;
  font-weight: 800;
  color: #FFFFFF;
  margin: 0.2rem 0;
  line-height: 1.25;
}
.rev-split-sub {
  font-size: 0.72rem;
  color: #CBD5E1;
  margin: 0 0 0.5rem;
  line-height: 1.35;
}
.rev-split-media {
  position: relative;
  width: 100%;
  height: 100%;
}
.rev-split-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Subrow 2: Stat Rating & Search Widget */
.rev-subrow-stats {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1.15rem;
  align-items: center;
}
.rev-card-stat {
  padding: 0.95rem 1.15rem;
}
.rev-stat-badge {
  position: absolute;
  top: 10px;
  right: 10px;
  background: rgba(52, 211, 153, 0.2);
  border: 1px solid rgba(52, 211, 153, 0.4);
  color: #34D399;
  font-size: 0.65rem;
  font-weight: 800;
  padding: 1px 6px;
  border-radius: 12px;
}
.rev-stat-title {
  font-size: 0.86rem;
  font-weight: 700;
  color: #FFFFFF;
  margin-bottom: 2px;
}
.rev-stat-score {
  font-size: 0.74rem;
  color: #94A3B8;
}

/* Card 7: Search Widget Pill */
.rev-search-widget {
  background: rgba(18, 48, 38, 0.55);
  backdrop-filter: blur(18px);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: 9999px;
  padding: 4px;
}
.rev-search-inner {
  display: flex;
  align-items: center;
  gap: 4px;
  padding-left: 10px;
}
.rev-search-input {
  background: none;
  border: none;
  color: #FFFFFF;
  font-size: 0.8rem;
  outline: none;
  width: 100%;
  font-family: inherit;
}
.rev-search-input::placeholder {
  color: #94A3B8;
}
.rev-search-clear {
  background: none;
  border: none;
  color: #64748B;
  cursor: pointer;
  font-size: 11px;
  padding: 2px;
  visibility: hidden;
}
.rev-search-clear.is-visible {
  visibility: visible;
}
.rev-search-btn {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: #34D399;
  border: none;
  color: #071914;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  flex-shrink: 0;
  box-shadow: 0 0 10px rgba(52, 211, 153, 0.5);
  transition: transform 0.2s ease;
}
.rev-search-btn:hover {
  transform: scale(1.08);
}

/* Subrow 3: Social Feed & Likes Card */
.rev-subrow-social {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1.15rem;
}
.rev-card-social-feed {
  padding: 1.15rem 1.2rem;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.rev-feed-handle {
  font-size: 0.72rem;
  color: #94A3B8;
  margin-bottom: 0.25rem;
}
.rev-feed-title {
  font-size: 0.95rem;
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 0.4rem;
}
.rev-feed-body {
  font-size: 0.74rem;
  color: #CBD5E1;
  line-height: 1.45;
  margin: 0 0 0.75rem;
}
.rev-feed-rating {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.rev-score-text {
  font-size: 0.68rem;
  color: #94A3B8;
}

/* Card 9: Circular Avatar Card with Likes */
.rev-card-likes {
  padding: 1.25rem 1.2rem;
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.rev-likes-avatar-wrap {
  width: 62px;
  height: 62px;
  border-radius: 50%;
  padding: 3px;
  background: linear-gradient(135deg, #34D399, #14B8A6);
  margin-bottom: 0.5rem;
}
.rev-likes-avatar {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  object-fit: cover;
}
.rev-likes-title {
  font-size: 0.95rem;
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 0.25rem;
}
.rev-likes-quote {
  font-size: 0.72rem;
  color: #CBD5E1;
  line-height: 1.4;
  margin: 0 0 0.85rem;
}
.rev-likes-counters {
  display: flex;
  align-items: center;
  gap: 0.65rem;
  justify-content: center;
}
.rev-counter-btn {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.15);
  color: #FFFFFF;
  font-size: 0.75rem;
  font-weight: 700;
  padding: 4px 10px;
  border-radius: 20px;
  cursor: pointer;
  transition: all 0.2s ease;
  font-family: inherit;
}
.rev-counter-btn:hover {
  background: rgba(239, 68, 68, 0.2);
  border-color: #F87171;
}
.rev-counter-btn.is-liked {
  border-color: #EF4444;
  background: rgba(239, 68, 68, 0.3);
}
.rev-counter-btn.is-liked .rev-heart-icon {
  transform: scale(1.3);
}
.rev-heart-icon {
  transition: transform 0.2s ease;
  display: inline-block;
}
.rev-views-pill {
  font-size: 0.75rem;
  color: #94A3B8;
  display: flex;
  align-items: center;
  gap: 4px;
}

/* --------------------------------------------------------------------------
   Bottom Bar: Pagination & Action Buttons
   -------------------------------------------------------------------------- */
.rev-bottom-bar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 2rem;
  padding-top: 1.25rem;
  border-top: 1px solid rgba(255, 255, 255, 0.08);
  flex-wrap: wrap;
  gap: 1rem;
}
.rev-pagination-controls {
  display: flex;
  align-items: center;
  gap: 0.65rem;
}
.rev-arrow-btn {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.15);
  color: #FFFFFF;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.2s ease;
}
.rev-arrow-btn:hover {
  background: #34D399;
  color: #071914;
  border-color: #34D399;
}
.rev-page-dots {
  display: flex;
  align-items: center;
  gap: 5px;
}
.rev-dot {
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.3);
  transition: all 0.2s ease;
}
.rev-dot.active {
  width: 18px;
  border-radius: 4px;
  background: #34D399;
}
.rev-action-buttons {
  display: flex;
  align-items: center;
  gap: 0.85rem;
  flex-wrap: wrap;
}
.btn-rev-write {
  display: inline-flex;
  align-items: center;
  gap: 0.45rem;
  background: rgba(255, 255, 255, 0.08);
  border: 1.5px solid rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
  font-size: 0.85rem;
  font-weight: 700;
  padding: 0.65rem 1.25rem;
  border-radius: 24px;
  cursor: pointer;
  transition: all 0.2s ease;
  font-family: inherit;
}
.btn-rev-write:hover {
  background: rgba(52, 211, 153, 0.2);
  border-color: #34D399;
  color: #34D399;
}
.btn-rev-book {
  display: inline-flex;
  align-items: center;
  gap: 0.45rem;
  background: linear-gradient(135deg, #22A06B 0%, #168052 100%);
  color: #FFFFFF !important;
  font-size: 0.85rem;
  font-weight: 800;
  padding: 0.65rem 1.4rem;
  border-radius: 24px;
  text-decoration: none !important;
  box-shadow: 0 4px 16px rgba(34, 160, 107, 0.35);
  transition: all 0.2s ease;
}
.btn-rev-book:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(34, 160, 107, 0.45);
}

/* --------------------------------------------------------------------------
   Review Submission Modal
   -------------------------------------------------------------------------- */
.rev-modal-overlay {
  position: fixed;
  inset: 0;
  background: rgba(3, 15, 12, 0.85);
  backdrop-filter: blur(12px);
  display: none;
  align-items: center;
  justify-content: center;
  z-index: 9999;
  padding: 1.25rem;
}
.rev-modal-overlay.is-active {
  display: flex;
}
.rev-modal-card {
  background: #0B2922;
  border: 1.5px solid rgba(52, 211, 153, 0.4);
  border-radius: 22px;
  max-width: 480px;
  width: 100%;
  padding: 1.75rem;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.8);
  animation: revModalIn 0.25s cubic-bezier(0.16, 1, 0.3, 1);
}
@keyframes revModalIn {
  from { opacity: 0; transform: scale(0.92) translateY(10px); }
  to { opacity: 1; transform: scale(1) translateY(0); }
}
.rev-modal-head {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 1.25rem;
  padding-bottom: 0.75rem;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}
.rev-modal-title-wrap {
  display: flex;
  align-items: center;
  gap: 0.5rem;
}
.rev-modal-title {
  font-size: 1.2rem;
  font-weight: 800;
  color: #FFFFFF;
  margin: 0;
}
.rev-modal-close {
  background: rgba(255, 255, 255, 0.1);
  border: none;
  color: #FFFFFF;
  width: 28px;
  height: 28px;
  border-radius: 50%;
  cursor: pointer;
  font-size: 12px;
}
.rev-modal-group {
  margin-bottom: 1rem;
}
.rev-modal-label {
  display: block;
  font-size: 0.78rem;
  font-weight: 700;
  color: #D6E8DC;
  margin-bottom: 0.35rem;
}
.rev-modal-input,
.rev-modal-textarea {
  width: 100%;
  background: rgba(255, 255, 255, 0.06);
  border: 1px solid rgba(255, 255, 255, 0.18);
  border-radius: 8px;
  color: #FFFFFF;
  padding: 0.65rem 0.85rem;
  font-size: 0.88rem;
  font-family: inherit;
  outline: none;
  box-sizing: border-box;
}
.rev-modal-input:focus,
.rev-modal-textarea:focus {
  border-color: #34D399;
  background: rgba(255, 255, 255, 0.1);
}
.rev-modal-stars {
  display: flex;
  gap: 6px;
}
.star-pick {
  background: none;
  border: none;
  color: #475569;
  font-size: 1.5rem;
  cursor: pointer;
  padding: 0;
  transition: color 0.15s ease;
}
.star-pick.active {
  color: #FBBF24;
}
.btn-rev-modal-submit {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  background: #22A06B;
  color: #FFFFFF;
  border: none;
  border-radius: 10px;
  padding: 0.8rem;
  font-size: 0.92rem;
  font-weight: 800;
  cursor: pointer;
  margin-top: 0.5rem;
  transition: all 0.2s ease;
}
.btn-rev-modal-submit:hover {
  background: #198754;
}

/* --------------------------------------------------------------------------
   RESPONSIVENESS (All Screen Sizes)
   -------------------------------------------------------------------------- */
@media (max-width: 1140px) {
  .rev-bento-layout {
    grid-template-columns: 1fr 1fr;
  }
  .rev-col-left {
    grid-column: 1 / 2;
  }
  .rev-col-center {
    grid-column: 2 / 3;
  }
  .rev-col-right {
    grid-column: 1 / -1;
  }
  .rev-subrow-split {
    grid-template-columns: 1fr 1fr;
  }
}

@media (max-width: 768px) {
  .rev-showcase-header {
    flex-direction: column;
    align-items: flex-start;
    gap: 0.75rem;
  }
  .rev-nav-links {
    width: 100%;
    overflow-x: auto;
    padding-bottom: 4px;
    flex-wrap: nowrap;
    -webkit-overflow-scrolling: touch;
  }
  .rev-bento-layout {
    grid-template-columns: 1fr;
    gap: 1rem;
  }
  .rev-col-left,
  .rev-col-center,
  .rev-col-right {
    grid-column: 1 / -1;
  }
  .rev-subrow-split,
  .rev-subrow-stats,
  .rev-subrow-social {
    grid-template-columns: 1fr;
    gap: 1rem;
  }
  .rev-card {
    padding: 1.15rem 1.1rem;
  }
  .rev-hero-quote {
    font-size: 1.25rem;
  }
  .rev-bottom-bar {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
  .rev-action-buttons {
    width: 100%;
    justify-content: center;
  }
  .btn-rev-write,
  .btn-rev-book {
    width: 100%;
    justify-content: center;
  }
}

@media (max-width: 380px) {
  .rev-hero-title {
    font-size: 1.45rem;
  }
  .rev-card {
    padding: 1rem 0.85rem;
    border-radius: 16px;
  }
  .rev-story-headline {
    font-size: 0.95rem;
  }
  .rev-card-split {
    grid-template-columns: 1fr;
  }
  .rev-split-media {
    height: 120px;
  }
}
</style>


<!-- =======================================================================
     INTERACTIVE SCRIPT: SEARCH, FILTER, SLIDER & LIKE LOGIC
     ======================================================================= -->
<script>
// 1. Live Interactive Search Filter
function searchBentoReviews(query) {
  const q = query.trim().toLowerCase();
  const clearBtn = document.getElementById('revClearBtn');
  if (clearBtn) {
    if (q.length > 0) clearBtn.classList.add('is-visible');
    else clearBtn.classList.remove('is-visible');
  }

  const cards = document.querySelectorAll('.rev-card');
  cards.forEach(card => {
    const text = card.innerText.toLowerCase();
    if (!q || text.includes(q)) {
      card.style.display = '';
      card.style.opacity = '1';
    } else {
      card.style.display = 'none';
    }
  });
}

function clearBentoSearch() {
  const input = document.getElementById('reviewSearchInput');
  if (input) {
    input.value = '';
    searchBentoReviews('');
    input.focus();
  }
}

// 2. Category Nav Filter
function filterBentoReviews(category, btnEl) {
  const allBtns = document.querySelectorAll('.rev-nav-link');
  allBtns.forEach(b => b.classList.remove('active'));
  if (btnEl) btnEl.classList.add('active');

  const cards = document.querySelectorAll('.rev-card');
  cards.forEach(card => {
    const cat = card.getAttribute('data-cat') || 'all';
    if (category === 'all' || cat === category) {
      card.style.display = '';
    } else {
      card.style.display = 'none';
    }
  });
}

// 3. Interactive Feedback Range Slider
function updateFeedbackSlider(val) {
  const scoreVal = document.getElementById('sliderScoreVal');
  if (scoreVal) scoreVal.innerText = val;

  const reaction = document.getElementById('sliderReactionText');
  if (reaction) {
    const num = parseInt(val, 10);
    if (num >= 95) {
      reaction.innerHTML = '<span>🤩</span> <strong>' + num + '% Pristine Cleanliness</strong>';
    } else if (num >= 80) {
      reaction.innerHTML = '<span>😊</span> <strong>' + num + '% Great Satisfaction</strong>';
    } else if (num >= 60) {
      reaction.innerHTML = '<span>🙂</span> <strong>' + num + '% Standard Care</strong>';
    } else {
      reaction.innerHTML = '<span>🤔</span> <strong>' + num + '% Need Assistance? Contact us!</strong>';
    }
  }
}

// 4. Read More Toggle on Capsule Card
function toggleCapsuleText(btn) {
  const more = document.getElementById('capsuleMoreText');
  if (more) {
    if (more.style.display === 'inline') {
      more.style.display = 'none';
      btn.innerText = '▾ Read more';
    } else {
      more.style.display = 'inline';
      btn.innerText = '▴ Show less';
    }
  }
}

// 5. Dismiss Card Action
function dismissCard(btn) {
  const card = btn.closest('.rev-card');
  if (card) {
    card.style.transition = 'all 0.3s ease';
    card.style.opacity = '0';
    card.style.transform = 'scale(0.85)';
    setTimeout(() => { card.style.display = 'none'; }, 300);
  }
}

// 6. Interactive Heart Like Counter
let likeCount = 1914;
let isLiked = false;
function incrementBentoLike() {
  const btn = document.getElementById('likeBtn');
  const countEl = document.getElementById('likeCountVal');
  if (!btn || !countEl) return;

  if (!isLiked) {
    likeCount++;
    isLiked = true;
    btn.classList.add('is-liked');
  } else {
    likeCount--;
    isLiked = false;
    btn.classList.remove('is-liked');
  }
  countEl.innerText = likeCount.toLocaleString('en-IN');
}

// 7. Modal Handlers
function openReviewModal() {
  const modal = document.getElementById('reviewModal');
  if (modal) modal.classList.add('is-active');
}
function closeReviewModal() {
  const modal = document.getElementById('reviewModal');
  if (modal) modal.classList.remove('is-active');
}

let selectedRating = 5;
function setModalStar(starNum) {
  selectedRating = starNum;
  const stars = document.querySelectorAll('#starPicker .star-pick');
  stars.forEach((s, idx) => {
    if (idx < starNum) s.classList.add('active');
    else s.classList.remove('active');
  });
}

function handleReviewSubmit(e) {
  e.preventDefault();
  const name = document.getElementById('revModalName').value.trim();
  const city = document.getElementById('revModalCity').value.trim();
  const text = document.getElementById('revModalFeedback').value.trim();

  // WhatsApp Review Direct Fallback or Confirmation
  const msg = encodeURIComponent(`Hi A1 Cleaning! New Customer Review:\nName: ${name}\nCity: ${city}\nRating: ${selectedRating} Stars\nReview: ${text}`);
  
  alert('Thank you for sharing your verified review! You will also be directed to WhatsApp to confirm your submission.');
  closeReviewModal();
  window.open('https://wa.me/917906366271?text=' + msg, '_blank');
}

// 8. Pagination Arrow Cycle
let currentDotIndex = 0;
function cycleReviews(delta) {
  const dots = document.querySelectorAll('.rev-dot');
  if (!dots.length) return;
  dots[currentDotIndex].classList.remove('active');
  currentDotIndex = (currentDotIndex + delta + dots.length) % dots.length;
  dots[currentDotIndex].classList.add('active');
}

// ============================================================================
// 9. 3D ARCHED VIDEO RIBBON - INTERACTIVE SWIPEABLE (Matching Reference Image 2)
// ZERO continuous auto-scroll; fully draggable & swipable in BOTH directions
// Uniform cards (185px x 320px), uniform gap (16px), zero overlap, parabolic arch
// ============================================================================
(function initCylinderMarquee() {
  const track = document.getElementById('cylinderTrack');
  const viewport = document.getElementById('cylinderViewport');
  if (!track || !viewport) return;

  const cards = Array.from(track.querySelectorAll('.rev-cylinder-card'));
  if (!cards.length) return;

  // SWIPE & DRAG PHYSICS (ZERO AUTO-SCROLL)
  let scrollX = 0;
  let isDragging = false;
  let startX = 0;
  let lastX = 0;
  let velocity = 0;
  let hoveredCard = null;

  cards.forEach(card => {
    card.addEventListener('mouseenter', () => { if (!isDragging) hoveredCard = card; });
    card.addEventListener('mouseleave', () => { if (hoveredCard === card) hoveredCard = null; });
  });

  // Ensure all videos play on load
  cards.forEach(card => {
    const video = card.querySelector('video');
    if (video) {
      video.muted = true;
      video.playsInline = true;
      video.play().catch(() => {});
    }
  });

  // Mouse Drag Events (Desktop)
  viewport.addEventListener('mousedown', (e) => {
    isDragging = true;
    startX = e.clientX;
    lastX = e.clientX;
    velocity = 0;
    viewport.classList.add('is-dragging');
  });

  window.addEventListener('mousemove', (e) => {
    if (!isDragging) return;
    const delta = e.clientX - lastX;
    lastX = e.clientX;
    velocity = delta;
    scrollX -= delta; // Direct 1:1 manual drag in any direction
  });

  window.addEventListener('mouseup', () => {
    if (!isDragging) return;
    isDragging = false;
    viewport.classList.remove('is-dragging');
  });

  // Touch Swipe Events (Mobile)
  viewport.addEventListener('touchstart', (e) => {
    if (e.touches.length !== 1) return;
    isDragging = true;
    startX = e.touches[0].clientX;
    lastX = e.touches[0].clientX;
    velocity = 0;
  }, { passive: true });

  window.addEventListener('touchmove', (e) => {
    if (!isDragging || e.touches.length !== 1) return;
    const currentX = e.touches[0].clientX;
    const delta = currentX - lastX;
    lastX = currentX;
    velocity = delta;
    scrollX -= delta; // Direct 1:1 manual swipe
  }, { passive: true });

  window.addEventListener('touchend', () => {
    if (!isDragging) return;
    isDragging = false;
  });

  // Optional Mouse Wheel horizontal pan
  viewport.addEventListener('wheel', (e) => {
    if (Math.abs(e.deltaX) > Math.abs(e.deltaY)) {
      e.preventDefault();
      scrollX += e.deltaX * 0.7;
    }
  }, { passive: false });

  function renderLoop() {
    const isMobile = window.innerWidth <= 600;
    // Exact dimensions matching Reference Image 2
    const cardWidth = isMobile ? 145 : 185;
    const gap = isMobile ? 10 : 16;
    const singleSetWidth = 8 * (cardWidth + gap);

    // Inertia & momentum decay when user releases drag
    if (!isDragging) {
      if (Math.abs(velocity) > 0.15) {
        scrollX -= velocity;
        velocity *= 0.92; // smooth friction decay
      } else {
        velocity = 0;
      }
    }

    // Circular infinite wrap in BOTH directions (swipe left or right continuously)
    if (scrollX < 0) {
      scrollX += singleSetWidth;
    } else if (scrollX >= singleSetWidth) {
      scrollX -= singleSetWidth;
    }

    // Move track smoothly
    track.style.transform = `translateX(${-scrollX}px)`;

    // Calculate dynamic 3D arched ribbon per card
    const halfW = viewport.clientWidth / 2;
    const archFactor = isMobile ? 12 : 24;

    cards.forEach((card, idx) => {
      // Direct mathematical track position relative to viewport center:
      // Guarantees 100% constant, uniform gap across every single card!
      const cardTrackCenter = idx * (cardWidth + gap) + cardWidth / 2;
      const currentScreenX = cardTrackCenter - scrollX;
      const dist = currentScreenX - halfW;
      const d = dist / halfW;

      // Parabolic vertical ribbon arch: Center sits lower, sides curve gently upward
      const archY = -(d * d) * archFactor;

      // Card scale: uniform 1.0 everywhere, slight 1.05 on hover
      const isHov = (card === hoveredCard && !isDragging);
      const scale = isHov ? 1.05 : 1.0;

      // Pure arched ribbon: ZERO rotateY -> ZERO overlap -> 100% uniform gap everywhere!
      card.style.transform = `translateY(${archY.toFixed(2)}px) scale(${scale})`;
      card.style.opacity = '1';
      card.style.zIndex = isHov ? 50 : 10;

      // Performance: pause far-offscreen videos only
      const video = card.querySelector('video');
      if (video) {
        const isFarOffscreen = (currentScreenX < -400 || currentScreenX > window.innerWidth + 400);
        if (isFarOffscreen && !video.paused) {
          video.pause();
        } else if (!isFarOffscreen && video.paused) {
          video.play().catch(() => {});
        }
      }
    });

    requestAnimationFrame(renderLoop);
  }

  requestAnimationFrame(renderLoop);
})();
</script>

<?php require __DIR__ . '/../components/footer.php'; ?>

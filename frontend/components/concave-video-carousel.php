<?php
/**
 * Reusable 3D Concave Cylinder Video Carousel Component
 * Shared by /reviews/ and /services/ for uniform 3D cylindrical projection,
 * manual bidirectional drag/swipe physics, and zero-overlap spacing.
 *
 * Expected optional config: $concaveConfig = [
 *   'badge' => string,
 *   'headingTag' => 'h1'|'h2',
 *   'heading' => string,
 *   'doodleText' => string,
 *   'subheading' => string,
 *   'ariaLabel' => string,
 *   'sectionClass' => string,
 *   'items' => array of ['file' => string, 'badge' => string, 'title' => string, 'subtitle' => string, 'href' => ?string]
 * ];
 */

$cfg = isset($concaveConfig) && is_array($concaveConfig) ? $concaveConfig : [];
$badgeText = $cfg['badge'] ?? 'Verified Video Proof';
$headingTag = ($cfg['headingTag'] ?? 'h2') === 'h1' ? 'h1' : 'h2';
$headingText = $cfg['heading'] ?? 'Live Cleaning In Action';
$doodleText = $cfg['doodleText'] ?? '100% Unedited Proof';
$subheadingText = $cfg['subheading'] ?? 'Swipe or drag in any direction (left & right) to explore verified doorstep cleaning results across Uttarakhand.';
$ariaLabel = $cfg['ariaLabel'] ?? '3D Arched Video Carousel';
$sectionExtraClass = trim($cfg['sectionClass'] ?? '');
$items = !empty($cfg['items']) && is_array($cfg['items']) ? $cfg['items'] : [
  ['file' => 'sofa_shampoo_cleaning_6c6a0420.mp4', 'title' => 'Ankit Chauhan', 'subtitle' => 'Sofa Foam Extraction', 'badge' => 'Living Room'],
  ['file' => 'bathroom_deep_cleaning_9d6155cb_1080p.mp4', 'title' => 'Vikram Rawat', 'subtitle' => 'Bathroom Descaling', 'badge' => 'Deep Scrub'],
  ['file' => 'deep_home_cleaning_6ce7a0e5.mp4', 'title' => 'Dr. Alok Verma', 'subtitle' => 'Full Villa Deep Sanitization', 'badge' => 'Full Villa'],
  ['file' => 'balcony_and_floor_deep_scrub_9643e5bc_1080p.mp4', 'title' => 'Ritu Joshi', 'subtitle' => 'Balcony & Tile Rotary Scrub', 'badge' => 'Pressure Scrub'],
  ['file' => 'Person_cleaning_kitchen_82bbe15d.mp4', 'title' => 'Meenakshi Pant', 'subtitle' => 'Kitchen Chimney & Degreasing', 'badge' => 'Kitchen Care'],
  ['file' => 'carpet_and_rug_deep_wash_ed47a45e.mp4', 'title' => 'Deepak Mehrotra', 'subtitle' => 'Kashmiri Carpet Injection', 'badge' => 'Fabric Care'],
  ['file' => 'Person_cleaning_water_tank_bc0ad2f8.mp4', 'title' => 'Praveen Bisht', 'subtitle' => 'Water Tank UV Sanitization', 'badge' => 'Pure Water'],
  ['file' => 'curtain_steam_clean_6bd86d98.mp4', 'title' => 'Sunita Agarwal', 'subtitle' => 'Curtain On-Site Steaming', 'badge' => 'Steam Care']
];

// Repeat items so the concave cylinder always wraps smoothly across wide screens
$loopVideos = count($items) >= 10
  ? array_merge($items, $items)
  : array_merge($items, $items, $items);

if (!defined('A1_CONCAVE_VIDEO_ASSETS_LOADED')):
  define('A1_CONCAVE_VIDEO_ASSETS_LOADED', true);
?>
<style>
/* ==========================================================================
   3D ARCHED CYLINDER VIDEO RIBBON (Shared Component)
   ========================================================================== */
.a1-services-concave-hero {
  background-color: #071914;
  background-image:
    radial-gradient(circle at 12% 18%, rgba(34, 160, 107, 0.22) 0%, transparent 45%),
    radial-gradient(circle at 88% 82%, rgba(20, 184, 166, 0.22) 0%, transparent 50%),
    radial-gradient(circle at 50% 50%, rgba(11, 41, 34, 0.72) 0%, transparent 65%);
  color: #FFFFFF;
  position: relative;
  overflow: hidden;
  padding: 2.25rem 0 2.5rem;
}
.a1-concave-hero-glow {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  filter: blur(80px);
  z-index: 1;
}
.a1-concave-glow-tl {
  top: -110px;
  left: -100px;
  width: 420px;
  height: 420px;
  background: rgba(34, 160, 107, 0.26);
}
.a1-concave-glow-br {
  bottom: -120px;
  right: -100px;
  width: 460px;
  height: 460px;
  background: rgba(20, 184, 166, 0.2);
}
.a1-services-concave-hero > .container {
  position: relative;
  z-index: 2;
}

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
.rev-video-carousel-section.is-services-hero {
  margin-top: 0;
  margin-bottom: 0;
}
.rev-video-section-header {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-bottom: 1rem;
  padding: 0 1rem;
  position: relative;
  text-align: center;
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
  font-size: clamp(1.75rem, 3.6vw, 2.5rem);
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 0.45rem;
  letter-spacing: -0.02em;
}
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
  color: rgba(255, 255, 255, 0.76);
  max-width: 680px;
  margin: 0 auto;
  line-height: 1.55;
}

/* 3D Concave Cylinder Viewport */
.rev-cylinder-viewport {
  width: 100%;
  height: 440px;
  position: relative;
  overflow: hidden;
  perspective: 1300px;
  perspective-origin: 50% 50%;
  user-select: none;
  -webkit-user-select: none;
  cursor: grab;
  display: flex;
  align-items: center;
  justify-content: center;
}
.rev-cylinder-viewport.is-dragging {
  cursor: grabbing;
}
.rev-cylinder-viewport.is-dragging .rev-cylinder-card {
  pointer-events: none;
}
.rev-cylinder-track {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 0;
  height: 0;
  transform-style: preserve-3d;
}
.rev-cylinder-card {
  position: absolute;
  width: 185px;
  height: 320px;
  top: -160px;
  left: -92.5px;
  border-radius: 20px;
  overflow: hidden;
  background: #0B2922;
  border: 1px solid rgba(255, 255, 255, 0.16);
  box-shadow: 0 14px 30px rgba(0, 0, 0, 0.65);
  cursor: pointer;
  transform-style: preserve-3d;
  will-change: transform;
  backface-visibility: hidden;
  opacity: 1;
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}
.rev-cylinder-card:hover {
  border-color: #34D399;
  box-shadow: 0 18px 40px rgba(0, 0, 0, 0.8), 0 0 25px rgba(52, 211, 153, 0.45);
  z-index: 50 !important;
}
.rev-cylinder-video {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  pointer-events: none;
}
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
.a1-hero-guarantee-strip {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 1.5rem;
  flex-wrap: wrap;
  margin-top: 0.5rem;
  padding: 0 1rem;
}
.a1-hero-guarantee-item {
  display: inline-flex;
  align-items: center;
  gap: 0.35rem;
  font-size: 0.82rem;
  font-weight: 700;
  color: #FFFFFF;
}

@media (max-width: 600px) {
  .a1-services-concave-hero {
    padding: 1.75rem 0 2rem;
  }
  .rev-cylinder-viewport {
    height: 340px;
  }
  .rev-cylinder-card {
    width: 145px;
    height: 250px;
    top: -125px;
    left: -72.5px;
    border-radius: 16px;
  }
  .rev-cylinder-pill {
    top: 8px;
    left: 8px;
    font-size: 0.6rem;
    padding: 2px 7px;
  }
  .a1-hero-guarantee-strip {
    gap: 0.75rem 1.15rem;
  }
}
</style>
<?php endif; ?>

<section class="rev-video-carousel-section <?= htmlspecialchars($sectionExtraClass) ?>" aria-label="<?= htmlspecialchars($ariaLabel) ?>">
  <div class="rev-video-section-header text-center">
    <div class="rev-video-badge">
      <span class="rev-video-badge-dot"></span>
      <span><?= htmlspecialchars($badgeText) ?></span>
    </div>
    <div class="rev-video-title-wrap">
      <<?= $headingTag ?> class="rev-video-heading"><?= htmlspecialchars($headingText) ?></<?= $headingTag ?>>
      <?php if (!empty($doodleText)): ?>
        <div class="rev-doodle-annotation" aria-hidden="true">
          <span class="rev-doodle-text"><?= htmlspecialchars($doodleText) ?></span>
          <svg class="rev-doodle-arrow" width="34" height="30" viewBox="0 0 34 30" fill="none" stroke="currentColor">
            <path d="M4 4C12 4 26 8 28 22M28 22L22 19M28 22L31 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      <?php endif; ?>
    </div>
    <p class="rev-video-subheading"><?= htmlspecialchars($subheadingText) ?></p>
  </div>

  <div class="rev-cylinder-viewport" id="cylinderViewport">
    <div class="rev-cylinder-track" id="cylinderTrack">
      <?php
      foreach ($loopVideos as $idx => $v):
        $videoSrc = SITE_URL . '/assets/cleaning%20videos/' . rawurlencode($v['file']);
        $cardHref = !empty($v['href']) ? $v['href'] : '';
      ?>
        <article
          class="rev-cylinder-card"
          data-index="<?= $idx ?>"
          <?php if ($cardHref): ?>data-href="<?= htmlspecialchars($cardHref) ?>"<?php endif; ?>
          tabindex="0"
          role="<?= $cardHref ? 'link' : 'article' ?>"
          aria-label="<?= htmlspecialchars(($v['title'] ?? '') . ($v['subtitle'] ? ' — ' . $v['subtitle'] : '')) ?>">
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
            <div class="rev-cylinder-name"><?= htmlspecialchars($v['title']) ?></div>
            <div class="rev-cylinder-serv"><?= htmlspecialchars($v['subtitle']) ?></div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
(function initCylinderMarquee() {
  const track = document.getElementById('cylinderTrack');
  const viewport = document.getElementById('cylinderViewport');
  if (!track || !viewport || track.dataset.cylinderInit === '1') return;
  track.dataset.cylinderInit = '1';

  const cards = Array.from(track.querySelectorAll('.rev-cylinder-card'));
  if (!cards.length) return;

  let scrollX = 0;
  let isDragging = false;
  let startX = 0;
  let lastX = 0;
  let totalDragDist = 0;
  let velocity = 0;
  let hoveredCard = null;

  cards.forEach(card => {
    card.addEventListener('mouseenter', () => { if (!isDragging) hoveredCard = card; });
    card.addEventListener('mouseleave', () => { if (hoveredCard === card) hoveredCard = null; });
    card.addEventListener('click', () => {
      if (totalDragDist > 8) return;
      const href = card.getAttribute('data-href');
      if (href) window.location.href = href;
    });
    card.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        const href = card.getAttribute('data-href');
        if (href) {
          e.preventDefault();
          window.location.href = href;
        }
      }
    });

    const video = card.querySelector('video');
    if (video) {
      video.muted = true;
      video.playsInline = true;
      video.play().catch(() => {});
    }
  });

  viewport.addEventListener('mousedown', (e) => {
    isDragging = true;
    startX = e.clientX;
    lastX = e.clientX;
    totalDragDist = 0;
    velocity = 0;
    viewport.classList.add('is-dragging');
  });

  window.addEventListener('mousemove', (e) => {
    if (!isDragging) return;
    const delta = e.clientX - lastX;
    lastX = e.clientX;
    totalDragDist += Math.abs(delta);
    velocity = delta;
    scrollX -= delta;
  });

  window.addEventListener('mouseup', () => {
    if (!isDragging) return;
    isDragging = false;
    viewport.classList.remove('is-dragging');
  });

  viewport.addEventListener('touchstart', (e) => {
    if (e.touches.length !== 1) return;
    isDragging = true;
    startX = e.touches[0].clientX;
    lastX = e.touches[0].clientX;
    totalDragDist = 0;
    velocity = 0;
  }, { passive: true });

  window.addEventListener('touchmove', (e) => {
    if (!isDragging || e.touches.length !== 1) return;
    const currentX = e.touches[0].clientX;
    const delta = currentX - lastX;
    lastX = currentX;
    totalDragDist += Math.abs(delta);
    velocity = delta;
    scrollX -= delta;
  }, { passive: true });

  window.addEventListener('touchend', () => {
    if (!isDragging) return;
    isDragging = false;
  });

  viewport.addEventListener('wheel', (e) => {
    if (Math.abs(e.deltaX) > Math.abs(e.deltaY)) {
      e.preventDefault();
      scrollX += e.deltaX * 0.7;
    }
  }, { passive: false });

  function renderLoop() {
    const isMobile = window.innerWidth <= 600;
    const cardWidth = isMobile ? 145 : 185;
    const gap = isMobile ? 12 : 18;
    const cardSpacing = cardWidth + gap;
    const totalCards = cards.length;
    const totalTrackLen = totalCards * cardSpacing;

    const R = isMobile ? 650 : 980;
    const centerDepth = isMobile ? 80 : 130;

    if (!isDragging) {
      if (Math.abs(velocity) > 0.15) {
        scrollX -= velocity;
        velocity *= 0.92;
      } else {
        velocity = 0;
      }
    }

    scrollX = ((scrollX % totalTrackLen) + totalTrackLen) % totalTrackLen;

    cards.forEach((card, idx) => {
      let basePos = idx * cardSpacing - scrollX;
      while (basePos < -totalTrackLen / 2) basePos += totalTrackLen;
      while (basePos > totalTrackLen / 2) basePos -= totalTrackLen;

      const theta = basePos / R;
      const deg = theta * (180 / Math.PI);

      if (Math.abs(deg) > 72) {
        card.style.display = 'none';
        const video = card.querySelector('video');
        if (video && !video.paused) video.pause();
        return;
      }

      card.style.display = 'block';

      const x = R * Math.sin(theta);
      const z = (R * (1 - Math.cos(theta))) - centerDepth;
      const rotY = -deg;

      const isHov = (card === hoveredCard && !isDragging);
      const scale = isHov ? 1.06 : 1.0;

      card.style.transform = `translate3d(${x.toFixed(1)}px, 0px, ${z.toFixed(1)}px) rotateY(${rotY.toFixed(1)}deg) scale(${scale})`;
      card.style.zIndex = isHov ? 100 : Math.round(50 + Math.abs(deg));

      const video = card.querySelector('video');
      if (video && video.paused) {
        video.play().catch(() => {});
      }
    });

    requestAnimationFrame(renderLoop);
  }

  requestAnimationFrame(renderLoop);
})();
</script>

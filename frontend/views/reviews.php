<?php
/**
 * Dedicated Customer Reviews & Ratings Portal View: /reviews/
 * Strict 4-Color Theme: Deep Green (#0B2922), Fresh Green (#22A06B), Soft Mint (#EAF3EE), White (#FFFFFF)
 */
require_once __DIR__ . '/../components/icons.php';

$pageTitle = "Customer Reviews & Real Feedback in Kashipur, Jaspur & Ramnagar | A1 Cleaning";
$pageDescription = "Read verified customer reviews of A1 Cleaning services. 4.9/5 average rating across 500+ residential and commercial cleanings in Uttarakhand.";
$canonicalUrl = SeoHelper::getCanonicalUrl('reviews');
$currentRoute = 'reviews';

require __DIR__ . '/../components/header.php';
?>



<!-- Reviews Hero Banner -->
<section style="background: linear-gradient(145deg, var(--color-deep-green) 0%, #154034 100%); color: #FFFFFF; padding: 3.5rem 0 4rem; position: relative; overflow: hidden;">
  <div class="container">
    <div style="max-width: 800px; margin: 0 auto; text-align: center;">
      <span style="display: inline-flex; align-items: center; gap: 0.4rem; background: rgba(34, 160, 107, 0.25); border: 1px solid var(--color-fresh-green); color: #EAF3EE; font-size: 0.78rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; padding: 0.35rem 0.95rem; border-radius: var(--radius-pill); margin-bottom: 1rem;">
        <span class="material-symbols-outlined icon-xs">star</span> Verified Customer Experiences
      </span>
      <h1 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 900; color: #FFFFFF; margin-bottom: 0.85rem; letter-spacing: -0.02em;">
        Real Stories, Real Cleanliness
      </h1>
      <p style="font-size: 1.05rem; color: #D6E8DC; line-height: 1.6; margin-bottom: 2rem;">
        Over 5,000 satisfied families, resorts, and businesses across <strong>Kashipur, Jaspur &amp; Ramnagar</strong> count on A1 Cleaning for spotless hygiene.
      </p>

      <!-- Rating Overview Score Card -->
      <div style="background: rgba(255, 255, 255, 0.09); border: 1.5px solid rgba(255, 255, 255, 0.2); border-radius: 20px; padding: 1.75rem 2rem; backdrop-filter: blur(8px); display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 1.5rem; align-items: center; text-align: center;">
        
        <div>
          <div style="font-size: 3rem; font-weight: 900; color: #FFFFFF; line-height: 1;">4.9</div>
          <div style="display: flex; justify-content: center; gap: 2px; margin: 0.35rem 0 0.25rem;">
            <span class="material-symbols-outlined text-fresh-green">star</span>
            <span class="material-symbols-outlined text-fresh-green">star</span>
            <span class="material-symbols-outlined text-fresh-green">star</span>
            <span class="material-symbols-outlined text-fresh-green">star</span>
            <span class="material-symbols-outlined text-fresh-green">star</span>
          </div>
          <span style="font-size: 0.8rem; color: #D6E8DC;">Overall Rating</span>
        </div>

        <div>
          <div style="font-size: 2.2rem; font-weight: 900; color: #FFFFFF; line-height: 1.1;">500+</div>
          <span style="font-size: 0.8rem; color: #D6E8DC; display: block; margin-top: 0.35rem;">Verified Reviews</span>
        </div>

        <div>
          <div style="font-size: 2.2rem; font-weight: 900; color: #FFFFFF; line-height: 1.1;">99.4%</div>
          <span style="font-size: 0.8rem; color: #D6E8DC; display: block; margin-top: 0.35rem;">Customer Recommendation</span>
        </div>

        <div>
          <a href="https://wa.me/917906366271?text=Hi%20A1%20Cleaning,%20I%20would%20like%20to%20leave%20a%20review%20for%20your%20service" target="_blank" rel="noopener" class="btn btn-action" style="font-size: 0.82rem; padding: 0.6rem 1.15rem; border-radius: var(--radius-pill); width: 100%; justify-content: center;">
            <span class="material-symbols-outlined icon-xs">rate_review</span> Leave Review
          </a>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- Reviews Filter & Grid Section -->
<section style="background: var(--color-bg-section); padding: 4rem 0;">
  <div class="container">
    
    <!-- City Filter Pills -->
    <div style="display: flex; align-items: center; justify-content: center; gap: 0.65rem; margin-bottom: 2.5rem; flex-wrap: wrap;">
      <button type="button" class="review-filter-btn active" data-filter="all" onclick="filterReviews('all', this)">
        All Feedback (500+)
      </button>
      <button type="button" class="review-filter-btn" data-filter="kashipur" onclick="filterReviews('kashipur', this)">
        <span class="material-symbols-outlined icon-xs">location_on</span> Kashipur (280+)
      </button>
      <button type="button" class="review-filter-btn" data-filter="ramnagar" onclick="filterReviews('ramnagar', this)">
        <span class="material-symbols-outlined icon-xs">location_on</span> Ramnagar (140+)
      </button>
      <button type="button" class="review-filter-btn" data-filter="jaspur" onclick="filterReviews('jaspur', this)">
        <span class="material-symbols-outlined icon-xs">location_on</span> Jaspur (80+)
      </button>
    </div>

    <!-- 9 Verified Reviews Grid -->
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 1.5rem;" id="reviews-cards-container">
      
      <!-- Review 1: Kashipur Home Clean -->
      <article class="review-card-item" data-city="kashipur" style="background: var(--color-white); border: 1.5px solid var(--color-border); border-radius: 18px; padding: 1.5rem; box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between;">
        <div>
          <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
            <div style="display: flex; gap: 2px;">
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
            </div>
            <span style="font-size: 0.7rem; font-weight: 700; color: var(--color-fresh-green); background: var(--color-soft-mint); padding: 2px 7px; border-radius: var(--radius-pill);">
              <span class="material-symbols-outlined icon-xs" style="vertical-align: middle;">verified</span> Verified Customer
            </span>
          </div>

          <div style="font-size: 0.72rem; font-weight: 800; color: var(--color-fresh-green); text-transform: uppercase; margin-bottom: 0.35rem; letter-spacing: 0.04em;">
            Full Home Deep Cleaning • 3 BHK
          </div>

          <p style="font-size: 0.88rem; color: var(--color-deep-green); line-height: 1.5; font-style: italic; margin-bottom: 1.25rem;">
            "Industrial area ke pass hamare ghar mein kaali mitti bahut jamti thi. A1 Cleaning ki team ne floor scrubbing aur sofa deep shampooing aisi ki ki ghar naya sa lagne laga. Very polite and professional staff!"
          </p>
        </div>

        <div style="display: flex; align-items: center; gap: 0.75rem; padding-top: 0.85rem; border-top: 1px dashed var(--color-border);">
          <div style="width: 40px; height: 40px; border-radius: 50%; background: var(--color-soft-mint); color: var(--color-fresh-green); display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.95rem;">
            VA
          </div>
          <div>
            <strong style="font-size: 0.88rem; color: var(--color-deep-green); display: block;">Vikas Agarwal</strong>
            <span style="font-size: 0.75rem; color: var(--color-text-muted);">Awas Vikas Colony, Kashipur • 2 weeks ago</span>
          </div>
        </div>
      </article>

      <!-- Review 2: Ramnagar Resort Clean -->
      <article class="review-card-item" data-city="ramnagar" style="background: var(--color-white); border: 1.5px solid var(--color-border); border-radius: 18px; padding: 1.5rem; box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between;">
        <div>
          <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
            <div style="display: flex; gap: 2px;">
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
            </div>
            <span style="font-size: 0.7rem; font-weight: 700; color: var(--color-fresh-green); background: var(--color-soft-mint); padding: 2px 7px; border-radius: var(--radius-pill);">
              <span class="material-symbols-outlined icon-xs" style="vertical-align: middle;">verified</span> Verified Customer
            </span>
          </div>

          <div style="font-size: 0.72rem; font-weight: 800; color: var(--color-fresh-green); text-transform: uppercase; margin-bottom: 0.35rem; letter-spacing: 0.04em;">
            Commercial Resort Cottage Cleaning
          </div>

          <p style="font-size: 0.88rem; color: var(--color-deep-green); line-height: 1.5; font-style: italic; margin-bottom: 1.25rem;">
            "Hamare resort ke 6 cottages ki move-in and deep sanitization karwayi thi weekend rush se pehle. Time par aate hain aur machines standard commercial quality ki hain. Highly recommended for Corbett homestays!"
          </p>
        </div>

        <div style="display: flex; align-items: center; gap: 0.75rem; padding-top: 0.85rem; border-top: 1px dashed var(--color-border);">
          <div style="width: 40px; height: 40px; border-radius: 50%; background: var(--color-soft-mint); color: var(--color-fresh-green); display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.95rem;">
            RN
          </div>
          <div>
            <strong style="font-size: 0.88rem; color: var(--color-deep-green); display: block;">Rohit Negi</strong>
            <span style="font-size: 0.75rem; color: var(--color-text-muted);">Dhikuli, Ramnagar • 1 month ago</span>
          </div>
        </div>
      </article>

      <!-- Review 3: Jaspur Water Tank -->
      <article class="review-card-item" data-city="jaspur" style="background: var(--color-white); border: 1.5px solid var(--color-border); border-radius: 18px; padding: 1.5rem; box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between;">
        <div>
          <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
            <div style="display: flex; gap: 2px;">
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
            </div>
            <span style="font-size: 0.7rem; font-weight: 700; color: var(--color-fresh-green); background: var(--color-soft-mint); padding: 2px 7px; border-radius: var(--radius-pill);">
              <span class="material-symbols-outlined icon-xs" style="vertical-align: middle;">verified</span> Verified Customer
            </span>
          </div>

          <div style="font-size: 0.72rem; font-weight: 800; color: var(--color-fresh-green); text-transform: uppercase; margin-bottom: 0.35rem; letter-spacing: 0.04em;">
            6-Stage UV Water Tank Cleaning
          </div>

          <p style="font-size: 0.88rem; color: var(--color-deep-green); line-height: 1.5; font-style: italic; margin-bottom: 1.25rem;">
            "Overhead water tank mein hard water ki moti papdi jam gayi thi. Machine se bilkul saaf kar diya aur paani ab ekdum crystal clear aa raha hai. Rate bhi bilkul reasonable the aur UV light se sanitize bhi kiya."
          </p>
        </div>

        <div style="display: flex; align-items: center; gap: 0.75rem; padding-top: 0.85rem; border-top: 1px dashed var(--color-border);">
          <div style="width: 40px; height: 40px; border-radius: 50%; background: var(--color-soft-mint); color: var(--color-fresh-green); display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.95rem;">
            MT
          </div>
          <div>
            <strong style="font-size: 0.88rem; color: var(--color-deep-green); display: block;">Mohd. Tariq</strong>
            <span style="font-size: 0.75rem; color: var(--color-text-muted);">Subhash Chowk, Jaspur • 3 weeks ago</span>
          </div>
        </div>
      </article>

      <!-- Review 4: Kashipur Sofa Wash -->
      <article class="review-card-item" data-city="kashipur" style="background: var(--color-white); border: 1.5px solid var(--color-border); border-radius: 18px; padding: 1.5rem; box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between;">
        <div>
          <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
            <div style="display: flex; gap: 2px;">
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
            </div>
            <span style="font-size: 0.7rem; font-weight: 700; color: var(--color-fresh-green); background: var(--color-soft-mint); padding: 2px 7px; border-radius: var(--radius-pill);">
              <span class="material-symbols-outlined icon-xs" style="vertical-align: middle;">verified</span> Verified Customer
            </span>
          </div>

          <div style="font-size: 0.72rem; font-weight: 800; color: var(--color-fresh-green); text-transform: uppercase; margin-bottom: 0.35rem; letter-spacing: 0.04em;">
            Sofa &amp; Fabric Shampooing (7-Seater)
          </div>

          <p style="font-size: 0.88rem; color: var(--color-deep-green); line-height: 1.5; font-style: italic; margin-bottom: 1.25rem;">
            "Light beige color ka sofa bacho ke spill aur stains se kharab ho gaya tha. German extraction vacuum se aisi cleaning ki ki bilkul brand new lag raha hai. Smell bhi ekdum fresh lavender ki thi."
          </p>
        </div>

        <div style="display: flex; align-items: center; gap: 0.75rem; padding-top: 0.85rem; border-top: 1px dashed var(--color-border);">
          <div style="width: 40px; height: 40px; border-radius: 50%; background: var(--color-soft-mint); color: var(--color-fresh-green); display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.95rem;">
            MS
          </div>
          <div>
            <strong style="font-size: 0.88rem; color: var(--color-deep-green); display: block;">Meenakshi Sharma</strong>
            <span style="font-size: 0.75rem; color: var(--color-text-muted);">Kundeshwari Road, Kashipur • 1 month ago</span>
          </div>
        </div>
      </article>

      <!-- Review 5: Ramnagar Kitchen Deep Clean -->
      <article class="review-card-item" data-city="ramnagar" style="background: var(--color-white); border: 1.5px solid var(--color-border); border-radius: 18px; padding: 1.5rem; box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between;">
        <div>
          <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
            <div style="display: flex; gap: 2px;">
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
            </div>
            <span style="font-size: 0.7rem; font-weight: 700; color: var(--color-fresh-green); background: var(--color-soft-mint); padding: 2px 7px; border-radius: var(--radius-pill);">
              <span class="material-symbols-outlined icon-xs" style="vertical-align: middle;">verified</span> Verified Customer
            </span>
          </div>

          <div style="font-size: 0.72rem; font-weight: 800; color: var(--color-fresh-green); text-transform: uppercase; margin-bottom: 0.35rem; letter-spacing: 0.04em;">
            Kitchen Degreasing &amp; Chimney Clean
          </div>

          <p style="font-size: 0.88rem; color: var(--color-deep-green); line-height: 1.5; font-style: italic; margin-bottom: 1.25rem;">
            "Kitchen tiles par oil ke sticky drops saalo se the jo normal cleaning se nahi jaate the. A1 team ne food-grade safe chemicals se pura chimney aur tiles mirror shine kar di. Outstanding work!"
          </p>
        </div>

        <div style="display: flex; align-items: center; gap: 0.75rem; padding-top: 0.85rem; border-top: 1px dashed var(--color-border);">
          <div style="width: 40px; height: 40px; border-radius: 50%; background: var(--color-soft-mint); color: var(--color-fresh-green); display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.95rem;">
            HR
          </div>
          <div>
            <strong style="font-size: 0.88rem; color: var(--color-deep-green); display: block;">Harish Rawat</strong>
            <span style="font-size: 0.75rem; color: var(--color-text-muted);">Kanya Gurukul Area, Ramnagar • 3 weeks ago</span>
          </div>
        </div>
      </article>

      <!-- Review 6: Jaspur Bathroom Descaling -->
      <article class="review-card-item" data-city="jaspur" style="background: var(--color-white); border: 1.5px solid var(--color-border); border-radius: 18px; padding: 1.5rem; box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between;">
        <div>
          <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
            <div style="display: flex; gap: 2px;">
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
              <span class="material-symbols-outlined text-fresh-green icon-sm">star</span>
            </div>
            <span style="font-size: 0.7rem; font-weight: 700; color: var(--color-fresh-green); background: var(--color-soft-mint); padding: 2px 7px; border-radius: var(--radius-pill);">
              <span class="material-symbols-outlined icon-xs" style="vertical-align: middle;">verified</span> Verified Customer
            </span>
          </div>

          <div style="font-size: 0.72rem; font-weight: 800; color: var(--color-fresh-green); text-transform: uppercase; margin-bottom: 0.35rem; letter-spacing: 0.04em;">
            Bathroom Mechanized Descaling
          </div>

          <p style="font-size: 0.88rem; color: var(--color-deep-green); line-height: 1.5; font-style: italic; margin-bottom: 1.25rem;">
            "Jaspur ke groundwater mein bahut hard water scaling hai jis se taps aur glass par safed papdi thi. Inhone bina acid use kiye safe compound se saaf kiya. Taps bilkul naye jaise chamak gaye."
          </p>
        </div>

        <div style="display: flex; align-items: center; gap: 0.75rem; padding-top: 0.85rem; border-top: 1px dashed var(--color-border);">
          <div style="width: 40px; height: 40px; border-radius: 50%; background: var(--color-soft-mint); color: var(--color-fresh-green); display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.95rem;">
            AC
          </div>
          <div>
            <strong style="font-size: 0.88rem; color: var(--color-deep-green); display: block;">Amit Chauhan</strong>
            <span style="font-size: 0.75rem; color: var(--color-text-muted);">Station Road, Jaspur • 2 months ago</span>
          </div>
        </div>
      </article>

    </div>

  </div>
</section>

<!-- Review CTA Banner -->
<section style="background: var(--color-white); padding: 4rem 0; border-top: 1px solid var(--color-border); text-align: center;">
  <div class="container">
    <div style="max-width: 650px; margin: 0 auto;">
      <div style="width: 56px; height: 56px; border-radius: 50%; background: var(--color-soft-mint); color: var(--color-fresh-green); display: inline-flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
        <span class="material-symbols-outlined icon-md">favorite</span>
      </div>
      <h3 style="font-size: 1.85rem; font-weight: 900; color: var(--color-deep-green); margin-bottom: 0.65rem;">
        Have You Experienced A1 Cleaning?
      </h3>
      <p style="color: var(--color-text-body); font-size: 0.95rem; margin-bottom: 1.75rem;">
        Your honest feedback inspires our team and helps fellow residents in Uttarakhand find trustworthy doorstep hygiene.
      </p>
      <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; flex-wrap: wrap;">
        <a href="https://wa.me/917906366271?text=Hi%20A1%20Cleaning,%20I%20want%20to%20submit%20my%20service%20review" target="_blank" rel="noopener" class="btn btn-action" style="border-radius: var(--radius-pill); padding: 0.75rem 1.75rem;">
          <span class="material-symbols-outlined icon-sm">chat</span> Send Review on WhatsApp
        </a>
        <a href="<?= SITE_URL ?>/book-now/" class="btn btn-outline" style="border-radius: var(--radius-pill); padding: 0.75rem 1.75rem;">
          Book Cleaning Service
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Filter Script & Styling -->
<style>
.review-filter-btn {
  background: var(--color-white);
  border: 1.5px solid var(--color-border);
  color: var(--color-deep-green);
  font-size: 0.85rem;
  font-weight: 700;
  padding: 0.5rem 1.15rem;
  border-radius: var(--radius-pill);
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  gap: 0.35rem;
  transition: all 0.2s ease;
  user-select: none;
}
.review-filter-btn:hover {
  border-color: var(--color-fresh-green);
  background: #F4FAF6;
}
.review-filter-btn.active {
  background: var(--color-fresh-green);
  border-color: var(--color-fresh-green);
  color: var(--color-white);
  box-shadow: 0 4px 12px rgba(34, 160, 107, 0.25);
}
</style>

<script>
function filterReviews(city, btn) {
  const allBtns = document.querySelectorAll('.review-filter-btn');
  allBtns.forEach(b => b.classList.remove('active'));
  btn.classList.add('active');

  const cards = document.querySelectorAll('.review-card-item');
  cards.forEach(card => {
    if (city === 'all' || card.getAttribute('data-city') === city) {
      card.style.display = 'flex';
    } else {
      card.style.display = 'none';
    }
  });
}
</script>

<?php require __DIR__ . '/../components/footer.php'; ?>

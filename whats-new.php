<?php /* WHAT'S NEW — HKS sliders page (Bootstrap 5) */ ?>
<?php include 'navbar.php'; ?>

<!-- page-only CSS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600&display=swap"
  rel="stylesheet">
<link rel="stylesheet" href="assets/styling/hks-sliders.css?v=10">

<!-- === Button styling only (unifies Book Now + Explore Our Services) === -->
<style>
  /* Buttons group — stacked on mobile, side-by-side when space allows,
   with safe space before the next slider */
  .hks-btns {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    /* gap between the two buttons */
    margin-top: 12px;
    margin-bottom: 28px;
    /* space under buttons so they don't touch the carousel */
  }

  /* BOOK NOW — your markup is <a class="btn_banner1"><button>…</button></a> */
  .hks-btns .btn_banner1 {
    display: block;
    flex: 1 1 240px;
    /* grow/shrink; min width before wrapping */
  }

  .hks-btns .btn_banner1 button {
    width: 100%;
    padding: 12px 18px;
    border: 0;
    border-radius: 8px;
    background: #85b69c;
    color: #fff;
    font: 500 16px/1.25 "Lato", system-ui, -apple-system, "Segoe UI", Arial, sans-serif;
    cursor: pointer;
  }

  /* EXPLORE OUR SERVICES — style the anchor as a button */
  .hks-btns a.btn-outline,
  .hks-btns a.btn-outline:link,
  .hks-btns a.btn-outline:visited {
    display: block;
    /* makes padding/width take effect */
    flex: 1 1 240px;
    text-align: center;
    padding: 12px 18px;
    border: 1px solid #85b69c;
    border-radius: 8px;
    color: #2c2b2b;
    text-decoration: none;
    font: 500 16px/1.25 "Lato", system-ui, -apple-system, "Segoe UI", Arial, sans-serif;
    background: transparent;
  }

  /* Hover/active states (optional but nice) */
  .hks-btns a.btn-outline:hover {
    background: #f0f5f2;
  }

  .hks-btns .btn_banner1 button:hover {
    filter: brightness(0.95);
  }

  /* Mobile: stack full width */
  @media (max-width: 575.98px) {

    .hks-btns .btn_banner1,
    .hks-btns a.btn-outline {
      flex-basis: 100%;
    }
  }

  .carousel-item {
    transition: transform 2s cubic-bezier(0.4, 0, 0.2, 1),
      opacity 2s cubic-bezier(0.4, 0, 0.2, 1) !important;
  }

  .my-section {
    padding-top: 10vh;
    padding-bottom: 10vh;
  }

  @media screen and (max-width: 767px) {
    .heading_banner {
      font-size: 28px !important;
    }

    .margin-bottom-text {

      padding-bottom: 6vh;
    }

    .my-section {
      padding-top: 2vh;
      padding-bottom: 2vh;
    }
  }
</style>


<!-- ===================== HERO (Slider 1) ===================== -->
<section class="hks-hero-wrap ">
  <div id="heroSlider" class="carousel slide  carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets\imgs\what-new\slider\HSK_New_Camp_Slider_1.jpg" class="d-block w-100" alt="Hero 2">
      </div>
      <div class="carousel-item">
        <img src="assets\imgs\what-new\slider\HSK_New_Camp_Slider_2.jpg" class="d-block w-100" alt="Hero 3">
      </div>
      <div class="carousel-item">
        <img src="assets\imgs\what-new\slider\HSK_New_Camp_Slider_3.jpg" class="d-block w-100" alt="Hero 6">
      </div>
    </div>

    <button style="display:none;" class="carousel-control-prev" type="button" data-bs-target="#heroSlider"
      data-bs-slide="prev" aria-label="Previous">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button style="display:none;" class="carousel-control-next" type="button" data-bs-target="#heroSlider"
      data-bs-slide="next" aria-label="Next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<!-- ===================== TITLE + SUBTITLE ===================== -->
<section class="hks-overview my-section">
  <div class="container">
    <h1 class="heading_banner   wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s"
      style="text-align:center; visibility: visible; animation-duration: 2s; animation-delay: 0.1s; animation-name: fadeInUp;">
      BRIDAL BEAUTY EDIT <span style="white-space:;">2025-26</span></h1>
    <p class="text_banner t_banner_mbl  wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s"
      style="text-align:justify; text-align-last: left; visibility: visible; animation-duration: 2s; animation-delay: 0.3s; animation-name: fadeInUp;">
      Beauty Beyond Boundaries for Every You ft. Aima Baig, captured amidst the majestic landscapes is all about
      embracing natural beauty inside out.
      This edit is a tribute to Pakistan’s eternal beauty, showcasing the perfect blend of Hifsa Khan’s traditional
      elegance and modern glamour bridal makeover.
      From the snow-capped mountains to the lush green valleys, every frame of our newly
      introduced two makeover looks is a testament to the country's diverse landscapes and ultimate luxury bridal
      experience provided by HKS.
    </p>
  </div>
</section>
<section class="">
  <div class="container">

    <h1 class="heading_banner   wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s"
      style="text-align:center; visibility: visible; animation-duration: 2s; animation-delay: 0.1s; animation-name: fadeInUp;">
      What’s New About this Edit?
      </h2>
</section>
<!-- ===================== SPLIT 1: text left, media right ===================== -->
<section class="my-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 margin-bottom-text mb-lg-0">
        <h2 class="heading_banner  padding_bannertext wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s"
          style=" visibility: visible; animation-duration: 2s; animation-delay: 0.1s; animation-name: fadeInUp;">HKS
          Unfiltered</h2>
        <p class="text_banner t_banner_mbl padding_bannertext wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s"
          style="visibility: visible; animation-duration: 2s; animation-delay: 0.3s; animation-name: fadeInUp;">
          A revolutionary makeup look from our Bridal Beauty Edit 2025 that enhances your natural beauty—soft, subtle,
          radiant— inspired by the effortlessness of no-makeup looks. It accentuates your features without looking
          overdone, so you feel like the best version of yourself.
        </p>
        <div class="buttons_cont">
          <a href="book-appointment.php" class="btn_banner1  wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s"
            style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeInUp;">
            <button fdprocessedid="qm01es">Book Appointment</button>
          </a>
          <a href="our-services.php" class="btn_banner2 btn0banner-two-homee wow fadeInUp" data-wow-duration="2s"
            data-wow-delay="0.7s"
            style="visibility: visible; animation-duration: 2s; animation-delay: 0.7s; animation-name: fadeInUp;">
            <button fdprocessedid="huxl0k">Explore Our Services</button>
          </a>
        </div>
      </div>

      <div class="col-lg-6">
        <div id="splitCarousel1" class="carousel slide hks-media" data-bs-ride="carousel" data-bs-interval="1600">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets\imgs\what-new\slider2\4.png" alt="Set 1">
            </div>
            <div class="carousel-item">
              <img src="assets\imgs\what-new\slider2\5.png" alt="Set 8">
            </div>
            <div class="carousel-item">
              <img src="assets\imgs\what-new\slider2\6.png" alt="Set 9">
            </div>
          </div>
          <button style="display:none;" class="carousel-control-prev" type="button" data-bs-target="#splitCarousel1"
            data-bs-slide="prev" aria-label="Previous">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button style="display:none;" class="carousel-control-next" type="button" data-bs-target="#splitCarousel1"
            data-bs-slide="next" aria-label="Next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== SPLIT 2: media left, text right ===================== -->
<section class="my-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 order-lg-1 order-2">
        <div id="splitCarousel2" class="carousel slide hks-media" data-bs-ride="carousel" data-bs-interval="1600">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets\imgs\what-new\slider2\1.png" alt="Set 11">
            </div>
            <div class="carousel-item">
              <img src="assets\imgs\what-new\slider2\2.png" alt="Set 14">
            </div>
            <div class="carousel-item">
              <img src="assets\imgs\what-new\slider2\3.png" alt="Set 15">
            </div>
          </div>
          <button style="display:none;" class="carousel-control-prev" type="button" data-bs-target="#splitCarousel2"
            data-bs-slide="prev" aria-label="Previous">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button style="display:none;" class="carousel-control-next" type="button" data-bs-target="#splitCarousel2"
            data-bs-slide="next" aria-label="Next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <div class="col-lg-6 order-lg-2 order-1 -text margin-bottom-text mb-lg-0">
        <h2 class="heading_banner  padding_bannertext wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s"
          style=" visibility: visible; animation-duration: 2s; animation-delay: 0.1s; animation-name: fadeInUp;">HKS
          Lumière</h2>
        <p class="text_banner t_banner_mbl padding_bannertext wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s"
          style="visibility: visible; animation-duration: 2s; animation-delay: 0.3s; animation-name: fadeInUp;">
          A masterful blend of glowy, dewy, and glittery elements that redefines bridal beauty.
          Its a symphony of light & colors where glitter and matte finishes fuse in perfect harmony.
          Make a statement on your special day with HKS Lumiere , our signature makeup look perfect for Shendi, Shalima,
          Mehndi, and Barat events.
          This look enhances your natural features with a soft, luminous glow, ensuring you shine brightly in the midst
          of celebration.
        </p>
        <div class="buttons_cont">
          <a href="book-appointment.php" class="btn_banner1  wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s"
            style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeInUp;">
            <button fdprocessedid="qm01es">Book Appointment</button>
          </a>
          <a href="our-services.php" class="btn_banner2 btn0banner-two-homee wow fadeInUp" data-wow-duration="2s"
            data-wow-delay="0.7s"
            style="visibility: visible; animation-duration: 2s; animation-delay: 0.7s; animation-name: fadeInUp;">
            <button fdprocessedid="huxl0k">Explore Our Services</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php /* optional brand strip / footer includes */ ?>
<?php /* REMOVED to avoid double moving band on this page:  if (file_exists('logo.php')) include 'logo.php'; */ ?>
<?php if (file_exists('footer.php'))
  include 'footer.php'; ?>

<!-- JS (Bootstrap 5 + sliders init) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="assets/js/hks-sliders-init.js?v=2"></script>
<div class="desktop-logos">
  <div class="container-fluid">
    <div class="marquee-wrapper border_top_bottom">
      <div class="marquee-track">
        <!-- Repeat logos twice for seamless scroll -->
        <div class="col-md-2 d-flex align-items-center justify-content-center p-0">
          <img src="assets/imgs/banner/client-logo (1).png" class="img-fluid" />
        </div>
        <div class="col-md-2 d-flex align-items-center justify-content-center p-0 logo-mbl">
          <img src="assets/imgs/banner/client-logo (2).png" class="img-fluid" />
        </div>
        <div class="col-md-2 d-flex align-items-center justify-content-center p-0 logo-mbl">
          <img src="assets/imgs/banner/client-logo (3).png" class="img-fluid" />
        </div>
        <div class="col-md-2 d-flex align-items-center justify-content-center p-0">
          <img src="assets/imgs/banner/client-logo (4).png" class="img-fluid" />
        </div>
        <div class="col-md-2 d-flex align-items-center justify-content-center p-0 logo-mbl">
          <img src="assets/imgs/banner/client-logo (5).png" class="img-fluid" />
        </div>
        <div class="col-md-2 d-flex align-items-center justify-content-center p-0 logo-mbl">
          <img src="assets/imgs/banner/client-logo (6).png" class="img-fluid" />
        </div>

        <!-- Duplicate for infinite scroll -->
        <div class="col-md-2 d-flex align-items-center justify-content-center p-0">
          <img src="assets/imgs/banner/client-logo (1).png" class="img-fluid" />
        </div>
        <div class="col-md-2 d-flex align-items-center justify-content-center p-0 logo-mbl">
          <img src="assets/imgs/banner/client-logo (2).png" class="img-fluid" />
        </div>
        <div class="col-md-2 d-flex align-items-center justify-content-center p-0 logo-mbl">
          <img src="assets/imgs/banner/client-logo (3).png" class="img-fluid" />
        </div>
        <div class="col-md-2 d-flex align-items-center justify-content-center p-0">
          <img src="assets/imgs/banner/client-logo (4).png" class="img-fluid" />
        </div>
        <div class="col-md-2 d-flex align-items-center justify-content-center p-0 logo-mbl">
          <img src="assets/imgs/banner/client-logo (5).png" class="img-fluid" />
        </div>
        <div class="col-md-2 d-flex align-items-center justify-content-center p-0 logo-mbl">
          <img src="assets/imgs/banner/client-logo (6).png" class="img-fluid" />

           <!-- Duplicate for infinite scroll -->
        <div class="col-md-2 d-flex align-items-center justify-content-center p-0">
          <img src="assets/imgs/banner/client-logo (1).png" class="img-fluid" />
        </div>
        <div class="col-md-2 d-flex align-items-center justify-content-center p-0 logo-mbl">
          <img src="assets/imgs/banner/client-logo (2).png" class="img-fluid" />
        </div>
        <div class="col-md-2 d-flex align-items-center justify-content-center p-0 logo-mbl">
          <img src="assets/imgs/banner/client-logo (3).png" class="img-fluid" />
        </div>
        <div class="col-md-2 d-flex align-items-center justify-content-center p-0">
          <img src="assets/imgs/banner/client-logo (4).png" class="img-fluid" />
        </div>
        <div class="col-md-2 d-flex align-items-center justify-content-center p-0 logo-mbl">
          <img src="assets/imgs/banner/client-logo (5).png" class="img-fluid" />
        </div>
        <div class="col-md-2 d-flex align-items-center justify-content-center p-0 logo-mbl">
          <img src="assets/imgs/banner/client-logo (6).png" class="img-fluid" />
        </div>
        
        </div>
      </div>
    </div>
  </div>
</div>

<style type="text/css">
  @media(max-width: 767px){
    .desktop-logos{
      display: none;
    }
  }
.desktop-logos {
  overflow: hidden;
}

.marquee-wrapper {
  display: flex;
  overflow: hidden;
  white-space: nowrap;
}

.marquee-track {
  display: flex;
  animation: scroll-left 30s linear infinite;
}

@keyframes scroll-left {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-50%);
  }
}

</style>




<style>
  .carousel-container {
    overflow: hidden;
    position: relative;
    width: 100%;
  }

  .carousel-track {
    display: flex;
    transition: transform 0.5s ease-in-out;
  }

  .carousel-slide {
    min-width: calc(100% / 3);
    /* Default width for 3 items per view */
    padding: 10px;
    box-sizing: border-box;
  }

  .carousel-slide img {
    width: 100%;
    border-radius: 10px;
  }

  .mbl-logo2 {
    display: none;
  }

  @media (max-width: 930px) and (min-width: 640px) {
    .carousel-slide {
      min-width: calc(100% / 3);
      /* 3 items */
    }

    .mbl-logo2 {
      display: block;
    }
  }

  @media (max-width: 575px) {
    .carousel-slide {
      min-width: calc(100% / 2);
      /* 2 items */
    }

    .mbl-logo2 {
      display: block;
    }
  }
</style>
  <div class="container-fluid mbl-logo2 border_top_bottom ">
    <div class="carousel-container">
      <div class="carousel-track logo-carousel">
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-1.svg" alt="Logo 1">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-2.svg" alt="Logo 2">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-3.svg" alt="Logo 3">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-4.svg" alt="Logo 4">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-5.svg" alt="Logo 5">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-6.svg" alt="Logo 5">
        </div>

        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-1.svg" alt="Logo 1">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-2.svg" alt="Logo 2">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-3.svg" alt="Logo 3">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-4.svg" alt="Logo 4">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-5.svg" alt="Logo 5">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-6.svg" alt="Logo 5">
        </div>



        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-1.svg" alt="Logo 1">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-2.svg" alt="Logo 2">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-3.svg" alt="Logo 3">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-4.svg" alt="Logo 4">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-5.svg" alt="Logo 5">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-6.svg" alt="Logo 5">
        </div>




        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-1.svg" alt="Logo 1">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-2.svg" alt="Logo 2">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-3.svg" alt="Logo 3">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-4.svg" alt="Logo 4">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-5.svg" alt="Logo 5">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-6.svg" alt="Logo 5">
        </div>




        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-1.svg" alt="Logo 1">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-2.svg" alt="Logo 2">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-3.svg" alt="Logo 3">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-4.svg" alt="Logo 4">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-5.svg" alt="Logo 5">
        </div>
        <div class="carousel-slide">
          <img src="assets/imgs/banner/mbl-client-6.svg" alt="Logo 5">
        </div>


      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
  const carousels = [
    { trackSelector: '.logo-carousel', interval: 2000 },
    { trackSelector: '.footer-carousel', interval: 3000 }, // Example: Different interval
  ];

  carousels.forEach((carousel) => {
    const track = document.querySelector(carousel.trackSelector);
    const slides = Array.from(track.children);
    let slideWidth;

    function updateSlideWidth() {
      slideWidth = slides[0].getBoundingClientRect().width;
    }

    let currentSlide = 0;

    function autoSlide() {
      currentSlide++;
      if (currentSlide >= slides.length) {
        currentSlide = 0;
      }
      track.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
    }

    updateSlideWidth();

    let slideInterval = setInterval(autoSlide, carousel.interval);

    window.addEventListener('resize', () => {
      updateSlideWidth();
      clearInterval(slideInterval);
      slideInterval = setInterval(autoSlide, carousel.interval);
    });

    // Optional: Pause on hover
    track.addEventListener('mouseenter', () => clearInterval(slideInterval));
    track.addEventListener('mouseleave', () => {
      slideInterval = setInterval(autoSlide, carousel.interval);
    });
  });
});
  </script>
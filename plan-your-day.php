<title>Plan your day</title>







<?php include 'navbar.php' ?>

<!-- Banner Section Starter  -->
<section class="banner_sec_our_package">
  <div class="container">
    <div class="row ">
      <div class="col-md-6 left_col_banner_cust mbl_show">
        <h2 class="heading_banner h_banner_mbl padding_bannertext wow fadeInUp" data-wow-duration="2s"
          data-wow-delay="0.1s">
          Expert Beauty Advice, Tailored Just for You
        </h2>
      </div>
    </div>
    <div class="row mbl_reverse_col">
      <div class="col-md-6 mt-5-return packages_banner_col left_col_banner_cust">
        <h2 class="heading_banner desktop_show padding_bannertext wow fadeInUp" data-wow-duration="2s"
          data-wow-delay="0.1s">
          Expert Beauty Advice, Tailored Just for You
        </h2>
        <p class="text_banner text-center-res wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
          Hifsa Khan Studio offers expert beauty advice, personalized just for you. Let our team guide you to look and
          feel your best with tailored tips and techniques.
        </p>
        <a href="" class="icon_banner_down_arrow mbl_show">
          <img src="assets/imgs/banner/arrow_down_img.svg" alt="" class="img-fluid img_banner_arrow"
            id="img_banner_arrow_mbl">
          <img src="assets/imgs/banner/arrow_down_icon.svg" alt="" class="img-fluid icon_banner_img">
        </a>
      </div>
      <div class="col-md-6 right_col_banner_cus">
        <div class="container">
          <div class="row align-items-center row_images_right">
            <div class="col-md-4 banner_img_1 pkg_img1 wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.1s">
              <img src="assets/imgs/advise/1.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-4 banner_img_2  wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
              <img src="assets/imgs/advise/2.png" class="img-fluid" alt="">

            </div>
            <div class="col-md-4 banner_img_3  wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.5s">
              <img src="assets/imgs/advise/3.png" class="img-fluid" alt="">

            </div>
          </div>
        </div>
        <a href="" class="icon_banner_down_arrow desktop_show">
          <img src="assets/imgs/banner/arrow_down_img.svg" alt="" class="img-fluid img_banner_arrow"
            id="img_banner_arrow">
          <img src="assets/imgs/banner/arrow_down_icon.svg" alt="" class="img-fluid icon_banner_img">
        </a>
      </div>
    </div>

  </div>
</section>
<!-- Banner Section Starter  -->


<!-- Carausal Section Logos Starter  -->
<?php include 'logo.php' ?>
<!-- Carausal Section Logos Ender  -->




<section class="advise_catagory" >
  <div class="container w-100-cont-z-fold">
    <div class="row" style="display: none">
      <div class="col-md-12 d-flex justify-content-center">
        <div class="dropdown">
          <button id="dropdownMenuButton" class="btn btn-secondary dropdown-toggle" type="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            <span id="category-text">Categories</span>
            <img src="assets/imgs/advise/down_arrow.png" alt="icon" class="img-fluid icon_arrow" />
          </button>
          <ul class="dropdown-menu">
            <li>
              <button class="advise_btn" data-advise="all-categories">
                All Categories
              </button>
            </li>
            <li>
              <button class="advise_btn" data-advise="advise_brides">
                All About Brides
              </button>
            </li>
            <li>
              <button class="advise_btn" data-advise="advise_spa">
                Skin & Spa Care
              </button>
            </li>
            <li>
              <button class="advise_btn" data-advise="advise_hair">
                Hair Trends & Care
              </button>
            </li>
            <li class="dropdown-submenu">
              <button class="advise_btn" data-advise="advise_barat">
                Makeup
                <span class="submenu-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4" />
                  </svg>
                </span>
              </button>
              <ul class="dropdown-menu submenu">
                <li>
                  <button class="advise_btn submenu-text" data-advise="advise_mehndi">
                    Mehndi & Cultural Events
                  </button>
                </li>
                <li>
                  <button class="advise_btn submenu-text" data-advise="advise_nikkah">
                    Nikkah & Walima
                  </button>
                </li>
                <li>
                  <button class="advise_btn submenu-text" data-advise="advise_uniquebridel">
                    Unique Bridal Attires
                  </button>
                </li>
              </ul>
            </li>
          </ul>
        </div>

        <style>
     

          /* Hide submenu by default */
          .dropdown-submenu .submenu {
            display: none;
            position: absolute;
            top: 100%;
            /* Below the "Makeup" button */
            left: 0;
            /* Align with "Makeup" button */
            margin-top: 0;
            padding-left: 10px;
            background-color: transparent;
            border: 0;
            z-index: 1000;
            transform: translate(0px, 5px) !important;

          }

          .submenu-text{
            font-size: 14px !important;
          }


          /* Submenu icon */
          .submenu-icon {
            float: right;
            font-size: 14px;
            margin-left: 10px;
            visibility: hidden;
          }

          /* Show submenu on hover */
          .dropdown-submenu:hover .submenu {
            display: block;
            position: relative;
          }

          .dropdown-submenu:hover .submenu-icon {
            visibility: visible;
          }

          /* Smooth height adjustment for the main dropdown */
          .dropdown:hover .dropdown-menu {
            height: auto;
            /* Adjust height dynamically */
          }

          /* Button hover effect */
          .dropdown-menu button {
            display: block;
            width: 100%;
            padding: 10px;
            background: none;
            border: none;
            text-align: left;
            cursor: pointer;
          }
        </style>

      </div>
    </div>






    <!-- Advise content rows -->
    <!-- Bridels  -->
    <div class="row mt-5">
      <div class="col-md-4 col_4_m advise_content advise_brides all-categories">
        <img src="assets/imgs/advise/advices (1).png" class="img-fluid" alt="catagory-img" />
        <h5 class="catagory_heading">Plan Your Wedding</h5>
        <p class="catagory_text">
          A Step-by-Step Guide for Every Pakistani Bride
        </p>
        <a href="bridal-beauty.php" class="catagory_btn">
          <button>Read More</button>
        </a>
      </div>
      <div class="col-md-4 col_4_m advise_content advise_brides all-categories">
        <img src="assets/imgs/advise/advices (2).png" class="img-fluid" alt="catagory-img" />
        <h5 class="catagory_heading">Plan Your Mehndi</h5>
        <p class="catagory_text">
          Everything You Need for a Perfect Celebration
        </p>
        <a href="mehndi-night.php" class="catagory_btn">
          <button>Read More</button>
        </a>
      </div>
      <div class="col-md-4 col_4_m advise_content advise_brides all-categories">
        <img src="assets/imgs/advise/advices (3).png" class="img-fluid" alt="catagory-img" />
        <h5 class="catagory_heading">Plan Your Walima</h5>
        <p class="catagory_text">
              The Perfect Elegant Reception
        </p>
        <a href="walima-glam.php" class="catagory_btn">
          <button>Read More</button>
        </a>
      </div>
      <div class="col-md-4 advise_content advise_spa col_4_m all-categories">
        <img src="assets/imgs/advise/advices (4).png" class="img-fluid" alt="catagory-img" />
        <h5 class="catagory_heading">Plan Your Nikkah</h5>
        <p class="catagory_text">A Beautiful & Intimate Beginning</p>
        <a href="nikkah-day.php" class="catagory_btn">
          <button>Read More</button>
        </a>
      </div>
      <div class="col-md-4 col_4_m advise_content advise_brides all-categories">
        <img src="assets/imgs/advise/advices (5).png" class="img-fluid" alt="catagory-img" />
        <h5 class="catagory_heading">Bridal Morning</h5>
        <p class="catagory_text">
          Embrace a Calm, Radiant Start to Your Wedding Day
        </p>
        <a href="bridal-morning.php" class="catagory_btn">
          <button>Read More</button>
        </a>
      </div>
      <div class="col-md-4 col_4_m advise_content advise_brides all-categories">
        <img src="assets/imgs/advise/advices (6).png" class="img-fluid" alt="catagory-img" />
        <h5 class="catagory_heading">Wedding Dos & Don'ts</h5>
        <p class="catagory_text">
          Your Friendly Guide to a Joyful Celebration
        </p>
        <a href="dos-donts.php" class="catagory_btn">
          <button>Read More</button>
        </a>
      </div>
      <div class="col-md-4 col_4_m advise_content advise_spa all-categories">
        <img src="assets/imgs/advise/advices (7).png" class="img-fluid" alt="catagory-img" />
        <h5 class="catagory_heading">How to: Bridal Shower</h5>
        <p class="catagory_text">Your Ultimate Guide to a Fun & Flawless Celebration</p>
        <a href="dholki-bridal.php" class="catagory_btn">
          <button>Read More</button>
        </a>
      </div>
      <div class="col-md-4 col_4_m advise_content advise_hair all-categories">
        <img src="assets/imgs/advise/advices (8).png" class="img-fluid" alt="catagory-img" />
        <h5 class="catagory_heading">Wedding Guest Etiquette</h5>
        <p class="catagory_text">A Guide to Being a Gracious Guest</p>
        <a href="wedding-guests.php" class="catagory_btn">
          <button>Read More</button>
        </a>
      </div>
      <div class="col-md-4 col_4_m advise_content advise_hair all-categories">
        <img src="assets/imgs/advise/advices (9).png" class="img-fluid" alt="catagory-img" />
        <h5 class="catagory_heading">Choosing Vendors</h5>
        <p class="catagory_text">Your Essential Guide to Building the Perfect Team</p>
        <a href="choosing-vendor.php" class="catagory_btn">
          <button>Read More</button>
        </a>
      </div>
      <div class="col-md-4 col_4_m advise_content advise_hair all-categories">
        <img src="assets/imgs/advise/advices (10).png" class="img-fluid" alt="catagory-img" />
        <h5 class="catagory_heading">Bridal Skincare Routine</h5>
        <p class="catagory_text">Unlock Your Radiance for Your Big Day</p>
        <a href="skin-care.php" class="catagory_btn">
          <button>Read More</button>
        </a>
      </div>
      <div class="col-md-4 col_4_m advise_content advise_barat all-categories">
        <img src="assets/imgs/advise/advices (11).png" class="img-fluid" alt="catagory-img" />
        <h5 class="catagory_heading">Luxury Wedding Inspirations</h5>
        <p class="catagory_text">
          Create a Celebration That Sparkles
        </p>
        <a href="luxury-wedding-inspirations.php" class="catagory_btn">
          <button>Read More</button>
        </a>
      </div>
      <div class="col-md-4 col_4_m advise_content advise_brides advise_mehndi all-categories">
        <img src="assets/imgs/advise/advices (12).png" class="img-fluid" alt="catagory-img" />
        <h5 class="catagory_heading">Smart Savings for Your Big Day</h5>
        <p class="catagory_text">
          How to Save on Wedding Costs
        </p>
        <a href="smart-savings-for-your-big-day.php" class="catagory_btn">
          <button>Read More</button>
        </a>
      </div>
      <div class="col-md-4 col_4_m advise_content advise_mehndi all-categories">
        <img src="assets/imgs/advise/advices (13).png" class="img-fluid" alt="catagory-img" />
        <h5 class="catagory_heading">Booking Hifsa Khan Salon</h5>
        <p class="catagory_text">A Personalized & Hassle-Free Experience</p>
        <a href="booking-hifsa-khan-saloon.php" class="catagory_btn">
          <button>Read More</button>
        </a>
      </div>
      <div class="col-md-4 col_4_m advise_content advise_nikkah all-categories">
        <img src="assets/imgs/advise/advices (14).png" class="img-fluid" alt="catagory-img" />
        <h5 class="catagory_heading">Combination Skin Guide</h5>
        <p class="catagory_text">
          The Perfect Balance for Radiant Skin
        </p>
        <a href="skin-guide.php" class="catagory_btn">
          <button>Read More</button>
        </a>
      </div>
      <div class="col-md-4 col_4_m advise_content advise_nikkah all-categories">
        <img src="assets/imgs/advise/advices (15).png" class="img-fluid" alt="catagory-img" />
        <h5 class="catagory_heading">Dry Skin Guide</h5>
        <p class="catagory_text">
          Hydration & Nourishment for a Healthy Glow
        </p>
        <a href="dry-skin-guide.php" class="catagory_btn">
          <button>Read More</button>
        </a>
      </div>

      <div class="col-md-4 col_4_m advise_content advise_uniquebridel all-categories">
        <img src="assets/imgs/advise/advices (16).png" class="img-fluid" alt="catagory-img" />
        <h5 class="catagory_heading">Oily Skin Guide</h5>
        <p class="catagory_text">Stay Fresh, Shine-Free & Radiant</p>
        <a href="oily-skin-guide.php" class="catagory_btn">
          <button>Read More</button>
        </a>
      </div>



    </div>
  </div>
</section>
<script>
  // Function to get query parameter value
  function getQueryParameter(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
  }

  document.addEventListener("DOMContentLoaded", () => {
    // Get the category from the URL
    const category = getQueryParameter("category");

    // Select all content
    const allContent = document.querySelectorAll(".advise_content");

    if (category) {
      // Hide all content
      allContent.forEach(content => content.style.display = "none");

      // Show only the selected category
      const selectedContent = document.querySelectorAll(`.${category}`);
      if (selectedContent.length > 0) {
        selectedContent.forEach(content => content.style.display = "block");
      } else {
        console.warn(`No content found for category: ${category}`);
      }

      // Update dropdown text
      const categoryText = document.getElementById("category-text");
      const dropdownButton = document.querySelector(`.advise_btn[data-advise="${category}"]`);
      if (categoryText && dropdownButton) {
        categoryText.textContent = dropdownButton.textContent.trim();
      }
    } 
  });
</script>


<!-- Subscribe Section Starter -->
<section class="subscribe_sec_services mt-5">
  <form action="send_email_sub.php" method="POST">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="vip_heading">
          Join Our Exclusive Circle of Timeless Elegance
        </h2>
        <p class="vip_text">
          Tips, tricks and beauty treats, straight to your inbox.
        </p>
      </div>
    </div>
    <div class="row mt-4 row_vip2">
      <div class="col-md-3 col-md-3_1">
        <div class="input-group mb-3">
          <input type="text" name="name" id="name" class="form-control vip_input" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" placeholder="Name">
        </div>
      </div>
      <div class="col-md-6 col-md-6_2">
        <div class="input-group mb-3">
          <input type="email" name="email" id="email" class="form-control vip_input" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default" placeholder="Email Address">
        </div>
      </div>
      <div class="col-md-3 col-md-3_3">
        <div class="buttons_cont mt-0">
          <a href="book-appointment.php" class="btn_banner1">
            <button type="submit" name="submit" id="submit">Subscribe</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</form>
<?php
if(isset($_GET['email_submitted'])){
    echo"<script>alert('Your request has been received. Our team will reach out shortly to confirm your appointment.');</script>";
}
?>
</section>
<!-- Subscribe Section Ender -->




<!-- Section Instagram Followed Starter  -->
<!-- Section Instagram Followed Starter  -->
<a href="https://www.instagram.com/hifsa.khan.salon/?hl=en">
  <section class="insta_follow">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="insta_heading">
            @hifsa.khan.salon
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 insta_col_w">
          <a href="https://www.instagram.com/hifsa.khan.salon/?hl=en">
            <img src="assets/imgs/insta/1.png" class="img-fluid" alt="">
          </a>
        </div>
        <div class="col-md-2 insta_col_w">
          <a href="https://www.instagram.com/hifsa.khan.salon/?hl=en">
            <img src="assets/imgs/insta/2.png" class="img-fluid" alt="">
          </a>
        </div>
        <div class="col-md-2 insta_col_w">
          <a href="https://www.instagram.com/hifsa.khan.salon/?hl=en">
            <img src="assets/imgs/insta/3.png" class="img-fluid" alt="">
          </a>
        </div>
        <div class="col-md-2 insta_col_w">
          <a href="https://www.instagram.com/hifsa.khan.salon/?hl=en">
            <img src="assets/imgs/insta/4.png" class="img-fluid" alt="">
          </a>
        </div>
        <div class="col-md-2 insta_col_w">
          <a href="https://www.instagram.com/hifsa.khan.salon/?hl=en">
            <img src="assets/imgs/insta/5.png" class="img-fluid" alt="">
          </a>
        </div>
        <div class="col-md-2 insta_col_w">
          <a href="https://www.instagram.com/hifsa.khan.salon/?hl=en">
            <img src="assets/imgs/insta/6.png" class="img-fluid" alt="">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="insta_text">
            Follow Us on Instagram
          </p>
        </div>
      </div>
    </div>
  </section>
</a>
<!-- Section Instagram Followed Ender  -->
<!-- Section Instagram Followed Ender  -->

<?php include 'footer_adviser.php' ?>



<script>
  document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".advise_btn");
    const contentDivs = document.querySelectorAll(".advise_content");
    const dropdownButton = document.getElementById("dropdownMenuButton");

    // Ensure the dropdown button exists
    if (!dropdownButton) {
      console.error(
        'Dropdown button with ID "dropdownMenuButton" not found!'
      );
      return;
    }

    // Function to hide all content
    const hideAllContent = () => {
      contentDivs.forEach((div) => {
        div.classList.remove("active_advise");
        div.classList.add("hide_advise");
      });
    };

    // Function to activate the clicked button and show respective content
    const activateContent = (btn) => {
      hideAllContent();
      const contentNumber = btn.getAttribute("data-advise");

      // Show the content related to the clicked button
      document
        .getElementById(`advise${contentNumber}`)
        .classList.add("active_advise");
      document
        .getElementById(`advise${contentNumber}`)
        .classList.remove("hide_advise");

      // Change dropdown button text to the clicked button text
      dropdownButton.textContent = btn.textContent; // or use innerText if you prefer
    };

    // Set up event listeners for all buttons
    buttons.forEach((btn) => {
      btn.addEventListener("click", () => activateContent(btn));
    });

    // Second functionality for data-advise based classes
    const adviseButtons = document.querySelectorAll(".advise_btn");
    const adviseContents = document.querySelectorAll(".advise_content");

    adviseButtons.forEach((button) => {
      button.addEventListener("click", () => {
        const adviseType = button.getAttribute("data-advise");

        // Hide all content
        adviseContents.forEach((content) => {
          content.classList.remove("active");
        });

        // Show selected content based on advise type (matching class)
        document.querySelectorAll(`.${adviseType}`).forEach((content) => {
          content.classList.add("active");
        });
      });
    });
  });



  document.querySelectorAll(".advise_btn").forEach((button) => {
    button.addEventListener("click", function () {
      const categoryText = document.getElementById("category-text");
      categoryText.textContent = this.textContent;
    });
  });
</script>

<style>
  .advise_catagory {
    margin: 12vh 0 14vh 0;
  }

  .advise_btn {
    background-color: transparent;
    border: none;
    font-size: 16px;
    line-height: 125%;
    font-weight: 300;
    font-family: Lato;
    color: #575757;
    width: 100%;
    text-align: left;
    padding: 8px;
    transition: 0.4s ease-in-out;
  }

  .advise_btn:hover {
    background-color: #85b69c;
    color: #fff;
  }

  button.btn.btn-secondary.dropdown-toggle.show .icon_arrow {
    transform: rotate(180deg);
  }

  button.btn.btn-secondary.dropdown-toggle.show,
  button.btn.btn-secondary.dropdown-toggle {
    width: 250px !important;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: transparent !important;
    font-size: 16px;
    line-height: 125%;
    font-weight: 300;
    font-family: Lato;
    color: #575757;
    border: 1px solid #85b69c;
  }

  button.btn.btn-secondary.dropdown-toggle.show {
    border-bottom: 0;
    border-bottom-left-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
  }

  ul.dropdown-menu.show {
    width: 100%;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border: 1px solid #85b69c;

    border-top: 0;
  }

  .dropdown-menu {
    position: absolute;
    inset: 0px auto auto 0px;
    margin: 0px;
    transform: translate(0px, 43px) !important;
    background-color: #f6f5f3;
  }

  /* Initially, all content should be visible */

  .catagory_heading {
    font-size: 30px;
    line-height: 125%;
    font-family: "Cormorant Garamond";
    color: #353535;
    margin-top: 12px;
  }

  .catagory_text {
    font-size: 16px;
    line-height: 145%;
    font-weight: 300;
    font-family: Lato;
    color: #353535;
    margin-bottom: 12px;
    padding-right: 12%;
  }

  .catagory_btn {
    text-decoration: none;
  }

  .catagory_btn button {
    width: 100%;
    border: 1px solid #85B69C;
    font-size: 14px;
    line-height: 125%;
    font-weight: 500;
    font-family: Lato;
    color: #85B69C;
    padding: 12px;
    border-radius: 8px;
    background-color: transparent;
    margin-bottom: 22px;
  }

  .col_4_m {
    margin: 12px 0;
  }

  .active {
    display: block !important;
  }

  .advise_content {
    display: block;
  }

  /* Hide advise rows */
  .hide_advise {
    display: none;
  }

  @media (max-width: 576px) {
    .catagory_heading {
      text-align: center;
    }

    .catagory_text {
      text-align: center;
    }

    .right_col_banner_cus_advice {
      margin-top: 31%;
    }
  }
</style>


<style>
  @media (max-width: 575px) {
    .client-logo-wrap_top {
      margin-top: -3vh;
    }

    .col-md-4.left_col_banner_cust {
      padding: 14vh 0;
    }

    .col-md-2.col_2_wd {
      padding: 14vh 0;
    }

    .col-md-4.col_4_m {
      width: 50%;
      /* height: 65vh; */
      position: relative;
    }

    .catagory_heading {
      font-size: 20px;
    }

    .catagory_text {
      font-size: 14px;
      padding-right: 0;
    }

    /* .catagory_btn button {
    margin-bottom: 0;
    position: absolute;
    bottom: 1px;
    right: 6px;
    width: 90%;
    left: 10px;
} */
    .advise_catagory {
      margin: 12vh 0 6vh 0;
    }
  }

  .catagory_btn button{
    transition: 0.4s ease-in-out;
  }

  .catagory_btn button:hover{
    background-color: #85B69C;
    color: #fff;
  }
</style>
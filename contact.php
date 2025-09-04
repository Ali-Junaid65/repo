<title>Contact Us</title>

<?php include 'navbar.php' ?>
<?php
$flagFile = 'block.flag';

if (isset($_GET['block'])) {
    file_put_contents($flagFile, 'blocked');
   
} elseif (isset($_GET['unblock'])) {
    if (file_exists($flagFile)) {
        unlink($flagFile);
    } else {
    }
} else {
}
?>


<!-- Banner Section Starter  -->
<section class="banner_sec_our_package">
    <div class="container">
        <div class="row ">
            <div class="col-md-6 left_col_banner_cust mbl_show">
                <h2 class="heading_banner h_banner_mbl padding_bannertext wow fadeInUp" data-wow-duration="2s"
                    data-wow-delay="0.1s">
                    Contact Us
                </h2>
            </div>
        </div>
        <div class="row mbl_reverse_col">
            <div class="col-md-6 mt-5-return packages_banner_col left_col_banner_cust">
                <h2 class="heading_banner desktop_show padding_bannertext wow fadeInUp" data-wow-duration="2s"
                    data-wow-delay="0.1s">
                    Contact Us
                </h2>
                <p class="text_banner text-center-res wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                    We believe that every woman deserves to feel exceptional. Our services are designed to pamper,
                    rejuvenate, and transform you according to your desire. Let’s get in touch and hear you out! </p>
                <a href="" class="icon_banner_down_arrow mbl_show">
                    <img src="assets/imgs/banner/arrow_down_img.svg" alt="" class="img-fluid img_banner_arrow" id="img_banner_arrow_mbl">
                    <img src="assets/imgs/banner/arrow_down_icon.svg" alt="" class="img-fluid icon_banner_img">
                </a>
            </div>
            <div class="col-md-6 right_col_banner_cus">
                <div class="container">
                    <div class="row align-items-center row_images_right">
                        <div class="col-md-4 banner_img_1 pkg_img1 wow fadeInDown" data-wow-duration="2s"
                            data-wow-delay="0.1s">
                            <img src="assets/imgs/contact/1.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-4 banner_img_2  wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                            <img src="assets/imgs/contact/2.png" class="img-fluid" alt="">

                        </div>
                        <div class="col-md-4 banner_img_3  wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.5s">
                            <img src="assets/imgs/contact/3.png" class="img-fluid" alt="">

                        </div>
                    </div>
                </div>
                <a href="" class="icon_banner_down_arrow desktop_show">
                    <img src="assets/imgs/banner/arrow_down_img.svg" alt="" class="img-fluid img_banner_arrow" id="img_banner_arrow">
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



<section class="contacct_info">
    <div class="container boxes-cont-100">
        <div class="row justify-content-center">
            <div class="col-md-4 left_col_banner_cust">
                <h3 class="heading_contact_top text-center-z-fold">
                    Hifsa Khan Salon
                </h3>
               <h4 class="sub_heading_contact mt-4">
                    Business Hours
                </h4>
                    <p class="day_buss">Mon-Sun</p><br>
                    <p class="buss_hours">
                        11:00 AM-7:30PM
                    </p>
                <h4 class="sub_heading_contact mt-4 text-center-z-fold">
                    Press & media enquiries
                </h4>
                <p class="num_contact1"><a href="+923041111820" class="text-center-z-fold">
                        +92 304 1111820
                    </a></p>
                <p class="mail_contact1">
                    <a href="mailto:info@hifsakhansalon.com" class=" text-center-z-fold">
                        info@hifsakhansalon.com
                    </a>
                </p>

                <ul class="footer_icons text-center-z-fold">
            <li>
              <a href="https://www.facebook.com/hifsa.k.salon/">
                <svg class="svg-icon" width="34" height="34" viewBox="0 0 34 34" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.5" y="0.5" width="33" height="33" rx="3.5" stroke="#606060" />
                  <path
                    d="M25.625 7.625H8.375C7.96016 7.625 7.625 7.96016 7.625 8.375V25.625C7.625 26.0398 7.96016 26.375 8.375 26.375H25.625C26.0398 26.375 26.375 26.0398 26.375 25.625V8.375C26.375 7.96016 26.0398 7.625 25.625 7.625ZM23.4594 13.0977H21.9617C20.7875 13.0977 20.5602 13.6555 20.5602 14.4758V16.2828H23.3633L22.9977 19.1117H20.5602V26.375H17.6375V19.1141H15.193V16.2828H17.6375V14.1969C17.6375 11.7758 19.1164 10.4563 21.2773 10.4563C22.3133 10.4563 23.2016 10.5336 23.4617 10.5688V13.0977H23.4594Z"
                    fill="#606060" />
                </svg>

              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/hifsa.khan.salon">
                <svg class="svg-icon" width="34" height="34" viewBox="0 0 34 34" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.5" y="0.5" width="33" height="33" rx="3.5" stroke="#606060" />
                  <path
                    d="M17.0005 13.7495C16.1385 13.7495 15.3119 14.0919 14.7024 14.7014C14.0929 15.3109 13.7505 16.1376 13.7505 16.9995C13.7505 17.8615 14.0929 18.6881 14.7024 19.2976C15.3119 19.9071 16.1385 20.2495 17.0005 20.2495C17.8624 20.2495 18.6891 19.9071 19.2986 19.2976C19.9081 18.6881 20.2505 17.8615 20.2505 16.9995C20.2505 16.1376 19.9081 15.3109 19.2986 14.7014C18.6891 14.0919 17.8624 13.7495 17.0005 13.7495Z"
                    fill="#606060" />
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M11.7701 8.08128C15.2462 7.69621 18.7541 7.69621 22.2301 8.08128C24.1291 8.29328 25.6601 9.78828 25.8831 11.6943C26.2951 15.219 26.2951 18.7796 25.8831 22.3043C25.6601 24.2103 24.1291 25.7053 22.2311 25.9183C18.7548 26.3034 15.2465 26.3034 11.7701 25.9183C9.87112 25.7053 8.34012 24.2103 8.11712 22.3053C7.7051 18.7803 7.7051 15.2193 8.11712 11.6943C8.34012 9.78828 9.87112 8.29328 11.7701 8.08128ZM22.0001 10.9993C21.7349 10.9993 21.4805 11.1046 21.293 11.2922C21.1055 11.4797 21.0001 11.7341 21.0001 11.9993C21.0001 12.2645 21.1055 12.5189 21.293 12.7064C21.4805 12.8939 21.7349 12.9993 22.0001 12.9993C22.2653 12.9993 22.5197 12.8939 22.7072 12.7064C22.8948 12.5189 23.0001 12.2645 23.0001 11.9993C23.0001 11.7341 22.8948 11.4797 22.7072 11.2922C22.5197 11.1046 22.2653 10.9993 22.0001 10.9993ZM12.2501 16.9993C12.2501 15.7395 12.7506 14.5313 13.6414 13.6405C14.5322 12.7497 15.7403 12.2493 17.0001 12.2493C18.2599 12.2493 19.4681 12.7497 20.3589 13.6405C21.2497 14.5313 21.7501 15.7395 21.7501 16.9993C21.7501 18.2591 21.2497 19.4672 20.3589 20.358C19.4681 21.2488 18.2599 21.7493 17.0001 21.7493C15.7403 21.7493 14.5322 21.2488 13.6414 20.358C12.7506 19.4672 12.2501 18.2591 12.2501 16.9993Z"
                    fill="#606060" />
                </svg>

              </a>
            </li>
            <li>
              <a href="https://x.com/hifsakhansalon?lang=en">
                <svg class="svg-icon" width="34" height="34" viewBox="0 0 34 34" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.5" y="0.5" width="33" height="33" rx="3.5" stroke="#606060" />
                  <g clip-path="url(#clip0_58_11165)">
                    <path
                      d="M11.375 9.125C10.134 9.125 9.125 10.134 9.125 11.375V22.625C9.125 23.866 10.134 24.875 11.375 24.875H22.625C23.866 24.875 24.875 23.866 24.875 22.625V11.375C24.875 10.134 23.866 9.125 22.625 9.125H11.375ZM21.8199 12.0781L18.1707 16.2477L22.4633 21.9219H19.1023L16.4727 18.4801L13.4598 21.9219H11.7898L15.6922 17.4605L11.5754 12.0781H15.0207L17.4008 15.2246L20.15 12.0781H21.8199ZM20.491 20.9234L14.518 13.0238H13.523L19.5629 20.9234H20.4875H20.491Z"
                      fill="#606060" />
                  </g>
                  <defs>
                    <clipPath id="clip0_58_11165">
                      <rect width="15.75" height="18" fill="white" transform="translate(9.125 8)" />
                    </clipPath>
                  </defs>
                </svg>

              </a>
            </li>
            <li>
              <a href="https://www.youtube.com/@hifsakhansalonstudio9851">
                <svg class="svg-icon" width="34" height="34" viewBox="0 0 34 34" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.5" y="0.5" width="33" height="33" rx="3.5" stroke="#606060" />
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M17 9C17.855 9 18.732 9.022 19.582 9.058L20.586 9.106L21.547 9.163L22.447 9.224L23.269 9.288C24.1612 9.35589 25.0008 9.73643 25.64 10.3626C26.2791 10.9888 26.6768 11.8204 26.763 12.711L26.803 13.136L26.878 14.046C26.948 14.989 27 16.017 27 17C27 17.983 26.948 19.011 26.878 19.954L26.803 20.864L26.763 21.289C26.6768 22.1798 26.2789 23.0115 25.6396 23.6377C25.0002 24.2639 24.1604 24.6443 23.268 24.712L22.448 24.775L21.548 24.837L20.586 24.894L19.582 24.942C18.7218 24.9793 17.861 24.9986 17 25C16.139 24.9986 15.2782 24.9793 14.418 24.942L13.414 24.894L12.453 24.837L11.553 24.775L10.731 24.712C9.83881 24.6441 8.9992 24.2636 8.36004 23.6374C7.72089 23.0112 7.32319 22.1796 7.237 21.289L7.197 20.864L7.122 19.954C7.04583 18.9711 7.00514 17.9858 7 17C7 16.017 7.052 14.989 7.122 14.046L7.197 13.136L7.237 12.711C7.32316 11.8206 7.72071 10.9891 8.35966 10.3629C8.99861 9.73676 9.83799 9.35612 10.73 9.288L11.551 9.224L12.451 9.163L13.413 9.106L14.417 9.058C15.2775 9.02073 16.1387 9.00139 17 9ZM15 14.575V19.425C15 19.887 15.5 20.175 15.9 19.945L20.1 17.52C20.1914 17.4674 20.2673 17.3916 20.3201 17.3003C20.3729 17.209 20.4007 17.1055 20.4007 17C20.4007 16.8945 20.3729 16.791 20.3201 16.6997C20.2673 16.6084 20.1914 16.5326 20.1 16.48L15.9 14.056C15.8088 14.0033 15.7053 13.9756 15.5999 13.9756C15.4945 13.9756 15.3911 14.0034 15.2998 14.0561C15.2086 14.1088 15.1329 14.1846 15.0802 14.2759C15.0276 14.3671 14.9999 14.4706 15 14.576V14.575Z"
                    fill="#606060" />
                </svg>

              </a>
            </li>
          </ul>

          
            </div>
            <div class="col-md-2 col_2_wd">
                <h3 class="heading_contact_top">
                    Cantt Branch
                </h3>
                <h4 class="sub_heading_contact mt-4">
                    Contact Number
                </h4>
                <p class="num_contact1"><a href="tel:+923075554563" class="">
                        +92 307 5554563
                    </a></p>
              
                <h4 class="sub_heading_contact mt-4">
                    Branch Address
                </h4>
                <p class="day_buss" style="width: 100%;">Off Sherpao Bridge, CMA Colony, Cantt Lahore</p>


            </div>

            <div class="col-md-2 col_2_wd pr_col">
                <h3 class="heading_contact_top">
                    DHA Branch
                </h3>
                <h4 class="sub_heading_contact mt-4">
                    Contact Number
                </h4>
                <p class="num_contact1"><a href="tel:+923075554563" class="">
                        +92 307 5554563
                    </a></p>
              
               
                <h4 class="sub_heading_contact mt-4">
                    Branch Address
                </h4>
                <p class="day_buss" style="width: 100%;">Building No. 229 FF Block Phase 4 DHA, Lahore</p>

               
            </div>

            <div class="col-md-2 col_2_wd pr_col">
                <h3 class="heading_contact_top">
                    Johar Town Branch
                </h3>
                <h4 class="sub_heading_contact mt-4">
                    Contact Number
                </h4>
                <p class="num_contact1"><a href="tel:+923075554563" class="">
                        +92 307 5550850
                    </a></p>
               

                
                <h4 class="sub_heading_contact mt-4">
                    Branch Address
                </h4>
                <p class="day_buss" style="width: 100%;">319 Expo Center Rd, Block H-3 Phase 2 Johar Town, Lahore</p>

               
            </div>


        </div>
        <style type="text/css">
            .new-contact-us-btn{
                
    padding-left: 3%;
    padding-right: 3%;
            }
            @media(min-width: 1024px){
                .new-contact-us-btn{
                    margin-top: -16vh;
                }
            }
        </style>
        <div class="col-md-8 offset-md-4 new-contact-us-btn">
            <a href="" class="contact_col_button">
                    <button>Contact Us</button>
                </a>
        </div>

    </div>
</section>



<section class="map_sec" id="location-sec">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <iframe
                    src="https://www.google.com/maps/d/u/0/embed?mid=1VfrpID4EdEHRhgjG_s0ds_R_jQiuWqo&ehbc=2E312F&noprof=1"
                    width="100%" height="480"></iframe>
            </div>
        </div>

    </div>
</section>



<?php include 'footer.php' ?>
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
    }
</style>




<script>
// Track the last scroll position
let lastScrollTop = window.pageYOffset || document.documentElement.scrollTop;

// Select the image element
var imgArrow = document.getElementById("img_banner_arrow");

// Add the scroll event listener
window.addEventListener("scroll", function () {
  // Get the current scroll position
  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  // Define a threshold to prevent minor scrolls from triggering alerts
  const scrollThreshold = 5;

  if (Math.abs(scrollTop - lastScrollTop) > scrollThreshold) { // Only check if scroll difference exceeds threshold
    if (scrollTop > lastScrollTop) {
      // alert("down");
      // Scroll down: rotate 360 degrees to the right
      
      imgArrow.style.transform = "rotate(360deg)";
      // imgArrow.style.display = "none";
     
    } else {
      // alert("up");
      // Scroll up: rotate -360 degrees to the left
      imgArrow.style.transform = "rotate(-360deg)";
    }
    lastScrollTop = scrollTop; // Update last scroll position only if threshold is passed
  }
});



// Track the last scroll position
let lastScrollTop_mbl = window.pageYOffset || document.documentElement.scrollTop;

// Select the image element
var imgArrow_mbl = document.getElementById("img_banner_arrow_mbl");

// Add the scroll event listener
window.addEventListener("scroll", function () {
  // Get the current scroll position
  let scrollTop_mbl = window.pageYOffset || document.documentElement.scrollTop_mbl;

  // Define a threshold to prevent minor scrolls from triggering alerts
  const scrollThreshold_mbl = 5;

  if (Math.abs(scrollTop_mbl - lastScrollTop_mbl) > scrollThreshold_mbl) { // Only check if scroll difference exceeds threshold
    if (scrollTop_mbl > lastScrollTop_mbl) {
      // alert("down");
      // Scroll down: rotate 360 degrees to the right
      
      imgArrow_mbl.style.transform = "rotate(360deg)";
      // imgArrow.style.display = "none";
     
    } else {
      // alert("up");
      // Scroll up: rotate -360 degrees to the left
      imgArrow_mbl.style.transform = "rotate(-360deg)";
    }
    lastScrollTop_mbl = scrollTop_mbl; // Update last scroll position only if threshold is passed
  }
});

</script>
</body>
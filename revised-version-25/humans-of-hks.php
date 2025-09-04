<title>Humans of HKS</title>


<?php include 'navbar.php' ?>


<section class="banner_sec_humans_hks">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="human_banner_heading">
                    Hifsa Khan Salon: A Celebration of Womenocracy
                </h2>
                <p class="human_banner_text">
                    "By the women, for the women, of the women"
                </p>
            </div>
            <div class="col-md-12 mt-3 d-flex justify-content-center">
                <video class="img-fluid border_radius_video d-flex justify-content-center" autoplay muted loop>
                    <source src="assets/imgs/humans/human_video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="col-md-12">
                <p class="text_banner_humans_hks2">
                    At Hifsa Khan Salon, we understand that behind every woman’s smile lies a story of struggle,
                    resilience, and hope. We are here to acknowledge those stories and create a space where every woman
                    feels seen, heard, and valued.
                </p>
            </div>
        </div>
    </div>
</section>



<section class="second_sec_humans_hks">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading_human_hks2 text-center-z-fold">Honoring the Struggles of Every Woman</h2>
                <p class="text_human_hks_3 text-center-z-fold">
                    Every woman faces unique challenges. Whether it’s battling financial insecurities, overcoming
                    self-doubt, or navigating societal expectations, we recognize the weight these struggles can carry.
                    At HKS, we are dedicated to embracing these realities and walking alongside women in their journeys.
                </p>
                <h5 class="sub_heading_humans_hks1 text-center-z-fold">
                    The Burden of Financial Insecurity
                </h5>
                <p class="text_human_hks_3 text-center-z-fold">
                    Many women come to us feeling trapped by financial worries. We understand how debilitating it can be
                    to live paycheck to paycheck, constantly worrying about making ends meet. That’s why we prioritize
                    financial empowerment. By investing in our team members and providing competitive salaries, we aim
                    to alleviate some of that burden.
                </p>
                <h5 class="sub_heading_humans_hks1 text-center-z-fold">
                    Mental Health Matters
                </h5>
                <p class="text_human_hks_3 text-center-z-fold">
                    The pressure to balance work, family, and personal aspirations can feel overwhelming. Too often,
                    women carry the emotional weight silently. At HKS, we foster an environment of openness and support.
                    We ensure our team knows that it’s okay to seek help. We want every woman to understand that her
                    mental well-being is just as important as her physical appearance.
                </p>
                <h5 class="sub_heading_humans_hks1 text-center-z-fold">
                    Legal Challenges
                </h5>
                <p class="text_human_hks_3 text-center-z-fold">
                    Navigating legal issues can be intimidating, especially when women feel they don’t have a voice. We
                    stand by our team, helping them to know all about their legal rights and feel empowered to advocate
                    for themselves. Our commitment is to create a safe space where women can express their concerns
                    without fear of repercussions.
                </p>
            </div>
        </div>
    </div>
</section>



<section class="third_sec_humans_hks">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="human_banner_heading">
                    Hifsa Khan Salon: A Celebration of Womenocracy
                </h2>
            </div>
            <div class="col-md-12">
                <img src="assets/imgs/humans/1.png" class="img-fluid mt-2 destop_img_human" alt="">
                <img src="assets/imgs/humans/2.png" class="img-fluid mt-2 mbl_img_human" alt="">
            </div>
            <div class="col-md-12">
                <p class="humans_img_text1">
                    Every woman possesses unique talents waiting to be discovered. At HKS, we are passionate about
                    nurturing those skills. We offer hands-on training, mentorship, and the opportunity to grow within
                    our salon. Our goal is to help women believe in themselves and recognize their worth. We want them
                    to walk into any room with confidence, knowing they have the skills to succeed.
                </p>
            </div>
        </div>
    </div>
</section>



<section class="end_sec_humans_hks">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="end_heading_human">
                    Join Us to Celebrate the Woman in You!
                </h2>
                <p class="end_text_human">
                    At Hifsa Khan Salon, we are more than just a beauty destination. We are a community of women
                    supporting women. Every story shared, every challenge embraced, and every victory celebrated is a
                    step toward creating a ripple effect of positive change.
                    <br><br>
                    Let’s uplift one another and create a future where women rise together. Your journey matters to us.
                    Come, share your story, and join us in this empowering movement of Womenocracy—where women thrive,
                    lead, and transform lives.
                </p>

            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <div class="buttons_cont mt-3">
                    <a href="careers.php" class="btn_banner1">
                        <button>Join Hifsa Khan Salon</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include 'footer.php' ?>



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
<style>
    @media (min-width: 1600px){
    .banner_sec_humans_hks{
    max-height: 96vh !important;
    min-height: 90vh !important;
    }
    .second_sec_humans_hks {
    min-height: 60vh;
    align-content: center;
    padding: 0 16%;
    margin-top: 6vh;
}
    }
    @media (max-width: 575px)
    {
        .destop_img_human {
    display: none;
    border-radius: 12px;
}
.humans_img_text1 {
    padding: 12px 0;
}
section.end_sec_humans_hks {
    min-height: 50vh;
    align-content: center;
    padding: 0 0;
    margin-bottom: 12vh;
}
    }
</style>
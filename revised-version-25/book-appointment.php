<title>Book Appointment</title>



<?php include 'navbar.php' ?>



<!-- Banner Section Starter  -->
<section class="banner_sec_our_package">
    <div class="container">
        <div class="row ">
            <div class="col-md-6 left_col_banner_cust mbl_show">
                <h2 class="heading_banner h_banner_mbl padding_bannertext wow fadeInUp" data-wow-duration="2s"
                    data-wow-delay="0.1s">
                    Book Your Appointment Now
                </h2>
            </div>
        </div>
        <div class="row mbl_reverse_col">
            <div class="col-md-6 mt-5-return packages_banner_col left_col_banner_cust">
                <h2 class="heading_banner desktop_show padding_bannertext wow fadeInUp" data-wow-duration="2s"
                    data-wow-delay="0.1s">
                    Book Your Appointment Now
                </h2>
                <p class="text_banner text-center-res wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                    Book your appointment today and let our talented team transform your look. Don't miss out on the
                    opportunity to indulge in the best beauty services in Lahore.
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
                        <div class="col-md-4 banner_img_1 pkg_img1 wow fadeInDown" data-wow-duration="2s"
                            data-wow-delay="0.1s">
                            <img src="assets/imgs/appointments/1.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-4 banner_img_2  wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                            <img src="assets/imgs/appointments/2.png" class="img-fluid" alt="">

                        </div>
                        <div class="col-md-4 banner_img_3  wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.5s">
                            <img src="assets/imgs/appointments/3.png" class="img-fluid" alt="">

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


<section class="second_sec_appointments">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h2 class="heading_book-appointment">
                    Secure Your Exclusive Experience at Hifsa Khan Salon
                </h2>
            </div>
            <div class="col-md-4">
                <div class="whatsap_group">
                    <img src="assets/imgs/appointments/wa_icon.png" class="img-fluid whatsapp_icon_w" alt="whatsap">
                    <div class="det">
                        <p>Need help?</p>
                        <a href="https://wa.me/+923025385111">
                            <button>Have a chat with us.</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center mt-3">
            <div class="col-md-6 second_sec_app_col text-center-z-fold ">
                <img src="assets/imgs/appointments/left_sec.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 form_app_col">          <form id="appointmentForm" action="send_mail.php" method="POST">
    <div class="book_app_inputs wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s">
        <label class="name_label" for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
    </div>
    <div class="book_app_inputs wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
        <label for="cNum">Contact Number</label>
        <input type="number" name="cNum" id="cNum" placeholder="Enter Phone Number" required>
    </div>

    <div class="book_app_inputs wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s">
        <label for="services">Select Service</label>
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropdownServices">
                <span>Services</span>
                <span><img src="assets/imgs/appointments/down_arrow.png" class="img-fluid" alt=""></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <div class="form-check">
                        <input class="form-check-input service-checkbox" type="checkbox" name="services[]" id="service1" value="Hair">
                        <label class="form-check-label" for="service1">Hair</label>
                    </div>
                </li>
                <li>
                    <div class="form-check">
                        <input class="form-check-input service-checkbox" type="checkbox" name="services[]" id="service2" value="Makeup">
                        <label class="form-check-label" for="service2">Makeup</label>
                    </div>
                </li>
                <li>
                    <div class="form-check">
                        <input class="form-check-input service-checkbox" type="checkbox" name="services[]" id="service3" value="SPA">
                        <label class="form-check-label" for="service3">SPA</label>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="book_app_inputs wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
        <label for="dateTime">Date</label>
        <input type="date" name="date-time" id="dateTime" placeholder="mm/dd/yyyy" required>
    </div>

    <div class="book_app_inputs wow fadeInUp " data-wow-duration="2s" data-wow-delay="0.3s">
        <label for="location">Preferred Location</label> <br>
        <select name="location" id="location" class="custom-dropdown" style="width: 100%;
    padding: 12px;
    background-color: transparent;
    border: 1px solid #959393;
    border-radius: 8px;font-size: 16px;
    line-height: 125%;
    font-weight: 300;
    font-family: Lato;
    color: #959393;" required>
            <option value="" class="">Select Location</option>
            <option value="Cant Lahore">Cantt Lahore</option>
            <option value="DHA Lahore">DHA Lahore</option>
            <option value="Johar Town Lahore">Johar Town Lahore</option>
        </select>
    </div>

    <div class="book_app_inputs wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email" required>
    </div>

    <div class="book_app_inputs wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
        <label for="message">Additional Notes <span class="optional_text">(Optional)</span></label>
        <textarea class="text_area" name="message" rows="3" cols="10" id="message"></textarea>
    </div>

    <div class="btn_book_now_app wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
        <input type="submit" value="Book Now">
    </div>
</form>

<?php
if(isset($_GET['success'])){
    echo"<script>alert('Your appointment has been booked successfully!');</script>";
}
?>


              <!--   <script>
    document.getElementById("appointmentForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent default form submission

        const formData = new FormData(event.target); // Collect form data
        fetch("send_email.php", {
            method: "POST",
            body: formData,
        })
            .then(response => response.text())
            .then(data => {
                alert(data); // Display response from PHP
            })
            .catch(error => {
                console.error("Error:", error);
            });
    });
</script> -->
                <!-- <a href="tel:+923025385111" class="btn_call_now_app  wow fadeInUp" data-wow-duration="2s"
                    data-wow-delay="1.1s">
                    <button>
                        <svg class="call_us_noe_svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                        </svg>
                        Call Us Now</button>
                </a> -->
            </div>
        </div>
    </div>
</section>

<!-- Section Instagram Followed Starter  -->
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
<!-- Section Instagram Followed Ender  -->

<?php include 'footer.php' ?>





<script>
    function toggleDropdown() {
        const dropdown = document.querySelector('.dropdown-options');
        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
    }

    function selectOption(value) {
        document.querySelector('.dropdown-button').textContent = value;
        document.querySelector('.dropdown-options').style.display = 'none';
    }

    // Close dropdown if clicked outside
    window.addEventListener('click', function (e) {
        if (!document.querySelector('.custom-dropdown').contains(e.target)) {
            document.querySelector('.dropdown-options').style.display = 'none';
        }
    });
</script>




<script>
    // Function to update dropdown button text with selected services
    function updateSelectedServices() {
        const checkboxes = document.querySelectorAll('.service-checkbox');
        const selectedServices = [];

        checkboxes.forEach((checkbox) => {
            if (checkbox.checked) {
                selectedServices.push(checkbox.value);
            }
        });

        const dropdownButton = document.getElementById('dropdownServices');
        dropdownButton.textContent = selectedServices.length > 0 ? selectedServices.join(', ') : 'Services';
    }

    // Add event listeners to all checkboxes to trigger the update function
    document.querySelectorAll('.service-checkbox').forEach((checkbox) => {
        checkbox.addEventListener('change', updateSelectedServices);
    });
</script>





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
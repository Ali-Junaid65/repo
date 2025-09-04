<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Hifsa Khan Salon</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- Fonts  -->
  <!-- <link rel="stylesheet" href="assets/fonts/Juana ExtraLight.ttf"> -->
  <link rel="icon" type="image/png" href="assets/imgs/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="assets/styling/footer.css">


  <!-- CSS Links  -->
  <link rel="stylesheet" href="assets/styling/navbar.css">
  <link rel="stylesheet" href="assets/styling/style.css">

  <!-- Animation Libraries  -->
  <link rel="stylesheet" href="assets/styling/libs/animate.css">
</head>

<body>
  <!-- Navbar Starter  -->
  <navbar class="nav_main_top">
    <nav class="navbar navbar-expand-lg navbar_padding_custom">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="assets/imgs/logo.png" class="img-fluid" alt=""></a>



        <button class="navbar-toggler custom-toggler collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="toggler-icon"></span>
          <span class="toggler-icon"></span>
          <span class="toggler-icon"></span>
        </button>





        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">



            

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="about-us.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="our-services.php">Our Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="studio-sets.php">Studio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="plan-your-day.php">Beauty Secrets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="testimonials.php">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="faqs.php">FAQ's</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
            </li>

          </ul>
          <div class="navbar_btn_icons bookkkkkkkkkkkkk " role="search">
            <a href="book-appointment.php">
              <button class="utton_nav_booknow" type="submit">
                Book Appointment
              </button>
            </a>


            
            <!-- Serch Icons  -->

            <!-- <form action="">
            <button class="icon_btn_nav" type="submit">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-search"
                viewBox="0 0 16 16">
                <path
                  d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
              </svg>
            </button>
          </form> -->
            <button id="search-icon-desktop-btn" class="icon_btn_nav search_btn search_btn_desktop" type="button"
              data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img src="assets/imgs/banner/search_icon_navbar.svg" alt="Search Icon">
            </button>
            <!--<a href="contact.php#location-sec" class="call_btn">-->
            <!--  <button class="icon_btn_nav " type="submit">-->
            <!--    <img src="assets/imgs/banner/call_icon_navbar.svg" alt="">-->
            <!--  </button>-->
            <!--</a>-->

          </div>

          <div class="search-container mbl_search">
              <form id="searchFormmbl" class="search-form">
                <input type="text" id="searchInputmbl" placeholder="Search..." class="search_desktop_input">
                <button type="button" class="btn search_btn_inner" onclick="handleSearchmbl()">
                  <img src="assets/imgs/banner/search_icon_navbar.svg" alt="Search Icon">
                </button>
              </form>
              <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">X</button> -->
            </div>


          <a href="contact.php" class="row align-items-center row_letstalk navbar_mbl" style="text-decoration: none;">
            <div class="col-md-12">
              <p class="footer_heading_label">Need a beauty remake?</p>
            </div>
            <div class="col-md-10 footer_heading2_cont">
              <h2 class="footer_heading2">Let’s Talk</h2>
            </div>
            <div class="col-md-2 footer_arrow">
              <img src="assets/imgs/footer_icon_arrow.png" class="img-fluid" alt="" />
            </div>
          </a>





        </div>
      </div>
    </nav>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-10 col-searc-input-btn d-flex">
                  <form id="searchForm" class="search-form">
                    <input type="text" id="searchInput" placeholder="Search..." class="search_desktop_input">
                    <button type="button" class="btn search_btn_inner" onclick="handleSearch()">
                      <img src="assets/imgs/banner/search_icon_navbar.svg" alt="Search Icon">
                    </button>
                  </form>
                  <button type="button" class="btn search-btn btn-secondary" data-bs-dismiss="modal">
                    <img src="assets/imgs/banner/search-close.png" class="img-fluid" alt="">
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </navbar>
  <!-- Navbar Ender  -->


  <style>
    .search-btn{
      background-color: transparent;
      border: 1px solid #85b69c;
      transition: 0.3s ease-in-out;
    }
    .search-btn:hover{
      background-color: #c7d5ce;
    }
    .search-form {
      position: relative;
      width: 90%;
    }

    .col-searc-input-btn {
      gap: 12px;
    }

    .search_btn_inner {
      position: absolute;
      padding: 0;
      border: none;
      top: 17%;
      right: 10px;
    }

    .modal-dialog {
      margin: 0;
      width: 100%;
      min-width: 100%;
      max-width: 100%;
    }

    .btn_banner2 button {
      margin-top: 0;
    }

    .modal-body {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 12px;
    }

    .search_btns {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    input.search_desktop_input {
      width: 100%;
      padding: 8px;
      border-radius: 8px;
      border: 1px solid #85b69c;
      background-color: transparent;
    }

    input.search_desktop_input:focus {
      box-shadow: 0 !important;
      border: 1px solid #85b69c;
      outline: 0;
    }

    input.search_desktop_input {
      font-size: 16px;
      line-height: 125%;
      font-weight: 300;
      font-family: Lato;
      color: #353535 !important;
    }

    .modal-content {
      border-radius: 0;
      background-color: #f6f5f3;

    }

    form {
      margin-bottom: 0;
    }

    .navbar_mbl {
      display: none;
    }

    /* Remove border and background from button */
    .custom-toggler {
      background: transparent;
      border: none;
      outline: none;
      padding: 0;
      display: flex;
      flex-direction: column;
      gap: 7px;
      cursor: pointer;
    }

    /* Style for each line in the button */
    .custom-toggler .toggler-icon {
      display: block;
      width: 26px;
      height: 1px;
      background-color: #000000;
      transition: all 0.4s ease;
    }

    a {
      text-decoration: none;
    }

    /* Cross icon style when menu is open */
    .custom-toggler:not(.collapsed) .toggler-icon:nth-child(1) {
      transform: translateY(8px) rotate(45deg);
    }

    .custom-toggler:not(.collapsed) .toggler-icon:nth-child(2) {
      opacity: 0;
    }

    .custom-toggler:not(.collapsed) .toggler-icon:nth-child(3) {
      transform: translateY(-8px) rotate(-45deg);
    }

    /* Reset to hamburger icon when menu is closed */
    .custom-toggler.collapsed .toggler-icon {
      transform: none;
      opacity: 1;
    }

    .navbar-toggler:focus {
      text-decoration: none;
      outline: 0;
      box-shadow: none;
    }










    /* Search  */
    /* Container for the search form */
    .search-container {
      position: relative;
      display: inline-block;
    }

    /* Initially hide the search input */
    .search-input {
      width: 0;
      opacity: 0;
      padding: 5px 10px;
      border: 1px solid #85b69c;
      transition: width 0.4s ease, opacity 0.4s ease;
      position: absolute;
      top: 0;
      left: 0;
      z-index: -1;
    }

    .search-input:focus-visible {
      border: 1px solid #85b69c;
      box-shadow: 0 0;

    }

    /* Show the search input when active */
    .search-container.active .search-input {
      width: 200px;
      /* Full width when shown */
      opacity: 1;
      z-index: 1;
      padding-right: 40px;
      /* Space for icon inside the input */
    }

    /* Search icon button */
    .icon_btn_nav {
      background: transparent;
      border: none;
      cursor: pointer;
      outline: none;
      transition: all 0.4s ease;
    }

    /* Position the icon inside the input field when active */
    .search-container.active .icon_btn_nav {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
    }

    .search-container.active .search-input {
      width: 100%;
      opacity: 1;
      z-index: 1;
      padding-right: 40px;
      position: relative;
      margin-top: 20px;
    }

    button.icon_btn_nav {
      padding: 0 !important;
      position: absolute;
      z-index: 999;
      top: 80%;
    }

    .search-container.active .icon_btn_nav {
      position: absolute;
      right: 10px;
      top: 45%;
      transform: translateY(-50%);
    }

    .search-container {
      position: relative;
      display: inline-block;
      margin-bottom: 44px;
      margin-top: 22px;
    }

    .search-container.active .search-input {
      width: 100%;
      opacity: 1;
      z-index: 1;
      padding-right: 40px;
      position: relative;
      margin-top: 0;
      margin-bottom: 0;
    }

    .search-container.active {
      margin-bottom: 22px;
    }

    .mbl_search {
      display: none;
    }

    @media (max-width: 575px) {
      .mbl_search {
        display: block !important;
      }

      .navbar_mbl {
        display: flex !important;
      }

    }

    button.icon_btn_nav {
      padding: 0 !important;
      position: relative;
    }


    @media (max-width: 575px) {
      button.icon_btn_nav {
        padding: 0 !important;
        position: absolute;
      }

      .search-container.active {
        margin-bottom: 12px;
      }

      .search-container {
        margin-top: 12px !important;
        margin-bottom: 32px !important;
      }

      .footer_heading_label {
        font-size: 14px;
      }

      .footer_heading2 {
        font-size: 46px !important;
      }

      .footer_arrow {
        max-width: 20%;
        padding-right: 0;
      }

      .footer_heading2 {
        font-size: 46px !important;
        font-weight: 400 !important;
      }

      /* Initial state when navbar is closed */


      /* Expanded state when navbar is open */
      .navbar-collapse.show {
        max-height: 100vh;
        overflow-y: scroll;
      }

      .navbar-collapse.show {
        min-height: 100vh;
        overflow-y: scroll;
        /* display: flex; */
        /* flex-direction: column; */
        position: relative;
      }

      .navbar_mbl {
        display: flex !important;
        position: fixed;
        bottom: 4%;
      }
    }




    #search-form {
      position: relative;
    }

    #search-input {
      width: 0;
      opacity: 0;
      transition: all 0.3s ease;
      padding: 8px;
      border: none;
      border-radius: 4px;
      display: inline-block;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: white;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      pointer-events: none;
    }

    #search-form.active #search-input {
      width: 200px;
      opacity: 1;
      pointer-events: auto;
    }
  </style>



  <script>
    const searchIcon = document.getElementById('search-icon');
    const searchContainer = document.querySelector('.search-container');
    const searchInput = document.getElementById('search-input');

    // Toggle search input on icon click
    searchIcon.addEventListener('click', () => {
      searchContainer.classList.toggle('active');
      searchInput.focus(); // Focus on input when shown
    });


    document.getElementById('search-icon').addEventListener('click', function () {
      const searchForm = document.getElementById('search-form');
      searchForm.classList.toggle('active');
    });








  </script>

  <script>
    // Function to handle the search logic
    function handleSearch() {
      const input = document.getElementById('searchInput').value.toLowerCase().trim();

      // Define categories for SPA
      const spaKeywords = ['spa', 'spa services', 'relaxation', 'wellness', 'hands & feet care', 'hands', 'feet care', 'feet'];
      // Define categories for Makeup Menu
      const makeupKeywords = ['makeup', 'makeup menu', 'beauty', 'cosmetics'];
      // Define categories for Hair Treatment
      const hairKeywords = ['hair treatment', 'hair care', 'hair services', 'scalp treatment'];

      if (spaKeywords.includes(input)) {
        window.location.href = 'spa.php'; // Redirect to SPA page
      } else if (makeupKeywords.includes(input)) {
        window.location.href = 'makeup-menu.php'; // Redirect to Makeup Menu page
      } else if (hairKeywords.includes(input)) {
        window.location.href = 'hair-treatment-listing.php'; // Redirect to Hair Treatment page
      } else {
        window.location.href = '404.php'; // Redirect to a 404 page if no match is found
      }
    }

    // Add an event listener to trigger the function when Enter is pressed
    document.getElementById('searchInput').addEventListener('keypress', function (event) {
      if (event.key === 'Enter') {
        event.preventDefault(); // Prevent form submission
        handleSearch(); // Call the search function
      }
    });
  </script>
  
  
  
  
    <script>
    // Function to handle the search logic
    function handleSearchmbl() {
      const inputmbl = document.getElementById('searchInputmbl').value.toLowerCase().trim();

      // Define categories for SPA
      const spaKeywordsmbl = ['spa', 'spa services', 'relaxation', 'wellness', 'hands & feet care', 'hands', 'feet care', 'feet'];
      // Define categories for Makeup Menu
      const makeupKeywordsmbl = ['makeup', 'makeup menu', 'beauty', 'cosmetics'];
      // Define categories for Hair Treatment
      const hairKeywordsmbl = ['hair treatment', 'hair care', 'hair services', 'scalp treatment'];

      if (spaKeywordsmbl.includes(inputmbl)) {
        window.location.href = 'spa.php'; // Redirect to SPA page
      } else if (makeupKeywordsmbl.includes(inputmbl)) {
        window.location.href = 'makeup-menu.php'; // Redirect to Makeup Menu page
      } else if (hairKeywordsmbl.includes(inputmbl)) {
        window.location.href = 'hair-treatment-listing.php'; // Redirect to Hair Treatment page
      } else {
        window.location.href = '404.php'; // Redirect to a 404 page if no match is found
      }
    }

    // Add an event listener to trigger the function when Enter is pressed
    document.getElementById('searchInputmbl').addEventListener('keypress', function (event) {
      if (event.key === 'Enter') {
        event.preventDefault(); // Prevent form submission
        handleSearchmbl(); // Call the search function
      }
    });
  </script>








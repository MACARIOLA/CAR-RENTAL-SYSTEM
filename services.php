<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ImperialDrive | Services</title>

      <!----------------
            FONTS
      ----------------->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

      <!----------------
          TAB ICON
      ----------------->
    <link rel="icon" href="./images/idlogo.png" type="image/x-icon">

      <!----------------
         BOOTSTRAP CSS
      ----------------->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

      <!----------------
           MAIN CSS
      ----------------->
    <link rel="stylesheet" href="css/style.css">
  </head>



  <body>
      <!----------------
            MY CSS
      ----------------->
  <style>
    .site-navbar {
      position: fixed;
      width: 100%;
      background-color: rgba(255, 255, 255, 0.3);
      backdrop-filter: blur(10px);
      z-index: 1000;
    }

    .card-services {
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .car-list-card {
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .card-services:hover {
      box-shadow: 0px 20px 50px rgba(0, 123, 225, 0.5);
    }

    .devider-carlist-services {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: white;
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
      height: 120px;
      margin-bottom: 10px;
    }

    .zoom-out-image {
      transition: transform 0.3s ease-in-out;
    }

    .zoom-out-image:hover {
      transform: scale(1.05);
    }

    .zoom-out-image2 {
      transition: transform 0.3s ease-in-out;
    }

    .zoom-out-image2:hover {
      transform: scale(1.1);
    }

    .zoom-in-image {
      transition: transform 0.3s ease-in-out;
    }

    .zoom-in-image:hover {
      transform: scale(0.96);
    }


    #scrollBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 99;
      background-color: #007bff;
      color: white;
      border: 2px solid white;
      border-radius: 5px;
      padding: 10px 15px;
      cursor: pointer;
    }

    #scrollBtn:hover {
      background-color: #0056b3;
    }

    .text-justify {
      text-align: justify;
    }

    .row-bordered {
      border: 1px solid #63757E;
      border-radius: 5px;
      padding: 20px;
      margin-bottom: 20px;
    }

    .row-bordered:hover {
      background-color: #f0f0f0;
      transition: background-color 0.3s;
      border: 1px solid #DADADA;
    }

    .row-bordered:hover .meta {
      color: #455A66;
      transition: color 0.3s;
    }

    .accbtn {
      color: #364D58;
      width: 45px;
      height: 45px;
      border: 1px solid #63757E;
      border-radius: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .accbtn:hover {
      color: black;
      border: 1px solid #364D58;
    }
  </style>
    


      <!----------------
       SERVICES SECTION
      ----------------->
  <div class="site-wrap" id="home-section">

      <!----------------
        NAVIGATION BAR
      ----------------->
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar site-navbar-target" role="banner">
      <div class="container">
        <div class="row align-items-center position-relative">
          <div class="col-3">
            <div class="site-logo">
              <a href="home.html" class="d-flex align-items-center">
                <img src="./images/idlogo.png" alt="IDLogo" class="img-fluid col-3 zoom-out-image">
              </a>
            </div>
          </div>
          <div class="col-9  text-center">
            <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>
              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li><a href="home.html" class="nav-link zoom-out-image"><b>Home</b></a></li>
                  <li class="active"><a href="services.php" class="nav-link zoom-out-image"><b><b>Services</b></b></a></li>
                  <li><a href="booking.php" class="nav-link zoom-out-image"><b>Booking</b></a></li>
                  <li><a href="carspage.php" class="nav-link zoom-out-image"><b>Cars</b></a></li>
                  <li><a href="reviews.php" class="nav-link zoom-out-image"><b>Reviews</b></a></li>
                  <li style="margin-right: 215px;"><a href="contact.php" class="nav-link zoom-out-image"><b>Contact Us</b></a></li>
                  <li><button type="button" class="accbtn nav-link zoom-out-image"><i class="fas fa-user"></i></button>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>



      <!----------------
          TOP LEVEL
      ----------------->
      <div class="hero inner-page" style="background-image: url('images/hero_1_a.jpg');">
        <div class="container">
          <div class="row align-items-end ">
            <div class="col-lg-5">
              <div class="intro">
                <h1><strong>Services</strong></h1>
                <div class="custom-breadcrumbs"><a href="home.html">Home</a> <span class="mx-2">/</span><strong>Services</strong></div>
              </div>
            </div>
          </div>
        </div>
      </div>
  


      <!----------------
         IMPERIALDRIVE
      ----------------->
      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2">
              <img src="images/bookingtop.jpg" alt="Image" class="img-fluid rounded">
            </div>
            <div class="col-lg-5 mr-auto">
              <h2><strong>ImperialDrive</strong></h2>
              <br>
              <p class="text-justify">ImperialDrive proudly present a spectrum of tailored car rental solutions crafted to cater to your unique travel requirements. Explore our curated selection of available cars, where convenience meets choice, empowering you to seamlessly pick the vehicle that perfectly aligns with your travel aspirations and preferences.</p>
            </div>
          </div>
        </div>
      </div>
    </div>



      <!----------------
           SERVICES
      ----------------->
      <div class="site-section bg-light">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <h2 class="section-heading"><strong>Featured Cars</strong></h2>
              <p class="mb-5">Showcasing six car options with daily rates, easy picking your car for your adventure.</p>    
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card-services post-entry-1 h-100">
                  <img src="images/servicesection-selfdrive.jpg" alt="Image" class="img-fluid">
                <div class="post-entry-1-contents">
                  <h2>Self Drive Car Rental</h2>
                  <p>Take control of your adventure with our self-drive option—choose, hop in, and explore at your pace. <br>ㅤ</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card-services post-entry-1 h-100">
                  <img src="images/servicesection-booking.jpg" alt="Image" class="img-fluid">
                <div class="post-entry-1-contents">
                  <h2>Booking</h2>
                  <p>Quickly reserve your ideal car with our user-friendly platform, starting your journey with a smooth
                    process. Your journey begins with a smooth and efficient booking process.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card-services post-entry-1 h-100">
                  <img src="images/servicesection-transaction.jpg" alt="Image" class="img-fluid">
                <div class="post-entry-1-contents">
                  <h2>Transactions</h2>
                  <p>Experience secure transactions on our platform, prioritizing your safety and privacy for a worry-free booking. <br>ㅤ</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card-services post-entry-1 h-100">
                  <img src="images/servicesection-carlist.jpg" alt="Image" class="img-fluid">
                <div class="post-entry-1-contents">
                  <h2>Our Car List</h2>
                  <p>Discover your perfect ride from our diverse selection, whether a compact city car or spacious SUV. <br>ㅤ</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card-services post-entry-1 h-100">
                  <img src="images/servicesection-rentaldriver.jpg" alt="Image" class="img-fluid">
                <div class="post-entry-1-contents">
                  <h2>Car Rental with Driver</h2>
                  <p>Relax as our professional drivers navigate, ensuring a stress-free journey for scenery enjoyment or meetings. <br>ㅤ</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card-services post-entry-1 h-100">
                  <img src="images/servicesection-rentalairport.jpg" alt="Image" class="img-fluid">
                <div class="post-entry-1-contents">
                  <h2>Airport Transfer Service</h2>
                  <p>Say goodbye to travel worries with prompt airport transfers, offering a comfortable and efficient solution. <br>ㅤ</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!----------------
        FEATURED CARS
      ----------------->
    <div class="site-section">
        <div class="row justify-content-center text-center mb-2 section-2-title">
          <div class="col-md-6">
            <h2 class="section-heading mb-4"><strong>Featured Cars</strong></h2>
            <p class="mb-5">Showcasing four car options with daily rates, easy picking your car for your adventure.</p>    
          </div>
        </div>

        <?php
        include 'config.php';

        $sql = "SELECT * FROM cars_tbl ORDER BY RAND() LIMIT 4";
        $result = mysqli_query($conn, $sql);
        ?>

    <div class="row mt-5 pl-3 pr-3">
      <div class="container">
        <div class="row">
        <?php while($rows = mysqli_fetch_assoc($result)){ ?>
        <div class="col-md-6 col-lg-3">
          <div class="car-list-card  listing d-block  align-items-stretch">
            <div class="listing-img h-100 mr-4">
              <img src="<?php echo $rows["image"]; ?>" alt="Image" class="img-fluid zoom-out-image">
            </div>
            <div class="listing-contents h-100">
              <h3><?php echo $rows["name"]; ?></h3>
              <div class="rent-price">
                <strong>₱<?php echo $rows["price"]; ?></strong><span class="mx-1">/</span>day
              </div>
              <div class="d-block d-md-flex mb-3 border-bottom pb-3"></div>
              <div class="text-center zoom-out-image">
                <p><a href="details.php?id=<?php echo $rows['car_id']; ?>" class="btn btn-primary btn-sm">Details</a></p>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>



      <!----------------
        BOOKING SHRTCT
      ----------------->
      <div class="site-section bg-primary py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 mb-4 mb-md-0">
              <h2 class="mb-0 text-white">Want to know how?</h2>
              <p class="mb-0 opa-7">Are you gearing up for your next adventure? Discover the seamless process of booking your ideal ride with us!</p>
            </div>
            <div class="col-lg-5 text-md-right zoom-out-image">
              <a href="booking.php" class="btn btn-primary btn-white">Discover How</a>
            </div>
          </div>
        </div>
      </div>
  
  
  
      <!----------------
            FOOTER
      ----------------->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <h2 class="footer-heading mb-4">About Us</h2>
          <p>Where choice meets convenience. Rent a car and take the wheel or opt for a driver — your journey, your
            decision.</p>
        </div>
        <div class="col-lg-8 ml-auto">
          <div class="row">
            <div class="col-lg-3">
              <h2 class="footer-heading mb-4">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="home.html">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="booking.php">Booking</a></li>
                <li><a href="#">News</a></li>
                <li><a href="reviews.php">Reviews</a></li>
              </ul>
            </div>
            <div class="col-lg-3">
              <h2 class="footer-heading mb-4">Resources</h2>
              <ul class="list-unstyled">
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Policies</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="contact.php">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-lg-3">
              <h2 class="footer-heading mb-4">Support</h2>
              <ul class="list-unstyled">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">LinkedIn</a></li>
                <li><a href="#">Youtube</a></li>
              </ul>
            </div>
            <div class="col-lg-3">
              <h2 class="footer-heading mb-4">Company</h2>
              <ul class="list-unstyled">
                <li><a href="home.html">About Us</a></li>
                <li><a href="#">Our Team</a></li>
                <li><a href="contact.php">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
 
    

      <!----------------
            GO UP
      ----------------->
      <button onclick="scrollToTop()" id="scrollBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>

      <!----------------
            MY JS
      ----------------->
    <script>
      function scrollToTop() {
        const scrollDuration = 400; // Duration of the scroll animation in milliseconds
        const scrollStep = -window.scrollY / (scrollDuration / 15);
        
        const scrollInterval = setInterval(function() {
          if (window.scrollY !== 0) {
            window.scrollBy(0, scrollStep);
          } else {
            clearInterval(scrollInterval);
          }
        }, 15);
      }
      
      window.onscroll = function() {
        const scrollBtn = document.getElementById("scrollBtn");
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          scrollBtn.style.display = "block";
        } else {
          scrollBtn.style.display = "none";
        }
      };

      document.querySelector('.accbtn').addEventListener('click', function() {
        window.location.href = 'accounts.html';
      });
      </script>



      <!----------------
         BOOTSTRAP JS
      ----------------->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

      <!----------------
           MAIN JS
      ----------------->
    <script src="js/main.js"></script>
  </body>
</html>

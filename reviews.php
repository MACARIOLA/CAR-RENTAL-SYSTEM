<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ImperialDrive | Reviews</title>

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

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

    .card {
      height: 100%;
    }

    .card-body {
      display: flex;
      height: 100%;
      flex-direction: column;
    }
  </style>



  <!----------------
    SECTION SECTION
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
              <a href="home.php" class="d-flex align-items-center">
                <img src="./images/idlogo.png" alt="IDLogo" class="img-fluid col-3 zoom-out-image"></a>
            </div>
          </div>
            
          <div class="col-9  text-center">
            <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 ">
            <span class="icon-menu h3 text-black"></span></a></span>
              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li><a href="home.php" class="nav-link zoom-out-image"><b>Home</b></a></li>
                  <li><a href="services.php" class="nav-link zoom-out-image"><b>Services</b></a></li>
                  <li><a href="booking.php" class="nav-link zoom-out-image"><b>Booking</b></a></li>
                  <li><a href="carspage.php" class="nav-link zoom-out-image"><b>Cars</b></a></li>
                  <li class="active"><a href="reviews.php" class="nav-link zoom-out-image"><b><b>Reviews</b></b></a></li>
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
              <h1><strong>Reviews</strong></h1>
              <div class="custom-breadcrumbs"><a href="home.php">Home</a> <span class="mx-2">/</span>
                <strong>Reviews</strong>
              </div>
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
            <img src="images/servicesection-booking.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-lg-5 mr-auto">
            <h2><strong>ImperialDrive</strong></h2>
            <br>
            <p class="text-justify">Explore our review section for authentic perspectives shared by customers who have
              experienced our car rental services firsthand. These reviews encapsulate various aspects of our service,
              providing detailed insights into the quality of our vehicles, the ease and efficiency of our booking
              process, and the overall satisfaction of our customers. It's a window into real experiences, showcasing
              our commitment to transparency and our dedication to continuously enhancing our services based on valuable
              customer feedback</p>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!----------------
     TESTIMONIALS
  ----------------->
  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <h2 class="section-heading"><strong>Testimonials</strong></h2>
          <p class="mb-5">Our Customer Reviews.</p>
        </div>
      </div>
  
      <div class="row">
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'id_dtb');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM reviews_tbl ORDER BY Review_ID DESC LIMIT 9";
    $result = mysqli_query($conn, $sql);

    $reviewCounter = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="col-lg-4 mb-4">';
        echo '<div class="card testimonial-2 zoom-out-image">';
        echo '<blockquote class="mb-4 text-justify">';
        echo '<p>"' . $row['Customer_Comment'] . '"</p>';
        echo '</blockquote>';

        echo '<div class="card-body">';
        echo '<div class="d-flex align-items-center">';

        // Check if the key exists and is not null before using it
        if (isset($row["Profile_pic"]) && !is_null($row["Profile_pic"])) {
            $profilePic = $row["Profile_pic"];
            echo '<img class="profile" src="' . $profilePic . '" alt="Image" class="img-fluid rounded-circle mr-3" style="height: 25px; width: auto;">';
        } else {
            // Display SVG outline of a person if profile pic is null
            echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="25" height="25" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">';
            echo '<circle cx="12" cy="7" r="4"/>';
            echo '<path d="M12 11c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm6 11h-12"/>';
            echo '</svg>';
        }

        echo '<div class="author-name">';

        // Check if the key exists before using it
        $Name = isset($row["name"]) ? $row["name"] : 'Unknown';
        echo '<span class="d-block"> ' . $Name . ' </span>';

        echo '</div>';
        echo '</div>';
        echo '</div>';

        echo '</div>';
        echo '</div>';

        $reviewCounter++;
    }

    echo '</div>';

    echo '</div>';

    echo '</div>';

    mysqli_free_result($result);

    mysqli_close($conn);
    ?>
</div>


      <!----------------
        REVIEW SHRTSCT
      ----------------->
        <div class="site-section bg-primary py-5">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-7 mb-6 mb-md-0">
                <h2 class="mb-0 text-white">Love our rides?</h2>
                <p class="mb-0 opa-7">Share Your Experience! Your feedback matters. Help us enhance our services by
                  sharing
                  your thoughts. Leave a review and let your voice shape our future.</p>
              </div>
              <div class="col-lg-5 text-md-right zoom-out-image">
                <a href="reviewspage.php" class="btn btn-primary btn-white">Leave a Review</a>
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
                <p>Where choice meets convenience. Rent a car and take the wheel or opt for a driver — your journey, your decision.</p>
              </div>
              <div class="col-lg-8 ml-auto">
                <div class="row">
                  <div class="col-lg-3">
                    <h2 class="footer-heading mb-4">Quick Links</h2>
                    <ul class="list-unstyled">
                      <li><a href="home.php">About Us</a></li>
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
                      <li><a href="home.php">About Us</a></li>
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

            const scrollInterval = setInterval(function () {
              if (window.scrollY !== 0) {
                window.scrollBy(0, scrollStep);
              } else {
                clearInterval(scrollInterval);
              }
            }, 15);
          }

          window.onscroll = function () {
            const scrollBtn = document.getElementById("scrollBtn");
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              scrollBtn.style.display = "block";
            } else {
              scrollBtn.style.display = "none";
            }
          };

          document.querySelector('.accbtn').addEventListener('click', function () {
            window.location.href = 'accounts.php';
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

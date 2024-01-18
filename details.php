<!--- PHP --->
<?php
include 'config.php';

$id = '';
if(isset($_GET["id"])){
  $id = $_GET["id"];
}
$sql = "SELECT * FROM cars_tbl WHERE car_id = $id";
$result = mysqli_query($conn, $sql);
?>



<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ImperialDrive | Cars</title>

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
        background-color:  #f0f0f0;
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

      .custom-pagination a:hover {
        background-color: #0056b3;
      }

      .custom-image-class {
        max-width: 77%;
        max-height: 77%; 
        width: auto;
        height: auto;
      }

    </style>
    


      <!----------------
        DETAILS SECTION
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
                  <li><a href="services.php" class="nav-link zoom-out-image"><b>Services</b></a></li>
                  <li><a href="booking.php" class="nav-link zoom-out-image"><b>Booking</b></a></li>
                  <li class="active"><a href="carspage.php" class="nav-link zoom-out-image"><b><b>Cars</b></b></a></li>
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
                <h1><strong>Car Details</strong></h1>
                <div class="custom-breadcrumbs"><a href="home.html">Home</a> <span class="mx-2">/</span> <strong>Car Details</strong></div>
              </div>
            </div>
          </div>
        </div>
      </div>

    
      <!----------------
           Car List
      ----------------->
      <div class="site-section bg-light">
        <div class="container">
            <div class="site-section">
              <div class="container">
              <?php
                if(mysqli_num_rows($result) > 0) {
                  while($rows = mysqli_fetch_assoc($result)) { ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <img src="<?php echo $rows['image']; ?>" class="rounded img-fluid mx-auto d-block zoom-in-image custom-image-class">
                        <h1 style="text-align:center;"><strong><?php echo $rows["name"]; ?></strong></h1>
                        <div class="pb-4" style="text-align:center;"><strong class="text-black ">₱<?php echo $rows["price"]; ?>/Hour</strong></div>
                    </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-8 blog-content">
                    <p class="lead text-justify"><?php echo $rows["information1"];?></p>
                    <p class="lead text-justify"><?php echo $rows["information2"];?></p>
                    <div class="pt-5"></div>
                  </div>

                  <div class="col-md-4 sidebar">
                    <div class="sidebar-box">
                      <div class="categories">
                        <h2>Categories</h2>
                        <br>
                        <li><a style="font-size: 20px;">Body <span style="color: black; font-size: 20px;"><?php echo $rows["car_type"]; ?></span></a></li>
                        <li><a style="font-size: 20px;">Doors <span style="color: black; font-size: 20px;"><?php echo $rows["doors"]; ?></span></a></li>
                        <li><a style="font-size: 20px;">Capacity <span style="color: black; font-size: 20px;">4</span></a></li>
                        <li><a style="font-size: 20px;">Passenger <span style="color: black; font-size: 20px;"><?php echo $rows["capacity"]; ?></span></a></li>
                        <?php
                        if($rows["availability"] == 0){
                        ?>
                        <li><a style="font-size: 20px;">Availability <span class="text-danger" style="color: black; font-size: 20px;">Out of Stock</span></a></li>
                        <li><a href="" style="font-size: 20px;"></a><p class="text-white"><a class="btn btn-primary btn-danger btn-sm zoom-out-image">Out of Stock</a></p></li>
                        <?php
                        }else{
                        ?>
                        <li><a style="font-size: 20px;">Availability <span class="text-success" style="color: black; font-size: 20px;"><?php echo $rows["availability"]; ?> Cars</span></a></li>
                        <li><a href="" style="font-size: 20px;"></a><p class="text-white"><a href="transaction.php?id=<?php echo $rows['car_id']; ?>" class="btn btn-primary btn-sm zoom-out-image">Book Now</a></p></li>
                        <?php
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
          }
        }
        ?>



      <!----------------
          RENT SHRTCT
      ----------------->
      <div class="site-section bg-primary py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 mb-4 mb-md-0">
              <h2 class="mb-0 text-white">What are you waiting for?</h2>
              <p class="mb-0 opa-7">Ready to hit the road? Unleash your journey! Get behind the wheel of your dream ride and start exploring today.</p>
            </div>
            <div class="col-lg-5 text-md-right zoom-out-image">
              <a href="carspage.php" class="btn btn-primary btn-white">Rent a car now</a>
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

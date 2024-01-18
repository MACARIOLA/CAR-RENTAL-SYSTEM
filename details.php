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


<!doctype html>
<html lang="en">

  <head>
    <title>CarRental | Car Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body>

    <style>
      .site-navbar {
        position: fixed;
        width: 100%;
        background-color: rgba(255, 255, 255, 0.3); 
        backdrop-filter: blur(10px); 
        z-index: 1000;
      }
    </style>
    
    <div class="site-wrap" id="home-section">

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
                <a href="home.html"><strong>CarRental</strong></a>
              </div>
            </div>

            <div class="col-9  text-right">
              
              <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li><a href="home.html" class="nav-link">Home</a></li>
                  <li><a href="about.html" class="nav-link">About</a></li>
                  <li><a href="services.php" class="nav-link">Services</a></li>
                  <li><a href="booking.php" class="nav-link">Booking</a></li>
                  <li><a href="carspage.php" class="nav-link">Cars</a></li>
                  <li><a href="reviews.php" class="nav-link">Reviews</a></li>
                  <li><a href="contact.php" class="nav-link">Contact Us</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

      
      <div class="hero inner-page" style="background-image: url('images/hero_1_a.jpg');">
        
        <div class="container">
          <div class="row align-items-end ">
            <div class="col-lg-12">

              <div class="intro">
                <h1><strong>Car Details</strong></h1>
                <div class="pb-4"></div>
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
                        <img src="<?php echo $rows['image']; ?>" class="rounded img-fluid mx-auto d-block">
                        <h1 style="text-align:center;"><strong><?php echo $rows["name"]; ?></strong></h1>
                        <div class="pb-4" style="text-align:center;"><strong class="text-black ">₱<?php echo $rows["price"]; ?>/day</strong></div>
                        <!-- <center>
                            <p class="text-white"><a href="transaction.html" class="btn btn-primary btn-sm zoom-out-image">Book Now</a></p>
                        </center>-->
                    </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-8 blog-content">
                    <p class="lead text-justify"><?php echo $rows["information2"];?></p>
                    <div class="pt-5"></div>
                  </div>

                  <div class="col-md-4 sidebar">
                    <div class="sidebar-box">
                      <div class="categories">
                        <h2>Categories</h2>
                        <br>
                        <li><a href="#" style="font-size: 20px;">Body <span style="color: black; font-size: 20px;"><?php echo $rows["car_type"]; ?></span></a></li>
                        <li><a href="#" style="font-size: 20px;">Doors <span style="color: black; font-size: 20px;"><?php echo $rows["doors"]; ?></span></a></li>
                        <li><a href="#" style="font-size: 20px;">Capacity <span style="color: black; font-size: 20px;">4</span></a></li>
                        <li><a href="#" style="font-size: 20px;">Passenger <span style="color: black; font-size: 20px;"><?php echo $rows["capacity"]; ?></span></a></li>
                        <?php
                        if($rows["availability"] == 0){
                        ?>
                        <li><a href="#" style="font-size: 20px;">Availability <span class="text-danger" style="color: black; font-size: 20px;">Out of Stock</span></a></li>
                        <li><a href="" style="font-size: 20px;"></a><p class="text-white"><a class="btn btn-primary btn-danger btn-sm zoom-out-image">Out of Stock</a></p></li>
                        <?php
                        }else{
                        ?>
                        <li><a href="" style="font-size: 20px;">Availability <span class="text-success" style="color: black; font-size: 20px;"><?php echo $rows["availability"]; ?> Cars</span></a></li>
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
                  <li><a href="news.html">News</a></li>
                  <li><a href="reviews.html">Reviews</a></li>
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
                  <li><a href="about.html">Our Team</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    </div>

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

    <script src="js/main.js"></script>

  </body>
</html>

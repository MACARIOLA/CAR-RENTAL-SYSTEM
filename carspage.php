<!---- PHP ---->

<?php
include 'config.php'; 

// start of database
$start = 0;

// total rows in a page
$rows_per_page = 6;

// total number of rows in database
$record = "SELECT * FROM cars_tbl";
$max_row = mysqli_query($conn, $record);
$num_row = mysqli_num_rows($max_row);

// calculating the number of rows per page
$pages = ceil($num_row / $rows_per_page);

// if the user clicks the page num we set a new starting point
if(isset($_GET['page-row'])){
  $page = $_GET['page-row'] - 1;
  $start = $page * $rows_per_page;

}

$sql = "SELECT * FROM cars_tbl LIMIT $start, $rows_per_page";
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

      .card{
        height: 100%;
      }

      .card-body{
        display: flex;
        height: 100%;
        flex-direction: column;
      }

      .card-text{
        flex-grow: 1;
      }
    </style>
    


      <!----------------
        BOOKING SECTION
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
                  <li><a href="services.html" class="nav-link zoom-out-image"><b>Services</b></a></li>
                  <li><a href="booking.html" class="nav-link zoom-out-image"><b>Booking</b></a></li>
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
                <h1><strong>Cars</strong></h1>
                <div class="custom-breadcrumbs"><a href="home.html">Home</a> <span class="mx-2">/</span> <strong>Cars</strong></div>
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
              <img src="images/carstop.jpg" alt="Image" class="img-fluid rounded">
            </div>
            <div class="col-lg-5 mr-auto">
              <h2><strong>ImperialDrive</strong></h2>
              <br>
              <p class="text-justify">Welcome to our comprehensive car list section, meticulously designed to offer you an expansive view of our diverse fleet of vehicles available for rent. Whether you seek the efficiency of compact cars, the spaciousness of SUVs, or the luxury of premium vehicles, our assortment caters to diverse needs and preferences. Delve into detailed descriptions, accompanied by vivid imagery, allowing you to explore the features, specifications, and unique characteristics of each car. We aim to provide an immersive experience, enabling you to make an informed decision that perfectly aligns with your travel requirements and preferences.</p>
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
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading" id="carlists"><strong>Cars List</strong></h2>
            <p class="mb-5">Showcasing six car options with daily rates, easy picking your car for your adventure.</p>
          </div>
        </div>

        <div class="row">
        <?php while($rows = mysqli_fetch_assoc($result)){  ?>
          <div class="col-md-4 col-6 gy-4">
            <div class="card">
              <a href="details.php?id=<?php echo $rows['car_id']; ?>"><img src="<?php echo $rows["image"]; ?>" alt="Image" class="img-fluid zoom-out-image card-img-top img-fit"></a>
              <?php
              if($rows["availability"] == 0){
              ?>
              <div class="card-body">
                <h5><strong><?php echo $rows["name"]; ?></strong></h5>
                <div class="rent-price text-primary">₱<?php echo $rows["price"]; ?><strong>/day</strong></div>
                <p class="card-text">
                  <span class="pr-2">Doors:</span>
                  <span class="pr-2"><?php echo $rows["doors"]; ?></span>
                  <span class="caption pr-2">Capacity:</span>
                  <span class="number pr-2"><?php echo $rows["capacity"]; ?></span>
                  <span class="caption pr-2">Availability:</span>
                  <span class="number text-danger pr-2">0</span><br><br>
                  <span class="text-justify"><?php echo $rows["information1"]; ?></span>
                </p>
                <div class="text-end">
                  <a class="btn btn-primary btn-danger btn-sm zoom-out-image text-white">Out of Stock</a>
                </div>
              </div>
              <?php
              }else{
              ?>
              <div class="card-body">
                <h5><strong><?php echo $rows["name"]; ?></strong></h5>
                <div class="rent-price text-primary">₱<?php echo $rows["price"]; ?><strong>/day</strong></div>
                <p class="card-text">
                  <span class="pr-2">Doors:</span>
                  <span class="pr-2"><?php echo $rows["doors"]; ?></span>
                  <span class="caption pr-2">Capacity:</span>
                  <span class="number pr-2"><?php echo $rows["capacity"]; ?></span>
                  <span class="caption pr-2">Availability:</span>
                  <span class="number text-success pr-2"><?php echo $rows["availability"]; ?></span><br><br>
                  <span class="text-justify"><?php echo $rows["information1"]; ?></span>
                </p>
                <div class="text-end">
                  <a href="transaction.php?id=<?php echo $rows['car_id']; ?>" class="btn btn-primary btn-sm zoom-out-image">Rent Now</a>
                </div>
              </div>
              <?php
              }
              ?>
            </div>
          </div>
          <?php } ?>
        </div>
        
        <!----- PAGE ----->
        <div class="row">
          <div class="col-5 m-5">
            <div class="custom-pagination">
              <?php
              for($counter = 1; $counter <= $pages; $counter++){
              ?>
                <a href="?page-row=<?php echo $counter ?>"><?php echo $counter ?></a>
              <?php
              }
              ?>
            </div>
          </div>
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
              <a href="booking.html" class="btn btn-primary btn-white">Discover How</a>
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
                  <li><a href="services.html">Services</a></li>
                  <li><a href="booking.html">Booking</a></li>
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

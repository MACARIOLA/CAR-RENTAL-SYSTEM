<?php 
require 'contactus.php';

?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ImperialDrive | Contact Us</title>

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
      opening-hours {
        margin-top: 20px;
        margin-right: -10px;
        margin-left: -50px;
        
      }.opening-hours {
        margin-top: 20px;
        margin-right: -10px;
        margin-left: -50px;
        
      }
    </style>
    


      <!----------------
      CONTACT US SECTION
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
                  <li><a href="carspage.php" class="nav-link zoom-out-image"><b>Cars</b></a></li>
                  <li><a href="reviews.php" class="nav-link zoom-out-image"><b>Reviews</b></a></li>
                  <li  class="active" style="margin-right: 215px;"><a href="contact.php" class="nav-link zoom-out-image"><b><b>Contact Us</b></b></a></li>
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
                <h1><strong>Contact Us</strong></h1>
                <div class="custom-breadcrumbs"><a href="home.html">Home</a> <span class="mx-2">/</span> <strong>Contact Us</strong></div>
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
              <img src="images/contacttop.jpg" alt="Image" class="img-fluid rounded">
            </div>
            <div class="col-lg-5 mr-auto">
              <h2><strong>ImperialDrive</strong></h2>
              <br>
              <p class="text-justify">Got questions or ready to hit the road? Our dedicated team at Imperial Drive is here to assist you every mile of the way. Whether you need help with reservations, inquiries about our fleet, or simply seeking expert advice for your travel needs, we're just a message or call away. Reach out to us for seamless car rental experiences that elevate your journey. Connect with Imperial Drive today!</p>
              <br><br><br><br><br><br>
            </div>
          </div>
        </div>
      </div>
    </div>



      <!----------------
             FORMS
      ----------------->
    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>Contact Us Or Use This Form To Rent A Car</h2>
          <p>If you need a service outside of our scope, let's talk about it.<br>We'll find the best way possible to meet your needs<br>because you are our top priority.</p>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-8 mb-5" >
            <form method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input name="firstn" type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6">
                  <input name="lastn" type="text" class="form-control" placeholder="Last name">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input name="emailaddc" type="text" class="form-control" placeholder="Email address">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="message" id="" class="form-control" placeholder="Write your message." cols="30" rows="22"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input name="send" type="submit" class="btn btn-block btn-primary text-white py-3 px-5 zoom-out-image" value="Send Message">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Address:</span>
                  <span>321 Maple Avenue, Brgy. Sto Tomas, Binan City, Laguna, Philippines</span>
                </li>
                <li class="d-block mb-3">
                  <span class="d-block text-black">Phone:</span>
                  <span>+63 944 567 8901</span>
                </li>
                <li class="d-block mb-3">
                  <span class="d-block text-black">Email:</span>
                  <span>inquiries@imperialdrive.com</span>
                </li>
                <div class="opening-hours">
                  <div class="bg-white p-3 p-md-5">
                  <h3 class="text-black mb-4">Opening Hours</h3>
                    <li class="d-block mb-3">
                      <span class="d-block text-black">Monday to Friday:</span>
                      <span>8AM to 11PM</span>
                    </li>
                    <li>
                      <span class="d-block text-black">Saturday and Sunday:</span>
                      <span>10AM to 6PM</span>
                    </li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>



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
                  <li><a href="carspage.php">Cars</a></li>
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
                  <li><a href="home.html">Our Team</a></li>
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

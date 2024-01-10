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
    <title>ImperialDrive | Car Details</title>

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

    <!-- MAIN CSS -->
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
      </style>

    
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
                  <li class="active"><a href="cars.html" class="nav-link zoom-out-image"><b><b>Cars</b></b></a></li>
                  <li><a href="reviews.html" class="nav-link zoom-out-image"><b>Reviews</b></a></li>
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
                <div class="pb-4"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

    

    <div class="site-section">
      <div class="container">
        <?php
        if(mysqli_num_rows($result) > 0) {
          while($rows = mysqli_fetch_assoc($result)) { ?>
          
        
        
        <?php
          }
        }
        ?>
        <div class="row">
          <div class="col-md-8">
            <img src="images/car_1.jpg" class="rounded img-fluid">
            <p class="h2 text-body">Buick LaCrosse</p>
            <div class="rent-price">
              <p class="h4"><strong>₱3,500.00</strong><span class="mx-1">/</span>day</p>
            </div>
          </div>

          <div class="col-md-4 sidebar">
            <div class="sidebar-box">
              <div class="categories">
                <h3 class="pt-5">Categories</h3>
                <li style="background: lightgray;"><a>Body<span class="text-body">SUV</span></a></li>
                <li><a>Doors<span class="text-body">4</span></a></li>
                <li style="background: lightgray;"><a>Capacity<span class="text-body">4</span></a></li>
                <li><a>Quantity<span class="text-body">7</span></a></li>
              </div>
              <div class="sidebar-box">
                <p class="text-white pt-5"><a href="transaction.html" class="btn btn-primary btn-sm zoom-out-image">Book Now</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="pt-5">
            <div class="card">
              <div class="card-header h2 text-body bg-secondary">Car Overview</div>
              <div class="card-body"><p class="text-justify">The Buick LaCrosse is a stylish and sophisticated sedan that seamlessly blends luxury and performance for an unparalleled driving experience. With its sleek exterior design, the LaCrosse exudes a sense of modern elegance, making it a standout choice for those who appreciate both aesthetics and functionality. Inside, the spacious and meticulously crafted cabin offers a haven of comfort and convenience. Plush leather seats, advanced technology features, and a user-friendly infotainment system ensure that every journey is a pleasure. Whether you're navigating city streets or embarking on a long-distance road trip, the Buick LaCrosse provides a smooth and responsive ride, thanks to its powerful engine and refined suspension. Safety is a top priority in the Buick LaCrosse, with a comprehensive suite of advanced safety features and driver-assistance technologies. From adaptive cruise control to lane departure warning, the LaCrosse is equipped to keep you and your passengers secure on the road. Experience the epitome of luxury and performance with the Buick LaCrosse. Whether you're a discerning traveler or simply seeking a reliable and sophisticated vehicle, the Buick LaCrosse exceeds expectations and elevates every driving experience.</p></div>
            </div>
          </div>
        </div>
        <!--- rating and review --->
        <div class="row">
          <div class="col-md-8 pt-5">
            <h3 class="mb-5">Rating & Reviews</h3>
            <ul class="comment-list">
              <li class="comment">
                <div class="vcard bio">
                  <img src="images/person_2.jpg" alt="Free Website Template by Free-Template.co">
                </div>
                <div class="comment-body">
                  <h3>Jacob Smith</h3>
                  <div class="meta">January 9, 2018 at 2:21pm</div>
                  <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>
              </li>

              <li class="comment">
                <div class="vcard bio">
                  <img src="images/person_3.jpg" alt="Free Website Template by Free-Template.co">
                </div>
                <div class="comment-body">
                  <h3>Chris Meyer</h3>
                  <div class="meta">January 9, 2018 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>

                <ul class="children">
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="images/person_5.jpg" alt="Free Website Template by Free-Template.co">
                    </div>
                    <div class="comment-body">
                      <h3>Chintan Patel</h3>
                      <div class="meta">January 9, 2018 at 2:21pm</div>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>


                    <ul class="children">
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/person_1.jpg" alt="Free Website Template by Free-Template.co">
                        </div>
                        <div class="comment-body">
                          <h3>Jean Doe</h3>
                          <div class="meta">January 9, 2018 at 2:21pm</div>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>

                          <ul class="children">
                            <li class="comment">
                              <div class="vcard bio">
                                <img src="images/person_4.jpg" alt="Free Website Template by Free-Template.co">
                              </div>
                              <div class="comment-body">
                                <h3>Ben Afflick</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                <p><a href="#" class="reply">Reply</a></p>
                              </div>
                            </li>
                          </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="comment">
                <div class="vcard bio">
                  <img src="images/person_1.jpg" alt="Free Website Template by Free-Template.co">
                </div>
                <div class="comment-body">
                  <h3>Jean Doe</h3>
                  <div class="meta">January 9, 2018 at 2:21pm</div>
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>
              </li>
            </ul>
            <!-- END comment-list -->
            
            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5">Leave a comment</h3>
              <form action="#" class="">
                <div class="form-group">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="website">Website</label>
                  <input type="url" class="form-control" id="website">
                </div>

                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Post Comment" class="btn btn-primary btn-md text-white">
                </div>

              </form>
            </div>
          </div>
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
                  <li><a href="contact.html">Contact Us</a></li>
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
                  <li><a href="contact.html">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    </div>
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

    <script src="js/main.js"></script>

  </body>

</html>


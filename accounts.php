
<?php
session_start();

Include('con_db.php');

// Check if the user is logged in
if (isset($_SESSION["Username"])) {
    // User is logged in, retrieve profile information
    $username = $_SESSION["Username"];
    $sql = "SELECT * FROM customers_tbl WHERE Email = '$username'";
    $result = mysqli_query($conn, $sql);

         if ($result && mysqli_num_rows($result) > 0) {
        $userProfile = mysqli_fetch_assoc($result);

             // Check if the "profile_image" key exists in the array and is not null
             $profileImage = isset($userProfile['profile_image']) && !is_null($userProfile['profile_image']) ? $userProfile['profile_image'] : null;
         }
        } else {
    // User is not logged in, show default profile image
    $profileImage = null;
        }







?>

<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ImperialDrive | Profile</title>

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
           CSS ng reviews 
      ----------------->

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
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            #header {
                background-color: #333;
                color: #fff;
                text-align: center;
                padding: 10px;
            }

            #body {
    max-width: 500px; /* Set the maximum width to 500px */
    max-height: 900px; /* Set the maximum height to 900px */
    margin: auto; /* Center the main div */
    margin-left: 200px;
    margin-right: 200px;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow: hidden; /* Hide content that exceeds the specified height */
}

            .button {
                display: flex;
                justify-content: space-between;
                margin-bottom: 20px;
            }

            #Back,
            #Logout {
                background-color: #007BFF;
                display: inline-block;
                font-weight: 400;
                text-align: center;
                vertical-align: middle;
                border: 1px solid transparent;
                width: 4rem;
                height: 1rem; 
                padding: 1rem 1rem;
                font-size: 1rem;
                line-height: 1.5;
                border-radius: 0.25rem;
                font-size: 0.875rem;
                line-height: 1.5;
                border-radius: 0.2rem; 
            }

            #Back:hover, #Logout:hover {
                background-color: #0056b3;
                border-radius: 5px;
            }

            #Back {
                margin-right: auto;
            }

            #Logout {
                margin-left: auto; 
            }

            #profile {
                display: flex;
                flex-direction: column;
                align-items: center; 
                margin-top: 20px;
            }

            #photo img {
                width: 100px;
                height: 100px;
                border-radius: 50%;
                margin-bottom: 10px;
            }

            #info {
                text-align: center;
            }

            #info h3 {
                margin: 0;
                color: #000000;
            }

            #info a {
                text-decoration: none;
                display: block;
                margin-bottom: 5px;
            }

            #media,
            #logs {
                margin-top: 20px;
                border-top: 2px solid #ccc;
                padding-top: 20px;
            }

            #review {
                margin-top: 20px;
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
            }

            .review-entry {
                width: calc(50% - 20px);
                box-sizing: border-box;
            }
            
            .review-entry:hover {
                background-color:  #f0f0f0;
                transition: background-color 0.3s; 
                border-radius: 5px;
            }

            .review-box {
                border: 1px solid #ccc;
                padding: 10px;
                border-radius: 5px;
            }

            .review-content {
                margin: 0;
            }

            .review-username {
                margin: 0;
                color: #666;
            }

            .zoom-out-image {
                transition: transform 0.3s ease-in-out;
            }

            .zoom-out-image:hover {
                transform: scale(1.02);
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

            .meta {
                color: #808080;
                font-size: 14px;
            }

            .meta2 {
                color: black;
            }

            .section-heading strong {
                font-weight: 700; 
            }

            #photo {
                position: relative;
                display: inline-block;
                width: 100px;
                height: 100px;
                border-radius: 50%;
                overflow: hidden;
            }

            #photo img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            margin-bottom: 10px;
            }

            .overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                opacity: 0;
                transition: opacity 0.3s;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 50%;
            }

            .plus {
                font-size: 2em;
                color: white;
                display: none;
            }

            #photo:hover .overlay {
                opacity: 1;
            }

            #photo:hover .plus {
                display: block;
            }
            



        /*CSS reviews*/
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

        </style>

<?php

?>

        <!----------------
          ACCOUNT SECTION
        ----------------->
        <!-- Write your comments here --><div id="body">
            <div class="button">
                <a href="home.php" style="text-decoration: none; color: white;">
                    <div id="Back" class="zoom-out-image2">Back</div>
                  </a>
                  
                  <a href="login.php" style="text-decoration: none; color: white;">
                    <div id="Logout" class="zoom-out-image2">Sign-out</div>
                  </a>
                  
            </div>
            <div id="profile">
    <a href="#" id="profileLink" style="text-decoration: none; color: inherit;">
        <div id="photo" class="zoom-out-image2">
            <?php if (!is_null($profileImage)): ?>
                <!-- Display user's profile image -->
                <img src="<?php echo $profileImage; ?>" id="profileImage" alt="Profile Photo">
            <?php else: ?>
                <!-- Display SVG outline of a person if profile image is null -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="100" height="100" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="7" r="4"/>
                    <path d="M12 11c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm6 11h-12"/>
                </svg>
            <?php endif; ?>
            <div class="overlay">
                <span class="plus">+</span>
            </div>
        </div>
    </a>
<?php

if (isset($_SESSION["Username"])) {
    // User is logged in, retrieve profile information
    $username = $_SESSION["Username"];
    $sql = "SELECT * FROM customers_tbl WHERE Email = '$username'";
    $result = mysqli_query($conn, $sql);

         if ($result && mysqli_num_rows($result) > 0) {
        $userProfile = mysqli_fetch_assoc($result);
             // Check if the "profile_image" key exists in the array and is not null
           }
        } else {
              Echo "user not login";
        }


?>
        <div id="info">
            <h3 class="mb-5"><b><?php echo $userProfile['First_name'].$userProfile['Last_name'].$userProfile['Mi']; ?></b></h3>
             <a class="meta"><?php echo $userProfile['Email']; ?></a>
              <a class="meta2"><?php echo $userProfile['Contact_number']; ?></a>
        </div>
    </div>
    <!------------
             REVIEWS
        ----------------->

                <!----------------
        <div id="media"></div>
                <h2 class="section-heading"><b>Your Reviews</b></h2>
                <div id="review">
                    <div class="review-entry zoom-out-image">
                        <div class="review-box">
                            <p class="review-content">Review content goes here.</p>
                            <p class="review-username"><strong>Username:</strong> User123</p>
                        </div>
                    </div>
                    <div class="review-entry zoom-out-image">
                        <div class="review-box">
                            <p class="review-content">Review content goes here.</p>
                            <p class="review-username"><strong>Username:</strong> User456</p>
                        </div>
                    </div>
                    <div class="review-entry zoom-out-image">
                        <div class="review-box">
                            <p class="review-content">Review content goes here.</p>
                            <p class="review-username"><strong>Username:</strong> User789</p>
                        </div>
                    </div>
                    <div class="review-entry zoom-out-image">
                        <div class="review-box">
                            <p class="review-content">Review content goes here.</p>
                            <p class="review-username"><strong>Username:</strong> User789</p>
                        </div>
                    </div>
                    <div class="review-entry zoom-out-image">
                        <div class="review-box">
                            <p class="review-content">Review content goes here.</p>
                            <p class="review-username"><strong>Username:</strong> User789</p>
                        </div>
                    </div>
                    <div class="review-entry zoom-out-image">
                        <div class="review-box">
                            <p class="review-content">Review content goes here.</p>
                            <p class="review-username"><strong>Username:</strong> User789</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>----------------->


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

$sql = "SELECT * FROM reviews_tbl WHERE Email = '$username' ORDER BY Review_ID DESC LIMIT 9";

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

      
    </body>
</html>

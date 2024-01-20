<?php
session_start();

include "con_db.php";

if (isset($_SESSION["Username"])) {
    $username = $_SESSION["Username"];
    $sql = "SELECT * FROM customers_tbl WHERE Email = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $userProfile = mysqli_fetch_assoc($result);
        $profileImage = isset($userProfile["Profile_pic"])
            ? "data:image;base64," . base64_encode($userProfile["Profile_pic"])
            : null;
    }
} else {
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
                max-width: auto;
                max-height: 900px; 
                margin: auto;
                margin-left: 200px;
                margin-right: 200px;
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                overflow-y: auto;
            }

            .button {
                display: flex;
                justify-content: space-between;
                margin-bottom: 30px;
            }

            #Back,
            #Logout {
                background-color: #007BFF;
                display: inline-block;
                font-weight: 400;
                text-align: center;
                vertical-align: middle;
                border: 1px solid transparent;
                width: 6rem;
                height: auto; 
                padding: 0.5rem 1rem; 
                font-size: 0.875rem;
                line-height: 1.5;
                border-radius: 0.25rem;
                color: white; 
            }

            #Back:hover,
            #Logout:hover {
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

            #photo-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                position: relative;
            }

            #photo {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                position: relative;
                overflow: hidden;
            }

            #profileLink-container {
                text-align: center;
            }

            #profileLink {
                text-decoration: none;
                color: inherit;
            }

            #photo img {
                max-width: 100%;
                max-height: 200px;
                margin: auto;
                border-radius: 50%;
            }

            #save-changes-container {
                margin-top: 10px;
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
                z-index: 1;
                overflow: hidden;
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

            #save-changes-container {
                margin-top: 10px;
                text-align: center; /* Center the button */
            }

            #save-changes-container input {
                margin: 0 auto; /* Center the button horizontally */
            }

            .profile-container {
                width: 40px;
                height: 40px;
                overflow: hidden;
                border-radius: 50%;
                margin-right: 10px;
            }

            .profile {
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 50%;
            }
        </style>



        <!----------------
          ACCOUNT SECTION
        ----------------->
        <div id="body">
            <div class="button">
        <a href="home.html" style="text-decoration: none; color: white;">
            <div id="Back" class="zoom-out-image2">Back</div>
        </a>
        <a href="login.php" style="text-decoration: none; color: white;">
            <div id="Logout" class="zoom-out-image2">Sign-out</div>
        </a>
    </div>

    <div id="profile">
    <form action="#" method="post" enctype="multipart/form-data">
    <div id="photo-container">
    <input type="file" id="fileInput" name="photo" style="display: none;" accept="image/*">
    <div id="profileLink-container">
        <a href="#" id="profileLink">
            <div id="photo" class="zoom-out-image">
                <div class="overlay" onclick="chooseFile()">
                    <span class="plus">+</span>
                </div>
                <label for="fileInput">
                    <img src="<?php echo $profileImage; ?>" id="profileImage" alt="Profile Photo">
                </label>
            </div>
        </a>
    </div>
</div>

    <!-- Save Changes Button -->
    <div id="save-changes-container">
        <input type="submit" name="insert" value="Save Changes" class="zoom-out-image2">
    </div>
</form>

<script>
    function chooseFile() {
        document.getElementById('fileInput').click();
    }

    function previewImage(input) {
        var profileImage = document.getElementById('profileImage');
        var file = input.files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function (e) {
                profileImage.src = e.target.result;
                profileImage.style.display = 'block';
            };

            reader.readAsDataURL(file);
        } else {
            profileImage.src = '#';
            profileImage.style.display = 'none';
        }
    }

    // Attach the previewImage function to the file input change event
    document.getElementById('fileInput').addEventListener('change', function () {
        previewImage(this);
    });

    function reloadPage() {
        location.reload();
    }
        document.getElementById('saveChangesForm').addEventListener('submit', function () {
        reloadPage();
    });
</script>



        <script>
            function chooseFile() {
        document.getElementById('fileInput').click();
    }
        </script>

        <?php if (isset($_POST["insert"])) {
            // Retrieve the uploaded file
            $photo = $_FILES["photo"]["tmp_name"];

            // Read the contents of the file
            $photoData = addslashes(file_get_contents($photo)); // Addslashes to escape special characters

            $sql = "UPDATE customers_tbl SET Profile_pic = '$photoData' WHERE Email = '$username'";

            $result = mysqli_query($conn, $sql);
            if ($result) {
            } else {
                echo "Error updating profile photo!";
            }
        } ?>
  
            <?php 
                if (isset($_SESSION["Username"])) {
                    $username = $_SESSION["Username"];
                    $sql = "SELECT * FROM customers_tbl WHERE Email = '$username'";
                    $result = mysqli_query($conn, $sql);
                    
                    if ($result && mysqli_num_rows($result) > 0) {
                        $userProfile = mysqli_fetch_assoc($result);
                        $profileImage = isset($userProfile["Profile_pic"]) ? 'data:image;base64,' . base64_encode($userProfile["Profile_pic"]) : null;
            
                        // Add this line to get the latest profile picture URL
                        $latestProfilePicURL = $profileImage;
                    }
                }  else {
                echo "user not login";
            } ?>

            <div id="info">
                <h3 class="mb-3"><b><?php echo $userProfile["First_name"] .
                    " " .
                    $userProfile["Last_name"] .
                    " " .
                    $userProfile["Mi"]; ?></b></h3>
                <a class="meta2"><?php echo $userProfile["Email"]; ?></a>
                <a class="meta"><?php echo $userProfile[
                    "Contact_number"
                ]; ?></a><br>
            </div>
        </div>


        <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mx-auto text-center mt-0">
                        <h2 class="section-heading"><strong>Testimonials</strong></h2>
                        <p class="mb-5">Our Customer Reviews.</p>
                    </div>
                </div>
  
                <div class="row">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "id_dtb");

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
                
                        // Fetch the latest profile picture URL for the testimonial author
                        $testimonialAuthorEmail = $row['Email'];
                        $testimonialAuthorProfilePic = getLatestProfilePicURL($conn, $testimonialAuthorEmail);
                
                        if (!empty($testimonialAuthorProfilePic)) {
                            echo '<div class="profile-container">';
                            echo '<img class="profile" src="' . $testimonialAuthorProfilePic . '" alt="Image">';
                            echo '</div>';
                        } else {
                            echo '<div class="profile-container">';
                            echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="25" height="25" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">';
                            echo '<circle cx="12" cy="7" r="4"/>';
                            echo '<path d="M12 11c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm6 11h-12"/>';
                            echo '</svg>';
                            echo '</div>';
                        }

                        echo '<div class="author-name">';

                        $Name = isset($row["name"]) ? $row["name"] : "Unknown";
                        echo '<span class="d-block"> ' . $Name . " </span>";

                        echo "</div>";
                        echo "</div>";
                        echo "</div>";

                        echo "</div>";
                        echo "</div>";

                        $reviewCounter++;
                    }

                    function getLatestProfilePicURL($conn, $email) {
                        $sql = "SELECT Profile_pic FROM customers_tbl WHERE Email = '$email'";
                        $result = mysqli_query($conn, $sql);
                
                        if ($result && mysqli_num_rows($result) > 0) {
                            $userProfile = mysqli_fetch_assoc($result);
                            return isset($userProfile["Profile_pic"]) ? 'data:image;base64,' . base64_encode($userProfile["Profile_pic"]) : '';
                        }
                
                        return '';
                    }

                    echo "</div>";

                    echo "</div>";

                    echo "</div>";

                    mysqli_free_result($result);

                    mysqli_close($conn);

                    
                    ?>
                </div>
            </div>
    </body>
</html>

<?php
$DBHost = "localhost";
$DBUser = "root";
$DBPass = "";
$DBName = "id_dtb";
$conn = mysqli_connect($DBHost, $DBUser, $DBPass, $DBName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start(); // Start session to get the current user's information if available

// Check if the form is submitted
if (isset($_SESSION['Username'])) {
    // Set the username from the form data
    $email = $_SESSION['Username'];

    // Fetch the user's information from the database
    $query = "SELECT * FROM customers_tbl WHERE Email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $customerId = $row['Email'];
        $Name = $row['First_name'].' '. $row['Last_name'];
        $lastName = $row['Last_name'];
        $profilePic = $row['Profile_pic'];

        // Set the username in the session for later use
        $_SESSION["Username"] = $email;

        // Sanitize user input to prevent SQL injection
        $review = mysqli_real_escape_string($conn, $_POST['review']);

        // Perform the database insertion with user ID, including the user's name and profile picture
        $sql = "INSERT INTO reviews_tbl (Customer_Comment,Email, name) 
                VALUES ( '$review','$email', '$Name')";

        if ($conn->query($sql) === TRUE) {
            // Redirect to the reviews page
            header("Location: reviews.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error fetching user information.";
    }
}
?>

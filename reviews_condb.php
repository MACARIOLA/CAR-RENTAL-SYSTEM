<?php
$DBHost = "localhost";
$DBUser = "root";
$DBPass = "";
$DBName = "id_dtb";
$conn = mysqli_connect($DBHost, $DBUser, $DBPass, $DBName);

if (!$conn) {
    die("Connection failed: " . mysqli_error());
}

session_start(); // Start session to get the current user's information if available

// Check if the form is submitted
if (isset($_POST['insertSub'])) {
    // Set the username from the form data
    $email = isset($_POST['Username']) ? $_POST['Username'] : '';

    // Fetch the user's information from the database
    $query = "SELECT Customer_ID, First_name, Last_name, Profile_pic FROM customers_tbl WHERE Username = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $customerId = $row['Customer_ID'];
        $firstName = $row['First_name'];
        $lastName = $row['Last_name'];
        $profilePic = $row['Profile_pic'];

        // Set the username in the session for later use
        $_SESSION["Customer_ID"] = $customerId;
        $_SESSION["Username"] = $email;

        // Sanitize user input to prevent SQL injection
        $review = mysqli_real_escape_string($conn, $_POST['review']);

        // Perform the database insertion with user ID, including the user's name and profile picture
        $sql = "INSERT INTO reviews_tbl (Customer_ID, Customer_Comment, First_name, Last_name, Profile_pic) 
                VALUES ('$customerId', '$review', '$firstName', '$lastName', '$profilePic')";

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

$customerId = isset($_SESSION['Customer_ID']) ? $_SESSION['Customer_ID'] : '';
$recentReviewQuery = "SELECT First_name, Last_name, Profile_pic 
                      FROM customers_tbl 
                      WHERE Customer_ID = '$customerId' 
                      ORDER BY Customer_ID DESC";
$recentReviewResult = mysqli_query($conn, $recentReviewQuery);

?>

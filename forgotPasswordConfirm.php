<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password Page</title>
    <link rel="stylesheet" href="./css/style2.css">
</head>
<body>
    <form method="POST" class="asm-form" id="frmForget" novalidate onsubmit="return validateForm(this)">
        <div class="asm-form__header">
            <br><br>
            <h1><center>Forget Password</center></h1>
        </div>
        <div class="asm-form__body">
            <div class="asm-form__inputbox">
                <svg class="asm-form__icon prepend" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="16 12 12 8 8 12"/></svg>
                <select class="asm-form__input" name="securityQuestion" id="securityQuestion" required>
                    <option value="" disabled selected>Select Security Question</option>
                    <option value="q1">What is your mother's maiden name?</option>
                    <option value="q2">In which city were you born?</option>
                    <!-- Add more options as needed -->
                </select>
                <label class="asm-form__inputlabel" for="securityQuestion"></label>
            </div>
            <div class="asm-form__inputbox">
                <input class="asm-form__input" type="text" name="Securitypassword" id="Securitypassword" required placeholder="Securitypassword">
                <label class="asm-form__inputlabel" for="Securitypassword">Securitypassword</label>
            </div>
            <?php
include('con_db.php');

if (isset($_POST['forgetSubmit'])) {
    // Assuming $em is set somewhere before this code
    $email = $_SESSION["Email"];

    // Check if the email exists in the database
    $check_query = "SELECT * FROM customers_tbl WHERE Email = '$email'";
    $check_result = mysqli_query($conn, $check_query);

    // Check if the query was successful
    if ($check_result) {
        // Check the number of rows
        if (mysqli_num_rows($check_result) > 0) {
            // Email exists, proceed to check security question and answer
            $securityQuestion = isset($_POST['securityQuestion']) ? $_POST['securityQuestion'] : '';
            $securityAnswerInput = isset($_POST['Securitypassword']) ? $_POST['Securitypassword'] : '';

            // Fetch the security answer from the database
            $row = mysqli_fetch_assoc($check_result);
            $securityAnswerDB = $row['Retrieval_password'];

            // Validate that the answers match
            if ($securityAnswerInput == $securityAnswerDB) {
                // Answers match, proceed
                // Redirect to another page (change 'Passwordreset.php' to the actual page)
                header("Location: Passwordreset.php");
                exit(); // Ensure that the script stops here
            } else {
                // Answers don't match
                echo "Error: Security answers do not match.";
            }
        } else {
            // Email doesn't exist
            echo "Error: Email not found in the database.";
        }
    } else {
        // Query failed
        echo "Error: " . mysqli_error($conn);
    }
}
?>
        </div>
        <div class="asm-form__footer">
            <button class="asm-form__btn" id="forgetSubmit" name="forgetSubmit">Send</button>
            <br>
        </div>
    </form>

    <script src="./js/script2.js"></script>
</body>
</html>

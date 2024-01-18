<?php
session_start();
include('con_db.php');

if (isset($_POST['forgetSubmit'])) {
    $email = $_POST['email'];
    
    // Check if the email exists in the database
    $check_query = "SELECT * FROM customers_tbl WHERE Email = '$email'";
    $check_result = mysqli_query($conn, $check_query);

    // Check if the query was successful
    if ($check_result) {
        // Check the number of rows
        if (mysqli_num_rows($check_result) > 0) {
            // Email exists, proceed with password reset confirmation
            // Add your password reset confirmation logic here
            $_SESSION["Email"]=$email;
            // Redirect to another page (change 'your_page.php' to the actual page)
            header("Location: forgotPasswordConfirm.php");
            exit(); // Ensure that the script stops here
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password Page</title>
    <link rel="stylesheet" href="./css/style2.css">
</head>
<body>
    <form method="POST"action="#" class="asm-form" id="frmForget" novalidate onsubmit="return validateForm(this)">
        <div class="asm-form__header">
            <br><br>
            <h1><center>Forget Password</center></h1>
        </div>
        <div class="asm-form__body">
            <div class="asm-form__inputbox">
                <svg class="asm-form__icon prepend" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"/></svg>
                <input class="asm-form__input validate" data-validation="regex" data-regex="^\S+@\S+\.\S+$" type="email" name="email" id="registerEmail" required placeholder="email" required>
                <label class="asm-form__inputlabel" for="registerEmail">Email</label>
                <div class="asm-form__error">Invalid Email</div>
            </div>
            <div class="asm-form__footer">
                <button class="asm-form__btn" id="forgetSubmit" name="forgetSubmit">Send</button>
                <br>
            </div>
        </div>
    </form>

    <script src="./js/script2.js"></script>
</body>
</html>

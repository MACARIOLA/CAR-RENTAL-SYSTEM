<?php
session_start();
include('con_db.php');

if (isset($_POST['updatePassword'])) {
    $email = isset($_SESSION['Email']) ? $_SESSION['Email'] : '';
    $newPassword = isset($_POST['newPassword']) ? $_POST['newPassword'] : '';

    // Update the password in the database without hashing
    $update_query = "UPDATE customers_tbl SET Password = '$newPassword' WHERE Email = '$email'";
    $update_result = mysqli_query($conn, $update_query);

    // Check if the query was successful
    if ($update_result) {
        echo "Password updated successfully!";
        // Optionally, you can redirect to another page after updating
        header("Location: Login.php");
        exit();
    } else {
        echo "Error updating password: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password Page</title>
    <link rel="stylesheet" href="./css/style2.css">
</head>
<body>
    <form method="POST" action="#" class="asm-form" id="frmResetPassword" novalidate onsubmit="return validateForm(this)">
        <div class="asm-form__header">
            <br><br>
            <h1><center>Reset Password</center></h1>
        </div>
        <div class="asm-form__body">
            <div class="asm-form__inputbox">
                <svg class="asm-form__icon prepend" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="16 12 12 8 8 12"/></svg>
                <input class="asm-form__input" type="password" name="newPassword" id="newPassword" required placeholder="New Password">
                <label class="asm-form__inputlabel" for="newPassword">New Password</label>
            </div>
        </div>
        <div class="asm-form__footer">
            <button class="asm-form__btn" id="updatePassword" name="updatePassword">Update Password</button>
            <br>
        </div>
    </form>

    <script src="./js/script2.js"></script>
</body>
</html>
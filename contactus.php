<?php
include 'config.php';

if(isset($_POST['send'])){
    $sql = "INSERT INTO contactus_tbl (
        `first_name`,
        `last_name`,
        `email_address`,
        `message_text`)
        VALUES (
            '$_POST[firstn]',
            '$_POST[lastn]',
            '$_POST[emailaddc]',
            '$_POST[message]')";

    $result = mysqli_query($conn, $sql);
}

?>
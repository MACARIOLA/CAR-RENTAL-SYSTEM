<?php 
$dbhost = "localhost";
$username = "root";
$password = "";
$dbname = "id_dtb";

$conn = mysqli_connect($dbhost, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed" . $conn->connect_error);
}
?>
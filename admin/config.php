<?php
$host = "database-1.c7cgswusg79x.ap-south-1.rds.amazonaws.com";
$user = "admin"; // Default XAMPP user
$pass = "pratham"; // Leave empty for XAMPP
$db = "gym";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>


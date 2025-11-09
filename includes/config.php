<?php
// index.php - Display package details on the index page

// Database connection
$servername = "database-1.c7cgswusg79x.ap-south-1.rds.amazonaws.com";
$username = "admin";
$password = "pratham123";
$dbname = "gym";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



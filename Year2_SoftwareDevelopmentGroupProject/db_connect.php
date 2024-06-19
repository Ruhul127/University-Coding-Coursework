<?php
// db_connect.php

$servername = "localhost";
$username = "kawakebd_gp_database";//root
$password = "SXV=5qOnm!pw"; // ""
$dbname = "kawakebd_gp_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//// echo "Connected successfully";
?>

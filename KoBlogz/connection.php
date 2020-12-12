<?php

$servername = "localhost";
$username = "root";
$password = "";
// $name = "Aby";

// diubah tergantung setup database
$database = "test";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// buat testing
// echo "Connected successfully";
?>
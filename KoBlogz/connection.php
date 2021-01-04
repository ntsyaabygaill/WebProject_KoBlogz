<?php

 $servername = "127.0.0.1:3306";
 $username = "u652632623_aby_db";
 $password = "Tekfo-eclair02";
 $database = "u652632623_aby_db";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// buat testing
// echo "Connected successfully";
?>


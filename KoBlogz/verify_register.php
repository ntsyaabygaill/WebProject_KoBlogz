<?php

include("connection.php");
session_start();

$name = $_POST["fullname"];
$email = $_POST["email"];
$password = $_POST["password"];
$password_hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO user (name,email,password) VALUES ('$name','$email','$password_hash')";
// ngecek apakah syntax sudah benar 
// die($sql);
if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header("Location:signin.php");
    $_SESSION["user"] = $name;
    // echo $_SESSION["user"];
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>
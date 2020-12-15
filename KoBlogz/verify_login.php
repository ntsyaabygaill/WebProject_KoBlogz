<?php

include("connection.php");

$email = $_POST["email"];
$password = $_POST["password"];

$hash = password_hash($password, PASSWORD_DEFAULT);

if (!password_verify($password, $hash)) {
    echo 'Invalid password.';
    header("Location:signin.php");
   

header("Location:home.php");
}
?>
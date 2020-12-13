<?php

include("connection.php");

session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//$active = $row['active'];
$count = mysqli_num_rows($result);

if($count == 1) {
    $_SESSION['user'] = $email;
    header("location:home.php");
}else {
    $error = "Your Login Name or Password is invalid";
}
?>

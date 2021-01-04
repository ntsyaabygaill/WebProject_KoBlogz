<?php

include("connection.php");
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username = '$username'" ;
$yolo = mysqli_query($conn,$sql);
$yili = mysqli_fetch_assoc($yolo);

if (!password_verify($password, $yili['password'])) {
    echo 'Invalid password';
    header("Location:signin.php");
}
else {
	header("Location:home.php");
	$_SESSION['user'] = $username;
}
?>

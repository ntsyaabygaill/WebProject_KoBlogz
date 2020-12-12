<?php

//ini php buat cek user password di database

//kalau berhasil cek ntar header nya ke home.php
//kalau gagal cek ntar header nya ke signin.php
include("connection.php");
session_start();

if ($_SERVER['REQUEST_METHOD']=='POST'){

$username = $_POST['username'];
$password = $_POST['password'];
require_once('connection.php');

$sql= "SELECT * FROM user WHERE email = '$email' AND password = '$password_hash' ";
$result = mysqli_query($con,$sql);
$check = mysqli_fetch_array($result);

if(isset($check)){
header("Location:home.php");
}else{
header("Location:signin.php");;
}
}
?>

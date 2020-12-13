<?php

//ini php buat cek user password di database

//kalau berhasil cek ntar header nya ke home.php
//kalau gagal cek ntar header nya ke signin.php
include("connection.php");


$email = $_POST['email'];
$password = $_POST['password'];


$sql= "SELECT * FROM user WHERE email = '$email' AND password = '$password' ";
$result = mysqli_query

?>

<?php
session_start(); 
include "connectDB.php";

$username = $_POST["username"];
$password = $_POST["password"];

$query = mysqli_query($connect, "SELECT * FROM user WHERE username='$username' and password='$password'");

$jumlahData = mysqli_num_rows($query);
if($jumlahData > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";

    header("location:afterLogin/beranda.php");
}else{
    header("location:login.php");
}
?>
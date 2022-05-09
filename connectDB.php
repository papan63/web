<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "ruang_siswa";

$connect = mysqli_connect($server, $username, $password);
mysqli_select_db($connect, $database) or die("Database " . $database . " Tidak di temukan");

// echo "Koneksi database berhasil";
?>

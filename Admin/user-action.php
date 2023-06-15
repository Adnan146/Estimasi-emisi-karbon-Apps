<?php
// koneksi database
include 'config.php';

// menangkap data yang di kirim dari form
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];

// menginput data ke database
mysqli_query($conn, "insert into tb_user values('','$name','$username','$email','$password','$level')");

// mengalihkan halaman kembali ke index.php
header("location:user.php");

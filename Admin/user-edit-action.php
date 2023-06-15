<?php
// koneksi database
include 'config.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];

// update data ke database
mysqli_query($conn, "update tb_user set name='$name', username='$username', email='$email', password='$password', link='$link' where id'$id'");

// mengalihkan halaman kembali ke index.php
header("location:user.php");

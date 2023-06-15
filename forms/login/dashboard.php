<?php
include("config.php");
include("firebaseRDB.php");

if(!isset($_SESSION['user'])){
    header("location: login.php");
}else{
    echo "Hello <b>{$_SESSION['user']['name']}</b>, welcome to website<br>";
    echo "<a href='logout.php'>logout</a>";
}
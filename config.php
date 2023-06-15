<?php
session_start();
$dbHost     = "sql12.freesqldatabase.com";
$dbUsername = "sql12625921";
$dbPassword = "5rbGKb8NYs";
$dbName     = "sql12625921";

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

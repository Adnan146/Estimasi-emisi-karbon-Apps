<?php
include("config_fb.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);

$insert = $db->insert("konten", [
   "title"     => $_POST['title'],
   "image" => $_POST['image'],
   "deskripsi"      => $_POST['deskripsi'],
   "date"    => $_POST['date'],
   "link"    => $_POST['link']
]);
header("Location:artikel.php");


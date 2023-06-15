<?php
include("config_fb.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_POST['id'];
$update = $db->update("konten", $id, [
   "title"     => $_POST['title'],
   "image" => $_POST['image'],
   "deskripsi"      => $_POST['deskripsi'],
   "date"    => $_POST['date'],
   "link"    => $_POST['link']
]);
header("Location:artikel.php");
?>
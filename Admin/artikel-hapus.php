<?php
include("config_fb.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
if($id != ""){
   $delete = $db->delete("konten", $id);
   header("Location:artikel.php");
}

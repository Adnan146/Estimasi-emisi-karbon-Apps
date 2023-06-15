<?php
include("config_fb.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
if($id != ""){
   $delete = $db->delete("aksi", $id);
   header("Location:aksi.php");
}

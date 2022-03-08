<?php
require_once "db.php";
if(isset($_GET['faz'])) $sql = "DELETE FROM `fa` WHERE id=".$_GET['faz'];
$stmt=$db->query($sql);
if($stmt){
    $string="Sikeresen töröltük a(z) ".$_GET['faz']." azonosítójú fát!";
    echo $string;
}else{
    $string="Nem sikerült törölnünk a(z) ".$_GET['faz']." azonosítójú fát!";
    echo $string;
}

?>
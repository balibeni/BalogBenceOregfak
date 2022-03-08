<?php
require_once 'db.php';

$sql="SELECT id,faj,count(faj) AS darab FROM fa GROUP BY faj ORDER BY darab DESC";

$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());

?>



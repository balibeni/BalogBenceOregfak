<?php
    require_once 'db.php';
    if(isset($_GET['megye']))
    $sql = "SELECT fa.id as id,faj,kormeret,telepules FROM fa INNER JOIN megyek ON fa.megyeid = megyek.id where megyek.nev='".$_GET['megye']."' ";
    $stmt = $db -> query($sql);
        echo json_encode($stmt -> fetchAll());






?>
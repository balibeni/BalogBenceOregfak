<?php
    
    require_once 'db.php';
    
    $sql="SELECT nev from megyek group by nev order by nev";
    
    $stmt=$db->query($sql);
    echo json_encode($stmt->fetchAll());
    

    
    
    


?>
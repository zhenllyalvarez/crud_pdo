<?php 
    require_once("backend.php");

    $data = new backend(null, null, null, null);
    $id = $_POST['id'] ?? null;
    $fetchOne = $data->fetchOne($id);

    
?>
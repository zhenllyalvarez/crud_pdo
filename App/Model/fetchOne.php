<?php 
    include("../Controller/UserController.php");

    $data = new UserController(null, null, null, null);
    $id = $_POST['id'] ?? null;
    $fetchOne = $data->fetchOne($id);

    
?>
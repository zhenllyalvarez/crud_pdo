<?php
    include("../UserController.php");
    
    if(isset($_POST['id'])) {
        try {
            $id = $_POST['id'];
            $data = new UserController($id, null, null, null);
            $result = $data->deleteSocial($id);
        } catch (PDOException $e) {
            return 'Error: ' . $e->getMessage();
        }
    } else {
        echo "ID parameter is missing. test";
    }
?>
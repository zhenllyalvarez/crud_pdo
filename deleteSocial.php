<?php
    require_once('backend.php');
    
    if(isset($_POST['id'])) {
        try {
            $id = $_POST['id'];
            $data = new backend($id, null, null, null);
            $result = $data->deleteSocial($id);
        } catch (PDOException $e) {
            return 'Error: ' . $e->getMessage();
        }
    } else {
        echo "ID parameter is missing. test";
    }
?>
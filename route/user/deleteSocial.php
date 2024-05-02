<?php
    require($_SERVER['DOCUMENT_ROOT'] . "/crud_pdo/App/Controller/UserController.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // if(isset($_POST['id'])) {
            try {
                $id = $_POST['delete'];

                $data = new UserController();
                $result = $data->deleteData($id);

                if ($result == 200) {
                    header("Location: ../../views/dashboard.php");
                } else {
                    echo $result; 
                }
                
            } catch (PDOException $e) {
                return 'Error: ' . $e->getMessage();
            }
        } else {
            echo "ID parameter is missing. test";
        }
    // }
?>
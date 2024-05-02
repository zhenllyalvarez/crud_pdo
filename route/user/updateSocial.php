<?php
require($_SERVER['DOCUMENT_ROOT'] . "/crud_pdo/App/Controller/UserController.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $social = $_POST['socialmedia'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $user = new UserController(); 
    $result = $user->updateData($social, $email, $password, $id);

    if($result == 200) {
        header("Location: ../../views/dashboard.php");
    } else {
        echo $result;
    }
}
?>
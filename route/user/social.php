<?php

require($_SERVER['DOCUMENT_ROOT'] . "/crud_pdo/App/Controller/UserController.php");

//Insert Data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $social = $_POST['socialmedia'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new UserController(); 

    $result = $user->insertData($social, $email, $password);

    if ($result == 200) {
        header("Location: ../../../views/dashboard.php");
    } else {
        echo $result; 
    }
}

$user = new UserController();

$allsocialdata = $user->getAllData();
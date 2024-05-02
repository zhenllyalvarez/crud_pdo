<?php
    require($_SERVER['DOCUMENT_ROOT'] . "/crud_pdo/App/Controller/UserController.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $con_password = $_POST['con_password'];

        $user = new UserController();
        // $checkpassword = $user->checkPassword($password, $con_password);
        $result = $user->insertUser($fullname, $email, $password);

        if ($result == 200) {
            // return "<div class='alert alert-success'>Registered successfully.</div>";
            header("location: ../../login.php");
        } else {
            echo $result; 
        }

        // echo $fullname;
        // echo $email;
        // echo $password;
        // echo $con_password;
        
    } catch (PDOException $err) {
        echo 'Register error' . $err->getMessage();
    }
}
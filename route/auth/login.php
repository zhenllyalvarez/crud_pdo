<?php
    require($_SERVER['DOCUMENT_ROOT'] . "/crud_pdo/App/Controller/UserController.php");
    session_start();

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        try{
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new UserController();
        $result = $user->login($email, $password);

        if($result == 200) {
            $_SESSION['SESSION_EMAIL'] = $email;
            header("location: ../../views/Dashboard.php");
        } else {
            echo $result;
        }
    }
     catch (PDOException $err) {
        echo "login Failed" . $err->getMessage();
    }
}
?>
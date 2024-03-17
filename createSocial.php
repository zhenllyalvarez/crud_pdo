<?php
require_once("backend.php");
    try {
        $id = null;
        $socialmedia = null;
        $email = null;
        $password = null;

        $sc = new backend($id, $socialmedia, $email, $password);
    } catch (PDOException $e) {
        echo 'Error initializing $sc: ' . $e->getMessage();
    }

    if (isset($_POST['save'])) {
        try {
            $sc->setSocialMedia($_POST['socialmedia']);
            $sc->setEmail($_POST['email']);
            $sc->setPassword($_POST['password']);
            echo $sc;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
?>
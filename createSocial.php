<?php
require_once("backend.php");
    $id = $_POST['id'] ?? null;
    $socialmedia = $_POST['socialmedia'] ?? null;
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;
    
    try {
        $sc = new backend($id, $socialmedia, $email, $password);
        $sc->insertData();
    } catch (PDOException $e) {
        return 'Error initializing $sc: ' . $e->getMessage();
    }

    if (isset($_POST['save'])) {
        try {
            $sc->setSocialMedia($_POST['socialmedia']);
            $sc->setEmail($_POST['email']);
            $sc->setPassword($_POST['password']);
        } catch (PDOException $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
?>
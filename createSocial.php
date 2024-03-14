<?php

// Assuming $sc is an instance of some class
try {
    require_once("backend.php");
    $sc = new backend($id, $socialmedia, $email, $password); // Instantiate your social class here
    // Other initialization logic (e.g., database connection, configuration) goes here
} catch (Exception $e) {
    echo 'Error initializing $sc: ' . $e->getMessage();
    // Handle the error appropriately (logging, user feedback, etc.)
}

// Now you can use $sc safely
if (isset($_POST['save'])) {
    try {
        $sc->setID($_POST['id']);
        $sc->setSocialMedia($_POST['socialmedia']);
        $sc->setEmail($_POST['email']);
        $sc->setPassword($_POST['password']);
        // Additional logic (e.g., saving to the database) goes here
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
        // Handle the error appropriately (logging, user feedback, etc.)
    }
}
?>
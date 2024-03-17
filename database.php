<?php
    define("DB_TYPE", "mysql");
    define("DB_HOST", "localhost");
    define("DB_NAME", "socialmedi");
    define("DB_PWD", "");
    define("DB_USER", "root");

    try {
        $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PWD);
        // echo 'Connected successfully!';
    } catch (PDOException $e) {
        return 'Connection failed: ' . $e->getMessage();
    }
?>
<?php
    define("DB_TYPE", "mysql");
    define("DB_HOST", "localhost");
    define("DB_NAME", "socialmedi");
    define("DB_PWD", "");
    define("DB_USER", "root");

    try {
        $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PWD);

        // to check if the database is already connected
        // if($pdo){
        //     echo "Connected to database";
        // } else {
        //     echo "Not connected with database";
        // }
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
?>
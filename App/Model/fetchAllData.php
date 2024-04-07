<?php
    include("../App/Controller/UserController.php");

    $data = new UserController(null, null, null, null);
    $allData = $data->fetchAll();
?>
<?php
    require("user_controller.php");
    require("../database/database.php");

    $credentials= validateRegistration($_POST);

    createUser($credentials,$connection);
    header('Location: ../views/home.php');

    function validateRegistration($datos) {
        $user=$datos["username"];
        $password=$datos["password"];
        $credentials=array($user,$password);
        return $credentials;
    }
?>
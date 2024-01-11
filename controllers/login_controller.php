<?php
    require("../database/database.php");
    require("user_controller.php");

    $credentials= validateLogin($_POST);

    $datos=loginUser($credentials,$connection);

    if($datos!= false) {
        session_start();
        $_SESSION["username"]=$datos["username"];
        $_SESSION["password"]=$datos["password"];

        header('Location: ../views/home.php');
    } else {
        header('Location: ../views/login.php');
    }
    


    function validateLogin($datos) {
        $user=$datos["username"];
        $password=$datos["password"];
        $credentials=array($user,$password);
        return $credentials;
    }
?>
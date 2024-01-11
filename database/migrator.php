<?php
    require('database.php');
    require('migrations/migrations_1.php');


    $tablas=array($tabla_fiambres,$table_users);
    
    //Creating tables
    foreach ($tablas as $tabla) {
        mysqli_query($connection,$tabla);
    }
 

    header('Location: seeder.php');
?>


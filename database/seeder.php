<?php
    require('database.php');
    require('seeds/seeds_1.php');
    
    $fiambres = array($tabla_paleta);

    foreach ($fiambres as $fiambre) {
        mysqli_query($connection,$fiambre);
    }

    header('Location: ../views/home.php');
?>
<?php
    $tabla_fiambres = "CREATE TABLE fiambres (
        id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50),
        marca VARCHAR(50),
        precio FLOAT,
        peso FLOAT,
        img VARCHAR(500),
        link VARCHAR(500),
        client VARCHAR(250),
        created_at TIMESTAMP NULL,
        updated_at TIMESTAMP NULL 
    )";
    

$table_users="CREATE TABLE users (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(150) UNIQUE,
    password VARCHAR(550),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL  
)";



?>
<?php

    require_once './DB/db-config.php';

    $host = constant("DB_HOST");
    $user = constant("DB_USER");
    $password = constant("DB_PASSWORD");
    $database = constant("DB_DATABASE");

    try{
        $dsn = "mysql:host=$host;dbname=$database";
        $conn = new PDO($dsn, $user, $password);
    } catch (PDOException $e){
        echo $e->getMessage();
    }
?>
<?php
    session_start();

    require "../pagina/header.php";

    $server = 'localhost';

    $userName = 'root';

    $password = '';

    $dataBase = 'tiendadeportiva';

    try {
        $conn = new PDO("mysql:host=$server;dbname=$dataBase;",$userName, $password);
    } catch (PDOException $error){
        die('Connection failed: '.$error->getMessage());
    }
?>
<?php
    $server = 'localhost';

    $userName = 'root';

    $password = '';

    $dataBase = 'tiendadeportiva';

    try {
        $conn = new PDO("mysql:host=localhost;dbname=tiendadeportiva", $userName, $password);
    echo "Conexión Correcta";
    } catch (PDOException $error){
        echo "No se puede conectar". $error->getMessage();
    }

    include("conexion.php");
    ?>
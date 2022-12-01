<?php
    $server = 'localhost';

    $userName = 'root';

    $password = '';

    $dataBase = 'tiendadeportiva';

    try {
        $conn = new PDO("mysql:host=$server;dbname=$dataBase;",$userName, $password);
    } catch (PDOException $error){
        die('Connection failed: '.$error->getMessage());
    }


    // class DB {
    //     protected static $pdo;
    //     private function __construct(){
    //         try{
    //             self::$pdo = new PDO(    
    //                 'mysql:host=localhost;dbname=tiendadeportiva','root','');
    //                 self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //                 self::$pdo->setAttribute (PDO::ATTR_PERSISTENT, false);
    //         } catch (PDOException $e){
    //             echo "No hemos podido conectar con a base de datos.";
    //             exit;
    //         }
    //     }
    //     public static function getConn(){
    //         if(!self::$pdo){
    //             new DB();
    //         }
    //         return self::$pdo;

    //     }

    // }


?>
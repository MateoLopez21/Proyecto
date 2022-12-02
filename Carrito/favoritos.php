<?php
    session_start();


    //Aqui empieza el carrito
        if(isset($_SESSION['carrito'])){
            $favoritos=$_SESSION['carrito'];
            if(isset($_POST['titulo'])){
                $titulo=$_POST['titulo'];
                $precio=$_POST['precio'];
                $cantidad=$_POST['cantidad'];
                $num=0;
                $favoritos[]=array("titulo"=>$titulo,"precio"=>$precio,"cantidad"=>$cantidad);

            }
        }else{
            $titulo=$_POST['titulo'];
            $precio=$_POST['precio'];
            $cantidad=$_POST['cantidad'];
            $favoritos[]=array("titulo"=>$titulo,"precio"=>$precio,"cantidad"=>$cantidad);
        }

    $_SESSION['carrito']=$favoritos;


    header("Location: ".$_SERVER['HTTP_REFER']."");
?>
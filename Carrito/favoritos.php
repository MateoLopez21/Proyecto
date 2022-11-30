<?php
    session_start();


    //Aquie mpieza el carrito
    if(isset($_SESSION['carrito']) || isset($_POST['titulo'])){
        if(isset($_SESSION['carrito'])){
            $favoritos=$_SESSION['carrito'];
            if(isset($_POST['titulo'])){
                $titulo=$_POST['titulo'];
                $precio=$_POST['precio'];
                $cantidad=$_POST['cantidad'];
                $ref=$_POST['ref'];
                $donde=-1;
                if($donde != -1){
                    $cuando=$favoritos[$donde]['cantidad'] + $cantidad;
                    $favoritos[$donde]=array("titulo"=>$titulo,"precio"=>$precio,"cantidad"=>$cantidad,"ref"=>$ref);
                } else{
                    $favoritos[]=array("titulo"=>$titulo,"precio"=>$precio,"cantidad"=>$cantidad,"ref"=>$ref);
                }
            }
        }else{
            $titulo=$_POST['titulo'];
            $precio=$_POST['precio'];
            $cantidad=$_POST['cantidad'];
            $ref=$_POST['ref'];
            $favoritos[]=array("titulo"=>$titulo,"precio"=>$precio,"cantidad"=>$cantidad,"ref"=>$ref);
        }

        $_SESSION['carrito']=$favoritos;
    }

    header("Location: ".$_SERVER['HTTP_REFER']."");
?>
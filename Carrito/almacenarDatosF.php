<?php
    if(isset($_POST['pago'])){
        if( $_POST["submit"] ){
        foreach($_POST as $campo => $valor) {
            $_SESSION['factura'][$campo] = $valor;
        }
        }
    }

?>
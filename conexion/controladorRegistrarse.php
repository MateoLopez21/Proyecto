<?php
include("./conexionBD.php");

if (!empty($_POST['registro'])){
    if (empty($_POST['documento']) or empty($_POST['nombres']) or empty($_POST['apellidos']) or empty($_POST['direccion']) or empty($_POST['correo']) or empty($_POST['celular']) or empty($_POST['contrasena'])){
        echo '<div class="alerta">Uno de los campos esta vacío</div>';
    }else{
        $documento=$_POST["documento"];
        $nombres=$_POST["nombre"];
        $apellidos=$_POST["apellidos"];
        $direccion=$_POST["direccion"];
        $correo=$_POST["correo"];
        $celular=$_POST["celular"];
        $contrasena=$_POST["contrasena"];
        $sql=$conexion->query(" INSERT INTO usuario (documento,nombres,apellidos,direccion,correo,celular,contrasena)values($documento,'$nombres','$apellidos',' $direccion','$correo',$celular,'$contrasena')");
        
        if ($sql==1) {
            echo "<div class='success'>El Usuario Se Ha Registrado Correctamente</div>";
        } else {
            echo "<div class='alerta'>Error Al Registrar</div>";

        }
        
    }
}


?>
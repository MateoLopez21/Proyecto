<?php
    $pdo = new PDO('mysql:host=localhost;dbname=tiendadeportiva','root','');
    $message = '';
    
    if (!empty($_POST['registro'])){
        if (empty($_POST['documento']) or empty($_POST['nombres']) or empty($_POST['apellidos']) or empty($_POST['direccion']) or empty($_POST['correo']) or empty($_POST['celular']) or empty($_POST['contrasena'])){
            echo '<div class="alerta">Uno de los campos esta vacío</div>';
        }else{
            $documento=$_POST['documento'];
            $nombres=$_POST['nombres'];
            $apellidos=$_POST['apellidos'];
            $direccion=$_POST['direccion'];
            $correo=$_POST['correo'];
            $celular=$_POST['celular'];
            $contrasena=$_POST['contrasena'];    
            $insertar = $pdo->prepare("INSERT INTO usuario (documento,nombres,apellidos,direccion,correo,celular,clave) VALUES ($documento,'$nombres','$apellidos','$direccion','$correo',celular,'$contrasena')");

            
            if ($insertar->execute()) {
                echo "Usuario no registrado";
            } else {
                echo " Error al registrar";
            }
            

            // $consulta->bindParam(':documento',$documento);
            // $consulta->bindParam(':nombres',$nombres);
            // $consulta->bindParam(':apellidos',$apellidos);
            // $consulta->bindParam(':direccion',$direccion);
            // $consulta->bindParam(':correo',$correo);
            // $consulta->bindParam(':celular',$celular);
            // $consulta->bindParam(':contrasena',$contrasena);

            // if ($consulta->execute()){
            //     $message = "Datos Guardados Correctamente";
            // } else{
            //     $message = "No Se Ha Logrado Guardar Los Datos...";
            // }
        }
    }
?>
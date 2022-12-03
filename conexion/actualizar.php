<?php
    session_start();
    require '../conexion/bd.php';
    $message = "";
    if (isset($_POST['cambios'])){
        $usuario = $_POST['usuario'];
        $usuario = htmlentities($usuario);
        $email = $_POST['email'];
        $email = htmlentities($email);
        $direccion = $_POST['direccion'];
        $direccion = htmlentities($direccion);
        $telefono = $_POST['telefono'];
        $telefono = htmlentities($telefono);
        $pwd = $_POST['password'];
        $pwd = htmlentities($pwd);

        $queryUpdate = $conn->prepare("UPDATE usuario SET usuario = :usuario, email = :email, direccion = :direccion, telefono = :telefono, password = :password WHERE idUsuario = :id");
        $stmt = $queryUpdate->execute(['id' => $_SESSION['user_id'],
                                        'usuario' => $usuario,
                                        'email' => $email,
                                        'direccion' => $direccion,
                                        'telefono' => $telefono,
                                        'password' => $pwd]);
        
        if ($stmt) {
            $message = "Usuario actualizado con éxito";
            echo "<script> alert('".$message."')
            window.location='../pagina/index.php'
            </script>";
        }else{
            $message = "Hubo un error al actualizar los datos";
            echo "<script> alert('".$message."')
            </script>";
        }


    }
<?php
    session_start();
    require '../conexion/bd.php';
    $message = "";
    if (isset($_POST['cambios'])){
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $pwd = $_POST['password'];

        $queryUpdate = $conn->prepare("UPDATE usuario SET usuario = :usuario, email = :email, direccion = :direccion, telefono = :telefono, password = :password WHERE idUsuario = :id");
        $stmt = $queryUpdate->execute(['id' => $_SESSION['user_id'],
                                        'usuario' => $usuario,
                                        'email' => $email,
                                        'direccion' => $direccion,
                                        'telefono' => $telefono,
                                        'password' => $pwd]);
        
        if ($stmt) {
            $message = "Usuario actualizado con éxito";
            header('Location: ../pagina/index.php');
        }else{
            $message = "Hubo un error al actualizar los datos";
        }


    }
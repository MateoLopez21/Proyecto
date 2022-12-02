<?php
    require("../conexion/bd.php");
    $message = "";
    if (!empty($_POST['usuario']) && !empty($_POST['password'])){
        $usuario = $_POST['usuario'];
        $querySelect = $conn->prepare("SELECT * FROM usuario WHERE usuario = :usuario");
        $execute = $querySelect->execute(['usuario' => $usuario]);
        $results = $querySelect->fetch();
        if(!empty($results)){
            if($results['usuario'] == $_POST['usuario']){
                $message = "El usuario ya existe.";
            }
        }else{
                $sql = "INSERT INTO usuario (usuario, email, direccion, telefono, password ) VALUES (:usuario, :email, :direccion, :telefono, :password);";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':usuario', $_POST['usuario']);
                $stmt->bindParam(':email', $_POST['email']);
                $stmt->bindParam(':direccion', $_POST['direccion']);
                $stmt->bindParam(':telefono', $_POST['telefono']);
                $stmt->bindParam(':password', $_POST['password']);

                if ($stmt->execute()) {
                    $message = "Usuario creado con éxito";

                    header('Location: ./iniciarSesion.php');
                } else {
                    $message = "Lo sentimos, error al registrarse.";
                }
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f57beba7b3.js" crossorigin="anonymous"></script>
    <title>Registrarse</title>
</head>
<body>
    <?php require './header.php' ?>

        
    


    <div class="container">
        <form action="registrarse.php" method="post" class=" d-block text-center" was-validated>
                <?php
                if (!empty($message)) {
                    echo "<p class='alert'> $message </p>";
                }
                ?> 
            <h2 class="titulo">Regristrarse</h2>
            <div>
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="usuario" autocomplete="off" required> 
                <label for="usuario" class="form-label">Correlo Electrónico</label> 
                <input type="email" class="form-control" name="email" autocomplete="off" required> 
                <label for="usuario" class="form-label">Direccion</label> 
                <input type="text" class="form-control" name="direccion" autocomplete="off" required> 
                <label for="usuario" class="form-label">Teléfono</label> 
                <input type="text" class="form-control" name="telefono" autocomplete="off" required> 
                <label for="password" class="form-label">Contraseña</label> 
                <input type="password" class="form-control" name="password" autocomplete="off" required> 
                <input type="submit" value="Crear Cuenta" class="btn btn-primary" name="registro" >
            </div>
        </form>
    </div>    

    <?php require './footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
    crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
</body>
</html>
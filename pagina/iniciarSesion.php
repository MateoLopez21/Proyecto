<?php
    session_start();

    if (isset($_SESSION['user_id'])) {
        echo "<script> alert('Ya iniciaste sesión, vuelve al inicio');
        window.location='../pagina/iniciarSesion.php'</script>";
    }

    require '../conexion/bd.php';

    if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
        $records = $conn->prepare('SELECT idUsuario, usuario, password FROM usuario WHERE usuario=:usuario;');
        $records->bindParam(':usuario', $_POST['usuario']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = "";
        if (!empty($results) && $results['password'] == $_POST['password']) {
            // Almaenar el id del usuario como user_id
            $_SESSION['user_id'] = $results['idUsuario'];

            header('Location:  ./index.php');
        } else {
            $message = "Error, Nombre de Usuario y/o contraseña inorrectos.";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous">  
    <script src="https://kit.fontawesome.com/f57beba7b3.js" crossorigin="anonymous"></script>
    <title>Iniciar Sesión</title>
</head>
<body>
    <?php require './header.php';
    ?>

    <div class="container">
        <div class="formulario">
            <form action="iniciarSesion.php" method="post" class=" mx-auto d-block text-center">
                <?php 
                    if (!empty($message)) {
                        echo "<p> $message </p>";
                    }
                    
                ?>
                <h2>Iniciar Sesión</h2>
                <label for="usuario" class="form-label">Nombre de Usuario</label> <br>
                <input type="text" class="form-control" name="usuario"> <br>
                <label for="" class="form-label">Contraseña</label> <br>
                <input type="password" name="password" class="form-control"> <br>
                <input type="submit" value="Iniciar Sesión" class="btn btn-primary" > <br>
                <input type="button" value="Crear Cuenta" class="btn btn-primary" onclick="window.location='./registrarse.php'">
            </form>
        </div>
    </div>


    <?php require './footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
    crossorigin="anonymous"></script>
</body>
</html>

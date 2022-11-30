<?php

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
        <div method="POST" class="formulario">
            <form action="" method="post" class=" mx-auto d-block text-center">
                <label for="" class="form-label">Correo Electronico</label> <br>
                <input type="text" class="form-control"> <br>
                <label for="" class="form-label">Contraseña</label> <br>
                <input type="password" class="form-control"> <br>
                <input type="submit" value="Iniciar Sesión" class="btn btn-primary" >
                <input type="button" value="Crear Cuenta" class="btn btn-primary" onclick="window.location='./registrarse.php'">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
    crossorigin="anonymous"></script>
</body>
</html>

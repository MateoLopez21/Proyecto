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
        <form action="" method="post" class=" d-block text-center">
            <h2 class="titulo">Regristrar</h2>
            <div>
                <label for="" class="form-label">Número de Documento</label> <br>
                <input type="number" class="form-control" name="documento" > <br>
                <label for="" class="form-label">Nombres</label> <br>
                <input type="text" class="form-control" name="nombres" > <br>
                <label for="" class="form-label">Apellidos</label> <br>
                <input type="text" class="form-control" name="apellidos" > <br>
                <label for="" class="form-label">Dirección</label> <br>
                <input type="text" class="form-control" name="direccion" > <br>
                <label for="" class="form-label">Correo Electronico</label> <br>
                <input type="email" class="form-control" name="correo" include="@" > <br>
                <label for="" class="form-label">Celular</label> <br>
                <input type="number" class="form-control" name="celular"> <br>
                <label for="" class="form-label">Contraseña</label> <br>
                <input type="password" class="form-control" name="contrasena" > <br>
                <input type="submit" value="Crear Cuenta" class="btn btn-primary" onclick="window.location='./registrarse.php'" name="registro" >
            </div>
        </form>
        <?php
            // if(isset($_POST['documento'])&& isset($_POST['nombres'])&& isset($_POST['apellidos'])&& isset($_POST['direccion'])&& isset($_POST['correo'])&& isset($_POST['celular'])&& isset($_POST['contrasena']))

            require_once"../conexion/guardar.php";
            
                // include("../conexion/conexionBD.php");
                // include("../conexion/controladorRegistrarse.php");
        ?>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
    crossorigin="anonymous"></script>
</body>
</html>
<?php
    session_start();
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
    <title>Factura</title>
</head>

<body>
    <?php require '../pagina/header.php' ?>
    <div class="container">
        <form action="./factura.php" method="post" class=" d-block text-center" was-validated>
            <h2 class="titulo">Formulario De Pago</h2>
            <div>
                <label for="" class="form-label">Usuario</label> <br>
                <input type="text" class="form-control" name="factura['usuario']" > <br>
                <label for="" class="form-label">Correo Electronico</label> <br>
                <input type="email" class="form-control" name="factura['email']" > <br>
                <label for="" class="form-label">Dirección</label> <br>
                <input type="text" class="form-control" name="factura['direccion']"> <br>
                <label for="" class="form-label">Celular</label> <br>
                <input type="number" class="form-control" name="factura['telefono']"> <br>
                <input type="submit" value="Realizar Pago" class="btn btn-primary" name="pago" >
            </div>
        </form>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
    crossorigin="anonymous"></script>

    <!-- <?php require '../pagina/footer.php' ?> -->

</body>
</html>
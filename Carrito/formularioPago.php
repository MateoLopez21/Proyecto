<?php
    session_start();
    
    require '../conexion/bd.php';
    
    if(!isset($_SESSION['user_id'])){
        echo "<script> alert('No has iniciado sesión');
        window.location='../pagina/iniciarSesion.php'</script>";
    }else {
        $querySelect = $conn->prepare("SELECT * FROM usuario WHERE idUsuario = :idUsuario");
        $execute = $querySelect->execute(['idUsuario' => $_SESSION['user_id']]);
        $results = $querySelect->fetchAll();
    }

    if (isset($_POST['pago'])) {
        echo "<script> alert('Compra realizada con éxito');
        window.location='../pagina/index.php'</script>";
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
    <title>Factura</title>
</head>

<body>
    <?php require '../pagina/header.php' ?>
    <div class="container">
        <form action="" method="post" class=" d-block text-center" was-validated>
            <?php foreach ($results as $key => $value) { ?>
            <h2 class="titulo">Formulario De Pago</h2>
            <div>
                <label for="" class="form-label">Usuario</label> <br>
                <input type="text" class="form-control" name="factura['usuario']" value="<?php echo $value['usuario']; ?>"> <br>
                <label for="" class="form-label">Correo Electronico</label> <br>
                <input type="email" class="form-control" name="factura['email']" value="<?php echo $value['email']; ?>"> <br>
                <label for="" class="form-label">Dirección</label> <br>
                <input type="text" class="form-control" name="factura['direccion']" value="<?php echo $value['direccion']; ?>"> <br>
                <label for="" class="form-label">Telefono</label> <br>
                <input type="number" class="form-control" name="factura['telefono']" value="<?php echo $value['telefono']; ?>"> <br>
                <input type="submit" value="Realizar Pago" class="btn btn-primary" name="pago" >
                <?php } ?>
            </div>
        </form>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
    crossorigin="anonymous"></script>

    <?php require '../pagina/footer.php' ?>

</body>
</html>
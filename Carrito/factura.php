<?php
    session_start();
    $_SESSION = array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f57beba7b3.js" crossorigin="anonymous"></script>
    <title>Factura</title>
</head>
<body>
    <?php require '../pagina/header.php' ?>
    <div class="container-factura">
        <div class="row">
        <h1 class="text-center">Tu Factura</h1>
                <p> Hola, El total de su factura es: 
                </p>
                <br> 
                <?php
                    if(isset($_POST['pago'])){
                        if(isset($_POST['factura'])){
                            foreach ($_POST["factura"] as $key => $value){
                                echo "<br> $key: $value";
                                }
                            }
                    }
                    echo "<br> El Valor Total A Pagar Es:  <br> Tenga un buen día";
                    ?> <br>
                <a href="../pagina/index.php" class="btn btn-success">Regresar</a>
        </div>
    </div>
    <!-- <?php require '../pagina/footer.php' ?> -->
</body>
</html>
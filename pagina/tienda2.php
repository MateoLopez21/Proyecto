<?php
    session_start();
    if (isset($_POST['carrito'])){
        $_SESSION['carrito'] = $_POST['carrito'];
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
    <title>Carrito Compras</title>
</head>
<body>
    
    <?php
        $favoritos = $_SESSION['carrito'];
        $_SESSION['carrito'] = $favoritos;

        if(isset($_SESSION['carrito'])){
            for($i=0;$i<=count($favoritos)-1;$i ++){
                if ($favoritos[$i] != NULL) {
                    $total_cantidad = $favoritos['cantidad'];
                    $total_cantidad ++ ;
                    $total_cantidad += $total_cantidad;
                }
            }
        }
    ?>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Tienda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navarNavDropdown" aria-controls="navarNavDropdown" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbaDropdown">
                <ul class="navbar-nav">
                    <li clas="nav-item">
                    <a class="nav-link" class="navbar-toggle" type="button" data-bs-toggle="modal" data-bs-target="#modal_car"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- FINAL NAVBAR -->


<!-- --MODAL CARRITO-- -->

    <div class="modal fade" id="modal_cart" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                    <input type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </div>
                    <div class="modal-body">

<!-- AQUI SE RELAIZA LA CONEXION -->

                    <div class="modal-body">
                        <div>
                        <div class="p-2">
                            <ul class="list-group mb-3">
                                <?
                                if(isset($_SESSION['carrito']))
                                $total=0;{
                                    for($i=0;$i<=count($favoritos)-1;$i ++){
                                        if ($favoritos[$i] != NULL){
                                ?>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div class="row col-12">
                                        <div class="col-6 p-0"><h6 class="my-0">Cantidad: <?php echo $favoritos[$i]['cantidad']
                                        ?> : <?php echo $favoritos[$i]['titulo'];?></h6>
                                        </div>
                                        <div class="col-6 p-0">
                                            <span class="text-muted"> <? echo $favoritos[$i]['precio'] * $favoritos[$i]['cantidad']; ?> $</span>
                                        </div>
                                    </div>
                                </li>
                                <?
                                $total = $total + ($favoritos[$i]['precio'] * $favoritos[$i]['precio']);
                                }
                                }
                                }
                                ?>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span style="text-align: left; color: #000000;">Total (COP)</span>
                                    <strong style="text-align: left; color: #000000;"><?php 
                                    if(isset($_SESSION['carrito'])){
                                        $total=0;
                                        for ($i = 0; $i <= count($favoritos) - 1; $i++) {
                                            if ($favoritos[$i] != NULL) {
                                                $total = $total + ($favoritos[$i]['precio'] * $favoritos[$i]['cantidad']);
                                            }
                                        } 
                                    }
                                    echo $total; ?> </strong>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>

<!-- AQUI TERMINA LA CONEXION -->
                    
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-sismiss="modal">Cerrar</button>
                        <a type="button" class="btn btn-primary" href="vaciarFavoritos.php">Vaciar Favoritos</a>
                    </div>
            </div>
        </div>
    </div>



    <!-- ARTICULOS -->

    <div class="container mt-5" name="carrito" id="carrito">
        <div class="row">
            
            <div class="card m-4">
                <form id="formulario" name="formulario" method="post" action="../carrito/favoritos.php" >
                    <input name="titulo" type="hidden" id="titulo" value="Uniformes">
                    <input name="precio" type="hidden" id="precio" value="55.000">
                    <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2">
                    <img class="card-img-top" src="../Productos/Tenis-Uniforme.jpg" alt="...">
                        <div class="card-boody">
                            <h5 class="card-title">Uniformes</h5>
                            <p class="card-text">55.000</p>
                            <button class="btn btn-success" type="submit"><i class="fas fa-shopping-cart"></i>Agregar</button>
                        </div>
                </form>
            </div>

            <div class="card m-4">
                <form id="formulario" name="formulario" method="post" action="../carrito/favoritos.php" >
                    <input name="titulo" type="hidden" id="titulo" value="Uniformes">
                    <input name="precio" type="hidden" id="precio" value="55.000">
                    <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2">
                    <img class="card-img-top" src="../Productos/Tenis-Uniforme.jpg" alt="...">
                        <div class="card-boody">
                            <h5 class="card-title">Uniformes</h5>
                            <p class="card-text">55.000</p>
                            <button class="btn btn-success" type="submit"><i class="fas fa-shopping-cart"></i>Agregar</button>
                        </div>
                </form>
            </div>

            <div class="card m-4">
                <form id="formulario" name="formulario" method="post" action="../carrito/favoritos.php" >
                    <input name="titulo" type="hidden" id="titulo" value="Uniformes">
                    <input name="precio" type="hidden" id="precio" value="55.000">
                    <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2">
                    <img class="card-img-top" src="../Productos/Tenis-Uniforme.jpg" alt="...">
                        <div class="card-boody">
                            <h5 class="card-title">Uniformes</h5>
                            <p class="card-text">55.000</p>
                            <button class="btn btn-success" type="submit"><i class="fas fa-shopping-cart"></i>Agregar</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

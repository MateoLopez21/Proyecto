<?php
    session_start();

    if (!isset($_SESSION['user_id'])) {
        echo "<script> alert('Inicia sesión para acceder a la tienda');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous">  
    <script src="https://kit.fontawesome.com/f57beba7b3.js" crossorigin="anonymous"></script>
    <title>Tienda</title>
</head>
<body>
    <header class="header-tienda">
        <a href="../pagina/index.php"><h1> SportSize </h1></a>
        <nav>
            <ul class="links">
                <li><a href="../pagina/index.php">Inicio</a></li>
                <li><a href="../pagina/tienda.php" class="active">Tienda</a></li>
            </ul>
        </nav>
        <button id="boton-carrito"><i class="fas fa-shopping-cart"></i><span id="contadorCarrito">0</span></button>
        <div class="user">
            <a href="../Carrito/vistaUsuario.php" class="login fa-solid fa-user" ></a>
            <a href="../pagina/iniciarSesion.php" class="fa-solid fa-arrow-right-to-bracket"></a>
            <a href="../pagina/logout.php" class="fa-solid fa-right-from-bracket" ></a>
        </div>
    </header>



    <main id="contenedor-productos">

    </main>

    <div class="modal-contenedor">
        <div class="modal-carrito">
            <h3>Carrito</h3>
            <button id="carritoCerrar"><i class="fas fa-times-circle"></i></button>
            <div id="carrito-contenedor">
            </div>
            <p class="precioProducto">Precio total: $<span id="precioTotal">0</span></p>
            <button id="vaciar-carrito" class="boton-agregar">Vaciar carrito</button>
            <button id="vaciar-carrito" class="boton-agregar" onclick="window.location='../carrito/formularioPago.php'">Comprar</button>
        </div>
    </div>

    
    <script defer src="../js/modal.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>

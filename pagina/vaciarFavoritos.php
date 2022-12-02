<?php
session_start();
header("Location: ".$_SERVER['HTTP_REFER']."");
unset($_SESSION['carrito']);


?>
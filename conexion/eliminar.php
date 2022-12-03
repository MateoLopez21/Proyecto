<?php
session_start();

require '../conexion/bd.php';

if(isset($_POST['eliminar'])){
    $sql = "DELETE FROM usuario WHERE idUsuario = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam('id', $_SESSION['user_id']);

    if($stmt->execute()){
        echo "<script>
        alert('Usuario eliminado con éxito.')
        window.location.href='../pagina/index.php';
        </script>";
    }else{
        echo "<script>
        alert('Error al eliminar el usuario.')
        window.location.href='../pagina/vistaUsuario.php';
        </script>";
    }
}
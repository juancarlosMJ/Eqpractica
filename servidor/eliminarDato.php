<?php 
  $idDato = $_POST['idDato'];
   include "../servidor/conexion.php";
   $conexion = conexion();

    $sql = "DELETE FROM t_registro WHERE id_registro = '$idDato'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        if (unlink($rutaDeArchivo)) {
            $_SESSION['operacion'] = "delete";
        } else {
            $_SESSION['operacion'] = "error2";
        }
    } else {
        $_SESSION['operacion'] = "error2";
    }

    header("location:../index.php");
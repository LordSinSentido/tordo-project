<?php
   include("../conexion/melchior.php");

    $numeroSerie = $_POST['numeroSerie'];
    $tipo = $_POST['tipo'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $descripcion = $_POST['descripcion'];
    $estatus = $_POST['estatus'];

    $annadir = "INSERT INTO maquinarias (numeroSerie,tipo,marca,modelo,descripcion,estatus) VALUES ('$numeroSerie','$tipo','$marca','$modelo','$descripcion',$estatus)";

    if ($conexion->query($annadir) == TRUE) {
        echo "Petición procesada.";
    }else{
        echo "Hubo un error, intente de nuevo.";
    }

    $conexion->close();

    header("Location: ../../maquinarias.php");

    die();
?>
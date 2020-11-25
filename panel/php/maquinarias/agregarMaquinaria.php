<?php
    include("../conexion/melchior.php");

    $tipo = $_POST['tipo'];
    $marca = $_POST['marca'];
    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];
    $situacion = $_POST['situacion'];

    $annadir = "INSERT INTO maquinaria (tipo,marca,codigo,descripcion,situacion) VALUES ('$tipo','$marca','$codigo','$descripcion',$situacion)";

    if ($conexion->query($annadir) == TRUE) {
        echo "Petición procesada.";
    }else{
        echo "Hubo un error, intente de nuevo.";
    }

    $conexion->close();

    header("Location: ../maquinaria.html");

    die();
?>
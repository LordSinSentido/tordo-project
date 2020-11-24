<?php
    $servidor = "localhost";
    $usuario = "melchior";
    $contrasenna = "melchior@MAGI";
    $daseDeDatos = "tordotec_magi";

    $conexion = new mysqli($host,$usuario,$contrasenna,$daseDeDatos) or die("No se ha podido conectar: " . mysql_error());

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

    header("Location: /maquinarias");

    die();
?>
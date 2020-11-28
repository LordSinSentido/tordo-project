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
        echo <<<END

        <script languaje='javascript'>
            alert('El registro fue creado exitosamente.');
            window.location.href="../../maquinarias.php";
        </script>

        END;
    }else{
        echo <<<END

        <script languaje='javascript'>
            alert('Hubo un problema, comuniquese con el administrador.');
            window.location.href="../../maquinarias.php";
        </script>

        END;
    }

    $conexion->close();

    die();
?>
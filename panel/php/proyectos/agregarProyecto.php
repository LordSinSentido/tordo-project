<?php
   include("../conexion/melchior.php");

    $titulo = $_POST['titulo'];
    $lugar = $_POST['lugar'];
    $descripcion = $_POST['descripcion'];
    $alcance = $_POST['alcance'];
    $fecha = $_POST['fecha'];

    $annadir = "INSERT INTO proyectos (id, titulo, lugar, descripcion, alcance, fecha) VALUES (NULL, '$titulo','$lugar','$descripcion','$alcance','$fecha')";

    if ($conexion->query($annadir) == TRUE) {
        echo <<<END

        <script languaje='javascript'>
            alert('El registro fue creado exitosamente.');
            window.location.href="../../proyectos.php";
        </script>

        END;
    }else{
        echo <<<END

        <script languaje='javascript'>
            alert('Hubo un problema, comuniquese con el administrador.');
            window.location.href="../../proyectos.php";
        </script>

        END;
    }

    $conexion->close();

    die();
?>
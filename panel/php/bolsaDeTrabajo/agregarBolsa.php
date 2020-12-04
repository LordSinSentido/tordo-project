<?php
   include("../conexion/melchior.php");

    $puesto = $_POST['puesto'];
    $descripcion = $_POST['descripcion'];
    $requisitos = $_POST['requisitos'];
    $sueldo = $_POST['sueldo'];

    $annadir = "INSERT INTO bolsatrabajo (id,puesto,descripcion,requisitos,sueldo) VALUES (NULL,'$puesto','$descripcion','$requisitos','$sueldo')";

    if ($conexion->query($annadir) == TRUE) {
        echo <<<END

        <script languaje='javascript'>
            alert('El registro fue creado exitosamente.');
            window.location.href="../../bolsaDeTrabajo.php";
        </script>

        END;
    }else{
        echo <<<END

        <script languaje='javascript'>
            alert('Hubo un problema, comuniquese con el administrador.');
            window.location.href="../../bolsaDeTrabajo.php";
        </script>

        END;
    }

    $conexion->close();

    die();
?>
<?php
   include("../conexion/melchior.php");

    $id = $_POST['id'];
    $puesto = $_POST['puesto'];
    $descripcion = $_POST['descripcion'];
    $requisitos = $_POST['requisitos'];
    $sueldo = $_POST['sueldo'];

    $actualizar = "UPDATE bolsatrabajo SET id = '$id', puesto = '$puesto', descripcion = '$descripcion', requisitos = '$requisitos', sueldo = $sueldo WHERE id = '$id'";

    if ($conexion->query($actualizar) == TRUE) {
        echo <<<END
        <script languaje='javascript'>
            alert('El registro fue actualizado exitosamente.');
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
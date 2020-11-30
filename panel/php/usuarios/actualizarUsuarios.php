<?php
   include("../conexion/melchior.php");

    $numeroSerie = $_POST['numeroSerie'];
    $tipo = $_POST['tipo'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $descripcion = $_POST['descripcion'];
    $estatus = $_POST['estatus'];

    $actualizar = "UPDATE maquinarias SET tipo = '$tipo', marca = '$marca', modelo = '$modelo', descripcion = '$descripcion', estatus = $estatus WHERE numeroSerie = '$numeroSerie'";

    // UPDATE `maquinarias` SET `numeroSerie` = 'erwe', `tipo` = 'eerwer', `marca` = 'rwerw', `modelo` = 'ewrwe', `descripcion` = 'ewrwerwerwe', `estatus` = '0' WHERE `maquinarias`.`numeroSerie` = '';

    if ($conexion->query($actualizar) == TRUE) {
        echo <<<END

        <script languaje='javascript'>
            alert('El registro fue actualizado exitosamente.');
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
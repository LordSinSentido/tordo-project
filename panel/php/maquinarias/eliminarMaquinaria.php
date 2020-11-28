<?php
    include("../conexion/balthasar.php");
    
    $numeroSerie = $_POST['numeroSerie'];

    $eliminar = "DELETE FROM maquinarias WHERE numeroSerie = '$numeroSerie'";

    if ($conexion->query($eliminar) == true) {
        echo <<<END

        <script languaje='javascript'>
            alert('El registro fue eliminado exitosamente.');
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
<?php
    include("../conexion/balthasar.php");
    
    $correo = $_POST['correo'];

    $eliminar = "DELETE FROM usuarios WHERE corrreo = '$correo'";

    if ($conexion->query($eliminar) == true) {
        echo <<<END
        <script languaje='javascript'>
            alert('El registro fue eliminado exitosamente.');
            window.location.href="../../usuarios.php";
        </script>
        END;
    }else{
        echo <<<END
        <script languaje='javascript'>
            alert('Hubo un problema, comuniquese con el administrador.');
            window.location.href="../../usuarios.php";
        </script>
        END;
    }

    $conexion->close();
    die();
?>
<?php
    include("../conexion/balthasar.php");
    
    $id = $_POST['id'];

    $eliminar = "DELETE FROM clientes WHERE id = $id";

    if ($conexion->query($eliminar) == true) {
        echo <<<END
        <script languaje='javascript'>
            alert('El registro fue eliminado exitosamente.');
            window.location.href="../../clientes.php";
        </script>
        END;
    }else{
        echo <<<END
        <script languaje='javascript'>
            alert('Hubo un problema, comuniquese con el administrador.');
            window.location.href="../../clientes.php";
        </script>
        END;
    }

    $conexion->close();
    die();
?>
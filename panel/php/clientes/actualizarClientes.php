<?php
   include("../conexion/melchior.php");

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $curp = $_POST['curp'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $rento = $_POST['rento'];

    $actualizar = "UPDATE clientes SET nombre = '$nombre', apellido = '$apellido', curp = '$curp', direccion = '$direccion', correo = '$correo', telefono = '$telefono', fecha = '$fecha', rento = '$rento' WHERE id = $id";

    if ($conexion->query($actualizar) == TRUE) {
        echo <<<END
        <script languaje='javascript'>
            alert('El registro fue actualizado exitosamente.');
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
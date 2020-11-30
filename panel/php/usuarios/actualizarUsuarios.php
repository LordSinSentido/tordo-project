<?php
   include("../conexion/melchior.php");

    $correo = $_POST['correo'];
    $nombre = $_POST['nomre'];
    $apellido = $_POST['apellido'];
    $contrasenna = $_POST['contrasenna'];
    $rol = $_POST['rol'];

    $actualizar = "UPDATE usuarios SET correo = '$correo', nombre = '$nombre', apellido = '$apellido', contrasenna = '$contrasenna', rol = $rol WHERE correo = '$correo'";

    if ($conexion->query($actualizar) == TRUE) {
        echo <<<END
        <script languaje='javascript'>
            alert('El registro fue actualizado exitosamente.');
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
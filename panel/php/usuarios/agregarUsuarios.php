<?php
   include("../conexion/melchior.php");
    
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $contrasenna = $_POST['contrasenna'];
    $rol = $_POST['rol'];

    $annadir = "INSERT INTO usuarios (correo,nombre,apellido,contrasenna,rol) VALUES ('$correo','$nombre','$apellido','$contrasenna',$rol)";

    if ($conexion->query($annadir) == TRUE) {
        echo <<<END
        <script languaje='javascript'>
            alert('El registro fue creado exitosamente.');
            window.location.href = '../../usuarios.php';
        </script>
        END;
    }else{
        echo <<<END
        <script languaje='javascript'>
            alert('Hubo un problema, comuniquese con el administrador.');
            window.location.href = '../../usuarios.php';
        </script>
        END;
    }

    $conexion->close();

    die();
?>
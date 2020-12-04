<?php
   include("../conexion/melchior.php");
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $curp = $_POST['curp'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $rento = $_POST['rento'];

    $annadir = "INSERT INTO clientes (id,nombre,apellido,curp,direccion,correo,telefono,fecha,rento) VALUES (NULL,'$nombre','$apellido','$curp','$direccion','$correo','$telefono','$fecha','$rento')";

    //INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `curp`, `direccion`, `correo`, `telefono`, `fecha de servicio`, `rento`) VALUES (NULL, '343214', '23435', '53245324', '5345324', '54325', '32454324', '2020-12-28', '5432534523');

    if ($conexion->query($annadir) == TRUE) {
        echo <<<END
        <script languaje='javascript'>
            alert('El registro fue creado exitosamente.');
            window.location.href = '../../clientes.php';
        </script>
        END;
    }else{
        echo <<<END
        <script languaje='javascript'>
            alert('Hubo un problema, comuniquese con el administrador.');
            window.location.href = '../../clientes.php';
        </script>
        END;
    }

    $conexion->close();

    die();
?>
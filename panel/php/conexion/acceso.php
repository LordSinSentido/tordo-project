<?php
    include("casper.php");

    $correo = $_POST['correo'];
    $contrasenna = $_POST['contrasenna'];

    $ver = "SELECT correo FROM usuarios WHERE correo = '$correo'";
    $buscar = $conexion->query($ver);
    $encontrar = mysqli_num_rows($buscar);

    if ($encontrar == 1) {
        $ver = "SELECT correo FROM usuarios WHERE correo = '".$correo."' AND contrasenna = '".$contrasenna."'";
        $buscar = $conexion->query($ver);
        $encontrar = mysqli_num_rows($buscar);

        if ($encontrar == 1) {
            $datos = "SELECT nombre, apellido, correo FROM usuarios WHERE correo = '$correo' AND contrasenna = '$contrasenna'";
            $usuario = $conexion->query($datos);
            session_start();
            header("Location: ../../inicio.php");
        }else {
            echo 'La contraseña no es correcta';
        }
    }else {
        echo 'Ususario inexistente';
    }

    $conexion->close();
?>
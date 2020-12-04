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
            $leer = "SELECT * FROM usuarios WHERE correo = '".$correo."' AND contrasenna = '".$contrasenna."'";
            $usuario = $conexion->query($leer);
            $datos = mysqli_fetch_array($usuario);
            session_start();

            $_SESSION["estado"] = 1;
            $_SESSION["nombre"] = $datos[1];
            $_SESSION["apellido"] = $datos[2];
            $_SESSION["correo"] = $datos[0];
            $_SESSION["rol"] = $datos[4];

            header("Location: ../../inicio.php");
        }else {
            header("Location: ../../index.php");
        }
    }else {
        header("Location: ../../index.php");
    }

    $conexion->close();
?>
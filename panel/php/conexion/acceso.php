<?php
    include("casper.php");

    $correo = $_POST['correo'];
    $contrasenna = $_POST['contrasenna'];

    $ver = "SELECT correo FROM usuarios WHERE correo = '$correo'";
    $buscar = $conexion->query($buscar);
    $encontrar = mysqli_num_rows($buscar);

    if ($encontrar == 1) {
        $ver = "SELECT email FROM usuarios WHERE correo = '$correo' AND contrasenna = '$contrasenna'";
        $buscar = $conexion->query($ver);
        $encontrar = mysqli_num_rows($buscar);

        if ($encontrar == 1) {
            echo
        }
    }
?>
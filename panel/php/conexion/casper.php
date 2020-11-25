<?php
    $servidor = "localhost";
    $usuario = "root"; //melchior
    $contrasenna = "";//melchior@MAGI
    $baseDeDatos = "tordotec_magi";

    $conexion = new mysqli($servidor,$usuario,$contrasenna,$baseDeDatos) or die("No se ha podido conectar: " . mysql_error());  
?>
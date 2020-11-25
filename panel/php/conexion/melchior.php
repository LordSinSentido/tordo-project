<?php
    $servidor = "localhost";
    $usuario = "root"; //melchior
    $contrasenna = "";//melchior@MAGI
    $daseDeDatos = "tordotec_magi";

    $conexion = new mysqli($servidor,$usuario,$contrasenna,$daseDeDatos) or die("No se ha podido conectar: " . mysql_error());  
?>
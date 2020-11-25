<?php
    $servidor = "localhost";
    $usuario = "casper";
    $contrasenna = "casper@MAGI";
    $daseDeDatos = "tordotec_magi";

    $conexion = new mysqli($host,$usuario,$contrasenna,$daseDeDatos) or die("No se ha podido conectar: " . mysql_error());  
?>
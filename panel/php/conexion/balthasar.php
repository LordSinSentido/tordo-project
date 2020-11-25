<?php
    $servidor = "localhost";
    $usuario = "balthasar";
    $contrasenna = "balthasar@MAGI";
    $daseDeDatos = "tordotec_magi";

    $conexion = new mysqli($host,$usuario,$contrasenna,$daseDeDatos) or die("No se ha podido conectar: " . mysql_error());  
?>
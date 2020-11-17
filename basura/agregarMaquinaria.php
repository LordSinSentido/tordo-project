<?php

$nombre = $_POST ['nombre'];
$tipo = $_POST ['tipo'];
$descripcion = $_POST ['descripcion'];
$img = $_POST ['img'];
$situacion = $_POST ['situacion'];

$datos = array(
    'nombre' => $nombre,
    'tipo' => $tipo,
    'descripcion' => $descripcion,
    'img' => $img,
    'situacion' => $situacion,
);

$json_string = json_encode($datos);
$file = "../datos/maquinaria.json";
$actual = file_get_contents($file);

if (empty($actual)) {
    $actual = "[\n" . $json_string . "\n]";
}else {
    $actual = str_replace("\n]","",$actual);
    $actual .= ",\n" . $json_string . "\n]";
}

file_put_contents($file,$actual);

header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT");
header("Location: ../panel.html");
die();
?>
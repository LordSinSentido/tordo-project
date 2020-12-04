<?php
    include("../conexion/balthasar.php");
    
    $id = $_POST['id'];

    $tomarImagen = "SELECT imagen1 FROM proyectos WHERE id = '$id'";
    $query = $conexion->query($tomarImagen);
    $nombre = mysqli_fetch_array($query);

    $ruta = "../../../inicio/img/proyectos";
    $ruta = $ruta . '/' . $nombre[6];
    echo "La ruta de la imagen 1 es: " . $ruta;
    unlink($ruta);

    $eliminar = "DELETE FROM proyectos WHERE id = '$id'";

    if ($conexion->query($eliminar) == true) {
        echo <<<END

        <script languaje='javascript'>
            alert('El registro fue eliminado exitosamente.');
            window.location.href="../../proyectos.php";
        </script>
            
        END;
    }else{
        echo <<<END

        <script languaje='javascript'>
            alert('Hubo un problema, comuniquese con el administrador.');
            window.location.href="../../proyectos.php";
        </script>
            
        END;
    }

    $conexion->close();
    die();
?>
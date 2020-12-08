<?php
    include("../conexion/balthasar.php");
    
    $id = $_POST['id'];

    $tomarImagen = "SELECT imagen1, imagen2, imagen3 FROM proyectos WHERE id = $id";
    $query = $conexion->query($tomarImagen);
    $nombre = mysqli_fetch_array($query);

    $ruta = "../../../inicio/img/proyectos";
    $ruta1 = $ruta . '/' . $nombre[0];
    $ruta2 = $ruta . '/' . $nombre[1];
    $ruta3 = $ruta . '/' . $nombre[2];
    
    unlink($ruta1);
    unlink($ruta2);
    unlink($ruta3);

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
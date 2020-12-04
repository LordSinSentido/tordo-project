<?php
   include("../conexion/melchior.php");

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $lugar = $_POST['lugar'];
    $descripcion = $_POST['descripcion'];
    $alcance = $_POST['alcance'];
    $fecha = $_POST['fecha'];
/*  
    $imagen1 = $_FILES['imagen1']['name'];
    $binario1 = $_FILES['imagen1']['tmp_name'];
    $ruta1 = "../../../inicio/img/proyectos";
    $ruta1 = $ruta1 . '/' . $imagen1;
    move_uploaded_file($binario1,$ruta1);

    echo "imagen1: " . $imagen1;
    echo "ruta imagen1: " . $ruta1;
   
    $imagen2 = $_FILES['imagen2']['name'];
    $binario2 = $_FILES['imagen2']['tmp_name'];
    $ruta2 = "../../../inicio/img/proyectos";
    $ruta2 = $ruta2 . '/' . $imagen2;
    move_uploaded_file($binario2,$ruta2);

    $imagen3 = $_FILES['imagen3']['name'];
    $binario3 = $_FILES['imagen3']['tmp_name'];
    $ruta3 = "../../../inicio/img/proyectos";
    $ruta3 = $ruta3 . '/' . $imagen3;
    move_uploaded_file($binario3,$ruta3);

*/
    $actualizar = "UPDATE proyectos SET titulo = '$titulo', lugar = '$lugar', descripcion = '$descripcion', alcance = '$alcance', fecha = '$fecha', imagen1 = '0-01.jpg', imagen2 = '0-02.jpg', imagen3 = '0-03.jpg' WHERE id = '$id'";

    if ($conexion->query($actualizar) == TRUE) {
        echo <<<END

        <script languaje='javascript'>
            alert('El registro fue actualizado exitosamente.');
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
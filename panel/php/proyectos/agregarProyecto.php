<?php
   include("../conexion/melchior.php");

    $titulo = $_POST['titulo'];
    $lugar = $_POST['lugar'];
    $descripcion = $_POST['descripcion'];
    $alcance = $_POST['alcance'];
    $fecha = $_POST['fecha'];
    
    $imagen1 = $_FILES['imagen1']['name'];
    $binario1 = $_FILES['imagen1']['tmp_name'];
    $ruta1 = "../../../inicio/img/proyectos";
    $ruta1 = $ruta1 . '/' . $imagen1;
    move_uploaded_file($binario1,$ruta1);

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

     $annadir = "INSERT INTO proyectos (id, titulo, lugar, descripcion, alcance, fecha, imagen1, imagen2, imagen3) 
                    VALUES (NULL, '$titulo','$lugar','$descripcion','$alcance','$fecha', '$imagen1', '$imagen2', '$imagen3')";

    if ($conexion->query($annadir) == TRUE) {
        echo <<<END

        <script languaje='javascript'>
            alert('El registro fue creado exitosamente.');
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
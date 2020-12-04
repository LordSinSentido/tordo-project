<?php
   include("../conexion/melchior.php");
    
    $id = $_POST['id'];
    $puesto = $_POST['puesto'];
    $descripcion = $_POST['descripcion'];
    $requisitos = $_POST['requisitos'];
    $sueldo = $_POST['sueldo'];

    $annadir = "INSERT INTO bolsa (id, puesto, descripcion, requisitos, sueldo) VALUES ('$id',$puesto,'$descripcion','$requisitos','$sueldo')";

    if ($conexion->query($annadir) == TRUE) {
        echo <<<END
        <script languaje='javascript'>
            alert('El registro fue creado exitosamente.');
            window.location.href = '../../bolsaDeTrabajo.php';
        </script>
        END;
    }else{
        echo <<<END
        <script languaje='javascript'>
            alert('Hubo un problema, comuniquese con el administrador.');
            window.location.href = '../../bolsaDeTrabajo.php';
        </script>
        END;
    }

    $conexion->close();

    die();
?>
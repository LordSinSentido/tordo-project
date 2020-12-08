<?php
    include("../conexion/seguridad.php");
?>
<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tordo | MAGI</title>
        <link rel="shortcut icon" href="../../img/icons/logo.svg" type="image/svg+xml">
        <link rel="stylesheet" href="../../css/panel.css">
        <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div id="navegacion">
                <div class="logotipo">
                    <img id="logo" src="../../img/icons/logo.svg" alt="Logotipo">
                    <div>
                        <h1>Tordo tecnologías</h1>
                        <p>Módulo de administración y gestión integral</p>
                    </div>
                </div>
                <nav>
                    <p id="usuario"><?php echo $_SESSION["correo"];?></p>
                    <a href="../conexion/cerrar.php" class="boton">Cerrar sesión</a>
                </nav>
            </div>
        </header>
        
        <section id="acciones">
            <div class="migas">
                <a href="../../clientes.php" class="boton">&#10094;</a>
                <h2>Panel de usuarios > Actualización del registro</h2>
            </div>
        </section>
        
        <section>
            <form action="actualizarClientes.php" method="post" autocomplete="off">
                <h3>Agregar nuevo usuarios</h3>
                
                <?php
                    include("../conexion/casper.php");
                    $id = $_POST['id'];

                    $leer = "SELECT * FROM clientes WHERE id = $id";
                    $query = $conexion->query($leer);

                    
                    if ($query == true) {
                        while ($datos = mysqli_fetch_array($query)) {
                            echo <<<END
                            <div class="formularioElemento">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" placeholder="María" value='$datos[1]'>
                            </div>

                            <div class="formularioElemento">
                                <label for="apellido">Apellido</label>
                                <input type="text" name="apellido" id="apellido" placeholder="Martínez" value='$datos[2]'>
                            </div>

                            <div class="formularioElemento">
                                <label for="curp">CURP</label>
                                <input type="text" name="curp" id="curp" placeholder="XXXX00000XXXXXX00" value='$datos[3]'>
                            </div>

                            <div class="formularioElemento">
                                <label for="direccion">Dirección</label>
                                <input type="text" name="direccion" id="direccion" placeholder="Fuelle #123 A" value='$datos[4]'>
                            </div>

                            <div class="formularioElemento">
                                <label for="correo">Correo</label>
                                <input type="email" name="correo" id="correo" placeholder="correo@ejemplo.com" value='$datos[5]'>
                            </div>

                            <div class="formularioElemento">
                                <label for="telefono">Teléfono</label>
                                <input type="text" name="telefono" id="telefono" placeholder="5513467982" value='$datos[6]'>
                            </div>

                            <div class="formularioElemento">
                                <label for="fecha">Fecha del servicio</label>
                                <input type="date" name="fecha" id="fecha" value='$datos[7]'>
                            </div>

                            
                            <div class="formularioElemento ocultar">
                                <label for="id">Id</label>
                                <input type="text" name="id" id="id" placeholder="$datos[0]" value='$datos[0]' hidden readonly>
                            </div>

                            <div class="formularioElemento">
                                <label for="rento">Maquinaria que rentó</label>
                                <select name="rento" id="rento">
                            END;
                            $leerm = "SELECT * FROM maquinarias";
                            $querym = $conexion->query($leerm);

                            if ($querym == true) {
                                while ($datosm = mysqli_fetch_array($querym)) {
                            echo <<<END
                                <option value="$datosm[0]"
                            END;
                                    if ($datos[8] == $datosm[0]) {
                                        echo 'selected';
                                    }
                            echo <<<END
                                >$datosm[1] $datosm[3] $datosm[2] - $datosm[0]</option>
                            END;
                                }
                            }
                            echo <<<END
                                </select>
                            </div>
                            
                            <div class="formularioBotonera">
                                <button type="submit" class="boton">Actualizar</button>
                            </div>
                            END;
                        }
                    }
                ?>
            </form>
    </section>
</body>
</html>

<?php
$conexion->close();
die();
?>
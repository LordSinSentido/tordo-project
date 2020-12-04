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
                    <p id="usuario">annaGtrrz@tordotec.com</p>
                    <a href="../conexion/cerrar.php" class="boton">Cerrar sesión</a>
                </nav>
            </div>
        </header>
        
        <section id="acciones">
            <div class="migas">
                <a href="../../usuarios.php" class="boton">&#10094;</a>
                <h2>Panel de usuarios > Actualización del registro</h2>
            </div>
        </section>
        
        <section>
            <form action="actualizarUsuarios.php" method="post" autocomplete="off">
                <h3>Agregar nuevo usuarios</h3>
                
                <?php
                    include("../conexion/casper.php");
                    $correo = $_POST['correo'];

                    $leer = "SELECT * FROM usuarios WHERE correo = '$correo'";
                    $query = $conexion->query($leer);

                    
                    if ($query == true) {
                        while ($datos = mysqli_fetch_array($query)) {
                            echo <<<END
                            <div class="formularioElemento">
                                <label for="correo">Correo</label>
                                <input type="text" name="correo" id="correo" placeholder="usuario@correo.com" value="$datos[0]" readonly>
                            </div>
                            <div class="formularioElemento">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="$datos[1]">
                            </div>
                            <div class="formularioElemento">
                                <label for="apellido">Apellido</label>
                                <input type="text" name="apellido" id="apellido" placeholder="Apellido" value="$datos[2]">
                            </div>
                            <div class="formularioElemento">
                                <label for="contrasenna">Contraseña</label>
                                <input type="password" name="contrasenna" id="contrasenna" placeholder="*********" value="$datos[3]">
                            </div>
                            <div class="formularioElemento">
                                <label for="rol">Rol</label>
                                <select name="rol" id="rol" value="$datos[4]">
                            END;

                            switch ($datos[4]) {
                                    case '0':
                                    echo <<<END
                                        <option value="0" selected>Administrador</option>
                                        <option value="1">Moderador</option>
                                        <option value="2">Recursos Humanos</option>
                                        <option value="3">Publicador</option>
                                    END;
                                    break;
                                    case '1':
                                    echo <<<END
                                        <option value="0">Administrador</option>
                                        <option value="1" selected>Moderador</option>
                                        <option value="2">Recursos Humanos</option>
                                        <option value="3">Publicador</option>
                                    END;
                                    break;
                                    case '2':
                                    echo <<<END
                                        <option value="0">Administrador</option>
                                        <option value="1">Moderador</option>
                                        <option value="2" selected>Recursos Humanos</option>
                                        <option value="3">Publicador</option>
                                    END;
                                    break;
                                    case '3':
                                    echo <<<END
                                        <option value="0" selected>Administrador</option>
                                        <option value="1">Moderador</option>
                                        <option value="2">Recursos Humanos</option>
                                        <option value="3" selected>Publicador</option>
                                    END;
                                    break;
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
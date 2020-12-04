<?php
    include("php/conexion/seguridad.php");
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tordo | MAGI</title>
    <link rel="shortcut icon" href="img/icons/logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="css/panel.css">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div id="navegacion">
            <div class="logotipo">
                <img id="logo" src="img/icons/logo.svg" alt="Logotipo">
                <div>
                    <h1>Tordo tecnologías</h1>
                    <p>Módulo de administración y gestión integral</p>
                </div>
            </div>
            <nav>
                <p id="usuario"><?php echo $_SESSION["correo"];?></p>
                <a href="php/conexion/cerrar.php" class="boton">Cerrar sesión</a>
            </nav>
        </div>
    </header>

    <section id="acciones">
        <div class="migas">
            <a href="inicio.php" class="boton">&#10094;</a>
            <h2>Panel de usuarios</h2>
        </div>

        <h3>Acciones rápidas</h3>
        <div class="gridAcciones">
            <a id="ver" class="boton">Ver</a>
            <a id="agregar" class="boton">Agregar</a>
            <a id="editar" class="boton">Actualizar</a>
            <a id="eliminar" class="boton">Eliminar</a>
        </div>
    </section>

    <section id="panelAgregar" class="ocultar">
        <form action="php/usuarios/agregarUsuarios.php" method="post" autocomplete="off">
            <h3>Agregar nuevo usuario</h3>

            <div class="formularioElemento">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre" >
            </div>

            <div class="formularioElemento">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" placeholder="Apellido" >
            </div>

            <div class="formularioElemento">
                <label for="correo">Correo</label>
                <input type="email" name="correo" id="correo" placeholder="usuario@ejemplo.com">
            </div>

            <div class="formularioElemento">
                <label for="contrasenna">Contraseña</label>
                <input type="password" name="contrasenna" id="contrasenna" placeholder="*********">
            </div>

            <div class="formularioElemento">
                <label for="rol">Rol</label>
                <select name="rol" id="rol">
                    <option value="0">Administrador</option>
                    <option value="1">Moderador</option>
                    <option value="2">Recursos humanos</option>
                    <option value="3">Publicador</option>
                </select>
            </div>

            <div class="formularioBotonera">
                <button type="reset" class="boton">Limpiar</button>
                <button type="submit" class="boton">Agregar</button>
            </div>
        </form>
    </section>

    <section id="panelVer">
        <h3>Entradas guardadas</h3>

        <div class="grid">
            <?php
                include("php/conexion/casper.php");
                $leer = "SELECT * FROM usuarios";
                $query = $conexion->query($leer);

                if ($query == true) {
                    while ($datos = mysqli_fetch_array($query)) {
                        echo <<<END
                        <div class="tarjeta">
                            <div class="tarjetaCuerpo">
                                <p class="tarjetaTitulo">$datos[1] $datos[2]</p>
                                <p class="tarjetaSubtitulo">Correo</p>
                                <p class="tarjetaTexto">$datos[0]</p>
                                <p class="tarjetaSubtitulo">Rol</p>
                        END;
                        switch ($datos[4]) {
                            case 0:
                                echo '<p class="tarjetaTexto">Administrador</p>';
                                break;
                            case 1:
                                echo '<p class="tarjetaTexto">Moderador</p>';
                                break;
                            case 2:
                                echo '<p class="tarjetaTexto">Recursos humanos</p>';
                                break;
                            case 3:
                                echo '<p class="tarjetaTexto">Publicador</p>';
                                break;
                        }
                        echo <<<END
                            </div>
                        </div>
                        END;
                    }
                }
            ?>
        </div>
    </section>

    <section id="panelEditar" class="ocultar">
        <h3>Selecciona la entrada que deseas editar</h3>

        <div class="grid">
            <?php
                $leer = "SELECT * FROM usuarios";
                $query = $conexion->query($leer);

                if ($query == true) {
                    while ($datos = mysqli_fetch_array($query)) {
                        echo <<<END
                            <form action="php/usuarios/editarUsuarios.php" method="post" autocomplete="off">
                            <div class="tarjeta">
                                <div class="tarjetaCuerpo">
                                    <p class="tarjetaTitulo">$datos[1] $datos[2]</p>
                                    <p class="tarjetaSubtitulo">Correo</p>
                                    <p class="tarjetaTexto">$datos[0]</p>
                                    <p class="tarjetaSubtitulo">Rol</p>
                        END;
                        switch ($datos[4]) {
                            case 0:
                                echo '<p class="tarjetaTexto">Administrador</p>';
                                break;
                            case 1:
                                echo '<p class="tarjetaTexto">Moderador</p>';
                                break;
                            case 2:
                                echo '<p class="tarjetaTexto">Recursos humanos</p>';
                                break;
                            case 3:
                                echo '<p class="tarjetaTexto">Publicador</p>';
                                break;
                        }
                        echo <<<END
                                </div>
                                <div class="tarjetaBotonera">
                                    <button type="submit" class="boton">Actualizar</button>
                                </div>
                            </div>
                            <select class="ocultar" name="correo" id="$datos[0]">
                                <option value="$datos[0]">$datos[0]</option>
                            </select>
                        </form>
                        END;
                    }
                }
            ?>
        </div>
    </section>

    <section id="panelEliminar" class="ocultar">
        <h3>Selecciona la entrada que deseas eliminar</h3>

        <div class="grid">
            <?php
                $leer = "SELECT * FROM usuarios";
                $query = $conexion->query($leer);

                if ($query == true) {
                    while ($datos = mysqli_fetch_array($query)) {
                        echo <<<END
                            <form action="php/usuarios/eliminarUsuarios.php" method="post" autocomplete="off">
                            <div class="tarjeta">
                                <div class="tarjetaCuerpo">
                                    <p class="tarjetaTitulo">$datos[1] $datos[2]</p>
                                    <p class="tarjetaSubtitulo">Correo</p>
                                    <p class="tarjetaTexto">$datos[0]</p>
                                    <p class="tarjetaSubtitulo">Rol</p>
                        END;
                        switch ($datos[4]) {
                            case 0:
                                echo '<p class="tarjetaTexto">Administrador</p>';
                                break;
                            case 1:
                                echo '<p class="tarjetaTexto">Moderador</p>';
                                break;
                            case 2:
                                echo '<p class="tarjetaTexto">Recursos humanos</p>';
                                break;
                            case 3:
                                echo '<p class="tarjetaTexto">Publicador</p>';
                                break;
                        }
                        echo <<<END
                                </div>
                                <div class="tarjetaBotonera">
                                    <button type="submit" class="boton">Eliminar</button>
                                </div>
                            </div>
                            <select class="ocultar" name="correo" id="$datos[0]">
                                <option value="$datos[0]">$datos[0]</option>
                            </select>
                        </form>
                        END;
                    }
                }
            ?>
        </div>
    </section>

    <script src="js/panel.js"></script> 
</body>
</html>

<?php
$conexion->close();
die();
?>
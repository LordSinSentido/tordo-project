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
                <p id="usuario">annaGtrrz@tordotec.com</p>
                <a href="" class="boton">Cerrar sesión</a>
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
        <form action="php/usuarios/agregarUsuarios.php" method="post" autocomplete="off" enctype="multipart/form-data">
            <h3>Agregar nuevo usuario</h3>

            <div class="formularioElemento">
                <label for="correo">Correo</label>
                <input type="text" name="correo" id="correo" placeholder="usuario@ejemplo.com">
            </div>

            <div class="formularioElemento">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre" >
            </div>

            <div class="formularioElemento">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" placeholder="Apellido" >
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
                    <option value="2">Recursos Humanos</option>
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
                                <p class="tarjetaSubtitulo">Correo</p>
                                <p class="tarjetaTitulo">$datos[1]</p>
                                <p class="tarjetaSubtitulo">Nombre</p>
                                <p class="tarjetaTexto">$datos[2]</p>
                                <p class="tarjetaSubtitulo">Apellido</p>
                                <p class="tarjetaTexto">$datos[3]</p>
                                <p class="tarjetaSubtitulo">Rol</p>
                                <p class="tarjetaTexto">$datos[4]</p>
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
                                <p class="tarjetaSubtitulo">Correo</p>
                                <p class="tarjetaTitulo">$datos[1]</p>
                                <p class="tarjetaSubtitulo">Nombre</p>
                                <p class="tarjetaTexto">$datos[2]</p>
                                <p class="tarjetaSubtitulo">Apellido</p>
                                <p class="tarjetaTexto">$datos[3]</p>
                                <p class="tarjetaSubtitulo">Rol</p>
                                <p class="tarjetaTexto">$datos[4]</p>
                            END;
                        echo <<<END
                                    <p class="tarjetaSubtitulo">Número de serie</p>
                                    <p class="tarjetaTexto">$datos[0]</p>
                                </div>
                                <div class="tarjetaBotonera">
                                    <button type="submit" class="boton">Actualizar</button>
                                </div>
                            </div>
                            <select class="ocultar" name="numeroSerie" id="$datos[0]">
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
                                <p class="tarjetaSubtitulo">Correo</p>
                                <p class="tarjetaTitulo">$datos[1]</p>
                                <p class="tarjetaSubtitulo">Nombre</p>
                                <p class="tarjetaTexto">$datos[2]</p>
                                <p class="tarjetaSubtitulo">Apellido</p>
                                <p class="tarjetaTexto">$datos[3]</p>
                                <p class="tarjetaSubtitulo">Rol</p>
                                <p class="tarjetaTexto">$datos[4]</p>
                            END;
                        <<<END
                                    <p class="tarjetaSubtitulo">Número de serie</p>
                                    <p class="tarjetaTexto">$datos[0]</p>
                                </div>
                                <div class="tarjetaBotonera">
                                    <button type="submit" class="boton">Eliminar</button>
                                </div>
                            </div>
                            <select class="ocultar" name="numeroSerie" id="$datos[0]">
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
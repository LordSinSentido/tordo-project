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
            <h2>Panel de maquinarías</h2>
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
        <form action="php/maquinarias/agregarMaquinaria.php" method="post" autocomplete="off" enctype="multipart/form-data">
            <h3>Agregar nuevo proyecto</h3>

            <div class="formularioElemento">
                <label for="tipo">Tipo de maquinaría</label>
                <input type="text" name="tipo" id="tipo" placeholder="Motoconformadora">
            </div>

            <div class="formularioElemento">
                <label for="modelo">Modelo de la maquinaría</label>
                <input type="text" name="modelo" id="modelo" placeholder="140 M" >
            </div>

            <div class="formularioElemento">
                <label for="marca">Marca de la maquinaría</label>
                <input type="text" name="marca" id="marca" placeholder="Caterpillar" >
            </div>

            <div class="formularioElemento">
                <label for="descripcion">Descripción de la maquinaría</label>
                <textarea name="descripcion" id="descripcion" placeholder="La maquína está en buen estado..."></textarea>
            </div>

            <div class="formularioElemento">
                <label for="numeroSerie">Número de serie de la maquinaría</label>
                <input type="text" name="numeroSerie" id="numeroSerie" placeholder="CAD0000XXXXX00000X" required>
            </div>

            <div class="formularioElemento">
                <label for="imagen">Sube una imagen</label>
                <input type="file" name="imagen" id="imagen" required>
            </div>

            <div class="formularioElemento">
                <label for="estatus">Estatus de la maquina</label>
                <select name="estatus" id="estatus">
                    <option value="1">Disponible</option>
                    <option value="0">No disponible</option>
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
                $leer = "SELECT * FROM maquinarias";
                $query = $conexion->query($leer);

                if ($query == true) {
                    while ($datos = mysqli_fetch_array($query)) {
                        echo <<<END
                        <div class="tarjeta">
                            <div class="tarjetaImagen">
                                <img src="../inicio/img/maquinaria/$datos[6]" alt="$datos[1] $datos[3] de la marca $datos[2]">
                            </div>
                            <div class="tarjetaCuerpo">
                                <p class="tarjetaTitulo">$datos[1]</p>
                                <p class="tarjetaSubtitulo">Modelo</p>
                                <p class="tarjetaTexto">$datos[3]</p>
                                <p class="tarjetaSubtitulo">Marca</p>
                                <p class="tarjetaTexto">$datos[2]</p>
                                <p class="tarjetaSubtitulo">Descripción</p>
                                <p class="tarjetaTexto">$datos[4]</p>
                                <p class="tarjetaSubtitulo">Estatus</p>
                        END;
                        if ($datos[5] == 1) {
                            echo '<p class="tarjetaTexto">Disponible</p>';
                        }else {
                            echo '<p class="tarjetaTexto">No disponible</p>';
                        }
                        echo <<<END
                                <p class="tarjetaSubtitulo">Número de serie</p>
                                <p class="tarjetaTexto">$datos[0]</p>
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
                $leer = "SELECT * FROM maquinarias";
                $query = $conexion->query($leer);

                if ($query == true) {
                    while ($datos = mysqli_fetch_array($query)) {
                        echo <<<END
                        <form action="php/maquinarias/editarMaquinaria.php" method="post" autocomplete="off">
                            <div class="tarjeta">
                                <div class="tarjetaImagen">
                                    <img src="../inicio/img/maquinaria/$datos[6]" alt="$datos[1] $datos[3] de la marca $datos[2]">
                                </div>
                                <div class="tarjetaCuerpo">
                                    <p class="tarjetaTitulo">$datos[1]</p>
                                    <p class="tarjetaSubtitulo">Modelo</p>
                                    <p class="tarjetaTexto">$datos[3]</p>
                                    <p class="tarjetaSubtitulo">Marca</p>
                                    <p class="tarjetaTexto">$datos[2]</p>
                                    <p class="tarjetaSubtitulo">Descripción</p>
                                    <p class="tarjetaTexto">$datos[4]</p>
                                    <p class="tarjetaSubtitulo">Estatus</p>
                        END;
                        if ($datos[5] == 1) {
                            echo '<p class="tarjetaTexto">Disponible</p>';
                        }else {
                            echo '<p class="tarjetaTexto">No disponible</p>';
                        }
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
                $leer = "SELECT * FROM maquinarias";
                $query = $conexion->query($leer);

                if ($query == true) {
                    while ($datos = mysqli_fetch_array($query)) {
                        echo <<<END
                        <form action="php/maquinarias/eliminarMaquinaria.php" method="post" autocomplete="off">
                            <div class="tarjeta">
                                <div class="tarjetaImagen">
                                    <img src="../inicio/img/maquinaria/$datos[6]" alt="$datos[1] $datos[3] de la marca $datos[2]">
                                </div>
                                <div class="tarjetaCuerpo">
                                    <p class="tarjetaTitulo">$datos[1]</p>
                                    <p class="tarjetaSubtitulo">Modelo</p>
                                    <p class="tarjetaTexto">$datos[3]</p>
                                    <p class="tarjetaSubtitulo">Marca</p>
                                    <p class="tarjetaTexto">$datos[2]</p>
                                    <p class="tarjetaSubtitulo">Descripción</p>
                                    <p class="tarjetaTexto">$datos[4]</p>
                                    <p class="tarjetaSubtitulo">Estatus</p>
                        END;
                        if ($datos[5] == 1) {
                            echo '<p class="tarjetaTexto">Disponible</p>';
                        }else {
                            echo '<p class="tarjetaTexto">No disponible</p>';
                        }
                        echo <<<END
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
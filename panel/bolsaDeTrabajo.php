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
            <h2>Panel de bolsa de trabajo</h2>
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
        <form action="php/proyectos/agregarBolsa.php" method="post" autocomplete="off" enctype="multipart/form-data">
            <h3>Agregar nuevo puesto</h3>

            <div class="formularioElemento">
                <label for="id">Identificación</label>
                <textarea name="id" id="id" placeholder="Identificación"></textarea>
            </div>  
            
            <div class="formularioElemento">
                <label for="Puesto">Puesto</label>
                <select name="Puesto" id="Puesto">
                    <option value="0">Contador</option>
                    <option value="1">Ingeniero</option>
                    <option value="2">Operador</option>
                    <option value="3">Jefe de operación</option>
                    <option value="4">Becario</option> 
                </select>
            </div>

            <div class="formularioElemento">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" placeholder="Descripción de lo que se hará en el puesto."></textarea>
            </div>        

            <div class="formularioElemento">
                <label for="requerimientos">Requerimientos</label>
                <textarea name="requerimientos" id="requerimientos" placeholder="Requesitos a cumplir."></textarea>
            </div>

            <div class="formularioElemento">
                <label for="sueldo">Sueldo y Prestaciones</label>
                <textarea name="sueldo" id="sueldo" placeholder="sueldo y prestaciones que se ofrecen por el puesto."></textarea>
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
                $leer = "SELECT * FROM bolsa";
                $query = $conexion->query($leer);

                if ($query == true) {
                    while ($datos = mysqli_fetch_array($query)) {
                        echo <<<END
                        <div class="tarjeta">
                            <div class="tarjetaCuerpo">
                                <p class="tarjetaSubtitulo">Id</p>
                                <p class="tarjetaTexto">$datos[0]</p>
                                <p class="tarjetaSubtitulo">Puesto</p>
                                <p class="tarjetaTexto">$datos[1]</p>
                                <p class="tarjetaSubtitulo">Descripción</p>
                                <p class="tarjetaTexto">$datos[2]</p>
                                <p class="tarjetaSubtitulo">Requisitos</p>
                                <p class="tarjetaTexto">$datos[3]</p>
                                <p class="tarjetaSubtitulo">Sueldo</p>
                                <p class="tarjetaTexto">$datos[4]</p>
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
                $leer = "SELECT * FROM bolsatrabajo";
                $query = $conexion->query($leer);

                if ($query == true) {
                    while ($datos = mysqli_fetch_array($query)) {
                        echo <<<END
                        <form action="php/bolsa/editarBolsa.php" method="post" autocomplete="off">
                            <div class="tarjeta">
                                <div class="tarjetaCuerpo">
                                    <p class="tarjetaSubtitulo">Id</p>
                                    <p class="tarjetaTexto">$datos[0]</p>
                                    <p class="tarjetaSubtitulo">Puesto</p>
                                    <p class="tarjetaTexto">$datos[1]</p>
                                    <p class="tarjetaSubtitulo">Descripción</p>
                                    <p class="tarjetaTexto">$datos[2]</p>
                                    <p class="tarjetaSubtitulo">Requisitos</p>
                                    <p class="tarjetaTexto">$datos[3]</p>
                                    <p class="tarjetaSubtitulo">Sueldo</p>
                                    <p class="tarjetaTexto">$datos[4]</p>
                                </div>
                                <div class="tarjetaBotonera">
                                    <button type="submit" class="boton">Actualizar</button>
                                </div>
                            </div>
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
                $leer = "SELECT * FROM bolsatrabajo";
                $query = $conexion->query($leer);

                if ($query == true) {
                    while ($datos = mysqli_fetch_array($query)) {
                        echo <<<END
                        <form action="php/bolsa/eliminarBolsa.php" method="post" autocomplete="off">
                            <div class="tarjeta">
                                <div class="tarjetaCuerpo">
                                    <p class="tarjetaSubtitulo">Id</p>
                                    <p class="tarjetaTexto">$datos[0]</p>
                                    <p class="tarjetaSubtitulo">Puesto</p>
                                    <p class="tarjetaTexto">$datos[1]</p>
                                    <p class="tarjetaSubtitulo">Descripción</p>
                                    <p class="tarjetaTexto">$datos[2]</p>
                                    <p class="tarjetaSubtitulo">Requisitos</p>
                                    <p class="tarjetaTexto">$datos[3]</p>
                                    <p class="tarjetaSubtitulo">Sueldo</p>
                                    <p class="tarjetaTexto">$datos[4]</p>
                                </div>
                                <div class="tarjetaBotonera">
                                    <button type="submit" class="boton">Eliminar</button>
                                </div>
                            </div>
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
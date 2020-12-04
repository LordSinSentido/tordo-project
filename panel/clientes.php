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
            <h2>Panel de clientes</h2>
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
        <form action="php/clientes/agregarClientes.php" method="post" autocomplete="off" enctype="multipart/form-data">
            <h3>Agregar nuevo cliente</h3>
            
            <div class="formularioElemento">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="María">
            </div>

            <div class="formularioElemento">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" placeholder="Martínez">
            </div>

            <div class="formularioElemento">
                <label for="curp">CURP</label>
                <input type="text" name="curp" id="curp" placeholder="XXXX00000XXXXXX00">
            </div>

            <div class="formularioElemento">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" id="direccion" placeholder="Fuelle #123 A">
            </div>

            <div class="formularioElemento">
                <label for="correo">Correo</label>
                <input type="email" name="correo" id="correo" placeholder="correo@ejemplo.com">
            </div>

            <div class="formularioElemento">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" id="telefono" placeholder="5513467982">
            </div>

            <div class="formularioElemento">
                <label for="fecha">Fecha del servicio</label>
                <input type="date" name="fecha" id="fecha">
            </div>

            <div class="formularioElemento">
                <label for="rento">Maquinaria que rentó</label>
                <input type="text" name="rento" id="rento" placeholder="CAD0000ASDFG00000X">
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
                $leer = "SELECT * FROM clientes";
                $query = $conexion->query($leer);

                if ($query == true) {
                    while ($datos = mysqli_fetch_array($query)) {
                        echo <<<END
                        <div class="tarjeta">
                            <div class="tarjetaCuerpo">
                                <p class="tarjetaTitulo">$datos[1] $datos[2]</p>
                                <p class="tarjetaSubtitulo">CURP</p>
                                <p class="tarjetaTexto">$datos[3]</p>
                                <p class="tarjetaSubtitulo">Correo</p>
                                <p class="tarjetaTexto">$datos[5]</p>
                                <p class="tarjetaSubtitulo">Teléfono</p>
                                <p class="tarjetaTexto">$datos[6]</p>
                                <p class="tarjetaSubtitulo">Dirección</p>
                                <p class="tarjetaTexto">$datos[4]</p>
                                <p class="tarjetaSubtitulo">Fecha del servicio</p>
                                <p class="tarjetaTexto">$datos[7]</p>
                                <p class="tarjetaSubtitulo">Maquinaría rentada</p>
                                <p class="tarjetaTexto">$datos[8]</p>
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
                $leer = "SELECT * FROM clientes";
                $query = $conexion->query($leer);

                if ($query == true) {
                    while ($datos = mysqli_fetch_array($query)) {
                        echo <<<END
                        <form action="php/clientes/editarClientes.php" method="post" autocomplete="off">
                            <div class="tarjeta">
                                <div class="tarjetaCuerpo">
                                    <p class="tarjetaTitulo">$datos[1] $datos[2]</p>
                                    <p class="tarjetaSubtitulo">CURP</p>
                                    <p class="tarjetaTexto">$datos[3]</p>
                                    <p class="tarjetaSubtitulo">Correo</p>
                                    <p class="tarjetaTexto">$datos[5]</p>
                                    <p class="tarjetaSubtitulo">Teléfono</p>
                                    <p class="tarjetaTexto">$datos[6]</p>
                                    <p class="tarjetaSubtitulo">Dirección</p>
                                    <p class="tarjetaTexto">$datos[4]</p>
                                    <p class="tarjetaSubtitulo">Fecha del servicio</p>
                                    <p class="tarjetaTexto">$datos[7]</p>
                                    <p class="tarjetaSubtitulo">Maquinaría rentada</p>
                                    <p class="tarjetaTexto">$datos[8]</p>
                                </div>
                                <div class="tarjetaBotonera">
                                    <button type="submit" class="boton">Actualizar</button>
                                </div>
                            </div>
                            <select class="ocultar" name="id" id="$datos[0]">
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
                $leer = "SELECT * FROM clientes";
                $query = $conexion->query($leer);

                if ($query == true) {
                    while ($datos = mysqli_fetch_array($query)) {
                        echo <<<END
                        <form action="php/clientes/eliminarClientes.php" method="post" autocomplete="off">
                            <div class="tarjeta">
                                <div class="tarjetaCuerpo">
                                    <p class="tarjetaTitulo">$datos[1] $datos[2]</p>
                                    <p class="tarjetaSubtitulo">CURP</p>
                                    <p class="tarjetaTexto">$datos[3]</p>
                                    <p class="tarjetaSubtitulo">Correo</p>
                                    <p class="tarjetaTexto">$datos[5]</p>
                                    <p class="tarjetaSubtitulo">Teléfono</p>
                                    <p class="tarjetaTexto">$datos[6]</p>
                                    <p class="tarjetaSubtitulo">Dirección</p>
                                    <p class="tarjetaTexto">$datos[4]</p>
                                    <p class="tarjetaSubtitulo">Fecha del servicio</p>
                                    <p class="tarjetaTexto">$datos[7]</p>
                                    <p class="tarjetaSubtitulo">Maquinaría rentada</p>
                                    <p class="tarjetaTexto">$datos[8]</p>
                                </div>
                                <div class="tarjetaBotonera">
                                    <button type="submit" class="boton">Eliminar</button>
                                </div>
                            </div>
                            <select class="ocultar" name="id" id="$datos[0]">
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
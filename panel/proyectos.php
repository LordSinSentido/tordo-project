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
    <link rel="stylesheet" href="css/flickity.css">
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
            <h2>Panel de proyectos</h2>
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
        <form action="php/proyectos/agregarProyecto.php" method="post" autocomplete="off" enctype="multipart/form-data">
        <h3>Agregar nuevo proyecto</h3>
        
        <div class="formularioElemento">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" placeholder="Título del proyecto." required>
        </div>        
        
        <div class="formularioElemento">
            <label for="lugar">Lugar</label>
            <input type="text" name="lugar" id="lugar" placeholder="Lugar donde se realizará el proyecto.">
        </div>
        
        <div class="formularioElemento">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" placeholder="Descripción del proyecto." required></textarea>
            </div>        
            
            <div class="formularioElemento">
                <label for="alcance">Alcance</label>
                <textarea name="alcance" id="alcance" placeholder="Alcance del proyecto."></textarea>
            </div>
            
            <div class="formularioElemento">
                <label for="fecha">Fecha de conclución</label>
                <input type="date" name="fecha" id="fecha" placeholder="Fecha de realización del proyecto." required>
            </div>
            
            <div class="formularioElemento">
                <label for="imagen1">Subir imagen 1</label>
                <input type="file" name="imagen1" id="imagen1" required>
            </div>
            
            <div class="formularioElemento">
                <label for="imagen2">Subir imagen 2</label>
                <input type="file" name="imagen2" id="imagen2">
            </div>
            
            <div class="formularioElemento">
                <label for="imagen3">Subir imagen 3</label>
                <input type="file" name="imagen3" id="imagen3">
            </div>
            
            <div class="formularioBotonera">
                <button type="reset" class="boton">Limpiar</button>
                <button type="submit" class="boton">Enviar</button>
            </div>
        </form>
    </section>
    
    <section id="panelVer">
        <h3>Entradas guardadas</h3>
        
        <div class="grid">
            <?php
                include("php/conexion/casper.php");
                $leer = "SELECT * FROM proyectos ORDER BY fecha DESC";
                $query = $conexion->query($leer);
                
                if ($query == true) {
                    while ($datos = mysqli_fetch_array($query)) {
                        echo <<<END
                        <div class="tarjeta">
                        <div class="tarjetaImagen">
                        <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                        END;
                        if ($datos[6] != '') {
                            echo '<div id="sldr1" class="gallery-cell"><img src="../inicio/img/proyectos/' . $datos[6] . '" alt="$datos[1]"></div>';
                        }
                        
                        if ($datos[7] != '') {
                            echo '<div id="sldr2" class="gallery-cell"><img src="../inicio/img/proyectos/' . $datos[7] . '" alt="$datos[1]"></div>';
                        }
                        
                        if ($datos[8] != '') {
                            echo '<div id="sldr3" class="gallery-cell"><img src="../inicio/img/proyectos/' . $datos[8] . '" alt="$datos[1]"></div>';
                        }
                        echo <<<END
                        </div>
                        </div>
                        <div class="tarjetaCuerpo">
                        <p class="tarjetaTitulo">$datos[1]</p>
                        <p class="tarjetaSubtitulo">Lugar</p>
                        <p class="tarjetaTexto">$datos[2]</p>
                        <p class="tarjetaSubtitulo">Descripción</p>
                        <p class="tarjetaTexto">$datos[3]</p>
                        <p class="tarjetaSubtitulo">Alcance</p>
                        <p class="tarjetaTexto">$datos[4]</p>
                        <p class="tarjetaSubtitulo">Fecha</p>
                        <p class="tarjetaTexto">$datos[5]</p>
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
                $leer = "SELECT * FROM proyectos ORDER BY fecha DESC";
                $query = $conexion->query($leer);
                
                if ($query == true) {
                    while ($datos = mysqli_fetch_array($query)) {
                        echo <<<END
                        <form action="php/proyectos/editarProyecto.php" method="post" autocomplete="off">
                        <div class="tarjeta">
                        <div class="tarjetaImagen">
                        <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                        END;
                        if ($datos[6] != '') {
                            echo '<div id="sldr1" class="gallery-cell"><img src="../inicio/img/proyectos/' . $datos[6] . '" alt="$datos[1]"></div>';
                        }
                        
                        if ($datos[7] != '') {
                            echo '<div id="sldr2" class="gallery-cell"><img src="../inicio/img/proyectos/' . $datos[7] . '" alt="$datos[1]"></div>';
                        }
                        
                        if ($datos[8] != '') {
                            echo '<div id="sldr3" class="gallery-cell"><img src="../inicio/img/proyectos/' . $datos[8] . '" alt="$datos[1]"></div>';
                        }
                        echo <<<END
                        </div>
                        </div>
                        <div class="tarjetaCuerpo">
                        <p class="tarjetaTitulo">$datos[1]</p>
                        <p class="tarjetaSubtitulo">Lugar</p>
                        <p class="tarjetaTexto">$datos[2]</p>
                        <p class="tarjetaSubtitulo">Descripción</p>
                        <p class="tarjetaTexto">$datos[3]</p>
                        <p class="tarjetaSubtitulo">Alcance</p>
                        <p class="tarjetaTexto">$datos[4]</p>
                        <p class="tarjetaSubtitulo">Fecha</p>
                        <p class="tarjetaTexto">$datos[5]</p>
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
        <h3>Selecciona el proyecto que deseas eliminar</h3>
        
        <div class="grid">
            <?php
                $leer = "SELECT * FROM proyectos ORDER BY fecha DESC";
                $query = $conexion->query($leer);
                
                if ($query == true) {
                    while ($datos = mysqli_fetch_array($query)) {
                        echo <<<END
                        <form action="php/proyectos/eliminarProyecto.php" method="post" autocomplete="off">
                        <div class="tarjeta">
                        <div class="tarjetaImagen">
                        <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                        END;
                        if ($datos[6] != '') {
                            echo '<div id="sldr1" class="gallery-cell"><img src="../inicio/img/proyectos/' . $datos[6] . '" alt="$datos[1]"></div>';
                        }
                        
                        if ($datos[7] != '') {
                            echo '<div id="sldr2" class="gallery-cell"><img src="../inicio/img/proyectos/' . $datos[7] . '" alt="$datos[1]"></div>';
                        }
                        
                        if ($datos[8] != '') {
                            echo '<div id="sldr3" class="gallery-cell"><img src="../inicio/img/proyectos/' . $datos[8] . '" alt="$datos[1]"></div>';
                        }
                        echo <<<END
                        </div>
                        </div>
                        <div class="tarjetaCuerpo">
                        <p class="tarjetaTitulo">$datos[1]</p>
                        <p class="tarjetaSubtitulo">Lugar</p>
                        <p class="tarjetaTexto">$datos[2]</p>
                        <p class="tarjetaSubtitulo">Descripción</p>
                        <p class="tarjetaTexto">$datos[3]</p>
                        <p class="tarjetaSubtitulo">Alcance</p>
                        <p class="tarjetaTexto">$datos[4]</p>
                        <p class="tarjetaSubtitulo">Fecha</p>
                        <p class="tarjetaTexto">$datos[5]</p>
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
    
    <script src="js/flickity.js"></script>
    <script src="js/panel.js"></script>
</body>
</html>

<?php
$conexion->close();
die();
?>
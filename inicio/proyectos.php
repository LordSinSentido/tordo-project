<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tordo Tecnologías | Proyectos</title>
        <link rel="shortcut icon" href="img/icons/logo.svg" type="image/svg+xml">
        <link rel="stylesheet" href="css/flickity.css">
        <link rel="stylesheet" href="css/tordo.css">
        <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="modalContenedor">
            <div class="modal">
                <div class="modalContenido"> 
                    <div class="modalTitulo">
                        <h2></h2>
                    </div>

                    <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                        <div id="sldr1" class="gallery-cell"></div>
                        <div id="sldr2" class="gallery-cell"></div>
                        <div id="sldr3" class="gallery-cell"></div>
                    </div>

                    <div class="modalCuerpo">
                        <p class="modalSubtitulo">
                            <b>Descripción</b>
                        </p>
                        <p class="modalDescripcion">

                        </p>
                        <p class="modalSubtitulo">
                            <b>Alcance</b>
                        </p>
                        <p class="modalAlcance">

                        </p>
                        <p class="modalSubtitulo">
                            <b>Fecha</b>
                        </p>
                        <p class="modalFecha">

                        </p>
                    </div>
                    <div class="modalPie">
                        <a class="botones modalCerrar" id="cerrar">Cerrar</a>
                    </div>
                </div>
            </div>
        </div>

        <header>
            <div id="navegacion">
                <div class="logotipo">
                    <img id="logo" src="img/icons/logo.svg" alt="Logotipo">
                    <div>
                        <h1>Tordo tecnologías</h1>
                        <p>Calidad en construcción subterránea</p>
                    </div>
                </div>
                <nav>
                    <a class="botones" href="index.php">Inicio</a>
                    <a class="botones" href="servicios.php">Servicios</a>
                    <a class="botones botonBloqueado">Proyectos</a>
                    <a class="botones" href="rentaDeMaquinaria.php">Maquinaría</a>
                    <a class="botones" href="contacto.php">Contacto</a>
                </nav>
            </div>
        </header>

        <section class="titulo" id="proyectos">
            <div id="slogan">
                <p id="sloganTitulo">La excelencia habla por sí sola<p>
                <p id="sloganDescripcion">A continuación te presentamos cada uno de los proyectos en los que hemos trabajado.</p>
            </div>
        </section>

        <section>
            <h2>Nuestros proyectos</h2>
            <div class="grid" id="importacion">
            <?php
                include("php/melchior.php");
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

        <footer>
            <div id="footerTitulo">
                <div class="logotipo">
                    <img id="logo" src="img/icons/logo.svg" alt="Logotipo">
                    <div>
                        <h1>Tordo tecnologías</h1>
                        <p>Calidad en construcción subterránea</p>
                    </div>
                </div>
            </div>

            <section id="footerCuerpo">
                <div class="gridFooter">
                    <ul>
                        <p><b>Secciones del inicio</b></p>
                        <li><a href="index.php#nosotros">Nosotros</a></li>
                        <li><a href="index.php#iservicios">Servicios</a></li>
                        <li><a href="index.php#iproyectos">Recientes</a></li>
                        <li><a href="index.php#icontacto">Contáctanos</a></li>
                    </ul>

                    <ul>
                        <p><b>Enlaces de contacto</b></p>
                        <li><a href="mailto:contacto@tordotec.com?Subject=Contacto">Correo eléctronico</a></li>
                        <li><a href="tel:5557102592">Telefono para Guadalajara</a></li>
                        <li><a href="tel:5557102592">Telefono para Ciudad de México</a></li>
                        <li><a href="tel:5557102592">Mapa para Ciudad de México</a></li>
                        <li><a href="tel:5557102592">Mapa para Guadalajara</a></li>
                    </ul>

                    <ul>
                        <p><b>Páginas del sitio</b></p>
                        <li><a href="index.php">Página principal</a></li>
                        <li><a href="servicios.php">Servicios que ofrecemos</a></li>
                        <li><a href="proyectos.php">Todos los proyectos</a></li>
                        <li><a href="rentaDeMaquinaria.php">Renta de maquinaria</a></li>
                        <li><a href="bolsaDeTrabajo.php">Bolsa de trabajo</a></li>
                    </ul>
                </div>

                <div id="copyright">
                    <p>&copy; Todos los derechos reservados. Tordo Tecnologías. 2020.</p>
                </div>
            </section>
        </footer>

        <!--script src="js/proyectos.js"></script-->
        <script src="js/flickity.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tordo Tecnologías | Inicio</title>
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
                    <a class="botones botonBloqueado">Inicio</a>
                    <a class="botones" href="servicios.php">Servicios</a>
                    <a class="botones" href="proyectos.php">Proyectos</a>
                    <a class="botones" href="rentaDeMaquinaria.php">Maquinaría</a>
                    <a class="botones" href="contacto.php">Contacto</a>
                </nav>
            </div>
        </header>
        
        <section class="titulo" id="inicio">
            <div id="slogan">
                <p id="sloganTitulo">Trabajamos con profesionalismo, responsabilidad y honestidad<p>
                <p id="sloganDescripcion">Tenemos experiencia incursionando en obras de construcción principalmente de instalación de tuberías para drenaje, mediante tecnología de punta, ofreciendo calidad que satisfagan las necesidades de nuestros clientes, privilegiando la conservación del medio ambiente.</p>
            </div>
        </section>
        
        <section id="nosotros">
            <h2>Acerca de nosotros</h2>
            <div>
                <div>
                    <p>La experiencia respalda a todos los integrantes de nuestra empresa que de forma profesional, responsable y honesta, trabajan día a día para satisfacer a detalle las necesidades de nuestros clientes que acuden a nosotros en busca de una solución innovadora.</p>
                </div>
                <div>
                    <div class="contenedor">
                        <img class="iconos nosotrosIconos" src="img/icons/rocket.svg" alt="Misión">
                        <div>
                            <h3>Misión</h3>
                            <p>Tordo Tecnologías SA de CV, realiza hincado de tuberías dentro del área de obras subterráneas con el uso de tecnologías que promueven y favorecen la conservación del medio ambiente, alineados a los estándares de calidad de la industria que garantizan la satisfacción de las necesidades de nuestros clientes. Nuestra filosofía de trabajo se basa en profesionalismo, responsabilidad y honestidad.</p>
                        </div>
                    </div>

                    <div class="contenedor">
                        <img class="iconos nosotrosIconos" src="img/icons/bullseye.svg" alt="Visión">
                        <div>
                            <h3>Visión</h3>
                            <p>Tordo Tecnologías SA de CV se consolidará como una empresa líder en el campo de hincado de tuberías dentro del área de obras subterráneas, reconocida por el uso de tecnología actualizada e innovación en sus procesos constructivos, con altos estándares de calidad y preservación del medio ambiente; que la llevan a ser una organización competitiva y rentable.</p>
                        </div>
                    </div>

                    <div class="contenedor">
                        <img class="iconos nosotrosIconos" src="img/icons/panal.svg" alt="Política de calidad">
                        <div>
                            <h3>Política de calidad</h3>
                            <p>En Tordo Tecnologías SA de CV realizamos hincado de tuberías dentro del área de obras subterráneas, mediante la actualización de procedimientos constructivos y de tecnología; procurando el cumplimiento de los requisitos reglamentarios y estándares de calidad que nos permiten satisfacer los requerimientos y expectativas de nuestros clientes, basados en innovación y servicio de calidad. Igualmente promovemos el mejoramiento continuo de nuestros procesos por medio del Sistema de Gestión de Calidad y el manejo eficaz y eficiente de recursos, con el propósito de garantizar la confianza y satisfacción de nuestros clientes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="iservicios">
            <h2>Nuestros servicios</h2>
            <div class="grid" id="toast">
                <div class="toast">
                    <img src="img/icons/street.svg" alt="Icono" class="iconos toastIcono">
                    <p>Hincado de tuberia de concreto con equipo TBM en diametros de 1.22, 1.52 y 1.83 m.</p>
                </div>
                <div class="toast">
                    <img src="img/icons/tube.svg" alt="Icono" class="iconos toastIcono">
                    <p>Construcción de estructuras de concreto, plantas de tratamiento y cárcamos de bombeo.</p>
                </div>
                <div class="toast">
                    <img src="img/icons/machine.svg" alt="Icono" class="iconos toastIcono">
                    <p>Renta de maquinaria.<br><a class="toastEnlace" href="rentaDeMaquinaria.php">Más información »</a></p>
                </div>
            </div>
            <div class="botonDerecha">
                <a class="botones" href="servicios.php">Ver todos los servicios</a>
            </div>
        </section>
        
        <section id="iproyectos">
            <h2>Proyectos recientes</h2>
            <div class="grid" id="tarjetas">
            <?php
                include("php/melchior.php");
                $leer = "SELECT * FROM proyectos ORDER BY fecha DESC";
                $query = $conexion->query($leer);
                
                if ($query == true) {
                    $i = 0;
                    while ($datos = mysqli_fetch_array($query)) {
                        echo <<<END
                        <div class="tarjeta">
                        <div class="tarjetaImagen">
                        <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                        END;
                        if ($datos[6] != '') {
                            echo '<div id="sldr1" class="gallery-cell"><img src="img/proyectos/' . $datos[6] . '" alt="$datos[1]"></div>';
                        }
                        
                        if ($datos[7] != '') {
                            echo '<div id="sldr2" class="gallery-cell"><img src="img/proyectos/' . $datos[7] . '" alt="$datos[1]"></div>';
                        }
                        
                        if ($datos[8] != '') {
                            echo '<div id="sldr3" class="gallery-cell"><img src="img/proyectos/' . $datos[8] . '" alt="$datos[1]"></div>';
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
                        $i++;
                        if ($i == 3) {
                            break;
                        }
                    }
                }
            ?>
            </div>
            <div class="botonDerecha">
                <a class="botones" href="proyectos.php">Ver todos los proyectos</a>
            </div>
        </section>
        
        <section id="icontacto">
            <h2>Contáctanos</h2>
            <div class="gridContacto">
                <div class="toast">
                    <!--img src="img/public/icons/cdmx.svg" alt="Ciudad de México" class="iconos toastIcono"-->
                    <p class="cardTitulo"><b>Ciudad de México</b></p>
                    <p>Valle Nuevo #6<br>Valle de Aragón 2a Sección, CP. 57100<br>Nezahualcóyotl, Estado de México</p>
                    <p><br>Teléfono: <a class="toastEnlace" href="tel:5557102592">+52 55 5710 2592</a></p>
                    <p>Correo: <a class="toastEnlace" href="mailto:contacto@tordotec.com?Subject=Contacto">contacto@tordotec.com</a></p>
                </div>
                
                <div class="toast">
                    <!--img src="img/public/icons/gld.svg" alt="Guadalajara" class="iconos toastIcono"-->
                    <p class="cardTitulo"><b>Guadalajara</b></p>
                    <p>Sudán #1071<br>Cuauhtemoc, CP. 44750<br>Guadalajara, Jalisco</p>
                    <p><br>Teléfono: <a class="toastEnlace" href="tel:3336652725">+52 33 3665 2725</a></p>
                    <p>Correo: <a class="toastEnlace" href="mailto:contacto@tordotec.com?Subject=Contacto">contacto@tordotec.com</a></p>
                </div>
            </div>
            <div class="botonDerecha">
                <a class="botones" href="contacto.php">Ver más información</a>
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
        
        <!--script src="js/index.js"></script-->
        <script src="js/flickity.js"></script>
    </body>
    </html>
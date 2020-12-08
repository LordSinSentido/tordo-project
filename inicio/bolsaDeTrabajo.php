<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tordo Tecnologías | Empleos</title>
        <link rel="shortcut icon" href="img/icons/logo.svg" type="image/svg+xml">
        <link rel="stylesheet" href="css/tordo.css">
        <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-core/11.0.0/css/fabric.min.css"/>
    </head>
    <body>
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
                    <a class="botones" href="proyectos.php">Proyectos</a>
                    <a class="botones" href="rentaDeMaquinaria.php">Maquinaría</a>
                    <a class="botones" href="contacto.php">Contacto</a>
                </nav>
            </div>
        </header>

        <section class="titulo" id="bolsa">
            <div id="slogan">
                <p id="sloganTitulo">Únete a nuestro equipo<p>
                <p id="sloganDescripcion">¿Estás buscando empleo? Puedes únirte a nuestro equipo de trabajo, revisa las ofertas que tenemos en diferentes rubros a continuación.</p>
            </div>
        </section>

        <section>
            <h2>Vacantes disponibles</h2>
            <p>Si estás interesado en algún puesto que esté publicado en esta página, puedes ponerte en contacto con nuestro departamento de recursos humanos vía correo electrónico.</p>
            <div class="grid" id="importacion" style="margin-top: 2em;">
            <?php
                include("php/melchior.php");
                $leer = "SELECT * FROM bolsatrabajo";
                $query = $conexion->query($leer);

                if ($query == true) {
                    while ($datos = mysqli_fetch_array($query)) {
                        echo <<<END
                        <div class="tarjeta">
                            <div class="tarjetaCuerpo">
                                <p class="tarjetaTitulo">$datos[1]</p>
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

        <script src="js/bolsa.js"></script>
    </body>
</html>
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
                        <h1>Tordo tecnolog�as</h1>
                        <p>M�dulo de administraci�n y gesti�n integral</p>
                    </div>
                </div>
                <nav>
                    <p id="usuario">annaGtrrz@tordotec.com</p>
                    <a href="../conexion/cerrar.php" class="boton">Cerrar sesi�n</a>
                </nav>
            </div>
        </header>
        
        <section id="acciones">
            <div class="migas">
                <a href="../../proyectos.php" class="boton">&#10094;</a>
                <h2>Panel de proyectos > Actualizaci�n</h2>
            </div>
        </section>
        
        <section>
            <form action="actualizarProyecto.php" method="post" autocomplete="off">
                <h3>Editar proyecto</h3>
                
                <?php
                    include("../conexion/casper.php");
                    $id = $_POST['id'];

                    $leer = "SELECT * FROM proyectos WHERE id = '$id'";
                    $query = $conexion->query($leer);

                    
                    if ($query == true) {
                        while ($datos = mysqli_fetch_array($query)) {
                            echo <<<END

                                <div class="formularioElemento">
                                    <label for="Titulo">T�tulo</label>
                                    <input type="text" name="titulo" id="titulo" placeholder="T�tulo del proyecto." value="$datos[1]">
                                </div>        

                                <div class="formularioElemento">
                                    <label for="Lugar">Lugar</label>
                                    <input type="text" name="lugar" id="lugar" placeholder="Lugar donde se realizar� el proyecto." value="$datos[2]">
                                </div>

                                <div class="formularioElemento">
                                    <label for="Descripcion">Descripci�n</label>
                                    <textarea name="descripcion" id="descripcion" placeholder="Descripci�n del proyecto."> $datos[3] </textarea>
                                </div>        

                                <div class="formularioElemento">
                                    <label for="Alcance">Alcance</label>
                                    <textarea name="alcance" id="alcance" placeholder="Alcance del proyecto."> $datos[4] </textarea>
                                </div>

                                <div class="formularioElemento">
                                    <label for="Fecha">Fecha de concluci�n</label>
                                    <input type="date" name="fecha" id="fecha" placeholder="Fecha de realizaci�n del proyecto." value="$datos[5]">
                                </div>

                                <div class="formularioElemento">
                                    <label for="imagen">Subir imagen 1</label>
                                    <input type="file" name="img1" id="img1"> Imagen actual $datos[6]
                                </div>

                                <div class="formularioElemento">
                                    <label for="imagen">Subir imagen 2</label>
                                    <input type="file" name="imagen2" id="imagen2"> Imagen actual  $datos[7]
                                </div>
                                
                                <div class="formularioElemento">
                                    <label for="imagen">Subir imagen 3</label>
                                    <input type="file" name="imagen3" id="imagen3"> Imagen actual $datos[8]
                                </div>
                                
                                <div class="formularioElemento">
                                    <input type="hidden" name="id" id="id" value="$datos[0]">
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
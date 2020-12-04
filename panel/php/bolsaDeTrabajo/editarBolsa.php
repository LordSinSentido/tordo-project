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
                        <h1>Tordo tecnologías</h1>
                        <p>Módulo de administración y gestión integral</p>
                    </div>
                </div>
                <nav>
                    <p id="usuario"><?php echo $_SESSION["correo"];?></p>
                    <a href="../conexion/cerrar.php" class="boton">Cerrar sesión</a>
                </nav>
            </div>
        </header>
        
        <section id="acciones">
            <div class="migas">
                <a href="../../bolsaDeTrabajo.php" class="boton">&#10094;</a>
                <h2>Panel de maquinarías > Actualización del registro</h2>
            </div>
        </section>
        
        <section>
            <form action="actualizarBolsa.php" method="post" autocomplete="off">
                <h3>Agregar nueva maquinaria</h3>
                
                <?php
                    include("../conexion/casper.php");
                    $id = $_POST['id'];

                    $leer = "SELECT * FROM bolsatrabajo WHERE id = $id";
                    $query = $conexion->query($leer);

                    
                    if ($query == true) {
                        while ($datos = mysqli_fetch_array($query)) {
                            echo <<<END

                            <div class="formularioElemento">
                                <label for="puesto">Puesto</label>
                                <input type="text" name="puesto" id="puesto" placeholder="Contador" value="$datos[1]">
                            </div>

                            <div class="formularioElemento">
                                <label for="descripcion">Descripción</label>
                                <textarea name="descripcion" id="descripcion" placeholder="Se busca contador...">$datos[2]</textarea>
                            </div>        

                            <div class="formularioElemento">
                                <label for="requisitos">Requisitos</label>
                                <textarea name="requisitos" id="requisitos" placeholder="Los requisitos para este puesto son...">$datos[3]</textarea>
                            </div>

                            <div class="formularioElemento">
                                <label for="sueldo">Sueldo y Prestaciones</label>
                                <textarea name="sueldo" id="sueldo" placeholder="Ofrecemos el siguiente sueldo y prestaciones...">$datos[4]</textarea>
                            </div>

                            <div class="formularioElemento" class="ocultar">
                                <label for="id">Identificador</label>
                                <input type="text" name="id" id="id" value="$datos[0]" hidden>
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
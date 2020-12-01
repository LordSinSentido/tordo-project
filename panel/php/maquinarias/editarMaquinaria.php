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
                    <p id="usuario">annaGtrrz@tordotec.com</p>
                    <a href="" class="boton">Cerrar sesión</a>
                </nav>
            </div>
        </header>
        
        <section id="acciones">
            <div class="migas">
                <a href="../../maquinarias.php" class="boton">&#10094;</a>
                <h2>Panel de maquinarías > Actualización del registro</h2>
            </div>
        </section>
        
        <section>
            <form action="actualizarMaquinaria.php" method="post" autocomplete="off">
                <h3>Agregar nueva maquinaria</h3>
                
                <?php
                    include("../conexion/casper.php");
                    $numeroSerie = $_POST['numeroSerie'];

                    $leer = "SELECT * FROM maquinarias WHERE numeroSerie = '$numeroSerie'";
                    $query = $conexion->query($leer);

                    
                    if ($query == true) {
                        while ($datos = mysqli_fetch_array($query)) {
                            echo <<<END
                            <div class="formularioElemento">
                                <label for="tipo">Tipo de maquinaría</label>
                                <input type="text" name="tipo" id="tipo" placeholder="Motoconformadora" value="$datos[1]">
                            </div>

                            <div class="formularioElemento">
                                <label for="modelo">Modelo de la maquinaría</label>
                                <input type="text" name="modelo" id="modelo" placeholder="140 M" value="$datos[3]">
                            </div>

                            <div class="formularioElemento">
                                <label for="marca">Marca de la maquinaría</label>
                                <input type="text" name="marca" id="marca" placeholder="Caterpillar" value="$datos[2]">
                            </div>

                            <div class="formularioElemento">
                                <label for="descripcion">Descripción de la maquinaría</label>
                                <textarea name="descripcion" id="descripcion" placeholder="La maquína está en buen estado...">$datos[4]</textarea>
                            </div>

                            <div class="formularioElemento">
                                <label for="numeroSerie">Número de serie de la maquinaría (Solo lectura)</label>
                                <input type="text" name="numeroSerie" id="numeroSerie" placeholder="CAD0000XXXXX00000X" value="$datos[0]" readonly>
                            </div>

                            <div class="formularioElemento">
                                <label for="estatus">Estatus de la maquina</label>
                                <select name="estatus" id="estatus" value="$datos[5]">
                            END;

                            switch ($datos[5]) {
                                case '1':
                                    echo <<<END
                                        <option value="1" selected>Disponible</option>
                                        <option value="0">No disponible</option>
                                    END;
                                    break;

                                    case '0':
                                        echo <<<END
                                            <option value="1">Disponible</option>
                                            <option value="0" selected>No disponible</option>
                                        END;
                                        break;
                            }

                            echo <<<END
                                </select>
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
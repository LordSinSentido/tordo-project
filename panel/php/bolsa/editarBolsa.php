<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tordo | MAGI</title>
        <link rel="sh9ortcut icon" href="../../img/icons/logo.svg" type="image/svg+xml">
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
                <a href="../../bolsaDeTrabajo.php" class="boton">&#10094;</a>
                <h2>Panel de puestos > Actualización del registro</h2>
            </div>
        </section>
        
        <section>
            <form action="actualizarBolsa.php" method="post" autocomplete="off">
                <h3>Agregar nuevo puesto</h3>
                
                <?php
                    include("../conexion/casper.php");
                    $correo = $_POST['id'];

                    $leer = "SELECT * FROM bolsatrabajo WHERE id = '$id'";
                    $query = $conexion->query($leer);

                    
                    if ($query == true) {
                        while ($datos = mysqli_fetch_array($query)) {
                            echo <<<END
                            <div class="formularioElemento">
                                <label for="id">Identificador</label>
                                <input type="text" name="id" id="id" placeholder="CUA0000XXXX0000" value="$datos[0]" readonly>
                            </div>
                            <div class="formularioElemento">
                                <label for="puesto">Puesto</label>
                                <select name="puesto" id="puesto" value="$datos[1]">
                            END;

                            switch ($datos[1]) {
                                    case '0':
                                    echo <<<END
                                        <option value="0" selected>Contador</option>
                                        <option value="1">Ingeniero</option>
                                        <option value="2">Operador</option>
                                        <option value="3">Jefe de operación</option>
                                        <option value="4">Becario</option> 
                                    END;
                                    break;
                                    case '1':
                                    echo <<<END
                                        <option value="0">Contador</option>
                                        <option value="1" selected>Ingeniero</option>
                                        <option value="2">Operador</option>
                                        <option value="3">Jefe de operación</option>
                                        <option value="4">Becario</option> 
                                    END;
                                    break;
                                    case '2':
                                    echo <<<END
                                        <option value="0">Contador</option>
                                        <option value="1">Ingeniero</option>
                                        <option value="2" selected>Operador</option>
                                        <option value="3">Jefe de operación</option>
                                        <option value="4">Becario</option> 
                                    END;
                                    break;
                                    case '3':
                                    echo <<<END
                                        <option value="0">Contador</option>
                                        <option value="1">Ingeniero</option>
                                        <option value="2">Operador</option>
                                        <option value="3" selected>Jefe de operación</option>
                                        <option value="4">Becario</option>     
                                    END;
                                    break;
                                     case '4':
                                    echo <<<END
                                        <option value="0">Contador</option>
                                        <option value="1">Ingeniero</option>
                                        <option value="2">Operador</option>
                                        <option value="3">Jefe de operación</option>
                                        <option value="4" selected>Becario</option>     
                                    END;
                                    break;
                            }

                            echo <<<END
                                </select>
                            </div>
                            <div class="formularioElemento">
                                <label for="descripcion">Descripción</label>
                                <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion del puesto" value="$datos[2]">
                            </div>
                            <div class="formularioElemento">
                                <label for="requisitos">Requisitos</label>
                                <input type="text" name="requisitos" id="requisitos" placeholder="Requisitos necesarios" value="$datos[3]">
                            </div>
                            
                            <div class="formularioElemento">
                                <label for="sueldo">Sueldo</label>
                                <input type="text" name="sueldo" id="sueldo" placeholder="Sueldo y presaciones" value="$datos[3]">
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
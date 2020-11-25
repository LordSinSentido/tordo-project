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
            <a href="inicio.html" class="boton">&#10094;</a>
            <h2>Panel de maquinarías</h2>
        </div>

        <h3>Acciones rápidas</h3>
        <div class="botoneraIzquierda">
            <a id="ver" class="boton">Ver</a>
            <a id="agregar" class="boton">Agregar</a>
            <a id="editar" class="boton">Actualizar</a>
            <a id="eliminar" class="boton">Eliminar</a>
        </div>
    </section>

    <section id="panelAgregar" class="ocultar">
        <form action="php/maquinarias/agregarMaquinaria.php" method="post" autocomplete="off">
            <h3>Agregar nueva maquinaria</h3>

            <div class="formularioElemento">
                <label for="tipo">Tipo de maquinaría</label>
                <input type="text" name="tipo" id="tipo" placeholder="Motoconformadora">
            </div>

            <div class="formularioElemento">
                <label for="modelo">Modelo de la maquinaría</label>
                <input type="text" name="modelo" id="modelo" placeholder="140 M" >
            </div>

            <div class="formularioElemento">
                <label for="marca">Marca de la maquinaría</label>
                <input type="text" name="marca" id="marca" placeholder="Caterpillar" >
            </div>

            <div class="formularioElemento">
                <label for="descripcion">Descripción de la maquinaría</label>
                <textarea name="descripcion" id="descripcion" placeholder="La maquína está en buen estado..."></textarea>
            </div>

            <div class="formularioElemento">
                <label for="numeroSerie">Número de serie de la maquinaría</label>
                <input type="text" name="numeroSerie" id="numeroSerie" placeholder="CAD0000XXXXX00000X">
            </div>

            <div class="formularioElemento">
                <label for="estatus">Estatus de la maquina</label>
                <select name="estatus" id="estatus">
                    <option value="1">Disponible</option>
                    <option value="0">No disponible</option>
                </select>
            </div>

            <div class="formularioBotonera">
                <button type="reset" class="boton">Limpiar</button>
                <button type="submit" class="boton">Agregar</button>
            </div>
        </form>
    </section>

    <section id="panelVer">
        <h3>Entradas guardadas</h3>
    </section>

    <section id="panelEditar" class="ocultar">
        <h3>Selecciona la entrada que deseas editar</h3>

        <table>
            <tr>
                <td class="tablaTitulo">Número de serie</td>
                <td class="tablaTitulo">Tipo</td>
                <td class="tablaTitulo">Modelo</td>
                <td class="tablaTitulo">Marca</td>
                <td class="tablaTitulo">Descripción</td>
                <td class="tablaTitulo">Estatus</td>
            </tr>
                <?php
                include("php/conexion/casper.php");
                $leer = "SELECT * FROM maquinarias";
                $query = $conexion->query($leer);

                if ($query == true) {
                    while ($datos = mysqli_fetch_array($query)) {
                        echo '<tr>';
                        echo '<td>' . $datos['numeroSerie'] . '</td>';
                        echo '<td>' . $datos['tipo'] . '</td>';
                        echo '<td>' . $datos['modelo'] . '</td>';
                        echo '<td>' . $datos['marca'] . '</td>';
                        echo '<td>' . $datos['descripcion'] . '</td>';
                        echo '<td>' . $datos['estatus'] . '</td>';
                        echo '</tr>';
                    }
                }
                ?>
        </table>
    </section>

    <section id="panelEliminar" class="ocultar">
        <h3>Selecciona la entrada que deseas eliminar</h3>
    </section>

    <script src="js/panel.js"></script> 
</body>
</html>

<?php
$conexion->close();
die();
?>
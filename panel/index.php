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
        </div>
    </header>
    <section>
        <h2>Bienvenido a MAGI</h2>
        <p>Para poder acceder, es necesario que primero inicie sesión:</p>

        <form action="php/conexion/acceso.php" method="post" autocomplete="off">
            <div class="formularioElemento">
                <label for="correo">Correo</label>
                <input type="text" name="correo" id="correo" placeholder="usuario@ejemplo.com" required>
            </div>

            <div class="formularioElemento">
                <label for="contrasenna">Contraseña</label>
                <input type="password" name="contrasenna" id="contrasenna" placeholder="*************" required>
            </div>
            <div class="formularioBotonera">
                <button type="submit" class="boton">Acceder</button>
            </div>
        </form>
    </section>
</body>
</html>
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
    <section>
        <h2>Beinvenido Anna Gutierrez</h2>
        <p>Estos son los paneles a los que tienes acceso:</p>
    </section>
    <section>
        <div class="grid">
            <div class="toast">
                <div class="toastIcono">
                    <img src="img/icons/projects.svg" alt="Proyectos" class="icono">
                </div>
                <div class="toastCuerpo">
                    <p class="toastTitulo">Panel de proyecto</p>
                    <p>En este panel podrás ver, agregar, actualizar o eliminar los proyectos que aparecen en la página principal.</p>
                </div>
                <div class="toastBotonera">
                    <a href="proyectos.php" class="boton">Abrir panel</a>
                </div>
            </div>

            <div class="toast">
                <div class="toastIcono">
                    <img src="img/icons/machine.svg" alt="Maquinarías" class="icono">
                </div>
                <div class="toastCuerpo">
                    <p class="toastTitulo">Panel de maquinarías</p>
                    <p>Aquí podrás ver, agregar, editar o eliminar las maquinarías que aparecen en renta en la sitio web.</p>
                </div>
                <div class="toastBotonera">
                    <a href="maquinarias.php" class="boton">Abrir panel</a>
                </div>
            </div>

            <div class="toast">
                <div class="toastIcono">
                    <img src="img/icons/clients.svg" alt="Clientes" class="icono">
                </div>
                <div class="toastCuerpo">
                    <p class="toastTitulo">Panel de clientes</p>
                    <p>Aquí podras ver y agregar clinetes que hayan rentado maquinaría.</p>
                </div>
                <div class="toastBotonera">
                    <a href="clientes.php" class="boton">Abrir panel</a>
                </div>
            </div>

            <div class="toast">
                <div class="toastIcono">
                    <img src="img/icons/work.svg" alt="Bolsa de trabajo" class="icono">
                </div>
                <div class="toastCuerpo">
                    <p class="toastTitulo">Panel de bolsa de trabajo</p>
                    <p>Desde aquí podrás crear, ver, editar o eliminar ofertas de trabajo que aparecen en la página principal.</p>
                </div>
                <div class="toastBotonera">
                    <a href="bolsaDeTrabajo.php" class="boton">Abrir panel</a>
                </div>
            </div>

            <div class="toast">
                <div class="toastIcono">
                    <img src="img/icons/users.svg" alt="Usuarios" class="icono">
                </div>
                <div class="toastCuerpo">
                    <p class="toastTitulo">Panel de administración de usuarios</p>
                    <p>Aquí podrás dar de alta o baja a usuarios, así como conceder o revocar accesos a los paneles.</p>
                </div>
                <div class="toastBotonera">
                    <a href="usuarios.php" class="boton">Abrir panel</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
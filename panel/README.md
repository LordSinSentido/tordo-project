# Tordo MAGI | Guia básica de estilos y componentes

Este proyecto ya tiene por defecto algunas clases que dan estilos rápidos a algunos elementos de HTML, a continuación, se litan cuales de esos elementos y su respectivo código para generarlos.

 - [Botones y anclas](#id1)

## Botones y anclas<a name="id1"></a>
La creación de botones o anclas es muy fácil, simplemente lo que hay que hacer es darle la clase `boton` al boton o ancla deseada. Por ejemplo:

Si deseas crear un ancla, el código sería el siguiente:
    <a href="link" class="boton">Texto</a>

Si deseas crear un boton, el código sería el siguiente:
    <button class="boton">Texto</button>

**Nota:** recuerda que las anclas se utilizan para colocar enlaces a otras paginas o dentro de la misma página, los botones son utilizados para ejecutar acciones de javascript.

## Toast
Los *toast* son similares a las tarjetas, solo que estos solamente se conforman de un icono, un titulo y su descripción, tambien pueden llevar botones en la parte de abajo.

Para crear un toast normal se necesita el siguiente código:
    <div class="toast">
        <div class="toastIcono">
            <img src="urlDeLaImagen" alt="descripciónDeLaImagen" class="icono">
        </div>
        <div class="toastCuerpo">
            <p class="toastTitulo">Titulo</p>
            <p>Descripción.</p>
        </div>
    </div>

Si deseas crear un toast con botón, el código es el siguiente:
    <div class="toast">
        <div class="toastIcono">
            <img src="urlDeLaImagen" alt="descripciónDeLaImagen" class="icono">
        </div>
        <div class="toastCuerpo">
            <p class="toastTitulo">Titulo</p>
            <p>Descripción.</p>
        </div>
        <div class="toastBotonera">
            <a href="link" class="boton">Texto</a>
        </div>
    </div>

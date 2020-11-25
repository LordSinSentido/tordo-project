# Tordo MAGI | Guia básica de estilos y componentes

Este proyecto ya tiene por defecto algunas clases que dan estilos rápidos a algunos elementos de HTML, a continuación, se litan cuales de esos elementos y su respectivo código para generarlos.

## Índice
 - [Botones y anclas](#botones)
 - [Toast](#toast)

## Botones y anclas {#botones}
La creación de botones o anclas es muy fácil, simplemente lo que hay que hacer es darle la clase `boton` al boton o ancla deseada. Por ejemplo:

Si deseas crear un ancla, el código sería el siguiente:
```
<a href="link" class="boton">Texto</a>
```
Si deseas crear un boton, el código sería el siguiente:
```
<button class="boton">Texto</button>
```
**Nota:** recuerda que las anclas se utilizan para colocar enlaces a otras paginas o dentro de la misma página, los botones son utilizados para ejecutar acciones de javascript.

## Toast {#toast}
Los *toast* son similares a las tarjetas, solo que estos solamente se conforman de un icono, un titulo y su descripción, tambien pueden llevar botones en la parte de abajo.

Para crear un toast normal se necesita el siguiente código:
```
<div class="toast">
    <div class="toastIcono">
        <img src="urlDeLaImagen" alt="descripciónDeLaImagen" class="icono">
    </div>
    <div class="toastCuerpo">
        <p class="toastTitulo">Titulo</p>
        <p>Descripción.</p>
    </div>
</div>
```

Si deseas crear un toast con botón, el código es el siguiente:
```
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
```

## Formularios
Para poder generar un formulario, simplemente utilizamos la etiqueta HTML `form`, por ejemplo:
```
<form action="archivoPHP" method="post" autocomplete="off">
</form>
```

### Elementos de los formularios
Los elementos son las partes que conforman un formulario, en nuestro proyecto estaremos ulizando solamente tres de ellos: los `input` de tipo `text`, `textarea` y `select`.
Cada elemento tiene que estar dentro de un `div` con la clase `formularioElemento`, tal cual se muestra a continuación:
```
<div class="formularioElemento">
</div>
```

#### Titulos de los elementos


#### `Inputs` de tipo `text`
Los `inputs` son recuadros pequeños en donde solo se introduce textos cortos. Para utilizarlos simplemente usamos la etiqueta `input` seguido del atributo `type`, en donde se le indica al navegador que es de tipo `text`, por ejemplo:
```
<input type="text" name="atributoMySQL" id="atributoMySQL" placeholder="ejemplo">
```
**Nota:** en el campo de `name` y `id` se pondrá el nombre del atributo que se escogío en mySQL, para así evitar confuciones. Además, es recomendable colocar un ejemplo en el atributo `placeholder` para que el usuario tenga una idea de lo podrá ingrear.

#### Ejemplo de un formulario completo
A continuación, se muestra el código de como tendría que quedar un formulario:
```
<form action="archivoPHP" method="post" autocomplete="off">
    //  Input de tipo texto
    <div class="formularioElemento">
        <label for="nombre">Titulo</label>
        <input type="text" name="atributoMySQL" id="atributoMySQL" placeholder="ejemplo">
    </div>

    //  Textarea
    <div class="formularioElemento">
        <label for="nombre">Tipo de maquinaría</label>
        <textarea name="descripcion" id="descripcion" placeholder="descripcion"></textarea>
    </div>
    
    //  Selector de opciones
    <div class="formularioElemento">
        <label for="situacion">Situiación de la maquina</label>
        <select name="situacion" id="situacion">
            //  Opciones del selector
            <option value="1">Disponible</option>
            <option value="0">No disponible</option>
        </select>
    </div>

    //  Botonera del formulario
    <div class="formularioBotonera">
        // Botón para limpiar el formulario
        <button type="reset" class="boton">Limpiar</button>

        //  Botón para enviar el formulario
        <button type="submit" class="boton">Agregar</button>
    </div>
</form>
```
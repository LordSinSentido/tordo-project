'use strict'

/*    Primer evento    */

window.onload = proyectos();

/*    Impresiones de pagina a partir de documentos .json    */

function proyectos() {
    let proyectos = document.querySelector('#tarjetas');
    fetch('datos/proyectos.json')
    .then(respuesta => respuesta.json())
    .then(respuesta => {
        let datos = respuesta.reverse();
        for(let i = 0; i < 3; i++) {
            proyectos.innerHTML += `
            
            <div class="card" id="proyectoNumero${datos[i].id}">
                <div class="cardImg">
                    <img class="cardImagen" src="${datos[i].img}" alt="${datos[i].titulo}">
                </div>
                <div class="cardCuerpo">
                    <p class="cardTitulo"><b>${datos[i].titulo}</b></p>
                    <p class="cardParrafo">${datos[i].pie}</p>
                </div>
                <div class="cardPie">
                    <a class="botones cardBotones modalAbrir" id="${datos[i].id}" href="#">Ver más</a>
                </div>
            </div>
            
            `;
        };
        let botones = document.querySelectorAll('.modalAbrir');
        for(const i of botones) {
            i.addEventListener('click', modalWindow);
        };
    });
}

/*    Modal window    */

function modalWindow(e) {
    e.preventDefault();
    const id = this.getAttribute('id');
    let contenedor = document.querySelector('.modalContenedor');
    let cuerpo = document.querySelector('body');

    let titulo = document.querySelector('.modalTitulo');
    let descripcion = document.querySelector('.modalDescripcion');
    let alcance = document.querySelector('.modalAlcance');
    let fecha = document.querySelector('.modalFecha');
    let img = document.querySelector('#sldr1');
    let img2 = document.querySelector('#sldr2');
    let img3 = document.querySelector('#sldr3');

    fetch('datos/proyectos.json')
    .then(respuesta => respuesta.json())
    .then(datos => {

        titulo.innerHTML = `<h2>${datos[id].titulo}</h2>`;
        descripcion.innerHTML = `<p>${datos[id].descripcion}</p>`;
        alcance.innerHTML = `<p>${datos[id].alcance}</p>`;
        fecha.innerHTML = `<p>${datos[id].fecha}</p>`;
        img.innerHTML = `<img class="modalImagen" src="${datos[id].img}">`;
        img2.innerHTML = `<img src="${datos[id].img2}">`;
        img3.innerHTML = `<img src="${datos[id].img3}">`;

        contenedor.style.opacity = '1';
        contenedor.style.visibility = 'visible';
        cuerpo.style.overflow = 'hidden';

        document.querySelector('#cerrar').addEventListener('click', () => {
            contenedor.style.opacity = '0';
            contenedor.style.visibility = 'hidden';
            cuerpo.style.overflow = 'unset';
        });
    })
};
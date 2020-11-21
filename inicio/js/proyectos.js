'use strict'

window.onload = mostrarMaquinaria();

function mostrarMaquinaria() {
    let cuerpo = document.querySelector('#importacion');
    fetch('datos/proyectos.json')
    .then(respuesta => respuesta.json())
    .then(datos => {
        for(let i of datos.reverse()) {

            cuerpo.innerHTML += `
            
            <div class="card" id="proyectoNumero${i.id}">
                <div class="cardImg">
                    <img class="cardImagen" src="${i.img}" alt="${i.titulo}">
                </div>
                <div class="cardCuerpo">
                    <p class="cardTitulo"><b>${i.titulo}</b></p>
                    <p class="cardParrafo">${i.pie}</p>
                </div>
                <div class="cardPie">
                    <a class="botones cardBotones modalAbrir" id="${i.id}">Ver más</a>
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
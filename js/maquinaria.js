'use strict'

window.onload = mostrarMaquinaria();

function mostrarMaquinaria() {
    let cuerpo = document.querySelector('#importacion');
    fetch('datos/maquinaria.json')
    .then(respuesta => respuesta.json())
    .then(datos => {
        for(let i of datos) {
            cuerpo.innerHTML += `
            
            <div class="card">
                <div class="cardCuerpo">
                    <p class="cardTitulo"><b>${i.nombre}</b></p>
                    <p class="cardParrafo">${i.tipo}</p>
                    <p class="cardParrafo">${i.descripcion}</p>
                </div>
                <div class="cardPie">
                    <p class="cardParrafo">${i.situacion}</p>
                </div>
            </div>
            
            `;
        };
    });
}
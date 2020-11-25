'use strict'

document.querySelector('#agregar').addEventListener('click', agregar);

function agregar(e) {
    e.preventDefault();
    document.querySelector('#formularioOcultar').classList.toggle('ocultar');
}
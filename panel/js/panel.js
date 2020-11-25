'use strict'

document.querySelector('#ver').addEventListener('click', ver);
document.querySelector('#agregar').addEventListener('click', agregar);
document.querySelector('#editar').addEventListener('click', editar);
document.querySelector('#eliminar').addEventListener('click', eliminar);

const panelVer = document.querySelector('#panelVer');
const panelAgregar = document.querySelector('#panelAgregar');
const panelEditar = document.querySelector('#panelEditar');
const panelEliminar = document.querySelector('#panelEliminar');

function ver(e) {
    e.preventDefault();
    panelVer.classList.remove('ocultar');
    panelAgregar.classList.add('ocultar');
    panelEditar.classList.add('ocultar');
    panelEliminar.classList.add('ocultar');
}

function agregar(e) {
    e.preventDefault();
    panelVer.classList.add('ocultar');
    panelAgregar.classList.remove('ocultar');
    panelEditar.classList.add('ocultar');
    panelEliminar.classList.add('ocultar');
}

function editar(e) {
    e.preventDefault();
    panelVer.classList.add('ocultar');
    panelAgregar.classList.add('ocultar');
    panelEditar.classList.remove('ocultar');
    panelEliminar.classList.add('ocultar');
}

function eliminar(e) {
    e.preventDefault();
    panelVer.classList.add('ocultar');
    panelAgregar.classList.add('ocultar');
    panelEditar.classList.add('ocultar');
    panelEliminar.classList.remove('ocultar');
}
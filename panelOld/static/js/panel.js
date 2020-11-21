'use strict'

document.querySelector('#agregar').addEventListener('click', agregar);
// document.querySelector('#editar').addEventListener('click', editar);
// document.querySelector('#eliminar').addEventListener('click', eliminar);

function agregar(e) {
    e.preventDefault();
    let objeto = document.querySelector('#seccionAgregar');
    let editar = document.querySelector('#seccionEditar');
    let eliminar = document.querySelector('#seccionEliminar');
    objeto.classList.toggle('ocultar');
    editar.classList.add('ocultar');
    eliminar.classList.add('ocultar');
}

function editar(e) {
    e.preventDefault();
    let objeto = document.querySelector('#seccionAgregar');
    let editar = document.querySelector('#seccionEditar');
    let eliminar = document.querySelector('#seccionEliminar');
    editar.classList.toggle('ocultar');
    objeto.classList.add('ocultar');
    eliminar.classList.add('ocultar');
}

function eliminar(e) {
    e.preventDefault();
    let objeto = document.querySelector('#seccionAgregar');
    let editar = document.querySelector('#seccionEditar');
    let eliminar = document.querySelector('#seccionEliminar');
    eliminar.classList.toggle('ocultar');
    objeto.classList.add('ocultar');
    editar.classList.add('ocultar');
}
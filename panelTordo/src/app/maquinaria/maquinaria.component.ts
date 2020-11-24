import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-maquinaria',
  templateUrl: './maquinaria.component.html',
  styleUrls: ['./maquinaria.component.css']
})
export class MaquinariaComponent implements OnInit {

  intercambiar() {
    let formulario: any = document.querySelector('#agregar');
    formulario.classList.toggle('ocultar');
  }

  constructor() { }

  ngOnInit(): void {
  }

}

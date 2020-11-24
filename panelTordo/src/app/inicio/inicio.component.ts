import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-inicio',
  templateUrl: './inicio.component.html',
  styleUrls: ['./inicio.component.css']
})
export class InicioComponent implements OnInit {

  nombre = 'Anna';
  apellido = 'Gutierrez';

  constructor() { }

  ngOnInit(): void {
  }

}

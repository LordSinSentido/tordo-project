import { BrowserModule } from '@angular/platform-browser';
import { Component, NgModule } from '@angular/core';
import { RouterModule, Route } from '@angular/router';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { InicioComponent } from './inicio/inicio.component';
import { UsuariosComponent } from './usuarios/usuarios.component';
import { MaquinariaComponent } from './maquinaria/maquinaria.component';
import { BolsaDeTrabajoComponent } from './bolsa-de-trabajo/bolsa-de-trabajo.component';
import { ProyectosComponent } from './proyectos/proyectos.component';
import { ClientesComponent } from './clientes/clientes.component';

const routes: Route[] = [
  {path: '', component: InicioComponent},
  {path: 'proyectos', component: ProyectosComponent},
  {path: 'maquinarias', component: MaquinariaComponent},
  {path: 'clientes', component: ClientesComponent},
  {path: 'bolsaDeTrabajo', component: BolsaDeTrabajoComponent},
  {path: 'usuarios', component: UsuariosComponent}
]

@NgModule({
  declarations: [
    AppComponent,
    InicioComponent,
    UsuariosComponent,
    MaquinariaComponent,
    BolsaDeTrabajoComponent,
    ProyectosComponent,
    ClientesComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    RouterModule.forRoot(routes)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

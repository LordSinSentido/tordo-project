import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { MaquinariaComponent } from './components/maquinaria/maquinaria.component';
import { BolsaDeTrabajoComponent } from './components/bolsa-de-trabajo/bolsa-de-trabajo.component';
import { ProyectosComponent } from './components/proyectos/proyectos.component';
import { ClientesComponent } from './components/clientes/clientes.component';

//  Material


@NgModule({
  declarations: [
    AppComponent,
    MaquinariaComponent,
    BolsaDeTrabajoComponent,
    ProyectosComponent,
    ClientesComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

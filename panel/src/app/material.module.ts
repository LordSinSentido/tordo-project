import { NgModule } from "@angular/core";

// Modulos de Angular Material
import {MatIconModule} from '@angular/material/icon';
import {MatToolbarModule} from '@angular/material/toolbar';
import {MatButtonModule} from '@angular/material/button';
import {MatMenuModule} from '@angular/material/menu';

@NgModule({
    imports: [
        MatIconModule,
        MatToolbarModule,
        MatButtonModule,
        MatMenuModule
    ],
    exports: [
        MatIconModule,
        MatToolbarModule,
        MatButtonModule,
        MatMenuModule
    ]
})

export class materialModules {}
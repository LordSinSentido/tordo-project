import { ComponentFixture, TestBed } from '@angular/core/testing';

import { MaquinariaComponent } from './maquinaria.component';

describe('MaquinariaComponent', () => {
  let component: MaquinariaComponent;
  let fixture: ComponentFixture<MaquinariaComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ MaquinariaComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(MaquinariaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

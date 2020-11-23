import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BolsaDeTrabajoComponent } from './bolsa-de-trabajo.component';

describe('BolsaDeTrabajoComponent', () => {
  let component: BolsaDeTrabajoComponent;
  let fixture: ComponentFixture<BolsaDeTrabajoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ BolsaDeTrabajoComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(BolsaDeTrabajoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { OffersTempComponent } from './offers-temp.component';

describe('OffersTempComponent', () => {
  let component: OffersTempComponent;
  let fixture: ComponentFixture<OffersTempComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ OffersTempComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(OffersTempComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-product-card',
  templateUrl: './product-card.component.html',
  styleUrls: ['./product-card.component.scss']
})
export class ProductCardComponent implements OnInit {
  
  @Input() imgUrl: string;
  @Input() price: string;
  @Input() name: string;
  @Input() offerDiscount: string;

  constructor() { }

  ngOnInit() {
  }

  getDiscountPrice(price, offerDiscount){
    let discount = price * (offerDiscount/100);
    return price - discount;
  }

}

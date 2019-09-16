import { Component, OnInit, Input } from '@angular/core';
import { Product } from 'src/app/shared/models/product.model';

@Component({
  selector: 'app-product-card',
  templateUrl: './product-card.component.html',
  styleUrls: ['./product-card.component.scss']
})
export class ProductCardComponent implements OnInit {
  
  @Input() offer: Product;

  constructor() { }

  ngOnInit() {
  }

  getDiscountPrice(){
    let discount = this.offer.price * (this.offer.offerDiscount/100);
    return  this.offer.price - discount;
  }

}

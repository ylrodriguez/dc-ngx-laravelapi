import { Component, OnInit, Input } from '@angular/core';
import { Product } from 'src/app/shared/models/product.model';

@Component({
  selector: 'app-product-card',
  templateUrl: './product-card.component.html',
  styleUrls: ['./product-card.component.scss']
})
export class ProductCardComponent implements OnInit {
  
  @Input() product: Product;
  @Input() buttonCart?: boolean;
  @Input() completeName?: boolean;
  @Input() completePrice?: boolean;


  constructor() { }

  ngOnInit() {
  }

  getDiscountPrice(){
    let discount = this.product.price * (this.product.offerDiscount/100);
    return  this.product.price - discount;
  }

}

import { Component, OnInit } from '@angular/core';
import { CartService } from '../../shared/services/cart.service';
import { Product } from 'src/app/shared/models/product.model';

@Component({
  selector: 'app-cart',
  templateUrl: './cart.component.html',
  styleUrls: ['./cart.component.scss']
})
export class CartComponent implements OnInit {

  cartItems: Product[];

  constructor(
    private cartService: CartService
  ) { }

  ngOnInit() {
    this.cartService.getCartItems().subscribe(
      (res) => {
        this.cartItems = res;
      },
      (err) => {
        console.log(err)
      }
    );
  }

  getDiscountPrice(product){
    let discount = product.price * (product.offerDiscount/100);
    return  product.price - discount;
  }

  addQuantity(e, item){
    e.preventDefault();
    console.log(item)
    item.quantity++;
  }

  substractQuantity(e, item){
    e.preventDefault();
    console.log(item)
    if(!(item.quantity == 1)){
      item.quantity--;
    } 
  }
  

}

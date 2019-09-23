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
  finalTotalPrice: number = 0;
  realTotalPrice: number = 0;
  totalDiscounts: number = 0;


  constructor(
    private cartService: CartService
  ) { }

  ngOnInit() {
    this.cartService.getCartItems().subscribe(
      (res) => {
        res.forEach(item => {
          this.setTotalPurchase(item);
        }); 

        this.cartItems = res;
        this.updateCheckoutPrices();
      },
      (err) => {
        console.log(err)
      }
    );
  }

  setTotalPurchase(item){
    if(item.offerDiscount){
      item.totalPurchase =item.quantityPurchase * this.getDiscountPrice(item);
    }
    else{
      item.totalPurchase = item.quantityPurchase * item.price;
    }
  }

  getDiscountPrice(product){
    let discount = product.price * (product.offerDiscount/100);
    return  product.price - discount;
  }

  setRealPriceAndDiscounts(){

    for( let item of this.cartItems){
      this.realTotalPrice = this.realTotalPrice + (item.quantityPurchase * item.price);
    }

    //FinalPrice must've been set before.
    this.totalDiscounts = this.realTotalPrice - this.finalTotalPrice;

  }

  setFinalPrice(){
    for( let item of this.cartItems){
      this.finalTotalPrice = this.finalTotalPrice + item.totalPurchase;
    }

  }

  updateCheckoutPrices(){
    this.finalTotalPrice = 0;
    this.realTotalPrice = 0;
    this.totalDiscounts = 0;
    this.setFinalPrice();
    this.setRealPriceAndDiscounts();
  }

  addQuantityPurchase(e, item){
    e.preventDefault();
    item.quantityPurchase++;
    this.setTotalPurchase(item);
    this.updateCheckoutPrices();
  }

  substractQuantityPurchase(e, item){
    e.preventDefault();
    if(!(item.quantityPurchase == 1)){
      item.quantityPurchase--;
      this.setTotalPurchase(item);
      this.updateCheckoutPrices();
    } 
  }

  removeItemFromCart(e,item){
    e.preventDefault();
    this.cartItems = this.cartItems.filter( element => element.id != item.id)
  }
  

}

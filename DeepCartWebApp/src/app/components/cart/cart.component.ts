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
          item.isLoading = {
            'quantity': false,
            'removing': false
          }
        });

        this.cartItems = res;
        this.updateCheckoutPrices();
      },
      (err) => {
        console.log(err)
      }
    );
  }

  setTotalPurchase(item) {
    if (item.offerDiscount) {
      item.totalPurchase = item.quantityPurchase * this.getDiscountPrice(item);
    }
    else {
      item.totalPurchase = item.quantityPurchase * item.price;
    }
  }

  getDiscountPrice(product) {
    let discount = product.price * (product.offerDiscount / 100);
    return product.price - discount;
  }

  setRealPriceAndDiscounts() {

    for (let item of this.cartItems) {
      this.realTotalPrice = this.realTotalPrice + (item.quantityPurchase * item.price);
    }

    //FinalPrice must've been set before.
    this.totalDiscounts = this.realTotalPrice - this.finalTotalPrice;

  }

  setFinalPrice() {
    for (let item of this.cartItems) {
      this.finalTotalPrice = this.finalTotalPrice + item.totalPurchase;
    }

  }

  updateCheckoutPrices() {
    this.finalTotalPrice = 0;
    this.realTotalPrice = 0;
    this.totalDiscounts = 0;
    this.setFinalPrice();
    this.setRealPriceAndDiscounts();
  }

  addQuantityPurchase(e, item) {
    e.preventDefault();
    if (item.quantity > item.quantityPurchase) {
      item.isLoading.quantity = true;
      item.quantityPurchase++;
      this.modifyQuantityPurchaseOfItem(item);
      this.setTotalPurchase(item);
      this.updateCheckoutPrices();
    }
  }

  substractQuantityPurchase(e, item) {
    e.preventDefault();
    if (!(item.quantityPurchase == 1)) {
      item.isLoading.quantity = true;
      item.quantityPurchase--;
      this.modifyQuantityPurchaseOfItem(item);
      this.setTotalPurchase(item);
      this.updateCheckoutPrices();
    }
  }

  removeItemFromCart(e, item) {
    e.preventDefault();
    item.isLoading.removing = true;
    this.cartService.removeCartItem(item.id).subscribe(
      (res) => {
        console.log(res)
        this.cartItems = this.cartItems.filter(element => element.id != item.id)
        item.isLoading.removing = false;
        this.updateCheckoutPrices();
      }
    )
  }

  modifyQuantityPurchaseOfItem(item){
    this.cartService.modifyQuantityPurchaseItem(item.id, item.quantityPurchase).subscribe(
      (res) => {
        console.log(res)
        item.isLoading.quantity = false;
      },
      (err) => {
        console.log(err)
        item.isLoading.quantity = false;
      }
    );
  }


}

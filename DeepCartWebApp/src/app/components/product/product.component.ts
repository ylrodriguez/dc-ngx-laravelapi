import { Component, OnInit, OnDestroy } from '@angular/core';
import { Location } from '@angular/common';
import { ActivatedRoute, Router } from '@angular/router';
import { ProductService } from 'src/app/shared/services/product.service';
import { Product } from 'src/app/shared/models/product.model';
import { CartService } from 'src/app/shared/services/cart.service';
import { TokenService } from 'src/app/shared/services/token.service';
import { AuthService } from 'src/app/shared/services/auth.service';
import { ToastrService } from 'ngx-toastr';

@Component({
  selector: 'app-product',
  templateUrl: './product.component.html',
  styleUrls: ['./product.component.scss']
})

export class ProductComponent implements OnInit, OnDestroy {

  private routeSub;
  private product: Product;
  isClicked: boolean = false;
  isLoading: boolean = false;

  constructor(
    private route: ActivatedRoute,
    private router: Router,
    private productService: ProductService,
    private cartService: CartService,
    private tokenService: TokenService,
    private authService: AuthService,
    private location: Location,
    private toastr: ToastrService
  ) { }

  ngOnInit() {
    this.routeSub =  this.route.params.subscribe( params => {
      let id = params['id'];
      let slug = params['slug'];
      this.productService.getProduct(id).subscribe(
        (res) => {
          this.product = res;
          //Product does not exist
          if(!this.product){
            this.router.navigate(['404'])
          }

          //Changes slug in url because it is different from slug given.
          if (slug != this.product.slug){
            this.location.go( '/p/'+id+'/'+this.product.slug );
          }
        }
      )
    })
  }


  getDiscountPrice(){
    let discount = this.product.price * (this.product.offerDiscount/100);
    return  this.product.price - discount;
  }

  ngOnDestroy(){
    this.routeSub.unsubscribe();
  }
  
  addToCart(){
    this.isClicked = true;
    this.isLoading = true;
    this.product.quantityPurchase = 1;
    //Only if user is auth can add to cart
    if(this.tokenService.isLoggedIn.value){
      this.cartService.addItemToCart(this.product.id , this.product.quantityPurchase).subscribe(
        (res) => {
          this.product.quantityPurchase = 1;
          this.isClicked = false;
          this.isLoading = false;
          this.toastr.success('Product added to cart!');
          this.cartService.updateNumberItemsCart();
        },
        (err) => {
          console.log(err);
          this.isClicked = false;
          this.isLoading = false;
          this.product.quantityPurchase = 1;
        }
      )
    }
    //Otherwise should log ing
    else{
      let url = this.router.url
      this.authService.redirectUrl = url;
      this.router.navigate([this.authService.loginUrl]);
    }
  }

  removeItemFromCart(){
    this.isLoading = true;
    this.cartService.removeCartItem(this.product.id).subscribe(
      (res) => {
        this.isClicked = false;
        this.product.quantityPurchase = 0;
        this.isLoading = false;
        this.cartService.updateNumberItemsCart();
        this.toastr.info('Product removed.');
      }
    )
  }

  addQuantityPurchase(e) {
    e.preventDefault();
    this.isLoading = true;
    if (this.product.quantity > this.product.quantityPurchase) {
      this.product.quantityPurchase++;
      this.modifyQuantityPurchaseOfItem();
    }
  }

  substractQuantityPurchase(e) {
    e.preventDefault();
    this.isLoading = true;
    if (!(this.product.quantityPurchase == 1)) {
      this.product.quantityPurchase--;
      this.modifyQuantityPurchaseOfItem();
    }
    else{
      this.removeItemFromCart();
    }
  }

  modifyQuantityPurchaseOfItem(){
    this.cartService.modifyQuantityPurchaseItem(this.product.id, this.product.quantityPurchase).subscribe(
      (res) => {
        this.isLoading = false;
        this.cartService.updateNumberItemsCart();
      },
      (err) => {
        console.log(err)
        this.isLoading = false;
      }
    );
  }

}

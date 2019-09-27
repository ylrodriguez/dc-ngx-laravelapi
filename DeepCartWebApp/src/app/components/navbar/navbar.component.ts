import { Component, OnInit, ViewChild, AfterViewInit, ElementRef, HostListener } from '@angular/core';
import { TokenService } from 'src/app/shared/services/token.service';
import { AuthService } from 'src/app/shared/services/auth.service';
import { Router } from '@angular/router';
import { CartService } from 'src/app/shared/services/cart.service';
import { ProductService } from 'src/app/shared/services/product.service';
import { Product } from '../../shared/models/product.model';

import { of } from "rxjs";
import {
  debounceTime,
  map,
  distinctUntilChanged,
  filter
} from "rxjs/operators";
import { fromEvent } from 'rxjs';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.scss']
})
export class NavbarComponent implements OnInit, AfterViewInit {

  @ViewChild('queryInpunt', { static: false }) queryInpunt: ElementRef;
  foundProducts: Product[];
  _isLoggedIn: boolean;
  _numberItemsCart: number;
  isSearching:boolean = false;
  hideSearchPanel:boolean = true;
  query: string;

  constructor(
    private tokenService: TokenService,
    private authService: AuthService,
    private cartService: CartService,
    private productService: ProductService,
    private router: Router) { }

  @HostListener('document:click', ['$event'])
  handleOutsideClick(event) {
    this.hideSearchPanel = true;
    this.query = "";
    this.foundProducts = null;
  }

  ngOnInit() {
    this.tokenService.isLoggedIn.subscribe(
      next => { this._isLoggedIn = next }
    )
    this.cartService.numberItemsCart.subscribe(
      next => this._numberItemsCart = next
    )
  }

  ngAfterViewInit() {
    //Observable for Event KeyUp of element queryInpunt
    fromEvent(this.queryInpunt.nativeElement, 'keyup').pipe(
      //Gets value
      map((event: any) => {
        return event.target.value;
      }),
      //Minimum 3 for query
      filter(res => res.length >= 2),
      // Time in milliseconds between events
      debounceTime(400),
      // Value must be different from previous
      distinctUntilChanged(),
      // subscription for response
    ).subscribe(query => this.searchProducts(query));
  }

  onLogOut(event: MouseEvent) {
    event.preventDefault();
    console.log("Try to log out...")
    this.authService.logout().subscribe(
      () => {
        console.log("Cerro sesión");
        this.tokenService.removeToken();
        this.router.navigate(['/']);
      },
      (err) => {
        console.log("Error cerrando sesión")
        console.log(err)
        this.tokenService.removeToken();
        this.router.navigate(['/']);
      }
    );
  }

  searchProducts(query) {
    this.isSearching = true;
    this.hideSearchPanel = false;
    this.foundProducts = null;
    this.productService.searchProducts(query).subscribe(
      (res) => {
        this.foundProducts = res;
        this.isSearching = false;
      },
      (err) => {
        console.log(err)
        this.isSearching = false;
      }
    )
  }



}

import { Component, OnInit, OnDestroy, ViewChildren, QueryList } from '@angular/core';
import {Location} from '@angular/common';
import { ActivatedRoute, Router } from '@angular/router';
import { ProductService } from 'src/app/shared/services/product.service';
import { Product } from 'src/app/shared/models/product.model';
import { of } from 'rxjs';

@Component({
  selector: 'app-product',
  templateUrl: './product.component.html',
  styleUrls: ['./product.component.scss']
})
export class ProductComponent implements OnInit, OnDestroy {

  private routeSub;
  private product: Product;
  private activeIndex = 0;
  @ViewChildren('productCarouselInner') carouselItemsProduct: QueryList<any>;


  constructor(
    private route: ActivatedRoute,
    private router: Router,
    private productService: ProductService,
    private location: Location
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
            console.log("cambiare")
            this.location.go( '/p/'+id+'/'+this.product.slug );
          }
        }
      )
    })
  }

  onClickSquareImage(index){
    if(this.activeIndex != index){this.removeActiveClass();}
    this.activeIndex = index;
  }

  removeActiveClass(){
    let items = this.carouselItemsProduct.first.nativeElement.children;
    for(let item of items){
      item.classList.remove("active");
    }
  }

  ngOnDestroy(){
    this.routeSub.unsubscribe();
  } 

}

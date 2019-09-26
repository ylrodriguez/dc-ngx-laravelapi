import { Component, OnInit, OnDestroy } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { CategoryService } from 'src/app/shared/services/category.service';
import { Category } from 'src/app/shared/models/category.model';
import { Router } from '@angular/router';
import { Product } from 'src/app/shared/models/product.model';

@Component({
  selector: 'app-category',
  templateUrl: './category.component.html',
  styleUrls: ['./category.component.scss']
})
export class CategoryComponent implements OnInit, OnDestroy {

  private routeSub: any;
  private currentCategory: Category;
  private categoryProducts: Product[];
  private sortedProducts: Product[];
  brandList: string[] = [];
  slug:string;
  isSorting: boolean = true;
  sortAction: string = "default";

  constructor(
    private route: ActivatedRoute,
    private categoryService: CategoryService,
    private router: Router
  ) { }

  ngOnInit() {
    this.routeSub =  this.route.params.subscribe( params => {
      this.slug = params['slug'];
      this.categoryService.getCategories().subscribe(
        (res) => {
          this.currentCategory = res.find( category => category['slug'] === this.slug)
          if(this.currentCategory){
            this.getCategoryProducts(this.currentCategory.id);
          }
          else{
            this.router.navigate(['404'])
          }
        }
      )
    })
  }


  getCategoryProducts(idCategory){
    this.categoryService.getCategoryProducts(idCategory).subscribe(
      (res) => {
        this.categoryProducts = res

        for( let p of this.categoryProducts){
          this.brandList.indexOf(p.brand) === -1 ? this.brandList.push(p.brand) : console.log("")
        }

        this.sortedProducts = JSON.parse(JSON.stringify(this.categoryProducts))
        this.isSorting = false;

      },
      (err) => {
        console.log(err)
      }
    )
  }

  sortBy(e, action){
    e.preventDefault();

    if(action == 'pricelowest'){
      this.sortedProducts.sort( this.dynamicSort("price"))
      this.sortAction = action;
    }
    if(action == 'pricehighest'){
      this.sortedProducts.sort( this.dynamicSort("-price"))
      this.sortAction = action;
    }
    if(action == 'default'){
      this.sortedProducts.sort( this.dynamicSort("id"))
      this.sortAction = action;
    }

  }

  dynamicSort(property) {
    /*
      la función array.sort recibe un callback que implementa (a, b) para comparar los elementos
      si (a, b) retorna -1 a viene primero que b. Se posiciona en un indice menor
      si (a, b) retorna 0 son iguales y no se alteran, pero se posicionan respectivamente respecto a los demas
      si (a, b) retorna 1 b viene primero que a. Se posiciona en un indice menor
    */
    var sortOrder = 1;
    if(property[0] === "-") {
        sortOrder = -1;
        property = property.substr(1);
    }
    return function (a, b) {
        var result = (a[property] < b[property]) ? -1 : (a[property] > b[property]) ? 1 : 0;
        return result * sortOrder;
    }
}


  ngOnDestroy(){
    this.routeSub.unsubscribe();
  }

}

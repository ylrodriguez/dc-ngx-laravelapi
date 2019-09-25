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
  brandList: string[] = [];
  slug:string;

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

      },
      (err) => {
        console.log(err)
      }
    )
  }


  ngOnDestroy(){
    this.routeSub.unsubscribe();
  }

}

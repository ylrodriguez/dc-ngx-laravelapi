import { Component, OnInit, OnDestroy } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { CategoryService } from 'src/app/shared/services/category.service';
import { Category } from 'src/app/shared/models/category.model';
import { Router } from '@angular/router';

@Component({
  selector: 'app-category',
  templateUrl: './category.component.html',
  styleUrls: ['./category.component.scss']
})
export class CategoryComponent implements OnInit, OnDestroy {
  private routeSub: any;
  private currentCategory: Category;
  private categoryExists: boolean = false;
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
            this.categoryExists = true;
          }
          else{
            this.router.navigate(['404'])
          }
        }
      )
    })
  }


  ngOnDestroy(){
    this.routeSub.unsubscribe();
  }

}

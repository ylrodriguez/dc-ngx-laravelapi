import { Component, OnInit } from '@angular/core';
import { CategoryService } from 'src/app/shared/services/category.service';
import { Category } from 'src/app/shared/models/category.model';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {

  categoriesList: Category[];

  constructor(
    private categoryService: CategoryService
  ) { }

  ngOnInit() {
    this.categoryService.getCategories().subscribe( 
      (res) =>{
        this.categoriesList = res;
    })
  }

}

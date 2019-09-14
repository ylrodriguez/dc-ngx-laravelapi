import { Component, OnInit, ViewChildren, QueryList } from '@angular/core';
import { ProductService } from '../../../shared/services/product.service'
import { Product } from 'src/app/shared/models/product.model';
declare const loadSlideItems: any;

@Component({
  selector: 'app-offers',
  templateUrl: './offers.component.html',
  styleUrls: ['./offers.component.scss']
})
export class OffersComponent implements OnInit {

  private offersList: Product[];
  private slideIsLoaded: boolean = false;
  @ViewChildren('slideItems') slideItemsElements: QueryList<any>;
  
  constructor(
    private productService: ProductService
  ) { }


  ngOnInit() {
    this.productService.getOffers().subscribe(
      (res) => {
        this.offersList = res;
      },
      (err) => {
        console.log(err)
      }
    )
  }

  ngAfterViewInit() {
    this.slideItemsElements.changes.subscribe(t => {
      if(!this.slideIsLoaded){
        loadSlideItems();
        this.slideIsLoaded = true;
      }
    })
  }


}

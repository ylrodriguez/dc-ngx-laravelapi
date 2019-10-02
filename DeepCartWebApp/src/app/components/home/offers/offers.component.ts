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

  private slideIsLoaded: boolean = false;
  offersList: Product[];
  @ViewChildren('slideItems') slideItemsElements: QueryList<any>;
  
  constructor(
    private productService: ProductService
  ) { }


  ngOnInit() {
    this.productService.getOffers().subscribe(
      (res) => {
        this.offersList = res;
        this.shuffleOffers();
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

  shuffleOffers(){
    for (var i =  this.offersList.length - 1; i > 0; i--) {
      var j = Math.floor(Math.random() * (i + 1));
      var temp =  this.offersList[i];
      this.offersList[i] =  this.offersList[j];
      this.offersList[j] = temp;
    }
  }


}

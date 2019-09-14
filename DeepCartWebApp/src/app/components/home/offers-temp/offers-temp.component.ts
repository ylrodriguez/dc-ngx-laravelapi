import { Component, OnInit } from '@angular/core';
declare const loadSlideItems: any;

@Component({
  selector: 'app-offers-temp',
  templateUrl: './offers-temp.component.html',
  styleUrls: ['./offers-temp.component.scss']
})
export class OffersTempComponent implements OnInit {

  offersList = [
    {"imgUrl": "https://picsum.photos/id/1004/200/300", "price": "1000", "name":"product 1"},
    {"imgUrl": "https://picsum.photos/id/1005/200/300", "price": "2000", "name":"product 2"},
    {"imgUrl": "https://picsum.photos/id/1006/200/300", "price": "3000", "name":"product 3"},
    {"imgUrl": "https://picsum.photos/id/1003/200/300",  "price": "4000", "name":"product 4"},
    {"imgUrl": "https://picsum.photos/id/1008/200/300", "price": "5000", "name":"product 5"},
    {"imgUrl": "https://picsum.photos/id/1009/200/300", "price": "6000", "name":"product 6"},
    {"imgUrl": "https://picsum.photos/id/1010/200/300", "price": "7000", "name":"product 7"},
    {"imgUrl": "https://picsum.photos/id/1011/200/300", "price": "8000", "name":"product 8"},
    {"imgUrl": "https://picsum.photos/id/1012/200/300", "price": "8000", "name":"product 8"},
    {"imgUrl": "https://picsum.photos/id/1013/200/300", "price": "8000", "name":"product 8"},
    {"imgUrl": "https://picsum.photos/id/1014/200/300", "price": "8000", "name":"product 8"},
    {"imgUrl": "https://picsum.photos/id/1015/200/300", "price": "8000", "name":"product 8"},
    {"imgUrl": "https://picsum.photos/id/1016/200/300", "price": "8000", "name":"product 8"},
    {"imgUrl": "https://picsum.photos/id/1017/200/300", "price": "8000", "name":"product 8"},
    {"imgUrl": "https://picsum.photos/id/1018/200/300", "price": "8000", "name":"product 8"},
    {"imgUrl": "https://picsum.photos/id/1019/200/300", "price": "8000", "name":"product 8"},
    {"imgUrl": "https://picsum.photos/id/1020/200/300", "price": "8000", "name":"product 8"},
    {"imgUrl": "https://picsum.photos/id/1021/200/300", "price": "8000", "name":"product 8"},
    {"imgUrl": "https://picsum.photos/id/1022/200/300", "price": "8000", "name":"product 8"},
    {"imgUrl": "https://picsum.photos/id/1023/200/300", "price": "9000", "name":"product 9"}
  ]

  constructor() { }

  ngOnInit() {
    
    
  }

  ngAfterViewInit(){
    loadSlideItems();
  }


}

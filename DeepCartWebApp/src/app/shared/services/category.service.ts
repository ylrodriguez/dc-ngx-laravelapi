import { Injectable } from '@angular/core';
import { environment } from 'src/environments/environment';
import { AuthService } from './auth.service';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Category } from '../models/category.model';
import { map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})
export class CategoryService {


  private baseURL = environment.apiUrl + 'categories';

  constructor(
    private authService: AuthService,
    private http: HttpClient
  ) { }

  getCategories(): Observable<Category[]>{
    let headers = this.authService.setHeaders();
    return this.http.get<Category[]>(`${this.baseURL}`,  { headers: headers })
    .pipe(map( data => {
      return data['categories'];
    }));
  }
}

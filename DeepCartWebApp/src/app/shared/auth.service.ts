import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { TokenService } from './token.service';
import { environment } from '../../environments/environment';
import { map, catchError } from 'rxjs/operators';
import { throwError } from 'rxjs';
import { User } from './models/user.model';

@Injectable({
  providedIn: 'root'
})
export class AuthService {

  private baseURL = environment.apiUrl+'auth';
  private headers = new HttpHeaders({
    'Content-Type': 'application/json',
    'Authorization': 'Bearer '+ this.tokenService.getToken()
  })


  constructor(
    private http: HttpClient,
    private tokenService: TokenService) { }

  login(credentials){
    return this.http.post(`${this.baseURL}/login`, credentials).pipe(
        catchError( err => {
        return throwError(err.error.error);
      }))
  }

  signup(user: User){
    return this.http.post(`${this.baseURL}/signup`, user)
  }
}

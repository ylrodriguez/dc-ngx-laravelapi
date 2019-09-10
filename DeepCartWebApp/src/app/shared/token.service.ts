import { Injectable } from '@angular/core';
import { Router } from '@angular/router';

@Injectable({
  providedIn: 'root'
})
export class TokenService {

  private tokenKey: string = "access_token";
  private iss: string = "http://deepcartnglaravel:8080/api/"; //JWT Issuer
  
  constructor(private router: Router) { }


  setToken(token: string){
    localStorage.setItem(this.tokenKey, token);
  }

  getToken(){
    return localStorage.getItem(this.tokenKey);
  }

  isLoggedIn(){
    return this.getToken() !== null && this.tokenIsValid();
  }

  tokenIsValid(){
    const token = this.getToken()
   
    if(token){ //Check if token exists 

      const rawpayload = token.split('.')[1];
      const payload = JSON.parse(atob(rawpayload));

      return payload.startsWith(this.iss) ? true : false; //Check token in localstorage if matches with iss (JWT)
    }
    else{
      return false; 
    }
  }
  

  removeToken(){
    localStorage.removeItem(this.tokenKey);
    this.router.navigate(['/login']);
  }
}

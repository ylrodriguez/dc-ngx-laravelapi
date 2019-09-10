import { Injectable } from '@angular/core';
import { CanActivate, ActivatedRouteSnapshot, RouterStateSnapshot , Router } from '@angular/router';
import { AuthService } from '../auth.service';
import { TokenService } from '../token.service';

@Injectable({
  providedIn: 'root'
})
export class AnonymousGuard implements CanActivate {
  constructor(
    private tokenService: TokenService,
    private router: Router,
    private authService: AuthService
  ){}
  
  canActivate( next: ActivatedRouteSnapshot, state: RouterStateSnapshot){
    if(this.tokenService.isLoggedIn.value){
      this.router.navigate([this.authService.redirectUrl])
      return false;
    }

    return true;
  }
  
}

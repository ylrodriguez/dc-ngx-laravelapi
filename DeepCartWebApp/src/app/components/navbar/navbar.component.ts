import { Component, OnInit } from '@angular/core';
import { TokenService } from 'src/app/shared/token.service';
import { AuthService } from 'src/app/shared/auth.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.scss']
})
export class NavbarComponent implements OnInit {

  private _isLoggedIn: boolean;

  constructor(
    private tokenService: TokenService,
    private authService: AuthService,
    private router: Router) { }

  ngOnInit() {
    this.tokenService.isLoggedIn.subscribe(
      next => {this._isLoggedIn = next}
    )
  }

  onLogOut(event: MouseEvent){
    event.preventDefault();
    console.log("Try to log out...")
    this.authService.logout().subscribe(
      () => {
        console.log("Cerro sesión");
        this.tokenService.removeToken();
        this.router.navigate(['/']);
      },
      (err) => {
        console.log("Error cerrando sesión")
        console.log(err)
        this.tokenService.removeToken();
        this.router.navigate(['/']);
      }
    );
  }



}

import { Component, OnInit } from '@angular/core';
import { AuthService } from 'src/app/shared/auth.service';
import { TokenService } from 'src/app/shared/token.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent implements OnInit {
  
  private form: Object = {
    email: '',
    password: ''
  }

  isSubmitted: boolean = false;
  hasError: boolean = false;
  errorMessage: string = "Something's wrong";

  constructor(
    private tokenService: TokenService,
    private authService: AuthService,
    private router: Router) { }

  ngOnInit() {
  }

  onSubmit(){
    this.isSubmitted = true;
    this.authService.login(this.form).subscribe(
      res => this.handleResponse(res),
      err => this.handleError(err.error)
    )
  }

  handleResponse(res){
    this.hasError = false;
    this.tokenService.setToken(res.access_token);
    this.router.navigate(['/home'])
  }

  handleError(err){
    this.isSubmitted = false;
    this.errorMessage = err ? err.message : 'Something\'s wrong. Try later.';
    this.hasError = true;
  }

  closeAlert(){
    this.hasError = false;
  }

}

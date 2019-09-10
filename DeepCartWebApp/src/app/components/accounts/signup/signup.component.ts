import { Component, OnInit } from '@angular/core';
import { User } from '../../../shared/models/user.model';
import { AuthService } from '../../../shared/auth.service';
import { TokenService } from '../../../shared/token.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-signup',
  templateUrl: './signup.component.html',
  styleUrls: ['./signup.component.scss']
})
export class SignupComponent implements OnInit {

  private user: User = {
    name: "",
    email: "",
    password: "",
    confirmPassword: "",
    address: "",
    number: "",
    dob: "",
  }

  startDate = new Date(1985, 0, 1);
  minDate = new Date(1900, 0, 1);
  maxDate = new Date(Date.now());
  
  isSubmitted: boolean = false;
  hasError: boolean = false;
  errorMessage: string = "Something's wrong";

  constructor(
    private authService: AuthService,
    private tokenService: TokenService,
    private router: Router
  ) { }

  ngOnInit() {
  }

  onSubmit(){
    this.isSubmitted = true;
    this.authService.login(this.user).subscribe(
      res => this.handleResponse(res),
      err => this.handleError(err)
    )
  }

  handleResponse(res){
    this.hasError = false;
    this.tokenService.setToken(res.access_token);
    this.router.navigate(['/home'])
  }

  handleError(err){
    this.isSubmitted = false;
    this.errorMessage = err ? err : 'Something\'s wrong. Try later.';
    this.hasError = true;
  }

  closeAlert(){
    this.hasError = false;
  }

}

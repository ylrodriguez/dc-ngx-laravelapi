import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { LoginComponent } from './components/accounts/login/login.component';
import { HomeComponent } from './components/home/home.component';
import { SignupComponent } from './components/accounts/signup/signup.component';


const routes: Routes = [
  {
    'path': '', 
    component: HomeComponent
  },
  {
    'path': 'accounts/login', 
    component: LoginComponent
  },
  {
    'path': 'accounts/signup', 
    component: SignupComponent
  },
  {
    'path': 'home', 
    component: HomeComponent
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

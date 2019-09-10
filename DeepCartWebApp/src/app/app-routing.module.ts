import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { LoginComponent } from './components/accounts/login/login.component';
import { HomeComponent } from './components/home/home.component';
import { SignupComponent } from './components/accounts/signup/signup.component';

//Guards
import { AuthGuard } from './shared/guards/auth.guard';
import { AnonymousGuard } from './shared/guards/anonymous.guard';
import { ProfileComponent } from './components/profile/profile.component';


const routes: Routes = [
  {
    'path': '', 
    component: HomeComponent
  },
  {
    'path': 'home', 
    component: HomeComponent
  },
  {
    'path': 'accounts/login', 
    component: LoginComponent,
    canActivate: [AnonymousGuard]
  },
  {
    'path': 'accounts/signup', 
    component: SignupComponent,
    canActivate: [AnonymousGuard]
  },
  {
    path: 'profile', 
    component: ProfileComponent,
    canActivate: [AuthGuard]
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

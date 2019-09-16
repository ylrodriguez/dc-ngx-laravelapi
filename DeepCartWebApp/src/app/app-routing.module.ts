import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { LoginComponent } from './components/accounts/login/login.component';
import { HomeComponent } from './components/home/home.component';
import { SignupComponent } from './components/accounts/signup/signup.component';
import { ShoppingCartComponent } from './components/shopping-cart/shopping-cart.component';

//Guards
import { AuthGuard } from './shared/guards/auth.guard';
import { AnonymousGuard } from './shared/guards/anonymous.guard';
import { ProfileComponent } from './components/profile/profile.component';
import { CategoryComponent } from './components/category/category.component';
import { NotfoundComponent } from './components/notfound/notfound.component';
import { ProductComponent } from './components/product/product.component';


const routes: Routes = [
  {
    'path': '', 
    component: HomeComponent
  },
  {
    'path': 'c/:slug',
    component: CategoryComponent
  },
  {
    'path': 'p/:id/:slug',
    component: ProductComponent
  },
  {
    'path': 'accounts',
    canActivateChild: [AnonymousGuard],
    children: [
      {
        'path': 'login', 
        component: LoginComponent
      },
      {
        'path': 'signup', 
        component: SignupComponent
      }
    ]
  },
  {
    path: 'profile', 
    component: ProfileComponent,
    canActivate: [AuthGuard]
  },
  {
    path: 'cart', 
    component: ShoppingCartComponent,
    canActivate: [AuthGuard]
  },
  {path: '404', component: NotfoundComponent},
  {path: '**', redirectTo: '/404'}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

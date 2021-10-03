import { Component, OnInit } from '@angular/core';
import { User } from 'src/app/shared/models/User.model';
import { AuthService } from 'src/app/shared/services/auth.service';

@Component({
	selector: 'app-profile',
	templateUrl: './profile.component.html',
	styleUrls: ['./profile.component.scss']
})
export class ProfileComponent implements OnInit {

	user: User;

	constructor(
		private authService: AuthService
	) { }

	ngOnInit() {
		this.authService.getAuthUser().subscribe(
			res => this.user = res
		)
	}

}

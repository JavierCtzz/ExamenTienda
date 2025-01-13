import { Component } from '@angular/core';

declare var $: any;
declare function initPageTienda([]):any;

@Component({
  selector: 'app-auth-profile',
  templateUrl: './auth-profile.component.html',
  styleUrl: './auth-profile.component.css'
})
export class AuthProfileComponent {
  constructor() { }

  ngOnInit(): void {
    setTimeout(() => {
      initPageTienda($);
    }, 50);
  }
}

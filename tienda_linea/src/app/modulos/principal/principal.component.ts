import { Component } from '@angular/core';

declare var $: any;
declare function initPageTienda([]):any;

@Component({
  selector: 'app-principal',
  templateUrl: './principal.component.html',
  styleUrl: './principal.component.css'
})
export class PrincipalComponent {

  constructor(){

  }

  ngOnInit(): void{
    setTimeout(() => {
      initPageTienda($);
    }, 50);
  }
}

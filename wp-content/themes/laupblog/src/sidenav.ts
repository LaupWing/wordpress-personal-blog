export default class Sidenav {
   close_btn: HTMLButtonElement
   menu_btn: HTMLButtonElement
   
   constructor()
   {
      this.close_btn = document.querySelector("button#close") as HTMLButtonElement
      this.menu_btn = document.querySelector("button#menu-btn") as HTMLButtonElement
   }  
}
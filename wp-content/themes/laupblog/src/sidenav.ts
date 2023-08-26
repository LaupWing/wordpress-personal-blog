export default class Sidenav {
   close_btn: HTMLButtonElement
   
   constructor()
   {
      this.close_btn = document.querySelector("button#close") as HTMLButtonElement
   }  
}
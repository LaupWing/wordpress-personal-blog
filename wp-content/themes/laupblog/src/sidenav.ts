export default class Sidenav {
   private close_btn: HTMLButtonElement
   private menu_btn: HTMLButtonElement
   private side_nav: HTMLDivElement
   
   constructor()
   {
      this.close_btn = document.querySelector("button#close") as HTMLButtonElement
      this.side_nav = document.querySelector("div#side_nav") as HTMLDivElement
      this.menu_btn = document.querySelector("button#menu-btn") as HTMLButtonElement

      this.menu_btn.addEventListener("click", this.openMenu)
   }  


   private openMenu() {
      console.log(this.side_nav.dataset.open)
   }
}
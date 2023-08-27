export default class Sidenav {
   private close_btn: HTMLButtonElement
   private menu_btn: HTMLButtonElement
   private side_nav: HTMLDivElement
   
   constructor()
   {
      this.close_btn = document.querySelector("button#close") as HTMLButtonElement
      this.side_nav = document.querySelector("div#side-nav") as HTMLDivElement
      this.menu_btn = document.querySelector("button#menu-btn") as HTMLButtonElement

      this.menu_btn.addEventListener("click", this.openMenu.bind(this))
   }  


   private openMenu() {
      if(this.side_nav.dataset.open === "false"){
         console.log("opening the sidenav")
      } else {     
         console.log("closing the sidenav")
      }
   }
}
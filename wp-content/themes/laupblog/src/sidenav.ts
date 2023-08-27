export default class Sidenav {
   private close_btn: HTMLButtonElement
   private menu_btn: HTMLButtonElement
   private side_nav: HTMLDivElement
   
   constructor()
   {
      this.close_btn = document.querySelector("button#close") as HTMLButtonElement
      this.side_nav = document.querySelector("div#side-nav") as HTMLDivElement
      this.menu_btn = document.querySelector("button#menu-btn") as HTMLButtonElement

      this.menu_btn.addEventListener("click", this.toggleMenu.bind(this))
      this.close_btn.addEventListener("click", this.toggleMenu.bind(this))
   }  


   private toggleMenu() {
      if(this.side_nav.dataset.open === "false"){
         this.side_nav.style.transform = "translateX(0%)"
         this.side_nav.dataset.open = "true" 
      } else {     
         this.side_nav.style.transform = "translateX(-100%)" 
         this.side_nav.dataset.open = "false" 
      }
   }
}
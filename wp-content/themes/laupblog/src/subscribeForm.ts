export default class SubscribeForm {
   el: HTMLFormElement

   constructor() {
      console.log(document.querySelector("div"))
      if(document.querySelector("form#subscribe")){
         this.el = document.querySelector("form#subscribe") as HTMLFormElement
         this.el.addEventListener("form", this.handleSubmit)
      }
   }

   handleSubmit(e: Event){
      e.preventDefault()
   }
}
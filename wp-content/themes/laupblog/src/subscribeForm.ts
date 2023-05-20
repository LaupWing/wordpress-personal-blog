export default class SubscribeForm {
   el: HTMLFormElement

   constructor() {
      if(document.querySelector("form#subscribe")){
         console.log(document.querySelector("form#subscribe"))
         this.el = document.querySelector("form#subscribe") as HTMLFormElement
         this.el.addEventListener("submit", this.handleSubmit)
      }
   }

   handleSubmit(e: SubmitEvent){
      e.preventDefault()
      const input = (e.target as HTMLFormElement).querySelector("input[type=email]") as HTMLInputElement
      const value = input!.value
      if (value){
         fetch("", {
            method: "POST"
         })
      }
   }
}
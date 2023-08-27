<div class="h-80 relative container rounded-2xl mt-4 overflow-hidden flex flex-col">
   <div class="absolute top-0 left-0 flex items-start flex-col text-3xl">
      <p class="bg-white px-4 py-0.5 font-cursive rounded-br-xl">Join our newsletter for</p>
      <p class="bg-white px-4 py-0.5 font-cursive rounded-br-xl">exclusive updates.</p>
   </div>
   <img 
      src="https://images.pexels.com/photos/12857745/pexels-photo-12857745.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" 
      alt=""
      class="absolute inset-0 -z-10 h-full w-full object-cover"
   >
   <div class="flex-1 flex flex-col items-center justify-center">
      <?php include("newsletter-form-handler.php"); ?>
      <form 
         class="flex flex-col items-start gap-2"
         id="subscribe"
         action=""
         method="post"
      >
         <h2 class="text-white text-4xl font-bold">Join now</h2>
         <div class="flex gap-2">
            <input 
               class="p-2 py-1 bg-white/20 backdrop-blur w-72 rounded-lg border-white border-2" 
               type="email"
               name="email"
               placeholder="Your Email"
            >
            <button class="bg-yellow-400 text-base py-1 px-4 rounded-md shadow font-cursive mr-auto">Submit</button>
         </div>
      </form>
   </div>
   <div class="p-4 flex flex-col text-white">
      <hr>
      <div class="flex gap-2 ml-auto mt-4 items-center">
         <p class="font-bold">Got any questions?</p>
         <button class="bg-black px-4 rounded-full py-1 text-white text-xs">Contact us</button>
      </div>
   </div>
</div>
<?php 
   get_header()
?>
   <h2 class="container mb-6 text-5xl font-bold font-cursive">
      Blogs
   </h2>
   <div class="container grid grid-cols-2 grid-rows-2 gap-4">
      <?php 
         while(have_posts()){
            the_post();
            $index = $wp_query->current_post;
      ?>
         <?php if($index === 0) {?>
            <a 
               href="<?php the_permalink() ?>"
               class="relative rounded-2xl col-span-1 overflow-hidden row-span-2 aspect-square flex items-start flex-col p-4 justify-start shadow"
            >
               <div class="w-full flex justify-between items-start">
                  <p class="px-2 bg-white rounded-full font-bold text-xs py-0.5"><?php the_time("M d, Y"); ?></p>
                  <p class="bg-white px-4 py-2 rounded-md font-bold text-3xl"> <?php the_title() ?> </p>
               </div>
               <p class="text-right bg-white mt-2 rounded ml-auto p-2 text-sm max-w-[80%] font-bold">
                  <?php echo get_the_excerpt() ?>
               </p>
               <div class="mt-auto ml-auto w-10 h-10 flex justify-center items-center bg-white rounded-full">
                  <?php get_template_part("templates/icons/arrowRightUp")?>
               </div>
               <img 
                  class="inset-0 absolute w-full h-full object-cover -z-10" 
                  src="<?php echo get_the_post_thumbnail_url() ?>" 
                  alt="Thumbnail photo"
               >
            </a>
         <?php }?>
         <?php if($index > 0 && $index <= 2) {?>
            <a 
               href="<?php the_permalink() ?>"
               class="relative rounded-2xl overflow-hidden col-span-1 row-span-1 flex items-start flex-col p-4 justify-start shadow hover:ring-4 ring-offset-1 ring-yellow-400"
            >
               <div class="w-full flex justify-between items-start">
                  <p class="bg-white px-4 py-2 rounded-md font-bold text-xl"> <?php the_title() ?> </p>
                  <p class="px-2 bg-white rounded-full font-bold text-xs py-0.5"><?php the_time("M d, Y"); ?></p>
               </div>
               <p class="bg-white mt-2 rounded p-2 text-xs max-w-[80%] font-bold">
                  <?php echo get_the_excerpt() ?>
               </p>
               <div class="mt-auto ml-auto w-8 h-8 m-4 flex justify-center items-center bg-white rounded-full">
                  <?php 
                     $custom_class = "w-4 h-4";
                     get_template_part("templates/icons/arrowRightUp", null, array(
                        "custom_class" => $custom_class
                     ));
                  ?>
               </div>
               <img class="inset-0 absolute w-full h-full object-cover -z-10" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
            </a>
         <?php }?>
         <?php if($index > 2) {?>
            <a 
               href="<?php the_permalink() ?>"
               class="relative overflow-hidden rounded-2xl aspect-video col-span-1 row-span-1 flex items-start flex-col p-4 justify-start shadow"
            >
               <div class="w-full flex justify-between items-start">
                  <p class="bg-white px-4 py-2 rounded-md font-bold text-xl"> <?php the_title() ?> </p>
                  <p class="px-2 bg-white rounded-full font-bold text-xs py-0.5"><?php the_time("M d, Y"); ?></p>
               </div>
               <p class="bg-white mt-2 rounded p-2 text-xs max-w-[80%] font-bold">
                  <?php echo get_the_excerpt() ?>
               </p>
               <div class="mt-auto ml-auto w-8 h-8 m-4 flex justify-center items-center bg-white rounded-full">
                  <?php 
                     $custom_class = "w-4 h-4";
                     get_template_part("templates/icons/arrowRightUp", null, array(
                        "custom_class" => $custom_class
                     ));
                  ?>
               </div>
               <img class="inset-0 absolute w-full h-full object-cover -z-10" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
            </a>
         <?php }?>
      <?php 
         } 
      ?>
   </div>
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
         <form class="flex flex-col items-start gap-2">
            <h2 class="text-white text-4xl font-bold">Join now</h2>
            <div class="flex gap-2">
               <input 
                  class="p-2 bg-white/20 backdrop-blur w-72 rounded-lg border-white border-2" 
                  type="email"
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
<?php 
   get_footer()
?>
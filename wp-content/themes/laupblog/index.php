<?php 
   get_header()
?>
   <h2 class="container mb-3 text-4xl font-bold italic">
      Recent
   </h2>
   <div class="container grid grid-cols-2 grid-rows-2 gap-4">
      <?php 
         while(have_posts()){
            the_post();
            $index = $wp_query->current_post;
      ?>
         <?php if($index === 0) {?>
            <div class="relative rounded-2xl col-span-1 overflow-hidden row-span-2 aspect-square flex items-start p-4 justify-start">
               <div class="w-full flex justify-between items-start">
                  <p class="px-2 bg-white rounded-full"><?php echo the_time("n.j.y"); ?></p>
                  <p class="bg-white p-2 rounded-md font-bold text-xl"> <?php the_title() ?> </p>
               </div>
               <img class="inset-0 absolute w-full h-full object-cover -z-10" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
            </div>
         <?php }?>
         <?php if($index > 0 && $index <= 2) {?>
            <div class="bg-red-200 rounded-2xl col-span-1 row-span-1">
               <p> <?php the_title() ?> </p>
               <p><?php echo get_the_post_thumbnail() ?></p>
            </div>
         <?php }?>
         <?php if($index > 2) {?>
            <div class="bg-red-200 rounded-2xl aspect-video col-span-1 row-span-1">
               <p> <?php the_title() ?> </p>
            </div>
         <?php }?>
      <?php 
         } 
      ?>
   </div>
<?php 
   get_footer()
?>
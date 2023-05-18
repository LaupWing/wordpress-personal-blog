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
            <a href="<?php the_permalink() ?>">
               <div class="relative rounded-2xl col-span-1 overflow-hidden row-span-2 aspect-square flex items-start flex-col p-4 justify-start shadow">
                  <div class="w-full flex justify-between items-start">
                     <p class="px-2 bg-white rounded-full font-bold text-xs py-0.5"><?php the_time("M d, Y"); ?></p>
                     <p class="bg-white px-4 py-2 rounded-md font-bold text-3xl"> <?php the_title() ?> </p>
                  </div>
                  <div class="mt-auto ml-auto w-10 h-10 flex justify-center items-center bg-white rounded-full">
                     <?php get_template_part("templates/icons/arrowRightUp")?>
                  </div>
                  <img class="inset-0 absolute w-full h-full object-cover -z-10" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
               </div>
            </a>
         <?php }?>
         <?php if($index > 0 && $index <= 2) {?>
            <div class="relative rounded-2xl overflow-hidden col-span-1 row-span-1 flex items-start flex-col p-4 justify-start shadow">
               <div class="w-full flex justify-between items-start">
                  <p class="bg-white px-4 py-2 rounded-md font-bold text-xl"> <?php the_title() ?> </p>
                  <p class="px-2 bg-white rounded-full font-bold text-xs py-0.5"><?php the_time("M d, Y"); ?></p>
               </div>
               <div class="w-8 h-8 m-4 flex justify-center items-center bg-white rounded-full">
                  <?php 
                     $custom_class = "w-4 h-4";
                     get_template_part("templates/icons/arrowRightUp", null, array(
                        "custom_class" => $custom_class
                     ));
                  ?>
               </div>
               <img class="inset-0 absolute w-full h-full object-cover -z-10" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
            </div>
         <?php }?>
         <?php if($index > 2) {?>
            <div class="relative overflow-hidden rounded-2xl aspect-video col-span-1 row-span-1 flex items-start flex-col p-4 justify-start shadow">
               <div class="w-full flex justify-between items-start">
                  <p class="bg-white px-4 py-2 rounded-md font-bold text-xl"> <?php the_title() ?> </p>
                  <p class="px-2 bg-white rounded-full font-bold text-xs py-0.5"><?php the_time("M d, Y"); ?></p>
               </div>
               <div class="w-8 h-8 m-4 flex justify-center items-center bg-white rounded-full">
                  <?php 
                     $custom_class = "w-4 h-4";
                     get_template_part("templates/icons/arrowRightUp", null, array(
                        "custom_class" => $custom_class
                     ));
                  ?>
               </div>
               <img class="inset-0 absolute w-full h-full object-cover -z-10" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
            </div>
         <?php }?>
      <?php 
         } 
      ?>
   </div>
<?php 
   get_footer()
?>
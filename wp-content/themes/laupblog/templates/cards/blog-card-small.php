<a 
   href="<?php the_permalink() ?>"
   class="col-span-1 row-span-1 blog-card"
>
   <div class="w-full flex justify-between items-start">
      <p class="bg-white px-4 py-2 rounded-md font-bold text-xl"> <?php the_title() ?> </p>
      <p class="px-2 bg-white rounded-full font-bold text-xs py-0.5"><?php the_time("M d, Y"); ?></p>
   </div>
   <p class="bg-white/40 backdrop-blur-md mt-2 rounded p-2 text-xs max-w-[80%] font-bold">
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
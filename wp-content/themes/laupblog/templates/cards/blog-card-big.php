<a 
   href="<?php the_permalink() ?>"
   class="col-span-1 row-span-2 aspect-square blog-card"
>
   <div class="w-full flex justify-between items-start">
      <p class="px-2 bg-white rounded-full font-bold text-xs py-0.5"><?php the_time("M d, Y"); ?></p>
      <p class="bg-white px-4 py-2 rounded-md font-bold text-3xl"> <?php the_title() ?> </p>
   </div>
   <p class="text-right bg-white/40 backdrop-blur-md mt-2 rounded ml-auto p-2 text-sm max-w-[80%] font-bold">
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
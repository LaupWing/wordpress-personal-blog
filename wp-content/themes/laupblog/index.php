<?php 
   get_header()
?>
   <div class="container grid grid-cols-2 grid-rows-2 gap-4">
      <?php 
         while(have_posts()){
            the_post();
            $index = $wp_query->current_post;
      ?>
         <?php if($index === 0) {?>
            <div class="bg-red-200 rounded-2xl col-span-1 row-span-2 aspect-square">
               <p> <?php the_title() ?> </p>
            </div>
         <?php }?>
         <?php if($index > 0 && $index <= 2) {?>
            <div class="bg-red-200 rounded-2xl col-span-1 row-span-1">
               <p> <?php the_title() ?> </p>
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
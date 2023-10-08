<?php 
   get_header()
?>
   <h2 class="container mb-6 text-5xl font-bold font-cursive">
      Blogs
   </h2>
   <div class="container grid grid-cols-1 sm:grid-cols-2 grid-rows-2 gap-4">
      <?php 
         while(have_posts()){
            the_post();
            $index = $wp_query->current_post;
      ?>
         <?php if($index === 0) {?>
            <?php get_template_part("templates/cards/blog-card-big")?>
         <?php }?>
         <?php if($index > 0 && $index <= 2) {?>
            <?php get_template_part("templates/cards/blog-card-small")?>
         <?php }?>
         <?php if($index > 2) {?>
            <?php get_template_part("templates/cards/blog-card-rect")?>
         <?php }?>
      <?php 
         } 
      ?>
   </div>
   
<?php
   get_footer()
?>
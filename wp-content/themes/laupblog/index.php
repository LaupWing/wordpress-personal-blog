<?php 
   get_header()
?>
   <div class="container grid grid-cols-3 gap-4">
      <?php 
         while(have_posts()){
            the_post();
            $index = $wp_query->current_post;
      ?>
         <div class="bg-red-200 <?php echo $index === 0 ? 'col-span-2 aspect-square' : 'col-span-1' ?>">
            <p> <?php the_title() ?> </p>
         </div>
      <?php 
         } 
      ?>
   </div>
<?php 
   get_footer()
?>
<?php 
   get_header()
?>
   <div class="container grid grid-cols-3">
      <?php 
         while(have_posts()){
            the_post();
            $index = $wp_query->current_post;
      ?>
         <p> <?php 
            echo $index; 
            the_title() 
         ?> </p>
      <?php 
         } 
      ?>
   </div>
<?php 
   get_footer()
?>
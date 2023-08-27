<?php 
   get_header()
?>
   <div class="container mb-6 flex items-end justify-between">
      <h2 class="sm:text-5xl text-4xl font-bold font-cursive">
         Recent
      </h2>
      <a href="<?php echo site_url("/blogs") ?>">
         <button class="bg-yellow-400 mb-1.5 text-sm py-1 font-bold font-cursive px-2 rounded-md shadow">See all posts</button>
      </a>
   </div>
   <div class="container grid grid-cols-1 sm:grid-cols-2 grid-rows-2 gap-4">
      <?php 
         $homepagePosts = new WP_Query(array(
            "posts_per_page" => 5
         ));
         while($homepagePosts->have_posts()){
            $homepagePosts->the_post();
            
            $index = $homepagePosts->current_post;
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
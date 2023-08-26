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
         <?php }?>
         <?php if($index > 0 && $index <= 2) {?>
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
         <?php }?>
         <?php if($index > 2) {?>
            <a 
               href="<?php the_permalink() ?>"
               class="aspect-video col-span-1 row-span-1 blog-card"
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
         <?php }?>
      <?php 
         } 
      ?>
   </div>
<?php 
   get_footer()
?>
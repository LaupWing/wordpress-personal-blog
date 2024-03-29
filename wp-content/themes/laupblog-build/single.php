<?php 
   get_header()
?>
   <div class="container flex flex-col">
      <a class="mb-4" href="<?php echo site_url("/blogs") ?>">
         <button class="bg-yellow-400 text-sm py-1 px-2 rounded-md shadow font-cursive font-bold">Back to all</button>
      </a>
      <div class="w-full h-44 rounded-lg relative overflow-hidden p-4 flex items-start justify-start">
         <h2 class="mb-3 text-4xl font-bold italic bg-white px-4 py-2 rounded-md">
            <?php the_title() ?>
         </h2>
         <img class="absolute inset-0 w-full h-full object-cover -z-10" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
      </div>
   </div>
   <div id="content" class="container mt-4">
      <?php the_content() ?>
   </div>
<?php 
   get_footer()
?>
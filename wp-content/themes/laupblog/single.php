<?php 
   get_header()
?>
   <div class="container flex flex-col">
      <div class="w-full h-44 rounded-lg relative overflow-hidden p-4 flex items-start justify-start">
         <h2 class="mb-3 text-4xl font-bold italic bg-white px-4 py-2 rounded-md">
            <?php the_title() ?>
         </h2>
         <img class="absolute inset-0 w-full h-full object-cover -z-10" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
      </div>
   </div>
   <div id="content" class="container">
      <?php the_content() ?>
   </div>
<?php 
   get_footer()
?>
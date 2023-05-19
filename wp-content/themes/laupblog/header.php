<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
   <meta charset="<?php bloginfo("charset") ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
   <header class="py-4 flex justify-center max-w-6xl mx-auto">
      <div class="container flex justify-between items-center">
         <div class="flex items-end">
            <h1 class="font-bold mr-8 text-xl font-cursive">Laup Wing</h1>
            <nav>
               <?php
                  wp_nav_menu([
                     "theme_location" => "headerMenuLocation"
                  ]);
               ?>
            </nav>
         </div>
         <div>
            <div class="w-[34px] h-[34px] text-white bg-black rounded-full flex items-center justify-center">
               <?php  get_template_part("templates/icons/search")?>
            </div>
         </div>
      </div>
   </header>
   <main class="flex items-center justify-center flex-col max-w-6xl mx-auto">
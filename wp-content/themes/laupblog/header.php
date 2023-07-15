<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
   <meta charset="<?php bloginfo("charset") ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
   <div class="fixed inset-0 bg-white z-50">
      <nav class="flex flex-col pt-[10vh] pl-4 sm:hidden">
         <h1 class="font-bold sm:mr-8 text-xl font-cursive">Laup Wing</h1>
         <?php
            wp_nav_menu([
               "theme_location" => "headerMenuLocation"
            ]);
         ?>
      </nav>
   </div>
   <header class="py-4 flex justify-center max-w-6xl mx-auto">
      <div class="container flex justify-between items-center">
         <div class="sm:hidden w-1/3">
            <?php  get_template_part("templates/icons/menu")?>
         </div>
         <div class="flex items-end sm:w-auto w-1/3 ">
            <h1 class="font-bold sm:mr-8 text-xl font-cursive">Laup Wing</h1>
            <nav class="hidden sm:flex">
               <?php
                  wp_nav_menu([
                     "theme_location" => "headerMenuLocation"
                  ]);
               ?>
            </nav>
         </div>
         <div class="w-1/3 sm:w-auto flex justify-end">
            <div class="w-[34px] h-[34px] text-white bg-black rounded-full flex items-center justify-center">
               <?php  get_template_part("templates/icons/search")?>
            </div>
         </div>
      </div>
   </header>
   <main class="flex items-center justify-center flex-col max-w-6xl mx-auto">
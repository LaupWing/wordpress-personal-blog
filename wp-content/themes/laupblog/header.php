<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
   <meta charset="<?php bloginfo("charset") ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
   <div 
      id="side-nav"
      class="fixed sm:hidden inset-0 bg-white z-50 duration-500"
      data-open="false"
      style="transform: translateX(-100%);"
   >
      <nav class="flex flex-col pt-[6vh] px-10 sm:hidden">
         <button 
            class="ml-auto mb-6"
            id="close"
         >
            <?php get_template_part("templates/icons/close")?>
         </button>
         <h1 class="font-bold sm:mr-8 text-xl font-cursive">
            Laup Wing
         </h1>
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
            <button 
               id="menu-btn" 
               class="flex items-center justify-center"
            >
               <?php get_template_part("templates/icons/menu")?>
            </button>
         </div>
         <div class="flex items-end sm:w-auto w-1/3 ">
            <h1 class="font-bold sm:mr-8 gap-1 text-xl whitespace-nowrap font-cursive flex">
               Laup Wing
               <?php get_template_part("templates/icons/chad")?>
            </h1>
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
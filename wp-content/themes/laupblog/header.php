<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
   <meta charset="<?php bloginfo("charset") ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
   <header class="py-4 flex justify-center">
      <div class="container flex justify-between items-center">
         <div class="flex items-center">
            <h1 class="font-bold">LaupWing</h1>
            <nav>
               <?php
                  wp_nav_menu([
                     "theme_location" => "headerMenuLocation"
                  ]);
               ?>
            </nav>
         </div>
         <div>
            <?php  get_template_part("templates/icons/search")?>
         </div>
      </div>
   </header>
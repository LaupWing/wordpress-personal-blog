<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
   <meta charset="<?php bloginfo("charset") ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
   <header class="py-4 flex justify-center">
      <div class="container">
         <h1 class="font-bold">LaupWing</h1>
         <nav>
            <?php
               wp_nav_menu([
                  "theme_location" => "headerMenuLocation"
               ]);
            ?>
         </nav>
      </div>
   </header>
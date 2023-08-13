<?php

function loadAssets(){
   wp_enqueue_style("mainstyle", get_theme_file_uri("/build/index.css"));
   wp_enqueue_script("mainscript", get_theme_file_uri("/build/index.js"), array("wp-element"), "1", true);
   wp_localize_script(
      "mainscript",
      "wordpress_data",
      [
         "root_url" => get_site_url(),
         "nonce" => wp_create_nonce("wp_rest")
      ]
   );
}

add_action("wp_enqueue_scripts", "loadAssets");

function addSupport(){
   register_nav_menu("headerMenuLocation", "Header Menu Location");
   add_theme_support("title-tag");
   add_theme_support("post-thumbnails");
}

add_action("after_setup_theme", "addSupport");
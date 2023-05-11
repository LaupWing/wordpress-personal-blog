<?php

function loadAssets(){
   wp_enqueue_script("mainscript", get_theme_file_uri("/build/index.js", array("wp-element"), "1.0", true));
   wp_enqueue_style("mainstyle", get_theme_file_uri("/build/index.css"));
}

add_action("wp_enqueue_scripts", "loadAssets");

function addSupport(){
   add_theme_support("title-tag");
}

add_action("after_setup_theme", "addSupport");
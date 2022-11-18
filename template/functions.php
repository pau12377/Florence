<?php //functions.php
function enqueue_scripts(){
  // css
  wp_enqueue_style('main-css', get_stylesheet_uri());
}
  add_action('wp_enqueue_scripts', 'enqueue_scripts');
<?php //functions.php
function enqueue_scripts() {
// css
wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css' , array(), '',);
wp_enqueue_style('main-css', get_stylesheet_uri());
// js
wp_enqueue_script('jquery-min-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js' , array(), '3.6.1', true);
wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js' , array(), '', true );
wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/style.js' , array('jquery-min-js'), '', true);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

//管理バーの削除
add_filter('show_admin_bar', '__return_false');

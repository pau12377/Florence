<?php //functions.php
function enqueue_scripts(){
// css
wp_enqueue_style('main-css', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

//管理バーの削除
add_filter( 'show_admin_bar', '__return_false' );
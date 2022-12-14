<?php //functions.php
function enqueue_scripts() {
  // css
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css' , array(), '',);
  wp_enqueue_style('lightgallery-css', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lightgallery.min.css' , array(), '',);
  wp_enqueue_style('lg-thumbnail-css', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lg-thumbnail.min.css' , array(), '',);
  wp_enqueue_style('main-css', get_stylesheet_uri());
  // js
  wp_enqueue_script('jquery-min-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js' , array(), '3.6.1', true);
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js' , array(), '', true );
  wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/style.js' , array('jquery-min-js'), '', true);
  wp_enqueue_script('lightgallery-js', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/lightgallery.min.js' , array(), '2.7.0', true);
  wp_enqueue_script('lightgallery-zoom-js', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/plugins/zoom/lg-zoom.min.js' , array(), '2.7.0', true);
  wp_enqueue_script('lightgallery-thumbnail-js', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/plugins/thumbnail/lg-thumbnail.min.js' , array(), '2.7.0', true);
  wp_enqueue_script('custom-lightgallery', get_stylesheet_directory_uri() . '/js/lightgallery.js' , array(), '', true);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

//管理バーの削除
add_filter('show_admin_bar', '__return_false');

//ページごとにbodyにクラス追加
add_filter('body_class', 'custom_body_class');

function custom_body_class($classes) {
  $classes[] = get_child_class();

  return $classes;
}

function get_child_class() {
  $class = '';

  if (isFlorenceACategory()) {
    $class = 'FlorenceA';
  } else if (isFlorenceBCategory()) {
    $class = 'FlorenceB';
  }
  
  return $class;
}

function isTop() {
  return strtolower($_SERVER["REQUEST_URI"]) == '/';
}

function isFlorenceACategory() {
  return strpos(strtolower($_SERVER["REQUEST_URI"]), 'florencea');
}
	
function isFlorenceBCategory() {
  return strpos(strtolower($_SERVER["REQUEST_URI"]), 'florenceb');
}

function isFlorenceA() {
  return strtolower($_SERVER["REQUEST_URI"]) == '/florencea/';
}
	
function isFlorenceB() {
  return strtolower($_SERVER["REQUEST_URI"]) == '/florenceb/';
}

function isGallery() {
  return strpos(strtolower($_SERVER["REQUEST_URI"]), 'gallery');
}

function isSingle() {
  // 新たなページ判定が追加された際は条件の変更が必須
  return !isGallery() && !isTop() && !isFlorenceA() && !isFlorenceB();
}
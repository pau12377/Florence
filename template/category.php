<?php get_header(); ?>

<?php
  $cat = get_the_category();
  $slug = $cat[0]->slug;

  if ($slug == 'florencea') {
    include(get_template_directory() . '/include/florenceA.php');
  } else if ($slug == 'florenceb') {
    include(get_template_directory() . '/include/florenceB.php');
  }
?>

<?php get_footer(); ?>
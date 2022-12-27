<?php get_header(); ?>

<main>
  <div class="content wrapper">
    <div class="gallery-header__header">
      <div class="title">
        <h2 class="title__main">
          <span class="title__main--head">G</span>allery
        </h2>
      </div>
    </div>
    <?php
      $category = get_the_category();
      echo $category[0]->cat_name;
    ?>
    <?php the_content(); ?>
  </div>
</main>

<?php get_footer(); ?>
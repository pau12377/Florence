<?php get_header(); ?>
<div class="news-header">
  <div class="title">
    <h2 class="title__main">
      <span class="title__main--head">N</span>ews
    </h2>
  </div>
</div>
<nav class="breadcrumbs">
  <div class="inner">
    <ul>
      <li class="breadcrumbs__item">
        <a href="<?php echo esc_url(home_url()); ?>">Top</a>
      </li>
      <?php if (isFlorenceACategory() || isFlorenceBCategory()) { ?>
        <li class="breadcrumbs__item">
          <a href="<?php echo home_url('/' . get_child_class()); ?>"><?php echo get_child_class() ?></a>
        </li>
      <?php } ?>
      <li class="breadcrumbs__item">
        <p>News</p>
      </li>
    </ul>
  </div>
</nav>
<div class="news-content">
  <div class="inner">
    <div class="news-content__date">
      <?php echo get_the_date(); ?>
    </div>
    <div class="news-content__title">
      <?php echo get_the_title(); ?>
    </div>
    <div class="news-content__content">
      <?php echo get_the_content(); ?>
    </div>
  </div>
</div>
<?php include(get_template_directory() . '/include/contact.php'); ?>
<?php get_footer();
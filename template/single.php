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
<div class="news-body">
  <div class="news-body__date">
    <?php echo get_the_date(); ?>
  </div>
</div>

<?php get_footer(); ?>
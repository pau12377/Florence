<nav class="breadcrumbs">
  <div class="inner">
    <ul>
      <li class="breadcrumbs__item">
        <a href="<?php echo esc_url(home_url()); ?>">Top</a>
      </li>
      <li class="breadcrumbs__item">
        <a href="<?php echo home_url('/' . get_child_class()); ?>"><?php echo get_child_class() ?></a>
      </li>
      <li class="breadcrumbs__item">
        <a href="<?php echo home_url('/' . get_child_class() . '_gallery'); ?>">Gallery</a>
      </li>
    </ul>
  </div>
</nav>

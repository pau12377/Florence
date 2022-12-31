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
<div class="contact">
  <div class="inner">
    <div class="contact__wrap">
      <div class="title">
        <h2 class="title__main">
          <span class="title__main--head">C</span>ontact
        </h2>
        <h3 class="title__sub">お問い合わせ</h3>
      </div>
      <div class="contact__lead">
        <p>ご相談・ご質問はお電話のみ受け付けております。</p>
        <p>お気軽に管理人までご連絡ください。</p>
        <p>
          また群大生の場合、生協の方が一般の不動産会社より安くご契約できますので、ご検討中の方はご連絡ください。
        </p>
      </div>
      <div class="tel">
        <h4 class="tel__title">ご相談・ご質問はこちら</h4>
        <span class="material-icons"> phone </span>
        <a href="tel:0272355601" class="tel__number">027-235-5601</a>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
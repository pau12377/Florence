<div class="news">
  <div class="inner news__box">
    <div class="news-title">
      <h2 class="news-title__main">
        <span class="news-title__head">N</span>ews
      </h2>
      <h3 class="news-title__second">新着情報</h3>
    </div>
    <div class="news__card">
      <?php
        $posts_count = ['posts_per_page' => 3, 'category_name' => get_child_class()]; // 表示件数の指定
        $posts = get_posts($posts_count); // 記事を取得
        if($posts): // 記事が存在するときのみループ処理
          foreach ($posts as $post): // ループの開始
            setup_postdata($post); // 記事データの取得
      ?>
            <div class="news__item">
              <span class="news__data"><?php the_time('Y年m月j日'); ?></span>
              <a class="news__content" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
      <?php
          endforeach; // ループの終了
        endif;
        wp_reset_postdata(); // 直前のクエリを復元する
      ?>
    </div>
  </div>
</div>

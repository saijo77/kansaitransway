<?php get_header() ?>
<div class="c-archive">
  <div class="c-archive__inner">
    <h1 class="c-archive__title">News<span>/　お知らせ</span></h1>
    <div class="c-breadcrumb">
      <ul class="c-breadcrumb__lists">
        <li><a href="<?php echo home_url(); ?>">HOME</a></li>
        <li>お知らせ一覧</li>
      </ul>
    </div>
    <img class="c-archive__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/news_img.png" alt="">
  </div>
</div>
<div class="p-news">
  <div class="p-news__inner">
    <article class="p-news__article">
      <ul class="p-news__lists">
        <!-- 記事のループ処理開始 -->
        <?php
        if (wp_is_mobile()) {
          $num = 10; // スマホの表示数(全件は-1)
        } else {
          $num = 10; // PCの表示数(全件は-1)
        }
        // 投稿タイプのみ指定する場合
        $args = [
          'post_type' => 'post', // 投稿タイプのスラッグ(通常投稿なので'post')
          'paged' => $paged, // ページネーションがある場合に必要
          'posts_per_page' => $num, // 表示件数
        ];
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post();
        ?>
            <li class="p-news__list will-fadeIn">
              <a class="p-news__link" href="<?php the_permalink(); ?>">
                <div class="p-news__timeBox">
                  <p class="p-news__year">
                    <time datetime="<?php the_time('Y.n.j'); ?>">
                      <?php the_time('Y'); ?>
                    </time>
                  </p>
                  <p class="p-news__day">
                    <time datetime="<?php the_time('Y.n.j'); ?>">
                      <?php the_time('m.d'); ?>
                    </time>
                  </p>
                </div>
                <h2 class="p-news__articleTitle">
                  <?php
                  $title = get_the_title();
                  if (mb_strlen($title) > 45) {
                    echo mb_substr($title, 0, 45) . '...';
                  } else {
                    echo $title;
                  }
                  ?>
                </h2>
              </a>
            </li>
          <?php endwhile;
        else : ?>
          <?php wp_reset_query(); ?>
          <p>お知らせがありません</p>
        <?php endif ?>
        <!-- 記事のループ処理終了 -->
      </ul>
      <div class="p-news-nav will-fadeIn">
        <?php
        the_posts_pagination(array(
          'mid_size' => 1,
          'prev_text' => '前へ',
          'next_text' => '次へ'
        ));
        ?>
      </div>
    </article>
  </div>
</div>
<?php get_footer() ?>
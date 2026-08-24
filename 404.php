<?php get_header(); ?>
<main>
  <div class="c-archive">
    <div class="c-archive__inner c-archive__inner_bg02">
      <h1 class="c-archive__title">404<span>/　ページが見つかりませんでした</span></h1>
      <div class="c-breadcrumb">
        <ul class="c-breadcrumb__lists">
          <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
          <li>ページが見つかりませんでした</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="p-404">
    <div class="p-404__inner">
      <p class="p-404__code" aria-hidden="true">404</p>
      <h2 class="p-404__title">お探しのページが<br class="u-change_md">見つかりませんでした。</h2>
      <p class="p-404__text">
        お探しのページが見つかりません。<br>
        <br>
        一時的にアクセスできない状況にあるか、<br class="u-change_md">移動もしくは削除された可能性があります。
      </p>
      <a class="p-404__button" href="<?php echo esc_url(home_url('/')); ?>">TOPページへ戻る</a>
    </div>
  </div>
</main>
<?php get_footer(); ?>

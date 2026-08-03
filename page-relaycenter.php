<?php get_header() ?>
<main>
  <div class="c-archive">
    <div class="c-archive__inner c-archive__inner_bg">
      <h1 class="c-archive__title">Relay<br>Center<span>/　中継センター</span></h1>
      <div class="c-breadcrumb">
        <?php get_template_part('template/breadcrumb-logistics'); ?>
      </div>
      <img class="c-archive__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/LogisticsCenter01_top.png" alt="">
    </div>
  </div>

  <?php get_template_part('template/logistics-subnav'); ?>

  <div class="c-item02">
    <div class="c-item02__inner">
      <p class="c-item02__text">
        <span class=" will-fadeIn">
          提携企業との協業により西日本をネットワーク。<br>
          専属車両によるルート配送、ローコストの共同配送など、貴社の物流特製・ニーズに応じた<br class="u-change_pc">サービスをご提供します。<br>
          輸送・保管とも多温度帯管理で品質は安心。<br>
          365日24時間体制で納品時間順守、夜間の無人店舗への配送も行います。
        </span>
      </p>
      <img class="c-item02__img will-fadeIn" src="<?php echo get_template_directory_uri(); ?>/img/archive/relaycenter_img.png" alt="">
    </div>
  </div>
</main>
<?php get_footer() ?>
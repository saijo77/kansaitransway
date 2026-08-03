<?php get_header() ?>
<main>
  <div class="c-archive">
    <div class="c-archive__inner c-archive__inner_bg">
      <h1 class="c-archive__title">Office<span>/　事業所・営業所</span></h1>
      <div class="c-breadcrumb">
        <?php get_template_part('template/breadcrumb-logistics'); ?>
      </div>
      <img class="c-archive__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/LogisticsCenter01_top.png" alt="">
    </div>
  </div>

  <?php get_template_part('template/logistics-subnav'); ?>

  <div class="c-item">
    <div class="c-item__inner fade-itemBox">

      
      <div class="c-item__column fade-item">
        <h2 class="c-item__title">南港事業所</h2>
        <div class="c-item__box">
          <img class="c-item__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/office_img03.png" alt="">
          <p class="c-item__text">
            〒559-0024<br>
            所在地：大阪府大阪市住之江区新北島8-2-80<br>
            TEL：06-6686-1126(代)<br>
            FAX：06-6686-1127
          </p>
        </div>
      </div>
      <div class="c-item__column fade-item">
        <h2 class="c-item__title">東大阪事業所</h2>
        <div class="c-item__box">
          <img class="c-item__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/office_img04.png" alt="">
          <p class="c-item__text">
            〒581-0081<br>
            所在地：大阪府八尾市南本町9-4-1<br>
            TEL：0729-76-4907(代)<br>
            FAX：0729-76-4907
          </p>
        </div>
      </div>
      <div class="c-item__column fade-item">
        <h2 class="c-item__title">神戸事業所</h2>
        <div class="c-item__box">
          <img class="c-item__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/office_img05.png" alt="">
          <p class="c-item__text">
            〒658-0023<br>
            所在地：兵庫県神戸市東灘区深江浜町151<br>
            TEL：078-200-5428(代)<br>
            FAX：078-200-5429
          </p>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer() ?>
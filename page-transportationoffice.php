<?php get_header() ?>
<main>
  <div class="c-archive">
    <div class="c-archive__inner c-archive__inner_bg">
      <h1 class="c-archive__title editTitle">Transportation<br>Office<span>/　運輸事業所</span></h1>
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
        <h2 class="c-item__title">泉大津事業所</h2>
        <div class="c-item__box">
          <img class="c-item__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/trans_office_01.png" alt="">
          <p class="c-item__text">
            〒595-0031<br>
            所在地：大阪府泉大津市我孫子1-3-37<br>
            TEL：0725-22-2700<br>
            FAX：0725-22-2900
          </p>
        </div>
      </div>
      <div class="c-item__column fade-item">
        <h2 class="c-item__title">岸和田事業所</h2>
        <div class="c-item__box">
          <img class="c-item__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/trans_office_02.png" alt="">
          <p class="c-item__text">
            〒596-0016<br>
            所在地：大阪府岸和田市岸之浦町11-7<br>
            TEL:072-436-1819<br>
            FAX:072-436-1820
          </p>
        </div>
      </div>
      <div class="c-item__column fade-item">
        <h2 class="c-item__title">京都事業所</h2>
        <div class="c-item__box">
          <img class="c-item__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/trans_office_03.png" alt="">
          <p class="c-item__text">
            〒610-0231<br>
            所在地：京都府綴喜郡宇治田原町<br>
            　　　　大字立川小字立川46-1<br>
            TEL：0774-99-7070<br>
            FAX：0774-99-7080
          </p>
        </div>
      </div>
      <div class="c-item__column fade-item">
        <h2 class="c-item__title">南大阪CVS事業所</h2>
        <div class="c-item__box">
          <img class="c-item__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/trans_office_04.png" alt="">
          <p class="c-item__text">
            〒594-1122<br>
            所在地：大阪府和泉市北田中町382-1<br>
            TEL：0725-92-1943(代)<br>
            FAX：0725-92-1084
          </p>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer() ?>
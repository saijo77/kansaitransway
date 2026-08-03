<?php get_header() ?>
<main>
  <div class="c-archive">
    <div class="c-archive__inner c-archive__inner_bg">
      <h1 class="c-archive__title">Organization<span>/　組織図</span></h1>
      <div class="c-breadcrumb">
        <?php get_template_part('template/breadcrumb-company'); ?>
      </div>
      <img class="c-archive__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/message_top.png" alt="">
    </div>
  </div>

  <?php get_template_part('template/company-subnav'); ?>

  <section class="p-organization">
    <div class="p-organization__inner">
      <div class="p-organization__chartWrap">
        <img
          class="p-organization__chart"
          src="<?php echo esc_url(get_template_directory_uri()); ?>/img/archive/organization_chart.png"
          width="1642"
          height="1206"
          alt="関西トランスウェイ株式会社 組織図"
          loading="lazy"
          decoding="async"
        >
      </div>
    </div>
  </section>
  
</main>
<?php get_footer() ?>
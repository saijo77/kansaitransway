<?php
$logistics_nav_items = array(
  array(
    'slug' => 'logisticscenter',
    'en'   => 'Logistics Center',
    'ja'   => '物流センター',
  ),
  array(
    'slug' => 'transportationoffice',
    'en'   => 'Transportation Office',
    'ja'   => '運輸事業所',
  ),
  array(
    'slug' => 'office',
    'en'   => 'Office',
    'ja'   => '事業所・営業所',
  ),
  array(
    'slug' => 'deliveryoffice',
    'en'   => 'Delivery Office',
    'ja'   => '宅配事業所',
  ),
  array(
    'slug' => 'relaycenter',
    'en'   => 'Relay Center',
    'ja'   => '中継センター',
  ),
);

$current_slug = is_page() ? get_post_field('post_name', get_queried_object_id()) : '';
?>

<div class="c-card02 c-card02--subnav">
  <div class="c-card02__inner">
    <?php foreach ($logistics_nav_items as $item) : ?>
      <?php
      $is_current = ($current_slug === $item['slug']);
      $url = home_url('/' . $item['slug'] . '/');
      $link_class = 'c-card02__link' . ($is_current ? ' is-current' : '');
      ?>
      <?php if ($is_current) : ?>
        <div class="<?php echo esc_attr($link_class); ?>">
          <p class="c-card02__title">
            <?php echo esc_html($item['en']); ?><span>/<?php echo esc_html($item['ja']); ?></span>
          </p>
        </div>
      <?php else : ?>
        <a class="<?php echo esc_attr($link_class); ?>" href="<?php echo esc_url($url); ?>">
          <p class="c-card02__title">
            <?php echo esc_html($item['en']); ?><span>/<?php echo esc_html($item['ja']); ?></span>
          </p>
        </a>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>

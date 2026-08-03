<?php
$company_nav_items = array(
  array(
    'slug' => 'message',
    'en'   => 'Message',
    'ja'   => '代表ご挨拶',
  ),
  array(
    'slug' => 'company',
    'en'   => 'Company',
    'ja'   => '会社概要',
  ),
  array(
    'slug' => 'organization',
    'en'   => 'Organization',
    'ja'   => '組織図',
  ),
  array(
    'slug' => 'history',
    'en'   => 'History',
    'ja'   => '沿革',
  ),
  array(
    'slug' => 'management',
    'en'   => 'Management',
    'ja'   => '運輸安全マネジメントの取り組み',
  ),
);

$current_slug = is_page() ? get_post_field('post_name', get_queried_object_id()) : '';
?>

<div class="c-card02 c-card02--subnav">
  <div class="c-card02__inner">
    <?php foreach ($company_nav_items as $item) : ?>
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

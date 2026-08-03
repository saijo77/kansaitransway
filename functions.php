<?php

//削除　停止ーーーーーーーーーーーー
// ヘッダーにある不要なタグを削除する
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_print_styles', 8);
remove_action('wp_head', 'wp_print_head_scripts', 9);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'recent_comments_style');

//自動更新を無効にする
add_filter('automatic_updater_disabled', '__return_true');

// 管理画面　WP ロゴ削除
function hide_admin_logo()
{
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'hide_admin_logo');

/**
 * ログイン画面のロゴをテーマロゴに差し替え
 */
function custom_theme_login_logo()
{
  $logo_url = get_template_directory_uri() . '/img/common/logo.svg';
  ?>
  <style>
    .login h1 a {
      background-image: url('<?php echo esc_url($logo_url); ?>');
      background-size: contain;
      background-position: center;
      background-repeat: no-repeat;
      width: 280px;
      height: 52px;
    }
  </style>
  <?php
}
add_action('login_enqueue_scripts', 'custom_theme_login_logo');

function custom_theme_login_logo_url()
{
  return home_url('/');
}
add_filter('login_headerurl', 'custom_theme_login_logo_url');

function custom_theme_login_logo_title()
{
  return get_bloginfo('name');
}
add_filter('login_headertext', 'custom_theme_login_logo_title');


//JS cssのversionを隠す
function remove_cssjs_ver($src)
{
  if (strpos($src, '?ver='))
    $src = remove_query_arg('ver', $src);
  return $src;
}
add_filter('script_loader_src', 'remove_cssjs_ver', 10, 2);
add_filter('style_loader_src', 'remove_cssjs_ver', 10, 2);
add_filter('wp_get_attachment_image_attributes', 'my_get_attachment_image_attributes', 10, 2);
function my_get_attachment_image_attributes($attr, $attachment)
{
  $attr['alt'] = $attr['title'] = '';
  return $attr;
}

// 抜粋文字数
function custom_excerpt_length($length)
{
  return 100;
}
add_filter('excerpt_length', 'custom_excerpt_length');

//抜粋の文末文字を指定
function custom_excerpt_more($more)
{
  return ' ... ';
}
add_filter('excerpt_more', 'custom_excerpt_more');


// 機能有効化
/* アイキャッチ画像 */
add_theme_support('post-thumbnails');

//ビジュアルエディタ
add_editor_style(array('css/editor-style.css'));

// 自動フィードリンク
add_theme_support('automatic-feed-links');

// <title>タグを wp_head() で出力（ページタイトル - サイトタイトル）
add_theme_support('title-tag');

/**
 * タイトルタグの形式を「固定ページタイトル - サイトタイトル」に統一
 * サイトタイトル: 設定 → 一般 → サイトのタイトル
 */
function custom_theme_document_title_parts($title)
{
  if (is_front_page()) {
    $title['title'] = get_bloginfo('name', 'display');
    unset($title['tagline'], $title['site'], $title['page']);
  }

  return $title;
}
add_filter('document_title_parts', 'custom_theme_document_title_parts');

// カスタムメニュー機能を有効化
add_theme_support('menus');

/**
 * ナビゲーションメニューの登録
 */
function custom_theme_register_nav_menus()
{
  register_nav_menus(array(
    'header-nav'    => 'ヘッダーメニュー',
    'hamburger-nav' => 'ハンバーガーメニュー',
    'footer-nav'    => 'フッターメニュー',
  ));
}
add_action('after_setup_theme', 'custom_theme_register_nav_menus');

/**
 * ヘッダー・ハンバーガー・フッター用カスタム Walker
 */
class Custom_Nav_Walker extends Walker_Nav_Menu
{
  private $nav_type;
  private $footer_ul_open = false;

  public function __construct($nav_type = 'header')
  {
    $this->nav_type = $nav_type;
  }

  public function walk($elements, $max_depth, ...$args)
  {
    if ('footer' === $this->nav_type) {
      $this->footer_ul_open = false;
    }

    $output = parent::walk($elements, $max_depth, ...$args);

    if ('footer' === $this->nav_type && $this->footer_ul_open) {
      $output .= '</ul>';
      $this->footer_ul_open = false;
    }

    return $output;
  }

  public function start_lvl(&$output, $depth = 0, $args = null)
  {
    if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
      $t = '';
      $n = '';
    } else {
      $t = "\t";
      $n = "\n";
    }
    $indent = str_repeat($t, $depth);

    $submenu_classes = array(
      'header'    => 'l-header-nav__lists02',
      'hamburger' => 'c-hamburger-nav__submenu',
      'footer'    => 'l-footer__lists02',
    );
    $classes = $submenu_classes[$this->nav_type] ?? 'c-hamburger-nav__lists02';
    $output .= "{$n}{$indent}<ul class=\"{$classes}\">{$n}";
  }

  public function end_lvl(&$output, $depth = 0, $args = null)
  {
    if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
      $t = '';
      $n = '';
    } else {
      $t = "\t";
      $n = "\n";
    }
    $indent  = str_repeat($t, $depth);
    $output .= "{$indent}</ul>{$n}";
  }

  public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
      $t = '';
      $n = '';
    } else {
      $t = "\t";
      $n = "\n";
    }
    $indent = ($depth) ? str_repeat($t, $depth) : '';

    if ('hamburger' === $this->nav_type) {
      $this->render_hamburger_item($output, $item, $depth, $args, $indent);
      return;
    }

    $li_class = '';
    $link_class = '';

    if ('header' === $this->nav_type) {
      $li_class = (0 === $depth) ? 'l-header-nav__list' : 'l-header-nav__list02';
      $link_class = (0 === $depth) ? 'l-header-nav__link' : 'l-header-nav__link02';
    } elseif ('footer' === $this->nav_type) {
      if (0 === $depth) {
        if ($this->footer_ul_open) {
          $output .= '</ul>';
        }
        $output .= '<ul class="l-footer__lists">';
        $this->footer_ul_open = true;
        $li_class = 'l-footer__list';
      } else {
        $li_class = 'l-footer__list02';
      }
    }

    $output .= $indent . '<li';
    if ($li_class) {
      $output .= ' class="' . esc_attr($li_class) . '"';
    }
    $output .= '>';

    $atts = array();
    $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
    $atts['target'] = !empty($item->target) ? $item->target : '';
    $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
    $atts['href']   = !empty($item->url) ? $item->url : '';
    if ($link_class) {
      $atts['class'] = $link_class;
    }

    $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

    $attributes = '';
    foreach ($atts as $attr => $value) {
      if (!empty($value)) {
        $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
      }
    }

    $title = apply_filters('the_title', $item->title, $item->ID);
    $output .= '<a' . $attributes . '>';
    $output .= $args->link_before . esc_html($title) . $args->link_after;
    $output .= '</a>';
  }

  public function end_el(&$output, $item, $depth = 0, $args = null)
  {
    if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
      $t = '';
      $n = '';
    } else {
      $t = "\t";
      $n = "\n";
    }
    $output .= "</li>{$n}";
  }

  private function build_menu_link_attributes($item, $depth, $args, $class = '')
  {
    $atts = array();
    $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
    $atts['target'] = !empty($item->target) ? $item->target : '';
    $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
    $atts['href']   = !empty($item->url) ? $item->url : '';

    if ($class) {
      $atts['class'] = $class;
    }

    $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

    $attributes = '';
    foreach ($atts as $attr => $value) {
      if (!empty($value)) {
        $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
      }
    }

    return $attributes;
  }

  private function render_hamburger_item(&$output, $item, $depth, $args, $indent)
  {
    $title = apply_filters('the_title', $item->title, $item->ID);
    $has_children = in_array('menu-item-has-children', (array) $item->classes, true);

    if (0 === $depth) {
      $li_classes = array('c-hamburger-nav__item');
      if ($has_children) {
        $li_classes[] = 'has-children';
      }

      $output .= $indent . '<li class="' . esc_attr(implode(' ', $li_classes)) . '">';

      if ($has_children) {
        $output .= '<button type="button" class="c-hamburger-nav__parent" aria-expanded="false">';
        $output .= '<span class="c-hamburger-nav__label">' . esc_html($title) . '</span>';
        $output .= '<span class="c-hamburger-nav__icon c-hamburger-nav__icon--plus" aria-hidden="true"></span>';
        $output .= '</button>';
      } else {
        $attributes = $this->build_menu_link_attributes($item, $depth, $args, 'c-hamburger-nav__parent c-hamburger-nav__parent--link');
        $output .= '<a' . $attributes . '>';
        $output .= '<span class="c-hamburger-nav__label">' . esc_html($title) . '</span>';
        $output .= '<span class="c-hamburger-nav__icon c-hamburger-nav__icon--arrow" aria-hidden="true"></span>';
        $output .= '</a>';
      }

      return;
    }

    $attributes = $this->build_menu_link_attributes($item, $depth, $args, 'c-hamburger-nav__child');
    $output .= $indent . '<li class="c-hamburger-nav__subitem">';
    $output .= '<a' . $attributes . '>';
    $output .= '<span class="c-hamburger-nav__label">' . esc_html($title) . '</span>';
    $output .= '<span class="c-hamburger-nav__icon c-hamburger-nav__icon--arrow" aria-hidden="true"></span>';
    $output .= '</a>';
  }
}

/**
 * wp_nav_menu 共通引数
 */
function custom_theme_nav_menu_args($nav_type)
{
  $locations = array(
    'header'    => 'header-nav',
    'hamburger' => 'hamburger-nav',
    'footer'    => 'footer-nav',
  );
  $menus = array(
    'header'    => 6,
    'hamburger' => 6,
    'footer'    => 7,
  );
  $menu_classes = array(
    'header'    => 'l-header-nav__lists',
    'hamburger' => 'c-hamburger-nav__lists',
    'footer'    => 'l-footer__lists',
  );

  $args = array(
    'theme_location' => $locations[$nav_type],
    'menu'           => $menus[$nav_type],
    'container'      => false,
    'depth'          => 2,
    'walker'         => new Custom_Nav_Walker($nav_type),
    'fallback_cb'    => false,
  );

  if ('footer' === $nav_type) {
    $args['items_wrap'] = '%3$s';
  } else {
    $args['menu_class'] = $menu_classes[$nav_type];
    $args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
  }

  return $args;
}

/**
 * フッターメニューの親項目数（PCのカラム数）
 */
function custom_theme_footer_parent_menu_count()
{
  $menu_id = 7;
  $locations = get_nav_menu_locations();

  if (!empty($locations['footer-nav'])) {
    $menu = wp_get_nav_menu_object($locations['footer-nav']);
    if ($menu) {
      $menu_id = $menu->term_id;
    }
  }

  $items = wp_get_nav_menu_items($menu_id);
  if (!$items) {
    return 4;
  }

  $count = 0;
  foreach ($items as $item) {
    if ('0' === (string) $item->menu_item_parent) {
      $count++;
    }
  }

  return max(1, $count);
}

//管理画面記事一覧ページにサムネイル表示
function customize_manage_posts_columns($columns)
{
  $columns['thumbnail'] = __('Thumbnail');
  return $columns;
}
add_filter('manage_posts_columns', 'customize_manage_posts_columns');

function customize_manage_posts_custom_column($column_name, $post_id)
{
  if ('thumbnail' == $column_name) {
    $thum = get_the_post_thumbnail($post_id, 'small', array('style' => 'width:100px;height:auto;'));
  }
  if (isset($thum) && $thum) {
    echo $thum;
  } else {
    echo __('None');
  }
}
add_action('manage_posts_custom_column', 'customize_manage_posts_custom_column', 10, 2);



/**
 * 投稿の設定変更
 * post_has_archive()
 *
 * @param object $args args.
 * @param string $post_type post_type.
 * @return object $args args.
 */
function post_has_archive($args, $post_type)
{
  if ('post' === $post_type) {
    $args['rewrite']     = true;
    $args['has_archive'] = 'news';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/**
 * 投稿のパーマリンク変更.
 * add_article_post_permalink()
 *
 * @param string $permalink permalink.
 * @return string $permalink permalink.
 */
function add_article_post_permalink($permalink)
{
  $permalink = '/news' . $permalink;
  return $permalink;
}
add_filter('pre_post_link', 'add_article_post_permalink');

/**
 * 投稿のリライトルール変更
 * add_article_post_rewrite_rules()
 *
 * @param object $post_rewrite post_rewrite.
 * @return string $return_rule return_rule.
 */
function add_article_post_rewrite_rules($post_rewrite)
{
  $return_rule = array();
  foreach ($post_rewrite as $regex => $rewrite) {
    $return_rule['news/' . $regex] = $rewrite;
  }
  return $return_rule;
}
add_filter('post_rewrite_rules', 'add_article_post_rewrite_rules');



/**********************
OGP設定
 *********************/
function my_meta_ogp()
{
  if (is_front_page() || is_home() || is_singular()) {

    /*初期設定*/

    // 画像 （アイキャッチ画像が無い時に使用する代替画像URL）
    $ogp_image = '画像URL';
    // Twitterのアカウント名 (@xxx)
    $twitter_site = '@Twitterアカウント名';
    // Twitterカードの種類（summary_large_image または summary を指定）
    $twitter_card = 'summary_large_image';
    // Facebook APP ID
    $facebook_app_id = '';

    /*初期設定 ここまで*/

    global $post;
    $ogp_title = '';
    $ogp_description = '';
    $ogp_url = '';
    $html = '';
    if (is_singular()) {
      // 記事＆固定ページ
      setup_postdata($post);
      $ogp_title = $post->post_title;
      $ogp_description = mb_substr(get_the_excerpt(), 0, 100);
      $ogp_url = get_permalink();
      wp_reset_postdata();
    } elseif (is_front_page() || is_home()) {
      // トップページ
      $ogp_title = get_bloginfo('name');
      $ogp_description = get_bloginfo('description');
      $ogp_url = home_url();
    }

    // og:type
    $ogp_type = (is_front_page() || is_home()) ? 'website' : 'article';

    // og:image
    if (is_singular() && has_post_thumbnail()) {
      $ps_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
      $ogp_image = $ps_thumb[0];
    }

    // 出力するOGPタグをまとめる
    $html .= '<meta property="og:title" content="' . esc_attr($ogp_title) . '">' . "\n";
    $html .= '<meta property="og:description" content="' . esc_attr($ogp_description) . '">' . "\n";
    $html .= '<meta property="og:type" content="' . $ogp_type . '">' . "\n";
    $html .= '<meta property="og:url" content="' . esc_url($ogp_url) . '">' . "\n";
    $html .= '<meta property="og:image" content="' . esc_url($ogp_image) . '">' . "\n";
    $html .= '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
    $html .= '<meta name="twitter:card" content="' . $twitter_card . '">' . "\n";
    $html .= '<meta name="twitter:site" content="' . $twitter_site . '">' . "\n";
    $html .= '<meta property="og:locale" content="ja_JP">' . "\n";
    if ($facebook_app_id != "") {
      $html .= '<meta property="fb:app_id" content="' . $facebook_app_id . '">' . "\n";
    }
    echo $html;
  }
}
// headタグ内にOGPを出力する
add_action('wp_head', 'my_meta_ogp');
// 抜粋の前後に表示される<p>タグを消去する
remove_filter('the_excerpt', 'wpautop');
remove_filter('term_description', 'wpautop');


// //パンクズ
// function output_breadcrumb(){
//   $home = '<li><a href="'.get_bloginfo('url').'">トップ</a></li>';
//   echo '<ul class="breadcrumb">';

//   // トップページの場合
//   if ( is_front_page() ) {

//   // カテゴリーページの場合
//   } else if ( is_category() ) {
//   $cat = get_queried_object();
//   $cat_id = $cat->parent;
//   $cat_list = array();
//   while($cat_id != 0) {
//     $cat = get_category( $cat_id );
//     $cat_link = get_category_link( $cat_id );
//     array_unshift( $cat_list, '<li><a href="'.$cat_link.'">'.$cat->name.'</a></li>' );
//     $cat_id = $cat->parent;
//   }
//   echo $home;
//   foreach ($cat_list as $value) {
//     echo $value;
//   }
//   the_archive_title('<li>', '</li>');

//   // アーカイブページの場合
//   } else if ( is_archive() ) {
//   echo $home;
//   the_archive_title('<li>', '</li>');

//   // 投稿ページの場合
//   } else if ( is_single() ) {
//   $cat = get_the_category();
//   if( isset( $cat[0]->cat_ID ) ) $cat_id = $cat[0]->cat_ID;
//   $cat_list = array();
//   while( $cat_id != 0 ) {
//     $cat = get_category( $cat_id );
//     $cat_link = get_category_link( $cat_id );
//     array_unshift( $cat_list, '<li><a href="'.$cat_link.'">'.$cat->name.'</a></li>' );
//     $cat_id = $cat->parent;
//   }
//   echo $home;
//   foreach($cat_list as $value) {
//     echo $value;
//   }
//   the_title('<li>', '</li>');

//   // 固定ページの場合
//   } else if ( is_page() ) {
//   echo $home;
//   the_title('<li>', '</li>');

//   // 検索結果の場合
//   } else if ( is_search() ) {
//   echo $home;
//   echo '<li>「'.get_search_query().'」の検索結果</li>';

//   // 404ページの場合
//   } else if ( is_404() ) {
//   echo $home;
//   echo '<li>ページが見つかりません</li>';
//   }
//   echo '</ul>';
// }

/**
 * 管理メニューの「投稿」に関する表示を「NEWS（任意）」に変更
 *
 * 参考：https://wordpress-web.and-ha.com/change-management-screen-post/
 */
function change_post_menu_label()
{
  global $menu;
  global $submenu;
  $menu[5][0] = 'お知らせ';
  $submenu['edit.php'][5][0] = 'お知らせ一覧';
  $submenu['edit.php'][10][0] = '新しいお知らせ';
  $submenu['edit.php'][16][0] = 'タグ';
}


/**
 * 管理画面上の「投稿」に関する表示を「NEWS」に変更
 *
 * 参考：https://wordpress-web.and-ha.com/change-management-screen-post/
 */
function change_post_object_label()
{
  global $wp_post_types;
  $labels = &$wp_post_types['post']->labels;
  $labels->name = 'お知らせ';
  $labels->singular_name = 'お知らせ';
  $labels->add_new = _x('追加', 'お知らせ');
  $labels->add_new_item = 'お知らせの新規追加';
  $labels->edit_item = 'お知らせの編集';
  $labels->new_item = '新規お知らせ';
  $labels->view_item = 'お知らせを表示';
  $labels->search_items = 'お知らせを検索';
  $labels->not_found = 'お知らせが見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱にお知らせは見つかりませんでした';
}
add_action('init', 'change_post_object_label');
add_action('admin_menu', 'change_post_menu_label');

function blog_code()
{
  return custom_func(['file' => 'custom/blog']);
}
add_shortcode('blog', 'blog_code');

// MW WP Formで自動挿入されるp・brタグを削除
function mvwpform_autop_filter()
{
  if (class_exists('MW_WP_Form_Admin')) {
    $mw_wp_form_admin = new MW_WP_Form_Admin();
    $forms = $mw_wp_form_admin->get_forms();
    foreach ($forms as $form) {
      add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
    }
  }
}
mvwpform_autop_filter();

/**
 * Contact Form 7 送信完了後にサンクスページへリダイレクト
 */
function custom_theme_cf7_redirect_thanks()
{
  if (!is_page('contact')) {
    return;
  }
  ?>
  <script>
  document.addEventListener('wpcf7mailsent', function(event) {
    location = '<?php echo esc_url(home_url('/thanks/')); ?>';
  }, false);
  </script>
  <?php
}
add_action('wp_footer', 'custom_theme_cf7_redirect_thanks');

/**
 * お問い合わせページ：郵便番号から住所自動入力
 */
function custom_theme_enqueue_contact_scripts()
{
  if (!is_page('contact')) {
    return;
  }

  $script_path = get_template_directory() . '/js/contact-zipcode.js';

  wp_enqueue_script(
    'custom-theme-contact-zipcode',
    get_template_directory_uri() . '/js/contact-zipcode.js',
    array(),
    file_exists($script_path) ? filemtime($script_path) : null,
    true
  );
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_contact_scripts');

/**
 * Topicsページ用 Google Fonts（Noto Sans JP）
 */
function custom_theme_csr_enqueue_fonts()
{
  if (!is_page_template('page-csr.php') && !is_page_template('page-csr-hub.php')) {
    return;
  }

  wp_enqueue_style(
    'custom-theme-noto-sans-jp',
    'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap',
    array(),
    null
  );
}
add_action('wp_enqueue_scripts', 'custom_theme_csr_enqueue_fonts');

/**
 * /topics/ 親ページにTopicsトップテンプレートを適用
 */
function custom_theme_csr_hub_template($template)
{
  if (!is_page()) {
    return $template;
  }

  $page = get_queried_object();
  if (!$page instanceof WP_Post || 'topics' !== $page->post_name || 0 !== (int) $page->post_parent) {
    return $template;
  }

  $hub_template = locate_template('page-csr-hub.php');
  return $hub_template ?: $template;
}
add_filter('template_include', 'custom_theme_csr_hub_template', 20);

/**
 * 旧CSR・地域共創ページをTopicsページへ恒久転送
 */
function custom_theme_redirect_legacy_csr_urls()
{
  $request_path = wp_parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
  if (!is_string($request_path)) {
    return;
  }

  $request_path = '/' . trim($request_path, '/') . '/';
  $redirects = array(
    '/csr/'                           => '/topics/',
    '/csr/izumiotsu/'                 => '/topics/izumiotsu/',
    '/csr/hanshin-tigers/'            => '/topics/hanshin-tigers/',
    '/csr/naming-rights/'             => '/topics/naming-rights/',
    '/csr/izumi-technofc/'            => '/topics/izumi-technofc/',
    '/community/'                     => '/topics/',
    '/community/izumiotsu/'           => '/topics/izumiotsu/',
    '/community/hanshin-tigers/'      => '/topics/hanshin-tigers/',
    '/community/naming-rights/'       => '/topics/naming-rights/',
    '/community/izumi-technofc/'      => '/topics/izumi-technofc/',
    '/commynity/'                     => '/topics/',
    '/commynity/izumiotsu/'           => '/topics/izumiotsu/',
    '/commynity/hanshin-tigers/'      => '/topics/hanshin-tigers/',
    '/commynity/naming-rights/'       => '/topics/naming-rights/',
    '/commynity/izumi-technofc/'      => '/topics/izumi-technofc/',
  );

  if (!isset($redirects[$request_path])) {
    return;
  }

  wp_safe_redirect(home_url($redirects[$request_path]), 301);
  exit;
}
add_action('template_redirect', 'custom_theme_redirect_legacy_csr_urls', 1);

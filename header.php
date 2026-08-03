<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta property="og:title" content="<?php echo wp_get_document_title(); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:image" content="<?php echo get_theme_file_uri('img/top/ogp.png'); ?>">
    <meta property="og:url" content="<?php echo esc_url(home_url($_SERVER['REQUEST_URI'])); ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">

    <?php if (is_home() || is_front_page()) : ?>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.css" rel="stylesheet">
    <?php endif; ?>

    <!-- Googleフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;500;600;700&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link href="<?php echo get_stylesheet_directory_uri() ?>/css/modaal.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri() ?>/css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <?php if (is_home() || is_front_page()) : ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.min.js"></script>
    <?php endif; ?>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/js/modaal.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/js/script.js" defer></script>
    <?php if (is_home() || is_front_page()) : ?>
        <script src="<?php echo get_stylesheet_directory_uri() ?>/js/top.js" defer></script>
    <?php endif; ?>
    <?php wp_head(); ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RFBYXMG38Z"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-RFBYXMG38Z');
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MS76CN58"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php wp_body_open(); ?>
    <header class="l-header<?php if (is_front_page()) echo ' front-page-header'; ?>">
        <div class="l-header__inner">
            <div class="l-header__item">
                <a class="l-header__logo" href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.svg" alt="Kansai Trans Way">
                </a>
                <img class="l-header__img" src="<?php echo get_template_directory_uri(); ?>/img/common/img_handwritten02.png" alt="Kansai Trans Way">
            </div>
            <div class="l-header__box">
                <nav class="l-header-nav">
                    <?php wp_nav_menu(custom_theme_nav_menu_args('header')); ?>
                </nav>
                <div class="c-hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="c-hamburger-nav">
                    <div class="c-hamburger-nav__inner">
                        <div class="c-hamburger-nav__panel">
                            <?php wp_nav_menu(custom_theme_nav_menu_args('hamburger')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
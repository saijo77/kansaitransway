<?php get_header() ?>
<main>
    <div class="c-archive">
        <div class="c-archive__inner">
            <h1 class="c-archive__title">News<span>/　お知らせ</span></h1>
            <div class="c-breadcrumb">
                <ul class="c-breadcrumb__lists">
                    <li><a href="<?php echo home_url(); ?>">HOME</a></li>
                    <li><a href="<?php echo home_url('/news/'); ?>">お知らせ一覧</a></li>
                    <li><?php the_title(); ?></li>
                </ul>
            </div>
            <img class="c-archive__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/news_img.png" alt="">
        </div>
    </div>
    <div class="p-news-single">
        <div class="p-news-single__inner">
            <ul class="p-news-single__lists">
                <li class="p-news-single__list will-fadeIn">
                    <div class="p-news-single__timeBox">
                        <p class="p-news-single__year">
                            <time datetime="<?php the_time('Y.n.j'); ?>">
                                <?php the_time('Y'); ?>
                            </time>
                        </p>
                        <p class="p-news-single__day">
                            <time datetime="<?php the_time('Y.n.j'); ?>">
                                <?php the_time('m.d'); ?>
                            </time>
                        </p>
                    </div>
                    <h2 class="p-news-single__articleTitle">
                        <?php the_title(); ?>
                    </h2>
                </li>
            </ul>
            <div class="p-news-single__content will-fadeIn">
                <?php the_content(); ?>
            </div>
            <a class="p-news-single__button will-fadeIn" href="<?php echo home_url('/news/'); ?>">お知らせ一覧に戻る</a>
        </div>
    </div>
</main>
<?php get_footer() ?>
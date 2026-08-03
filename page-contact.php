<?php get_header() ?>
<main>
    <div class="c-archive">
        <div class="c-archive__inner">
            <h1 class="c-archive__title">Contact<span>/　お問い合わせ</span></h1>
            <div class="c-breadcrumb">
                <?php get_template_part('template/breadcrumb'); ?>
            </div>
            <img class="c-archive__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/contact_img.png" alt="">
        </div>
    </div>
    <div class="p-contact">
        <div class="p-contact__inner">
            <p class="p-contact__text will-fadeIn">
                物流業務に関するご相談や依頼など、<br class="u-change_md">お気軽にお問合せください。<br>
                17時以降および土日祝日のお問合せは、<br class="u-change_md">翌営業日のご連絡とさせて<br class="u-change_md">頂く場合がございます。<br>
                お急ぎの場合は、恐れ入りますが<br class="u-change_md">お電話でお問合せください。
            </p>
            <a class="p-contact-tel will-fadeIn" href="tel:0725226111">
                <p class="p-contact-tel__text">お電話でもお気軽に<br class="u-change_md">お問い合わせください</p>
                <p class="p-contact-tel__link">0725-22-6111</p>
            </a>

            <div class="p-contact-form">
                <div class="p-contact-form__inner will-fadeIn">
                    <?php the_content(); ?>

                </div>
            </div>

        </div>
    </div>
</main>
<?php get_footer() ?>
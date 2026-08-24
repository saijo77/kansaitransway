<section class="l-footer-contact">
    <img class="l-footer-contact__img u-change_pc" src="<?php echo get_template_directory_uri(); ?>/img/common/contact_img.jpg" alt="">
    <img class="l-footer-contact__img u-change_md" src="<?php echo get_template_directory_uri(); ?>/img/common/contact_img_sp.jpg" alt="">
    <img class="l-footer-contact__img02 u-change_pc" src="<?php echo get_template_directory_uri(); ?>/img/common/contact_img02.png" alt="">
    <img class="l-footer-contact__img02 u-change_md" src="<?php echo get_template_directory_uri(); ?>/img/common/contact_img02_sp.png" alt="">
    <div class="l-footer-contact__inner will-fadeIn">
        <div class="l-footer-contact__wrapper">
            <h2 class="l-footer-contact__title">Contact<span>お問い合わせ</span></h2>
            <p class="l-footer-contact__text">
                物流業務に関するご相談や依頼など、<br class="u-change_md">お気軽にお問合せください。<br>
                17時以降および土日祝日のお問合せは、<br class="u-change_md">翌営業日のご連絡とさせて頂く<br class="u-change_pc">場合が<br class="u-change_md">ございます。
            </p>
            <a href="<?php echo home_url('/contact/'); ?>" class="l-footer-contact__link">お問い合わせはこちら</a>
        </div>
    </div>
</section>

<footer class="l-footer">
    <div class="l-footer__inner">
        <div class="l-footer__wrapper">
            <div class="l-footer__leftBox">
                <a class="l-footer__logo" href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo_white.svg" alt="Kansai Trans Way">
                </a>
                <p class="l-footer__address">
                    〒595-0031<br>
                    大阪府泉大津市我孫子1-3-37<br>
                    TEL：0725-22-6111　FAX: 0725-22-8778
                </p>
            </div>
            <div class="l-footer__rightBox" style="--footer-cols: <?php echo (int) custom_theme_footer_parent_menu_count(); ?>;">
                <?php wp_nav_menu(custom_theme_nav_menu_args('footer')); ?>
            </div>
        </div>
    </div>
    <div class="l-footer-cope">
        <div class="l-footer-cope__inner">
            <small class="l-footer-cope__small">&copy; 2023 KANSAI TRANS WAY Co., Ltd<br class="u-change_md"> All Rights Reserved.</small>
            <div class="l-footer-cope__box">
                <a class="l-footer-cope__link" href="<?php echo home_url('/sitepolicy/'); ?>">サイトポリシー</a>
                <a class="l-footer-cope__link" href="<?php echo home_url('/privacypolicy/'); ?>">個人情報保護方針</a>
            </div>
        </div>
    </div>
</footer>

<!-- <p id="page-top"><a href="#wrap">PAGE TOP</a></p> -->

<?php wp_footer(); ?>
</body>

</html>
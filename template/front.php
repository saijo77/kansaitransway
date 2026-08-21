<main id="top-page">
    <section class="p-front">
        <div class="p-front__inner">
            <div class="p-front__rightBox">
                <a class="p-front_logoMv" href="<?php echo home_url('/') ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo03.png" alt="">
                </a>
                <h2 class="p-front__title">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/copy.png" alt="">
                </h2>
				<div class="p-front__video">
					<iframe
						id="myVideo"
						src="https://www.youtube.com/embed/Ah580gNGT0o?autoplay=1&amp;mute=1&amp;loop=1&amp;playlist=Ah580gNGT0o&amp;controls=0&amp;modestbranding=1&amp;playsinline=1&amp;rel=0&amp;enablejsapi=1"
						title="YouTube video player"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
						referrerpolicy="strict-origin-when-cross-origin"
						allowfullscreen
					></iframe>
				</div>
                <a href="#01" class="scroll-button">
                    <img src="<?php echo get_template_directory_uri() ?>/img/top/icon-scroll.png" alt="">
                </a>
				<button class="is-soundButton">
					<img class="is-soundOn" src="https://kansaitransway.co.jp/wp-content/uploads/2025/11/soundicon.png">
					<img class="is-soundOff" src="https://kansaitransway.co.jp/wp-content/uploads/2025/11/soundicon-mute.png">
				</button>
				<style>
					.is-soundButton {
						display: flex;
						align-items: center;
						justify-content: center;
						
						width: 42px;
						height: 42px;
						
						position: absolute;
						bottom: 20px;
						right: 20px;
						z-index: 2;
						
						background: rgba(255,255,255,0.5);
						border-radius: 50%;
						padding: 8px;
						
					}
					.is-soundOn {
						display : none;
					}
				</style>
            </div>
        </div>
    </section>

    <section>
        <div class="p-front-about" id="01">
            <div class="p-front-about__inner">
                <div class="p-front-about__img will-fadeIn">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/img_top.png" alt="">
                </div>
                <div class="p-front-about__box will-fadeIn">
                    <h2 class="p-front-about__title">
                        ３６５日。<br>
                        私たちは、想いを込めて<br class="u-change_md">走ります。
                    </h2>
                    <p class="p-front-about__text">
                        私たちのすべてのサービスの根底には<br>
                        「安全」があります。<br>
                        <br>
                        機動力と情報力で、人々のくらしを担う。<br>
                        関西トランスウェイの物流ネットワーク。
                    </p>
                </div>
                <img class="p-front-about__item will-zoomIn" src="<?php echo get_template_directory_uri(); ?>/img/top/img_top02.png" alt="">
            </div>
        </div>
    </section>

    <section>
        <div class="p-front-area">
            <div class="p-front-area__inner">
                <h2 class="p-front-area__title will-zoomIn">Service<span>/　サービス</span></h2>
                <div class="p-front-area__wrapper will-fadeIn">
                    <!-- MENU LIST -->
                    <div class="p-front-area__leftBox menu-list-container scroll-fade-bottom">
                        <ul class="p-front-area__lists menu-list swiper-wrapper">
                            <li class="p-front-area__list menu-item swiper-slide">
                                <span class="p-front-area__list_number circle circle-01">01</span>
                                <span class="p-front-area__list_title">物流センター<br>事業</span>
                            </li>

                            <li class="p-front-area__list menu-item swiper-slide">
                                <span class="p-front-area__list_number circle circle-02">02</span>
                                <span class="p-front-area__list_title">保税蔵置場</span>
                            </li>

                            <li class="p-front-area__list menu-item swiper-slide">
                                <span class="p-front-area__list_number circle circle-03">03</span><span class="p-front-area__list_title">個人別<br>宅配事業</span>
                            </li>

                            <li class="p-front-area__list menu-item swiper-slide">
                                <span class="p-front-area__list_number circle circle-04">04</span><span class="p-front-area__list_title">CVS事業</span>
                            </li>

                            <li class="p-front-area__list menu-item swiper-slide">
                                <span class="p-front-area__list_number circle circle-05">05</span><span class="p-front-area__list_title">トレーラー<br>輸送事業</span>
                            </li>

                            <li class="p-front-area__list menu-item swiper-slide">
                                <span class="p-front-area__list_number circle circle-06">06</span><span class="p-front-area__list_title">アウト<br>ソーシング</span>
                            </li>

                            <li class="p-front-area__list menu-item swiper-slide">
                                <span class="p-front-area__list_number circle circle-07">07</span><span class="p-front-area__list_title">コンサル<br>ティング</span>
                            </li>
                        </ul>
                    </div>

                    <!-- DETAIL CONTAINER -->
                    <div class="p-front-area__rightBox detail-container scroll-fade-bottom">
                        <ul class="p-front-area-card detail-list swiper-wrapper">
                            <li class="p-front-area-card__list p-front-area-card__list_1 detail-list-item swiper-slide" data-detail-num="01">
                                <h3 class="p-front-area-card__title detail-ttl">物流センター事業</h3>
                                <p class="p-front-area-card__text detail-des default-txt">
                                    関西の「おいしいっ!」を支える、<br class="u-change_md">トータル物流サービス。<br>
                                    飲食店舗さまの毎日を<br class="u-change_md">チカラ強くサポートします。
                                </p>
                                <div class="p-front-area-card__img detail-img">
                                    <picture>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/top/img_slide01.png" alt="">
                                    </picture>
                                </div>
                                <a href="<?php echo home_url('/logistic/'); ?>" class="p-front-area-card__link detail-link-btn">詳しくはこちら</a>
                            </li>
                            <li class="p-front-area-card__list p-front-area-card__list_2 detail-list-item swiper-slide" data-detail-num="02">
                                <h3 class="p-front-area-card__title detail-ttl">保税蔵置場</h3>
                                <p class="p-front-area-card__text detail-des default-txt">
                                    最適なロケーションと<br class="u-change_md">冷凍・冷蔵・常温対応の<br>
                                    保税蔵置物流センター。<br>
                                    大阪南港・関西空港に近い<br class="u-change_md">最高立地で敏速な通関手続きと<br>
                                    きめ細かい対応。
                                </p>
                                <div class="p-front-area-card__img detail-img">
                                    <picture>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/top/img_slide02.png" alt="">
                                    </picture>
                                </div>
                                <a href="<?php echo home_url('/bonded/'); ?>" class="p-front-area-card__link detail-link-btn">詳しくはこちら</a>
                            </li>
                            <li class="p-front-area-card__list p-front-area-card__list_3 detail-list-item swiper-slide" data-detail-num="03">
                                <h3 class="p-front-area-card__title detail-ttl">個人別宅配事業</h3>
                                <p class="p-front-area-card__text detail-des default-txt">
                                    笑顔とともに、おいしいをお届け。<br>
                                    地域の皆さまの食卓に彩りを。
                                </p>
                                <div class="p-front-area-card__img detail-img">
                                    <picture>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/top/img_slide03.png" alt="">
                                    </picture>
                                </div>
                                <a href="<?php echo home_url('/delivery/'); ?>" class="p-front-area-card__link detail-link-btn">詳しくはこちら</a>
                            </li>
                            <li class="p-front-area-card__list p-front-area-card__list_4 detail-list-item swiper-slide" data-detail-num="04">
                                <h3 class="p-front-area-card__title detail-ttl">CVS事業</h3>
                                <p class="p-front-area-card__text detail-des default-txt">
                                    ベスト場タイミングで<br class="u-change_md">迅速な納品を。<br>
                                    大手コンビニチェーン<br class="u-change_md">約300店舗で、ルート配送の実績。
                                </p>
                                <div class="p-front-area-card__img detail-img">
                                    <picture>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/top/img_slide04.png" alt="">
                                    </picture>
                                </div>
                                <a href="<?php echo home_url('/cvs/'); ?>" class="p-front-area-card__link detail-link-btn">詳しくはこちら</a>
                            </li>
                            <li class="p-front-area-card__list p-front-area-card__list_5 detail-list-item swiper-slide" data-detail-num="05">
                                <h3 class="p-front-area-card__title detail-ttl">トレーラー輸送事業</h3>
                                <p class="p-front-area-card__text detail-des default-txt">
                                    さまざまなニーズにお応えします。<br>
                                    トラック及びトレーラーを<br class="u-change_md">1台から自由に使える<br>
                                    貸切輸送サービスです。
                                </p>
                                <div class="p-front-area-card__img detail-img">
                                    <picture>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/top/img_slide05.png" alt="">
                                    </picture>
                                </div>
                                <a href="<?php echo home_url('/trailer/'); ?>" class="p-front-area-card__link detail-link-btn">詳しくはこちら</a>
                            </li>
                            <li class="p-front-area-card__list p-front-area-card__list_6 detail-list-item swiper-slide" data-detail-num="06">
                                <h3 class="p-front-area-card__title detail-ttl">アウトソーシング</h3>
                                <p class="p-front-area-card__text detail-des default-txt">
                                    物流業務は、プロに任せて安心。<br>
                                    戦略的物流で企業のチカラを底上げ！
                                </p>
                                <div class="p-front-area-card__img detail-img">
                                    <picture>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/top/img_slide06.png" alt="">
                                    </picture>
                                </div>
                                <a href="<?php echo home_url('/outsourcing/'); ?>" class="p-front-area-card__link detail-link-btn">詳しくはこちら</a>
                            </li>
                            <li class="p-front-area-card__list p-front-area-card__list_7 detail-list-item swiper-slide" data-detail-num="07">
                                <h3 class="p-front-area-card__title detail-ttl">コンサルティング</h3>
                                <p class="p-front-area-card__text detail-des default-txt">
                                    20年のノウハウで物流革命！<br>
                                    経営の土台となる、「貴社の物流」<br class="u-change_md">を根本から改善します。
                                </p>
                                <div class="p-front-area-card__img detail-img">
                                    <picture>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/top/img_slide07.png" alt="">
                                    </picture>
                                </div>
                                <a href="<?php echo home_url('/consulting/'); ?>" class="p-front-area-card__link detail-link-btn">詳しくはこちら</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="p-front-network">
            <div class="p-front-network__inner">
                <h2 class="p-front-network__title will-zoomIn">Network<span>/　拠点ネットワーク</span></h2>
                <div class="p-front-network__wrapper slider fade-itemBox">
                    <div class="p-front-network-card fade-item">
                        <img class="p-front-network-card__img" src="<?php echo get_template_directory_uri(); ?>/img/top/img_network.jpg" alt="">
                        <p class="p-front-network-card__title">物流センター</p>
                        <a class="p-front-network-card__link" href="<?php echo home_url('/logisticscenter/'); ?>"></a>
                    </div>
                    <div class="p-front-network-card fade-item">
                        <img class="p-front-network-card__img" src="<?php echo get_template_directory_uri(); ?>/img/top/img_network04.jpg" alt="">
                        <p class="p-front-network-card__title">運輸事業所</p>
                        <a class="p-front-network-card__link" href="<?php echo home_url('/transportationoffice/'); ?>"></a>
                    </div>
                    <div class="p-front-network-card fade-item">
                        <img class="p-front-network-card__img" src="<?php echo get_template_directory_uri(); ?>/img/top/img_network02.jpg" alt="">
                        <p class="p-front-network-card__title">事務所・営業所</p>
                        <a class="p-front-network-card__link" href="<?php echo home_url('/office/'); ?>"></a>
                    </div>
                    <div class="p-front-network-card fade-item">
                        <img class="p-front-network-card__img" src="<?php echo get_template_directory_uri(); ?>/img/top/img_network03.jpg" alt="">
                        <p class="p-front-network-card__title">宅配事業所</p>
                        <a class="p-front-network-card__link" href="<?php echo home_url('/deliveryoffice/'); ?>"></a>
                    </div>
                    <div class="p-front-network-card fade-item">
                        <img class="p-front-network-card__img" src="<?php echo get_template_directory_uri(); ?>/img/top/img_network05.jpg" alt="">
                        <p class="p-front-network-card__title">中継センター</p>
                        <a class="p-front-network-card__link" href="<?php echo home_url('/relaycenter/'); ?>"></a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="p-front-company">
            <div class="p-front-company__inner">
                <h2 class="p-front-company__title will-zoomIn">Company<span>/　会社概要</span></h2>
                <div class="p-front-company__wrapper">
                    <div class="p-front-company__leftBox will-fadeIn">
                        <img class="p-front-company__img" src="<?php echo get_template_directory_uri(); ?>/img/top/img_company01.jpg" alt="">
                    </div>
                    <div class="p-front-company__rightBox will-fadeIn">
                        <dl class="p-front-company__table">
                            <dt>社名</dt>
                            <dd>関西トランスウェイ株式会社</dd>
                            <dt>本社</dt>
                            <dd>
                                〒595-0031　<br class="u-change_md">大阪府泉大津市我孫子1-3-37<br>
                                TEL. 0725-22-6111（代）　<br class="u-change_md">FAX. 0725-22-8778
                            </dd>
                            <dt>会社設立</dt>
                            <dd>平成7年2月10日</dd>
                            <dt>代表取締役</dt>
                            <dd>池辺　義博</dd>
                            <dt>資本金</dt>
                            <dd>50,000,000円</dd>
                        </dl>
                        <a class="p-front-company__link" href="<?php echo home_url('/company/'); ?>">詳しくはこちら</a>
                    </div>
                </div>
                <div class="p-front-company__map will-fadeIn">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3005.0012916297546!2d135.41096682289063!3d34.49390933494465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f83.1!3m3!1m2!1s0x6000c507bfac1105%3A0xf997217e6b8f8ad5!2z6Zai6KW_44OI44Op44Oz44K544Km44Kn44Kk77yI5qCq77yJIOacrOekvg!5e0!3m2!1sja!2sjp!4v1695260273985!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="p-front-banner">
            <div class="p-front-banner__inner">
                <a class="p-front-banner__link will-fadeIn" href="https://youtu.be/HYTnB49POAY" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/banner05.png" alt="">
                </a>
                <a class="p-front-banner__link will-fadeIn" href="https://www.youtube.com/watch?v=A2NjzWcxhZg" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/banner04.png" alt="">
                </a>
            </div>
            <div class="p-front-banner__anniversary will-fadeIn">
                <a href="https://kansaitransway.co.jp/30th">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/2505-30.png" alt="関西トランスウェイ30周年">
                </a>
            </div>
        </div>
    </section>

    <section>
        <div class="p-front-news">
            <div class="p-front-news__inner">
                <div class="p-front-news__wrapper will-fadeIn">
                    <h2 class="p-front-news__title">お知らせ<span>NEWS</span></h2>
                    <article class="p-front-news__article">
                        <ul class="p-front-news__lists">
                            <!-- 記事のループ処理開始 -->
                            <?php
                            if (wp_is_mobile()) {
                                $num = 3; // スマホの表示数(全件は-1)
                            } else {
                                $num = 3; // PCの表示数(全件は-1)
                            }
                            // 投稿タイプのみ指定する場合
                            $args = [
                                'post_type' => 'post', // 投稿タイプのスラッグ(通常投稿なので'post')
                                'posts_per_page' => $num, // 表示件数
                            ];
                            $the_query = new WP_Query($args);
                            if ($the_query->have_posts()) :
                                while ($the_query->have_posts()) : $the_query->the_post();
                            ?>
                                    <li class="p-front-news__list">
                                        <a class="p-front-news__link" href="<?php the_permalink(); ?>">
                                            <div class="p-front-news__timeBox">
                                                <p class="p-front-news__year">
                                                    <time datetime="<?php the_time('Y.n.j'); ?>">
                                                        <?php the_time('Y'); ?>
                                                    </time>
                                                </p>
                                                <p class="p-front-news__day">
                                                    <time datetime="<?php the_time('Y.n.j'); ?>">
                                                        <?php the_time('m.d'); ?>
                                                    </time>
                                                </p>
                                            </div>
                                            <h3 class="p-front-news__articleTitle">
                                                <?php
                                                $title = get_the_title();
                                                if (mb_strlen($title) > 22) {
                                                    echo mb_substr($title, 0, 22) . '...';
                                                } else {
                                                    echo $title;
                                                }
                                                ?>
                                            </h3>
                                        </a>
                                    </li>
                                <?php endwhile;
                            else : ?>
                                <?php wp_reset_query(); ?>
                                <p>お知らせがありません</p>
                            <?php endif ?>
                            <!-- 記事のループ処理終了 -->
                        </ul>
                    </article>
                    <a href="<?php echo home_url('/news/'); ?>" class="p-front-news__button">詳しくはこちら</a>
                </div>
                <div class="p-front-news__bannerBox fade-itemBox">
                    <a class="p-front-news__banner fade-item" href="//job-gear.jp/kansaitransway/index.htm" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/common/banner01.png" alt="">
                    </a>
                    <a class="p-front-news__banner fade-item" href="//logihand.co.jp/" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/common/banner02.png" alt="">
                    </a>
                   
					<!-- Begin mynavi Navi Link -->
					<a class="p-front-news__banner fade-item" href="https://www.gakujo.ne.jp/campus/company/cmp_seminar_apptlist?p1=85055&sitemode=intern" target="_blank">
						<img src="https://kansaitransway.co.jp/wp-content/uploads/2025/11/resyukatu-1.jpg" alt="re:活" border="0"></a>
						<!-- End mynavi Navi Link -->
                </div>
            </div>
        </div>
    </section>
</main>

<div class="loading">
    <div class="loading_gif">
        <img src="<?php echo get_template_directory_uri(); ?>/img/common/kansai.gif" alt="Kansai Trans Way">
    </div>
    <div class="loading_text">Loading...</div>
    <div class="loading_counter">0</div>
    <div class="progressbar">
        <span class="progress"></span>
    </div>
</div>

<script>
	var ytHeroPlayer = null;

	window.onYouTubeIframeAPIReady = function () {
		ytHeroPlayer = new YT.Player('myVideo', {
			events: {
				onReady: function (event) {
					event.target.mute();
					event.target.playVideo();
				},
				onStateChange: function (event) {
					if (event.data === YT.PlayerState.ENDED) {
						event.target.playVideo();
					}
				}
			}
		});
	};

	function playHeroVideo() {
		if (ytHeroPlayer && typeof ytHeroPlayer.playVideo === 'function') {
			ytHeroPlayer.mute();
			ytHeroPlayer.playVideo();
		}
	}

    $(document).ready(function() {
        function showLoading() {
            // Kiểm tra xem trang đã được tải trước đó hay chưa
            if (sessionStorage.getItem('isLoaded')) {
                $('.p-front').css({
                    'opacity': '1',
                });
                playHeroVideo();
                return;
            }

            var loading = $('.loading');
            loading.css('visibility', 'visible');

            var progress = $('.progressbar .progress')

            function counterInit(fValue, lValue) {
                var counter_value = parseInt($('.loading_counter').text());
                counter_value++;

                if (counter_value >= fValue && counter_value <= lValue) {
                    $('.loading_counter').text(counter_value + '%');
                    progress.css({
                        'width': counter_value + '%'
                    });

                    setTimeout(function() {
                        counterInit(fValue, lValue);
                    }, 40);
                }

                if (counter_value >= 100) {
                    loading.fadeOut("slow", function() {
                        loading.css('display', 'none');
                        loading.css('visibility', 'visible');
                        $('.p-front').css({
                            'opacity': '1',
                        });
                        playHeroVideo();
                        sessionStorage.setItem('isLoaded', 'true');
                    });
                }
            }

            counterInit(0, 100);
        }

        showLoading();
    });
	
	$(document).ready(function () {
		$('.is-soundOff').on('click', function () {
			$('.is-soundOff').hide();
			$('.is-soundOn').show();
			if (ytHeroPlayer && typeof ytHeroPlayer.unMute === 'function') {
				ytHeroPlayer.unMute();
			}
		});
		
		$('.is-soundOn').on('click', function () {
			$('.is-soundOn').hide();
			$('.is-soundOff').show();
			if (ytHeroPlayer && typeof ytHeroPlayer.mute === 'function') {
				ytHeroPlayer.mute();
			}
		});
	});
</script>
<script src="https://www.youtube.com/iframe_api"></script>
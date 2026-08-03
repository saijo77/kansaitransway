<?php get_header() ?>
<main>
  <div class="c-archive">
    <div class="c-archive__inner">
      <h1 class="c-archive__title">Consulting<span>/　コンサルティング</span></h1>
      <div class="c-breadcrumb">
        <?php get_template_part('template/breadcrumb-service'); ?>
      </div>
      <img class="c-archive__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/consulting_img.png" alt="">
    </div>
  </div>

  <div class="c-card">
    <div class="c-card__inner">
      <a class="c-card__link c-card__link_bg" href="<?php echo home_url('/logistic/'); ?>">
        <img class="c-card__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/card_icon.png" alt="">
        <p class="c-card__title">Logistic<span>/　物流センター事業</span></p>
      </a>
      <a class="c-card__link c-card__link_bg05" href="<?php echo home_url('/bonded/'); ?>">
        <img class="c-card__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/card_icon05.png" alt="">
        <p class="c-card__title">Bonded<span>/　保税蔵置場</span></p>
      </a>
      <a class="c-card__link c-card__link_bg06" href="<?php echo home_url('/delivery/'); ?>">
        <img class="c-card__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/card_icon06.png" alt="">
        <p class="c-card__title">Delivery<span>/　個人別宅配事業</span></p>
      </a>
      <a class="c-card__link c-card__link_bg02" href="<?php echo home_url('/cvs/'); ?>">
        <img class="c-card__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/card_icon02.png" alt="">
        <p class="c-card__title">Cvs<span>/　CVS事業</span></p>
      </a>
      <a class="c-card__link c-card__link_bg03" href="<?php echo home_url('/trailer/'); ?>">
        <img class="c-card__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/card_icon03.png" alt="">
        <p class="c-card__title">Trailer<span>/　トレーラー輸送事業</span></p>
      </a>
      <a class="c-card__link c-card__link_bg04" href="<?php echo home_url('/outsourcing/'); ?>">
        <img class="c-card__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/card_icon04.png" alt="">
        <p class="c-card__title">Outsourcing<span>/　アウトソーシング</span></p>
      </a>
      <div class="c-card__link c-card__link_bg00">
        <img class="c-card__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/card_icon07.png" alt="">
        <p class="c-card__title">Consulting<span>/　コンサルティング</span></p>
      </div>
    </div>
  </div>

  <div class="p-consulting">
    <div class="p-consulting__inner">
      <h2 class="p-consulting__title will-fadeIn">
        <span>25年のノウハウで物流革命！</span><br>
        経営の土台となる、<br class="u-change_md">「貴社の物流」を根本から改善します。
      </h2>
      <div class="p-consulting-item">
        <div class="p-consulting-item__inner">
          <p class="p-consulting-item__bigText">こんなことに<br class="u-change_md">お困りではありませんか？</p>
          <div class="p-consulting-item__wrapper fade-itemBox">
            <div class="p-consulting-item__box fade-item">
              <img class="p-consulting-item__img" src="<?php echo get_template_directory_uri(); ?>/img/archive/consulting_icon.png" alt="">
              <h3 class="p-consulting-item__title">物流システムを見直したい</h3>
              <ul class="p-consulting-item__lists">
                <li>倉庫管理システム(WMS)の更新に合わせて物流センター(倉庫)の運用方法を見直したい。</li>
                <li>取扱い物量(売上)が急激に伸びてきた為、新しい運用を考えたい。</li>
                <li> 将来の事業計画を見据えて物流システムの新構想を作成したい。</li>
              </ul>
            </div>
            <div class="p-consulting-item__box fade-item">
              <img class="p-consulting-item__img02" src="<?php echo get_template_directory_uri(); ?>/img/archive/consulting_icon02.png" alt="">
              <h3 class="p-consulting-item__title">コストを下げたい</h3>
              <ul class="p-consulting-item__lists">
                <li>物流センターが複数箇所に点在し効率が悪い。</li>
                <li>委託先の料金が適正かどうかわからない。</li>
                <li>どこでコストが掛かっているのか、労力がかかっているのかわからない。</li>
              </ul>
            </div>
            <div class="p-consulting-item__box fade-item">
              <img class="p-consulting-item__img03" src="<?php echo get_template_directory_uri(); ?>/img/archive/consulting_icon03.png" alt="">
              <h3 class="p-consulting-item__title">品質・サービスレベルを向上したい</h3>
              <ul class="p-consulting-item__lists">
                <li>リードタイムを短縮したい。</li>
                <li>輸送事故を減らしたい。</li>
                <li>誤出荷や棚卸差異が多い。</li>
                <li>出荷時に商品探しが発生し納期遅れが発生する。</li>
                <li>生産性向上のポイントを見出したい。</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="p-consulting-item02">
        <div class="p-consulting-item02__inner">
          <div class="p-consulting-item02__box">
            <h2 class="p-consulting-item02__title will-fadeIn">
              現場のノウハウとITのチカラで、<br class="u-change_pc">物流を変える
            </h2>
            <p class="p-consulting-item02__text will-fadeIn">
              ソフトウェアメーカーが、物流システムのみを提案する『ソフト提案型』のコンサルティングではありません。<br>
              バックグラウンドが物流会社だからこそできる、現場の立ち上げ(ハード面)、管理用の物流システムの運用(ソフト面)を融合したコンサルティングです。<br>
              現場を熟知したコンサルタントが、『現実的に可能な範囲で　×　でも、改善効果は高い』提案をします。<br>
              物流25年の現場のノウハウと、自社開発のWMS「ウェアハウスマネジメントシステム」で、貴社の物流を一新します。
            </p>
          </div>
          <div class="p-consulting-item02__wrapper">
            <img class="p-consulting-item02__img will-fadeIn" src="<?php echo get_template_directory_uri(); ?>/img/archive/consulting_img02.png" alt="">
          </div>
        </div>
      </div>

      <div class="p-consulting-item03">
        <div class="p-consulting-item03__inner">
          <h2 class="p-consulting-item03__title will-fadeIn">現場から変わる</h2>
          <div class="p-consulting-item03__wrapper fade-itemBox">
            <div class="p-consulting-item03__box fade-item">
              <h3 class="p-consulting-item03__subTitle">知る</h3>
              <p class="p-consulting-item03__text">まずは物流コストを見える化</p>
              <ul class="p-consulting-item03__lists">
                <li>物流人件費、輸配送費、保管・加工費等、すべてのコストを洗い出します。</li>
                <li>過去から現在までのコスト変化を分析、数値化し、売上や経費に占める物流費率を算出します。</li>
                <li>これら数値を把握することにより、改善のポイントや改善目標を具体的に描けます。</li>
              </ul>
            </div>
            <div class="p-consulting-item03__box fade-item">
              <h3 class="p-consulting-item03__subTitle">改善する</h3>
              <p class="p-consulting-item03__text">
                現場のムダな動き・配置を見つけ<br>
                フロー・レイアウト等を改善
              </p>
              <ul class="p-consulting-item03__lists">
                <li>コスト数値と各種処理数量から、一人当たり/一日当りの作業工程や時間、単価を割り出します。
                </li>
                <li>作業のバラつきや、重複作業などのムダを発見し、フロー是正や作業ルールの提案書を作成します。</li>
                <li>改善前と改善後の変化を、数値で結果報告。具体的に効果が実感できるので、職場に改善意識が生まれます。</li>
              </ul>
            </div>
            <div class="p-consulting-item03__box fade-item">
              <h3 class="p-consulting-item03__subTitle">決める</h3>
              <p class="p-consulting-item03__text">
                在庫過多・管理体制を是正し<br>
                保管スペース・在庫金利の圧縮
              </p>
              <ul class="p-consulting-item03__lists">
                <li>在庫ポリシーが無い場合、その制定を行います。</li>
                <li>ＳＫＵごとの適正在庫を制定します。</li>
                <li>ＳＫＵごとに在庫発注のタイミングや発注量を決めることで、一元管理ができるようになります。</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="p-consulting-item04">
        <div class="p-consulting-item04__inner">
          <h2 class="p-consulting-item04__title will-fadeIn">ITで変える</h2>
          <p class="p-consulting-item04__text will-fadeIn">
            物流を知り尽くした関西トランスウェイが自社開発したWMS（倉庫管理システム）。<br>
            実際の業務フローに忠実で、直感的なインターフェイスを採用し操作性も抜群です。<br>
            <br>
            WMSでは、物流センターにおける一連の業務を効率化でき、<br class="u-change_pc">さらには、WEB上でお取引先様が入出庫在庫照会を行う事も可能です。
          </p>
          <div class="p-consulting-item04__wrapper fade-itemBox">
            <div class="p-consulting-item04__box fade-item">
              <h3 class="p-consulting-item04__subTitle">入出荷管理</h3>
              <p class="p-consulting-item04__text02">
                商品単位で製造日、賞味期限の管理が行えます。<br>
                入荷時や出荷時に、前回作業した商品の日付とチェックを行い、納品先別の日付の逆転を防ぎます。<br>
                <br>
                さらにセンター別・商品別・鮮度別に入荷/出荷作業実績が確認できます。
              </p>
            </div>
            <div class="p-consulting-item04__box fade-item">
              <h3 class="p-consulting-item04__subTitle">温度帯管理</h3>
              <p class="p-consulting-item04__text02">
                チルド・フローズン・ドライの管理が行えます。<br>
                温度帯別の入出庫作業組が行える為、格納時やトラック荷積み時の間違いを防ぐことができます。<br>
                <br>
                大切な商品を風味を落さず、お届けすることが可能です。
              </p>
            </div>
            <div class="p-consulting-item04__box fade-item">
              <h3 class="p-consulting-item04__subTitle">鮮度管理</h3>
              <p class="p-consulting-item04__text02">
                センター出荷できる日付（鮮度日付）の管理が行えます。<br>
                鮮度別の在庫管理を行っており、日付の古い順に引き当てを行うことで、鮮度を保ちながら、廃棄ロスを低減させます。<br>
                <br>
                もちろん、日付が過ぎたものは、自動的に引当対象外となります。
              </p>
            </div>
            <div class="p-consulting-item04__box fade-item">
              <h3 class="p-consulting-item04__subTitle">ロケーション管理</h3>
              <p class="p-consulting-item04__text02">
                ロケーション管理を行い、温度帯別・商品別・賞味期限別に在庫管理を行います。<br>
                また、警告期限管理も可能です。
              </p>
            </div>
            <div class="p-consulting-item04__box fade-item">
              <h3 class="p-consulting-item04__subTitle">補充勧告</h3>
              <p class="p-consulting-item04__text02">
                在庫情報を基に、小売企業様から仕入先様へ補充の指示が行えます。販売予測から必要在庫数を、小売企業様と仕入先様の間で共有でき、適正な在庫量にすることができます。
              </p>
            </div>
            <div class="p-consulting-item04__box fade-item">
              <h3 class="p-consulting-item04__subTitle">適正在庫提示</h3>
              <p class="p-consulting-item04__text02">
                品目毎に適正在庫量を計算し、実際の在庫量と比較することで、過剰在庫と過少在庫の両方を定量的に提示します。<br>
                <br>
                品切れによる機会損失リスクと、長期不良在庫化のリスクを統計的に判断・データ解析し、適切な在庫管理に 役立てます。
              </p>
            </div>
          </div>
          <img class="p-consulting-item04__banner will-fadeIn" src="<?php echo get_template_directory_uri(); ?>/img/archive/consulting_banner.jpg" alt="">
        </div>
      </div>

    </div>
  </div>
</main>
<?php get_footer() ?>
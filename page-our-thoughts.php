<?php
/**
 * Template Name: 私たちの想い
 */
get_header();
$theme_uri = get_template_directory_uri();
?>

<main class="p-thoughts">

  <!-- 1. HERO -->
  <section class="p-thoughts-hero">
    <div class="p-thoughts-hero__media">
      <img
        src="<?php echo esc_url($theme_uri); ?>/img/top/img_top.png"
        alt="関西トランスウェイ"
        loading="eager"
        decoding="async"
      >
    </div>
    <div class="p-thoughts-hero__overlay"></div>
    <div class="p-thoughts-hero__content">
      <p class="p-thoughts-hero__eyebrow" lang="en">Our Thoughts</p>
      <h1 class="p-thoughts-hero__catch">
        情熱の先に<br>明日の笑顔を
      </h1>
      <p class="p-thoughts-hero__sub">
        明日の笑顔のために<br class="u-change_md">今日も走り続ける
      </p>
      <p class="p-thoughts-hero__lead">
        関西トランスウェイは創業30周年を迎えました。<br>
        これからも、社員とその家族、そして関係してくださる皆さまの幸せを第一に考え、<br class="u-change_pc">
        人と共に成長し続ける企業を目指して参ります。
      </p>
    </div>
  </section>

  <!-- 2. PEOPLE & 3 PILLARS -->
  <section class="p-thoughts-people">
    <div class="p-thoughts-people__intro">
      <p class="p-thoughts-section-label" lang="en">People &amp; Pillars</p>
      <h2 class="p-thoughts-people__title">
        社員の情熱を<br class="u-change_md">支えることは、<br>私たちの大切な<br class="u-change_md">約束です。
      </h2>
      <p class="p-thoughts-people__text">
        安心して働き、挑戦し続けられる環境を守り、<br class="u-change_pc">
        その先に社員と家族の笑顔が広がる会社を目指します。
      </p>
      <p class="p-thoughts-people__slogan">
        この会社でよかった。<br>と思える人生を…
      </p>
    </div>

    <div class="p-thoughts-people__visual">
      <img
        src="<?php echo esc_url($theme_uri); ?>/img/archive/our-thoughts01.png"
        alt="関西トランスウェイの社員"
        loading="lazy"
        decoding="async"
      >
    </div>

    <div class="p-thoughts-pillars">
      <p class="p-thoughts-pillars__lead">
        社員一人ひとりの声に耳を傾けて共感し、共に新たな価値を創り、<br class="u-change_pc">
        共に成長と喜びを分かち合います。<br>
        私たちは、この３つの柱を大切に、社員と共に歩み続けます。
      </p>

      <div class="p-thoughts-pillars__grid">
        <article class="p-thoughts-pillars__card p-thoughts-pillars__card--green">
          <h3 class="p-thoughts-pillars__name">共　感</h3>
          <p class="p-thoughts-pillars__body">
            私たちは、社員一人ひとりの声に真摯に耳を傾け、想いや考えを理解し、気持ちに寄り添います。互いを思いやり、信頼し合う関係を築くことで、誰もが安心して自分らしく働ける環境をつくり続けます。
          </p>
        </article>

        <article class="p-thoughts-pillars__card p-thoughts-pillars__card--blue">
          <h3 class="p-thoughts-pillars__name">共　創</h3>
          <p class="p-thoughts-pillars__body">
            私たちは、社員の想いと力を信じ、互いに知恵を重ね合いながら、誰もが挑戦できる環境を用意します。一人では生み出せない価値を共に創り出し、その経験を通じて、社員自身が成長と誇りを感じられる会社を目指します。
          </p>
        </article>

        <article class="p-thoughts-pillars__card p-thoughts-pillars__card--orange">
          <h3 class="p-thoughts-pillars__name">共　栄</h3>
          <p class="p-thoughts-pillars__body">
            働くことを通じて成長し、得たものを家族や地域にも還元できるような、人生そのものが豊かになる会社を目指します。会社が栄えるだけでは不十分。社員と、社員の大切な人たちと、共に幸せになれることが、私たちの願いです。
          </p>
        </article>
      </div>
    </div>
  </section>

  <!-- Photo break -->
  <section class="p-thoughts-photo p-thoughts-photo--wide">
    <img
      src="<?php echo esc_url($theme_uri); ?>/img/archive/our-thoughts02.png"
      alt="関西トランスウェイの社員と配送車両"
      loading="lazy"
      decoding="async"
    >
  </section>

  <!-- 3. CORPORATE COLORS -->
  <section class="p-thoughts-colors">
    <div class="p-thoughts-colors__intro">
      <p class="p-thoughts-section-label" lang="en">Corporate Colors</p>
      <h2 class="p-thoughts-colors__title">色に込めた想い</h2>
      <div class="p-thoughts-colors__logo">
        <img
          src="<?php echo esc_url($theme_uri); ?>/img/archive/logo-color.png"
          alt="関西トランスウェイ コーポレートカラー"
          loading="lazy"
          decoding="async"
        >
      </div>
      <p class="p-thoughts-colors__text">
        コーポレートカラーは、ブルー、グリーン、オレンジの３色です。<br class="u-change_pc">
        これらの色に、私たちが大切にしている想いや、社会に果たしたい役割、<br class="u-change_pc">
        そして未来へのビジョンを込めました。<br>
        関西トランスウェイをご覧いただく全ての方の心に残る“色”として、<br class="u-change_pc">
        私たちらしさを表現し、信頼と共感を育む存在でありたいと考えています。
      </p>
    </div>

    <div class="p-thoughts-colors__palette">
      <article class="p-thoughts-colors__block p-thoughts-colors__block--blue">
        <p class="p-thoughts-colors__tag" lang="en">BLUE</p>
        <p class="p-thoughts-colors__keyword">誠実・信頼</p>
        <h3 class="p-thoughts-colors__heading">誠実な姿勢で、<br>約束を守り抜くブルー</h3>
        <p class="p-thoughts-colors__desc">
          社会やお取引先に対して揺るがぬ信頼を築いていくことを意味します。
        </p>
      </article>

      <article class="p-thoughts-colors__block p-thoughts-colors__block--green">
        <p class="p-thoughts-colors__tag" lang="en">GREEN</p>
        <p class="p-thoughts-colors__keyword">調和・地域</p>
        <h3 class="p-thoughts-colors__heading">地域に根ざし<br>人との繋がりを大切にするグリーン</h3>
        <p class="p-thoughts-colors__desc">
          その調和の姿勢で会社と社会との間に安心と持続をもたらすことを意味します。
        </p>
      </article>

      <article class="p-thoughts-colors__block p-thoughts-colors__block--orange">
        <p class="p-thoughts-colors__tag" lang="en">ORANGE</p>
        <p class="p-thoughts-colors__keyword">情熱・挑戦</p>
        <h3 class="p-thoughts-colors__heading">一人ひとりの前向きな力が<br>組織の成長を支えるオレンジ</h3>
        <p class="p-thoughts-colors__desc">
          熱意ある挑戦が未来を切り拓くことを意味します。
        </p>
      </article>
    </div>

    <p class="p-thoughts-colors__bridge">
      私たちは<br class="u-change_md">社員の情熱を支え、<br>明日の笑顔を創ります。
    </p>
  </section>

  <!-- Photo break -->
  <section class="p-thoughts-photo">
    <img
      src="<?php echo esc_url($theme_uri); ?>/img/top/img_company01.jpg"
      alt="会社の風景"
      loading="lazy"
      decoding="async"
    >
  </section>

  <!-- 4. MISSION & PHILOSOPHY -->
  <section class="p-thoughts-mission">
    <div class="p-thoughts-mission__inner">
      <p class="p-thoughts-section-label" lang="en">Mission &amp; Philosophy</p>
      <h2 class="p-thoughts-mission__title">社会への約束</h2>

      <div class="p-thoughts-mission__mission">
        <p class="p-thoughts-mission__mission-label">会社の使命</p>
        <p class="p-thoughts-mission__mission-text">
          地域の皆さまの暮らしを支え、お取引先と信頼を育み、<br class="u-change_pc">
          社員一人ひとりが誇りを持って働ける会社であり続けるという、<br class="u-change_pc">
          私たちの使命です。
        </p>
      </div>

      <div class="p-thoughts-mission__blocks">
        <div class="p-thoughts-mission__philosophy">
          <p class="p-thoughts-mission__mission-label">経営理念</p>
          <p class="p-thoughts-mission__philosophy-text">
            最高の現場力を持ち、品質・安心・安全をお届けし、<br class="u-change_pc">
            くらしに地域社会に貢献する会社になること。<br>
            そして私たちは常に積極の姿勢を持ち、朗らかに、たくましく、<br class="u-change_pc">
            社員と共に永続するいい会社を目指します。
          </p>
        </div>

        <div class="p-thoughts-guidelines">
          <p class="p-thoughts-mission__mission-label">行動指針</p>
          <p class="p-thoughts-guidelines__lead">
            「トランスWAY」として５つの行動指針を指示します
          </p>
          <ol class="p-thoughts-guidelines__list">
            <li class="p-thoughts-guidelines__item"><span>チームワークで仕事を成し遂げる</span></li>
            <li class="p-thoughts-guidelines__item"><span>半歩先を熟考して、答えのないところに答えを出していく</span></li>
            <li class="p-thoughts-guidelines__item"><span>２流の戦略と１流の実行力でのスピード経営</span></li>
            <li class="p-thoughts-guidelines__item"><span>学び続ける力</span></li>
            <li class="p-thoughts-guidelines__item"><span>感謝と謙虚と挑戦と前しか向かない姿勢</span></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>

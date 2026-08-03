<?php
/**
 * Template Name: Topicsトップページ
 */
get_header();

$theme_uri = get_template_directory_uri();
$csr_cards = array(
  array(
    'url'   => home_url('/topics/izumiotsu/'),
    'image' => $theme_uri . '/img/archive/csr_izumiotsu_01.jpg',
    'alt'   => '泉大津市 包括連携協定',
    'title' => '大阪府泉大津市との包括連携協定',
    'desc'  => '令和8年5月11日、地域の持続的な発展と市民サービスの向上を目指し、包括連携協定を締結。強みである広域配送ネットワークを活かした防災や、地域活性化など5分野において官民一体のまちづくりを推進します。',
  ),
  array(
    'url'   => home_url('/topics/naming-rights/'),
    'image' => $theme_uri . '/img/archive/csr_stadium_01.jpg',
    'alt'   => '関西トランスウェイ スポーツスタジアム',
    'title' => '和泉市総合スポーツセンター 命名権取得',
    'desc'  => '「関西トランスウェイ スポーツスタジアム」を通じた地域密着型の振興活動。ジュニア世代を対象とした「トランスウェイ杯」を自ら企画・共催し、子どもたちが本物の設備で夢を体験できる環境を創造しています。',
  ),
  array(
    'url'   => home_url('/topics/hanshin-tigers/'),
    'image' => $theme_uri . '/img/archive/csr_tigers_03.webp',
    'alt'   => '阪神タイガース 公式レギュラーパートナー',
    'title' => '阪神タイガース サポートカンパニー',
    'desc'  => 'サポートカンパニーとして阪神甲子園球場へロゴを掲出。また、自治体と強固に連携し、地元の未来を担う子どもたちへプロ野球公式戦の観戦チケットを寄贈するなど、心豊かな精神のインフラを広げています。',
  ),
  array(
    'url'   => home_url('/topics/izumi-technofc/'),
    'image' => $theme_uri . '/img/archive/csr_izumitech_01.jpg',
    'alt'   => '和泉テクノFC 公式スポンサー',
    'title' => '女子サッカーチーム「和泉テクノFC」支援',
    'desc'  => 'なでしこリーグ参入を目指す女性アスリートの挑戦を継続的に環境面からバックアップ。スポーツを通じたダイバーシティ（多様性）の推進と、SDGsの達成に向けたボランティア活動をクラブと一体で展開します。',
  ),
);
?>

<main class="p-csr-hub">
  <div class="p-csr-hub__inner">

    <header class="p-csr-hub__hero">
      <div class="p-csr-hub__hero-en" lang="en">TOPICS</div>
      <h1 class="p-csr-hub__hero-ja">社会への取り組み</h1>
    </header>

    <section class="p-csr-hub__concept">
      <p class="p-csr-hub__concept-lead">
        まいにちの「当たり前」を運ぶ物流から、<br>
        この街の「笑顔のインフラ」を創り出すこと。
      </p>
      <p class="p-csr-hub__concept-text">
        私たち関西トランスウェイ株式会社が担う食品物流という使命は、ただモノを移動させることではありません。日々の確実な配送の先にある、人々の健やかな暮らしや、大切な誰かと囲む食卓の笑顔を守り続けることにあります。
      </p>
      <p class="p-csr-hub__concept-text">
        地域社会に深く根ざし、社会の循環として生かされているからこそ、私たちはビジネスの枠を超えた<span class="p-csr-hub__concept-highlight">「恩返し」</span>を常に考え行動しています。行政との強固なアライアンス、夢を追いかける次世代の育成、そして人々の心を豊かに彩るスポーツ文化への支援。
      </p>
      <p class="p-csr-hub__concept-text">
        私たちが踏み出すひとつひとつの歩みは、関西という愛すべき地域が、次の世代、そのさらに先の未来まで活気と幸福に満ちあふれた場所であり続けるための、<span class="p-csr-hub__concept-highlight">確固たる約束</span>です。
      </p>
    </section>

    <section>
      <h2 class="p-csr-hub__section-title">4つのサステナブル・アクション</h2>
      <div class="p-csr-hub__grid">
        <?php foreach ($csr_cards as $card) : ?>
          <a class="p-csr-hub__card" href="<?php echo esc_url($card['url']); ?>">
            <div class="p-csr-hub__card-image-wrap">
              <img
                class="p-csr-hub__card-image"
                src="<?php echo esc_url($card['image']); ?>"
                alt="<?php echo esc_attr($card['alt']); ?>"
                loading="lazy"
                decoding="async"
                onerror="this.style.display='none'"
              >
            </div>
            <h3 class="p-csr-hub__card-title"><?php echo esc_html($card['title']); ?></h3>
            <p class="p-csr-hub__card-desc"><?php echo esc_html($card['desc']); ?></p>
            <span class="p-csr-hub__card-link">READ MORE</span>
          </a>
        <?php endforeach; ?>
      </div>
    </section>

  </div>
</main>

<?php get_footer(); ?>

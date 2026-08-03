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
  <div class="p-thanks">
    <div class="p-thanks__inner">
      <h2 class="p-thanks__title">お問い合わせが完了しました。</h2>
      <p class="p-thanks__text">
        お問い合わせいただきありがとうございます。<br>
        <br>
        送信完了後、自動送信メールを<br class="u-change_md">お送りしております。<br>
        メール確認後、担当者より2〜3営業日以内に<br>
        メールでご連絡させていただきます。<br>
        <br>
        万が一ご連絡がない場合はお手数ですが、弊社までご連絡ください。（TEL.0725-22-6111）<br>
        携帯電話のメールアドレスを設定のお客様は<br>
        「メールの受信拒否、ドメイン指定受信、迷惑メール防止機能」などを設定している場合、<br>
        受信ができない場合があります。
      </p>
      <a class="p-thanks__button" href="<?php echo esc_url(home_url('/')); ?>">TOPページへ戻る</a>
    </div>
  </div>
</main>
<?php get_footer() ?>
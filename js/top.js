// MV一連のアニメーション
// window.onload = () => {
//     const tlMv = gsap.timeline();
//     tlMv.to('header',{
//         y: 0,
//         duration: 0.8,
//     })
//     .to('.js-movie-wrap video', {
//         height: '720px',
//         duration: 0.8,
//     })
//     .to('.js-movie-wrap .mv-ttl', {
//         autoAlpha: 1,
//         duration: 1,
//     })
//     .to(':root', {
//         '--mv-bg-size': '100%',
//     },'-=1')
//     .to('.js-mv-link-list li a', {
//         width: '100%',
//         stagger: {
//             each: 0.1,
//         },
//     }, )
//     .to('.js-mv-link-list li a', {
//         overflow: 'visible',
//         duration: 0.01,
//     }, )
//     .to('.written-img-wrap', {
//         scale: 1,
//         ease: "circ.inOut"
//     }, '-=0.2')
// }

// SERVICEのswiper設定
const tab = new Swiper('.detail-container', {
  slidesPerView: 1,
  autoHeight: true,
  loop: true,
  effect: "fade",

  autoplay: {
    delay: 4000,
  },
  fadeEffect: {
    crossFade: true
  },
  thumbs: {
    swiper: {
      el: '.menu-list-container',
      slidesPerView: 8,
    },
  },
});
tab.autoplay.stop();
$(window).on('scroll', function () {
  let swiperPosition = $('.detail-container').offset().top - $(window).innerHeight() + 100,
    scrollTop = $(window).scrollTop();
  if (scrollTop > swiperPosition) {
    tab.autoplay.start(); //画面に現れたらswiperを開始
  } else {
    tab.autoplay.stop(); // 画面外にスクロールしたらswiperを停止
  }
});

$(document).ready(function () {
  if ($(window).width() < 767) { // 767px以下のデバイスでのみ実行
    $('.slider').slick({
      autoplay: true,
      autoplaySpeed: 3000,
      dots: true,
      infinite: true, // 無限ループを有効にする
      speed: 300,
      arrows: false, // 矢印を非表示
      fade: false, // フェード効果を無効
      pauseOnHover: false,
      slidesToShow: 1, // 一度に表示するスライド数
      slidesToScroll: 1,
      centerMode: true, // センターモードを有効にする
      centerPadding: '10.6%', // 両端に次のスライドが20%見えるように設定
    });
  }
});


// トップのグローバルナビのアニメ
// eachTextAnimeにappeartextというクラス名を付ける定義
function EachTextAnimeControl() {
  $('.eachTextAnime').each(function () {
    var elemPos = $(this).offset().top - 50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass("appeartext");

    } else {
      $(this).removeClass("appeartext");
    }
  });
}


$(window).on('load', function () {
  setTimeout(function () {
    //spanタグを追加する
    var element = $(".eachTextAnime");
    element.each(function (index) {
      var text = $(this).text();
      var textbox = "";
      text.split('').forEach(function (t, i) {
        // console.log(index, t, i)
        if (t !== " ") {
          var charDelay = i * 0.05;
          var linkDelay = index * 0.1;
          var totalDelay = charDelay + linkDelay;
          textbox += '<span style="animation-delay:' + totalDelay + 's;">' + t + '</span>';
        } else {
          textbox += t;
        }
      });
      $(this).html(textbox);
    });

    // visibilityをvisibleに変更して表示
    $(".eachTextAnime").css("visibility", "visible");
    EachTextAnimeControl();

    // 画像のアニメーションを追加
    var lastAnchor = $('.eachTextAnime').last(); // 最後のアンカータグを取得
    var lastAnchorTextLength = lastAnchor.text().length;
    var lastAnchorStartDelay = lastAnchor.index() * 0.1; // 最後のアンカータグが開始されるまでの遅延
    var lastAnimationDuration = lastAnchorTextLength * 0.05; // 最後のアンカータグの全文字が表示されるまでの時間
    var totalDelay = 500 + (lastAnchorStartDelay + lastAnimationDuration) * 1000;

  }, 1000);  // 1000ms = 1s
});








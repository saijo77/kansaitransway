$(window).on("load scroll", function () {
  scrollPos();
  fadeTtl();
  moveSquare();
  whiteBoxFadeOut()
});

// フェードインを実装するためのJS
function scrollPos() {
  $(".scroll-fade-bottom").each(function () {
    const imgPos = $(this).offset().top;
    const scroll = $(window).scrollTop();
    const windowHeight = $(window).height();
    if (scroll > imgPos - windowHeight + windowHeight / 5) {
      $(this).addClass("fade_on");
    }
  });
}

// セクションタイトルの動き
function fadeTtl() {
  $(".fade-ttl").each(function () {
    const imgPos = $(this).offset().top;
    const scroll = $(window).scrollTop();
    const windowHeight = $(window).height();
    if (scroll > imgPos - windowHeight + windowHeight / 5) {
      $(this).addClass("move_on");
    }
  });
}

// 背景の台形のタイトルの動き
function moveSquare() {
  $(".deco-square").each(function () {
    const imgPos = $(this).offset().top;
    const scroll = $(window).scrollTop();
    const windowHeight = $(window).height();
    if (scroll > imgPos - windowHeight + windowHeight / 2) {
      $(this).addClass("move_on");
    }
  });
}

// 白い台紙がフェードアウトする動き
function whiteBoxFadeOut() {
  $(".white-box").each(function () {
    const imgPos = $(this).offset().top;
    const scroll = $(window).scrollTop();
    const windowHeight = $(window).height();
    if (scroll > imgPos - windowHeight + windowHeight / 5) {
      $(this).addClass("fade_out");
    }
  });
}

$(function () {
  var $hamburger = $('.c-hamburger');
  var $hamburgerNav = $('.c-hamburger-nav');

  function closeHamburgerNav() {
    $hamburger.removeClass('active');
    $hamburgerNav.removeClass('active');
    $('body').removeClass('is-hamburger-open');
    $('.c-hamburger-nav__item.is-open').removeClass('is-open');
    $('.c-hamburger-nav__parent[aria-expanded]').attr('aria-expanded', 'false');
  }

  $hamburger.on('click', function () {
    var isOpening = !$(this).hasClass('active');

    $(this).toggleClass('active');
    $hamburgerNav.toggleClass('active');
    $('body').toggleClass('is-hamburger-open', isOpening);

    if (!isOpening) {
      $('.c-hamburger-nav__item.is-open').removeClass('is-open');
      $('.c-hamburger-nav__parent[aria-expanded]').attr('aria-expanded', 'false');
    }
  });

  $(document).on('click', '.c-hamburger-nav__parent:not(.c-hamburger-nav__parent--link)', function () {
    var $item = $(this).closest('.c-hamburger-nav__item');
    var isOpen = $item.hasClass('is-open');

    $('.c-hamburger-nav__item.is-open').not($item).removeClass('is-open');
    $('.c-hamburger-nav__parent[aria-expanded]').not(this).attr('aria-expanded', 'false');

    $item.toggleClass('is-open', !isOpen);
    $(this).attr('aria-expanded', isOpen ? 'false' : 'true');
  });

  $(document).on('click', '.c-hamburger-nav__child', function () {
    closeHamburgerNav();
  });

  $(document).on('click', '.c-hamburger-nav__parent--link', function () {
    closeHamburgerNav();
  });
});

document.addEventListener('DOMContentLoaded', function () {
  function scrollSubnavToCurrent() {
    var navInner = document.querySelector('.c-card02--subnav .c-card02__inner');
    var currentItem = document.querySelector('.c-card02--subnav .c-card02__link.is-current');

    if (!navInner || !currentItem || window.innerWidth > 767) {
      return;
    }

    var padding = 20;
    var itemLeft = currentItem.offsetLeft;
    var itemWidth = currentItem.offsetWidth;
    var containerWidth = navInner.clientWidth;
    var maxScroll = navInner.scrollWidth - containerWidth;
    var targetScroll = itemLeft - padding;

    if (targetScroll + containerWidth < itemLeft + itemWidth + padding) {
      targetScroll = itemLeft + itemWidth + padding - containerWidth;
    }

    navInner.scrollLeft = Math.max(0, Math.min(targetScroll, maxScroll));
  }

  scrollSubnavToCurrent();
  window.addEventListener('load', scrollSubnavToCurrent);
});

$(document).ready(function () {
  var header = $('.front-page-header');
  var triggerPoint = $('.p-front-about').offset().top;

  function checkScrollAndWindowSize() {
    var windowWidth = $(window).width();
    var scrollTop = $(window).scrollTop();

    if (windowWidth > 767) {
      if (scrollTop >= triggerPoint) {
        header.css('top', '0');
      } else {
        header.css('top', '-100%');
      }
    } else {
      // スマートフォンやタブレットサイズの場合はヘッダーを常に表示
      header.css('top', '0');
    }
  }

  // スクロール時とウィンドウのリサイズ時にチェック
  $(window).on('scroll resize', checkScrollAndWindowSize);

  // 初期ロード時にもチェック
  checkScrollAndWindowSize();
});


document.addEventListener("DOMContentLoaded", function () {
  // rootMargin を計算する関数
  const calculateRootMargin = () => {
    const viewportHeight = window.innerHeight;
    // 上から60%の位置にトリガーするための rootMargin を計算
    const rootMarginTop = -(viewportHeight * 0.6) + 'px';
    return rootMarginTop + ' 0px 0px 0px';
  };

  // IntersectionObserver のオプション
  const observerOptions = {
    rootMargin: calculateRootMargin(),
    threshold: 0.01  // 要素が少しでもビューポートに入ったらトリガー
  };

  // アニメーション用の Observer を設定
  const setupAnimationObserver = (animationClass, targetClass) => {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add(animationClass);
          entry.target.classList.remove(targetClass);
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    document.querySelectorAll('.' + targetClass).forEach(target => {
      observer.observe(target);
    });
  };

  // FadeIn と ZoomIn アニメーションを設定
  setupAnimationObserver('fadeIn', 'will-fadeIn');
  setupAnimationObserver('zoomIn', 'will-zoomIn');

  // ウィンドウのリサイズイベントで rootMargin を再計算
  window.addEventListener('resize', () => {
    const newRootMargin = calculateRootMargin();
    observerOptions.rootMargin = newRootMargin;
  });
});



document.addEventListener("DOMContentLoaded", function () {
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry, index) => {
      if (entry.isIntersecting) {
        entry.target.style.transitionDelay = `${index * 0.3}s`;
        entry.target.classList.add("card-visible");
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.4
  });

  // 各.fade-itemを個別に監視
  const fadeItems = document.querySelectorAll(".fade-item");
  fadeItems.forEach((item, index) => {
    item.style.transitionDelay = `${index * 0.3}s`;
    observer.observe(item);
  });
});




document.addEventListener('DOMContentLoaded', function () {
  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.1 });

  var items = document.querySelectorAll('.p-logistic-item02__text, .p-logistic-item02__icon');
  items.forEach(function (item, index) {
    // アニメーションの遅延を設定
    item.style.transitionDelay = `${index * 0.1}s`;
    observer.observe(item);
  });
});


function scrollPos(className) {

  $(className).each(function () {
    var imgPos = $(this).offset().top;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll > imgPos - windowHeight + windowHeight / 2) {
      $(this).addClass("show");
    }
  });
}

$(window).on('load scroll', function () {
  scrollPos(".move-bottom");

});
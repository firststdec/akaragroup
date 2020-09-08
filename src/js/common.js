/**
 * common.js
 */

/* ----------------------------------------------------------
  init
---------------------------------------------------------- */
$(function () {
  chkScreenSize();
  topSlider();
  gnavi();
  hambuger();
  btnPagetop();
  pageScroll();
  protectImg();
  commonAccordion();
  accordion();
  responsiveAccordion();
  accordianClose();
  elementAnimated();
  elementHeadingAnimated();
  selectAddClass();
  heroFit();
  jsMainvisual();
  jsSlickCenter()
  headerHideSP()
});

$(window).on('load', function () {
  pageLoaderOff();
});

/* ----------------------------------------------------------
  global variables
---------------------------------------------------------- */
var activeClass = 'is-active';
var MQ = 'PC'
var oldMQ  = MQ
var $window = $(window)
var screenFixed = false

var dragging = false;
var event = 'click';

$("body").on("touchmove", function(){
  dragging = true;
});

$("body").on("touchend", function(){
  if (dragging)
      return;

  // wasn't a drag, just a tap
  // more code here
});

$("body").on("touchstart", function(){
  dragging = false;
});


/* ----------------------------------------------------------
  check screen size
---------------------------------------------------------- */
var chkScreenSize = function () {
  var winWidth = $(window).outerWidth();
  if (winWidth > 1080) {
    MQ = 'PC';
  }
  else if (winWidth > 869) { //768
    MQ = 'TB';
  }
  else {
    MQ = 'SP';
  }
  // trigger custom event when breakpoint change
  if (oldMQ !== MQ) {
    oldMQ = MQ;
    $(window).trigger('breakpointChange');
  }
};

$(window).on('resize', chkScreenSize);

/* ----------------------------------------------------------
  lock screen
---------------------------------------------------------- */
var lockScreen = function () {
  var $html = $('html');
  var top   = $(window).scrollTop();

  if(!$html.hasClass('is-fixed')) {
    $html
      .addClass('is-fixed')
      .css({ top: (top * -1) })
      .data('top', top);
  }
};

/* ----------------------------------------------------------
  unlock screen
---------------------------------------------------------- */
var unlockScreen = function () {
  var $html = $('html');
  var top   = $html.data('top') || 0;

  if($html.hasClass('is-fixed')) {
    $html
      .removeClass('is-fixed')
      .css({ top: '' });
    $(window).scrollTop(top);
  }
};

/* ----------------------------------------------------------
  pageScroll
---------------------------------------------------------- */
var pageScroll = function () {
  $('.js-scroll').on('click', function () {
    var speed = 400;
    var href= $(this).attr("href") || '';
    var minus = $('.l-header__in').height() || 0;
    var target = $(href == '#' || href == '' ? 'html' : href);
    var position = target.offset().top - minus;

    if(href == '#'){
      $('body, html').animate({scrollTop:0}, speed, 'swing');
    } else {
      $('body, html').animate({scrollTop:position}, speed, 'swing');
    }

    return false;
  });
};

/* ----------------------------------------------------------
  btnPagetop
---------------------------------------------------------- */
var btnPagetop = function () {
  $(window).on('load scroll', function () {
    $('.js-pagetop').each(function () {
      if ($(window).scrollTop() > 100) {
        // スクロール量が100を超えたらclass付与
        $(this).addClass(activeClass);
      } else {
        // スクロール量が100を超えていなかったらclass除去
        $(this).removeClass(activeClass);
      }
    });
  });
};


/* ----------------------------------------------------------
  detect SP
---------------------------------------------------------- */
//var spDevices = /android|blackberry|iemobile|iphone|ipod|opera mini|webos/.test(navigator.userAgent.toLowerCase())
var spDevices = new MobileDetect(window.navigator.userAgent)

/* ----------------------------------------------------------
  header small
---------------------------------------------------------- */
var headerSmall = function() {
  var top = 0
  var barHidden = 0
  var $header = $('.header')
  var clsSmall = 'is-small'

  if(!spDevices.mobile() || spDevices.tablet()) {
    barHidden = 220
  }

  $window.on('scroll', function() {
    top = $(this).scrollTop()
    if(top > barHidden && !$header.hasClass(clsSmall)) {
      $header.addClass(clsSmall)
    }
    else if(top == 0 && !screenFixed) {
      $header.removeClass(clsSmall)
    }
  })
}

/* ----------------------------------------------------------
  header hide SP
---------------------------------------------------------- */
var headerHideSP = function() {
  var oldTop = null
  var newTop = null
  var height = 0
  var $header = $('header')

  $window.on('scroll', function() {
    newTop = $(this).scrollTop()

    if(screenFixed) return false

    if(spDevices.mobile()) {
      height = MQ == 'PC' ? 200 : 70
    } else {
      height = MQ == 'PC' ? 80 : 70
    }

    if (newTop > oldTop && newTop > height) {
      $header.addClass('is-hidden-sp')
    } else if (newTop < oldTop) {
      $header.removeClass('is-hidden-sp')
    }

    oldTop = newTop
  })
}

/* ----------------------------------------------------------
  pageLoaderOff
---------------------------------------------------------- */
var pageLoaderOff = function () {
  if($('.c-loader').length === 0) return;
  $('.c-loader').fadeOut(function(){
    $('.c-box-mainvisual svg').css('display', 'inline-block');
    $('.c-box-mainvisual .c-box-detail .c-text, .c-box-mainvisual .c-box-detail .c-button').addClass('is-animated');
  });
};

/* ----------------------------------------------------------
  headerFixed
---------------------------------------------------------- */
var headerFixed = function () {
  var holderHeight = 0;
  var scrollTop = 0;
  var $header = $('.l-header__in');
  var $container = $header.children('.l-header__in__container');

  $(window).on('scroll', function() {
    if (MQ === 'PC') {
      scrollTop = $(this).scrollTop();
      holderHeight = $header.innerHeight();
  
      if (scrollTop > holderHeight && !$container.hasClass('is-fixed') && !$container.hasClass('is-before-fixed')) {
        $header.css({ height: holderHeight })
        $container
          .addClass('is-before-fixed')
          .stop()
          .delay(200)
          .queue(function () {
            $(this).addClass('is-fixed');
          });
      }
      else if (scrollTop <= holderHeight) {
        $container.stop().removeClass('is-before-fixed is-fixed');
        $header.css({ height: 'auto' });
      }
    }
  });

  $(window).on('breakpointChange', function () {
    if (MQ === 'SP') {
      $header.css({ paddingTop: '' })
        .children('.l-header__in__container').removeClass('is-fixed');
    }
  });
};

/* ----------------------------------------------------------
  navGlobalPC
---------------------------------------------------------- */
var navGlobalPC = function () {
  $('.tpl-1-nav-global-sub').each(function () {
    var $self = $(this);

    $self.closest('.tpl-1-nav-global-main__item')
      .on('mouseenter', function () {
        if (MQ !== 'PC') return;

        $('.tpl-1-nav-global-main__list').addClass('is-sub-open');
        $self
          .stop()
          .addClass('is-visible')
          .delay(100)
          .queue(function () {
            $(this).addClass('is-animated').dequeue();
          });
      })
      .on('mouseleave', function () {
        if (MQ !== 'PC') return;

        $('.tpl-1-nav-global-main__list').removeClass('is-sub-open');
        $self
          .stop()
          .removeClass('is-animated')
          .delay(300)
          .queue(function () {
            $(this).removeClass('is-visible').dequeue();
          });
      });
  });
};

/* ----------------------------------------------------------
  navGlobalSP
---------------------------------------------------------- */
var navGlobalSP = function () {
  var $nav = $('.tpl-1-nav-global');

  $('.l-header__in-btn-menu').on('click', function () {
    if (MQ === 'PC') return;

    if (!$(this).hasClass('is-active')) {
      lockScreen();
      $(this).addClass('is-active');
      $nav
        .stop()
        .addClass('is-visible')
        .delay(100)
        .queue(function (next) {
          $(this).find('.tpl-1-nav-global-bg').addClass('is-animated');
          next();
        })
        .delay(500)
        .queue(function () {
          $(this).addClass('is-animated').dequeue();
        });
    }
    else {
      unlockScreen();
      $(this).removeClass('is-active');
      $nav
        .stop()
        .removeClass('is-animated')
        .find('.tpl-1-nav-global-bg').removeClass('is-animated')
        .delay(300)
        .queue(function () {
          $nav.removeClass('is-visible');
          $(this).dequeue();
        });
    }
  });
};

/* ----------------------------------------------------------
  videoModal
---------------------------------------------------------- */
var videoModal = function () {
  if (typeof($.fn.modaal) === 'undefined') return;

  $('.js-video-modaal').modaal({
    type: 'video'
  });
};

/* ----------------------------------------------------------
  protectImg
---------------------------------------------------------- */
var protectImg = function () {
  $('.js-protect').on("contextmenu",function(){
    return false;
  });
}

/* ----------------------------------------------------------
  commonAccordion
---------------------------------------------------------- */
var commonAccordion = function () {
  $('.js-cmn-accordion').each(function () {
    $(this).on('click', function (e) {
      e.preventDefault();
      
      if(!$(this).hasClass('is-active')){
        $(this).addClass('is-active');
        $(this).next().stop().slideDown();
      }else{
        $(this).removeClass('is-active');
        $(this).next().stop().slideUp();
      }
    });
  });

};

/* ----------------------------------------------------------
  commonAccordion
---------------------------------------------------------- */
var accordianClose = function(){
  if($('.js-cmn-accordion-close').length){
    $('.js-cmn-accordion-close').on('click', function(){
      $('.js-cmn-accordion').removeClass('is-active');
      $('.c-nav-local').slideUp();
    });
  }
  if (MQ !== 'SP'){
    $('.c-nav-local').removeAttr('style');
  }
}
$(window).on('resize', accordianClose);

/* ----------------------------------------------------------
  hambuger
---------------------------------------------------------- */
var hambuger =  function(){
  $('.js-hambuger').on('click', function(e){
    // デフォルトの挙動を無効化
    e.preventDefault();
    $('.js-hambuger').toggleClass(activeClass);
  });
}
/* ----------------------------------------------------------
  gnavi
---------------------------------------------------------- */
var gnavi = function () {
  var menu = $('.js-gnavi');
  var cover = $('.l-header__menu-cover');

 // menu.next().hide()
  $('.js-gnavi').on('click', function(e){
    e.preventDefault();
    var target = $(this).next();
    
    if($(this).hasClass(activeClass)){
      $(this).removeClass(activeClass);
      cover.removeClass(activeClass);
      target.slideUp(400);
    } else {
      menu.removeClass(activeClass);
      menu.next().slideUp(400);
      cover.addClass(activeClass);
      $(this).addClass(activeClass);
      target.slideDown(400);
    }
  });

  cover.on('click', function(){
    menu.removeClass(activeClass);
    menu.next().slideUp(400);
    cover.removeClass(activeClass);
  });
};
/* ----------------------------------------------------------
  accordion
---------------------------------------------------------- */
var accordion =  function(){
  $('.js-accordion').on('click', function(e){
    // デフォルトの挙動を無効化
    e.preventDefault();
    var target = $(this).next();
    var targetHeight = target.children().outerHeight();
    
    // data-accordionが指定されていたらグループ化
    var group = $(this).attr('data-group');
    if(group){
      if($(this).hasClass(activeClass)){
        $(this).removeClass(activeClass);
        target.removeAttr('style');
      } else {
        $('[data-group="'+group+'"]').removeClass(activeClass).next().removeAttr('style');
        $('.js-accordion').removeClass(activeClass);
        $(this).addClass(activeClass);
        target.css('max-height',targetHeight);
      }
    } else {
      // クリックする度にclassを付与/除去
      $(this).toggleClass(activeClass);
      // 次の要素にmax-heightを与える
      if($(this).hasClass(activeClass)) {
        target.css('max-height',targetHeight);
      } else {
        target.removeAttr('style');
      }
    }
  });
}
/* ----------------------------------------------------------
  responsiveAccordion
---------------------------------------------------------- */
var responsiveAccordion =  function(){
  $('.js-accordion').each(function(){
    var target = $(this).next();
    var targetHeight = target.children().outerHeight();
    if($(this).hasClass(activeClass)) {
      if (MQ === 'SP'){
        target.css('max-height',targetHeight);
      }else {
        $(this).removeClass(activeClass);
        target.removeAttr('style');
      }
    }
  });
}
$(window).on('resize', responsiveAccordion);

/* ----------------------------------------------------------
  topSlider
---------------------------------------------------------- */
var topSlider = function(){
  // top slider
  var $imgSlider;
  $imgSlider = $('.js-slider-hero');

  if($imgSlider.length){
    // generate BG images for slider
    $imgSlider.find('.p-main-slider__image').each( function(idx, el){
      var imgPc = $(el).data('src-pc').split(',');
      var imgSp = $(el).data('src-sp');
  
      var htmlPc = '<div class="p-main-slider__bg u-no-sp" style="background-image: url(' + imgPc[0] +');"></div>';
      var htmlSp = '<div class="p-main-slider__bg u-no-pc u-no-tb" style="background-image: url(' + imgSp + ')"></div>';
  
      $(el).hide()
        .parent().append(htmlPc, htmlSp);
    });
  
    $imgSlider.on('init', function(event, slick, x, y, z){
      $(event.currentTarget)
        .addClass('is-active')
        .find('.slick-slide').eq(slick.currentSlide)
        .addClass('on');
      //$('.c-box-mainvisual .c-text, .c-box-mainvisual .c-button').addClass('is-animated');
    });
  
    $imgSlider.slick({
      arrows: false,
      autoplay: true,
      autoplaySpeed: 5000,
      pauseOnHover: false,
      fade: true,
      infinite: true,
      swipe: false,
      useCSS: false,
      
    }).on('beforeChange', function(event, slick, currentSlide, nextSlide){
      $('.current').text(nextSlide + 1);
    
      var _current = $imgSlider.find('.slick-slide').eq(currentSlide);
      var _next = $imgSlider.find('.slick-slide').eq(nextSlide);
      
      _next.addClass('on');
    }).on('afterChange', function(event, slick, currentSlide){
      $imgSlider
        .find('.slick-slide').not(':eq(' + currentSlide + ')')
        .removeClass('on');
    });
  }
}

var elementAnimated = function () {
  $('.js-content-animated').removeClass('is-animated');
  var waypointsTop = $('.js-content-animated').waypoint(function () {
    $(this.element).addClass('is-animated');
  }, {
    offset: '80%',
    triggerOnce: true
  });
}


$(window).on('breakpointChange', function (){
  elementAnimated();
});

var elementHeadingAnimated = function () {
  $('.js-heading-animated').removeClass('is-animated');
  var waypointsTop = $('.js-heading-animated').waypoint(function () {
    $(this.element).delay(1500).addClass('is-animated');
  }, {
    offset: '80%',
    triggerOnce: true
  });
}


$(window).on('breakpointChange', function (){
  elementHeadingAnimated();
});


var selectAddClass = function(){
  $('.c-form select, .c-input-selectbox select').change(function(){
    if($(this).val()!=''){
      $(this).addClass('selected');
    } else {
      $(this).removeClass('selected');
    }
  });
  $('.c-form select, .c-input-selectbox select').on('focus', function(){
    $(this).addClass('selected');
  });
  $('.c-form select, .c-input-selectbox select').on('blur', function(){
    if($(this).val()!=''){
      $(this).addClass('selected');
    } else {
      $(this).removeClass('selected');
    }
  });
} 
/* ----------------------------------------------------------
  js-fit
---------------------------------------------------------- */
var heroFit =  function(){
  var target = $('.js-fit');
  if(target.length) {
    objectFitPolyfill(target);
  }
}
$(window).on('resize', heroFit);

var jsBigCenter = function() {
  var swiper = new Swiper('.box-swiper-js', {
    slidesPerView: 4,
    centeredSlides: true,
    spaceBetween: 30,
    setWrapperSize: 1440,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + '</span>';
      },
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    on: {
      init: function () {
        $('.swiper-slide-active .article-content').addClass('active');
      },
      transitionStart: function() {
        $('.article-content').removeClass('active');
      },
      transitionEnd: function(swiper) {
        $('.swiper-slide-active .article-content').addClass('active');
      }
    }
  });
}

var jsMainvisual = function() {
  var swiper = new Swiper('.box-swiper-mv-js', {
    slidesPerView: 1,
    centeredSlides: false,
    loop: true,
    autoplay: {
      delay: 5000,
    },
    pagination: {
      el: '.mv-swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + '</span>';
      },
    },
    navigation: {
      nextEl: '.mv-swiper-button-next',
      prevEl: '.mv-swiper-button-prev',
    },
    on: {
      init: function () {
        $('.swiper-slide-active .mainvisual-content').addClass('active');
      },
      transitionStart: function() {
        $('.mainvisual-content').removeClass('active');
      },
      transitionEnd: function(swiper) {
        $('.swiper-slide-active .mainvisual-content').addClass('active');
      }
    }
  });
}

var jsSlickCenter = function () {
  let $thisElement = $('.js-slick-center');

  if ( $thisElement ) {
    $thisElement.slick({
      centerMode: true,
      centerPadding: '60px',
      slidesToShow: 4,
      swipeToSlide: true,
      arrows: false,
      dotted: false,
      responsive: [
        {
          breakpoint: 1080,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 896,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 375,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });
  }
  }
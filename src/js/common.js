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
  jsSwiperMulti();
  headerHideSP();
  elementInviewTop();
  fakeTrigger();
  customSelect();
  jsFaqAccordian();
  fakeSwiperMultiControl();
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
    MQ = 'PC';
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
      height = MQ == 'PC' ? 20 : 70
    } else {
      height = MQ == 'PC' ? 20 : 70
    }

    if (newTop > oldTop && newTop > height) {
      $header.removeClass('is-hidden-sp')
      $header.addClass('is-active-bg')
    } else if (newTop < oldTop) {
      // if(MQ === 'SP'){
      //   $header.removeClass('is-hidden-sp')
      //   $header.addClass('is-active-bg')
      // }
    }

    if($(window).scrollTop() <= height){
      $header.removeClass('is-active-bg')
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
    $('.l-header__logo').toggleClass(activeClass);
    $('.l-header__utility').toggleClass(activeClass);
    $('.c-search-bar-sp').toggleClass(activeClass);
  });
}
/* ----------------------------------------------------------
  gnavi
---------------------------------------------------------- */
var gnavi = function () {
  var menu = $('.js-gnavi');
  var cover = $('.l-header__menu-cover');

  $('.l-header__menu-link').on('mouseenter', function(e){
    e.preventDefault();
    if (MQ === 'PC') {
      var thisItem = $(this).closest('.l-header__menu-item');
      $('.l-header__submenu').stop().slideUp();

      if(thisItem.find('.l-header__submenu').length){
        if(!thisItem.hasClass(activeClass)){
          thisItem.addClass(activeClass);
          thisItem.find('.l-header__submenu').slideDown();
        }
      } else {
        $('.l-header__menu-item').removeClass(activeClass);
        $('.l-header__submenu').stop().slideUp();
      }
    }
  });

  $(document).on('mouseover', function(e){
    if (MQ === 'PC') {
      if ($(e.target).closest('.l-header__menu').length === 0) {
        $('.l-header__menu-item').removeClass(activeClass);
        $('.l-header__submenu').stop().slideUp();

      }
    }
  });

  $('.js-gnavi').each(function(e){
    $(this).on('click', function(e){
      if (MQ !== 'PC') {
        $('.l-header__submenu').stop().slideUp();
        if(!$(this).hasClass('is-active')){
          $(this).addClass('is-active')
          $(this).find('.l-header__submenu').stop().slideDown();
        } else {
          $(this).removeClass('is-active')
          $(this).find('.l-header__submenu').stop().slideUp();
        }
      }
    });
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

var elementInviewTop = function () {
  var $animation_elements = $('.animation-element')
  var $window = $(window)

  function check_if_in_view() {
    var window_height = $window.height()
    var window_top_position = $window.scrollTop()
    var window_bottom_position = (window_top_position + window_height)

    $.each($animation_elements, function() {
      var offsetTop = MQ == 'PC' ? 200 : 70
      var $element = $(this)
      var element_height = $element.outerHeight()
      var element_top_position = $element.offset().top + offsetTop
      var element_bottom_position = (element_top_position + element_height)

      //check to see if this current container is within viewport
      if ((element_bottom_position >= window_top_position) &&
          (element_top_position <= window_bottom_position)) {
        $element.addClass('in-view')
      }
    });
  }

  $window.on('scroll resize', check_if_in_view)
  $window.trigger('scroll')
}

if($('.js-recipes-swiper').length){
  var mySwiper = new Swiper('.js-recipes-swiper', {
    // Optional parameters
    slidesPerView: 4,
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  
    breakpoints: {
      896: {
        slidesPerView: 2,
        spaceBetween: 10,
        centeredSlides: true,
        loop: true,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
      },
    }
  });
}

if($('.js-recipes-swiper-normal').length){
  var mySwiperNormal = new Swiper('.js-recipes-swiper-normal', {
    // Optional parameters
    slidesPerView: 'auto',
    centeredSlides: false,
    loop: true,

    breakpoints: {
      896: {
        slidesPerView: 2,
        spaceBetween: 10,
        centeredSlides: true,
        loop: true,
      },
    }
  });
}

if($('.js-product-slide-show').length) {
  var mySwiperProduct = new Swiper('.js-product-slide-show', {
    // Optional parameters
    slidesPerView: 1,
    centeredSlides: false,
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
}

if($('.js-swiper-voice').length){
  var mySwiperVoice = new Swiper('.js-swiper-voice', {
    // Optional parameters
    slidesPerView: 1,
    centeredSlides: false,
    loop: true,

    // If we need pagination
    pagination: {
      el: '.js-swiper-voice .swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.js-swiper-voice .swiper-button-next',
      prevEl: '.js-swiper-voice .swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
      el: '.js-swiper-voice .swiper-scrollbar',
    },

  });
}

var fakeTrigger = function () {
  if($('.swiper-box-control-trigger').length) {
    var prevBtn = $('.swiper-box-control-trigger .swiper-button-prev');
    var nextBtn = $('.swiper-box-control-trigger .swiper-button-next');

    if(prevBtn.length){
      prevBtn.on('click', function(){
        $('.js-swiper-voice .swiper-button-prev').click();
      });
    }

    if(nextBtn.length){
      nextBtn.on('click', function(){
        $('.js-swiper-voice .swiper-button-next').click();
      });
    }
  }
}

const customSelect = function() {
  const $customSelect = $('.c-input-selectbox select');

  if($customSelect.length){
    const textSelected = $customSelect.find('option:selected').text();
    // const currentSelected = $customSelect.find('option:selected').val();
    // $target = '.js-' + currentSelected + '__detail';
    setTextSelected(textSelected);

    $customSelect.on('change', function(){
      const textSelected = $(this).find('option:selected').text();
      const valSelected = $(this).find('option:selected').val();
      setTextSelected(textSelected);

      $targetSlider = '.js-' + valSelected;
      $targetDetail = '.js-' + valSelected + '__detail';
      console.log($targetSlider);

      $('.c-product-list__box-product-detail-inner').addClass('is-product-opacity').fadeOut();
      $('.js-product-slide-show').addClass('is-product-opacity').fadeOut();

      $($targetSlider)
        .fadeIn().removeClass('is-product-opacity');
      $($targetDetail)
        .fadeIn().removeClass('is-product-opacity');;
    });

    function setTextSelected(text) {
      $customSelect.next().text(text);
    }
  }
}

const jsFaqAccordian = function () {
  const $jsFaq = $('.js-faq-accordian');

  if($jsFaq.length) {
    const $jsFaqHeading = $('.js-faq-accordian').find('.c-faq__box-heading');

    $($jsFaqHeading).on('click', function(){
      $(this).next().slideToggle();
      $(this).closest('.c-faq__item').toggleClass('is-active');
    });
  }
}

const jsSwiperMulti = function (){
  const $jsSwiperMuliElement = $('.js-slider-multi');

  if($jsSwiperMuliElement.length) {
    const mySwiperMulti = new Swiper('.js-slider-multi', {
      // Optional parameters
      slidesPerView: 1,
      centeredSlides: false,
      loop: true,

      // Navigation arrows
      navigation: {
        nextEl: '.js-slider-multi .swiper-button-next',
        prevEl: '.js-slider-multi .swiper-button-prev',
      },

      // And if we need scrollbar
      scrollbar: {
        el: '.js-slider-multi .swiper-scrollbar',
      },

    });
  }
}

const fakeSwiperMultiControl = function (){
  if($('.js-slider-multi').length) {
    $('.c-fake-nav-control .swiper-button-prev').on('click', function(){
      $(this).closest('.c-our-brand__card-frame').find('.js-slider-multi .swiper-button-prev').click();
    });

    $('.c-fake-nav-control .swiper-button-next').on('click', function(){
      $(this).closest('.c-our-brand__card-frame').find('.js-slider-multi .swiper-button-next').click();
    });
  }
}





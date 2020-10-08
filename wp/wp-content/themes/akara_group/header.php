<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>
<html lang="en">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics-->
	<!-- /Global site tag (gtag.js) - Google Analytics-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no">
	<title>Akara Group</title>
	<meta name="keyword" content="Akara Group">
	<meta name="description" content="">
	<meta property="go:title" content="Akara Group">
	<meta property="go:description" content="">
	<meta property="og:image" content="/assets/img/ogp.png">
	<meta property="og:url" content="">
	<meta name="twitter:title" content="Akara Group">
	<meta name="twitter:description" content="">
	<meta name="twitter:image" content="/assets/img/ogp.png">
	<meta name="twitter:url" content="">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	<meta property="og:image" content="/assets/img/ogp.png">
	<link rel="stylesheet" href="/assets/css/libs/slick.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:300,400,500,700&amp;display=swap&amp;subset=japanese">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,800&amp;display=swap">
	<link rel="stylesheet" href="/assets/css/libs/font-awesome/scss/fontawesome.css">
	<link rel="stylesheet" href="/assets/css/libs/font-awesome/scss/brands.css">
	<link rel="stylesheet" href="/assets/css/libs/font-awesome/scss/solid.css">
	<link rel="stylesheet" href="/assets/css/libs/swiper.css">
	<link rel="stylesheet" href="/assets/css/libs/modaal.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	<?php wp_head(); ?>
</head>
<?php
  if(is_front_page()) {
    $page_class = 'topPage';
  } else {
    $page_class = 'subPage';
  }
?>
<body class="<?php echo $page_class; ?>">
<?php if(is_front_page()): ?>
	<div class="c-loader">
    <div class="c-loader__icon">
      <p class="c-loader__text"><img src="/assets/img/common/logo.svg" alt=""></p>
      <div class="loader simple-circle"></div>
    </div>
  </div>
  <!-- /loader-->
  <div class="c-bg-wave-mainvisual">
    <div class="c-bg-wave-mainvisual-solid">
      <canvas id="canvas-mainvisual"></canvas>
    </div>
  </div>
<?php else: ?>
  <?php if(is_page('our-story')): ?>
  <div class="c-box-scroll-spy">
    <div class="c-box-scroll-spy__inner">
      <div class="c-box-scroll-spy__list">
        <div class="c-box-scroll-spy__item is-active"><a class="c-box-scroll-spy__link" href="#our-story" data-scroll="our-story">Our Story</a></div>
        <div class="c-box-scroll-spy__item"><a class="c-box-scroll-spy__link" href="#timeline" data-scroll="timeline">Timeline</a></div>
        <div class="c-box-scroll-spy__item"><a class="c-box-scroll-spy__link" href="#our-egg" data-scroll="our-egg">Our Egg</a></div>
        <div class="c-box-scroll-spy__item"><a class="c-box-scroll-spy__link" href="#our-farm" data-scroll="our-farm">Our Farm</a></div>
        <div class="c-box-scroll-spy__item"><a class="c-box-scroll-spy__link" href="#vdo" data-scroll="vdo">VDO</a></div>
        <div class="c-box-scroll-spy__item"><a class="c-box-scroll-spy__link" href="#faq" data-scroll="faq">FAQ</a></div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="c-bg-wave-mainvisual-sub">
    <div class="c-bg-wave-mainvisual-solid">
      <canvas id="canvas-mainvisual"></canvas>
    </div>
  </div>
<?php endif; ?>

  <div class="l-wrapper">
    <header class="l-header">
      <div class="l-header__in l-block">
        <p class="l-header__logo"><a class="l-header__logo-link" href="/"><img class="l-header__logo-image" src="/assets/img/common/logo.svg" alt="Akara Group"><img class="l-header__logo-image white" src="/assets/img/common/logo_white.svg" alt="Akara Group"><img class="l-header__logo-image-sp" src="/assets/img/common/logo_sp.svg" alt="Akara Group"></a></p><a class="l-header__menu-trigger js-hambuger" href="#" data-delay="300"><span class="l-header__menu-trigger-mark"></span></a>
        <div class="l-header__utility l-header__utility--top">
          <div class="l-header__utility-wrap">
            <div class="l-header__utility-in">
              <nav class="l-header__menu">
                <div class="l-header__menu-cover"></div>
                <ul class="l-header__menu-list">
                  <li class="l-header__menu-item js-gnavi"><a class="l-header__menu-link" data-group="menu" href="#"><span class="l-header__menu-mark">PRODUCTS</span><span class="fas fa-chevron-down"></span><span class="fas fa-chevron-up"></span></a>
                    <div class="l-header__submenu">
                      <div class="l-header__submenu-in">
                        <ul class="l-header__submenu-list">
                          <li class="l-header__submenu-item"><a class="l-header__submenu-link" href="/product/akara-egg.html">
                              <figure class="image" data-match-height="mega-menu"><img src="/assets/img/common/img_akara_eggs.png" alt="akara Eggs"></figure><span class="l-header__submenu-text">akara Eggs</span></a>
                            <ul class="l-header__submenu-list-02">
                              <li class="l-header__submenu-list-02-item">
                                <div class="c-mobile-float-text">READY TO COOK</div><a class="l-header__submenu-list-02-link"><i class="circle"></i>FRESH EGGS</a>
                              </li>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link"><i class="circle"></i>EGG TOFU CUP</a></li>
                              <li class="l-header__submenu-list-02-item">
                                <div class="c-mobile-float-text">READY TO EAT</div><a class="l-header__submenu-list-02-link"><i class="circle"></i>EGG TOFU TUBE</a>
                              </li>
                            </ul>
                          </li>
                          <li class="l-header__submenu-item"><a class="l-header__submenu-link" href="/product/akara-eggology.html">
                              <figure class="image" data-match-height="mega-menu"><img src="/assets/img/common/img_eggology.png" alt="akara EGGOLOGY"></figure><span class="l-header__submenu-text">akara EGGOLOGY</span></a>
                            <ul class="l-header__submenu-list-02">
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link"><i class="circle"></i>ORGANIC</a></li>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link"><i class="circle"></i>FREE RANGE</a></li>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link"><i class="circle"></i>CAGE FREE</a></li>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link"><i class="circle"></i>OMEGA 3 &amp; VITAMIN E</a></li>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link"><i class="circle"></i>VEGGIE</a></li>
                            </ul>
                          </li>
                          <li class="l-header__submenu-item"><a class="l-header__submenu-link" href="/product/akara-ise.html">
                              <figure class="image" data-match-height="mega-menu"><img src="/assets/img/common/img_akara_ise.png" alt="akara ISE"></figure><span class="l-header__submenu-text">akara ISE</span></a>
                            <ul class="l-header__submenu-list-02">
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link"><i class="circle"></i>MORI-TAMA</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="l-header__menu-item"><a class="l-header__menu-link" href="/our-story/index.html"><span class="l-header__menu-mark">OUR STORY</span></a></li>
                  <li class="l-header__menu-item"><a class="l-header__menu-link" href="#"><span class="l-header__menu-mark">RECIPES</span></a></li>
                  <li class="l-header__menu-item nav-about js-gnavi"><a class="l-header__menu-link" data-group="menu" href="#"><span class="l-header__menu-mark">ABOUT US</span><span class="fas fa-chevron-down"></span><span class="fas fa-chevron-up"></span></a>
                    <div class="l-header__submenu -about-us">
                      <div class="l-header__submenu-in">
                        <ul class="l-header__submenu-list">
                          <li class="l-header__submenu-item">
                            <ul class="l-header__submenu-list-02">
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="/about-us/index.html"><i class="circle"></i>AKARA GROUP</a></li>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="/faq/index.html"><i class="circle"></i>FAQ</a></li>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link"><i class="circle"></i>MEDIA</a></li>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link"><i class="circle"></i>NEWS, ACTIVITIES, &amp; EVENT</a></li>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="/career/index.html"><i class="circle"></i>CAREERS</a></li>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="/contact-us/index.html"><i class="circle"></i>CONTACT US</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </nav>
              <div class="l-search-bar"><a class="c-link no-separate c-search modaal" href="#box-search" data-modaal-type="inline" data-modaal-animation="fade" data-modaal-overlay-opacity="0.9" data-custom-class="modal-search"><span class="fas fa-search"></span></a></div>
              <div class="c-box-search__detail" id="box-search">
                <div class="c-box-search__inner">
                  <form class="c-search-form" action="" method="post">
                    <div class="c-box-search__input"><i class="fas fa-search"></i>
                      <input class="c-input-text" type="text" placeholder="Type your keyword">
                    </div>
                    <div class="c-box-search__apply">
                      <div class="c-box-cmn-button">
                        <button class="c-button-cmn-01" type="submit"><span class="text">Search</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="l-header__nav-trigger"><a class="l-header__nav-link c-button-middle c-button--orange -btn-where-to-buy" href="/where-to-buy/index.html">
                  <div class="c-button__text -button"><i class="fa fa-map-marker-alt"></i><i class="fa fa-map-marker-alt fa--bottom"></i>WHERE TO BUY</div></a></div>
              <div class="l-language-bar"><a class="c-link" href="#"><span class="icon -th"><img src="/assets/img/common/flag-thai.svg" alt=""></span></a><a class="c-link is-active" href="#"><span class="icon -eng"><img src="/assets/img/common/flag-eng.svg" alt=""></span></a></div>
            </div>
          </div>
        </div><a class="c-search-bar-sp u-no-tb u-no-pc modaal" href="#box-search" data-modaal-type="inline" data-modaal-animation="fade" data-modaal-overlay-opacity="0.9" data-custom-class="modal-search"><i class="fas fa-search"></i></a>
      </div>
    </header>

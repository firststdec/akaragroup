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
  <?php
    $title = 'Akara Group';
    $kwd = 'Everyday with akara - akara group';
    $desc = 'ผลิตภัณฑ์ไข่ไก่สดอนามัย และผลิตภัณฑ์ไข่ไก่แปรรูป ของ ‘akara’ ตัวจริงเรื่องไข่ไก่ พิถีพิถันในทุกขั้นตอน เพื่อเติมคุณค่า ในทุกช่วงเวลาของคุณ';
    $og_img = '/wp/wp-content/uploads/2020/11/img_news_activites_mv.png';

    // CHECK URL
    $root_url = '';
    if( PRODUCTION ) {
      $root_url = '/akara';
    }

    if(is_page('faq')) {
      $title = 'FAQ | Akara Group';
      $kwd = '';
      $desc = '';
    } elseif (is_page('about-us')) {
      $title = 'About Us | Akara Group';
      $kwd = '';
      $desc = '';
    } elseif (is_page('careers')) {
      $title = 'Careers | Akara Group';
      $kwd = '';
      $desc = '';
    } elseif (is_page('our-story')) {
      $title = 'Our Story | Akara Group';
      $kwd = '';
      $desc = '';
    } elseif (is_page('contact-us')) {
      $title = 'Contact Us | Akara Group';
      $kwd = '';
      $desc = '';
    } elseif (is_page('where-to-buy')) {
      $title = 'Where to Buy | Akara Group';
      $kwd = '';
      $desc = '';
    }

    if(is_post_type_archive('news')) {
      $title = 'News, Activity, and Events | Akara Group';
      $kwd = '';
      $desc = '';
    }

    if(is_post_type_archive('media')) {
      $title = 'Media Center | Akara Group';
      $kwd = '';
      $desc = '';
    }

    if(is_post_type_archive('recipe')) {
      $title = 'Recipes | Akara Group';
      $kwd = '';
      $desc = '';
    }

    if(is_tax('media_category')) {
      $term = get_queried_object();
      $cate = $term->name;
      $title = $cate  . ' | ' . 'Media Center | Akara Group';
      $kwd = '';
      $desc = '';
    }

    if(is_tax('news_category')) {
      $term = get_queried_object();
      $cate = $term->name;
      $title = $cate  . ' | ' . 'News, Activity, and Events | Akara Group';
      $kwd = '';
      $desc = '';
    }

    if(is_tax('recipe_category')) {
      $term = get_queried_object();
      $cate = $term->name;
      $title = $cate  . ' | ' . 'Recipes | Akara Group';
      $kwd = '';
      $desc = '';
    }

    if(is_tax('product_category')) {
      $term = get_queried_object();
      $cate = $term->name;
      $title = $cate  . ' | Product | ' . $title;
      $desc = '';
    }

    if(is_page_template('search.php')) {
      if(isset($_GET['search_text']) && $_GET['search_text'] != '') {
        $cate = $_GET['search_text'];
      }
      $title = $cate  . ' | ' . 'Search Result | Akara Group';
      $kwd = '';
      $desc = '';
    }

    if(is_single()){
      global $post;
      if(get_post_type($post->ID) == 'product'){
        // $tags = get_the_terms( $post->ID, 'cate_event' );
        // $tags = ( !empty( $tags ))? $tags : array();
        // foreach($tags as $tag){
        //   $cate_name = ' | ' . $tag->name;
        // }
        // $seo = ($cate_name!='')? $cate_name : '';
        $seo = '';
        $seo = $seo;
      }

      $title = strip_tags(get_the_title($post->ID)).  $seo  . ' | ' . $title;
      $desc = '';
      $kwd = '';

      if(get_post_type($post->ID) == 'recipe'){
        $recipe_thumbnail = get_field('recipe_thumbnail', $post->ID);
        $og_img = $recipe_thumbnail['url'];

        if(get_field('meta_title', $post->ID)) {
          $title = get_field('meta_title', $post->ID);
        }

        if(get_field('meta_keywords', $post->ID)) {
          $kwd = get_field('meta_keywords', $post->ID);
        }

        if(get_field('meta_description', $post->ID)) {
          $desc = get_field('meta_description', $post->ID);
        }

        if(get_field('og_image', $post->ID)) {
          $og_image = get_field('og_image', $post->ID);
          $og_img = $og_image['url'];
        }
      }

      if(get_post_type($post->ID) == 'news'){
        $recipe_thumbnail = get_field('news_thumbnail', $post->ID);
        $og_img = $recipe_thumbnail['url'];

        if(get_field('meta_title', $post->ID)) {
          $title = get_field('meta_title', $post->ID);
        }

        if(get_field('meta_keywords', $post->ID)) {
          $kwd = get_field('meta_keywords', $post->ID);
        }

        if(get_field('meta_description', $post->ID)) {
          $desc = get_field('meta_description', $post->ID);
        }

        if(get_field('og_image', $post->ID)) {
          $og_image = get_field('og_image', $post->ID);
          $og_img = $og_image['url'];
        }
      }
    }
    // echo 'lang=>' .ICL_LANGUAGE_CODE;
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  ?>
	<title><?php echo $title; ?></title>
	<meta name="keyword" content="Akara Group">
	<meta name="description" content="<?php echo $desc; ?>">
	<meta property="go:title" content="<?php echo $title; ?>">
	<meta property="go:description" content="<?php echo $desc; ?>">
	<meta property="og:image" content="<?php echo $og_img; ?>">
	<meta property="og:url" content="<?php echo $actual_link; ?>">
	<meta name="twitter:title" content="<?php echo $title; ?>">
	<meta name="twitter:description" content="<?php echo $desc; ?>">
	<meta name="twitter:image" content="<?php echo $og_img; ?>">
	<meta name="twitter:url" content="<?php echo $actual_link; ?>">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $root_url; ?>/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <meta property="og:image" content="<?php echo $og_img; ?>">
  <?php
    if( !is_th_lang() ) {
      $front_page_id = 31;
    } elseif( is_th_lang()  ) {
      $front_page_id = 98;
    }
  ?>
  <?php if(have_rows('mainvisual_slider_rpt', $front_page_id)): ?>
    <?php
      // Loop through rows.
      while( have_rows('mainvisual_slider_rpt', $front_page_id) ) : the_row();
        $mainvisual_slider_rpt_image = get_sub_field('mainvisual_slider_rpt_image', $front_page_id);
    ?>
    <link rel="preload" as="image" href="<?php echo $mainvisual_slider_rpt_image['url']; ?>">
    <?php endwhile; ?>
  <?php endif; ?>
  <script>
    WebFontConfig = {
      google: {
        families: [
          'Kanit:300,400,500,600&display=swap'
        ]
      }
    };
    (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
        '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
  </script>
	<link rel="stylesheet" href="/assets/css/libs/slick.css">
  <link rel="stylesheet" href="/assets/css/libs/font-awesome/scss/fontawesome.css">
	<link rel="stylesheet" href="/assets/css/libs/font-awesome/scss/brands.css">
	<link rel="stylesheet" href="/assets/css/libs/font-awesome/scss/solid.css">
	<link rel="stylesheet" href="/assets/css/libs/swiper.css">
	<link rel="stylesheet" href="/assets/css/libs/modaal.css">
  <link rel="stylesheet" href="/assets/css/style.css?v=20210404-02">
  <link rel="stylesheet" href="/assets/css/libs/validationEngine.jquery.css?v=3">
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
  <?php if( get_field( 'popup_status' ) && ( get_field( 'popup_url' ) != '' ) ): ?>
  <div class="c-box-video-overlay is-active"></div>
  <div class="c-box-video-top is-active">
    <div class="c-box-video-close">
      <div class="modaal-close js-video-close" id="js-video-close"></div>
    </div>
    <div class="c-box-jobs__detail">
      <div class="c-box-jobs__inner">
        <div class="c-box-iframe-top">
          <iframe id="c-iframe-top-video" width="560" height="315" src="<?php echo get_field( 'popup_url' ); ?>?enablejsapi=1&autoplay=1&mute=1&rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
<?php else: ?>
  <?php if(is_page_template('page-our-story.php')): ?>
  <div class="c-box-scroll-spy -white">
    <div class="c-box-scroll-spy__inner">
      <div class="c-box-scroll-spy__list">
        <div class="c-box-scroll-spy__item is-active"><a class="c-box-scroll-spy__link" href="#our-story" data-scroll="our-story">Our Story</a></div>
        <div class="c-box-scroll-spy__item"><a class="c-box-scroll-spy__link" href="#timeline" data-scroll="timeline">Timeline</a></div>
        <div class="c-box-scroll-spy__item"><a class="c-box-scroll-spy__link" href="#our-egg" data-scroll="our-egg">Our Eggs</a></div>
        <div class="c-box-scroll-spy__item"><a class="c-box-scroll-spy__link" href="#our-farm" data-scroll="our-farm">Our Farm</a></div>
        <div class="c-box-scroll-spy__item"><a class="c-box-scroll-spy__link" href="#vdo" data-scroll="vdo">VDO</a></div>
        <div class="c-box-scroll-spy__item"><a class="c-box-scroll-spy__link" href="#faq" data-scroll="faq">FAQ</a></div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <?php
  if(!is_page_template('page-faq.php')
    && !is_page_template('page-where-to-buy.php')
    && !is_page('privacy')
    && !is_tax('news_category')
    && !is_tax('media_category')
    && !is_post_type_archive('news')
    && !is_post_type_archive('media')
    && !is_page_template('search.php')
    && !is_singular('recipe')
    || is_singular('media')
    || is_singular('news')) : ?>
  <div class="c-bg-wave-mainvisual-sub">
    <div class="c-bg-wave-mainvisual-solid">
      <canvas id="canvas-mainvisual"></canvas>
    </div>
  </div>
  <?php endif; ?>
<?php endif; ?>
<?php
  $white_theme = '';

  if(is_page(array('faq', 'where-to-buy'))
    || is_post_type_archive('news')
    || is_post_type_archive('media')
    || is_tax('news_category')
    || is_singular('recipe')
    || is_tax('media_category')) {
    $white_theme = 'whiteTheme';
  }

  if(is_singular('product')) {
    $terms = get_the_terms( $post->ID, 'product_category' );
    if ( $terms && ! is_wp_error( $terms ) ){
      foreach ( $terms as $term ) {
        $term_links[] = $term->name;
      }
    }

    if(in_array('akara', $term_links)) {
      $white_theme = '';
    } elseif(in_array('AKARA EGGOLOGY', $term_links)) {
      $white_theme = 'whiteTheme';
    } elseif(in_array('AKARA ISE', $term_links)) {
      $white_theme = 'whiteTheme';
    }
  }
?>
  <div class="l-wrapper">
    <header class="l-header <?php echo $white_theme; ?>">
      <div class="l-header__in l-block">
      <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
        <div class="l-header__logo"><a class="l-header__logo-link" href="<?php echo $root_url; ?>/en/"><img class="l-header__logo-image" src="/assets/img/common/logo.svg" alt="Akara Group"><img class="l-header__logo-image white" src="/assets/img/common/logo_white.svg" alt="Akara Group"><img class="l-header__logo-image-sp" src="/assets/img/common/logo_sp.svg" alt="Akara Group"></a></div>
      <?php elseif(ICL_LANGUAGE_CODE == 'th'): ?>
        <div class="l-header__logo"><a class="l-header__logo-link" href="<?php echo $root_url; ?>/"><img class="l-header__logo-image" src="/assets/img/common/logo.svg" alt="Akara Group"><img class="l-header__logo-image white" src="/assets/img/common/logo_white.svg" alt="Akara Group"><img class="l-header__logo-image-sp" src="/assets/img/common/logo_sp.svg" alt="Akara Group"></a></div>
      <?php endif; ?>
        <a class="l-header__menu-trigger js-hambuger" href="#" data-delay="300"><span class="l-header__menu-trigger-mark"></span></a>
        <div class="l-header__utility l-header__utility--top">
          <div class="l-header__utility-wrap">
            <div class="l-header__utility-in">
              <?php if( !is_th_lang() ): ?>
                <?php get_template_part('templates/gnav_en'); ?>
              <?php elseif( is_th_lang() ): ?>
                <?php get_template_part('templates/gnav_th'); ?>
              <?php endif; ?>
              <div class="l-search-bar"><a class="c-link no-separate c-search modaal" href="#box-search" data-modaal-type="inline" data-modaal-animation="fade" data-modaal-overlay-opacity="0.9" data-custom-class="modal-search"><span class="fas fa-search"></span></a></div>
              <div class="c-box-search__detail" id="box-search">
                <div class="c-box-search__inner">
                  <form role="search" class="c-search-form" action="<?php echo $root_url; ?>/search" method="get">
                    <div class="c-box-search__input"><i class="fas fa-search"></i>
                    <?php if( is_th_lang() ): ?>
                      <input class="c-input-text" id="s" name="search_text" type="search" placeholder="ค้นหา ...">
                    <?php elseif( !is_th_lang() ): ?>
                      <input class="c-input-text" id="s" name="search_text" type="search" placeholder="Type your keyword">
                    <?php endif; ?>
                    </div>
                    <div class="c-box-search__apply">
                      <div class="c-box-cmn-button">
                        <button class="c-button-cmn-01" type="submit"><span class="text">Search</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <?php if( !is_th_lang() ): ?>
              <div class="l-header__nav-trigger"><a class="l-header__nav-link c-button-middle c-button--orange -btn-where-to-buy" href="<?php echo $root_url; ?>/en/where-to-buy/">
                  <div class="c-button__text -button"><i class="fa fa-map-marker-alt"></i><i class="fa fa-map-marker-alt fa--bottom"></i>WHERE TO BUY</div></a></div>
              <?php elseif( is_th_lang() ): ?>
              <div class="l-header__nav-trigger"><a class="l-header__nav-link c-button-middle c-button--orange -btn-where-to-buy" href="<?php echo $root_url; ?>/where-to-buy/">
                  <div class="c-button__text -button"><i class="fa fa-map-marker-alt"></i><i class="fa fa-map-marker-alt fa--bottom"></i>จุดจำหน่ายสินค้า</div></a></div>
              <?php endif; ?>
              <div class="l-language-bar">
                <?php //print "<!--pre>"; print_r($_SERVER); echo "</pre-->"; ?>

                <?php
                  $url_translate = '';
                  $query_obj = get_queried_object();

                  //print "<!--pre>"; print_r($query_obj ); print '</pre-->';

                  if(is_th_lang()) { // thai
                    $wpml_permalink = apply_filters( 'wpml_permalink', get_permalink(), 'en');
                    // echo get_permalink();

                    if(is_tax('product_category')) {
                      $slug = str_replace('-th', '', $query_obj->slug);
                      $wpml_permalink = '/en/product_category/' . $slug;

                      if(PRODUCTION) {
                        $wpml_permalink = '/akara/en/product_category/' . $slug;
                      }
                    }

                    if(is_tax('recipe_category')) {
                      $slug = $_SERVER['REQUEST_URI'];
                      $wpml_permalink = '/en'. substr( str_replace('/recipe/', '/recipe_category/', $slug), 0, -4);

                      if(PRODUCTION) {
                        $wpml_permalink = substr( str_replace('/recipe/', '/en/recipe_category/', $slug), 0, -4);
                      }
                    }

                    if(is_tax('news_category')) {
                      $slug = $query_obj->slug;
                      $wpml_permalink = '/en/news_category/'. $slug. '-en/';

                      if(PRODUCTION) {
                        $wpml_permalink = '/akara/en/news_category/'. $slug. '-en/';
                      }
                    }

                    if(is_post_type_archive('recipe')) {
                      $wpml_permalink = '/en/recipe/';

                      if(PRODUCTION) {
                        $wpml_permalink = '/akara/en/recipe/';
                      }
                    }

                    if(is_post_type_archive('news')) {
                      $wpml_permalink = '/en/news/';

                      if(PRODUCTION) {
                        $wpml_permalink = '/akara/en/news/';
                      }
                    }

                    if(is_singular('news')) {
                      $wpml_permalink = '/news/';

                      if(PRODUCTION) {
                        $wpml_permalink = '/akara/news/';
                      }
                    }

                  } else { // english
                    $wpml_permalink = apply_filters( 'wpml_permalink', get_permalink(), 'th');
                    // echo get_permalink();

                    if(is_tax('product_category')) {
                      $slug = $query_obj->slug;
                      $wpml_permalink = '/product/' . $slug . '-th/';

                      if(PRODUCTION) {
                        $wpml_permalink = '/akara/product/' . $slug . '-th/';
                      }
                    }

                    if(is_tax('recipe_category')) {
                      $slug = str_replace('/en/recipe_category', '/recipe', $_SERVER['REQUEST_URI']);
                      $wpml_permalink = substr($slug, 0, -1) . '-th';

                      if(PRODUCTION) {
                        $wpml_permalink = substr($slug, 0, -1) . '-th';

                      }
                    }

                    if(is_tax('news_category')) {
                      $slug = $query_obj->slug;
                      $wpml_permalink = '/news/'. substr($slug, 0, -3);

                      if(PRODUCTION) {
                        $wpml_permalink = '/akara/news/'. substr($slug, 0, -3);
                      }
                    }

                    if(is_post_type_archive('recipe')) {
                      $wpml_permalink = '/recipe/';

                      if(PRODUCTION) {
                        $wpml_permalink = '/akara/recipe/';
                      }
                    }

                    if(is_post_type_archive('news')) {
                      $wpml_permalink = '/news/';

                      if(PRODUCTION) {
                        $wpml_permalink = '/akara/news/';
                      }
                    }

                    if(is_singular('news')) {
                      $wpml_permalink = '/news/';

                      if(PRODUCTION) {
                        $wpml_permalink = '/akara/news/';
                      }
                    }
                  }

                ?>

                <?php if( !is_th_lang() ): ?>
                <a class="c-link is-active" href="<?php echo (PRODUCTION)? '' : $root_url; ?><?php echo $wpml_permalink; ?>"><span class="icon -th"><img src="/assets/img/common/flag-thai.svg" alt=""></span></a>
                <?php elseif( is_th_lang() ): ?>
                <a class="c-link is-active" href="<?php echo (PRODUCTION)? '' : $root_url;; ?><?php echo $wpml_permalink; ?>"><span class="icon -eng"><img src="/assets/img/common/flag-eng.svg" alt=""></span></a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div><a class="c-search-bar-sp u-no-tb u-no-pc modaal" href="#box-search" data-modaal-type="inline" data-modaal-animation="fade" data-modaal-overlay-opacity="0.9" data-custom-class="modal-search"><i class="fas fa-search"></i></a>
      </div>
    </header>

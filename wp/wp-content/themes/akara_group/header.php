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
    $kwd = '';
    $desc = '';
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

    if(is_tax('product_category')) {
      $term = get_queried_object();
      $cate = $term->name;
      $title = $cate  . ' | ' . $title;
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
        // $seo = '';
        // $seo = $seo;
      }

      $title = strip_tags(get_the_title($post->ID)).  $seo  . ' | ' . $title;
      $desc = '';
      $kwd = '';
    }
    // echo 'lang=>' .ICL_LANGUAGE_CODE;
  ?>
	<title><?php echo $title; ?></title>
	<meta name="keyword" content="Akara Group">
	<meta name="description" content="">
	<meta property="go:title" content="<?php echo $title; ?>">
	<meta property="go:description" content="">
	<meta property="og:image" content="/assets/img/ogp.png">
	<meta property="og:url" content="">
	<meta name="twitter:title" content="<?php echo $title; ?>">
	<meta name="twitter:description" content="">
	<meta name="twitter:image" content="/assets/img/ogp.png">
	<meta name="twitter:url" content="">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <meta property="og:image" content="/assets/img/ogp.png">
  <?php
    if(ICL_LANGUAGE_CODE == 'en') {
      $front_page_id = 31;
    } elseif(ICL_LANGUAGE_CODE == 'th') {
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
  <link rel="stylesheet" href="/assets/css/style.css?v=32">
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
<?php else: ?>
  <?php if(is_page_template('page-our-story.php')): ?>
  <div class="c-box-scroll-spy -white">
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
  <?php if(!is_page_template('page-faq.php') && !is_page_template('page-where-to-buy.php') && !is_page('privacy')): ?>
  <div class="c-bg-wave-mainvisual-sub">
    <div class="c-bg-wave-mainvisual-solid">
      <canvas id="canvas-mainvisual"></canvas>
    </div>
  </div>
  <?php endif; ?>
<?php endif; ?>
<?php
  $white_theme = '';

  if(is_page(array('faq', 'where-to-buy'))) {
    $white_theme = 'whiteTheme';
  }

  if(is_singular('product')) {
    $terms = get_the_terms( $post->ID, 'product_category' );
    if ( $terms && ! is_wp_error( $terms ) ){
      foreach ( $terms as $term ) {
        $term_links[] = $term->name;
      }
    }

    if(in_array('akara Eggs', $term_links)) {
      $white_theme = '';
    } elseif(in_array('akara Eggology', $term_links)) {
      $white_theme = 'whiteTheme';
    } elseif(in_array('akara ISE', $term_links)) {
      $white_theme = 'whiteTheme';
    }
  }

?>
  <div class="l-wrapper">
    <header class="l-header <?php echo $white_theme; ?>">
      <div class="l-header__in l-block">
      <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
        <div class="l-header__logo"><a class="l-header__logo-link" href="/en/"><img class="l-header__logo-image" src="/assets/img/common/logo.svg" alt="Akara Group"><img class="l-header__logo-image white" src="/assets/img/common/logo_white.svg" alt="Akara Group"><img class="l-header__logo-image-sp" src="/assets/img/common/logo_sp.svg" alt="Akara Group"></a></div>
      <?php elseif(ICL_LANGUAGE_CODE == 'th'): ?>
        <div class="l-header__logo"><a class="l-header__logo-link" href="/"><img class="l-header__logo-image" src="/assets/img/common/logo.svg" alt="Akara Group"><img class="l-header__logo-image white" src="/assets/img/common/logo_white.svg" alt="Akara Group"><img class="l-header__logo-image-sp" src="/assets/img/common/logo_sp.svg" alt="Akara Group"></a></div>
      <?php endif; ?>
        <a class="l-header__menu-trigger js-hambuger" href="#" data-delay="300"><span class="l-header__menu-trigger-mark"></span></a>
        <div class="l-header__utility l-header__utility--top">
          <div class="l-header__utility-wrap">
            <div class="l-header__utility-in">
              <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
              <nav class="l-header__menu">
                <div class="l-header__menu-cover"></div>
                <ul class="l-header__menu-list">
                  <li class="l-header__menu-item js-gnavi"><a class="l-header__menu-link" data-group="menu" href="#"><span class="l-header__menu-mark">PRODUCTS</span><span class="fas fa-chevron-down"></span><span class="fas fa-chevron-up"></span></a>
                    <div class="l-header__submenu">
                      <div class="l-header__submenu-in">
                        <ul class="l-header__submenu-list">
                          <li class="l-header__submenu-item"><div class="l-header__submenu-link">
                              <figure class="image" data-match-height="mega-menu"><img src="/assets/img/common/img_akara_eggs.png" alt="akara Eggs"></figure><span class="l-header__submenu-text">akara</span></div>
                            <ul class="l-header__submenu-list-02">
                            <?php
                              $args = array(
                                'hide_empty' => 0,
                                'child_of' => 3,
                              );
                              $cate = 'product_category';

                              $terms = get_terms( $cate, $args );
                              // print "<pre>"; print_r($terms);
                              if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):
                            ?>
                              <li class="l-header__submenu-list-02-item">
                                <div class="c-mobile-float-text">READY TO COOK</div>
                              <?php
                                foreach ( $terms as $term ) :
                                  $term_type = get_field('product_category_type', $term->taxonomy . '_' . $term->term_id);
                                  if($term_type == 'ready-to-cook'):
                              ?>
                                <a class="l-header__submenu-list-02-link" href="/product/<?php echo $term->slug; ?>"><i class="circle"></i><?php echo $term->name; ?></a>
                                <?php endif; // if($term_type == $product_category_type):?>
                              <?php endforeach; ?>
                              </li>
                            <?php endif; ?>
                            <?php
                              if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):
                            ?>
                              <li class="l-header__submenu-list-02-item">
                                <div class="c-mobile-float-text">READY TO EAT</div>
                                <?php
                                foreach ( $terms as $term ) :
                                  $term_type = get_field('product_category_type', $term->taxonomy . '_' . $term->term_id);
                                  if($term_type == 'ready-to-eat'):
                                ?>
                                <a class="l-header__submenu-list-02-link" href="/product/<?php echo $term->slug; ?>"><i class="circle"></i><?php echo $term->name; ?></a>
                                <?php endif; // if($term_type == $product_category_type):?>
                              <?php endforeach; ?>
                              </li>
                            <?php endif; ?>
                            </ul>
                          </li>
                          <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                              'post_type' => 'product',
                              'post_status' => 'publish',
                              'posts_per_page' => -1,
                              'orderby' => 'date',
                              'paged' => $paged,
                              'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_category',
                                    'field'    => 'id',
                                    'terms'    => 14,
                                ),
                              ),
                            );

                            $the_query = new WP_Query( $args );
                            // print "<pre>"; print_r($the_query); die();
                            if ( $the_query->have_posts() ) :
                          ?>
                          <li class="l-header__submenu-item"><div class="l-header__submenu-link">
                              <figure class="image" data-match-height="mega-menu"><img src="/assets/img/common/img_eggology.png" alt="akara EGGOLOGY"></figure><span class="l-header__submenu-text">akara EGGOLOGY</span></div>
                            <ul class="l-header__submenu-list-02">
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="<?php echo get_permalink(); ?>"><i class="circle"></i><?php echo get_the_title(); ?></a></li>
                            <?php endwhile; ?>
                            </ul>
                          </li>
                          <?php endif; ?>
                          <?php wp_reset_query(); ?>
                          <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                              'post_type' => 'product',
                              'post_status' => 'publish',
                              'posts_per_page' => -1,
                              'orderby' => 'date',
                              'paged' => $paged,
                              'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_category',
                                    'field'    => 'id',
                                    'terms'    => 15,
                                ),
                              ),
                            );

                            $the_query = new WP_Query( $args );
                            // print "<pre>"; print_r($the_query); die();
                            if ( $the_query->have_posts() ) :
                          ?>
                          <li class="l-header__submenu-item"><div class="l-header__submenu-link">
                              <figure class="image" data-match-height="mega-menu"><img src="/assets/img/common/img_akara_ise.png" alt="akara ISE"></figure><span class="l-header__submenu-text">akara ISE</span></div>
                            <ul class="l-header__submenu-list-02">
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="<?php echo get_permalink(); ?>"><i class="circle"></i><?php echo get_the_title(); ?></a></li>
                            <?php endwhile; ?>
                            </ul>
                          </li>
                          <?php endif; ?>
                          <?php wp_reset_query(); ?>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="l-header__menu-item"><a class="l-header__menu-link" href="/en/our-story/"><span class="l-header__menu-mark">OUR STORY</span></a></li>
                  <li class="l-header__menu-item"><a class="l-header__menu-link" href="#"><span class="l-header__menu-mark">RECIPES</span></a></li>
                  <li class="l-header__menu-item nav-about js-gnavi"><a class="l-header__menu-link" data-group="menu" href="#"><span class="l-header__menu-mark">ABOUT US</span><span class="fas fa-chevron-down"></span><span class="fas fa-chevron-up"></span></a>
                    <div class="l-header__submenu -about-us">
                      <div class="l-header__submenu-in">
                        <ul class="l-header__submenu-list">
                          <li class="l-header__submenu-item">
                            <ul class="l-header__submenu-list-02">
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="/en/about-us/"><i class="circle"></i>AKARA GROUP</a></li>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="/en/faq/"><i class="circle"></i>FAQ</a></li>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="#dummy"><i class="circle"></i>MEDIA</a></li>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="#dummy"><i class="circle"></i>NEWS, ACTIVITIES, &amp; EVENT</a></li>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="/en/career/"><i class="circle"></i>CAREERS</a></li>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="/en/contact-us/"><i class="circle"></i>CONTACT US</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </nav>
              <?php elseif(ICL_LANGUAGE_CODE == 'th'): ?>
              <nav class="l-header__menu">
                <div class="l-header__menu-cover"></div>
                <ul class="l-header__menu-list">
                  <li class="l-header__menu-item js-gnavi"><a class="l-header__menu-link" data-group="menu" href="#"><span class="l-header__menu-mark">สินค้า</span><span class="fas fa-chevron-down"></span><span class="fas fa-chevron-up"></span></a>
                    <div class="l-header__submenu">
                      <div class="l-header__submenu-in">
                        <ul class="l-header__submenu-list">
                          <li class="l-header__submenu-item"><div class="l-header__submenu-link">
                            <figure class="image" data-match-height="mega-menu"><img src="/assets/img/common/img_akara_eggs.png" alt="akara Eggs"></figure><span class="l-header__submenu-text">akara</span></div>
                            <ul class="l-header__submenu-list-02">
                            <?php
                              $args = array(
                                'hide_empty' => 0,
                                'child_of' => 16,
                              );
                              $cate = 'product_category';

                              $terms = get_terms( $cate, $args );
                              // print "<pre>"; print_r($terms);
                              if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):
                            ?>
                              <li class="l-header__submenu-list-02-item">
                                <div class="c-mobile-float-text">READY TO COOK</div>
                              <?php
                                foreach ( $terms as $term ) :
                                  $term_type = get_field('product_category_type', $term->taxonomy . '_' . $term->term_id);
                                  if($term_type == 'ready-to-cook'):
                              ?>
                                <a class="l-header__submenu-list-02-link" href="/product/<?php echo $term->slug; ?>"><i class="circle"></i><?php echo $term->name; ?></a>
                                <?php endif; // if($term_type == $product_category_type):?>
                              <?php endforeach; ?>
                              </li>
                            <?php endif; ?>
                            <?php
                              if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):
                            ?>
                              <li class="l-header__submenu-list-02-item">
                                <div class="c-mobile-float-text">READY TO EAT</div>
                                <?php
                                foreach ( $terms as $term ) :
                                  $term_type = get_field('product_category_type', $term->taxonomy . '_' . $term->term_id);
                                  if($term_type == 'ready-to-eat'):
                                ?>
                                <a class="l-header__submenu-list-02-link" href="/product/<?php echo $term->slug; ?>"><i class="circle"></i><?php echo $term->name; ?></a>
                                <?php endif; // if($term_type == $product_category_type):?>
                              <?php endforeach; ?>
                              </li>
                            <?php endif; ?>
                            </ul>
                          </li>
                          <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                              'post_type' => 'product',
                              'post_status' => 'publish',
                              'posts_per_page' => -1,
                              'orderby' => 'date',
                              'paged' => $paged,
                              'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_category',
                                    'field'    => 'id',
                                    'terms'    => 14,
                                ),
                              ),
                            );

                            $the_query = new WP_Query( $args );
                            // print "<pre>"; print_r($the_query); die();
                            if ( $the_query->have_posts() ) :
                          ?>
                          <li class="l-header__submenu-item"><div class="l-header__submenu-link">
                            <figure class="image" data-match-height="mega-menu"><img src="/assets/img/common/img_eggology.png" alt="akara EGGOLOGY"></figure><span class="l-header__submenu-text">akara EGGOLOGY</span></div>
                            <ul class="l-header__submenu-list-02">
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="<?php echo get_permalink(); ?>"><i class="circle"></i><?php echo get_the_title(); ?></a></li>
                            <?php endwhile; ?>
                            </ul>
                          </li>
                          <?php endif; ?>
                          <?php wp_reset_query(); ?>
                          <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                              'post_type' => 'product',
                              'post_status' => 'publish',
                              'posts_per_page' => -1,
                              'orderby' => 'date',
                              'paged' => $paged,
                              'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_category',
                                    'field'    => 'id',
                                    'terms'    => 15,
                                ),
                              ),
                            );

                            $the_query = new WP_Query( $args );
                            // print "<pre>"; print_r($the_query); die();
                            if ( $the_query->have_posts() ) :
                          ?>
                          <li class="l-header__submenu-item"><div class="l-header__submenu-link">
                            <figure class="image" data-match-height="mega-menu"><img src="/assets/img/common/img_akara_ise.png" alt="akara ISE"></figure><span class="l-header__submenu-text">akara ISE</span></div>
                            <ul class="l-header__submenu-list-02">
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="<?php echo get_permalink(); ?>"><i class="circle"></i><?php echo get_the_title(); ?></a></li>
                            <?php endwhile; ?>
                            </ul>
                          </li>
                          <?php endif; ?>
                          <?php wp_reset_query(); ?>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="l-header__menu-item"><a class="l-header__menu-link" href="/our-story/"><span class="l-header__menu-mark">เรื่องราวของเรา</span></a></li>
                  <li class="l-header__menu-item"><a class="l-header__menu-link" href="#"><span class="l-header__menu-mark">สูตรอาหาร</span></a></li>
                  <li class="l-header__menu-item nav-about js-gnavi"><a class="l-header__menu-link" data-group="menu" href="#"><span class="l-header__menu-mark">เกี่ยวกับเรา</span><span class="fas fa-chevron-down"></span><span class="fas fa-chevron-up"></span></a>
                    <div class="l-header__submenu -about-us">
                      <div class="l-header__submenu-in">
                        <ul class="l-header__submenu-list">
                          <li class="l-header__submenu-item">
                            <ul class="l-header__submenu-list-02">
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="/about-us/"><i class="circle"></i>เกี่ยวกับอัครากรุ๊ป</a></li>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="/faq/"><i class="circle"></i>คำถามที่พบบ่อย</a></li>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="#dummy"><i class="circle"></i>สื่อ</a></li>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="#dummy"><i class="circle"></i>ข่าวสาร | กิจกรรม | อีเว้นท์</a></li>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="/career/"><i class="circle"></i>ร่วมงานกับเรา</a></li>
                              <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="/contact-us/"><i class="circle"></i>ติดต่อเรา</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </nav>
              <?php endif; ?>
              <div class="l-search-bar"><a class="c-link no-separate c-search modaal" href="#box-search" data-modaal-type="inline" data-modaal-animation="fade" data-modaal-overlay-opacity="0.9" data-custom-class="modal-search"><span class="fas fa-search"></span></a></div>
              <div class="c-box-search__detail" id="box-search">
                <div class="c-box-search__inner">
                  <form role="search" class="c-search-form" action="/search/" method="get">
                    <div class="c-box-search__input"><i class="fas fa-search"></i>
                    <?php if(ICL_LANGUAGE_CODE == 'th'): ?>
                      <input class="c-input-text" id="s" name="s" type="search" placeholder="ค้นหา ...">
                    <?php elseif(ICL_LANGUAGE_CODE == 'en'): ?>
                      <input class="c-input-text" id="s" name="s" type="search" placeholder="Type your keyword">
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
              <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
              <div class="l-header__nav-trigger"><a class="l-header__nav-link c-button-middle c-button--orange -btn-where-to-buy" href="/en/where-to-buy/">
                  <div class="c-button__text -button"><i class="fa fa-map-marker-alt"></i><i class="fa fa-map-marker-alt fa--bottom"></i>WHERE TO BUY</div></a></div>
              <?php elseif(ICL_LANGUAGE_CODE == 'th'): ?>
              <div class="l-header__nav-trigger"><a class="l-header__nav-link c-button-middle c-button--orange -btn-where-to-buy" href="/where-to-buy/">
                  <div class="c-button__text -button"><i class="fa fa-map-marker-alt"></i><i class="fa fa-map-marker-alt fa--bottom"></i>จุดจำหน่ายสินค้า</div></a></div>
              <?php endif; ?>
              <div class="l-language-bar">
                <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
                <a class="c-link is-active" href="/en/"><span class="icon -th"><img src="/assets/img/common/flag-thai.svg" alt=""></span></a>
                <?php elseif(ICL_LANGUAGE_CODE == 'th'): ?>
                <a class="c-link is-active" href="/"><span class="icon -eng"><img src="/assets/img/common/flag-eng.svg" alt=""></span></a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div><a class="c-search-bar-sp u-no-tb u-no-pc modaal" href="#box-search" data-modaal-type="inline" data-modaal-animation="fade" data-modaal-overlay-opacity="0.9" data-custom-class="modal-search"><i class="fas fa-search"></i></a>
      </div>
    </header>

<?php
/**
 * The template for displaying single posts and pages.
 *
 * Template Name: Where to Buy Template
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<?php

	if ( have_posts() ) :

		while ( have_posts() ) :
			the_post();
?>
      <main class="l-container">
        <div class="l-container__inner">
          <div class="p-where-to-buy">
            <div class="c-hero-where-to-buy">
              <div class="c-hero-where-to-buy__inner">
                <div class="c-hero-where-to-buy__text">
                  <?php if(get_field('main_visual_subpage_heading')!=''): ?>
                  <div class="c-hero-where-to-buy__heading"><?php echo get_field('main_visual_subpage_heading'); ?></div>
                  <?php endif; ?>
                  <?php if(get_field('main_visual_subpage_content')!=''): ?>
                  <div class="c-hero-where-to-buy__sub-text"><?php echo get_field('main_visual_subpage_content'); ?></div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <div class="c-where-to-buy">
              <div class="c-bg-wave-white-solid">
                <canvas id="canvas-white-top"></canvas>
              </div>
              <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
              <div class="c-where-to-buy__box-list-tab">
                <div class="c-where-to-buy__list-tab animation-element slide-top">
                  <div class="c-where-to-buy__list-tab-item is-active c-trgger-01" data-tab="c-tab-01">
                    <div class="icon">
                      <div class="c-icon-building"></div>
                    </div>
                    <div class="text">Modern Trade</div>
                  </div>
                  <div class="c-where-to-buy__list-tab-item c-trgger-02" data-tab="c-tab-02">
                    <div class="icon">
                      <div class="c-icon-our-store"></div>
                    </div>
                    <div class="text">Our Store</div>
                  </div>
                  <div class="c-where-to-buy__list-tab-item c-trgger-03" data-tab="c-tab-03">
                    <div class="icon">
                      <div class="c-icon-point"></div>
                    </div>
                    <div class="text">Point of <br>Purchase</div>
                  </div>
                  <div class="c-where-to-buy__list-tab-item c-trgger-04" data-tab="c-tab-04">
                    <div class="icon">
                      <div class="c-icon-online-store"></div>
                    </div>
                    <div class="text">Online</div>
                  </div>
                </div>
              </div>
              <?php elseif(ICL_LANGUAGE_CODE == 'th'): ?>
              <div class="c-where-to-buy__box-list-tab">
                <div class="c-where-to-buy__list-tab animation-element slide-top">
                  <div class="c-where-to-buy__list-tab-item is-active c-trgger-01" data-tab="c-tab-01">
                    <div class="icon">
                      <div class="c-icon-building"></div>
                    </div>
                    <div class="text">ห้างสรรพสินค้า</div>
                  </div>
                  <div class="c-where-to-buy__list-tab-item c-trgger-02" data-tab="c-tab-02">
                    <div class="icon">
                      <div class="c-icon-online-store"></div>
                    </div>
                    <div class="text">ออนไลน์</div>
                  </div>
                </div>
              </div>
              <?php endif; ?>
              <style>
              .p-where-to-buy .c-where-to-buy__list-shop {
                justify-content: flex-start;
              }
              </style>
              <div class="c-where-to-buy__list-tab-content animation-element slide-top">
                <div class="c-where-to-buy__list-tab-content-box c-tab-01 is-active">
                  <div class="c-triangle -tab-01"></div>
                  <div class="c-where-to-buy__list-tab-content-box-list">
                    <div class="c-where-to-buy__list-shop js-swiper-shop">
                      <div class="c-where-to-buy__list-shop-item"><div class="c-where-to-buy__list-shop-link"><img src="/assets/img/where-to-buy/tesco-logo.png" alt="Tesco Lotus"></div></div>
                      <div class="c-where-to-buy__list-shop-item"><div class="c-where-to-buy__list-shop-link"><img src="/assets/img/where-to-buy/tops-logo.png" alt="Tops Market"></div></div>
                      <div class="c-where-to-buy__list-shop-item"><div class="c-where-to-buy__list-shop-link"><img src="/assets/img/where-to-buy/themall-logo.png" alt="The Mall"></div></div>
                      <div class="c-where-to-buy__list-shop-item"><div class="c-where-to-buy__list-shop-link"><img src="/assets/img/where-to-buy/aeon-maxvalu-logo.png" alt="Aeon Max Valu"></div></div>
                      <div class="c-where-to-buy__list-shop-item"><div class="c-where-to-buy__list-shop-link"><img src="/assets/img/where-to-buy/villamarket-logo.png" alt="Villa Market"></div></div>
                      <div class="c-where-to-buy__list-shop-item"><div class="c-where-to-buy__list-shop-link"><img src="/assets/img/where-to-buy/ufmfujisuper-logo.png" alt="UFM Fuji Super"></div></div>
                      <div class="c-where-to-buy__list-shop-item"><div class="c-where-to-buy__list-shop-link"><img src="/assets/img/where-to-buy/cj-express-logo.png" alt="CJ Express"></div></div>
                      <div class="c-where-to-buy__list-shop-item"><div class="c-where-to-buy__list-shop-link"><img src="/assets/img/where-to-buy/DONDONDONKI-logo.png" alt="Don Don Donki"></div></div>
                      <div class="c-where-to-buy__list-shop-item"><div class="c-where-to-buy__list-shop-link"><img src="/assets/img/where-to-buy/bigc-logo.png" alt="BigC"></div></div>
                      <div class="c-where-to-buy__list-shop-item"><div class="c-where-to-buy__list-shop-link"><img src="/assets/img/where-to-buy/family_mart_logo.png" alt="Family Mart"></div></div>
                    </div>
                  </div>
                </div>
                <div class="c-where-to-buy__list-tab-content-box c-tab-02">
                  <div class="c-triangle -tab-02"></div>
                  <div class="c-where-to-buy__list-tab-content-box-list">
                    <div class="c-where-to-buy__list-shop js-swiper-shop">
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="https://www.freshket.co/marketplace?q=อัครา" target="_blank"><img src="/assets/img/where-to-buy/freshket-logo.png" alt="Freshket"></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="https://shoponline.tescolotus.com/groceries/th-TH/search?query=%E0%B8%AD%E0%B8%B1%E0%B8%84%E0%B8%A3%E0%B8%B2" target="_blank"><img src="/assets/img/where-to-buy/tesco-logo.png" alt="Tesco Lotus"></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="https://www.tops.co.th/th/search/%E0%B8%AD%E0%B8%B1%E0%B8%84%E0%B8%A3%E0%B8%B2,%E0%B9%84%E0%B8%82%E0%B9%88%E0%B8%AD%E0%B8%B1%E0%B8%84%E0%B8%A3%E0%B8%B2,akara,%E0%B9%80%E0%B8%AD%E0%B8%84%E0%B9%82%E0%B8%84%E0%B9%82%E0%B8%A5%E0%B8%A2%E0%B8%B5" target="_blank"><img src="/assets/img/where-to-buy/tops-logo.png" alt="Tops Market"></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php get_template_part( 'templates/subscriber'); ?>
          </div>
        </div>
      </main>
<?php
		endwhile;
	endif;
?>

<?php get_footer(); ?>

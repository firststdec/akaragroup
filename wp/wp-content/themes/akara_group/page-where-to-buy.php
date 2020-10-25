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
                      <div class="c-icon-our-store"></div>
                    </div>
                    <div class="text">ร้านค้าของเรา</div>
                  </div>
                  <div class="c-where-to-buy__list-tab-item c-trgger-03" data-tab="c-tab-03">
                    <div class="icon">
                      <div class="c-icon-point"></div>
                    </div>
                    <div class="text">จุดจำหน่ายสินค้า</div>
                  </div>
                  <div class="c-where-to-buy__list-tab-item c-trgger-04" data-tab="c-tab-04">
                    <div class="icon">
                      <div class="c-icon-online-store"></div>
                    </div>
                    <div class="text">ออนไลน์</div>
                  </div>
                </div>
              </div>
              <?php endif; ?>
              <div class="c-where-to-buy__list-tab-content animation-element slide-top">
                <div class="c-where-to-buy__list-tab-content-box c-tab-01 is-active">
                  <div class="c-triangle -tab-01"></div>
                  <div class="c-where-to-buy__list-tab-content-box-list">
                    <div class="c-where-to-buy__list-shop js-swiper-shop">
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_01.svg" alt=""></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_02.svg" alt=""></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_03.svg" alt=""></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_04.svg" alt=""></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_01.svg" alt=""></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_02.svg" alt=""></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_03.svg" alt=""></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_04.svg" alt=""></a></div>
                    </div>
                  </div>
                </div>
                <div class="c-where-to-buy__list-tab-content-box c-tab-02">
                  <div class="c-triangle -tab-02"></div>
                  <div class="c-where-to-buy__list-tab-content-box-list">
                    <div class="c-where-to-buy__list-shop js-swiper-shop">
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_02.svg" alt=""></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_03.svg" alt=""></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_04.svg" alt=""></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_01.svg" alt=""></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_02.svg" alt=""></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_03.svg" alt=""></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_04.svg" alt=""></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_01.svg" alt=""></a></div>
                    </div>
                  </div>
                </div>
                <div class="c-where-to-buy__list-tab-content-box c-tab-03">
                  <div class="c-triangle -tab-03"></div>
                  <div class="c-where-to-buy__list-tab-content-box-list">
                    <div class="c-where-to-buy__list-shop js-swiper-shop">
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_03.svg" alt=""></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_04.svg" alt=""></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_01.svg" alt=""></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_02.svg" alt=""></a></div>
                    </div>
                  </div>
                </div>
                <div class="c-where-to-buy__list-tab-content-box c-tab-04">
                  <div class="c-triangle -tab-04"></div>
                  <div class="c-where-to-buy__list-tab-content-box-list">
                    <div class="c-where-to-buy__list-shop js-swiper-shop">
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_04.svg" alt=""></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_01.svg" alt=""></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_02.svg" alt=""></a></div>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="#"><img src="/assets/img/where-to-buy/img_where_to_buy_03.svg" alt=""></a></div>
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

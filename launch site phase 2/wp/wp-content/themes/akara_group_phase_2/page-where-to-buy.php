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
                      <div class="c-icon-online-store"></div>
                    </div>
                    <div class="text">Online</div>
                  </div>
                </div>
              </div>

              <div class="c-where-to-buy__list-tab-content animation-element slide-top">
                <?php if( have_rows('department_store_list') ): ?>
                <div class="c-where-to-buy__list-tab-content-box c-tab-01 is-active">
                  <div class="c-triangle -tab-01"></div>
                  <div class="c-where-to-buy__list-tab-content-box-list">
                    <div class="c-where-to-buy__list-shop js-swiper-shop">
                      <?php while( have_rows('department_store_list') ) : the_row(); ?>
                      <?php
                        $store_image_01 = get_sub_field('store_image_01');
                      ?>
                      <div class="c-where-to-buy__list-shop-item"><div class="c-where-to-buy__list-shop-link"><img src="<?php echo $store_image_01['url']; ?>" alt="<?php echo $store_image_01['alt']; ?>"></div></div>
                      <?php endwhile; ?>
                    </div>
                  </div>
                </div>
                <?php endif; ?>
                <?php if( have_rows('online_store_list') ): ?>
                <div class="c-where-to-buy__list-tab-content-box c-tab-02">
                  <div class="c-triangle -tab-02"></div>
                  <div class="c-where-to-buy__list-tab-content-box-list">
                    <div class="c-where-to-buy__list-shop js-swiper-shop">
                    <?php while( have_rows('online_store_list') ) : the_row(); ?>
                    <?php
                      $store_image_02 = get_sub_field('store_image_02');
                      $store_website_02 = get_sub_field('store_website_02');
                    ?>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="<?php echo $store_website_02; ?>" target="_blank"><img src="<?php echo $store_image_02['url']; ?>" alt="<?php echo $store_image_02['alt']; ?>"></a></div>
                    <?php endwhile; ?>
                    </div>
                  </div>
                </div>
                <?php endif; ?>
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

              <div class="c-where-to-buy__list-tab-content animation-element slide-top">
                <?php if( have_rows('department_store_list') ): ?>
                <div class="c-where-to-buy__list-tab-content-box c-tab-01 is-active">
                  <div class="c-triangle -tab-01"></div>
                  <div class="c-where-to-buy__list-tab-content-box-list">
                    <div class="c-where-to-buy__list-shop js-swiper-shop">
                      <?php while( have_rows('department_store_list') ) : the_row(); ?>
                      <?php
                        $store_image_01 = get_sub_field('store_image_01');
                      ?>
                      <div class="c-where-to-buy__list-shop-item"><div class="c-where-to-buy__list-shop-link"><img src="<?php echo $store_image_01['url']; ?>" alt="<?php echo $store_image_01['alt']; ?>"></div></div>
                      <?php endwhile; ?>
                    </div>
                  </div>
                </div>
                <?php endif; ?>
                <?php if( have_rows('online_store_list') ): ?>
                <div class="c-where-to-buy__list-tab-content-box c-tab-02">
                  <div class="c-triangle -tab-02"></div>
                  <div class="c-where-to-buy__list-tab-content-box-list">
                    <div class="c-where-to-buy__list-shop js-swiper-shop">
                    <?php while( have_rows('online_store_list') ) : the_row(); ?>
                    <?php
                      $store_image_02 = get_sub_field('store_image_02');
                      $store_website_02 = get_sub_field('store_website_02');
                    ?>
                      <div class="c-where-to-buy__list-shop-item"><a class="c-where-to-buy__list-shop-link" href="<?php echo $store_website_02; ?>" target="_blank"><img src="<?php echo $store_image_02['url']; ?>" alt="<?php echo $store_image_02['alt']; ?>"></a></div>
                    <?php endwhile; ?>
                    </div>
                  </div>
                </div>
                <?php endif; ?>
              </div>
              <?php endif; ?>

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

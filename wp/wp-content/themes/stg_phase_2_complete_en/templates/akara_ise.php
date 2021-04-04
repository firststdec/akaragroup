<?php
  if(ICL_LANGUAGE_CODE == 'en'){
    $lang_url = '/en';
  } elseif (ICL_LANGUAGE_CODE == 'th') {
    $lang_url = '';
  }
  $term_list = get_the_terms($post->ID, 'product_category');
  // print "<pre>"; print_r($term_list);
  $banner = get_field('category_banner', $term_list[0]->taxonomy . '_' . $term_list[0]->term_id);
    // CHECK URL
  $root_url = '';
  if( PRODUCTION ) {
    $root_url = '/akara';
  }
?>
<main class="l-container">
  <div class="l-container__inner">
    <div class="p-product -orange">
      <div class="sec-cmn-01 c-product-mv">
        <div class="inner">
          <div class="c-product-heading">
            <div class="c-product-category animation-element slide-left">
              <div class="c-product-category__name">AKARA ISE</div>
            </div>
            <div class="c-product-local-nav animation-element slide-right">
              <div class="c-product-local-nav__item is-active"><a class="c-product-local-nav__link" href="#">
                  <div class="c-product-local-nav__link-icon"></div>
                  <div class="c-product-local-nav__link-text"><?php echo (is_th_lang())? 'ไข่ไก่โมริทามะ':'MORI-TAMA Eggs'; ?></div></a></div>
            </div>
          </div>
          <div class="c-product-image animation-element slide-top">
            <?php if(get_field('product_mainvisual')!=''): ?>
              <?php $product_mainvisual = get_field('product_mainvisual'); ?>
            <figure class="c-product-image__frame"><img src="<?php echo $product_mainvisual['url']; ?>" alt="<?php echo $product_mainvisual['url']; ?>"></figure>
            <?php endif; ?>
            <?php if(get_field('product_mainvisual_heading')!=''): ?>
            <div class="c-product-image__heading"><?php echo get_field('product_mainvisual_heading'); ?></div>
            <?php endif; ?>
            <?php if(get_field('product_mainvisual_content')!=''): ?>
            <div class="c-product-image__text"><?php echo get_field('product_mainvisual_content'); ?></div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="sec-cmn-01 c-product-content">
        <div class="c-wave-cream">
          <canvas id="canvas-cream"></canvas>
        </div>
        <div class="c-product-content__inner">
          <div class="c-box-card-row-01 -reverse">
            <?php if(get_field('product_hows_it_good_image')!=''): ?>
              <?php $product_hows_it_good_content = get_field('product_hows_it_good_image'); ?>
            <figure class="box-image animation-element slide-top"><img class="image" src="<?php echo $product_hows_it_good_content['url']; ?>" alt="<?php echo $product_hows_it_good_content['alt']; ?>"></figure>
            <?php endif; ?>
            <div class="box-content animation-element slide-top">
              <?php if(get_field('product_hows_it_good_heading')!=''): ?>
              <div class="c-heading-cmn-01">
                <div class="icon">
                  <div class="i-thumb-white"></div>
                </div><?php echo get_field('product_hows_it_good_heading'); ?>
              </div>
              <?php endif; ?>
              <?php if(get_field('product_hows_it_good_content')!=''): ?>
              <div class="c-text-cmn-01"><?php echo get_field('product_hows_it_good_content'); ?></div>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="c-wave-cream-bottom">
          <canvas id="canvas-cream-bottom"></canvas>
        </div>
      </div>
      <div class="sec-cmn-01 c-product-list">
        <div class="c-product-list__inner">
          <div class="c-product-list__box-product-show">
            <?php if(get_field('product_story')!=''): ?>
            <div class="c-product-list__box-product-content animation-element slide-top">
              <div class="c-product-list__box-product-content-heading">
                <div class="c-product-list__box-product-content-icon">
                  <div class="i-book-white"></div>
                </div>Product Story
              </div>
              <div class="c-product-list__box-product-content-text"><?php echo get_field('product_story'); ?></div>
            </div>
            <?php endif; ?>
            <?php if(get_field('product_benefits')!=''): ?>
            <div class="c-product-list__box-product-content animation-element slide-top" style="display: none;">
              <div class="c-product-list__box-product-content-heading">
                <div class="c-product-list__box-product-content-icon">
                  <div class="i-handheart-white"></div>
                </div>Benefits
              </div>
              <div class="c-product-list__box-product-content-text"><?php echo get_field('product_benefits'); ?></div>
            </div>
            <?php endif; ?>
          </div>
          <div class="c-product-list__box-product-detail animation-element slide-top">
            <div class="c-product-list__box-product-detail-inner">
              <?php if(get_field('product_benefits')!=''): ?>
              <div class="c-product-list__box-product-content animation-element slide-top">
                <div class="c-product-list__box-product-content-heading">
                  <div class="c-product-list__box-product-content-icon">
                    <div class="i-handheart-white"></div>
                  </div>Benefits
                </div>
                <div class="c-product-list__box-product-content-text"><?php echo get_field('product_benefits'); ?></div>
              </div>
              <?php endif; ?>
              <?php if(have_rows('product_detail_rpt')): ?>
              <div class="c-product-list__box-product-content" style="display: none;">
                <div class="c-product-list__box-product-content-heading">
                  <div class="c-product-list__box-product-content-icon">
                    <div class="i-list-white"></div>
                  </div>Product Detail
                </div>
                <div class="c-product-list__nutrient-table">
                  <?php
                    // Loop through rows.
                    while( have_rows('product_detail_rpt') ) : the_row();
                  ?>
                  <dl class="c-product-list__nutrient-table-list">
                    <?php if(get_sub_field('product_detail_rpt_heading')!=''): ?>
                    <dt class="c-product-list__nutrient-table-heading"><?php echo get_sub_field('product_detail_rpt_heading'); ?></dt>
                    <?php endif; ?>
                    <?php if(get_sub_field('product_detail_rpt_content')!=''): ?>
                    <dd class="c-product-list__nutrient-table-detail"><?php echo get_sub_field('product_detail_rpt_content'); ?></dd>
                    <?php endif; ?>
                  </dl>
                  <?php endwhile; ?>
                </div>
              </div>
              <?php endif; ?>
              <?php if(have_rows('product_certificate_rpt') || get_field('product_image')!=''): ?>
              <div class="c-product-list__box-product-badge">
                <?php if(get_field('product_image')!=''): ?>
                  <?php $product_image = get_field('product_image'); ?>
                <div class="c-product-list__box-product-badge-image-deco"><img src="<?php echo $product_image['url']; ?>" alt="<?php echo $product_image['alt']; ?>"></div>
                <?php endif; ?>
                <?php if(have_rows('product_certificate_rpt')): ?>
                <div class="c-product-list__box-product-badge-list">
                  <?php
                    // Loop through rows.
                    while( have_rows('product_certificate_rpt') ) : the_row();
                      $certificate_image = get_sub_field('certificate_image');
                  ?>
                  <div class="c-product-list__box-product-badge-item">
                    <figure class="c-product-list__box-product-badge-image"><img src="<?php echo $certificate_image['url']; ?>" alt="<?php echo $certificate_image['alt']; ?>"></figure>
                  </div>
                  <?php endwhile; ?>
                </div>
                <?php endif; ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <?php if( $banner['url'] != '' ): ?>
      <div class="l-sec-cmn-01 -video-section p-our-story u-mt-sp-0 animation-element slide-top u-mb-130">
        <div class="inner"><img class="image" src="<?php echo $banner['url']; ?>" alt="<?php echo $banner['alt']; ?>"></div>
      </div>
      <?php endif; ?>
      <?php
        $product_relate_recipes = get_field('product_relate_recipes');
      ?>
      <?php if( $product_relate_recipes ): ?>
      <div class="c-recipes-box">
        <div class="c-wave-orange">
          <canvas id="canvas-orange"></canvas>
        </div>
        <div class="l-sec-cmn-01 -recipes-top-heading">
          <div class="inner">
            <div class="c-box-heading-center-text">
              <div class="inner">
                <div class="box-heading animation-element slide-top">
                  <div class="title"><span>RECIPE</span><span class="text-yellow">S</span></div>
                </div>
                <div class="box-text animation-element slide-top">
                  <?php
                    if(ICL_LANGUAGE_CODE == 'en') {
                      $top_th_id = 31;
                      $recipes_text = get_field('recipes_text', $top_th_id);
                      $readmore = 'READ MORE';
                    } elseif(ICL_LANGUAGE_CODE == 'th') {
                      // $recipes_text = "ให้ 'อัครา' ช่วยเติมเต็มความอร่อยในทุกมื้ออาหารของคุณ ";
                      $top_th_id = 98;
                      $recipes_text = get_field('recipes_text', $top_th_id);
                      $readmore = 'อ่านเพิ่มเติม';
                    }
                  ?>
                  <div class="text"><?php echo $recipes_text; ?></div>
                </div>
                <div class="c-box-cmn-button animation-element slide-top"><a class="c-button-cmn-01 --border-base" href="<?php echo $lang_url; ?>/recipe/"><span class="text"><?php echo $readmore; ?></span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
              </div>
            </div>
          </div>
        </div>


        <div class="l-sec-cmn-01 l-sec-box-swiper-voice --product-yellow">
          <div class="inner">
            <div class="l-swiper-recipes animation-element slide-top">
              <!-- Slider main container-->
              <div class="product-swiper-container js-recipes-swiper-normal">
                <!-- Additional required wrapper-->
                <div class="swiper-wrapper">
                <?php foreach( $product_relate_recipes as $product_relate_recipe ): ?>
                <?php
                  $recipe_cooking_level = get_field('recipe_cooking_level', $product_relate_recipe->ID);
                  $recipe_cooking_time = get_field('recipe_cooking_time', $product_relate_recipe->ID);
                  $recipe_cooking_serve = get_field('recipe_cooking_serve', $product_relate_recipe->ID);
                  $recipe_thumbnail = get_field('recipe_thumbnail', $product_relate_recipe->ID);
                ?>
                  <!-- Slides-->
                  <div class="swiper-slide">
                    <a href="<?php echo get_permalink($product_relate_recipe->ID); ?>">
                      <div class="article-content">
                        <div class="c-shadow"></div>
                        <div class="c-box-card-01 -full">
                          <div class="c-badge__list">
                          <?php if($recipe_cooking_level!=''): ?>
                            <div class="c-badge__item -level">
                              <div class="icon"></div>
                              <div class="text"><?php echo str_replace(array('Level ', 'Level'), '', $recipe_cooking_level); ?></div>
                            </div>
                          <?php endif; ?>
                          <?php if($recipe_cooking_time !='' ): ?>
                            <div class="c-badge__item -time">
                              <div class="icon"></div>
                              <div class="text"><?php echo $recipe_cooking_time; ?></div>
                            </div>
                          <?php endif; ?>
                          <?php if($recipe_cooking_serve !='' ): ?>
                            <div class="c-badge__item -serve">
                              <div class="icon"></div>
                              <div class="text"><?php echo $recipe_cooking_serve; ?></div>
                            </div>
                          <?php endif; ?>
                          </div>
                          <div class="c-overlay"></div>
                          <?php if($recipe_thumbnail['url']!=''): ?>
                          <figure class="box-image"><img class="image" src="<?php echo $recipe_thumbnail['url']; ?>" alt="<?php echo $recipe_thumbnail['alt']; ?>"></figure>
                          <?php endif; ?>
                          <div class="box-content">
                            <div class="c-heading-cmn-01"><?php echo get_the_title($product_relate_recipe->ID); ?></div>
                            <div class="c-text-cmn-01"><?php echo get_field('recipe_short_description', $product_relate_recipe->ID); ?></div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="c-wave-orange-bottom">
          <canvas id="canvas-orange-bottom"></canvas>
        </div>
      </div>
      <?php endif; ?>

      <div class="c-voice-box">
        <div class="c-voice-box__inner">
          <div class="c-voice-box__fix-box animation-element slide-top">
            <div class="c-voice-box__fix-box-inner">
              <div class="c-voice-box__fix-box-heading">
                <div class="c-voice-box__fix-box-heading-icon">
                  <div class="c-comment-icon"></div>
                </div>
                <div class="c-voice-box__fix-box-heading-text">เสียงจากคนทานไข่อัครา</div>
              </div>
              <div class="c-voice-box__fix-box-text">These tasty certified USDA Organic eggs come from farms that have been pesticide-free.</div>
            </div>
          </div>
          <?php
            if(ICL_LANGUAGE_CODE == 'en'):
              $testimonial_id = 163;
            elseif(ICL_LANGUAGE_CODE == 'th'):
              $testimonial_id = 159;
            endif;
          ?>
          <?php
            // Check rows exists.
            if( have_rows('testimonial_rpt', $testimonial_id) ):
          ?>
          <div class="c-voice-box__slider-box animation-element slide-top">

            <!-- Slider main container-->
            <div class="swiper-container js-swiper-voice">
              <!-- Additional required wrapper-->
              <div class="swiper-wrapper">
                <!-- Slides-->
                <?php
                  // Loop through rows.
                  while( have_rows('testimonial_rpt', $testimonial_id) ) : the_row();
                ?>
                <div class="swiper-slide">
                  <div class="c-card-voice">
                    <?php if(get_sub_field('testimonial_rpt_heading', $testimonial_id)!=''): ?>
                    <div class="c-card-voice__heading"><?php echo get_sub_field('testimonial_rpt_heading', $testimonial_id); ?></div>
                    <?php endif; ?>
                    <?php if(get_sub_field('testimonial_rpt_content', $testimonial_id)!=''): ?>
                    <div class="c-card-voice__text">"<?php echo get_sub_field('testimonial_rpt_content', false, $testimonial_id); ?>"</div>
                    <?php endif; ?>
                    <div class="c-card-voice__author">
                      <div class="c-card-voice__author-icon"></div>
                      <div class="c-card-voice__author-staff">
                      <?php if(get_sub_field('testimonial_rpt_name', $testimonial_id)!=''): ?>
                        <div class="c-card-voice__author-staff-name"><?php echo get_sub_field('testimonial_rpt_name', $testimonial_id); ?></div>
                      <?php endif; ?>
                      <?php if(get_sub_field('testimonial_rpt_position', $testimonial_id)!=''): ?>
                        <div class="c-card-voice__author-staff-position"><?php echo get_sub_field('testimonial_rpt_position', $testimonial_id); ?></div>
                      <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endwhile; ?>
              </div>
              <!-- If we need navigation buttons-->
              <div class="swiper-box-control">
                <div class="swiper-button-prev -voice"></div>
                <div class="swiper-button-next -voice"></div>
              </div>
            </div>
            <div class="swiper-box-control-trigger">
              <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
              <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
            </div>

          </div>
          <?php endif; ?>
        </div>
      </div>
      <?php get_template_part( 'templates/subscriber'); ?>
    </div>
  </div>
</main>
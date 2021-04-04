<?php
  if(ICL_LANGUAGE_CODE == 'en'){
    $lang_url = '/en';
  } elseif (ICL_LANGUAGE_CODE == 'th') {
    $lang_url = '';
  }
?>
<?php
  $term_obj = get_queried_object();
  $main_visual_image = get_field('main_visual_image', $term_obj->taxonomy . '_' . $term_obj->term_id);
  $main_visual_heading = get_field('main_visual_heading', $term_obj->taxonomy . '_' . $term_obj->term_id);
  $main_visual_content = get_field('main_visual_content', $term_obj->taxonomy . '_' . $term_obj->term_id);
  $product_category_type = get_field('product_category_type', $term_obj->taxonomy . '_' . $term_obj->term_id);
  $how_is_it_good_heading = get_field('how_is_it_good_heading', $term_obj->taxonomy . '_' . $term_obj->term_id);
  $how_is_it_good_content = get_field('how_is_it_good_content', $term_obj->taxonomy . '_' . $term_obj->term_id);
  $how_is_it_good_image = get_field('how_is_it_good_image', $term_obj->taxonomy . '_' . $term_obj->term_id);
  $banner = get_field('category_banner', $term_obj->taxonomy . '_' . $term_obj->term_id);
?>
<main class="l-container">
  <div class="l-container__inner">
    <div class="p-product -yellow">
      <div class="sec-cmn-01 c-product-mv">
        <div class="inner">
          <div class="c-product-heading">
            <div class="c-product-category animation-element slide-left">
              <div class="c-product-category__name">akara</div>
              <?php if($product_category_type == 'ready-to-cook'): ?>
              <div class="c-product-category__icon"><img class="u-no-sp" src="/assets/img/recipes/ready_to_cook.svg" alt="Ready to Cook"><img class="u-no-tb u-no-pc" src="/assets/img/recipes/ready_to_cook_white.svg" alt="Ready to Cook"></div>
              <?php elseif($product_category_type == 'ready-to-eat'): ?>
              <div class="c-product-category__icon"><img class="u-no-sp" src="/assets/img/svg/ready_to_eat_pc.svg" alt="Ready to Eat"><img class="u-no-tb u-no-pc" src="/assets/img/svg/ready_to_eat.svg" alt="Ready to Eat"></div>
              <?php endif; ?>
            </div>

            <div class="c-product-local-nav animation-element slide-right">
            <?php
              $args = array(
                'hide_empty' => 0,
                'child_of' => 3,
              );
              $cate = 'product_category';

              $terms = get_terms( $cate, $args );
              // print "<pre>"; print_r($terms);
              if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):
                foreach ( $terms as $term ) :
                  $term_type = get_field('product_category_type', $term->taxonomy . '_' . $term->term_id);

                  if($term_type == $product_category_type):
            ?>

              <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
              <div class="c-product-local-nav__item <?php echo ($term_obj->slug == $term->slug)? 'is-active':''; ?>">
                <a class="c-product-local-nav__link" href="<?php echo esc_url( '/akara/en/product/' . $term->slug ); ?>">
                  <div class="c-product-local-nav__link-icon"></div>
                  <div class="c-product-local-nav__link-text"><?php echo $term->name; ?></div>
                </a>
              </div>
              <?php elseif(ICL_LANGUAGE_CODE == 'th'): ?>
              <div class="c-product-local-nav__item <?php echo ($term_obj->slug == $term->slug)? 'is-active':''; ?>">
                <a class="c-product-local-nav__link " href="<?php echo esc_url( '/akara/product/' . $term->slug ); ?>">
                  <div class="c-product-local-nav__link-icon"></div>
                  <div class="c-product-local-nav__link-text"><?php echo $term->name; ?></div>
                </a>
              </div>
              <?php endif; ?>
            <?php
                  endif; // if($term_type == $product_category_type):
                endforeach; // foreach ( $terms as $term ) :
              endif; // if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):
            ?>
            </div>
          </div>

          <div class="c-product-image animation-element slide-top">
            <?php if($main_visual_image['url']!=''): ?>
            <figure class="c-product-image__frame"><img src="<?php echo $main_visual_image['url']; ?>" alt="<?php echo $main_visual_image['alt']; ?>"></figure>
            <?php endif; ?>
            <?php if($main_visual_heading!=''): ?>
            <div class="c-product-image__heading"><?php echo $main_visual_heading; ?></div>
            <?php endif; ?>
            <?php if($main_visual_content!=''): ?>
            <div class="c-product-image__text"><?php echo $main_visual_content; ?></div>
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
            <?php if($how_is_it_good_image['url']!=''): ?>
            <figure class="box-image animation-element slide-top"><img class="image" src="<?php echo $how_is_it_good_image['url']; ?>" alt="<?php echo $how_is_it_good_image['alt']; ?>"></figure>
            <?php endif; ?>
            <div class="box-content animation-element slide-top">
              <?php if($how_is_it_good_heading!=''): ?>
              <div class="c-heading-cmn-01">
                <div class="icon">
                  <div class="i-thumb-white"></div>
                </div><?php echo $how_is_it_good_heading; ?>
              </div>
              <?php endif; ?>
              <?php if($how_is_it_good_content!=''): ?>
              <div class="c-text-cmn-01"><?php echo $how_is_it_good_content; ?></div>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="c-wave-cream-bottom">
          <canvas id="canvas-cream-bottom"></canvas>
        </div>
      </div>
    <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'post_type' => 'product',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'DESC',
        'paged' => $paged,
        'tax_query' => array(
          array(
              'taxonomy' => 'product_category',
              'field'    => 'id',
              'terms'    => $term_obj->term_id,
          ),
        ),
      );

      $the_query = new WP_Query( $args );
      // print "<pre>"; print_r($the_query); die();
      if ( $the_query->have_posts() ) :
    ?>
      <div class="sec-cmn-01 c-product-list">
        <div class="c-product-list__inner">
          <div class="c-product-list__box-product-show">
            <div class="c-product-list__box-product-show-heading animation-element slide-top">
              <div class="c-product-list__box-product-show-heading-text">เลือกผลิตภัณฑ์</div>
            </div>

            <div class="c-product-list__box-product-show-dropdown animation-element slide-top">
              <div class="c-input-selectbox">
                <select id="select-product" name="select-product">
                <?php $i = 1; ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                  <option value="product-0<?php echo $i; ?>" <?php if($i == 1): ?>selected="selected"<?php endif; ?>><?php echo get_the_title(); ?></option>
                  <?php $i++; ?>
                <?php endwhile; ?>
                </select>
                <div class="c-input-selectbox__display-text"></div>
              </div>
            </div>

            <div class="c-product-slider-show animation-element slide-top">
              <?php $i = 1; ?>
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <!-- Slider main container-->
              <?php
                $images = get_field('product_gallery');
                if( $images ):
              ?>
              <div class="swiper-container js-product-slide-show js-product-0<?php echo $i; ?> <?php echo ($i > 1)? 'is-product-opacity':''; ?>">
                <!-- Additional required wrapper-->
                <div class="swiper-wrapper">
                  <?php foreach( $images as $image ): ?>
                  <!-- Slides-->
                  <div class="swiper-slide"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div>
                  <?php endforeach; ?>
                </div>
                <!-- If we need pagination-->
                <div class="swiper-pagination"></div>
                <!-- If we need navigation buttons-->
                <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
              </div>
              <?php endif; //if( $images ): ?>
              <?php $i++; ?>
              <?php endwhile; ?>
            </div>

          </div>

          <div class="c-product-list__box-product-detail animation-element slide-top">
            <?php $i = 1; ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="c-product-list__box-product-detail-inner js-product-0<?php echo $i; ?>__detail <?php echo ($i > 1)? 'is-product-opacity':''; ?>">
              <?php if(get_field('product_story')!=''): ?>
              <div class="c-product-list__box-product-content">
                <div class="c-product-list__box-product-content-heading">
                  <div class="c-product-list__box-product-content-icon">
                    <div class="i-book-white"></div>
                  </div>Product Story
                </div>
                <div class="c-product-list__box-product-content-text"><?php echo get_field('product_story'); ?></div>
              </div>
              <?php endif; ?>
              <?php if(have_rows('product_detail_rpt') || get_field('product_detail_text')!=''): ?>
              <div class="c-product-list__box-product-content">
                <div class="c-product-list__box-product-content-heading">
                  <div class="c-product-list__box-product-content-icon">
                    <div class="i-list-white"></div>
                  </div>Product Detail
                </div>
                <?php if(have_rows('product_detail_rpt')): ?>
                <div class="c-product-list__nutrient-table" style="display: none;">
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
                <?php endif; ?>
                <?php if(get_field('product_detail_text')!=''): ?>
                <div class="c-product-list__box-product-content-text"><?php echo get_field('product_detail_text'); ?></div>
                <?php endif; ?>
              </div>
              <?php endif; // if(have_rows('product_detail_rpt')):?>

              <?php if(have_rows('product_certificate_rpt')): ?>
              <div class="c-product-list__box-product-badge" style="display: none;">
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
              </div>
              <?php endif; // if(have_rows('product_certificate_rpt')):?>
              <?php if(get_field('product_benefits')!=''): ?>
              <div class="c-product-list__box-product-content">
                <div class="c-product-list__box-product-content-heading">
                  <div class="c-product-list__box-product-content-icon">
                    <div class="i-handheart-white"></div>
                  </div>Benefits
                </div>
                <div class="c-product-list__box-product-content-text"><?php echo get_field('product_benefits'); ?></div>
              </div>
              <?php endif; ?>
            </div>
            <?php $i++; ?>
            <?php endwhile; ?>
          </div>

        </div>
      </div>
      <?php if( $banner['url'] != '' ): ?>
      <div class="l-sec-cmn-01 -video-section p-our-story u-mt-0">
        <div class="inner"><img class="image" src="<?php echo $banner['url']; ?>" alt="<?php echo $banner['alt']; ?>"></div>
      </div>
      <?php endif; ?>
      <?php $k = 1; ?>
      <?php $arr_recipe = array(); ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php
          $product_relate_recipes = get_field('product_relate_recipes');
          if($product_relate_recipes!='') {
            $arr_recipe[get_the_ID()][] = $product_relate_recipes;
          }
        ?>
      <?php endwhile;?>
      <?php if(!empty($arr_recipe)): ?>
      <div class="c-recipes-box u-d-none">
        <div class="c-wave-yellow">
          <canvas id="canvas-yellow"></canvas>
        </div>

        <div class="l-sec-cmn-01 -recipes-top-heading">
          <div class="inner">
            <div class="c-box-heading-center-text">
              <div class="inner">
                <div class="box-heading animation-element slide-top">
                  <div class="title"><span>RECIPIE</span><span class="text-yellow">S</span></div>
                </div>
                <div class="box-text animation-element slide-top">
                  <?php
                    if(ICL_LANGUAGE_CODE == 'en') {
                      $recipes_text = "Let 'Akara' help fill the deliciousness of every meal";
                      $readmore = 'READ MORE';
                    } elseif(ICL_LANGUAGE_CODE == 'th') {
                      $recipes_text = "ให้ 'อัครา' ช่วยเติมเต็มความอร่อยในทุกมื้ออาหารของคุณ ";
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
            <?php $j = 1; ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php
              $product_relate_recipes = get_field('product_relate_recipes');
            ?>
              <?php if( $product_relate_recipes ): ?>
              <div class="product-swiper-container js-recipes-swiper-normal js-product-0<?php echo $j; ?>__slider <?php echo ($j!=1)? 'is-product-opacity':'';?> ">
                <!-- Additional required wrapper-->
                <div class="swiper-wrapper">
                <?php foreach( $product_relate_recipes as $product_relate_recipe ): ?>
                <?php
                  $recipe_cooking_level = get_field('recipe_cooking_level', $product_relate_recipe->ID);
                  $recipe_cooking_time = get_field('recipe_cooking_time', $product_relate_recipe->ID);
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
              <!-- product-swiper-container js-recipes-swiper-normal -->
              <?php endif; // if( $product_relate_recipes ): ?>
              <?php $j++; ?>
            <?php endwhile; ?>
            </div>
          </div>
        </div>
        <div class="c-wave-yellow-bottom">
          <canvas id="canvas-yellow-bottom"></canvas>
        </div>

      </div>
      <?php endif; ?>
    <?php endif; //if ( $the_query->have_posts() ) : ?>

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
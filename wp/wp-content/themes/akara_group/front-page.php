<?php
/**
 * The main template file
 *
 * Template Name: Homepage
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<?php
  if(ICL_LANGUAGE_CODE == 'en'){
    $lang_url = '/en';
  } elseif (ICL_LANGUAGE_CODE == 'th') {
    $lang_url = '';
  }
  // CHECK URL
  $root_url = '';
  if( PRODUCTION ) {
    $root_url = '/akara';
  }
?>
<main class="l-container">
  <div class="l-container__inner">
    <div class="p-top">
      <div class="l-sec-cmn-02">
        <div class="inner">
          <div class="c-box-swiper-mv">
            <div class="slider-inner">
              <div class="box-swiper-content">
                <div class="heading">
                  <div class="text-black">EVERYDAY</div>
                  <div class="text-yellow u-no-sp">
                    <svg>
                      <symbol id="text-copy">
                        <text class="text--line" text-anchor="center" x="0" y="50%">with akara</text>
                      </symbol>
                      <g class="g-ants">
                        <use class="text-copy" id="outline" xlink:href="#text-copy"></use>
                        <use class="text-copy" id="fill" xlink:href="#text-copy"></use>
                      </g>
                    </svg>
                  </div>
                  <div class="text-yellow u-no-tb u-no-pc">with akara</div>
                </div>
                <?php if(get_field('main_visual_content')!=''): ?>
                <div class="text"><?php echo get_field('main_visual_content'); ?></div>
                <?php endif; ?>
                <div class="mv-swiper-nav-custom">
                  <!-- Add Arrows-->
                  <div class="mv-swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                  <div class="mv-swiper-button-next"><i class="fas fa-chevron-right"></i></div>
                </div>
              </div>
              <?php if(have_rows('mainvisual_slider_rpt')): ?>
              <div class="box-swiper-mv-js">
                <div class="swiper-wrapper">
                <?php
                  // Loop through rows.
                  while( have_rows('mainvisual_slider_rpt') ) : the_row();
                    $mainvisual_slider_rpt_image = get_sub_field('mainvisual_slider_rpt_image');
                    $mainvisual_slider_rpt_link = get_sub_field('mainvisual_slider_rpt_link');
                ?>
                  <?php if($mainvisual_slider_rpt_image['url']!=''): ?>
                  <div class="swiper-slide">
                    <div class="mainvisual-content">
                      <div class="box-image-wrapper">
                        <?php if($mainvisual_slider_rpt_link != ''): ?>
                        <a href="<?php echo ( $mainvisual_slider_rpt_link !='' )? $mainvisual_slider_rpt_link : '#'; ?>" target="_blank">
                        <?php endif; ?>
                          <figure class="box-image"><img class="image lazy" src="<?php echo $mainvisual_slider_rpt_image['url']; ?>" alt="<?php echo $mainvisual_slider_rpt_image['alt']; ?>" data-object-fit="cover"></figure>
                        <?php if($mainvisual_slider_rpt_link != ''): ?>
                        </a>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                  <?php endif; ?>
                <?php endwhile; ?>
                </div>
                <!-- Add Pagination-->
                <div class="mv-swiper-pagination"></div>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>

      <?php
        if(ICL_LANGUAGE_CODE == 'en'):
          $readmore_text = 'READMORE';
          $page_id = 31;
        elseif(ICL_LANGUAGE_CODE == 'th'):
          $readmore_text = 'อ่านเพิ่มเติม';
          $page_id = 98;
        endif; ?>
      <div class="l-sec-cmn-01">
        <div class="inner">
          <div class="c-box-card-row-01 -reverse -yellow-egg">
            <div class="c-wave-yellow">
              <canvas id="canvas-yellow-02"></canvas>
            </div>
            <figure class="box-image">
              <div class="c-deco-yellow-egg animation-element slide-top"></div>
              <div class="image is-active animation-element slide-right">
                <div class="p-egg-box">
                  <div class="p-egg-box__box p-egg-box__box-01">
                    <img class="lazy" src="/assets/img/top/akara-eggs/akara-egg-01.png" alt="">
                    <img class="lazy" src="/assets/img/top/akara-eggs/akara-egg-02.png" alt="">
                    <img class="lazy" src="/assets/img/top/akara-eggs/akara-egg-03.png" alt="">
                  </div>
                  <div class="c-open-package --yellow p-egg-box__button-01" title="โปรดคลิกค้างไว้"></div>
                </div>
              </div>
            </figure>
            <div class="box-content"><a class="js-scroll c-scroll-down-button -th" href="#scroll_yellow_egg">
                <div class="c-scroll-down-line"></div></a>
              <div class="c-egg animation-element slide-top"></div>
              <div class="c-deco-yellow-egg-bg"></div>
              <div class="c-heading-cmn-01 animation-element slide-left">
                <figure class="box-image-heading"><img class="image lazy" src="/assets/img/top/img_logo_01.svg" alt="Akara Egg"></figure>
              </div>
              <?php if(get_field('yellow_egg_content')!=''): ?>
              <div class="c-text-cmn-01 animation-element slide-left"><?php echo get_field('yellow_egg_content', $page_id); ?></div>
              <?php endif; ?>
              <div class="c-box-cmn-button animation-element slide-left">
                <a class="c-button-cmn-01" href="<?php echo $root_url; ?><?php echo $lang_url; ?>/product/fresh-eggs-th"><span class="text"><?php echo $readmore_text; ?></span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a>
              </div>
              <div class="c-product-akara-yellow animation-element slide-top"></div>
            </div>
            <div class="c-wave-yellow-bottom">
              <canvas id="canvas-yellow-bottom-02"></canvas>
            </div>
          </div>
          <div class="c-box-card-row-01 -green-egg">
            <figure class="box-image">
              <div class="c-deco-green-hen animation-element slide-top"></div>
              <div class="image animation-element slide-left">
                <div class="p-egg-box">
                  <div class="p-egg-box__box p-egg-box__box-02">
                    <img class="lazy" src="/assets/img/top/akara-eggology/akara-eggology-01.png" alt="">
                    <img class="lazy" src="/assets/img/top/akara-eggology/akara-eggology-02.png" alt="">
                    <img class="lazy" src="/assets/img/top/akara-eggology/akara-eggology-03.png" alt="">
                  </div>
                  <div class="c-open-package --green p-egg-box__button-02" title="โปรดคลิกค้างไว้"></div>
                </div>
              </div>
            </figure>
            <div class="box-content">
              <div class="c-egg animation-element slide-top" id="scroll_yellow_egg"></div>
              <div class="c-egg-deco-top animation-element slide-top"></div>
              <div class="c-egg-deco-bottom animation-element slide-top"></div>
              <div class="c-heading-cmn-01 animation-element slide-right">
                <figure class="box-image-heading"><img class="lazy image" src="/assets/img/top/img_logo_02.svg" alt="Akara Eggology"></figure>
              </div>
              <?php if(get_field('green_egg_content')!=''): ?>
              <div class="c-text-cmn-01 -white animation-element slide-right"><?php echo get_field('green_egg_content', $page_id); ?></div>
              <?php endif;?>
              <div class="c-box-cmn-button animation-element slide-right"><a class="c-button-cmn-01 animation-element slide-top" href="<?php echo $root_url; ?><?php echo $lang_url; ?>/products/organic"><span class="text"><?php echo $readmore_text; ?></span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
              <div class="c-product-akara-green animation-element slide-top"></div>
            </div>
            <div class="c-wave-green-bottom">
              <canvas id="canvas-green-bottom"></canvas>
            </div>
          </div>
          <div class="c-box-card-row-01 -reverse -orange-egg">
            <figure class="box-image">
              <div class="c-hen-deco-orange animation-element slide-top"></div>
              <div class="c-egg-deco-orange animation-element slide-top"></div>
              <div class="c-line-deco-orange animation-element slide-top"></div>
              <div class="image animation-element slide-right">
                <div class="p-egg-box">
                  <div class="p-egg-box__box p-egg-box__box-03">
                    <img class="lazy" src="/assets/img/top/akara-ise/akara-ise@3x.png?v=2" alt="">
                    <img class="lazy" src="/assets/img/top/akara-ise/akara-ise-02@3x.png?v=2" alt="">
                    <img class="lazy" src="/assets/img/top/akara-ise/akara-ise-03@3x.png?v=2" alt="">
                  </div>
                  <div class="c-open-package --orange p-egg-box__button-03" title="โปรดคลิกค้างไว้"></div>
                </div>
              </div>
            </figure>
            <div class="box-content">
              <div class="c-egg animation-element slide-top"></div>
              <div class="c-mori-tama-egg animation-element slide-top"></div>
              <figure class="box-image-heading animation-element slide-left"><img class="image lazy" src="/assets/img/top/img_logo_03.png" alt="Akara ISE"></figure>
              <div class="heading-orange animation-element slide-left">MORI-TAMA</div>
              <?php if(get_field('orange_egg_content')!=''): ?>
              <div class="c-text-cmn-01 -white animation-element slide-left"><?php echo get_field('orange_egg_content', $page_id); ?></div>
              <?php endif; ?>
              <div class="c-box-cmn-button animation-element slide-left"><a class="c-button-cmn-01" href="<?php echo $root_url; ?>/products/mori-tama"><span class="text"><?php echo $readmore_text; ?></span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
              <div class="c-product-akara-orange animation-element slide-top"></div>
            </div>
            <div class="c-wave-orange-bottom">
              <canvas id="canvas-orange-bottom"></canvas>
            </div>
          </div>
        </div>
      </div>

      <div class="l-sec-cmn-01 -video-section p-our-story animation-element slide-top">
        <div class="inner"><img class="image" src="/assets/img/top/KV1-akara-01-resized.jpg" alt="Akara Group"></div>
      </div>

      <div class="l-sec-cmn-01 -story-about-top">
        <div class="c-wave-yellow">
          <canvas id="canvas-yellow"></canvas>
        </div>
        <div class="inner">
          <div class="c-box-card-row-01">
            <figure class="box-image animation-element slide-top">
              <img class="image lazy u-no-sp" src="/assets/img/top/akara-story@3x.png" alt="akara Story">
              <img class="lazy image u-no-tb u-no-pc" src="/assets/img/top/akara-story@3x.png" alt="akara Story">
            </figure>
            <div class="box-content">
              <div class="c-orange-egg animation-element slide-top"></div>
              <div class="c-heading-cmn-01 animation-element slide-top"><span class="text-white">akara</span><span> Story</span></div>
              <?php if(get_field('akara_story_content')!=''): ?>
              <div class="c-text-cmn-01 animation-element slide-top"><?php echo get_field('akara_story_content', $page_id); ?></div>
              <?php endif; ?>
              <div class="c-box-cmn-button animation-element slide-top"><a class="c-button-cmn-01" href="<?php echo $root_url; ?>/our-story"><span class="text"><?php echo $readmore_text; ?></span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
            </div>
            <div class="c-wave-white-bottom">
              <canvas id="canvas-white-bottom"></canvas>
            </div>
          </div>

          <div class="c-box-card-row-01 -reverse">
            <figure class="box-image animation-element slide-top"><img class="lazy image u-no-sp" src="/assets/img/top/img_about_akara.png" alt="About akara"><img class="lazy image u-no-tb u-no-pc" src="/assets/img/top/everyday-with-akara2.png" alt="About akara"></figure>
            <div class="box-content">
              <div class="c-about-akara-egg animation-element slide-top"></div>
              <div class="c-line-dotted-about-akara animation-element slide-top"></div>
              <div class="c-heading-cmn-01 animation-element slide-top"><span>About</span><span class="text-white"> akara</span></div>
              <?php if(get_field('about_akara_content')!=''): ?>
              <div class="c-text-cmn-01 animation-element slide-top"><?php echo get_field('about_akara_content', $page_id); ?></div>
              <?php endif; ?>
              <div class="c-box-cmn-button animation-element slide-top"><a class="c-button-cmn-01" href="<?php echo $root_url; ?>/about-us"><span class="text"><?php echo $readmore_text; ?></span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
            </div>
          </div>
        </div>
        <div class="c-wave-yellow-bottom">
          <canvas id="canvas-yellow-bottom"></canvas>
        </div>
      </div>

      <div class="l-sec-cmn-01 -recipes-top-heading">
        <div class="c-wave-white">
          <canvas id="canvas-white-top"></canvas>
        </div>
        <div class="inner">
          <div class="c-box-heading-center-text">
            <div class="inner">
              <div class="box-heading animation-element slide-top">
                <div class="c-line-deco"></div>
                <div class="title"><span>RECIPE</span><span class="text-yellow">S</span></div>
              </div>

              <?php if(get_field('recipes_text')!=''): ?>
              <div class="box-text animation-element slide-top">
                <div class="text"><?php echo get_field('recipes_text', $page_id); ?></div>
              </div>
              <?php endif; ?>
              <div class="c-box-cmn-button animation-element slide-top"><a class="c-button-cmn-01 --border-base -is-active" href="<?php echo $lang_url; ?>/recipe/"><span class="text"><?php echo $readmore_text; ?></span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
            </div>
          </div>
        </div>
      </div>

      <?php
        $product_relate_recipes = get_field('recipe_pickups');
      ?>
      <?php if( $product_relate_recipes ): ?>
      <div class="l-sec-cmn-01 l-sec-box-swiper-voice animation-element slide-top">
        <div class="inner">
          <div class="l-swiper-recipes">
            <!-- Slider main container-->
            <div class="product-swiper-container js-recipes-swiper">
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
          <!-- l-swiper-recipes -->
        </div>
      </div>
      <?php endif; ?>

      <?php get_template_part( 'templates/subscriber'); ?>
    </div>
  </div>
</main>
<?php
get_footer();
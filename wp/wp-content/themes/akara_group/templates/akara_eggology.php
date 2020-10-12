<main class="l-container">
  <div class="l-container__inner">
    <div class="p-product -green">
      <div class="sec-cmn-01 c-product-mv">
        <div class="inner">
          <div class="c-product-heading">
            <div class="c-product-category animation-element slide-left">
              <div class="c-product-category__name">akara Eggology</div>
            </div>
            <?php
              $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
              $post = $wp_query->get_queried_object();
              $pagename = $post->post_name;
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
            <div class="c-product-local-nav animation-element slide-right">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php $slug = basename(get_permalink()); ?>
              <div class="c-product-local-nav__item">
                <a class="c-product-local-nav__link" href="<?php echo get_permalink(); ?>">
                  <div class="c-product-local-nav__link-icon"><img src="/assets/img/recipes/img_akara_egg_green_nav<?php echo ($slug == $pagename)? '_active':''; ?>.svg" alt="Organic"></div>
                  <div class="c-product-local-nav__link-text"><?php echo get_the_title();?></div>
                </a>
              </div>
            <?php endwhile; ?>
            </div>

            <div class="c-product-local-nav__sp animation-element slide-right">
              <select id="select-product-green" name="select-product">
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php $slug = basename(get_permalink()); ?>
                <option value="/product/<?php echo $slug; ?>" <?php echo ($slug == $pagename)? 'selected="selected"':''; ?>><?php echo get_the_title();?></option>
              <?php endwhile; ?>

              </select>
              <div class="c-input-selectbox__display-text"></div><i class="fas fa-chevron-down"></i>
            </div>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
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
              <div class="c-heading-cmn-01">
                <div class="icon">
                  <div class="i-thumb-white"></div>
                </div>How is it good?
              </div>
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
            <div class="c-product-list__box-product-content animation-element slide-top">
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
              <?php if(have_rows('product_detail_rpt')): ?>
              <div class="c-product-list__box-product-content">
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
              <?php if(have_rows('product_certificate_rpt')): ?>
              <div class="c-product-list__box-product-badge">
                <?php if(get_field('product_image')!=''): ?>
                  <?php $product_image = get_field('product_image'); ?>
                <div class="c-product-list__box-product-badge-image-deco"><img src="<?php echo $product_image['url']; ?>" alt="<?php echo $product_image['alt']; ?>"></div>
                <?php endif; ?>
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
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="c-recipes-box">
        <div class="c-wave-green">
          <canvas id="canvas-green"></canvas>
        </div>
        <div class="l-sec-cmn-01 -recipes-top-heading">
          <div class="inner">
            <div class="c-box-heading-center-text">
              <div class="inner">
                <div class="box-heading animation-element slide-top">
                  <div class="title"><span>RECIPIE</span><span class="text-yellow">S</span></div>
                </div>
                <div class="box-text animation-element slide-top">
                  <div class="text">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics. No hormones are used in egg production either!</div>
                </div>
                <div class="c-box-cmn-button animation-element slide-top"><a class="c-button-cmn-01"><span class="text">READ MORE</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
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
                  <!-- Slides-->
                  <div class="swiper-slide">
                    <div class="article-content">
                      <div class="c-shadow"></div>
                      <div class="c-box-card-01 -full">
                        <div class="c-badge__list">
                          <div class="c-badge__item -level">
                            <div class="icon"></div>
                            <div class="text">Easy</div>
                          </div>
                          <div class="c-badge__item -time">
                            <div class="icon"></div>
                            <div class="text">30 mins</div>
                          </div>
                        </div>
                        <div class="c-overlay"></div>
                        <figure class="box-image"><img class="image" src="/assets/img/top/img_recipes_top_02.jpg" alt="Cheesy Breaks"></figure>
                        <div class="box-content">
                          <div class="c-heading-cmn-01">Cheesy Breaks</div>
                          <div class="c-text-cmn-01">Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="article-content">
                      <div class="c-shadow"></div>
                      <div class="c-box-card-01 -full">
                        <div class="c-badge__list">
                          <div class="c-badge__item -level">
                            <div class="icon"></div>
                            <div class="text">Easy</div>
                          </div>
                          <div class="c-badge__item -time">
                            <div class="icon"></div>
                            <div class="text">30 mins</div>
                          </div>
                        </div>
                        <div class="c-overlay"></div>
                        <figure class="box-image"><img class="image" src="/assets/img/top/img_recipes_top_03.jpg" alt="Italian Fried Egg"></figure>
                        <div class="box-content">
                          <div class="c-heading-cmn-01">Italian Fried Egg</div>
                          <div class="c-text-cmn-01">Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="article-content">
                      <div class="c-shadow"></div>
                      <div class="c-box-card-01 -full">
                        <div class="c-badge__list">
                          <div class="c-badge__item -level">
                            <div class="icon"></div>
                            <div class="text">Easy</div>
                          </div>
                          <div class="c-badge__item -time">
                            <div class="icon"></div>
                            <div class="text">30 mins</div>
                          </div>
                        </div>
                        <div class="c-overlay"></div>
                        <figure class="box-image"><img class="image" src="/assets/img/top/img_recipes_top_04.jpg" alt="Rocky Egg Sunrise"></figure>
                        <div class="box-content">
                          <div class="c-heading-cmn-01">Rocky Egg Sunrise</div>
                          <div class="c-text-cmn-01">Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="article-content">
                      <div class="c-shadow"></div>
                      <div class="c-box-card-01 -full">
                        <div class="c-badge__list">
                          <div class="c-badge__item -level">
                            <div class="icon"></div>
                            <div class="text">Easy</div>
                          </div>
                          <div class="c-badge__item -time">
                            <div class="icon"></div>
                            <div class="text">30 mins</div>
                          </div>
                        </div>
                        <div class="c-overlay"></div>
                        <figure class="box-image"><img class="image" src="/assets/img/top/img_recipes_top_01.jpg" alt="Rocky Egg Salad"></figure>
                        <div class="box-content">
                          <div class="c-heading-cmn-01">Rocky Egg Salad</div>
                          <div class="c-text-cmn-01">Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="c-wave-green-bottom">
          <canvas id="canvas-green-bottom"></canvas>
        </div>
      </div>
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
      <div class="l-sec-cmn-01 -box-subscribe">
        <div class="inner">
          <div class="c-box-subscribe animation-element slide-top">
            <div class="item -signup-text">
              <div class="box-sign-up"></div>
            </div>
            <div class="item">
              <div class="box-heading">
                <div class="heading">FOR RECIPES, COUPONS AND OTHER NEWS</div>
              </div>
              <div class="box-form">
                <div class="c-input-row">
                  <input class="c-input -text" type="email" name="email" placeholder="Your E-Mail Address">
                  <div class="c-box-cmn-button">
                    <button class="c-button-cmn-01" type="submit" value=""><span class="text">SUBSCRIBE</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
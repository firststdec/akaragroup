<?php
/**
 * The template for displaying single posts and pages.
 *
 *  * Template Name: Contact Us Template
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

    while ( have_posts() ) : the_post();
      $tags = get_the_terms( get_the_ID(), 'news_category' );
      if ( !empty( $tags ) ){
        $tags = $tags;
      } else {
        $tags = array();
      }
?>
      <main class="l-container">
        <div class="l-container__inner">
          <div class="p-media-detail">
            <div class="c-mv-sub-page">
              <div class="c-mv-sub-page__inner">
                <div class="c-mv-sub-page__box-content">
                <?php if($tags[0]->term_id!= ''): ?>
                  <div class="c-mv-sub-page__catagory"><?php echo $tags[0]->name; ?></div>
                <?php endif; ?>
                  <div class="c-mv-sub-page__heading"><?php echo get_the_title(); ?></div>
                  <div class="c-mv-sub-page__author">
                    <div class="date"><?php echo get_the_date('j F Y')?></div>
                    <div class="separate">|</div>
                    <div class="author">By <?php echo get_the_author_meta('display_name'); ?></div>
                  </div><a class="c-mv-sub-page__anchor-icon js-scroll c-scroll-down-button__static-page" href="#scroll_timeline">
                    <div class="c-scroll-down-line">
                      <div class="line"></div>
                    </div></a>
                </div>
                <div class="c-mv-sub-page__box-image">
                  <figure class="c-mv-sub-page__image-frame">
                    <?php if(get_field('news_mainvisual') != ''): ?>
                      <?php $img = get_field('news_mainvisual'); ?>

                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                    <?php else: ?>
                    <img class="u-no-sp" src="/assets/img/news/img_news_detail_01.png" alt="">
                    <img class="u-no-pc u-no-tb" src="/assets/img/news/img_news_detail_01.png" alt="">
                    <?php endif; ?>
                  </figure>
                </div>
              </div>
            </div>
            <div class="c-media-detail__content" id="scroll_timeline">
              <div class="c-media-detail__content-inner animation-element slide-top">
                <?php if( get_field('news_video') != '' ): ?>
                <div class="p-our-story">
                  <div class="c-box-video__inner">
                    <div class="c-box-video__box-iframe animation-element slide-top">
                      <div class="c-box-video__box-iframe-inner">
                        <!-- <video width="320" height="240" controls>
                          <source src="/assets/videos/our-story-video.mp4" type="video/mp4">
                          <source src="/assets/videos/our-story-video.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                        </video> -->
                        <iframe width="560" height="315" src="<?php echo get_field('news_video'); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endif; ?>
                <?php echo wpautop(get_the_content()); ?>
              </div>
            </div>
            <?php
              $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            ?>
            <div class="c-share-this animation-element slide-top">
              <div class="c-share-this__heading">SHARE THIS:</div>
              <div class="c-list-sns">
                <div class="c-list-sns__item c-share-facebook" data-share="<?php echo $actual_link; ?>"><a class="c-list-sns__link" href="#">
                    <div class="icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                        <text id="_" data-name="" transform="translate(0 26)" fill="#211e1f" font-size="30" font-family="FontAwesome5Brands-Regular, 'Font Awesome 5 Brands'">
                          <tspan x="0" y="0"></tspan>
                        </text>
                      </svg>
                    </div></a></div>
                <div class="c-list-sns__item c-share-twitter" data-share="<?php echo $actual_link; ?>"><a class="c-list-sns__link" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($actual_link)?>" target="_blank">
                    <div class="icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30">
                        <text id="_" data-name="" transform="translate(0 26)" fill="#211e1f" font-size="30" font-family="FontAwesome5Brands-Regular, 'Font Awesome 5 Brands'">
                          <tspan x="0" y="0"></tspan>
                        </text>
                      </svg>
                    </div></a></div>
                <div class="c-list-sns__item c-share-line" data-share="<?php echo $actual_link; ?>"><a class="c-list-sns__link" href="#">
                    <div class="icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="30" viewBox="0 0 28 30">
                        <text id="_" data-name="" transform="translate(1 26)" fill="#211e1f" font-size="30" font-family="FontAwesome5Brands-Regular, 'Font Awesome 5 Brands'">
                          <tspan x="0" y="0"></tspan>
                        </text>
                      </svg>
                    </div></a></div>
              </div>
            </div>

            <?php
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $args = array(
                'post_type' => array('news'),
                'post_status' => 'publish',
                'posts_per_page' => 4,
                'paged' => 1,
                'orderby' => array('menu_order' => 'ASC'),
                'has_password'   => FALSE, // NO PASSWORD POST SHOW
                'post__not_in' => array(get_the_ID()),
                'tax_query' => array(
                  array(
                  'taxonomy' => 'news_category',
                  'field' => 'id',
                  'terms' => $tags[0]->term_id,
                  )
                ),
              );

              $cate_name = $tags[0]->name;
              $the_query = new WP_Query( $args );
              if ( $the_query->have_posts() ) :
            ?>

            <div class="c-relate-post animation-element slide-top">
              <div class="c-relate-post__inner">
                <div class="c-relate-post__heading animation-element slide-top"><?php echo ( is_th_lang() )? $cate_name .' อื่นๆ' : 'Related News, Activity, and Events'; ?></div>
                <div class="c-media-list js-relate-post-sp">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php get_template_part( 'templates/content', 'news' )?>
                <?php endwhile; ?>
                </div>
              </div>
            </div>
                <?php wp_reset_query(); ?>
            <?php endif; ?>
            <?php get_template_part( 'templates/subscriber'); ?>

          </div>
        </div>
      </main>
<?php
		endwhile;
	endif;
?>

<?php get_footer(); ?>

<?php
/**
 * The main template file
 *
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
$obj = get_queried_object();
?>
  <main class="l-container">
    <div class="l-container__inner">
      <div class="p-media">
        <div class="c-hero-media">
          <div class="c-hero-media__inner -news">
            <div class="c-hero-media__text">
              <div class="c-hero-media__heading">News, Activity, and Events</div>
              <div class="c-hero-media__sub-text">Follow us for all the latest AKARA news, photos, videos, events coverage, new products, and much more.</div>
            </div>
          </div>
        </div>
        <?php
          $args = array( 
            'hide_empty' => 0,
          );
          $cate = 'news_category';

          $terms = get_terms( $cate, $args );
          // print "<pre>"; print_r($terms);
        ?>
        <div class="c-media">
          <?php
            if(ICL_LANGUAGE_CODE == 'en'){
              $lang_url = '/en';
            } elseif (ICL_LANGUAGE_CODE == 'th') {
              $lang_url = '';
            }
          ?>
          <div class="c-bg-wave-white-solid">
            <canvas id="canvas-white-top"></canvas>
          </div>
          <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ): ?>
          <nav class="c-media-category u-no-sp">
            <div class="c-media-category__list">
              <div class="c-media-category__item"><a class="c-media-category__link" href="<?php echo $lang_url; ?>/news/">
                  <div class="text u-ml-0">All</div></a></div>
              <?php foreach ( $terms as $term ) : ?>
                <?php if($term->slug == 'news') : ?>
                <div class="c-media-category__item<?php echo ($obj->term_id == $term->term_id)? ' is-active':''; ?>"><a class="c-media-category__link" href="<?php echo $lang_url; ?>/news/<?php echo $term->slug; ?>">
                  <div class="icon -press">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16">
                      <text id="_" data-name="" transform="translate(9 14)" fill="#777" font-size="16" font-family="FontAwesome5Free-Solid, 'Font Awesome 5 Free'">
                        <tspan x="-9" y="0"></tspan>
                      </text>
                    </svg>
                  </div>
                  <div class="text"><?php echo $term->name; ?></div></a></div>
                <?php elseif($term->slug == 'activities'): ?>
                <div class="c-media-category__item<?php echo ($obj->term_id == $term->term_id)? ' is-active':''; ?>"><a class="c-media-category__link" href="<?php echo $lang_url; ?>/news/<?php echo $term->slug; ?>">
                  <div class="icon -print">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" viewBox="0 0 14 17">
                      <text id="_" data-name="" transform="translate(7 14)" fill="#777" font-size="16" font-family="FontAwesome5Free-Solid, 'Font Awesome 5 Free'">
                        <tspan x="-6.5" y="0"></tspan>
                      </text>
                    </svg>
                  </div>
                  <div class="text"><?php echo $term->name; ?></div></a></div>
                <?php elseif($term->slug == 'events'): ?>
                <div class="c-media-category__item<?php echo ($obj->term_id == $term->term_id)? ' is-active':''; ?>"><a class="c-media-category__link" href="<?php echo $lang_url; ?>/news/<?php echo $term->slug; ?>">
                  <div class="icon -tv">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" viewBox="0 0 22 18">
                      <text id="_" data-name="" transform="translate(11 15)" fill="#777" font-size="16" font-family="FontAwesome5Free-Solid, 'Font Awesome 5 Free'">
                        <tspan x="-10" y="0"></tspan>
                      </text>
                    </svg>
                  </div>
                  <div class="text"><?php echo $term->name; ?></div></a></div>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
          </nav>
          <div class="c-media-category-dropdown u-no-tb u-no-pc">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8">
              <path id="Polygon_2" data-name="Polygon 2" d="M6,0l6,8H0Z" transform="translate(12 8) rotate(180)" fill="#777"></path>
            </svg>
            <select class="c-media-category-select" name="category">
              <option value="<?php echo $lang_url; ?>/news/">All</option>
              <?php foreach ( $terms as $term ) : ?>
              <option value="<?php echo $lang_url; ?>/news/<?php echo $term->slug; ?>"<?php echo ($obj->term_id == $term->term_id)? ' selected':''; ?>><?php echo $term->name; ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <?php endif; ?>

          <?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
							'post_type' => array('news'),
							'post_status' => 'publish',
							'posts_per_page' => EVENT_POSTPERPAGE,
							'paged' => 1,
							'orderby' => array('date' => 'DESC'),
              'has_password'   => FALSE, // NO PASSWORD POST SHOW
              'tax_query' => array(
                array(
                'taxonomy' => 'news_category',
                'field' => 'id',
                'terms' => $obj->term_id,
                )
              ),
						);
						$the_query = new WP_Query( $args );
						if ( $the_query->have_posts() ) :
          ?>
          <div class="c-media-list animation-element slide-top">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php get_template_part( 'templates/content', 'news' )?>
            <?php endwhile; ?>
          </div>
          <?php endif; ?>
          <?php if (  $the_query->max_num_pages > 1 ): ?>
          <div class="c-box-cmn-button animation-element slide-top --center">
            <div class="loading" style="display: none;">Loading...</div>
            <div class="c-button-cmn-01 --border-base akara_loadmore_dynamic" data-post-type="news"><span class="text">SEE MORE</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></div></div>
          <?php
            wp_reset_query();
            endif;
          ?>
        </div>
        <?php get_template_part( 'templates/subscriber'); ?>
      </div>
    </div>
  </main>
<?php
get_footer();

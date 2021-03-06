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
          <div class="c-hero-media__inner">
            <div class="c-hero-media__text">
            <div class="c-hero-media__heading">Media Center</div>
              <div class="c-hero-media__sub-text">Follow us for all the latest AKARA news, photos, videos, event coverage, new products, and much more.</div>
            </div>
          </div>
        </div>
        <?php
          $args = array(
            'hide_empty' => 0,
          );
          $cate = 'media_category';

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
          <div id="nav">
            <nav class="c-media-category u-no-sp">
              <div class="c-media-category__list">
                <div class="c-media-category__item"><a class="c-media-category__link" href="<?php echo $lang_url; ?>/media/#nav">
                    <div class="text u-ml-0">All</div></a></div>
                <?php foreach ( $terms as $term ) : ?>
                  <?php if($term->slug == 'article') : ?>
                  <div class="c-media-category__item<?php echo ($obj->term_id == $term->term_id)? ' is-active':''; ?>"><a class="c-media-category__link" href="<?php echo $lang_url; ?>/media/<?php echo $term->slug; ?>/#nav">
                    <div class="icon -press">
                      <svg xmlns="http://www.w3.org/2000/svg" width="13" height="17" viewBox="0 0 13 17">
                        <text id="ico_article" transform="translate(6 14)" fill="#777" font-size="16" font-family="FontAwesome5Free-Solid, 'Font Awesome 5 Free'">
                          <tspan x="-6" y="0"></tspan>
                        </text>
                      </svg>
                    </div>
                    <div class="text"><?php echo $term->name; ?></div></a></div>
                  <?php elseif($term->slug == 'press-release'): ?>
                  <div class="c-media-category__item<?php echo ($obj->term_id == $term->term_id)? ' is-active':''; ?>"><a class="c-media-category__link" href="<?php echo $lang_url; ?>/media/<?php echo $term->slug; ?>/#nav">
                    <div class="icon -print">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17">
                        <text id="ico_press" transform="translate(9 14)" fill="#777" font-size="16" font-family="FontAwesome5Free-Solid, 'Font Awesome 5 Free'">
                          <tspan x="-8" y="0"></tspan>
                        </text>
                      </svg>
                    </div>
                    <div class="text"><?php echo $term->name; ?></div></a></div>
                  <?php elseif($term->slug == 'print-media'): ?>
                  <div class="c-media-category__item<?php echo ($obj->term_id == $term->term_id)? ' is-active':''; ?>"><a class="c-media-category__link" href="<?php echo $lang_url; ?>/media/<?php echo $term->slug; ?>/#nav">
                    <div class="icon -tv">
                      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16">
                        <text id="ico_print" transform="translate(9 14)" fill="#777" font-size="16" font-family="FontAwesome5Free-Solid, 'Font Awesome 5 Free'">
                          <tspan x="-9" y="0"></tspan>
                        </text>
                      </svg>
                    </div>
                    <div class="text"><?php echo $term->name; ?></div></a></div>
                  <?php elseif($term->slug == 'tv-commercial'): ?>
                  <div class="c-media-category__item<?php echo ($obj->term_id == $term->term_id)? ' is-active':''; ?>"><a class="c-media-category__link" href="<?php echo $lang_url; ?>/media/<?php echo $term->slug; ?>/#nav">
                    <div class="icon -tv">
                      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="17" viewBox="0 0 21 17">
                        <text id="ico_tv" transform="translate(10 14)" fill="#777" font-size="16" font-family="FontAwesome5Free-Solid, 'Font Awesome 5 Free'">
                          <tspan x="-10" y="0"></tspan>
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
              <select class="c-media-category-select js-category-change" name="category">
                <option value="<?php echo $lang_url; ?>/media/#nav">All</option>
                <?php foreach ( $terms as $term ) : ?>
                <option value="<?php echo $lang_url; ?>/media/<?php echo $term->slug; ?>/#nav"<?php echo ($obj->term_id == $term->term_id)? ' selected':''; ?>><?php echo $term->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <?php endif; ?>

          <?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
							'post_type' => array('media'),
							'post_status' => 'publish',
							'posts_per_page' => EVENT_POSTPERPAGE,
							'paged' => 1,
							'orderby' => array('date' => 'DESC'),
              'has_password'   => FALSE, // NO PASSWORD POST SHOW
              'tax_query' => array(
                array(
                'taxonomy' => 'media_category',
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
            <?php get_template_part( 'templates/content', 'media' )?>
            <?php endwhile; ?>
          </div>
          <?php endif; ?>
          <?php if (  $the_query->max_num_pages > 1 ): ?>
          <div class="c-box-cmn-button animation-element slide-top --center">
            <div class="loading" style="display: none;">Loading...</div>
            <div class="c-button-cmn-01 --border-base akara_loadmore_dynamic" data-post-type="media"><span class="text">SEE MORE</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></div></div>
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

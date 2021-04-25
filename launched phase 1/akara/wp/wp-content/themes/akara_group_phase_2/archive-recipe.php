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

  // CHECK URL
  $root_url = '';
  if( PRODUCTION ) {
    $root_url = '/akara';
  }
?>
  <?php
    if( is_th_lang() ) {
      $mv_heading = 'เมนูสูตรเด็ด ฉบับอัครา';
      $mv_subcontent = '';
      $mv_content = 'เติมคุณค่าในทุกมื้ออาหารไปกับเมนูไข่สูตรเด็ด หลากรสชาติ<br>ทำตามง่าย พร้อมวิธีทำ อร่อย สะดวก  ที่ช่วยสร้างสีสันให้กับมื้อโปรดของคุณ';
    } elseif( !is_th_lang() ) {
      $mv_heading = 'Akara Recipes';
      $mv_subcontent = 'Make favorite recipes with our products.';
      $mv_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscin.';
    }
  ?>
  <main class="l-container">
    <div class="l-container__inner">
      <div class="p-recipes">
        <div class="c-mv-sub-page">
          <div class="c-mv-sub-page__inner">
            <div class="c-mv-sub-page__box-content">
              <div class="c-mv-sub-page__heading"><?php echo $mv_heading; ?></div>
              <!-- <div class="c-mv-sub-page__sub-heading">Make favorite recipes with our products.</div> -->
              <div class="c-mv-sub-page__text"><?php echo $mv_content; ?></div><a class="c-mv-sub-page__anchor-icon js-scroll c-scroll-down-button__static-page" href="#scroll_timeline">
                <div class="c-scroll-down-line"></div></a>
            </div>
            <div class="c-mv-sub-page__box-image">
              <figure class="c-mv-sub-page__image-frame"><img src="/assets/img/recipes/img_mv_recipes.png" alt=""></figure>
            </div>
          </div>
        </div>
        <?php
          $args = array(
            'hide_empty' => 0,
          );
          $cate = 'recipe_category';

          $terms = get_terms( $cate, $args );
          // print "<pre>"; print_r($terms);

          if( is_th_lang() ) {
            $sub_heading = 'เลือกเมนูโปรดของคุณ';
            $sub_content = 'เปลี่ยนเมนูธรรมดาให้กลายเป็นเมนูสุดสร้างสรรค์ ด้วยสารพัดเคล็ดลับเมนูไข่จาก อัครา ที่จะช่วยเปลี่ยนเมนูธรรมดาให้กลายเป็นเมนูสุดพิเศษประจำบ้าน';
          } elseif( !is_th_lang() ){
            $sub_heading = 'Choose your favorite menu';
            $sub_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim';
          }
        ?>
        <div class="c-box-recipes">
          <div class="c-heading-box-egg animation-element slide-top" id="scroll_timeline">
            <div class="c-heading-egg">
              <div class="c-heading-egg__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="28.664" height="19.109" viewBox="0 0 28.664 19.109">
                  <g id="ico_dish" transform="translate(-262 -548.134)">
                    <path id="Path_968" data-name="Path 968" d="M339.821,548.134a9.555,9.555,0,1,0,9.555,9.555,9.566,9.566,0,0,0-9.555-9.555Zm0,17.915a8.36,8.36,0,1,1,8.36-8.36,8.37,8.37,0,0,1-8.36,8.36Zm0,0" transform="translate(-63.489)" fill="#fff"></path>
                    <path id="Path_969" data-name="Path 969" d="M372.161,582.864a.6.6,0,0,0-.6-.6,7.174,7.174,0,0,0-7.166,7.166.6.6,0,0,0,1.195,0,5.979,5.979,0,0,1,5.972-5.972.6.6,0,0,0,.6-.6Zm0,0" transform="translate(-95.232 -31.744)" fill="#fff"></path>
                    <path id="Path_970" data-name="Path 970" d="M458.863,682.7a.6.6,0,1,0,0,1.194,7.174,7.174,0,0,0,7.166-7.166.6.6,0,1,0-1.194,0,5.978,5.978,0,0,1-5.972,5.972Zm0,0" transform="translate(-182.531 -119.043)" fill="#fff"></path>
                    <path id="Path_971" data-name="Path 971" d="M623.384,548.134a2.989,2.989,0,0,0-2.986,2.986v6.569a1.793,1.793,0,0,0,1.792,1.791h.6v7.166a.6.6,0,0,0,1.194,0V548.731a.6.6,0,0,0-.6-.6Zm-.6,10.152h-.6a.6.6,0,0,1-.6-.6V551.12a1.8,1.8,0,0,1,1.194-1.689v8.855Zm0,0" transform="translate(-333.317)" fill="#fff"></path>
                    <path id="Path_972" data-name="Path 972" d="M266.777,548.731a.6.6,0,1,0-1.194,0v5.374a1.178,1.178,0,0,1-.6,1.011v-6.385a.6.6,0,1,0-1.194,0v6.385a1.178,1.178,0,0,1-.6-1.011v-5.374a.6.6,0,1,0-1.194,0v5.374a2.386,2.386,0,0,0,1.792,2.3v10.237a.6.6,0,0,0,1.194,0V556.409a2.386,2.386,0,0,0,1.791-2.3Zm0,0" fill="#fff"></path>
                  </g>
                </svg>
              </div>
              <div class="c-heading-egg__text"><?php echo $sub_heading; ?></div>
            </div>
            <div class="c-heading-egg-content -lg"><?php echo $sub_content; ?></div>
          </div>
          <div class="c-media">
          <?php
            if( !is_th_lang() ){
              $lang_url = '/en';
              $all_recipes = 'All Recipes';
            } elseif ( is_th_lang() ) {
              $lang_url = '';
              $all_recipes = 'เมนูทั้งหมด';
            }
          ?>
          <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ): ?>
          <div id="nav">
            <nav class="c-media-category u-no-sp animation-element slide-top">
              <div class="c-media-category__list">
                <div class="c-media-category__item is-active"><a class="c-media-category__link" href="<?php echo $root_url; ?><?php echo $lang_url; ?>/recipe/#nav">
                    <div class="text"><?php echo $all_recipes; ?></div></a></div>
                <?php foreach ( $terms as $term ) : ?>
                <div class="c-media-category__item"><a class="c-media-category__link" href="<?php echo $root_url; ?><?php echo $lang_url; ?>/recipe/<?php echo $term->slug; ?>/#nav">
                    <div class="text"><?php echo $term->name; ?></div></a></div>
                <?php endforeach; ?>
              </div>
            </nav>
            <div class="c-media-category-dropdown u-no-tb u-no-pc animation-element slide-top">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8">
                <path id="Polygon_2" data-name="Polygon 2" d="M6,0l6,8H0Z" transform="translate(12 8) rotate(180)" fill="#777"></path>
              </svg>
              <select class="c-media-category-select js-category-change" name="category">
                <option value="<?php echo $root_url; ?><?php echo $lang_url; ?>/recipe/#nav"><?php echo $all_recipes; ?></option>
                <?php foreach ( $terms as $term ) : ?>
                <option value="<?php echo $root_url; ?><?php echo $lang_url; ?>/recipe/<?php echo $term->slug; ?>/#nav"><?php echo $term->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <?php endif; ?>
            <?php
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $args = array(
                'post_type' => array('recipe'),
                'post_status' => 'publish',
                'posts_per_page' => EVENT_POSTPERPAGE,
                'paged' => 1,
                'orderby' => array('menu_order' => 'ASC'),
                'has_password'   => FALSE, // NO PASSWORD POST SHOW
              );
              $the_query = new WP_Query( $args );
              if ( $the_query->have_posts() ) :
            ?>
            <div class="c-media-list -recipes animation-element slide-top">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php get_template_part( 'templates/content', 'recipe' )?>
            <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <?php if (  $the_query->max_num_pages > 1 ): ?>
              <div class="c-box-cmn-button animation-element slide-top --center">
                <div class="loading" style="display: none;">Loading...</div>
                <div class="c-button-cmn-01 --border-base akara_loadmore_dynamic -is-active" data-post-type="recipe"><span class="text"><?php echo (is_th_lang())? 'อ่านเพิ่มเติม' : 'SEE MORE'; ?></span><span class="arrow"><i class="fa fa-arrow-right"></i></span></div>
              </div>
            <?php
              wp_reset_query();
              endif;
            ?>
          </div>
        </div>
        <?php get_template_part( 'templates/subscriber'); ?>
      </div>
    </div>
  </main>
<?php
get_footer();

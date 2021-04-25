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
      $tags = get_the_terms( get_the_ID(), 'recipe_category' );
      if ( !empty( $tags ) ){
        $tags = $tags;
      } else {
        $tags = array();
      }

      // Load ACF DATA
      $recipe_mainvisual = get_field('recipe_mainvisual');
      $recipe_thumbnail = get_field('recipe_thumbnail');
      $recipe_short_description = get_field('recipe_short_description');
      $recipe_cooking_level = get_field('recipe_cooking_level');
      $recipe_cooking_dish = get_field('recipe_cooking_dish');
      $recipe_cooking_serve = get_field('recipe_cooking_serve');
      $recipe_cooking_meal = get_field('recipe_cooking_meal');
      $recipe_cooking_time = get_field('recipe_cooking_time');
      $recipe_download_pdf = get_field('recipe_download_pdf');
      $recipe_video = get_field('recipe_video');
      $recipe_video_content = get_field('recipe_video_content');
      $recipe_information_table_title = get_field('recipe_information_table_title');
      $recipe_information_table_detail_rpt = get_field('recipe_information_table_detail_rpt');
      $recipe_ingredients_table_title = get_field('recipe_ingredients_table_title');
      $recipe_ingredients_table_detail_rpt = get_field('recipe_ingredients_table_detail_rpt');
      $cooking_step_rpt = get_field('cooking_step_rpt');
?>
      <main class="l-container">
        <div class="l-container__inner">
          <div class="p-recipe-detail">
            <div class="c-mv-recipe">
              <div class="c-mv-recipe__overlay"></div>
              <?php if($recipe_mainvisual['url']!=''): ?>
              <div class="c-mv-recipe__image"><img class="image" src="<?php echo $recipe_mainvisual['url']; ?>"></div>
              <?php endif; ?>
            </div>
            <div class="c-box-recipe-heading">
              <div class="c-box-recipe-heading__inner">
                <div class="c-recipe-heading-01"><?php echo get_the_title(); ?></div>
                <div class="c-recipes-tag-list">
                  <?php if($recipe_cooking_level!='' && $recipe_cooking_level != 'None'): ?>
                  <div class="c-recipes-tag-list__item">
                    <div class="icon"><img src="/assets/img/recipes/detail/ico_chief.svg" alt=""></div>
                    <div class="text"><?php echo ( is_th_lang() )? 'ระดับ ':''; ?><?php echo $recipe_cooking_level;?></div>
                  </div>
                  <?php endif; ?>
                  <?php if($recipe_cooking_serve!=''): ?>
                  <div class="c-recipes-tag-list__item">
                    <div class="icon"><img src="/assets/img/recipes/detail/ico_dish.svg" alt=""></div>
                    <div class="text"><?php echo $recipe_cooking_serve; ?></div>
                  </div>
                  <?php endif; ?>
                  <?php if($recipe_cooking_meal!='' && $recipe_cooking_meal!='None'): ?>
                  <div class="c-recipes-tag-list__item">
                    <div class="icon"><img src="/assets/img/recipes/detail/ico_meal.svg" alt=""></div>
                    <div class="text"><?php echo $recipe_cooking_meal?></div>
                  </div>
                  <?php endif; ?>
                  <?php if($recipe_cooking_time!='' && $recipe_cooking_time!='None'): ?>
                  <div class="c-recipes-tag-list__item">
                    <div class="icon"><img src="/assets/img/recipes/detail/ico_time.svg" alt=""></div>
                    <div class="text"><?php echo $recipe_cooking_time?></div>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
              <?php
                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
              ?>
              <div class="c-box-recipe-heading__inner">
                <div class="c-box-share-download<?php echo ($recipe_download_pdf['url'] == '')? ' -single' : ''; ?>"><a class="c-button-middle c-button--orange -btn-recipes c-share-facebook" data-share="<?php echo $actual_link; ?>" href="#">
                  <div class="c-button__text -button"><i class="fab fa-facebook"></i><i class="fab fa-facebook fa--bottom"></i>SHARE <span class="u-no-sp">RECIPES</span></div></a>
                  <?php if($recipe_download_pdf['url']!=''): ?>
                  <a class="c-button-middle c-button--orange -btn-recipes" href="<?php echo $recipe_download_pdf['url'];?>" target="_blank">
                  <div class="c-button__text -button"><i class="fa fas fa-file-pdf"></i><i class="fa fas fa-file-pdf fa--bottom"></i>DOWNLOAD <span class="u-no-sp">PDF</span></div></a>
                  <?php endif; ?>
                  </div>
              </div>
            </div>
            <div class="c-box-recipe-content">
              <div class="c-box-recipe-content__inner">
              <?php if(have_rows('cooking_step_rpt')): ?>
                <div class="c-box-local-fix-nav js-fix-nav">
                  <div class="c-local-fix-nav">
                    <div class="heading"><?php echo get_the_title(); ?></div>
                    <div class="list-step">
                      <?php $i = 1; ?>
                    <?php while( have_rows('cooking_step_rpt') ) : the_row(); ?>
                      <a class="list-step__item js-scroll" href="#step-<?php echo $i; ?>">
                        <span><?php echo ( is_th_lang() )? 'ขั้นตอนที่':'Step'; ?> <?php echo $i; ?></span>
                      </a>
                      <?php $i++; ?>
                    <?php endwhile; ?>
                    </div>
                  </div>
                </div>
                <div class="c-box-local-fix-nav-select">
                  <div class="c-media-category-dropdown u-no-tb u-no-pc">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8">
                      <path id="Polygon_2" data-name="Polygon 2" d="M6,0l6,8H0Z" transform="translate(12 8) rotate(180)" fill="#777"></path>
                    </svg>
                    <select class="c-media-category-select" name="category">
                      <option value=""><?php echo ( is_th_lang() )? 'เลือกขั้นตอน':'Choose process'; ?></option>
                      <?php $i = 1; ?>
                      <?php while( have_rows('cooking_step_rpt') ) : the_row(); ?>
                      <option value="step-<?php echo $i; ?>"><?php echo ( is_th_lang() )? 'ขั้นตอนที่':'Step'; ?> <?php echo $i; ?></option>
                      <?php $i++; ?>
                      <?php endwhile; ?>
                    </select>
                  </div>
                </div>
              <?php endif; ?>
                <div class="c-box-ingredient">
                  <?php if( have_rows('recipe_information_table_detail_rpt') || get_the_content() != '' ): ?>
                  <div class="c-box-ingredient__inner">
                    <?php if(get_field('recipe_information_table_title')!=''): ?>
                    <div class="heading-egg">
                      <div class="icon-egg">
                        <div class="i-list-white"></div>
                      </div>
                      <div class="text"><?php echo get_field('recipe_information_table_title'); ?></div>
                    </div>
                    <?php endif; ?>

                    <?php if( have_rows('recipe_information_table_detail_rpt') ) : ?>
                    <table class="c-table-ingrediant-01">
                      <tr>
                        <td>Name</td>
                        <td> </td>
                        <td>%DV</td>
                      </tr>
                      <?php while( have_rows('recipe_information_table_detail_rpt') ) : the_row(); ?>
                      <tr>
                        <td><?php echo (get_sub_field('recipe_information_table_detail_rpt_col_1')!='')? get_sub_field('recipe_information_table_detail_rpt_col_1'):''; ?></td>
                        <td><?php echo (get_sub_field('recipe_information_table_detail_rpt_col_2')!='')? get_sub_field('recipe_information_table_detail_rpt_col_2'):''; ?></td>
                        <td><?php echo (get_sub_field('recipe_information_table_detail_rpt_col_2')!='')? get_sub_field('recipe_information_table_detail_rpt_col_3'):''; ?></td>
                      </tr>
                      <?php endwhile; ?>
                    </table>
                    <?php endif; ?>

                    <?php if( get_the_content() != '') : ?>
                    <div class="heading-egg">
                      <div class="icon-egg">
                        <div class="i-list-white"></div>
                      </div>
                      <div class="text"><?php echo (is_th_lang())? 'ข้อมูลเมนูอาหาร':'Menu Information'; ?></div>
                    </div>
                    <div class="box-content u-mt-30"><?php the_content(); ?></div>
                    <?php endif; ?>
                  </div>
                  <?php endif; // if( have_rows('recipe_information_table_detail_rpt') ): ?>


                  <?php if( have_rows('recipe_ingredients_table_detail_rpt') ): ?>
                  <div class="c-box-ingredient__inner -bg-cream">
                    <?php if(get_field('recipe_ingredients_table_title')!=''): ?>
                    <div class="heading-egg">
                      <div class="icon-egg">
                        <div class="i-clipboard"></div>
                      </div>
                      <div class="text"><?php echo get_field('recipe_ingredients_table_title'); ?></div>
                    </div>
                    <?php endif; ?>
                    <table class="c-table-ingrediant-02">
                    <?php while( have_rows('recipe_ingredients_table_detail_rpt') ) : the_row(); ?>
                      <?php if( get_sub_field('recipe_ingredients_table_detail_rpt_heading')!='' ): ?>
                      <tr>
                        <th colspan="2"><?php echo get_sub_field('recipe_ingredients_table_detail_rpt_heading'); ?></th>
                      </tr>
                      <?php endif; ?>
                      <tr>
                        <td><?php echo (get_sub_field('recipe_ingredients_table_detail_rpt_col_1')!='')? get_sub_field('recipe_ingredients_table_detail_rpt_col_1'):''; ?></td>
                        <td><?php echo (get_sub_field('recipe_ingredients_table_detail_rpt_col_2')!='')? get_sub_field('recipe_ingredients_table_detail_rpt_col_2'):''; ?></td>
                      </tr>
                    <?php endwhile; ?>
                    </table>
                  </div>
                  <?php endif; // if( have_rows('recipe_ingredients_table_detail_rpt') ): ?>
                </div>
                <?php if(have_rows('cooking_step_rpt')): ?>
                <?php $i = 1; ?>
                <div class="c-step-cook-list">
                <?php while( have_rows('cooking_step_rpt') ) : the_row(); ?>
                  <div class="c-step-cook-list__item" id="step-<?php echo $i; ?>">
                    <div class="c-step-egg"><span class="small"><?php echo ( is_th_lang() )? 'ขั้นตอนที่':'Step'; ?></span><span class="number"><?php echo $i; ?></span></div>
                    <div class="c-step-detail"><?php echo get_sub_field('cooking_step_rpt_detail'); ?></div>
                  </div>
                  <?php $i++; ?>
                <?php endwhile; ?>
                </div>
                <?php endif; // if(have_rows('cooking_step_rpt')):?>
                <?php if($recipe_video!=''): ?>
                <div class="c-recipes-video">
                  <iframe width="560" height="315" src="<?php echo $recipe_video; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
                <?php endif; // if($recipe_video!=''): ?>
                <?php if($recipe_video_content!=''): ?>
                <div class="c-recipes-video-text"><?php echo $recipe_video_content; ?></div>
                <?php endif; ?>
                <div class="c-box-share-download -bottom<?php echo ($recipe_download_pdf['url'] == '')? ' -single' : ''; ?>">
                  <a class="c-button-middle c-button--orange -btn-recipes c-share-facebook" href="#" data-share="<?php echo $actual_link; ?>">
                    <div class="c-button__text -button"><i class="fab fa-facebook"></i><i
                        class="fab fa-facebook fa--bottom"></i>SHARE <span class="u-no-sp">RECIPES</span></div>
                  </a>
                  <?php if($recipe_download_pdf['url']!=''): ?>
                  <a class="c-button-middle c-button--orange -btn-recipes" href="<?php echo $recipe_download_pdf['url']; ?>" target="_blank">
                    <div class="c-button__text -button"><i class="fa fas fa-file-pdf"></i><i
                        class="fa fas fa-file-pdf fa--bottom"></i>DOWNLOAD <span class="u-no-sp">PDF</span></div>
                  </a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <?php
              $current_post_id = get_the_ID();
              $args = array(
                'post_type' => array('recipe'),
                'post_status' => 'publish',
                'orderby'=> 'menu_order',
                'order' => 'ASC',
                'posts_per_page' => -1,
                );
                $the_query = new WP_Query( $args );

                $ids = array();
                if ( $the_query->have_posts() ){
                  while ( $the_query->have_posts() ) : $the_query->the_post();
                    $ids[] = get_the_ID();
                  endwhile;
                }
                //print "<pre>"; print_r($ids);
                // get and echo previous and next post in the same taxonomy
                $thisindex = array_search( $current_post_id, $ids);
                $firstPost = $ids[count($ids) - 1];
                $previd = $ids[$thisindex+1];
                $nextid = $ids[$thisindex-1];
              // 	echo '=>'.$previd;
              // 	echo '=>'.$current_post_id;
              // 	echo '=>'.$previd;
              // if(get_next_post() || get_previous_post()) {
              // $prevpost = get_adjacent_post(false, '', true); //前の記事
              // $nextpost = get_adjacent_post(false, '', false); //次の記事
            ?>
            <?php // if(!empty($nextid) || !empty($previd)): ?>
            <?php if(!empty($nextid)): ?>
            <a class="c-box-next-recipes" href="<?php echo esc_url(get_the_permalink($nextid)); ?>">
              <div class="c-box-next-recipes__inner">
                <div class="nav-text">Next recipe</div>
                <div class="heading"><?php echo get_the_title($nextid); ?></div>
                <?php
                  $next_recipe_mainvisual = get_field('recipe_mainvisual', $nextid);
                ?>
                <?php if($next_recipe_mainvisual['url'] !=''): ?>
                <div class="box-image">
                  <div class="icon-down"></div>
                  <figure class="image"><img src="<?php echo $next_recipe_mainvisual['url']; ?>" alt=""></figure>
                </div>
                <?php endif; ?>
              </div>
            </a>
            <?php else: ?>
            <a class="c-box-next-recipes" href="<?php echo esc_url(get_the_permalink($firstPost)); ?>">
              <div class="c-box-next-recipes__inner">
                <div class="nav-text">Next recipe</div>
                <div class="heading"><?php echo get_the_title($firstPost); ?></div>
                <?php
                  $next_recipe_mainvisual = get_field('recipe_mainvisual', $firstPost);
                ?>
                <?php if($next_recipe_mainvisual['url'] !=''): ?>
                <div class="box-image">
                  <div class="icon-down"></div>
                  <figure class="image"><img src="<?php echo $next_recipe_mainvisual['url']; ?>" alt=""></figure>
                </div>
                <?php endif; ?>
              </div>
            </a>
            <?php endif; ?>

            <div class="u-no-pc u-no-tb">
            <?php get_template_part( 'templates/subscriber'); ?>
            </div>
           
          </div>
        </div>
      </main>
<?php
		endwhile;
	endif;
?>

<?php get_footer(); ?>

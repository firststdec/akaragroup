<?php
/**
 * The template for displaying single posts and pages.
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

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();
?>
      <main class="l-container">
        <div class="l-container__inner">
          <div class="p-search" style="min-height: 400px;">
            <div class="c-search">
              <div class="c-heading-02 u-ta-center"><?php echo get_the_title(); ?></div>
              <div class="c-confirm-text u-mt-30"><?php echo get_the_content(); ?></div>
            </div>
            <?php get_template_part( 'templates/subscriber'); ?>
          </div>
        </div>
      </main>
<?php
		}
	}

	?>


<?php get_footer(); ?>

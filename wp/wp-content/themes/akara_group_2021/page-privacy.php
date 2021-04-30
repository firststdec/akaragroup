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
          <div class="p-privacy">
            <?php echo get_the_content(); ?>
          </div>
          <?php get_template_part( 'templates/subscriber'); ?>
        </div>
      </main>
<?php
		}
	}

	?>


<?php get_footer(); ?>

<?php
/**
 * The template for displaying single posts and pages.
 *
 * Template Name: FAQ Template
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

		while ( have_posts() ) :
			the_post();
?>
	<main class="l-container">
		<div class="l-container__inner">
			<div class="p-faq">
				<div class="c-hero-faq">
					<div class="c-hero-faq__inner">
						<div class="c-hero-faq__text">
						<?php if(ICL_LANGUAGE_CODE == 'en'): ?>
							<div class="c-hero-faq__heading">FAQ</div>
						<?php elseif(ICL_LANGUAGE_CODE == 'th'): ?>
							<div class="c-hero-faq__heading">FAQ</div>
						<?php endif; ?>
							<?php if(get_field('faq_main_visual_text')!=''): ?>
							<div class="c-hero-faq__sub-text"><?php echo get_field('faq_main_visual_text'); ?></div>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="sec-cmn-01 c-faq">
					<div class="c-bg-wave-white-solid">
						<canvas id="canvas-white-top"></canvas>
					</div>
					<div class="c-faq__inner">
						<?php
							// Check rows exists.
							if( have_rows('faq_rpt') ):
						?>
						<div class="c-faq__list js-faq-accordian">
							<?php
								// Loop through rows.
								while( have_rows('faq_rpt') ) : the_row();
							?>
							<div class="c-faq__item animation-element slide-top">
								<div class="c-faq__box-heading">
									<div class="c-faq__heading"><?php echo get_sub_field('faq_heading'); ?></div>
									<div class="c-faq__icon"><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-down"></i></div>
								</div>
								<div class="c-faq__box-text">
									<div class="c-faq__text"><?php echo get_sub_field('faq_content'); ?></div>
								</div>
							</div>
							<?php endwhile; ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<?php get_template_part( 'templates/subscriber'); ?>
			</div>
		</div>
	</main>
<?php
		endwhile;
	endif;
?>

<?php get_footer(); ?>

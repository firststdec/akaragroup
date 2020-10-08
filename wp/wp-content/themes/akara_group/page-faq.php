<?php
/**
 * The template for displaying single posts and pages.
 *
 * Template Name: Sub Page Template
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

<?php
		endwhile;
	endif;
?>

<?php get_footer(); ?>

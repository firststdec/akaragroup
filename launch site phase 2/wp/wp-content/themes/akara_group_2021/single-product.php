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
  if(ICL_LANGUAGE_CODE == 'en'){
    $lang_url = '/en';
  } elseif (ICL_LANGUAGE_CODE == 'th') {
    $lang_url = '';
  }
  // CHECK URL
  $root_url = '';
  if( PRODUCTION ) {
    $root_url = '/akara';
  }
?>
<?php

	if ( have_posts() ) :

		while ( have_posts() ) :
      the_post();
      $terms = get_the_terms( $post->ID, 'product_category' );

      if ( $terms && ! is_wp_error( $terms ) ){
        foreach ( $terms as $term ) {
          $term_links[] = $term->name;
        }
      }

      // print "<pre>"; print_r($term_links);

      if(in_array('akara', $term_links)) {
        get_template_part( 'templates/akara_egg' );
      } elseif(in_array('AKARA EGGOLOGY', $term_links)) {
        get_template_part( 'templates/akara_eggology' );
      } elseif(in_array('AKARA ISE', $term_links)) {
        get_template_part( 'templates/akara_ise' );
      }
?>

<?php
		endwhile;
	endif;
?>

<?php get_footer(); ?>

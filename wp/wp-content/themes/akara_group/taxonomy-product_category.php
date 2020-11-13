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
?>
	<?php

    // print_r( get_queried_object() );
    $term_obj = get_queried_object();

    if($term_obj->parent == 3 || $term_obj->parent == 16) {
      get_template_part( 'templates/akara_egg');
    } else {
      get_template_part( 'template-parts','content');
    }

?>
<?php
get_footer();

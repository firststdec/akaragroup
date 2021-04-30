<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $no = 1;
  $args = array(
    'post_type' => array('job'),
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'paged' => 1,
    'orderby' => array('menu_order' => 'ASC'),
    'has_password'   => FALSE, // NO PASSWORD POST SHOW
    'suppress_filters' => TRUE,
  );
  $the_query = new WP_Query( $args );
  if ( $the_query->have_posts() ) :
?>
<ul class="c-box-time-line__content-list">
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  <li class="c-box-time-line__content-list-item"><a class="modaal" href="#job-0<?php echo $no; ?>" data-modaal-type="inline" data-modaal-animation="fade" data-modaal-overlay-opacity="0.9"><i class="fas fa-chevron-right"></i><span class="text"><?php echo get_the_title(); ?></span></a></li>
  <?php $no++; ?>
  <?php endwhile; ?>
</ul>
<?php endif; ?>
<?php wp_reset_query(); ?>
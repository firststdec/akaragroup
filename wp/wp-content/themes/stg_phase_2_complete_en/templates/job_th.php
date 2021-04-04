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
  );
  $the_query = new WP_Query( $args );
  if ( $the_query->have_posts() ) :
?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php
  // GET ACF DATA
  $job_location = get_field('job_location');
  $job_description = get_field('job_description');
  $job_application_link = get_field('job_application_link');
?>
<div class="c-box-jobs__detail" id="job-0<?php echo $no; ?>">
  <div class="c-box-jobs__inner">
    <div class="c-box-jobs__heading">
      <div class="title c-heading-03"><?php echo get_the_title(); ?></div>
      <?php if ($job_location != '') : ?>
      <div class="location"><?php echo $job_location; ?></div>
      <?php endif; ?>
    </div>
    <?php if (have_rows('job_description')) : ?>
    <?php
      $job_row = 1;
    ?>
    <div class="c-box-jobs__content">
      <?php while( have_rows('job_description') ) : the_row(); ?>
      <?php if (get_sub_field('heading_description') != '') : ?>
      <div class="sub-title c-heading-04<?php echo ($job_row > 1)? ' u-mt-30' : ''; ?>"><?php echo get_sub_field('heading_description'); ?></div>
      <?php endif; ?>
      <?php if (get_sub_field('heading_description') != '') : ?>
      <div class="text">
        <?php echo get_sub_field('job_detail'); ?>
      </div>
      <?php endif; ?>
      <?php $job_row++; ?>
      <?php endwhile; // while( have_rows('job_description') ) : the_row(); ?>
    </div>
    <?php endif; ?>
    <?php if ($job_application_link != '') : ?>
    <div class="c-box-jobs__apply">
      <div class="c-box-cmn-button"><a class="c-button-cmn-01" href="<?php echo $job_application_link; ?>" target="_blank"><span class="text"><?php echo (is_th_lang())? 'สมัครงานตำแหน่งนี้':'Application this job'; ?></span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
    </div>
    <?php endif; ?>
  </div>
</div>
<?php $no++; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>


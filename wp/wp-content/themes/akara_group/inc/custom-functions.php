<?php
/******** DEFINE POST PER PAGE EACH POST TYPE ********/
define("EVENT_POSTPERPAGE_TOP", 4);
define("EVENT_POSTPERPAGE", 30);
define("TOPPAGE_ID", 88645);
define("TERMID", 83); //大切にしたいことばたち
define("TERMNAME", "大切にしたいことばたち");
// シゴトヒト文庫|65 その後どうですか|67 大切にしたいことばたち|75 移り住む人たち|111 
/****************************** AJAX LOAD MORE FUNCTIONS  ********************************/
function shikoto_my_load_more_scripts(){
  //global $wp_query; 
  $args_banner = array(
    'post_type' => 'banner',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'paged' => 1,
    'orderby' => 'date',
    'order' => 'DESC',
    'has_password'   => FALSE, // NO PASSWORD POST SHOW
  );
  $the_query_banner = new WP_Query( $args_banner );
  //print "<pre>"; print_r($the_query_banner);
  if ( $the_query_banner->have_posts() ) :  
    while ( $the_query_banner->have_posts() ) : $the_query_banner->the_post();
      $banner_id = get_the_ID();
    endwhile;
  endif;

  $args = array(
    'post_type' => array('event', 'post', 'column', 'shopping'),
    'post_status' => 'publish',
    'posts_per_page' => 23,
    'paged' => 1,
    'orderby' => 'date',
    'order' => 'DESC',
    'has_password'   => FALSE, // NO PASSWORD POST SHOW
    'meta_query'	=> array(
      'relation'		=> 'OR',
      array(
        'key'	  	=> 'not_show_post_on_top',
        'value'	  	=> '',
        'compare' 	=> 'NOT EXISTS',
      ),
      array(
        'key'	  	=> 'not_show_post_on_top',
        'value'	  	=> 0,
        'compare' 	=> '=',
      ),
    ),
  );
  
  $the_query = new WP_Query( $args );
  //print "<pre>"; print_r($the_query);
	// In most cases it is already included on the page and this line can be removed
	wp_enqueue_script('jquery');
	// register our main script but do not enqueue it yet
	wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery') );
 
	// now the most interesting part
	// we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
	// you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
	wp_localize_script( 
    'my_loadmore', 'shikoto_loadmore_params', array(
      'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
      'posts' => json_encode( $the_query->query_vars ), // everything about your loop is here
      'posts_banner' => json_encode( $the_query_banner->query_vars ), // everything about your loop is here
      'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
      'max_page' => $the_query->max_num_pages,
      'current_banner_id' => $banner_id,
    )
  );
  wp_enqueue_script( 'my_loadmore', 'my_loadmore_dynamic' );
}
add_action( 'wp_enqueue_scripts', 'shikoto_my_load_more_scripts' );

function shikoto_my_load_more_scripts_dynamic(){
  //global $wp_query;
  //if($wp_query->query_vars)
  $obj = get_queried_object();
  $tdd = date("Y/m/d");
  //print "<pre>"; print_r($obj);
  $post_type = array('event', 'post', 'column', 'shopping');
  $orderby = 'date';
  if($obj->post_name == 'job' || is_category()){
    $post_type = 'post';
  } elseif($obj->post_name == 'event-end') {
    $post_type = 'event';
    $orderby = 'meta_value';
  } elseif($obj->query_var == 'event' || is_tax('cate_event') || $obj->post_name == 'eventtop'){
    $post_type = 'event';
    $orderby = 'meta_value';
  } elseif($obj->query_var == 'column' || is_tax('cate_colunm') || $obj->post_name == 'columntop'){
    $post_type = 'column';
  } elseif($obj->query_var == 'shopping' || is_tax('cate_shopping')){
    $post_type = 'shopping';
  }
  // print "<pre>"; print_r($obj); 
  $args = array(
    'post_type' => $post_type,
    'post_status' => 'publish',
    'posts_per_page' => 30,
    'paged' => 1,
    'orderby' => $orderby ,
    'order' => 'DESC',
    'has_password'   => FALSE, // NO PASSWORD POST SHOW    
  );
  if($obj->query_var == 'event' || $obj->post_name == 'event-end'){
    $args['meta_key'] = 'eventdate';
  }
  if(is_tax('cate_event')){
    $args = array(
      'post_type' => $post_type,
      'post_status' => 'publish',
      'posts_per_page' => EVENT_POSTPERPAGE,
      'paged' => 1,
      'orderby' => 'meta_value',
      'meta_key' => 'eventdate',
      'order' => 'DESC',
      'tax_query' => array(
        array(
        'taxonomy' => 'cate_event',
        'field' => 'id',
        'terms' => $obj->term_id,
        )
      ),
      'meta_query'=> array(
        array(
            'key' => 'eventdate',
            'value' => $tdd,
            'compare' => '>='
        )
      ),      
      'has_password'   => FALSE, // NO PASSWORD POST SHOW
    );

  }
  if(is_tax('cate_colunm')){
    $args = array(
      'post_type' => $post_type,
      'post_status' => 'publish',
      'posts_per_page' => 1,
      'paged' => 1,
      'orderby' => 'date',
      'order' => 'DESC',
      'tax_query' => array(
        array(
        'taxonomy' => 'cate_colunm',
        'field' => 'id',
        'terms' => $obj->term_id,
        )
      ),
      'has_password'   => FALSE, // NO PASSWORD POST SHOW
    );
  }
  if(is_category()){
    $args = array(
      'post_type' => $post_type,
      'post_status' => 'publish',
      'posts_per_page' => 30,
      'paged' => 1,
      'orderby' => 'date',
      'order' => 'DESC',
      'tax_query' => array(
        array(
        'taxonomy' => 'category',
        'field' => 'id',
        'terms' => $obj->term_id,
        )
      ),
      'has_password'   => FALSE, // NO PASSWORD POST SHOW
    );
  }
  if($obj->post_name == 'eventtop'){
    $args = array(
      'post_type' => 'event',
      'post_status' => 'publish',
      'posts_per_page' => EVENT_POSTPERPAGE,
      'paged' => 1,
      'orderby' => array('meta_value' => 'ASC'),
      'meta_key' => 'eventdate', //or whatever your meta_key is
      'meta_query'=> array(
        array(
            'key' => 'eventdate',
            'value' => $tdd,
            'compare' => '>='
        )
      ),
      'has_password'   => FALSE, // NO PASSWORD POST SHOW
    );
    if(isset($_GET['cate'])){
      $category = $_GET['cate'];
      $args['tax_query'] = array(
        array(
        'taxonomy' => 'cate_event',
        'field' => 'slug',
        'terms' => $category,
        )
      );
    }    
  }
  if($obj->post_name == 'event-end'){
    $args = array(
      'post_type' => 'event',
      'post_status' => 'publish',
      'posts_per_page' => EVENT_POSTPERPAGE,
      'paged' => 1,
      'orderby' => array('meta_value' => 'DESC'),
      'meta_key' => 'eventdate', //or whatever your meta_key is
      'meta_query'=> array(
        array(
            'key' => 'eventdate',
            'value' => $tdd,
            'compare' => '<'
        )
      ),
      'has_password'   => FALSE, // NO PASSWORD POST SHOW
    );
    if(isset($_GET['cate'])){
      $category = $_GET['cate'];
      $args['tax_query'] = array(
        array(
        'taxonomy' => 'cate_event',
        'field' => 'slug',
        'terms' => $category,
        )
      );
    }    
  }

  //print "<pre>"; 
  $the_query = new WP_Query( $args );
	wp_register_script( 'my_loadmore_dynamic', '' ,array());
 
	wp_localize_script( 
    'my_loadmore_dynamic', 'shikoto_loadmore_params_dynamic', array(
      'ajaxurl_dynamic' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
      'posts' => json_encode( $the_query->query_vars ), // everything about your loop is here
      'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
      'max_page' => $the_query->max_num_pages,
      'post_type' => $post_type,
    )
  );
  wp_enqueue_script( 'my_loadmore_dynamic', 'my_loadmore_dynamic' );
}
add_action( 'wp_enqueue_scripts', 'shikoto_my_load_more_scripts_dynamic' );

function shikoto_loadmore_ajax_handler(){
  // prepare our arguments for the query
  // banner
  session_start();
	$args_banner = json_decode( stripslashes( $_POST['query_banner'] ), true );
	$args_banner['paged'] = $_POST['banner_page'] + 1; // we need next page to be loaded
  $args_banner['post_status'] = 'publish';
	$args_banner['post_type'] = 'banner';
  $args_banner['posts_per_page'] = 2;
  $args_banner['orderby'] = 'date';
  $args_banner['order'] = 'DESC';
  $args_banner['has_password'] = FALSE;
  $args_banner['post__not_in'] = array($_POST['current_banner_id']); // NO Current ID
  $the_query_banner_ajax = new WP_Query( $args_banner );
  $num_banner = $the_query_banner_ajax->post_count; // Count Banner
  //echo $num_banner;
  if ( $the_query_banner_ajax->have_posts() ) :  
    while ( $the_query_banner_ajax->have_posts() ) : $the_query_banner_ajax->the_post();
      $id_banner[] = get_the_ID();
    endwhile; //while ( $the_query_banner_ajax->have_posts() ) : $the_query_banner_ajax->the_post();
    
  endif; //if ( $the_query_banner->have_posts() ) :
  wp_reset_query();
  //normal post
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
  $args['post_status'] = 'publish';
  $args['posts_per_page'] = 30 - $num_banner;
  //echo  $args['posts_per_page'] . "banner" . $num_banner;
  $_SESSION['num_banner'] = $num_banner;
  if($_POST['page'] == 1){
    $_SESSION['offset'] = 23;
    $args['offset'] = 23;
  } else {
    $_SESSION['offset'] = $_SESSION['offset'] + $args['posts_per_page'];
    $args['offset'] = $_SESSION['offset'];
    if($_SESSION['num_banner'] == 0){
      $args['offset'] = $_SESSION['offset'] - 2;
    } else {
      if($_SESSION['num_banner'] == 2){
        $args['offset'] = $_SESSION['offset'];
      } else {
        $args['offset'] = $_SESSION['offset'] - 1;
      }
    }
  }
	$args['post_type'] = array('event', 'post', 'column', 'shopping');
	$args['orderby'] = 'date';
  $args['order'] = 'DESC';
  $args['has_password'] = FALSE;
  //echo $args['offset'];
  if(is_front_page()){
    $args['meta_query'] = array(
      'relation'		=> 'OR',
      array(
        'key'	  	=> 'not_show_post_on_top',
        'value'	  	=> '',
        'compare' 	=> 'NOT EXISTS',
      ),
      array(
        'key'	  	=> 'not_show_post_on_top',
        'value'	  	=> 0,
        'compare' 	=> '=',
      ),
    );
  }

  $the_query_ajax = new WP_Query( $args );
  //var_dump($the_query_ajax->request);
  //print "<pre>"; print_r($the_query_ajax);

  $cnt_ajax = 1;
	if( $the_query_ajax->have_posts() ) :
  ?>
  <div class="mod-recommend-in" data-test="<?php echo $args['offset']; ?>" data-banner="<?php echo $num_banner; ?>">
  <!-- <div class="mod-recommend-in"> -->
  <?php 
    //print_r($id_banner);
    // run the loop
    while( $the_query_ajax->have_posts() ): $the_query_ajax->the_post();
      $icon_cate = '';
      if(get_post_type(get_the_ID()) == 'event'){
        $cate = 'cate_event';
        $icon_cate = 'ico_status_event';
        $bg = 'white';
        $alt = 'エベント';
        $thumb_ctf = 'eventpickimg';
        $lead_top = 'eventlead';
        $date = '';
      } elseif(get_post_type(get_the_ID()) == 'column'){
        $cate = 'cate_colunm';
        $icon_cate = 'ico_status_column';
        $bg = 'white';
        $alt = 'コラム';
        $thumb_ctf = 'columnimg';
        $lead_top = 'columnlead';
        $date = '';
      } elseif(get_post_type(get_the_ID()) == 'post'){
        $dd = get_post_meta(get_the_ID(), 'boshuenddate', true);
        $dd = date('Y-m-d', strtotime($dd));
        $date = date('Y.n.j', strtotime($dd));
        $today = date("Y-m-d");
        
        //最新かの判定
        //$nn = $today - get_the_time("Y-m-d");
        //print $today;
        
        $nn  = (strtotime($today) - strtotime(get_the_time("Y-m-d"))) / ( 60 * 60 * 24);
        $intday = (strtotime($dd) - strtotime($today)) / ( 60 * 60 * 24);
                  
        if($nn < 3){
          $icon_cate = 'ico_status_new';
        } else {
          if($intday == 2){
            $icon_cate = 'ico_status_2day';
          } elseif($intday == 1){
            $icon_cate = 'ico_status_1day';
          } elseif($intday == 0){
            $icon_cate = 'ico_status_today';
          } elseif($intday < 0){
            $icon_cate = 'ico_status_end';
          } else {
            $icon_cate = 'ico_status_open';
          }
        }
      
        $cate = 'category';
        $bg = 'red';
        $alt = '求人 NEW';
        $thumb_ctf = 'img_thumb';
        $lead_top = 'lead';
      }
      //echo $cate;
      if(get_post_type(get_the_ID()) == 'shopping'){
        $categories = array();
      } else {
        $categories = get_the_terms( get_the_ID(), $cate );
      }
      
      //募集開始日の修正
      $bs = get_post_meta(get_the_ID(), "boshustartdate", $single = true);
      $bs = date('Y.n.j', strtotime($bs));

      //募集開始日の修正
      $be = get_post_meta(get_the_ID(), "boshuenddate", $single = true);
      $be = date('Y.n.j', strtotime($be));

    if($id_banner[0] != ''):
        if($cnt_ajax == 3):
          $banner_img = (get_field('top_banner_img', $id_banner[0]))? get_field('top_banner_img', $id_banner[0]) : '';
          $banner_id = $id_banner[0];
          $banner_link = (get_field('top_banner_link', $id_banner[0]))? get_field('top_banner_link', $id_banner[0]) : '#';
          $banner_target = (get_field('top_banner_target', $id_banner[0]))? get_field('top_banner_target', $id_banner[0]) : '#';
          $banner_title = get_the_title();
          $target = ($banner_target)? " target='_blank'": "";
 ?>
        <div class="item-recommend">
          <div class="box-post-card-01">
            <a href="<?php echo $banner_link; ?>" class="link-group"<?php echo $target; ?>>
            <?php if ( $banner_img != ''):  ?>
              <figure class="box-image"><img class="image" src="<?php echo $banner_img; ?>" alt="<?php echo $banner_title; ?>"></figure>
            <?php else: ?>
              <figure class="box-image"><img class="image" src="http://via.placeholder.com/286x380" alt="<?php echo get_the_title(); ?>"></figure>
            <?php endif; ?>
            </a>
          </div><!-- /box-post-card-01 -->
        </div><!-- /item-recommend -->
 <?php
        endif; // if($cnt_ajax == 3):
    endif; //if($id_banner[0] != ''):

    if($id_banner[1] != ''):
        if($cnt_ajax == 12):
          $banner_img = (get_field('top_banner_img', $id_banner[1]))? get_field('top_banner_img', $id_banner[1]) : '';
          $banner_id = $id_banner[1];
          $banner_link = (get_field('top_banner_link', $id_banner[1]))? get_field('top_banner_link', $id_banner[1]) : '#';
          $banner_target = (get_field('top_banner_target', $id_banner[1]))? get_field('top_banner_target', $id_banner[1]) : '#';
          $banner_title = get_the_title();
          $target = ($banner_target)? " target='_blank'": "";
 ?>
        <div class="item-recommend">
          <div class="box-post-card-01">
            <a href="<?php echo $banner_link; ?>" class="link-group"<?php echo $target; ?>>
            <?php if ( $banner_img != ''):  ?>
              <figure class="box-image"><img class="image" src="<?php echo $banner_img; ?>" alt="<?php echo $banner_title; ?>"></figure>
            <?php else: ?>
              <figure class="box-image"><img class="image" src="http://via.placeholder.com/286x380" alt="<?php echo get_the_title(); ?>"></figure>
            <?php endif; ?>
            </a>
          </div><!-- /box-post-card-01 -->
        </div><!-- /item-recommend -->
 <?php
        endif; // if($cnt_ajax == 3):
    endif; //if($id_banner[1] != ''):

      get_template_part( 'template-parts/shigoto/content', 'top' );
      $cnt_ajax++;
    endwhile; //while( $the_query_ajax->have_posts() ): $the_query_ajax->the_post();
  ?>
    </div><!-- /mod-recommend-in -->
    <?php
	endif;
	die; // here we exit the script and even no wp_reset_query() required!
}
add_action('wp_ajax_loadmore', 'shikoto_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'shikoto_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}

function shikoto_loadmore_ajax_handler_dynamic(){
  // prepare our arguments for the query
  //normal post
  $obj = get_queried_object();
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
  $args['post_status'] = 'publish';
	$args['post_type'] = $_POST['post_type'];
  $args['posts_per_page'] = 30;

  $args['order'] = 'DESC';
  $args['has_password'] = FALSE;

  if($obj->post_name == 'eventtop'){
    $args['orderby'] = 'meta_value';
    $args['meta_key'] = 'eventdate';
    $args['order'] = 'ASC';
    $args['meta_query'] = array(
      array(
          'key' => 'eventdate',
          'value' => $tdd,
          'compare' => '>='
      )
    );
  } else {
    $args['orderby'] = 'date';
  }

  if($obj->post_name == 'event-end'){
    $tdd = date("Y/m/d");
    $args['post_type'] = 'event';
    if(isset($_GET['cate'])){
      $category = $_GET['cate'];
      $args['tax_query'] = array(
        array(
        'taxonomy' => 'cate_event',
        'field' => 'slug',
        'terms' => $category,
        )
      );
    }
    $args['meta_key'] = 'eventdate'; //or whatever your meta_key is
    $args['meta_query'] =array(
      array(
          'key' => 'eventdate',
          'value' => $tdd,
          'compare' => '<'
      )
      );
    $args['orderby'] = 'meta_value';
    $args['meta_key'] = 'eventdate';
    $args['order'] = 'DESC';
  }

	$the_query_ajax = new WP_Query( $args );
  if( $the_query_ajax->have_posts()):
    if($args['term_id'] != TERMID):
  ?>
  <script>
    //<![CDATA[
  $(function(){
    $('.column-match-height .item-recommend').matchHeight();
  });
  //]]>
  </script>  
  <div class="mod-recommend-in">
  <?php
    //print_r($id_banner);
    // run the loop
    while( $the_query_ajax->have_posts() ): $the_query_ajax->the_post();
      if($_POST['post_type']=='event' || $_POST['post_type']=='event-end'){
        get_template_part( 'template-parts/shigoto/content', 'event' );
      } elseif($_POST['post_type']=='column'){
        get_template_part( 'template-parts/shigoto/content', 'column' );
      } else {
        get_template_part( 'template-parts/shigoto/content', 'top' );
      }
      $cnt_ajax++;
    endwhile; //while( $the_query_ajax->have_posts() ): $the_query_ajax->the_post();
  ?>
    </div><!-- /mod-recommend-in -->

  <?php
      else : // if($args['term_id'] != TERMID):
  ?>
    <ul class="list-column-quote">
    <?php 
      while ( $the_query_ajax->have_posts() ) : $the_query_ajax->the_post(); 
        get_template_part( 'template-parts/shigoto/content', 'column-01' ); 
      endwhile; 
    ?>
    </ul><!-- list-column-quote -->
  <?php
    endif;
	endif; //if( $the_query_ajax->have_posts() && $args['term_id'] != TERMID) :
	die; // here we exit the script and even no wp_reset_query() required!
}
add_action('wp_ajax_loadmore_dynamic', 'shikoto_loadmore_ajax_handler_dynamic'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore_dynamic', 'shikoto_loadmore_ajax_handler_dynamic'); // wp_ajax_nopriv_{action}

/****************************** CUSTOM FUNCTIONS  ********************************/
/**
 * Define Post Per Page for Custom Post Type
 */

add_action( 'pre_get_posts','shikoto_pre_get_posts' );
function shikoto_pre_get_posts( $q )
{
  //print "<pre>"; print_r($q);
  //print_r($q->query_vars['post_type']);
  if( !is_admin() && $q->is_main_query() && $q->is_post_type_archive( 'event' ) ) {
    $q->set( 'posts_per_page', EVENT_POSTPERPAGE );
  }
}

/*
 * Replace Taxonomy slug with Post Type slug in url
 * Version: 1.1
 */
// function taxonomy_slug_rewrite($wp_rewrite) {
//   $rules = array();
//   // get all custom taxonomies
//   $taxonomies = get_taxonomies(array('_builtin' => false), 'objects');
//   // get all custom post types
//   $post_types = get_post_types(array('public' => true, '_builtin' => false), 'objects');

//   foreach ($post_types as $post_type) {
//       foreach ($taxonomies as $taxonomy) {

//           // go through all post types which this taxonomy is assigned to
//           foreach ($taxonomy->object_type as $object_type) {

//               // check if taxonomy is registered for this custom type
//               if ($object_type == $post_type->rewrite['slug']) {

//                   // get category objects
//                   $terms = get_categories(array('type' => $object_type, 'taxonomy' => $taxonomy->name, 'hide_empty' => 0));

//                   // make rules
//                   foreach ($terms as $term) {
//                       $rules[$object_type . '/' . $term->slug . '/?$'] = 'index.php?' . $term->taxonomy . '=' . $term->slug;
//                       $rules[$object_type . '/' . $term->slug . '/page/?([0-9]{1,})/?'] = 'index.php?' . $term->taxonomy . '=' . $term->slug . '&paged=$matches[1]'; //FIX PAGINATION ISSUE
//                   }
//               }
//           }
//       }
//   }
//   // merge with global rules
//   $wp_rewrite->rules = $rules + $wp_rewrite->rules;
//   //print "<pre>"; print_r($wp_rewrite->rules);
// }
// add_filter('generate_rewrite_rules', 'taxonomy_slug_rewrite');

/**
 * Custom Excerpt
 */
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  } 
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

/**
 * Custom Excerpt
 */
function excerpt_content($limit, $content) {
  $excerpt = explode(' ', $content, $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  } 
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

 /**
 * Custom Content
 */
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  } 
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}


 /**
 * Create Dropdown Product Category Filter
 */
add_action( 'restrict_manage_posts', 'my_filter_list' );
function my_filter_list() {
    $screen = get_current_screen();
    global $wp_query;
    if ( $screen->post_type == 'column' ) {
        wp_dropdown_categories( array(
            'show_option_all' => 'Show All Category',
            'taxonomy' => 'cate_colunm',
            'name' => 'cate_colunm',
            'orderby' => 'name',
            'selected' => ( isset( $wp_query->query['cate_colunm'] ) ? $wp_query->query['cate_colunm'] : '' ),
            'hierarchical' => false,
            'depth' => 3,
            'show_count' => false,
            'hide_empty' => true,
        ) );
    }
    if ( $screen->post_type == 'event' ) {
        wp_dropdown_categories( array(
            'show_option_all' => 'Show All Category',
            'taxonomy' => 'cate_event',
            'name' => 'cate_event',
            'orderby' => 'name',
            'selected' => ( isset( $wp_query->query['cate_event'] ) ? $wp_query->query['cate_event'] : '' ),
            'hierarchical' => false,
            'depth' => 3,
            'show_count' => false,
            'hide_empty' => true,
        ) );
    }
    if ( $screen->post_type == 'shopping' ) {
      wp_dropdown_categories( array(
          'show_option_all' => 'Show All Category',
          'taxonomy' => 'cate_shopping',
          'name' => 'cate_shopping',
          'orderby' => 'name',
          'selected' => ( isset( $wp_query->query['cate_shopping'] ) ? $wp_query->query['cate_shopping'] : '' ),
          'hierarchical' => false,
          'depth' => 3,
          'show_count' => false,
          'hide_empty' => true,
      ) );
  }    
}

add_filter( 'parse_query','perform_filtering' );
function perform_filtering( $query ) {
    $qv = &$query->query_vars;
    if(isset( $qv['cate_colunm'] )){
      if ( ( $qv['cate_colunm'] ) && is_numeric( $qv['cate_colunm'] ) ) {
        $term = get_term_by( 'id', $qv['cate_colunm'], 'cate_colunm' );
        $qv['cate_colunm'] = $term->slug;
      }
    }
    if(isset( $qv['cate_event'] )){
      if ( ( $qv['cate_event'] ) && is_numeric( $qv['cate_event'] ) ) {
        $term = get_term_by( 'id', $qv['cate_event'], 'cate_event' );
        $qv['cate_event'] = $term->slug;
      }
    }
    if(isset( $qv['cate_shopping'] )){
      if ( ( $qv['cate_shopping'] ) && is_numeric( $qv['cate_shopping'] ) ) {
        $term = get_term_by( 'id', $qv['cate_event'], 'cate_shopping' );
        $qv['cate_shopping'] = $term->slug;
      }
    }
}

 /**
 * Remove Comment Tab from Post
 */
add_filter( 'manage_edit-post_columns', 'remove_comment_tab' );
function remove_comment_tab( $columns ) {
  unset( $columns['comments'] );
  return $columns;
}

add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );
function remove_wp_logo( $wp_admin_bar ) {
  $wp_admin_bar->remove_node( 'wp-logo' );
	//$wp_admin_bar->remove_node( 'new-post' );
	//$wp_admin_bar->remove_node( 'new-media' );
  $wp_admin_bar->remove_node( 'new-user' );
  $wp_admin_bar->remove_node( 'comments' );
  $wp_admin_bar->remove_node( 'updates' );
  $wp_admin_bar->remove_node( 'customize' );
  $wp_admin_bar->remove_node( 'themes' );
  $wp_admin_bar->remove_node( 'widgets' );
	$wp_admin_bar->remove_node( 'menus' );
}

 /**
 * Remove Sidebar Options
 */
add_action('admin_menu', 'remove_menu');
function remove_menu()
{
  remove_menu_page('edit-comments.php');
  remove_menu_page('link-manager.php');
  //remove_menu_page('edit.php');
  //remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');
  //remove_menu_page('themes.php');
  //remove_menu_page('edit.php?post_type=acf-field-group');
  //remove_menu_page('tools.php');
  remove_submenu_page( 'index.php', 'update-core.php' );
  
  //remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' );
  /* DISABLE SIDEBAR OPTIONS
    remove_menu_page('edit.php');
    remove_menu_page('edit.php?post_type=page');
    remove_menu_page('edit.php?post_type=acf');
    remove_menu_page('edit.php?post_type=acf-field-group');
    remove_menu_page('edit-comments.php');
    remove_menu_page('themes.php');
    remove_menu_page('users.php');
    remove_menu_page('upload.php');
    remove_menu_page('link-manager.php');
    remove_menu_page('options-general.php');
  */
}

/*
 * テーマセットアップ
 */
if ( ! function_exists( 'my_theme_setup' ) )
{
  function my_theme_setup() {
    add_image_size('camp_gallery_img', 780, 403, array( 'center', 'center' ));
  }
}
add_action( 'after_setup_theme', 'my_theme_setup' );

/*
 * wp_headの不要なものを削除
 */
function my_wp_head_remove() {
  global $sitepress;
  remove_action( 'wp_head', 'feed_links', 2 );
  remove_action( 'wp_head', 'feed_links_extra', 3 );
  remove_action( 'wp_head', 'rsd_link' );
  remove_action( 'wp_head', 'wlwmanifest_link' );
  remove_action( 'wp_head', 'index_rel_link' );
  remove_action( 'wp_head', 'locale_stylesheet' );
  remove_action( 'wp_head', 'wp_shortlink_wp_head' );
  remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
  remove_action( 'wp_head', 'wp_print_styles', 8 );
  remove_action( 'wp_head', 'wp_print_head_scripts', 9 );
  remove_action( 'wp_head', 'wp_generator' );
  remove_action( 'wp_head', 'rel_canonical' );
  remove_action( 'wp_head', array( $sitepress, 'meta_generator_tag' ) );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' );    
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );    
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action('init', 'my_wp_head_remove');

 /**
 * Disable Dashboard Widget
 */
function remove_dashboard_widgets () {
  //remove_meta_box('dashboard_quick_press','dashboard','side'); //Quick Press widget
  //remove_meta_box('dashboard_recent_drafts','dashboard','side'); //Recent Drafts
  remove_meta_box('dashboard_primary','dashboard','side'); //WordPress.com Blog
  //remove_meta_box('dashboard_secondary','dashboard','side'); //Other WordPress News
  //remove_meta_box('dashboard_incoming_links','dashboard','normal'); //Incoming Links
  //remove_meta_box('dashboard_plugins','dashboard','normal'); //Plugins
  //remove_meta_box('dashboard_right_now','dashboard', 'normal'); //Right Now
  //remove_meta_box('rg_forms_dashboard','dashboard','normal'); //Gravity Forms
  //remove_meta_box('dashboard_recent_comments','dashboard','normal'); //Recent Comments
  remove_meta_box('icl_dashboard_widget','dashboard','normal'); //Multi Language Plugin
  //remove_meta_box('dashboard_activity','dashboard', 'normal'); //Activity
  remove_action('welcome_panel','wp_welcome_panel');
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

 /**
 * Custom Style Admin
 */
function custom_loginlogo() {
  echo '<style>
    .login h1 a{
      background-image: url('. get_stylesheet_directory_uri() .'/img/common/logo.svg) !important;
      background-size: contain;
      width: 100%;
      height: auto;
    }
    body.login{

    }
    body {
      background: #fff; }

  </style>';
}
add_action('login_head', 'custom_loginlogo');

function custom_icon() {
  echo '<style>
    #icon_character .list .acf-rel-item .thumbnail{
      width: 44px;
      height: 44px;
    }
    #icon_character .list .acf-rel-item .thumbnail img{
      max-width: 44px;
      max-height: 44px;
    }
    #icon_character .acf-bl > li{
      display: inline-table;
      width: 100%;
      margin: 2px 0;
    }
    #icon_character .acf-bl > li::after{
      display: table;
      width: 100%;
      content: " ";
    }
    #icon_character .list .acf-rel-item{
      min-height: 40px;
    }
    .row-actions .trash{
      display: none!important;
    }
  </style>';
}
add_action('admin_enqueue_scripts', 'custom_icon');

add_filter( 'login_headerurl', 'custom_loginlogo_url' );
function custom_loginlogo_url($url) {
  return get_site_url().'/wp-login.php';
}

function is_post_type($type){
    global $wp_query;
    if($type == get_post_type($wp_query->post->ID)) return true;
    return false;
}

add_action( 'widgets_init', 'my_remove_recent_comments_style' );
function my_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'  ) );
}

/****************************** CUSTOM FUNCTIONS  ********************************/
// ONLY MOVIE CUSTOM TYPE POSTS
add_filter('manage_column_posts_columns', 'shigoto_columns_head', 10);
add_action('manage_column_posts_custom_column', 'shigoto_columns_content', 10, 2);
 
// CREATE TWO FUNCTIONS TO HANDLE THE COLUMN
function shigoto_columns_head($defaults) {
    $defaults['category'] = 'Category';
    return $defaults;
}
function shigoto_columns_content($column_name, $post_ID) {
    if ($column_name == 'category') {
        // show content of 'directors_name' column
        $tags = get_the_terms( $post_ID, 'cate_colunm' );
        echo $tags[0]->name;
    }
}

add_filter('manage_event_posts_columns', 'shigoto_columns_event', 10);
add_action('manage_event_posts_custom_column', 'shigoto_columns_content_event', 10, 2);
 
// CREATE TWO FUNCTIONS TO HANDLE THE COLUMN
function shigoto_columns_event($defaults) {
    $defaults['category'] = 'Category';
    return $defaults;
}
function shigoto_columns_content_event($column_name, $post_ID) {
    if ($column_name == 'category') {
        // show content of 'directors_name' column
        $tags = get_the_terms( $post_ID, 'cate_event' );
        echo $tags[0]->name;
    }
}

add_filter('manage_shopping_posts_columns', 'shigoto_shopping_event', 10);
add_action('manage_shopping_posts_custom_column', 'shigoto_shopping_content', 10, 2);
 
// CREATE TWO FUNCTIONS TO HANDLE THE COLUMN
function shigoto_shopping_event($defaults) {
    $defaults['category'] = 'Category';
    return $defaults;
}
function shigoto_shopping_content($column_name, $post_ID) {
    if ($column_name == 'category') {
        // show content of 'directors_name' column
        $tags = get_the_terms( $post_ID, 'cate_shopping' );
        echo $tags[0]->name;
    }
}
/**
 * Disable responsive image support (test!)
 */

// Clean the up the image from wp_get_attachment_image()
add_filter( 'wp_get_attachment_image_attributes', function( $attr )
{
    if( isset( $attr['sizes'] ) )
        unset( $attr['sizes'] );

    if( isset( $attr['srcset'] ) )
        unset( $attr['srcset'] );

    return $attr;

 }, PHP_INT_MAX );

// Override the calculated image sizes
add_filter( 'wp_calculate_image_sizes', '__return_false',  PHP_INT_MAX );

// Override the calculated image sources
add_filter( 'wp_calculate_image_srcset', '__return_false', PHP_INT_MAX );

// Remove the reponsive stuff from the content
remove_filter( 'the_content', 'wp_make_content_images_responsive' );

add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );

// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {  
	// Define the style_formats array
	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => '画像小（横幅が狭い画像）',  
			'block' => 'div',  
			'classes' => 'box-image-small',
			'wrapper' => true,
    ),  
    array(  
      'title' => 'Img with 100%',  
      'selector' => 'img', // Element to add class to
			'classes' => 'img-cms-full-width',
    ),
		array(  
			'title' => 'Youtube',  
			'block' => 'div',  
			'classes' => 'box-youtube',
			'wrapper' => true,
    ),
		array(  
			'title' => 'お問い合わせ（注釈）',  
			'block' => 'div',  
			'classes' => 'box-form-notice txt-small',
			'wrapper' => true,
    ),
		array(  
			'title' => 'お問い合わせ（注釈の見出し）',  
			'inline' => 'span',   
			'classes' => 'title',
			'wrapper' => false,
    ),
		array(  
      'title' => 'リスト（階層を下げても数字表記）',  
      'selector' => 'ol', // Element to add class to
			'classes' => 'list-cms-01',
    ),
		array(  
			'title' => 'リスト（※）',  
      'selector' => 'ul', // Element to add class to
			'classes' => 'list-cms-03',
    ),
    array(  
			'title' => 'リンクに下線付与（点線）',  
			'inline' => 'span',  
			'classes' => 'link-cms-01',
			'wrapper' => true,
    ),
    array(  
			'title' => '左：画像、右：テキスト',  
			'block' => 'div',  
			'classes' => 'box-img-text',
			'wrapper' => true,
    ),
    array(  
			'title' => 'グレー背景ボックス',  
			'block' => 'div',  
			'classes' => 'box-bg-gray',
			'wrapper' => true,
    ),
    array(  
			'title' => '枠線ボックス',  
			'block' => 'div',  
			'classes' => 'box-border',
			'wrapper' => true,
    ),
    array(  
			'title' => 'グレーテキスト',  
			'inline' => 'span',  
			'classes' => 'text-gray',
			'wrapper' => true,
    ),
    array(  
			'title' => '赤文字',  
			'inline' => 'span',  
			'classes' => 'txt-red',
			'wrapper' => true,
    ),
    array(  
			'title' => '小文字',  
			'inline' => 'span',  
			'classes' => 'small-text',
			'wrapper' => true,
    ),
    array(  
			'title' => '地図埋め込み',  
			'block' => 'div',  
			'classes' => 'box-map',
			'wrapper' => true,
    ),    
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );  

/*
 * Replacement for get_adjacent_post()
 *
 * This supports only the custom post types you identify and does not
 * look at categories anymore. This allows you to go from one custom post type
 * to another which was not possible with the default get_adjacent_post().
 * Orig: wp-includes/link-template.php 
 * 
 * @param string $direction: Can be either 'prev' or 'next'
 * @param multi $post_types: Can be a string or an array of strings
 */
function mod_get_adjacent_post($direction = 'prev', $post_types = 'post', $in_same_cat = false, $excluded_categories = '') {
  global $post, $wpdb;

  if(empty($post)) return NULL;
  if(!$post_types) return NULL;

  if(is_array($post_types)){
      $txt = '';
      for($i = 0; $i <= count($post_types) - 1; $i++){
          $txt .= "'".$post_types[$i]."'";
          if($i != count($post_types) - 1) $txt .= ', ';
      }
      $post_types = $txt;
  }

  $current_post_date = $post->post_date;

  $join = '';
  $adjacent = $direction == 'prev' ? 'previous' : 'next';
  $op = $direction == 'prev' ? '<' : '>';
  $order = $direction == 'prev' ? 'DESC' : 'ASC';

  $join  = apply_filters( "get_{$adjacent}_post_join", $join, $in_same_cat, $excluded_categories );
  $where = apply_filters( "get_{$adjacent}_post_where", $wpdb->prepare("WHERE p.post_date $op %s AND p.post_type IN({$post_types}) AND p.post_status = 'publish'", $current_post_date), $in_same_cat, $excluded_categories );
  $sort  = apply_filters( "get_{$adjacent}_post_sort", "ORDER BY p.post_date $order LIMIT 1" );

  $query = "SELECT p.* FROM $wpdb->posts AS p $join $where $sort";
  $query_key = 'adjacent_post_' . md5($query);
  $result = wp_cache_get($query_key, 'counts');
  if ( false !== $result )
      return $result;

  $result = $wpdb->get_row("SELECT p.* FROM $wpdb->posts AS p $join $where $sort");
  if ( null === $result )
      $result = '';

  wp_cache_set($query_key, $result, 'counts');
  return $result;
}

/**
 * getCurrentTerm 
 * get the current term which archive is being displayed
 * good for categories, tags and custom taxonomies
 * @author Ohad Raz
 * @return current term object or false is not in a term archive.
 */
function getCurrentTerm(){
  if (!is_category() && !is_tag() && !is_tax())
      return false;
  $term_slug = get_query_var( 'term' );
  $taxonomyName = get_query_var( 'taxonomy' );
  return get_term_by( 'slug', $term_slug, $taxonomyName );
}

// Admin footer modification
function remove_footer_admin () 
{
    echo '';
}
add_filter('admin_footer_text', 'remove_footer_admin');

function remove_version_info() {
  return '';
}
add_filter('the_generator', 'remove_version_info');

remove_action('wp_head', 'wp_generator');

function my_footer_shh() {
  remove_filter( 'update_footer', 'core_update_footer' ); 
}
add_action( 'admin_menu', 'my_footer_shh' );

function add_featured_image_column($defaults) {
  $defaults['featured_image'] = 'Featured Image';
  return $defaults;
}
add_filter('manage_logo_posts_columns', 'add_featured_image_column');

function show_featured_image_column($column_name, $post_id) {
  if ($column_name == 'featured_image') {
      echo '<div style="max-height: 150px; width: auto; overflow: hidden;">' . get_the_post_thumbnail($post_id, 'thumb') . '</div>'; 
  }
}
add_action('manage_logo_posts_custom_column', 'show_featured_image_column', 10, 2);

remove_action( 'wp_head', '_wp_render_title_tag', 1 );
add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
  	.wpseo-tab-add-keyword,
    .wpseo-metabox-buy-premium, 
    #yoast-help-center-container {
      display: none!important;
    } 
  </style>';
  if(isset($_GET['post_type'])):
    if(is_admin() && $_GET['post_type'] == 'page' && $_GET['showall'] == true):
  ?>
    <style>
      .search-box, .tablenav.top .alignleft:nth-child(1), .tablenav.top .alignleft:nth-child(2), #screen-options-link-wrap{ display: none; }
      #current-page-selector{pointer-events:none;}
    </style>
<?php
    endif;
  endif;
}

add_action( 'init', 'shikoto_register_taxonomy_for_object_type' );
function shikoto_register_taxonomy_for_object_type() {
  register_taxonomy_for_object_type( 'post_tag', 'event' );
  register_taxonomy_for_object_type( 'post_tag', 'shopping' );
  register_taxonomy_for_object_type( 'post_tag', 'column' );
};

/**
 * change tinymce's paste-as-text functionality
 */
function shikoto_enable_paste_text($mceInit, $editor_id){
	//turn on paste_as_text by default
	//NB this has no effect on the browser's right-click context menu's paste!
  //$mceInit['paste_as_text'] = true;
	return $mceInit;
}
add_filter('tiny_mce_before_init', 'shikoto_enable_paste_text', 1, 2);

add_filter('get_the_terms', 'order_terms_by_slug', 10, 3);
function order_terms_by_slug($terms, $id, $taxonomy) {
  if ($taxonomy == 'post_tag') {
     usort($terms, 'sort_by_slug');
 
  }
  return $terms;
}
function sort_by_slug($a, $b) {
  if ($a->slug == $b->slug) return 0;
  return ($a->slug < $b->slug) ? -1 : 1;
}

function dateDiff($start, $end) {
  $start_ts = strtotime($start);
  $end_ts = strtotime($end);
  $diff = $end_ts - $start_ts;
  return round($diff / 86400);
}

/**
 * Filter the term clauses using the arguments, specifically for the wp_dropdown_categories.
 * ADD POST TYPE array to filter
 * @see http://wordpress.stackexchange.com/questions/207655/restrict-taxonomy-dropdown-to-post-type
 * @see https://www.dfactory.eu/get_terms-post-type/
 * 
 * @param array $clauses 
 * @param string $taxonomy
 * @param array $args
 * 
 * @return array
 */
add_filter( 'terms_clauses', 'shikoto_post_type_terms_clauses', 10, 3 );
function shikoto_post_type_terms_clauses( $clauses, $taxonomy, $args ) {
  // Make sure we have a post_type argument to run with.
  if( !isset( $args['post_type'] ) || empty( $args['post_type'] ) )
  return $clauses;
  
  global $wpdb;
  // Setup the post types in an array
  $post_types = array();
  
  // If the argument is an array, check each one and cycle through the post types
  if( is_array( $args['post_type'] ) ) {
  
  // All possible, public post types
  $possible_post_types = get_post_types( array( 'public' => true ) );
  
  // Cycle through the post types, add them to our array if they are public
  foreach( $args['post_type'] as $post_type ) {
  if( in_array( $post_type, $possible_post_types ) )
  $post_types[] = "'" . esc_attr( $post_type ) . "\'";
  }
  
  // If the post type argument is a string, not an array
  } elseif( is_string( $args['post_type'] ) ) {
  $post_types[] = "'" . esc_attr( $args['post_type'] ) . "'";
  }
  // If we have valid post types, build the new sql
  if( !empty( $post_types ) ) {
  $post_types_string = implode( ',', $post_types );
  $fields = str_replace( 'tt.*', 'tt.term_taxonomy_id, tt.term_id, tt.taxonomy, tt.description, tt.parent', $clauses['fields'] );
  
  $clauses['fields'] = 'DISTINCT ' . esc_sql( $fields ) . ', COUNT(t.term_id) AS count';
  $clauses['join'] .= ' INNER JOIN ' . $wpdb->term_relationships . ' AS r ON r.term_taxonomy_id = tt.term_taxonomy_id INNER JOIN ' . $wpdb->posts . ' AS p ON p.ID = r.object_id';
  $clauses['where'] .= ' AND p.post_type IN (' . $post_types_string . ')';
  $clauses['orderby'] = 'GROUP BY t.term_id ' . $clauses['orderby'];
  }
  return $clauses;
}

function wpse73190_adjacent_post_sort( $orderby )
{
    return "ORDER BY p.menu_order DESC LIMIT 1";
}
add_filter( 'get_previous_post_sort', 'wpse73190_adjacent_post_sort' );
add_filter( 'get_next_post_sort', 'wpse73190_adjacent_post_sort' );

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

// SEO YOAST MODIFY
function remove_yoast_meta_desc_specific_page ( $myfilter ) {
  if ( is_post_type_archive( 'news' )){
      return false;
  }
  return $myfilter;
}
//add_filter( 'wpseo_twitter_description', 'remove_yoast_meta_desc_specific_page' );

add_filter('jpeg_quality', function($arg){ return 100; });

// REMOVE PARENT CATEGORY
add_action( 'init', 'build_taxonomies', 0 );  
function build_taxonomies() {

  register_taxonomy( 'category', 'post', array(
        'hierarchical' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => 'category_name',
        'rewrite' => did_action( 'init' ) ? array(
                    'hierarchical' => false,
                    'slug' => get_option('category_base') ? get_option('category_base') : 'category',
                    'with_front' => false) : false,
        'public' => true,
        'show_ui' => true,
        '_builtin' => true,
    ) );
}
/*
//Remove Taxonomy Slug
function remove_tax_slug_link( $link, $term, $taxonomy ) {
  if ( $taxonomy !== 'cate_event' )
      return $link;

  return str_replace( 'cate_event/', '', $link );
}
add_filter( 'term_link', 'remove_tax_slug_link', 10, 3 );

function custom_tax_rewrite_rule() {
$cats = get_terms(
    'cate_event', array(
    'hide_empty' => false,
  )
);
if(sizeof($cats))
  foreach($cats as $cat)
    add_rewrite_rule( $cat->slug.'/?$', 'index.php?cate_event='.$cat->slug, 'top' );
}
add_action('init', 'custom_tax_rewrite_rule', 10, 0);

//Remove Taxonomy Slug
function remove_tax_slug_link_column( $link, $term, $taxonomy ) {
  if ( $taxonomy !== 'cate_colunm' )
      return $link;

  return str_replace( 'cate_colunm/', '', $link );
}
add_filter( 'term_link', 'remove_tax_slug_link_column', 10, 3 );

function custom_tax_rewrite_rule_column() {
$cats = get_terms(
    'cate_colunm', array(
    'hide_empty' => false,
  )
);
if(sizeof($cats))
  foreach($cats as $cat)
    add_rewrite_rule( $cat->slug.'/?$', 'index.php?cate_colunm='.$cat->slug, 'top' );
}
add_action('init', 'custom_tax_rewrite_rule_column', 10, 0);

//Remove Taxonomy Slug
function remove_tax_slug_link_store( $link, $term, $taxonomy ) {
  if ( $taxonomy !== 'cate_shopping' )
      return $link;

  return str_replace( 'cate_shopping/', '', $link );
}
add_filter( 'term_link', 'remove_tax_slug_link_store', 10, 3 );

function custom_tax_rewrite_rule_store() {
$cats = get_terms(
    'cate_shopping', array(
    'hide_empty' => false,
  )
);
if(sizeof($cats))
  foreach($cats as $cat)
    add_rewrite_rule( $cat->slug.'/?$', 'index.php?cate_shopping='.$cat->slug, 'top' );
}
add_action('init', 'custom_tax_rewrite_rule_store', 10, 0);
*/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'トップ＞ピックアップ',
		'menu_title'	=> 'トップ＞ピックアップ',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

remove_action( 'wp_head', '_wp_render_title_tag', 1 );

add_filter( 'wpcf7_validate_email*', 'custom_email_confirmation_validation_filter', 20, 2 );
function custom_email_confirmation_validation_filter( $result, $tag ) {
    if ( 'your-email-confirm' == $tag->name ) {
        $your_email = isset( $_POST['your-email'] ) ? trim( $_POST['your-email'] ) : '';
        $your_email_confirm = isset( $_POST['your-email-confirm'] ) ? trim( $_POST['your-email-confirm'] ) : '';
 
        if ( $your_email != $your_email_confirm ) {
            $result->invalidate( $tag, "メールアドレスが正しくありません。" ); // MATCH EMAIL?
        }
		}
 
    return $result;
}

function my_init() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery'); 
		wp_register_script('jquery', '', false, ''); 
    wp_enqueue_script('jquery');
  }
}
add_action('init', 'my_init');

function shigoto_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = '求人';
    $submenu['edit.php'][5][0] = '求人一覧';
    $submenu['edit.php'][10][0] = '新規追加';
    $submenu['edit.php'][16][0] = 'タグ';
}
function shigoto_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
	//print "<pre>"; print_r($labels);
    $labels->name = '求人';
    $labels->singular_name = '求人';
    $labels->add_new = '求人追加';
    $labels->add_new_item = '求人追加';
    $labels->edit_item = '求人を編集';
    $labels->new_item = '求人';
    $labels->view_item = '求人表示';
    $labels->search_items = '求人を検索';
    $labels->not_found = '見つかりません';
    $labels->not_found_in_trash = 'ごみ箱に見つかりません';
    $labels->all_items = '求人一覧';
    $labels->menu_name = '求人';
    $labels->name_admin_bar = '求人';
}
 
add_action( 'admin_menu', 'shigoto_change_post_label' );
add_action( 'init', 'shigoto_change_post_object' );

add_action( 'edit_form_after_title', 'add_content_before_editor' );
function add_content_before_editor() {
	echo '<div class="notice notice-info">';
  echo '<p>タイトルを入力してください。最大15文字✕3行。改行位置には&#x3C;br&#x3E;タグをいれてください。</p>';
	echo '</div>';  
}

add_action( 'init', 'my_remove_post_type_support', 10 );
function my_remove_post_type_support() {
    remove_post_type_support( 'post', 'post-formats' );
    remove_post_type_support( 'post', 'post-attributes' );
    remove_post_type_support( 'post', 'thumbnail' );
}

add_action('acf/input/admin_head', 'my_acf_modify_wysiwyg_height');

function my_acf_modify_wysiwyg_height() {
    
    ?>
    <style type="text/css">
        .acf-editor-wrap iframe{
            height: inherit !important;
            min-height: 90px !important;
        }
    </style>
    <?php
}

function show_all_posttypes( $query ) {
    if( ! is_admin() ) {
        return;
    }
    if( isset( $_GET, $_GET['showall'] ) && true == $_GET['showall'] ) {
      $query->set( 'orderby', 'date');
      $query->set( 'post_status', 'publish');
      $query->set( 'order', 'DESC');
      $query->set( 'post_type', array('post', 'column', 'event', 'shopping'));
    }
}
add_filter( 'pre_get_posts', 'show_all_posttypes' );

function show_all_posttypes_link() {
    add_submenu_page('edit.php?post_type=page', '', 'All Post Types', 'edit_posts', '/edit.php?post_type=page&showall=true');
}
add_action( 'admin_menu', 'show_all_posttypes_link' );

function my_custom_pages_columns( $columns ) {
    /** Add a Thumbnail Column **/
    $myCustomColumns = array(
      'categories' => __( 'Job Category', 'Shigoto' ),
      'category' => __( 'Other Category', 'Shigoto' ),
      'tags' => __( 'Tags', 'Shigoto' ),
    );
    $columns = array_merge( $columns, $myCustomColumns );

    /** Remove a Author, Comments Columns **/
    unset(
      $columns['comments']
    );
    return $columns;
}
if( isset( $_GET, $_GET['showall'] ) && true == $_GET['showall'] ) {
  add_filter( 'manage_pages_columns', 'my_custom_pages_columns' );
}

function set_post_order_in_admin( $wp_query ) {
  global $pagenow;
  
  if ( is_admin() && 'edit.php' == $pagenow && !isset($_GET['orderby'])) {
  
      $wp_query->set( 'orderby', 'date' );
      $wp_query->set( 'order', 'DESC' );
  }
}
  
  add_filter('pre_get_posts', 'set_post_order_in_admin', 5 );

  function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
  
    if(empty($first_img)){ //Defines a default image
      $first_img = "";
    }
    return $first_img;
  }

  //管理画面の「見出し１」等を削除する
function custom_editor_settings( $initArray ){
  $initArray['block_formats'] = "段落=p; 見出し2=h2; 見出し3=h3;";
  return $initArray;
  }
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );

add_filter('xmlrpc_enabled', '__return_false');

function my_password_form() {
  return
    '<div class="box-old-form">
    <p>このコンテンツはパスワードで保護されています。<br>閲覧するには以下にパスワードを入力してください。<br><br></p>
    <form class="post_password" action="' . home_url() . '/wp-login.php?action=postpass" method="post">
    <p><input name="post_password" type="password" size="24" /></p>
    <p><input type="submit" name="Submit" value="' . esc_attr__("パスワード送信") . '" /><p/>
    </form>
    </div>';
}
add_filter('the_password_form', 'my_password_form');

function custom_postpass_time() {
    require_once ABSPATH . 'wp-includes/class-phpass.php';
    $hasher = new PasswordHash( 8, true );
    setcookie( 'wp-postpass_' . COOKIEHASH, $hasher->HashPassword( wp_unslash( $_POST['post_password'] ) ), time() + 3 * DAY_IN_SECONDS, COOKIEPATH );
    wp_safe_redirect( wp_get_referer() );
    exit();
}
add_action( 'login_form_postpass', 'custom_postpass_time' );

function remove_json_api () {

  // Remove the REST API lines from the HTML Header
  remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
  remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

  // Remove the REST API endpoint.
  remove_action( 'rest_api_init', 'wp_oembed_register_route' );

  // Turn off oEmbed auto discovery.
  add_filter( 'embed_oembed_discover', '__return_false' );

  // Don't filter oEmbed results.
  remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );

  // Remove oEmbed discovery links.
  remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

  // Remove oEmbed-specific JavaScript from the front-end and back-end.
  remove_action( 'wp_head', 'wp_oembed_add_host_js' );

}
add_action( 'after_setup_theme', 'remove_json_api' );

add_action( 'admin_menu', 'my_admin_menu' );

add_filter('flamingo_inbound_channel_row_actions', 'add_facebook_link', 10, 2);
function add_facebook_link($actions, $page_object)
{
    $actions['facebook_link'] = '<a href="https://facebook.com" class="facebook_link">' . __('Go to Facebook') . '</a>';
 
   return $actions;
}

function show_only_authorpost($query) {
  global $current_user;
  if(is_admin()){
      if(current_user_can('editor') ){
          $query->set('author', $current_user->ID);
      }
      if(current_user_can('author') ){
          $query->set('author', $current_user->ID);
      }
      //echo $current_user->ID;
  }
}
add_action('pre_get_posts', 'show_only_authorpost');
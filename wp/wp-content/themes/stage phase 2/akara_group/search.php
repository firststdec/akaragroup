<?php
/**
 * The template for displaying single posts and pages.
 *
 * Template Name: Search Page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
  global $wpdb;

  if(isset($_GET['search_text']) && $_GET['search_text'] != '') :
    $SQL = "
        SELECT akara_posts.ID, akara_posts.post_type, akara_posts.post_title, akara_posts.post_content
        FROM akara_posts
        LEFT JOIN akara_icl_translations ON
        (akara_posts.ID = akara_icl_translations.element_id)
        WHERE 1=1
          AND (((akara_posts.post_title LIKE '%". $_GET['search_text'] . "%')
                OR (akara_posts.post_content LIKE '%". $_GET['search_text'] . "%')))
          AND (akara_posts.post_type IN ( 'product', 'page', 'news', 'media', 'recipe' ))
          AND (akara_posts.ID NOT IN ( '586', '591', '159' ))
          AND ((akara_posts.post_status = 'publish'))
          AND akara_icl_translations.language_code = '".ICL_LANGUAGE_CODE."'
        ORDER BY akara_posts.post_type ASC, akara_posts.post_date DESC LIMIT 0,500
        ";
        // GROUP BY akara_posts.post_type
    $results = $wpdb->get_results($SQL);

    if(!empty($results)) {
      foreach($results as $result) {
        $post_data[$result->ID]['post_type'] = $result->post_type;
        $post_data[$result->ID]['post_title'] = $result->post_title;
        $post_data[$result->ID]['post_content'] = $result->post_content;
        $post_data[$result->ID]['post_language'] = langcode_post_id($result->ID);
      }
    }
    //print "<pre>"; print_r($post_data);
  endif;
?>
      <main class="l-container">
        <div class="l-container__inner">
          <div class="p-search">
            <div class="c-search">
              <div class="c-search__heading">SEARCH RESULTS FOR</div>
              <div class="c-search__subheading"><span class="c-keyword"><?php echo $_GET['search_text']; ?></span><span class="c-search-result-number">(<?php echo count($post_data); ?> results)</span></div>
              <?php if(!empty($post_data)): ?>
              <div class="c-search__list">
                <?php foreach($post_data as $post_id => $data): ?>
                <?php $post_language = langcode_post_id($post_id); ?>
                <div class="c-search__list-item animation-element slide-top" data-post-type="<?php echo $data['post_type']; ?>" data-post-id="<?php echo $post_id; ?>">
                  <?php
                    $lint = '';
                    if($data['post_type'] == 'product') {
                      $post_language = langcode_post_id($post_id);
                      $terms = get_the_terms( $post_id, 'product_category' );

                      if ( $terms && ! is_wp_error( $terms ) ){
                        foreach ( $terms as $term ) {
                          $term_links[] = $term->name;
                          $term_slug = $term->slug;
                        }
                      }

                      $prefix = '/akara';
                      if(ICL_LANGUAGE_CODE == 'en'){
                        $prefix = '/akara/en/';
                      }

                      if(in_array('akara', $term_links)) {
                        $link = $prefix. '/product/'. $term_slug;

                      } elseif(in_array('AKARA EGGOLOGY', $term_links)) {
                        $link = apply_filters( 'wpml_permalink', get_the_permalink($post_id), ICL_LANGUAGE_CODE, true );

                      } elseif(in_array('AKARA ISE', $term_links)) {
                        $link = apply_filters( 'wpml_permalink', get_the_permalink($post_id), ICL_LANGUAGE_CODE, true );

                        if(ICL_LANGUAGE_CODE == 'en'){
                          $link = apply_filters( 'wpml_permalink', get_the_permalink($post_id), ICL_LANGUAGE_CODE, true );
                        }
                      }
                    } else {
                      $link = apply_filters( 'wpml_permalink', get_the_permalink($post_id), ICL_LANGUAGE_CODE, true );
                    }
                  ?>
                  <a class="c-search__list-link" href="<?php echo $link; ?>" data-language="<?php echo $post_language; ?>">
                    <div class="c-search-card">
                      <figure class="c-search-card__frame"><img class="c-search-card__image" src="/assets/img/search/img_search_dummy@2x.png" alt=""></figure>
                      <div class="c-search-card__heading"><?php echo get_the_title($post_id); ?></div>
                      <?php
                        $content = '';
                      ?>
                      <div class="c-search-card__content">
                        <p><?php echo get_the_content($post_id); ?></p>
                      </div>
                    </div>
                  </a>
                </div>
                <?php endforeach; ?>
              </div>
              <?php endif; ?>
            </div>
            <?php get_template_part( 'templates/subscriber'); ?>
          </div>
        </div>
      </main>

<?php get_footer(); ?>

<?php
  // CHECK URL
  $root_url = '';
  if( PRODUCTION ) {
    $root_url = '/akara';
  }
?>
<nav class="l-header__menu">
  <div class="l-header__menu-cover"></div>
  <ul class="l-header__menu-list">
    <li class="l-header__menu-item js-gnavi"><a class="l-header__menu-link" data-group="menu" href="#"><span class="l-header__menu-mark">สินค้า</span><span class="fas fa-chevron-down"></span><span class="fas fa-chevron-up"></span></a>
      <div class="l-header__submenu">
        <div class="l-header__submenu-in">
          <ul class="l-header__submenu-list">
            <li class="l-header__submenu-item"><div class="l-header__submenu-link">
              <figure class="image" data-match-height="mega-menu"><img src="/assets/img/common/img_akara_eggs.png" alt="akara"></figure><span class="l-header__submenu-text">akara</span></div>
              <ul class="l-header__submenu-list-02">
              <?php
                $args = array(
                  'hide_empty' => 0,
                  'child_of' => 16,
                );
                $cate = 'product_category';

                $terms = get_terms( $cate, $args );
                // print "<pre>"; print_r($terms);
                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):
              ?>
                <li class="l-header__submenu-list-02-item">
                  <div class="c-mobile-float-text">READY TO COOK</div>
                <?php
                  foreach ( $terms as $term ) :
                    $term_type = get_field('product_category_type', $term->taxonomy . '_' . $term->term_id);
                    if($term_type == 'ready-to-cook'):
                ?>
                  <a class="l-header__submenu-list-02-link" href="<?php echo $root_url; ?>/product/<?php echo $term->slug; ?>"><i class="circle"></i><?php echo $term->name; ?></a>
                  <?php endif; // if($term_type == $product_category_type):?>
                <?php endforeach; ?>
                </li>
              <?php endif; ?>
              <?php
                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):
              ?>
                <li class="l-header__submenu-list-02-item">
                  <div class="c-mobile-float-text">READY TO EAT</div>
                  <?php
                  foreach ( $terms as $term ) :
                    $term_type = get_field('product_category_type', $term->taxonomy . '_' . $term->term_id);
                    if($term_type == 'ready-to-eat'):
                  ?>
                  <a class="l-header__submenu-list-02-link" href="<?php echo $root_url; ?>/product/<?php echo $term->slug; ?>"><i class="circle"></i><?php echo $term->name; ?></a>
                  <?php endif; // if($term_type == $product_category_type):?>
                <?php endforeach; ?>
                </li>
              <?php endif; ?>
              </ul>
            </li>
            <?php
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $args = array(
                'post_type' => 'product',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'paged' => $paged,
                'tax_query' => array(
                  array(
                      'taxonomy' => 'product_category',
                      'field'    => 'id',
                      'terms'    => 14,
                  ),
                ),
              );

              $the_query = new WP_Query( $args );
              // print "<pre>"; print_r($the_query); die();
              if ( $the_query->have_posts() ) :
            ?>
            <li class="l-header__submenu-item"><div class="l-header__submenu-link">
              <figure class="image" data-match-height="mega-menu"><img src="/assets/img/common/menu-akara-eggology@2x.png" alt="AKARA EGGOLOGY"></figure><span class="l-header__submenu-text">AKARA EGGOLOGY</span></div>
              <ul class="l-header__submenu-list-02">
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="<?php echo get_permalink(); ?>"><i class="circle"></i><?php echo get_the_title(); ?></a></li>
              <?php endwhile; ?>
              </ul>
            </li>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
            <?php
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $args = array(
                'post_type' => 'product',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'paged' => $paged,
                'tax_query' => array(
                  array(
                      'taxonomy' => 'product_category',
                      'field'    => 'id',
                      'terms'    => 15,
                  ),
                ),
              );

              $the_query = new WP_Query( $args );
              // print "<pre>"; print_r($the_query); die();
              if ( $the_query->have_posts() ) :
            ?>
            <li class="l-header__submenu-item"><div class="l-header__submenu-link">
              <figure class="image" data-match-height="mega-menu"><img src="/assets/img/common/menu-akara-ise.png" alt="AKARA ISE"></figure><span class="l-header__submenu-text">AKARA ISE</span></div>
              <ul class="l-header__submenu-list-02">
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="<?php echo get_permalink(); ?>"><i class="circle"></i><?php echo get_the_title(); ?></a></li>
              <?php endwhile; ?>
              </ul>
            </li>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
          </ul>
        </div>
      </div>
    </li>
    <li class="l-header__menu-item"><a class="l-header__menu-link" href="<?php echo $root_url; ?>/our-story/"><span class="l-header__menu-mark">เรื่องราวของเรา</span></a></li>
    <li class="l-header__menu-item"><a class="l-header__menu-link" href="<?php echo $root_url; ?>/recipe/"><span class="l-header__menu-mark">สูตรอาหาร</span></a></li>
    <li class="l-header__menu-item nav-about js-gnavi"><a class="l-header__menu-link" data-group="menu" href="#"><span class="l-header__menu-mark">เกี่ยวกับเรา</span><span class="fas fa-chevron-down"></span><span class="fas fa-chevron-up"></span></a>
      <div class="l-header__submenu -about-us">
        <div class="l-header__submenu-in">
          <ul class="l-header__submenu-list">
            <li class="l-header__submenu-item">
              <ul class="l-header__submenu-list-02">
                <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="<?php echo $root_url; ?>/about-us/"><i class="circle"></i>เกี่ยวกับอัครากรุ๊ป</a></li>
                <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="<?php echo $root_url; ?>/faq/"><i class="circle"></i>คำถามที่พบบ่อย</a></li>
                <!-- <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="<?php echo $root_url; ?>/media/"><i class="circle"></i>สื่อ</a></li> -->
                <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="<?php echo $root_url; ?>/news/"><i class="circle"></i>ข่าวสาร & บทความ</a></li>
                <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="<?php echo $root_url; ?>/careers/"><i class="circle"></i>ร่วมงานกับเรา</a></li>
                <li class="l-header__submenu-list-02-item"><a class="l-header__submenu-list-02-link" href="<?php echo $root_url; ?>/contact-us/"><i class="circle"></i>ติดต่อเรา</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </li>
  </ul>
</nav>
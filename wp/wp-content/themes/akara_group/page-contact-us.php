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

	if ( have_posts() ) :

		while ( have_posts() ) :
			the_post();
?>
      <main class="l-container">
        <div class="l-container__inner">
          <div class="p-contact-us">
            <div class="c-mv-sub-page">
              <div class="c-mv-sub-page__inner">
                <div class="c-mv-sub-page__box-content">
                  <?php if(get_field('main_visual_subpage_heading')!=''): ?>
                  <div class="c-mv-sub-page__heading"><?php echo get_field('main_visual_subpage_heading'); ?></div>
                  <?php endif; ?>
                  <?php if(get_field('main_visual_subpage_sub_heading')!=''): ?>
                  <div class="c-mv-sub-page__sub-heading"><?php echo get_field('main_visual_subpage_sub_heading'); ?></div>
                  <?php endif; ?>
                  <?php if(get_field('main_visual_subpage_content')!=''): ?>
                  <div class="c-mv-sub-page__text"><?php echo get_field('main_visual_subpage_content'); ?></div>
                  <?php endif; ?>
                  <a class="c-mv-sub-page__anchor-icon js-scroll c-scroll-down-button__static-page" href="#scroll_timeline">
                    <div class="c-scroll-down-line"></div></a>
                </div>
                <div class="c-mv-sub-page__box-image">
                  <figure class="c-mv-sub-page__image-frame"><img src="/assets/img/contact-us/img_mv_contact_us.png" alt=""></figure>
                </div>
              </div>
            </div>
            <div class="c-box-time-line">
              <div class="c-box-time-line__inner">
                <div class="c-box-time-line__line"></div>
                <div class="c-box-time-line__list" id="scroll_timeline">
                  <div class="c-box-time-line__item animation-element slide-top">
                    <div class="c-box-time-line__image">
                      <div class="c-box-time-line__image-frame"><img src="/assets/img/contact-us/img_contact_us_01.png" alt="บริษัท อัครากรุ๊ป จำกัด"></div>
                    </div>
                    <div class="c-box-time-line__content">
                      <div class="c-box-time-line__content-heading -small">บริษัท แสงทองสหฟาร์ม จำกัด</div>
                      <div class="c-box-time-line__content-heading -small">บริษัท อัครากรุ๊ป จำกัด</div>
                      <ul class="c-box-time-line__content-list">
                        <li class="c-box-time-line__content-list-item"><i class="icon-time"></i>
                          <div class="c-box-detail">
                            <div class="heading">วันและเวลาทำการ</div>
                            <div class="detail">วันจันทร์-วันเสาร์ : 8.00 น. –  17.00 น.</div>
                          </div>
                        </li>
                        <li class="c-box-time-line__content-list-item"><i class="icon-location"></i>
                          <div class="c-box-detail">
                            <div class="heading">ที่อยู่ | <a class="link" href="https://goo.gl/maps/jCzWrU99W5Xk2RpT8" target="_blank">คลิกดูแผนที่</a></div>
                            <div class="detail">211 หมู่ 10 ต.ป่าขะ อ.บ้านนา จ.นครนายก 26110</div>
                          </div>
                        </li>
                        <li class="c-box-time-line__content-list-item"><i class="icon-email"></i>
                          <div class="c-box-detail -full">
                            <div class="heading">Email</div>
                            <div class="detail"><a href="mailto:webadmin@akaragroup.co.th" title="ติดต่อเรา" class="c-link-cmn-03">webadmin@akaragroup.co.th</a></div>
                          </div>
                        </li>
                        <li class="c-box-time-line__content-list-item"><i class="icon-tel"></i>
                          <div class="c-box-detail -full">
                            <div class="heading">เบอร์โทรศัพท์</div>
                            <div class="detail"><a href="tel:037349888" title="โทรหาเรา 037-349-888" class="c-link-cmn-03">037-349-888</a>, <a href="tel:09238077713" title="โทรหาเรา 0923807771"" class="c-link-cmn-03">092-380-7771</a></div>
                          </div>
                        </li>
                        <li class="c-box-time-line__content-list-item"><i class="icon-fax"></i>
                          <div class="c-box-detail">
                            <div class="heading">เบอร์แฟกซ์</div>
                            <div class="detail">037-349-886</div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <?php /*
                  <div class="c-box-time-line__item animation-element slide-top">
                    <div class="c-box-time-line__image">
                      <div class="c-box-time-line__image-frame"><img src="/assets/img/contact-us/img_contact_us_01.png" alt="บริษัท แสงทองสหฟาร์ม จำกัด"></div>
                    </div>
                    <div class="c-box-time-line__content">
                      <div class="c-box-time-line__content-heading -small">บริษัท แสงทองสหฟาร์ม จำกัด</div>
                      <ul class="c-box-time-line__content-list">
                        <li class="c-box-time-line__content-list-item"><i class="icon-time"></i>
                          <div class="c-box-detail">
                            <div class="heading">วันและเวลาทำการ</div>
                            <div class="detail">วันจันทร์-วันเสาร์ : 8.00 น. –  17.00 น.</div>
                          </div>
                        </li>
                        <li class="c-box-time-line__content-list-item"><i class="icon-location"></i>
                          <div class="c-box-detail">
                            <div class="heading">ที่อยู่ | <a class="link" href="https://goo.gl/maps/jCzWrU99W5Xk2RpT8" target="_blank">คลิกดูแผนที่</a></div>
                            <div class="detail">211 หมู่ 10 ต.ป่าขะ อ.บ้านนา จ.นครนายก 26110</div>
                          </div>
                        </li>
                        <li class="c-box-time-line__content-list-item"><i class="icon-email"></i>
                          <div class="c-box-detail -full">
                            <div class="heading">Email</div>
                            <div class="detail"><a href="mailto:webadmin@akaragroup.co.th" title="ติดต่อเรา" class="c-link-cmn-03">webadmin@akaragroup.co.th</a></div>
                          </div>
                        </li>
                        <li class="c-box-time-line__content-list-item"><i class="icon-tel"></i>
                          <div class="c-box-detail -full">
                            <div class="heading">เบอร์โทรศัพท์</div>
                            <div class="detail"><a href="tel:037349888" title="โทรหาเรา 037-349-888" class="c-link-cmn-03">037-349-888</a>, <a href="tel:09238077713" title="โทรหาเรา 0923807771"" class="c-link-cmn-03">092-380-7771</a></div>
                          </div>
                        </li>
                        <li class="c-box-time-line__content-list-item"><i class="icon-fax"></i>
                          <div class="c-box-detail">
                            <div class="heading">เบอร์แฟกซ์</div>
                            <div class="detail">037-349-886</div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  */ ?>
                </div>
              </div>
            </div>
            <div class="c-box-contact-form">
              <div class="c-box-contact-form__inner">
                <?php if(get_field('contact_form')!=''): ?>
                  <?php echo do_shortcode(get_field('contact_form')); ?>
                <?php endif; ?>
              </div>
            </div>
            <div class="c-connect-with-us animation-element slide-top">
              <div class="c-connect-with-us__heading">Connect with us:</div>
              <div class="c-list-sns">
                <div class="c-list-sns__item"><a class="c-list-sns__link" href="https://www.facebook.com/akaragroupTH" target="_blank"><i class="fab fa-facebook"></i></a></div>
                <div class="c-list-sns__item"><a class="c-list-sns__link" href="https://www.youtube.com/channel/UCACP4vYwPZLgrucq-5mu1zQ" target="_blank"><i class="fab fa-youtube"></i></a></div>
                <div class="c-list-sns__item"><a class="c-list-sns__link" href="https://www.instagram.com/akarabrand/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a></div>
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

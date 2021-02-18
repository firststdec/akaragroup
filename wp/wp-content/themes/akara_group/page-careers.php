<?php
/**
 * The template for displaying single posts and pages.
 *
 *  * Template Name: Career Template
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
          <div class="p-career">
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
                  <a class="c-mv-sub-page__anchor-icon js-scroll c-scroll-down-button__static-page" href="#scroll_timeline"><div class="c-scroll-down-line"></div></a>
                </div>
                <div class="c-mv-sub-page__box-image">
                  <figure class="c-mv-sub-page__image-frame"><img src="/assets/img/career/img_mv_career.png" alt=""></figure>
                </div>
              </div>
            </div>
            <div class="c-box-time-line">
              <div class="c-box-time-line__inner">
                <div class="c-box-time-line__line"></div>
                <div class="c-box-time-line__list" id="scroll_timeline">
                  <div class="c-box-time-line__item animation-element slide-top">
                    <div class="c-box-time-line__image">
                      <div class="c-box-time-line__image-frame"><img src="/assets/img/career/img_career_01@3x.png" alt=""></div>
                    </div>
                    <div class="c-box-time-line__content">
                      <div class="c-heading-egg">
                        <div class="c-heading-egg__icon">
                          <div class="c-clipboard-icon"></div>
                        </div>
                        <div class="c-heading-egg__text -small"><?php echo (is_th_lang()? 'ตำแหน่งงานที่เปิดรับ' : 'Jobs Opening'); ?></div>
                      </div>
                      <?php get_template_part('templates/job_th_heading'); ?>
                      <div class="c-box-time-line__link">
                        <div class="c-box-time-line__link-text">
                          <div class="c-hand-icon"></div>คลิกที่ตำแหน่งเพื่อกดส่งใบสมัคร หรือติดต่อเราตามข้อมูลด้านล่าง
                        </div>
                      </div>
                      <div class="c-box-contact">
                        <div class="c-box-contact__heading">ติดต่อฝ่ายบุคคล:  โทร. <a href="tel:037349885" title="โทรหาเรา 037-349-885" class="c-link-cmn-01">037-349-885 ต่อ 3</a></div>
                        <div class="c-box-contact__list">
                          <div class="c-box-contact__list-item">
                            <div class="heading">บริษัท อัครากรุ๊ป จำกัด</div>
                            <div class="text">88 หมู่ 2 ต.ป่าขะ อ.บ้านนา จ.นครนายก 26110</div>
                          </div>
                          <div class="c-box-contact__list-item">
                            <div class="heading">วันและเวลาทำการ</div>
                            <div class="text">วันจันทร์ – วันเสาร์ <br>08:00 – 17:00 น.</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                    if( !is_th_lang() ) {
                      $content_heading_02 = 'Work @Akara';
                      $content_sub_heading_02 = 'Lorem ipsum dolor sit amet, consetetur';
                      $content_text_02_01 = 'We encourage all employees to improve their effectiveness that would create true understanding of job responsibility which leads to the achievement of both individual and team success.';
                      $content_text_02_02 = 'Working environment at Akara promote good work relationship in all aspects. We treat each other the way we want to be treated and we believe that people work best when there is a foundation of trust. We encourage two-way communication throughout the organization and provide our employees good opportunity in their career paths.';
                      $content_text_02_03 = '';
                    } elseif( is_th_lang() ) {
                      $content_heading_02 = 'ร่วมงานกับเรา';
                      $content_sub_heading_02 = '';
                      $content_text_02_01= '‘เครือบริษัท แสงทอง อัครา กรุ๊ป’ คือ ตัวจริงเรื่องไข่ไก่ และเป็นหนึ่งในผู้นำด้านการผลิตและจัดจำหน่ายไข่ไก่ อันดับต้นๆ ของประเทศไทย ซึ่งประกอบด้วย บริษัท อัครากรุ๊ป, อัครา-ไอเซ,  แสงทองสหฟาร์ม, แสงทองปศุสัตว์, อรรณพฟาร์มบ้านนา, อรรณพชัยภูมิฟาร์ม  และแสงทองอาหารสัตว์';
                      $content_text_02_02= 'ในฐานะผู้ผลิตอาหารที่เติบโตอย่างต่อเนื่อง เราเชื่อมั่นและใส่ใจในความพิถีพิถันในทุกขั้นตอน และมุ่งมั่นพัฒนาเทคโนโลยี เพื่อให้ได้สินค้าที่ได้คุณภาพมาตรฐาน สะอาด ปลอดภัย ดีต่อสุขภาพ และมีสินค้าที่หลากหลาย ตอบโจทย์ชีวิตประจำวันของทุกๆ คน ภายใต้แบรนด์ อัครา, อัครา เอคโคโลยี, โมริทามะ และฟาร์มแสงทอง ตั้งแต่สินค้า ไข่ไก่สดอนามัย ไข่ไก่ออร์แกนิค ไข่ไก่สไตล์ญี่ปุ่น ไข่ไก่แปรรูป เต้าหู้ถ้วย ไข่ตุ๋นถ้วย พร้อมทาน และอื่นๆ อีกมากมาย';
                      $content_text_02_03= 'มาร่วมเป็นส่วนหนึ่งขององกรณ์ที่ตั้งใจมอบสิ่งที่ดีที่สุดให้กับผู้บริโภคไปด้วยกัน เราเชื่อมั่นในบุคคลากรของเรา ที่เต็มเปี่ยมไปด้วยศักยภาพและความตั้งใจในการทำงาน เราพร้อมเปิดโอกาสให้คุณได้พัฒนาอย่างต่อเนื่อง ส่งต่อทั้งสุขภาพที่ดี และแรงบันดาลใจไปพร้อมกับครอบครัว ‘แสงทอง อัครา กรุ๊ป’';
                    }
                  ?>
                  <div class="c-box-time-line__item animation-element slide-top">
                    <div class="c-box-time-line__image">
                      <div class="c-box-time-line__image-frame"><img src="/assets/img/career/img_career_02.png?v=11102020" alt=""></div>
                    </div>
                    <div class="c-box-time-line__content">
                      <div class="c-box-time-line__content-heading -small"><?php echo $content_heading_02; ?></div>
                      <!-- <div class="c-box-time-line__content-sub-heading">Lorem ipsum dolor sit amet, consetetur</div> -->
                      <?php if( $content_text_02_01 != '' ): ?>
                      <div class="c-box-time-line__content-text"><?php echo $content_text_02_01; ?></div>
                      <?php endif; ?>
                      <?php if( $content_text_02_02 != '' ): ?>
                      <div class="c-box-time-line__content-text"><?php echo $content_text_02_02; ?></div>
                      <?php endif; ?>
                      <?php if( $content_text_02_03 != '' ): ?>
                      <div class="c-box-time-line__content-text"><?php echo $content_text_02_03; ?></div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-box-jobs">
              <?php get_template_part('templates/job_th'); ?>
            </div>
            <div class="c-voice-box">
              <div class="c-wave-cream">
                <canvas id="canvas-cream"></canvas>
              </div>
              <div class="c-voice-box__inner">
                <div class="c-voice-box__fix-box animation-element slide-top">
                  <div class="c-voice-box__fix-box-inner">
                    <div class="c-voice-box__fix-box-heading">
                      <div class="c-voice-box__fix-box-heading-icon">
                        <div class="c-comment-icon"></div>
                      </div>
                      <div class="c-voice-box__fix-box-heading-text">เสียงจากคนทานไข่อัครา</div>
                    </div>
                    <div class="c-voice-box__fix-box-text">These tasty certified USDA Organic eggs come from farms that have been pesticide-free.</div>
                  </div>
                </div>
                <?php
                if(ICL_LANGUAGE_CODE == 'en'):
                  $testimonial_id = 163;
                elseif(ICL_LANGUAGE_CODE == 'th'):
                  $testimonial_id = 159;
                endif;
                ?>
                <?php
                  // Check rows exists.
                  if( have_rows('testimonial_rpt', $testimonial_id) ):
                ?>
                <div class="c-voice-box__slider-box animation-element slide-top">

                  <!-- Slider main container-->
                  <div class="swiper-container js-swiper-voice">
                    <!-- Additional required wrapper-->
                    <div class="swiper-wrapper">
                      <!-- Slides-->
                      <?php
                        // Loop through rows.
                        while( have_rows('testimonial_rpt', $testimonial_id) ) : the_row();
                      ?>
                      <div class="swiper-slide">
                        <div class="c-card-voice">
                          <?php if(get_sub_field('testimonial_rpt_heading', $testimonial_id)!=''): ?>
                          <div class="c-card-voice__heading"><?php echo get_sub_field('testimonial_rpt_heading', $testimonial_id); ?></div>
                          <?php endif; ?>
                          <?php if(get_sub_field('testimonial_rpt_content', $testimonial_id)!=''): ?>
                          <div class="c-card-voice__text">"<?php echo get_sub_field('testimonial_rpt_content', false, $testimonial_id); ?>"</div>
                          <?php endif; ?>
                          <div class="c-card-voice__author">
                            <div class="c-card-voice__author-icon"></div>
                            <div class="c-card-voice__author-staff">
                            <?php if(get_sub_field('testimonial_rpt_name', $testimonial_id)!=''): ?>
                              <div class="c-card-voice__author-staff-name"><?php echo get_sub_field('testimonial_rpt_name', $testimonial_id); ?></div>
                            <?php endif; ?>
                            <?php if(get_sub_field('testimonial_rpt_position', $testimonial_id)!=''): ?>
                              <div class="c-card-voice__author-staff-position"><?php echo get_sub_field('testimonial_rpt_position', $testimonial_id); ?></div>
                            <?php endif; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php endwhile; ?>
                    </div>
                    <!-- If we need navigation buttons-->
                    <div class="swiper-box-control">
                      <div class="swiper-button-prev -voice"></div>
                      <div class="swiper-button-next -voice"></div>
                    </div>
                  </div>
                  <div class="swiper-box-control-trigger">
                    <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                    <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
                  </div>

                </div>
                <?php endif; ?>
              </div>
              <div class="c-wave-cream-bottom">
                <canvas id="canvas-cream-bottom"></canvas>
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

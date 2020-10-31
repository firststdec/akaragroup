<?php
/**
 * The template for displaying single posts and pages.
 *
 * Template Name: About us Template
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
          <div class="p-about-us">
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
                  <figure class="c-mv-sub-page__image-frame"><img src="/assets/img/about-us/mv_about_us.png" alt=""></figure>
                </div>
              </div>
            </div>
            <div class="c-box-time-line">
              <div class="c-box-time-line__inner">
                <div class="c-box-time-line__line"></div>
                <div class="c-box-time-line__list" id="scroll_timeline">
                  <div class="c-box-time-line__item animation-element slide-top">
                    <div class="c-box-time-line__image">
                      <div class="c-box-time-line__image-frame"><img src="/assets/img/about-us/img_about_us_01.png" alt=""></div>
                    </div>
                    <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
                    <div class="c-box-time-line__content">
                      <div class="c-box-time-line__content-text">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics. No hormones are used in egg production either! Best of all, they come from happy hens who are free to roam and play.</div>
                      <div class="c-box-time-line__content-text">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics.</div>
                    </div>
                    <?php elseif(ICL_LANGUAGE_CODE == 'th'): ?>
                    <div class="c-box-time-line__content">
                      <div class="c-box-time-line__content-text">กว่าจะเป็นไข่ไก่ฟาร์มแสงทอง… ทุกขั้นตอนเราพิถีพิถันใส่ใจในทุกรายละเอียด เพื่อที่จะได้ไข่ไก่ คุณภาพ ปลอดภัยและได้มาตรฐาน ซึ่งเราสามารถควบคุมการผลิตตั้งแต่ต้นน้ำจนถึงปลายน้ำ</div>
                      <div class="c-box-time-line__content-text">ตั้งแต่คัดเลือกสายพันธุ์พ่อแม่พันธุ์ไก่ไข่ สายพันธุ์ Lohnmann จากประเทศเยอรมัน เป็นรายแรกและรายเดียวที่นำเข้าสำเร็จและผลิตจนได้ลูกไก่ที่แข็งแรงพันธุ์ “ซับใหญ่ บราวน์”เลี้ยงในโรงเรือนที่ทันสมัยสามารถควบคุมความเย็น (EVAP system)และมีระบบป้องกันโรคอย่างเข้มงวด เทคโนโลยีและอุปกรณ์ต่างๆภายในฟาร์มล้วนได้มาตรฐานนำเข้าจากยุโรป</div>
                      <div class="c-box-time-line__content-text">จากลูกไก่เจริญเติบโตเป็นไก่สาว และพร้อมแล้วที่จะเป็นแม่ไก่สุขภาพดีที่จะออกไข่ไก่สดคุณภาพมาตรฐานแสงทองสู่มือผู้บริโภคชาวไทย</div>
                    </div>
                    <?php endif;?>
                  </div>
                  <div class="c-box-time-line__item animation-element slide-top">
                    <div class="c-box-time-line__image">
                      <div class="c-box-time-line__image-frame"><img src="/assets/img/about-us/img_about_us_02.png" alt=""></div>
                    </div>
                    <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
                    <div class="c-box-time-line__content">
                      <div class="c-box-time-line__content-heading -small">Sang thong Farm</div>
                      <div class="c-box-time-line__content-text">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics. No hormones are used in egg production either! Best of all, they come from happy hens who are free to roam and play.</div>
                    </div>
                    <?php elseif(ICL_LANGUAGE_CODE == 'th'): ?>
                    <div class="c-box-time-line__content">
                      <div class="c-box-time-line__content-heading -small">แสงทองฟาร์ม</div>
                      <div class="c-box-time-line__content-text">จุดเริ่มต้นจากธุรกิจฟาร์มไก่เนื้อ พัฒนาต่อยอดมาสู่ธุรกิจฟาร์มไข่ไก่สด และผลิตภัณฑ์แปรรูปจากไข่ไก่ ดำเนินการอย่างต่อเนื่องมาจนถึงปัจจุบันเป็นระยะเวลานานกว่า 25 ปี ด้วยกำลังการผลิตและส่งออกกว่า 2 ล้านฟองต่อวัน จึงมั่นใจได้ในคุณภาพ ความเชี่ยวชาญ และตัวจริงด้านไข่ไก่</div>
                    </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-our-brand">
              <div class="c-our-brand__inner">
                <div class="c-heading-box-egg animation-element slide-top">
                  <div class="c-heading-egg">
                    <div class="c-heading-egg__icon">
                      <div class="i-barn-yellow"></div>
                    </div>
                    <div class="c-heading-egg__text">Our Brand</div>
                  </div>
                </div>
                <div class="c-our-brand__list">
                  <div class="c-our-brand__item animation-element slide-top">
                    <div class="c-our-brand__card">
                      <div class="c-our-brand__card-image">
                        <div class="c-our-brand__card-frame">
                          <!-- Slider main container-->
                          <div class="swiper-container js-slider-multi">
                            <!-- Additional required wrapper-->
                            <div class="swiper-wrapper">
                              <!-- Slides-->
                              <div class="swiper-slide"><img src="/assets/img/about-us/img_about_us_08.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/img_about_us_09.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/img_about_us_10.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/img_about_us_07.png" alt=""></div>
                            </div>
                            <!-- If we need navigation buttons-->
                            <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
                          </div>
                          <div class="c-fake-nav-control">
                            <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
                          </div>
                        </div>
                      </div>
                      <?php
                        if(ICL_LANGUAGE_CODE == 'en') {
                          $sub_heading_02 = 'Fresh chicken eggs from healthy hens.';
                          $sub_content_02 = 'Expert in egg manufacturing with over 25 years of experience with a standard production of over 2 million eggs per day. Fresh from the farm every day Quality control at every step Therefore getting eggs that are fresh, clean, safe and meet international standards.';
                        } elseif (ICL_LANGUAGE_CODE == 'th') {
                          $sub_heading_02 = 'ไข่ไก่สดจากแม่ไก่สุขภาพดี';
                          $sub_content_02 = 'ผู้เชี่ยวชาญด้านการผลิตไข่ไก่ที่มีประสบการณ์ยาวนานกว่า 25 ปี ด้วยมาตรฐานในการผลิตกว่า 2 ล้านฟองต่อวัน สดใหม่จากฟาร์มทุกวัน ควบคุมคุณภาพในทุกขั้นตอน จึงได้ไข่ไก่ที่สด สะอาด ปลอดภัยและได้มาตรฐานระดับสากล ';
                        }
                      ?>
                      <div class="c-our-brand__card-content">
                        <div class="c-our-brand__card-content-heading-logo"><img src="/assets/img/about-us/ico_logo_about_us_02.svg" alt=""></div>
                        <div class="c-our-brand__card-content-heading-sub"><?php echo $sub_heading_02; ?></div>
                        <div class="c-our-brand__card-content-text"><?php echo $sub_content_02; ?></div>
                      </div>
                    </div>
                  </div>
                  <div class="c-our-brand__item animation-element slide-top">
                    <div class="c-our-brand__card">
                      <div class="c-our-brand__card-image">
                        <div class="c-our-brand__card-frame">
                          <!-- Slider main container-->
                          <div class="swiper-container js-slider-multi">
                            <!-- Additional required wrapper-->
                            <div class="swiper-wrapper">
                              <!-- Slides-->
                              <div class="swiper-slide"><img src="/assets/img/about-us/img_about_us_07.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/img_about_us_08.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/img_about_us_09.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/img_about_us_10.png" alt=""></div>
                            </div>
                            <!-- If we need navigation buttons-->
                            <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
                          </div>
                          <div class="c-fake-nav-control">
                            <div class="swiper-button-prev -fake"><i class="fas fa-chevron-left"></i></div>
                            <div class="swiper-button-next -fake"><i class="fas fa-chevron-right"></i></div>
                          </div>
                        </div>
                      </div>
                      <?php
                        if(ICL_LANGUAGE_CODE == 'en') {
                          $sub_heading_01 = 'Hygienic eggs add value to every moment of your life.';
                          $sub_content_01 = 'Fresh and hygienic chicken eggs, Akara chicken eggs that have been certified by the Department of Livestock Development, the first in Thailand, guaranteed fresh, clean, safe from hormones. And antibiotics Standardized in every bubble.';
                        } elseif (ICL_LANGUAGE_CODE == 'th') {
                          $sub_heading_01 = 'ไข่ไก่อนามัยเติมคุณค่าในทุกช่วงเวลาของคุณ ';
                          $sub_content_01 = 'ไข่ไก่สดอนามัย อัครา ไข่ไก่ที่ได้รับการรับรองมาตรฐานจากกรมปศุสัตว์รายแรกในประเทศไทย การันตีความ สด สะอาด ปลอดภัยจากสารเร่งฮอร์โมน และยาปฏิชีวนะ ได้มาตรฐานในทุกฟอง';
                        }
                      ?>
                      <div class="c-our-brand__card-content">
                        <div class="c-our-brand__card-content-heading-logo"><img src="/assets/img/about-us/ico_logo_about_us_01.svg" alt=""></div>
                        <div class="c-our-brand__card-content-heading-sub"><?php echo $sub_heading_01; ?></div>
                        <div class="c-our-brand__card-content-text"><?php echo $sub_content_01; ?></div>
                      </div>
                    </div>
                  </div>
                  <div class="c-our-brand__item animation-element slide-top">
                    <div class="c-our-brand__card">
                      <div class="c-our-brand__card-image">
                        <div class="c-our-brand__card-frame">
                          <!-- Slider main container-->
                          <div class="swiper-container js-slider-multi">
                            <!-- Additional required wrapper-->
                            <div class="swiper-wrapper">
                              <!-- Slides-->
                              <div class="swiper-slide"><img src="/assets/img/about-us/img_about_us_10.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/img_about_us_07.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/img_about_us_08.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/img_about_us_09.png" alt=""></div>
                            </div>
                            <!-- If we need navigation buttons-->
                            <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
                          </div>
                          <div class="c-fake-nav-control">
                            <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
                          </div>
                        </div>
                      </div>
                      <?php
                        if(ICL_LANGUAGE_CODE == 'en') {
                          $sub_heading_04 = '';
                          $sub_content_04 = 'Free premium fresh chicken eggs, Japanese style It is formed through a collaboration between AKARA Group and ISE Food, Inc., a major egg leader in Japan. Through the production process from a specific technology Resulting in fresh, clean, germ-free eggs Can be eaten raw under the brand MORI-TAMA.';
                        } elseif (ICL_LANGUAGE_CODE == 'th') {
                          $sub_heading_04 = '';
                          $sub_content_04 = 'ไข่ไก่สดระดับฟรีเมี่ยมสไตล์ญี่ปุ่น เกิดขึ้นจากความร่วมมือระหว่าง AKARA Group และ ISE Food , Inc ผู้นำด้านไข่ไก่รายใหญ่ในญี่ปุ่น ผ่านกระบวนการผลิตจากเทคโนโลยีเฉพาะ ทำให้ได้ไข่ที่สด สะอาด ปราศจากเชื้อโรค สามารถทานดิบได้ ภายใต้แบรนด์ MORI-TAMA ';
                        }
                      ?>
                      <div class="c-our-brand__card-content">
                        <div class="c-our-brand__card-content-heading-logo"><img src="/assets/img/about-us/ico_logo_about_us_04.svg" alt=""></div>
                        <div class="c-our-brand__card-content-text"><?php echo $sub_content_04; ?></div>
                      </div>
                    </div>
                  </div>
                  <div class="c-our-brand__item animation-element slide-top">
                    <div class="c-our-brand__card">
                      <div class="c-our-brand__card-image">
                        <div class="c-our-brand__card-frame">
                          <!-- Slider main container-->
                          <div class="swiper-container js-slider-multi">
                            <!-- Additional required wrapper-->
                            <div class="swiper-wrapper">
                              <!-- Slides-->
                              <div class="swiper-slide"><img src="/assets/img/about-us/img_about_us_09.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/img_about_us_10.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/img_about_us_07.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/img_about_us_08.png" alt=""></div>
                            </div>
                            <!-- If we need navigation buttons-->
                            <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
                          </div>
                          <div class="c-fake-nav-control">
                            <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
                          </div>
                        </div>
                      </div>
                      <?php
                        if(ICL_LANGUAGE_CODE == 'en') {
                          $sub_heading_03 = '';
                          $sub_content_03 = 'Tofu products from real eggs, fresh and clean, through the production process of Thai people, certified by ISO 22000, GMP / HACCP and FDA, fresh produce, delivered directly to consumers on a day-to-day basis.';
                        } elseif (ICL_LANGUAGE_CODE == 'th') {
                          $sub_heading_03 = '';
                          $sub_content_03 = 'ผลิตภัณฑ์เต้าหู้หลอดจากไข่ไก่แท้ ๆ ใหม่ สด สะอาด ผ่านกระบวนการผลิตจากฝีมือคนไทย ได้มาตรฐาน ISO 22000, GMP/HACCP และ อย. ผลิตสด ใหม่ ส่งตรงถึงมือผู้บริโภคแบบวันต่อวัน ';
                        }
                      ?>
                      <div class="c-our-brand__card-content">
                        <div class="c-our-brand__card-content-heading-logo"><img src="/assets/img/about-us/ico_logo_about_us_03.svg" alt=""></div>
                        <div class="c-our-brand__card-content-text"><?php echo $sub_content_03; ?></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-voice-box">
              <div class="c-wave-yellow">
                <canvas id="canvas-yellow-02"></canvas>
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
              <div class="c-wave-yellow-bottom">
                <canvas id="canvas-yellow-bottom-02"></canvas>
              </div>
            </div>
            <div class="c-box-certificate animation-element slide-top">
              <div class="c-box-certificate__inner">
                <div class="c-heading-box-egg">
                  <div class="c-heading-egg">
                    <div class="c-heading-egg__text">Certification Standards</div>
                  </div>
                  <div class="c-heading-egg-content -lg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, diam nonumy <br>tempor invidunt ut labore et dolore</div>
                </div>
                <div class="c-box-certificate__list">
                  <div class="c-box-certificate__item">
                    <figure class="c-box-certificate__image"><img src="/assets/img/common/img_certification_01.png" alt=""></figure>
                  </div>
                  <div class="c-box-certificate__item">
                    <figure class="c-box-certificate__image"><img src="/assets/img/common/img_certification_02.png" alt=""></figure>
                  </div>
                  <div class="c-box-certificate__item">
                    <figure class="c-box-certificate__image"><img src="/assets/img/common/img_certification_03.png" alt=""></figure>
                  </div>
                  <div class="c-box-certificate__item">
                    <figure class="c-box-certificate__image"><img src="/assets/img/common/img_certification_04.png" alt=""></figure>
                  </div>
                </div>
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

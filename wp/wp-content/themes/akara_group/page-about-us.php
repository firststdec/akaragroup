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
                      <div class="c-box-time-line__content-text">Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16 เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ</div>
                      <div class="c-box-time-line__content-text">แต่อยู่มาจนถึงยุคที่พลิกโฉมเข้าสู่งานเรียงพิมพ์ด้วยวิธีทางอิเล็กทรอนิกส์ และยังคงสภาพเดิมไว้อย่างไม่มีการเปลี่ยนแปลง มันได้รับความนิยมมากขึ้นในยุค ค.ศ. 1960</div>
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
                      <div class="c-box-time-line__content-text">Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16 เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ</div>
                    </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-box-our-egg">
              <div class="c-wave-yellow">
                <canvas id="canvas-yellow"></canvas>
              </div>
              <div class="c-box-our-egg__inner">
                <div class="c-heading-box-egg animation-element slide-top">
                  <div class="c-heading-egg">
                    <div class="c-heading-egg__icon -white">
                      <div class="c-egg-solid"></div>
                    </div>
                    <div class="c-heading-egg__text">Our Eggs</div>
                  </div>
                  <div class="c-heading-egg-content -lg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, diam nonumy <br>tempor invidunt ut labore et dolore</div>
                </div>
                <div class="c-box-our-egg__list animation-element slide-top">
                  <div class="c-box-our-egg__item">
                    <div class="c-box-our-egg_card">
                      <figure class="c-box-our-egg__card-image"><img src="/assets/img/about-us/img_about_us_03.png" alt="Quality Matter"></figure>
                      <div class="c-box-our-egg__card-heading">Quality Matter</div>
                      <div class="c-box-our-egg__card-content">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics.</div>
                    </div>
                  </div>
                  <div class="c-box-our-egg__item">
                    <div class="c-box-our-egg_card">
                      <figure class="c-box-our-egg__card-image"><img src="/assets/img/about-us/img_about_us_04.png" alt="We Care Our Consumer"></figure>
                      <div class="c-box-our-egg__card-heading">We Care Our Consumer</div>
                      <div class="c-box-our-egg__card-content">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics.</div>
                    </div>
                  </div>
                  <div class="c-box-our-egg__item">
                    <div class="c-box-our-egg_card">
                      <figure class="c-box-our-egg__card-image"><img src="/assets/img/about-us/img_about_us_05.png" alt="We Care Our Egg"></figure>
                      <div class="c-box-our-egg__card-heading">We Care Our Egg</div>
                      <div class="c-box-our-egg__card-content">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics.</div>
                    </div>
                  </div>
                  <div class="c-box-our-egg__item">
                    <div class="c-box-our-egg_card">
                      <figure class="c-box-our-egg__card-image"><img src="/assets/img/about-us/img_about_us_06.png" alt="Social Impact"></figure>
                      <div class="c-box-our-egg__card-heading">Social Impact</div>
                      <div class="c-box-our-egg__card-content">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics.</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="c-wave-yellow-bottom">
                <canvas id="canvas-yellow-bottom"></canvas>
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
                      <div class="c-our-brand__card-content">
                        <div class="c-our-brand__card-content-heading-logo"><img src="/assets/img/about-us/ico_logo_about_us_01.svg" alt=""></div>
                        <div class="c-our-brand__card-content-heading-sub">เพราะทุกคำคือธรรมชาติ</div>
                        <div class="c-our-brand__card-content-text">เป็นผลิตภัณฑ์ ที่มีการควบคุมกระบวนการผลิตตั้งแต่ต้นกระบวนการให้ปลอดภัย ปลอดสารเร่งและปลอดยาปฏิชีวนะ จนได้ผลผลิต “ไข่ไก่ออร์แกนิค ปลอดภัย” ได้การรับรองมาตรฐาน GMP/HACCP และ DLD Certificate 2016 ของกรมปศุสัตว์ รายแรกของประเทศไทยเพื่อให้ประชาชนได้บริโภคสินค้าที่มีคุณภาพและปลอดภัย</div>
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
                      <div class="c-our-brand__card-content">
                        <div class="c-our-brand__card-content-heading-logo"><img src="/assets/img/about-us/ico_logo_about_us_02.svg" alt=""></div>
                        <div class="c-our-brand__card-content-heading-sub">“ไข่ไก่สดจากแม่ไก่สุขภาพดี”</div>
                        <div class="c-our-brand__card-content-text">ไข่ไก่คุณภาพดีเยี่ยม ที่เปี่ยมด้วยคุณภาพและสารอาหาร ผ่านกระบวนการผลิตภายใต้การควบคุมคุณภาพด้วยเทคโนโลยีระดับสูง เป็นที่ยอมรับในระดับสากลด้วยมาตรฐาน ISO 22000, GAP, GMP/HACCP และ Halal จึงมั่นใจได้ว่าไข่ไก่ของเรามีคุณภาพสูง</div>
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
                      <div class="c-our-brand__card-content">
                        <div class="c-our-brand__card-content-heading-logo"><img src="/assets/img/about-us/ico_logo_about_us_03.svg" alt=""></div>
                        <div class="c-our-brand__card-content-heading-sub">เพราะทุกคำคือธรรมชาติ</div>
                        <div class="c-our-brand__card-content-text">ฟาร์มไข่ไท เต้าหู้ไข่ไก่แท้ที่สดใหม่ สะอาด ผ่านกระบวนการผลิตจากมือของคนไทย ด้วยมาตรฐาน ISO 22000, GMP/HACCP และ อย. สดทุกวันส่งตรงถึงมือผู้บริโภคแบบวันต่อวัน ฟาร์มไข่ไทเต้าหู้ไข่ไก่แท้เต็มหลอด อุดมไปด้วยสารอาหาร อร่อยและมีประโยชน์ต่อสุขภาพ</div>
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
                      <div class="c-our-brand__card-content">
                        <div class="c-our-brand__card-content-heading-logo"><img src="/assets/img/about-us/ico_logo_about_us_04.svg" alt=""></div>
                        <div class="c-our-brand__card-content-heading-sub">ไข่ไก่คุณภาพมาตรฐานโลก กินดิบได้สไตล์ญี่ปุ่น</div>
                        <div class="c-our-brand__card-content-text">ไข่ไก่สด ระดับพรีเมี่ยม สไตล์ญี่ปุ่น เป็นความร่วมมือระหว่าง AKARA GROUP กับ ISE Food , Inc ผู้นำด้านไข่ไก่ รายใหญ่ที่สุดในญี่ปุ่น ด้วยประสบการณ์ด้านไข่ไก่ยาวนานกว่า 100 ปี ภายใต้เทคโนโลยีการผลิต ที่สดสะอาด ปราศจากเชื้อโรค เราจึงมั่นใจว่าได้ส่งมอบไข่ไก่ที่มีคุณภาพระดับพรีเมี่ยมสู่ผู้บริโภค ภายใต้แบรนด์ “MORI-TAMA”</div>
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
                    <figure class="c-box-certificate__image"><img src="/assets/img/common/img_certification_01.svg" alt=""></figure>
                  </div>
                  <div class="c-box-certificate__item">
                    <figure class="c-box-certificate__image"><img src="/assets/img/common/img_certification_02.svg" alt=""></figure>
                  </div>
                  <div class="c-box-certificate__item">
                    <figure class="c-box-certificate__image"><img src="/assets/img/common/img_certification_03.svg" alt=""></figure>
                  </div>
                  <div class="c-box-certificate__item">
                    <figure class="c-box-certificate__image"><img src="/assets/img/common/img_certification_04.svg" alt=""></figure>
                  </div>
                  <div class="c-box-certificate__item">
                    <figure class="c-box-certificate__image"><img src="/assets/img/common/img_certification_05.svg" alt=""></figure>
                  </div>
                  <div class="c-box-certificate__item">
                    <figure class="c-box-certificate__image"><img src="/assets/img/common/img_certification_06.svg" alt=""></figure>
                  </div>
                </div>
              </div>
            </div>
            <div class="l-sec-cmn-01 -box-subscribe">
              <div class="inner">
                <div class="c-box-subscribe animation-element slide-top">
                  <div class="item -signup-text">
                    <div class="box-sign-up"></div>
                  </div>
                  <div class="item">
                    <div class="box-heading">
                      <div class="heading">FOR RECIPES, COUPONS AND OTHER NEWS</div>
                    </div>
                    <div class="box-form">
                      <div class="c-input-row">
                        <input class="c-input -text" type="email" name="email" placeholder="Your E-Mail Address">
                        <div class="c-box-cmn-button">
                          <button class="c-button-cmn-01" type="submit" value=""><span class="text">SUBSCRIBE</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
<?php
		endwhile;
	endif;
?>

<?php get_footer(); ?>

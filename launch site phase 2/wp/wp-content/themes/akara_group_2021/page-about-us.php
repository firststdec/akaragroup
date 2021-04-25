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
                    <?php if(!is_th_lang()): ?>
                    <div class="c-box-time-line__content">
                      <div class="c-box-time-line__content-text">This is our quality eggs ... every process is meticulous. We are attentive to every detail to acquire quality, safe, and standardized eggs through our production processes.</div>
                      <div class="c-box-time-line__content-text">We are one of the first manufacturers in Thailand who selects breeders of laying Lohnmann hens from Germany and successfully imported and produced healthy chicks of “Sub Yai Brown'' in modern hen houses. With the EVAP system control and have a strict disease prevention system. Technology and equipment within the farm are all up to European standards as well.</div>
                      <div class="c-box-time-line__content-text">To produce fresh, quality eggs for everyone's well-being.</div>
                    </div>
                    <?php else: ?>
                    <div class="c-box-time-line__content">
                      <div class="c-box-time-line__content-text">กว่าจะเป็นไข่ไก่คุณภาพของเรา… ทุกขั้นตอนเราพิถีพิถันใส่ใจในทุกรายละเอียด เพื่อที่จะได้ไข่ไก่ คุณภาพ ปลอดภัยและได้มาตรฐาน ซึ่งเราสามารถควบคุมการผลิตตั้งแต่ต้นน้ำจนถึงปลายน้ำ</div>
                      <div class="c-box-time-line__content-text">ตั้งแต่คัดเลือกสายพันธุ์พ่อแม่พันธุ์ไก่ไข่ สายพันธุ์ Lohnmann จากประเทศเยอรมัน เป็นรายแรกและรายเดียวที่นำเข้าสำเร็จและผลิตจนได้ลูกไก่ที่แข็งแรงพันธุ์ “ซับใหญ่ บราวน์”เลี้ยงในโรงเรือนที่ทันสมัยสามารถควบคุมความเย็น (EVAP system)และมีระบบป้องกันโรคอย่างเข้มงวด เทคโนโลยีและอุปกรณ์ต่างๆภายในฟาร์มล้วนได้มาตรฐานนำเข้าจากยุโรป</div>
                      <div class="c-box-time-line__content-text">จากลูกไก่เจริญเติบโตเป็นไก่สาว และพร้อมแล้วที่จะเป็นแม่ไก่สุขภาพดีที่จะออกไข่ไก่สดคุณภาพ ได้มาตรฐาน เพื่อสุขภาพที่ดี และพิเศษของทุกๆคน</div>
                    </div>
                    <?php endif;?>
                  </div>
                  <div class="c-box-time-line__item animation-element slide-top">
                    <div class="c-box-time-line__image">
                      <div class="c-box-time-line__image-frame"><img src="/assets/img/about-us/img_about_us_02.png?v=11102020" alt=""></div>
                    </div>
                    <?php if(!is_th_lang()): ?>
                    <div class="c-box-time-line__content">
                      <div class="c-box-time-line__content-heading -small">akara group x Saeng Thong Saha Farm</div>
                      <div class="c-box-time-line__content-text">Quality egg products from akara group are required quality egg farms. The egg farm that has extensive experience and specializes in the egg production process, and, so that all of our eggs could maintain a high standard for the good of everyone. Like, Saeng Thong Saha Farm Co., Ltd. that has a production and export capacity of more than 2 million eggs per day.</div>
                      <div class="c-box-cmn-button u-mt-30"><a class="c-button-cmn-01 --border-base" href="https://www.akaragroup.co.th/stf/" target="_blank"><span class="text">READ MORE</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
                    </div>
                    <?php else: ?>
                    <div class="c-box-time-line__content">
                      <div class="c-box-time-line__content-heading -small">อัครา กรุ๊ป x ฟาร์มแสงทอง</div>
                      <div class="c-box-time-line__content-text">ผลิตภัณฑ์ไข่ไก่คุณภาพของ อัครา กรุ๊ป จะเป็นไปไม่ได้เลย ถ้าไม่มีส่วนของฟาร์มไข่ไก่ที่เชี่ยวชาญในกระบวนการผลิต และมีประสบการณ์ระดับสูงเฉพาะตัวในเรื่องของไข่ไก่ ที่เป็นตัวจริงในเรื่องไข่ไก่ที่ได้มาตรฐานระดับต้นๆ ของประเทศไทย อย่าง บริษัท แสงทองสหฟาร์ม จำกัด ด้วยกำลังการผลิตและส่งออกมากกว่า 2 ล้านฟองต่อวัน</div>
                      <div class="c-box-cmn-button u-mt-30"><a class="c-button-cmn-01 --border-base" href="https://www.akaragroup.co.th/stf/" target="_blank"><span class="text">อ่านเพิ่มเติม</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
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
                    <div class="c-heading-egg__text">Our Brands</div>
                  </div>
                </div>
                <div class="c-our-brand__list">
                  <?php /*
                  <div class="c-our-brand__item animation-element slide-top">
                    <div class="c-our-brand__card">
                      <div class="c-our-brand__card-image">
                        <div class="c-our-brand__card-frame">
                          <!-- Slider main container-->
                          <div class="swiper-container js-slider-multi">
                            <!-- Additional required wrapper-->
                            <div class="swiper-wrapper">
                              <!-- Slides-->
                              <div class="swiper-slide"><img src="/assets/img/about-us/farm-sangtong-pic-1.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/farm-sangtong-pic-2.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/farm-sangtong-pic-3.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/farm-sangtong-pic01.png?v=2" alt=""></div>
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
                        <div class="c-our-brand__card-content-heading-logo"><img src="/assets/img/about-us/stf_logo.png" alt=""></div>
                        <div class="c-our-brand__card-content-heading-sub"><?php echo $sub_heading_02; ?></div>
                        <div class="c-our-brand__card-content-text">
                          <div><?php echo $sub_content_02; ?></div>
                          <div class="c-box-cmn-button"><a class="c-button-cmn-01 --border-base" href="https://www.akaragroup.co.th/stf/" target="_blank"><span class="text">READ MORE</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  */ ?>
                  <div class="c-our-brand__item animation-element slide-top">
                    <div class="c-our-brand__card">
                      <div class="c-our-brand__card-image">
                        <div class="c-our-brand__card-frame">
                          <!-- Slider main container-->
                          <div class="swiper-container js-slider-multi">
                            <!-- Additional required wrapper-->
                            <div class="swiper-wrapper">
                              <!-- Slides-->
                              <div class="swiper-slide"><img src="/assets/img/about-us/akara-pic-02.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/akara-pic-03.png" alt=""></div>
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
                        if(!is_th_lang()) {
                          $sub_heading_01 = 'akara Hygienic Eggs';
                          $sub_content_01 = 'Fresh hygienic eggs and processed eggs products that have been certified standards from the Department of Livestock Development, Thailand through a standardized manufacturing process. Makes your meals to be more special.';
                        } else {
                          $sub_heading_01 = 'ไข่ไก่อนามัย อัครา';
                          $sub_content_01 = 'แบรนด์ไข่ไก่สดอนามัย และไข่ไก่แปรรูป อัครา คุณภาพสูง ที่ได้รับการรับรอง จากกรมปศุสัตว์ ผ่านกระบวนการผลิตที่ได้มาตรฐาน เติมเต็มความพิเศษให้กับทุกมื้ออาหารของคุณ';
                        }
                      ?>
                      <div class="c-our-brand__card-content">
                        <div class="c-our-brand__card-content-heading-logo -akara"><img src="/assets/img/about-us/ico_logo_about_us_01.svg" alt=""></div>
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
                              <div class="swiper-slide"><img src="/assets/img/about-us/akara-pic-01.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/eggology-pic01.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/IMG_8126@3x.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/eggology-pic03.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/eggology-pic04.png" alt=""></div>
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
                        if(!is_th_lang()) {
                          $sub_heading_05 = 'Healthy Hens Fresh Eggs by AKARA EGGOLOGY';
                          $sub_content_05 = 'Healthy hens fresh eggs by the AKARA EGGOLOGY brand that meets all nutritional needs. Environmental friendly, naturally good taste because we take good care of hens with the certification standards.';
                        } else {
                          $sub_heading_05 = 'ไข่ไก่เพื่อสุขภาพ อัครา เอคโคโลยี';
                          $sub_content_05 = 'แบรนด์ไข่ไก่เพื่อสุขภาพ อัครา เอคโคโลยี ที่ตอบโจทย์ทุกโภชนาการ เป็นมิตรต่อสิ่งแวดล้อม รสชาติดีอย่างธรรมชาติ เพราะส่งเสริมการเลี้ยงแม่ไก่อย่างพิถีพิถัน พร้อมมาตรฐานรับรอง';
                        }
                      ?>
                      <div class="c-our-brand__card-content">
                        <div class="c-our-brand__card-content-heading-logo"><img src="/assets/img/about-us/akara-eggolofy-logo.svg" alt=""></div>
                        <div class="c-our-brand__card-content-heading-sub"><?php echo $sub_heading_05; ?></div>
                        <div class="c-our-brand__card-content-text"><?php echo $sub_content_05; ?></div>
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
                              <div class="swiper-slide"><img src="/assets/img/about-us/moritama-pic-01.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/moritama-pic-02.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/moritama-pic-03.png" alt=""></div>
                              <div class="swiper-slide"><img src="/assets/img/about-us/moritama-pic-1.png" alt=""></div>
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
                        if(!is_th_lang()) {
                          $sub_heading_04 = 'MORI-TAMA Eggs by AKARA ISE';
                          $sub_content_04 = 'Japanese-style Fresh Egg brand which was established from AKARA ISE, which is the result of a joint venture between akara group and ISE Food, INC. as Japanese quality eggs that have been processed with the high technology as in Japan. <br>Plus, controlled cold chain temperature to maintain its freshness. Resulting in fresh, safe, and clean as Japanese eggs. Under the brand name MORI-TAMA.';
                        } else {
                          $sub_heading_04 = 'ไข่ไก่สไตล์ญี่ปุ่น โมริทามะ โดย อัครา-ไอเซ';
                          $sub_content_04 = 'แบรนด์ไข่ไก่ญี่ปุ่น ที่เกิดขึ้นจากความร่วมมือระหว่าง AKARA Group และ ISE Food, INC จนออกมาเป็นไข่ไก่ AKARA ISE ที่ผ่านกระบวนการผลิตด้วยเทคโนโลยีแบบเดียวกับในญี่ปุ่น ทำให้ได้ไข่ไก่ที่สด สะอาด คุณภาพระดับญี่ปุ่น ปลอดภัยจากเชื้อแบคทีเรีย ภายใต้ชื่อแบรนด์ MORI-TAMA';
                        }
                      ?>
                      <div class="c-our-brand__card-content">
                        <div class="c-our-brand__card-content-heading-logo -akara"><img src="/assets/img/about-us/akara-ise-moritama.png" alt=""></div>
                        <div class="c-our-brand__card-content-heading-sub"><?php echo $sub_heading_04; ?></div>
                        <div class="c-our-brand__card-content-text"><?php echo $sub_content_04; ?></div>
                      </div>
                    </div>
                  </div>
                  <?php /*
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
                  */ ?>
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
            <!--div class="c-box-certificate animation-element slide-top">
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
            </div -->
            <?php get_template_part( 'templates/subscriber'); ?>
          </div>
        </div>
      </main>
<?php
		endwhile;
	endif;
?>

<?php get_footer(); ?>

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
                      <div class="c-box-time-line__image-frame"><img src="/assets/img/career/img_career_01.png" alt=""></div>
                    </div>
                    <div class="c-box-time-line__content">
                      <div class="c-heading-egg">
                        <div class="c-heading-egg__icon">
                          <div class="c-clipboard-icon"></div>
                        </div>
                        <div class="c-heading-egg__text -small">Jobs Opening</div>
                      </div>
                      <ul class="c-box-time-line__content-list">
                        <li class="c-box-time-line__content-list-item"><a class="modaal" href="#job-01" data-modaal-type="inline" data-modaal-animation="fade" data-modaal-overlay-opacity="0.9"><i class="fas fa-chevron-right"></i><span class="text">ช่างซ่อมบำรุง (ประจำฟาร์ม)</span></a></li>
                        <li class="c-box-time-line__content-list-item"><a class="modaal" href="#job-02" data-modaal-type="inline" data-modaal-animation="fade" data-modaal-overlay-opacity="0.9"><i class="fas fa-chevron-right"></i><span class="text">เจ้าหน้าที่ฝ่ายทรัพยากรบุคคล (ปทุมธานี)</span></a></li>
                        <li class="c-box-time-line__content-list-item"><a class="modaal" href="#job-03" data-modaal-type="inline" data-modaal-animation="fade" data-modaal-overlay-opacity="0.9"><i class="fas fa-chevron-right"></i><span class="text">เจ้าหน้าที่บัญชี (วุฒิปริญญาตรี 1อัตรา)</span></a></li>
                        <li class="c-box-time-line__content-list-item"><a class="modaal" href="#job-04" data-modaal-type="inline" data-modaal-animation="fade" data-modaal-overlay-opacity="0.9"><i class="fas fa-chevron-right"></i><span class="text">พนักงานบัญชีรายวัน 2 อัตรา</span></a></li>
                        <li class="c-box-time-line__content-list-item"><a class="modaal" href="#job-05" data-modaal-type="inline" data-modaal-animation="fade" data-modaal-overlay-opacity="0.9"><i class="fas fa-chevron-right"></i><span class="text">แม่บ้าน หลายอัตรา</span></a></li>
                        <li class="c-box-time-line__content-list-item"><a class="modaal" href="#job-06" data-modaal-type="inline" data-modaal-animation="fade" data-modaal-overlay-opacity="0.9"><i class="fas fa-chevron-right"></i><span class="text">พนักงาน R&D 1 อัตรา</span></a></li>
                        <li class="c-box-time-line__content-list-item"><a class="modaal" href="#job-07" data-modaal-type="inline" data-modaal-animation="fade" data-modaal-overlay-opacity="0.9"><i class="fas fa-chevron-right"></i><span class="text">พนักงานบันทึกข้อมูลการผลิต 3 อัตรา</span></a></li>
                      </ul>
                      <div class="c-box-time-line__link">
                        <div class="c-box-time-line__link-text">
                          <div class="c-hand-icon"></div>คลิกที่ตำแหน่งเพื่อกดส่งใบสมัคร หรือติดต่อเราตามข้อมูลด้านล่าง
                        </div>
                      </div>
                      <div class="c-box-contact">
                        <div class="c-box-contact__heading">ติดต่อฝ่ายบุคคล:  โทร. 037-349-885</div>
                        <div class="c-box-contact__list">
                          <div class="c-box-contact__list-item">
                            <div class="heading">บริษัท อัครากรุ๊ป จำกัด</div>
                            <div class="text">88 หมู่ 2 ต.ป่าขะ อ.บ้านนา จ.นครนายก 26110</div>
                          </div>
                          <div class="c-box-contact__list-item">
                            <div class="heading">วันและเวลาทำการ</div>
                            <div class="text">วันจันทร์ – วันเสาร์ 08.00 – 17.00</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="c-box-time-line__item animation-element slide-top">
                    <div class="c-box-time-line__image">
                      <div class="c-box-time-line__image-frame"><img src="/assets/img/career/img_career_02.png" alt=""></div>
                    </div>
                    <div class="c-box-time-line__content">
                      <div class="c-box-time-line__content-heading -small">Work @Akara</div>
                      <div class="c-box-time-line__content-sub-heading">Lorem ipsum dolor sit amet, consetetur</div>
                      <div class="c-box-time-line__content-text -strong">We encourage all employees to improve their effectiveness that would create true understanding of job responsibility which leads to the achievement of both individual and team success.</div>
                      <div class="c-box-time-line__content-text">Working environment at Akara promote good work relationship in all aspects. We treat each other the way we want to be treated and we believe that people work best when there is a foundation of trust. We encourage two-way communication throughout the organization and provide our employees good opportunity in their career paths.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-box-jobs">
              <div class="c-box-jobs__detail" id="job-01">
                <div class="c-box-jobs__inner">
                  <div class="c-box-jobs__heading">
                    <div class="title c-heading-03">ช่างซ่อมบำรุง (ประจำฟาร์ม)</div>
                    <div class="location">นครนายก</div>
                  </div>
                  <div class="c-box-jobs__content">
                    <div class="sub-title c-heading-04">รายละเอียดงาน</div>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non nisl eget tellus congue fringilla. Nullam mattis, libero facilisis iaculis tincidunt, sem massa faucibus odio, vitae accumsan felis mi vestibulum sem. Etiam elementum leo at nulla molestie suscipit. In vitae feugiat nunc, ut semper tortor. Nunc aliquam urna orci, nec eleifend odio dignissim eget. Donec maximus et orci in egestas. Vivamus nec suscipit est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis vehicula sem non elit consequat cursus. Quisque laoreet velit aliquet lorem dignissim ultricies. Vestibulum dictum arcu non tortor scelerisque laoreet.</div>
                  </div>
                  <div class="c-box-jobs__apply">
                    <div class="c-box-cmn-button"><a class="c-button-cmn-01" href="#form-job-01"><span class="text">Apply for this position</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
                  </div>
                </div>
              </div>
              <div class="c-box-jobs__detail" id="job-02">
                <div class="c-box-jobs__inner">
                  <div class="c-box-jobs__heading">
                    <div class="title c-heading-03">เจ้าหน้าที่ฝ่ายทรัพยากรบุคคล (ปทุมธานี)</div>
                    <div class="location">ปทุมธานี</div>
                  </div>
                  <div class="c-box-jobs__content">
                    <div class="sub-title c-heading-04">รายละเอียดงาน</div>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non nisl eget tellus congue fringilla. Nullam mattis, libero facilisis iaculis tincidunt, sem massa faucibus odio, vitae accumsan felis mi vestibulum sem. Etiam elementum leo at nulla molestie suscipit. In vitae feugiat nunc, ut semper tortor. Nunc aliquam urna orci, nec eleifend odio dignissim eget. Donec maximus et orci in egestas. Vivamus nec suscipit est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis vehicula sem non elit consequat cursus. Quisque laoreet velit aliquet lorem dignissim ultricies. Vestibulum dictum arcu non tortor scelerisque laoreet.</div>
                  </div>
                  <div class="c-box-jobs__apply">
                    <div class="c-box-cmn-button"><a class="c-button-cmn-01" href="#form-job-02"><span class="text">Apply for this position</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
                  </div>
                </div>
              </div>
              <div class="c-box-jobs__detail" id="job-03">
                <div class="c-box-jobs__inner">
                  <div class="c-box-jobs__heading">
                    <div class="title c-heading-03">เจ้าหน้าที่บัญชี (วุฒิปริญญาตรี 1อัตรา)</div>
                    <div class="location">ปทุมธานี</div>
                  </div>
                  <div class="c-box-jobs__content">
                    <div class="sub-title c-heading-04">รายละเอียดงาน</div>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non nisl eget tellus congue fringilla. Nullam mattis, libero facilisis iaculis tincidunt, sem massa faucibus odio, vitae accumsan felis mi vestibulum sem. Etiam elementum leo at nulla molestie suscipit. In vitae feugiat nunc, ut semper tortor. Nunc aliquam urna orci, nec eleifend odio dignissim eget. Donec maximus et orci in egestas. Vivamus nec suscipit est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis vehicula sem non elit consequat cursus. Quisque laoreet velit aliquet lorem dignissim ultricies. Vestibulum dictum arcu non tortor scelerisque laoreet.</div>
                  </div>
                  <div class="c-box-jobs__apply">
                    <div class="c-box-cmn-button"><a class="c-button-cmn-01" href="#form-job-03"><span class="text">Apply for this position</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
                  </div>
                </div>
              </div>
              <div class="c-box-jobs__detail" id="job-04">
                <div class="c-box-jobs__inner">
                  <div class="c-box-jobs__heading">
                    <div class="title c-heading-03">พนักงานบัญชีรายวัน 2 อัตรา</div>
                    <div class="location">ปทุมธานี</div>
                  </div>
                  <div class="c-box-jobs__content">
                    <div class="sub-title c-heading-04">รายละเอียดงาน</div>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non nisl eget tellus congue fringilla. Nullam mattis, libero facilisis iaculis tincidunt, sem massa faucibus odio, vitae accumsan felis mi vestibulum sem. Etiam elementum leo at nulla molestie suscipit. In vitae feugiat nunc, ut semper tortor. Nunc aliquam urna orci, nec eleifend odio dignissim eget. Donec maximus et orci in egestas. Vivamus nec suscipit est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis vehicula sem non elit consequat cursus. Quisque laoreet velit aliquet lorem dignissim ultricies. Vestibulum dictum arcu non tortor scelerisque laoreet.</div>
                  </div>
                  <div class="c-box-jobs__apply">
                    <div class="c-box-cmn-button"><a class="c-button-cmn-01" href="#form-job-04"><span class="text">Apply for this position</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
                  </div>
                </div>
              </div>
              <div class="c-box-jobs__detail" id="job-05">
                <div class="c-box-jobs__inner">
                  <div class="c-box-jobs__heading">
                    <div class="title c-heading-03">แม่บ้าน หลายอัตรา</div>
                    <div class="location">ปทุมธานี</div>
                  </div>
                  <div class="c-box-jobs__content">
                    <div class="sub-title c-heading-04">รายละเอียดงาน</div>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non nisl eget tellus congue fringilla. Nullam mattis, libero facilisis iaculis tincidunt, sem massa faucibus odio, vitae accumsan felis mi vestibulum sem. Etiam elementum leo at nulla molestie suscipit. In vitae feugiat nunc, ut semper tortor. Nunc aliquam urna orci, nec eleifend odio dignissim eget. Donec maximus et orci in egestas. Vivamus nec suscipit est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis vehicula sem non elit consequat cursus. Quisque laoreet velit aliquet lorem dignissim ultricies. Vestibulum dictum arcu non tortor scelerisque laoreet.</div>
                  </div>
                  <div class="c-box-jobs__apply">
                    <div class="c-box-cmn-button"><a class="c-button-cmn-01" href="#form-job-05"><span class="text">Apply for this position</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
                  </div>
                </div>
              </div>
              <div class="c-box-jobs__detail" id="job-06">
                <div class="c-box-jobs__inner">
                  <div class="c-box-jobs__heading">
                    <div class="title c-heading-03">พนักงาน R&D 1 อัตรา</div>
                    <div class="location">ปทุมธานี</div>
                  </div>
                  <div class="c-box-jobs__content">
                    <div class="sub-title c-heading-04">รายละเอียดงาน</div>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non nisl eget tellus congue fringilla. Nullam mattis, libero facilisis iaculis tincidunt, sem massa faucibus odio, vitae accumsan felis mi vestibulum sem. Etiam elementum leo at nulla molestie suscipit. In vitae feugiat nunc, ut semper tortor. Nunc aliquam urna orci, nec eleifend odio dignissim eget. Donec maximus et orci in egestas. Vivamus nec suscipit est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis vehicula sem non elit consequat cursus. Quisque laoreet velit aliquet lorem dignissim ultricies. Vestibulum dictum arcu non tortor scelerisque laoreet.</div>
                  </div>
                  <div class="c-box-jobs__apply">
                    <div class="c-box-cmn-button"><a class="c-button-cmn-01" href="#form-job-06"><span class="text">Apply for this position</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
                  </div>
                </div>
              </div>
              <div class="c-box-jobs__detail" id="job-07">
                <div class="c-box-jobs__inner">
                  <div class="c-box-jobs__heading">
                    <div class="title c-heading-03">พนักงานบันทึกข้อมูลการผลิต 3 อัตรา</div>
                    <div class="location">ปทุมธานี</div>
                  </div>
                  <div class="c-box-jobs__content">
                    <div class="sub-title c-heading-04">รายละเอียดงาน</div>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non nisl eget tellus congue fringilla. Nullam mattis, libero facilisis iaculis tincidunt, sem massa faucibus odio, vitae accumsan felis mi vestibulum sem. Etiam elementum leo at nulla molestie suscipit. In vitae feugiat nunc, ut semper tortor. Nunc aliquam urna orci, nec eleifend odio dignissim eget. Donec maximus et orci in egestas. Vivamus nec suscipit est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis vehicula sem non elit consequat cursus. Quisque laoreet velit aliquet lorem dignissim ultricies. Vestibulum dictum arcu non tortor scelerisque laoreet.</div>
                  </div>
                  <div class="c-box-jobs__apply">
                    <div class="c-box-cmn-button"><a class="c-button-cmn-01" href="#form-job-07"><span class="text">Apply for this position</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
                  </div>
                </div>
              </div>
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

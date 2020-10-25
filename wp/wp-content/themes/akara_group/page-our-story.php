<?php
/**
 * The template for displaying single posts and pages.
 *
 *  * Template Name: Our Story Template
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
      <div class="p-our-story">
        <div class="c-mv-sub-page section-spy is-active" id="our-story">
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
              <figure class="c-mv-sub-page__image-frame"><img src="/assets/img/our-story/mv_our_story.png" alt=""></figure>
            </div>
          </div>
        </div>
        <div class="c-box-time-line section-spy" id="timeline">
          <div class="c-box-time-line__inner">
            <div class="c-box-time-line__line"></div>
            <div class="c-box-time-line__list" id="scroll_timeline">
              <div class="c-box-time-line__item animation-element slide-top">
                <div class="c-box-time-line__image">
                  <div class="c-box-time-line__image-frame"><img src="/assets/img/our-story/img_our_story_01.png" alt=""></div>
                </div>
                <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
                <div class="c-box-time-line__content">
                  <div class="c-box-time-line__content-heading">ปี พ.ศ. 2522</div>
                  <div class="c-box-time-line__content-text">The beginning of Sangthong Saha Farm Occurred during the year 2522 as the ancestors moved from China. And began to trade under the name "Seng Tong" before changing to "Sangthong" in order to comply with the ancestor Until now.</div>
                </div>
                <?php elseif(ICL_LANGUAGE_CODE == 'th'): ?>
                <div class="c-box-time-line__content">
                  <div class="c-box-time-line__content-heading">ปี พ.ศ. 2522</div>
                  <div class="c-box-time-line__content-text">จุดเริ่มต้นของแสงทองสหฟาร์ม เกิดขึ้นในช่วงปี พ.ศ. 2522 โดยเป็นช่วงที่บรรพบุรุษเดินทางย้ายถิ่นฐานมาจากประเทศจีน และได้เริ่มทำการค้าโดยใช้ชื่อว่า "เซ่งท้ง" ก่อนเปลี่ยนมาเป็น "แสงทอง" เพื่อให้สอดคล้องกับบรรพบุรุษ มาจนถึงปัจจุบัน </div>
                </div>
                <?php endif; ?>
              </div>
              <div class="c-box-time-line__item animation-element slide-top">
                <div class="c-box-time-line__image">
                  <div class="c-deco-story"></div>
                  <div class="c-box-time-line__image-frame"><img src="/assets/img/our-story/img_our_story_02.png" alt=""></div>
                </div>
                <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
                <div class="c-box-time-line__content">
                  <div class="c-box-time-line__content-heading">ปี พ.ศ. 2538</div>
                  <div class="c-box-time-line__content-text">Started a broiler farm business in the area of Ban Na District, Nakhon Nayok Province. Before turning to selling chicken eggs in the year 1995</div>
                </div>
                <?php elseif(ICL_LANGUAGE_CODE == 'th'): ?>
                <div class="c-box-time-line__content">
                  <div class="c-box-time-line__content-heading">ปี พ.ศ. 2538</div>
                  <div class="c-box-time-line__content-text">เริ่มต้นธุรกิจฟาร์มไก่เนื้อ ในเขตพื้นที่ อำเภอบ้านนา จังหวัดนครนายก ก่อนจะเริ่มหันมาขายไข่ไก่ในช่วงปี พ.ศ.2538</div>
                </div>
                <?php endif; ?>
              </div>
              <div class="c-box-time-line__item animation-element slide-top">
                <div class="c-box-time-line__image">
                  <div class="c-box-time-line__image-frame"><img src="/assets/img/our-story/img_our_story_03.png" alt=""></div>
                </div>
                <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
                <div class="c-box-time-line__content">
                  <div class="c-box-time-line__content-heading">ปี พ.ศ. 2547</div>
                  <div class="c-box-time-line__content-text">From an outbreak of bird flu As a result, we turned to fully develop the chicken egg farm business. During the year 2004, we developed and expanded the egg farm area to Square district Chaiyaphum Province To support the growth of the market in the Northeast region Continued to the present.</div>
                </div>
                <?php elseif(ICL_LANGUAGE_CODE == 'th'): ?>
                <div class="c-box-time-line__content">
                  <div class="c-box-time-line__content-heading">ปี พ.ศ. 2547</div>
                  <div class="c-box-time-line__content-text">จากเหตุการณ์ไข้หวัดนกระบาด ทำให้เราหันมาพัฒนาธุรกิจฟาร์มไข่ไก่อย่างเต็มตัวในช่วงปี พ.ศ.2547 มีการพัฒนาและขยายพื้นที่ฟาร์มไข่ไก่ไปยัง เขตอำเภอจัตุรัส จังหวัดชัยภูมิ เพื่อรองรับการเติบโตของตลาดในเขตภาคตะวันออกเฉียงเหนือ สืบเนื่องมาจนถึงปัจจุบัน </div>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="c-box-our-egg section-spy" id="our-egg">
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
              <?php
                if(ICL_LANGUAGE_CODE == 'en'){
                  $our_egg_content = 'We produce fresh eggs every day to make every meal a healthy one. <br>In addition, we also strive to develop a wide variety of egg products. <br>To meet the needs of consumers But still control the quality in production Pay attention <br>to every step meticulously To meet the standards in every bite you eat.';
                } elseif(ICL_LANGUAGE_CODE == 'th') {
                  $our_egg_content = 'เราผลิตไข่ไก่สด ใหม่ ในทุกวัน เพื่อให้ทุกมื้อของคุณเป็นมื้อที่มีคุณค่า <br>นอกจากนั้นแล้วเรายังมุ่งมั่นในการพัฒนาผลิตภัณฑ์จากไข่ไก่ที่หลากหลาย <br>เพื่อให้สอดคล้องกับความต้องการของผู้บริโภค แต่ยังคงควบคุมคุณภาพในการผลิต <br>ใส่ใจทุกขั้นตอนอย่างพิถีพิถัน เพื่อให้ได้มาตรฐานในทุกคำที่คุณทาน';
                }
              ?>
              <div class="c-heading-egg-content -lg"><?php echo $our_egg_content; ?></div>
            </div>
            <div class="c-box-our-egg__list">
              <div class="c-box-our-egg__item animation-element slide-top">
                <div class="c-box-our-egg_card">
                  <figure class="c-box-our-egg__card-image"><img src="/assets/img/our-story/img_our_egg_01.png" alt="ฟาร์มคอนโด"></figure>
                  <div class="c-box-our-egg__card-heading">ฟาร์มคอนโด</div>
                  <div class="c-box-our-egg__card-content">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics.</div>
                </div>
              </div>
              <div class="c-box-our-egg__item animation-element slide-top">
                <div class="c-box-our-egg_card">
                  <figure class="c-box-our-egg__card-image"><img src="/assets/img/our-story/img_our_egg_02.png" alt="Free Range"></figure>
                  <div class="c-box-our-egg__card-heading">Free Range</div>
                  <div class="c-box-our-egg__card-content">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics.</div>
                </div>
              </div>
              <div class="c-box-our-egg__item animation-element slide-top">
                <div class="c-box-our-egg_card">
                  <figure class="c-box-our-egg__card-image"><img src="/assets/img/our-story/img_our_egg_03.png" alt="Organic 100%"></figure>
                  <div class="c-box-our-egg__card-heading">Organic 100%</div>
                  <div class="c-box-our-egg__card-content">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics.</div>
                </div>
              </div>
              <div class="c-box-our-egg__item animation-element slide-top">
                <div class="c-box-our-egg_card">
                  <figure class="c-box-our-egg__card-image"><img src="/assets/img/our-story/img_our_egg_04.png" alt="พนักงานที่ใส่ใจ"></figure>
                  <div class="c-box-our-egg__card-heading">พนักงานที่ใส่ใจ</div>
                  <div class="c-box-our-egg__card-content">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics.</div>
                </div>
              </div>
            </div>
          </div>
          <div class="c-wave-yellow-bottom">
            <canvas id="canvas-yellow-bottom"></canvas>
          </div>
        </div>
        <div class="c-box-our-farm section-spy" id="our-farm">
          <div class="c-box-our-farm__inner">
            <div class="c-heading-box-egg animation-element slide-top">
              <div class="c-heading-egg">
                <div class="c-heading-egg__icon">
                  <div class="i-barn-yellow"></div>
                </div>
                <div class="c-heading-egg__text">Our Farm</div>
              </div>
              <div class="c-heading-egg-content -lg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, diam nonumy <br>tempor invidunt ut labore et dolore</div>
            </div>
            <div class="c-box-our-farm__list">
              <div class="c-box-our-farm__item animation-element slide-top">
                <div class="c-box-our-farm__card">
                  <figure class="c-box-our-farm__card-image"><img src="/assets/img/our-story/img_our_farm_01.jpg" alt=""></figure>
                  <div class="c-box-our-farm__card-heading">Sang thong Farm</div>
                  <div class="c-box-our-farm__card-content">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics. No hormones are used in egg production either! Best of all, they come from happy hens who are free to roam and play.</div>
                </div>
              </div>
              <div class="c-box-our-farm__item animation-element slide-top">
                <div class="c-box-our-farm__card">
                  <figure class="c-box-our-farm__card-image"><img src="/assets/img/our-story/img_our_farm_02.jpg" alt=""></figure>
                  <div class="c-box-our-farm__card-heading">ใส่ใจในทุกขั้นตอนการผลิต</div>
                  <div class="c-box-our-farm__card-content">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics. No hormones are used in egg production either! Best of all, they come from happy hens who are free to roam and play.</div>
                </div>
              </div>
              <div class="c-box-our-farm__item animation-element slide-top">
                <div class="c-box-our-farm__card">
                  <figure class="c-box-our-farm__card-image"><img src="/assets/img/our-story/img_our_farm_03.jpg" alt=""></figure>
                  <div class="c-box-our-farm__card-heading">มาตรฐานระดับสากล</div>
                  <div class="c-box-our-farm__card-content">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics. No hormones are used in egg production either! Best of all, they come from happy hens who are free to roam and play.</div>
                </div>
              </div>
              <div class="c-box-our-farm__item animation-element slide-top">
                <div class="c-box-our-farm__card">
                  <figure class="c-box-our-farm__card-image"><img src="/assets/img/our-story/img_our_farm_04.jpg" alt=""></figure>
                  <div class="c-box-our-farm__card-heading">เพื่อสุขภาพที่ดีของคนไทย</div>
                  <div class="c-box-our-farm__card-content">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics. No hormones are used in egg production either! Best of all, they come from happy hens who are free to roam and play.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="c-box-certificate">
          <div class="c-box-certificate__inner">
            <div class="c-box-certificate__list animation-element slide-top">
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
        <div class="sec-cmn-01 c-box-video section-spy" id="vdo">
          <div class="c-wave-yellow">
            <canvas id="canvas-yellow-02"></canvas>
          </div>
          <div class="c-box-video__inner">
            <div class="c-box-video__box-text">
              <div class="c-heading-box-egg animation-element slide-top">
                <div class="c-heading-egg">
                  <div class="c-heading-egg__icon -white">
                    <div class="c-play-solid"></div>
                  </div>
                  <div class="c-heading-egg__text">akara video</div>
                </div>
                <div class="c-heading-egg-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</div>
              </div>
            </div>
            <div class="c-box-video__box-iframe animation-element slide-top">
              <div class="c-box-video__box-iframe-inner">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ps3kWOQRQnY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
          <div class="c-wave-yellow-bottom">
            <canvas id="canvas-yellow-bottom-02"></canvas>
          </div>
        </div>
        <div class="sec-cmn-01 c-faq section-spy" id="faq">
          <div class="c-faq__inner">
            <div class="c-heading-box-egg animation-element slide-top">
              <div class="c-heading-egg">
                <div class="c-heading-egg__icon">
                  <div class="c-comments-regular"></div>
                </div>
                <div class="c-heading-egg__text">FAQ</div>
              </div>
            </div>
            <?php
            if(ICL_LANGUAGE_CODE == 'en'):
              $faq_id = 37;
            elseif(ICL_LANGUAGE_CODE == 'th'):
              $faq_id = 122;
            endif;
            ?>
						<?php
							// Check rows exists.
              if( have_rows('faq_rpt', $faq_id) ):
              $i = 0;
						?>
						<div class="c-faq__list js-faq-accordian">
							<?php
								// Loop through rows.
                while( have_rows('faq_rpt', $faq_id) ) : the_row();
                $i++;

                if( $i > 4 )
                {
                  break;
                }
							?>
							<div class="c-faq__item animation-element slide-top">
								<div class="c-faq__box-heading">
									<div class="c-faq__heading"><?php echo get_sub_field('faq_heading', $faq_id); ?></div>
									<div class="c-faq__icon"><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-down"></i></div>
								</div>
								<div class="c-faq__box-text">
									<div class="c-faq__text"><?php echo get_sub_field('faq_content', $faq_id); ?></div>
								</div>
							</div>
							<?php endwhile; ?>
						</div>
						<?php endif; ?>
            <div class="c-box-cmn-button animation-element slide-top --center">
              <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
              <a class="c-button-cmn-01 --border-base" href="/en/faq/"><span class="text">SEE MORE</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a>
              <?php elseif(ICL_LANGUAGE_CODE == 'th'): ?>
              <a class="c-button-cmn-01 --border-base" href="/faq/"><span class="text">อ่านเพิ่มเติม</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a>
              <?php endif; ?>
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

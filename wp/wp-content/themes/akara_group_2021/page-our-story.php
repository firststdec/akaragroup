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
  // CHECK URL
  $root_url = '';
  if( PRODUCTION ) {
    $root_url = '/akara';
  }
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
              <figure class="c-mv-sub-page__image-frame"><img class="u-obj-contain" src="/assets/img/our-story/mv_our_story_new.png" alt=""></figure>
            </div>
          </div>
        </div>
        <div class="c-box-time-line section-spy" id="timeline">
          <div class="c-box-time-line__inner">
            <div class="c-box-time-line__line"></div>
            <div class="c-box-time-line__list" id="scroll_timeline">
              <div class="c-box-time-line__item animation-element slide-top">
                <div class="c-box-time-line__image">
                  <div class="c-box-time-line__image-frame"><img src="/assets/img/our-story/Q12A2251@3x.png" alt=""></div>
                </div>
                <?php if(!is_th_lang()): ?>
                <div class="c-box-time-line__content">
                  <div class="c-box-time-line__content-heading">The Beginning of the Business</div>
                  <div class="c-box-time-line__content-text">Our business has been found for more than 40 years. <br>In a business of food production, that delivering deliciousness through the intention of making people’s lives better since 1979.</div>
                </div>
                <?php else: ?>
                <div class="c-box-time-line__content">
                  <div class="c-box-time-line__content-heading">จุดเริ่มต้นธุรกิจ</div>
                  <div class="c-box-time-line__content-text">ปัจจุบันเป็นเวลากว่า 40 ปี จากจุดเริ่มต้นธุรกิจ และพัฒนามาเป็นธุรกิจการผลิตอาหารส่งต่อความอร่อยผ่านความตั้งใจ เพื่อส่งมอบความอร่อยให้กับผู้บริโภค ตั้งแต่ปี พ.ศ.2522</div>
                </div>
                <?php endif; ?>
              </div>
              <div class="c-box-time-line__item animation-element slide-top">
                <div class="c-box-time-line__image">
                  <div class="c-deco-story"></div>
                  <div class="c-box-time-line__image-frame"><img src="/assets/img/our-story/ourstory-2538@3x.png" alt=""></div>
                </div>
                <?php if(!is_th_lang()): ?>
                <div class="c-box-time-line__content">
                  <div class="c-box-time-line__content-heading">Developing the Production of Quality Eggs</div>
                  <div class="c-box-time-line__content-text">For past decades, our business started to produce fresh eggs and developed the process for producing eggs while receiving Quality standards and becoming popular for the consumer.</div>
                </div>
                <?php else: ?>
                <div class="c-box-time-line__content">
                  <div class="c-box-time-line__content-heading">พัฒนาการผลิตไข่ไก่คุณภาพ</div>
                  <div class="c-box-time-line__content-text">จากนั้นเราเริ่มผลิต ไข่ไก่สด และพัฒนากระบวนการผลิตไข่ไก่เรื่อยมา ที่เปี่ยมด้วยคุณภาพอย่างเต็มรูปแบบ จนได้รับการรับรองคุณภาพมาตรฐานในระดับสากล และเป็นที่นิยมสำหรับผู้บริโภค</div>
                </div>
                <?php endif; ?>
              </div>
              <div class="c-box-time-line__item animation-element slide-top">
                <div class="c-box-time-line__image">
                  <div class="c-box-time-line__image-frame"><img src="/assets/img/our-story/img_our_story_03.png" alt=""></div>
                </div>
                <?php if(!is_th_lang()): ?>
                <div class="c-box-time-line__content">
                  <div class="c-box-time-line__content-heading">At present, we are committed to continuously develope.</div>
                  <div class="c-box-time-line__content-text">We never stop developing products that are good for consumer health. Both in terms of production technology, as well as how to raise hens that promote animal welfare. We also focus on the development of environmentally friendly packaging and developing delicious products to be more variety and good for health for the better quality of life for everyone.</div>
                </div>
                <?php else: ?>
                <div class="c-box-time-line__content">
                  <div class="c-box-time-line__content-heading">ปัจจุบันมุ่งมั่นพัฒนาอย่างต่อเนื่อง</div>
                  <div class="c-box-time-line__content-text"> เราไม่หยุดพัฒนา เพื่อสุขภาพที่ดีของผู้บริโภคทุกคน ทั้งเทคโนโลยีการผลิต วิธีการเลี้ยงแม่ไก่ที่ส่งเสริมสวัสดิภาพสัตว์ การพัฒนาบรรจุภัณฑ์ที่เป็นมิตรกับสิ่งแวดล้อม และพัฒนาสินค้าที่ทั้งอร่อย หลากหลาย และต้องดีต่อสุขภาพ เพื่อคุณภาพชีวิตที่ดีขึ้นของทุกๆ คน</div>
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
                if(!is_th_lang()){
                  $our_egg_content = 'We focus on producing quality fresh eggs every day to make your every meal healthier.';
                } else {
                  $our_egg_content = 'เราผลิตไข่ไก่สด ใหม่ ในทุกวัน เพื่อให้ทุกมื้อของคุณเป็นมื้อที่มีคุณค่า';
                }
              ?>
              <div class="c-heading-egg-content -lg"><?php echo $our_egg_content; ?></div>
            </div>
            <?php
                if(!is_th_lang()){
                  $our_egg_title_01 = 'Fresh from the Farm';
                  $our_egg_text_01 = 'When it comes to "Freshness" and "Quality", you can be assured that akara hygienic eggs are good for your health. Besides, our eggs are fresh from the farm, NO Hormones Added and NO Antibiotics, so that you will be able to get enriched nutrients from our eggs.';
                  $our_egg_title_02 = 'Quality Eggs';
                  $our_egg_text_02 = 'Thick shell with dark brown color eggs. Nice bright yolk with thick egg white resulting from the freshness with high protein that represents the unique character of akara eggs.';
                  $our_egg_title_03 = 'Healthy Hens';
                  $our_egg_text_03 = 'Eggs from good breed hens, specially selected from Germany. Raised in modern hen houses with cold temperature controlling and the disease prevention system.';
                  $our_egg_title_04 = 'Safe and Clean';
                  $our_egg_text_04 = "Every egg from the farm will be sent to the factory through a sorting process to get the freshest eggs from our farm and deliver them to the consumer's hands every day.";
                } else {
                  $our_egg_title_01 = 'สดใหม่จากฟาร์ม';
                  $our_egg_text_01 = 'เมื่อพูดถึง "ความสดใหม่" และ "คุณภาพ" ให้มั่นใจได้เลยว่าไข่ไก่อนามัยของอัคราทุกฟองดีต่อสุขภาพ เพราะนอกจากไข่ไก่ของเราจะสดใหม่จากฟาร์มแล้ว ยังปลอดภัยจากสารเร่งฮอร์โมน และยาปฏิชีวนะ ให้คุณได้รับคุณประโยชน์ได้อย่างเต็มที่';
                  $our_egg_title_02 = 'มาตรฐานทุกฟอง';
                  $our_egg_text_02 = 'ไข่ไก่เปลือกหนาสีน้ำตาลเข้ม ไข่แดงกลมสวย วุ้นไข่ขาวเหนียวข้นแสดงถึงความสดใหม่ อัดแน่นด้วยโปรตีนเต็ม ๆ ฟอง เอกลักษณ์ของไข่ไก่อัครา';
                  $our_egg_title_03 = 'แม่ไก่สุขภาพดี';
                  $our_egg_text_03 = 'ไข่ไก่จากแม่ไก่สายพันธุ์ดีคัดพิเศษจากประเทศเยอรมัน เลี้ยงในโรงเรือนที่ทันสมัย ควบคุมความเย็น พร้อมระบบป้องกันโรคอย่างเข้มงวด';
                  $our_egg_title_04 = 'สะอาดและปลอดภัย';
                  $our_egg_text_04 = 'ไข่ไก่จากฟาร์มทุกฟอง จะถูกส่งเข้าโรงงานโดยผ่านกระบวนการคัดแยก เพื่อให้ได้ไข่ไก่ที่สดจากฟาร์มถึงมือผู้บริโภคแบบวันต่อวัน';
                }
              ?>
            <div class="c-box-our-egg__list">
              <div class="c-box-our-egg__item animation-element slide-top">
                <div class="c-box-our-egg_card">
                  <figure class="c-box-our-egg__card-image"><img src="/assets/img/our-story/Q12A2251@3x-1.png" alt="<?php echo $our_egg_title_01; ?>"></figure>
                  <div class="c-box-our-egg__card-heading"><?php echo $our_egg_title_01; ?></div>
                  <div class="c-box-our-egg__card-content"><?php echo $our_egg_text_01; ?></div>
                </div>
              </div>
              <div class="c-box-our-egg__item animation-element slide-top">
                <div class="c-box-our-egg_card">
                  <figure class="c-box-our-egg__card-image"><img src="/assets/img/our-story/img_our_egg_02.png" alt="<?php echo $our_egg_title_02; ?>"></figure>
                  <div class="c-box-our-egg__card-heading"><?php echo $our_egg_title_02; ?></div>
                  <div class="c-box-our-egg__card-content"><?php echo $our_egg_text_02; ?></div>
                </div>
              </div>
              <div class="c-box-our-egg__item animation-element slide-top">
                <div class="c-box-our-egg_card">
                  <figure class="c-box-our-egg__card-image"><img src="/assets/img/our-story/img_our_egg_03.png" alt="<?php echo $our_egg_title_03; ?>"></figure>
                  <div class="c-box-our-egg__card-heading"><?php echo $our_egg_title_03; ?></div>
                  <div class="c-box-our-egg__card-content"><?php echo $our_egg_text_03; ?></div>
                </div>
              </div>
              <div class="c-box-our-egg__item animation-element slide-top">
                <div class="c-box-our-egg_card">
                  <figure class="c-box-our-egg__card-image"><img src="/assets/img/our-story/A0011395@3x.png" alt="<?php echo $our_egg_title_04; ?>"></figure>
                  <div class="c-box-our-egg__card-heading"><?php echo $our_egg_title_04; ?></div>
                  <div class="c-box-our-egg__card-content"><?php echo $our_egg_text_04; ?></div>
                </div>
              </div>
            </div>
          </div>
          <div class="c-wave-yellow-bottom">
            <canvas id="canvas-yellow-bottom"></canvas>
          </div>
        </div>
        <?php
          if(!is_th_lang()){
            $our_farm_lead = 'We strive to develop a wide range of egg products to meet the needs of consumers yet control the quality of production to meet the standards in every bite.';
            $our_farm_title_01 = 'Egg Specialist';
            $our_farm_text_01 = 'We are an expert in egg production with over decades of professional experience. With the production capacity for over 2 million eggs per day with the best quality control process in every step. Therefore, our eggs are fresh, clean, and safe, and meet international standards.';
            $our_farm_title_02 = 'Technology from Europe';
            $our_farm_text_02 = 'Our hens are raised in a closed housing EVAP system. Every farm entry and exit must be systematic and sterilized with the Bio-Security system but still has a natural and suitable environment. Along with veterinarians to take care of hens closely.';
            $our_farm_title_03 = 'Every Process Matter';
            $our_farm_text_03 = 'Besides improving production quality, we also seriously take care of our environmental impact by using Recycle Paper Packaging which is more environmentally friendly and biodegradable.';
            $our_farm_title_04 = 'Quality Control';
            $our_farm_text_04 = 'Our wide product ranges are designed for you, including Fresh eggs and Nutritious eggs, Tofu tubes that are suitable for families. And delicious Ready-to-Eat tofu cups. ';
          } else {
            $our_farm_lead = 'เรามุ่งมั่นในการพัฒนาผลิตภัณฑ์จากไข่ไก่ที่หลากหลาย เพื่อให้สอดคล้องกับความต้องการของผู้บริโภค แต่ยังคงควบคุมคุณภาพในการผลิตเพื่อให้ได้มาตรฐานในทุกคำที่คุณทาน';
            $our_farm_title_01 = 'ตัวจริงเรื่องไข่ไก่';
            $our_farm_text_01 = 'ผู้เชี่ยวชาญด้านการผลิตไข่ไก่ที่มีประสบการณ์ยาวนานกว่า 25 ปี ด้วยมาตรฐานในการผลิตกว่า 2 ล้านฟองต่อวัน สดใหม่จากฟาร์มทุกวัน ควบคุมคุณภาพในทุกขั้นตอน จึงได้ไข่ไก่ที่สด สะอาด ปลอดภัยและได้มาตรฐานระดับสากล';
            $our_farm_title_02 = 'เทคโนโลยีชั้นสูงจากยุโรป';
            $our_farm_text_02 = 'ไก่ไข่ของเราถูกเลี้ยงในโรงเรือนระบบปิด การเข้าออกฟาร์มจะต้องเป็นระบบ ผ่านการฆ่าเชื้อทุกครั้ง เน้นความปลอดภัยทางชีวภาพ (Bio-Security) แต่ยังคงรูปแบบที่เป็นธรรมชาติและเหมาะสมกับสิ่งแวดล้อม พร้อมด้วยสัตวแพทย์และสัตวบาลคอยดูแลอย่างใกล้ชิด';
            $our_farm_title_03 = 'ใส่ใจทุกขั้นตอน';
            $our_farm_text_03 = 'นอกจากการพัฒนาคุณภาพการผลิตเรายังคำนึงถึงผลกระทบต่อสิ่งแวดล้อม โดยการเลือกใช้บรรจุภัณฑ์กระดาษที่มาจากกระดาษ เป็นมิตรต่อสิ่งแวดล้อม สามารถย่อยสลายได้ง่ายตามธรรมชาติ';
            $our_farm_title_04 = 'ควบคุมคุณภาพ';
            $our_farm_text_04 = 'หลากหลายผลิตภัณฑ์ของเราที่ถูกคิดมาเพื่อคุณ ทั้ง ไข่ไก่สดอุดมด้วยคุณประโยชน์, เต้าหู้หลอดที่เหมาะสำหรับเด็ก ๆ วัยเจริญอาหาร, เต้าหู้ถ้วยสำเร็จรูปรับประทานได้ทันที';
          }
        ?>
        <div class="c-box-our-farm section-spy" id="our-farm">
          <div class="c-box-our-farm__inner">
            <div class="c-heading-box-egg animation-element slide-top">
              <div class="c-heading-egg">
                <div class="c-heading-egg__icon">
                  <div class="i-barn-yellow"></div>
                </div>
                <div class="c-heading-egg__text">Our Farm</div>
              </div>
              <div class="c-heading-egg-content -lg"><?php echo $our_farm_lead; ?></div>
            </div>
            <div class="c-box-our-farm__list">
              <div class="c-box-our-farm__item animation-element slide-top">
                <div class="c-box-our-farm__card">
                  <figure class="c-box-our-farm__card-image"><img src="/assets/img/our-story/img_our_farm_01.jpg" alt="<?php echo $our_farm_title_01; ?>"></figure>
                  <div class="c-box-our-farm__card-heading"><?php echo $our_farm_title_01; ?></div>
                  <div class="c-box-our-farm__card-content"><?php echo $our_farm_text_01; ?></div>
                </div>
              </div>
              <div class="c-box-our-farm__item animation-element slide-top">
                <div class="c-box-our-farm__card">
                  <figure class="c-box-our-farm__card-image"><img src="/assets/img/our-story/img_our_farm_02.jpg" alt="<?php echo $our_farm_title_02; ?>"></figure>
                  <div class="c-box-our-farm__card-heading"><?php echo $our_farm_title_02; ?></div>
                  <div class="c-box-our-farm__card-content"><?php echo $our_farm_text_02; ?></div>
                </div>
              </div>
              <div class="c-box-our-farm__item animation-element slide-top">
                <div class="c-box-our-farm__card">
                  <figure class="c-box-our-farm__card-image"><img src="/assets/img/our-story/img_our_farm_03.jpg" alt="<?php echo $our_farm_title_03; ?>"></figure>
                  <div class="c-box-our-farm__card-heading"><?php echo $our_farm_title_03; ?></div>
                  <div class="c-box-our-farm__card-content"><?php echo $our_farm_text_03; ?></div>
                </div>
              </div>
              <div class="c-box-our-farm__item animation-element slide-top">
                <div class="c-box-our-farm__card">
                  <figure class="c-box-our-farm__card-image"><img src="/assets/img/our-story/img_our_farm_04.png" alt="<?php echo $our_farm_title_04; ?>"></figure>
                  <div class="c-box-our-farm__card-heading"><?php echo $our_farm_title_04; ?></div>
                  <div class="c-box-our-farm__card-content"><?php echo $our_farm_text_04; ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <style>
          @media (max-width: 896px) {
            .c-box-certificate__list {
              margin: 0 -15px;
              justify-content: flex-start;
            }
          }

          .c-box-certificate__item {
            margin: 0 10px;
            width: calc(20% - 20px);
          }

          @media (max-width: 896px) {
            .c-box-certificate__item {
              width: 50%;
              margin: 0;
            }
          }
        </style>
        <div class="c-box-certificate">
          <div class="c-box-certificate__inner">
            <div class="c-box-certificate__list animation-element slide-top">
              <div class="c-box-certificate__item">
                <figure class="c-box-certificate__image"><img src="/assets/img/common/iso-logo@3x.png" alt=""></figure>
              </div>
              <div class="c-box-certificate__item">
                <figure class="c-box-certificate__image"><img src="/assets/img/common/img_certification_01.png" alt=""></figure>
              </div>
              <div class="c-box-certificate__item">
                <figure class="c-box-certificate__image"><img src="/assets/img/common/img_certification_02.png" alt=""></figure>
              </div>
              <div class="c-box-certificate__item">
                <figure class="c-box-certificate__image"><img src="/assets/img/our-story/cage-free-logo@3x.png" alt=""></figure>
              </div>
              <div class="c-box-certificate__item">
                <figure class="c-box-certificate__image"><img src="/assets/img/common/img_certification_04.png" alt=""></figure>
              </div>
            </div>
          </div>
        </div>
        <div class="sec-cmn-01 c-box-video section-spy" id="vdo">
          <div class="c-wave-yellow">
            <canvas id="canvas-yellow-02"></canvas>
          </div>
          <div class="c-box-video__inner">
            <div class="c-box-video__box-iframe animation-element slide-top">
              <div class="c-box-video__box-iframe-inner">
                <!-- <video width="320" height="240" controls>
                  <source src="/assets/videos/our-story-video.mp4" type="video/mp4">
                  <source src="/assets/videos/our-story-video.ogg" type="video/ogg">
                Your browser does not support the video tag.
                </video> -->
                <iframe width="560" height="315" src="https://www.youtube.com/embed/AINxbIMDkvE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
              <a class="c-button-cmn-01 --border-base" href="<?php echo $root_url ; ?>/en/faq/"><span class="text">SEE MORE</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a>
              <?php elseif(ICL_LANGUAGE_CODE == 'th'): ?>
              <a class="c-button-cmn-01 --border-base" href="<?php echo $root_url ; ?>/faq/"><span class="text">อ่านเพิ่มเติม</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a>
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

<?php
/**
 * The template for displaying single posts and pages.
 *
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
        <div class="c-mv-sub-page section-spy" id="our-story">
          <div class="c-mv-sub-page__inner">
            <div class="c-mv-sub-page__box-content">
              <div class="c-mv-sub-page__heading">Our Story</div>
              <div class="c-mv-sub-page__sub-heading">เพราะทุกคำคือธรรมชาติ</div>
              <div class="c-mv-sub-page__text">เป็นผลิตภัณฑ์ ที่มีการควบคุมกระบวนการผลิตตั้งแต่ต้นกระบวนการให้ปลอดภัย ปลอดสารเร่งและปลอดยาปฏิชีวนะ จนได้ผลผลิต “ไข่ไก่ออร์แกนิค ปลอดภัย” ได้การรับรองมาตรฐาน GMP/HACCP และ DLD Certificate 2016 ของกรมปศุสัตว์ รายแรกของประเทศไทย<a class="c-mv-sub-page__anchor-icon js-scroll c-scroll-down-button__static-page" href="#scroll_timeline">
                  <div class="c-scroll-down-line"></div></a></div>
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
                <div class="c-box-time-line__content">
                  <div class="c-box-time-line__content-heading">ปี พ.ศ. 2522</div>
                  <div class="c-box-time-line__content-text">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics. No hormones are used in egg production either! Best of all, they come from happy hens who are free to roam and play.</div>
                </div>
              </div>
              <div class="c-box-time-line__item animation-element slide-top">
                <div class="c-box-time-line__image">
                  <div class="c-deco-story"></div>
                  <div class="c-box-time-line__image-frame"><img src="/assets/img/our-story/img_our_story_02.png" alt=""></div>
                </div>
                <div class="c-box-time-line__content">
                  <div class="c-box-time-line__content-heading">ปี พ.ศ. 2538</div>
                  <div class="c-box-time-line__content-text">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics. No hormones are used in egg production either! Best of all, they come from happy hens who are free to roam and play.</div>
                </div>
              </div>
              <div class="c-box-time-line__item animation-element slide-top">
                <div class="c-box-time-line__image">
                  <div class="c-box-time-line__image-frame"><img src="/assets/img/our-story/img_our_story_03.png" alt=""></div>
                </div>
                <div class="c-box-time-line__content">
                  <div class="c-box-time-line__content-heading">ปี พ.ศ. 2547</div>
                  <div class="c-box-time-line__content-text">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics. No hormones are used in egg production either! Best of all, they come from happy hens who are free to roam and play.</div>
                </div>
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
              <div class="c-heading-egg-content -lg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, diam nonumy <br>tempor invidunt ut labore et dolore</div>
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
            <div class="c-faq__list js-faq-accordian">
              <div class="c-faq__item animation-element slide-top">
                <div class="c-faq__box-heading">
                  <div class="c-faq__heading">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, diam nonumy tempor invidunt ut labore et dolore?</div>
                  <div class="c-faq__icon"><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="c-faq__box-text">
                  <div class="c-faq__text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.</div>
                </div>
              </div>
              <div class="c-faq__item animation-element slide-top">
                <div class="c-faq__box-heading">
                  <div class="c-faq__heading">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, diam nonumy tempor invidunt ut labore et dolore?</div>
                  <div class="c-faq__icon"><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="c-faq__box-text">
                  <div class="c-faq__text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.</div>
                </div>
              </div>
              <div class="c-faq__item animation-element slide-top">
                <div class="c-faq__box-heading">
                  <div class="c-faq__heading">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, diam nonumy tempor invidunt ut labore et dolore?</div>
                  <div class="c-faq__icon"><i class="fas fa-chevron-right"></i><i class="fas fa-chevron-down"></i></div>
                </div>
                <div class="c-faq__box-text">
                  <div class="c-faq__text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.</div>
                </div>
              </div>
            </div>
            <div class="c-box-cmn-button animation-element slide-top --center"><a class="c-button-cmn-01 --border-base"><span class="text">SEE MORE</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
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

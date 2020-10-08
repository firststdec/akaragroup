<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<main class="l-container">
  <div class="l-container__inner">
    <div class="p-top">
      <div class="l-sec-cmn-02">
        <div class="inner">
          <div class="c-box-swiper-mv">
            <div class="slider-inner">
              <div class="box-swiper-content">
                <div class="heading">
                  <div class="text-black">EVERYDAY</div>
                  <div class="text-yellow u-no-sp">
                    <svg>
                      <symbol id="text-copy">
                        <text class="text--line" text-anchor="center" x="0" y="50%">with akara</text>
                      </symbol>
                      <g class="g-ants">
                        <use class="text-copy" id="outline" xlink:href="#text-copy"></use>
                        <use class="text-copy" id="fill" xlink:href="#text-copy"></use>
                      </g>
                    </svg>
                  </div>
                  <div class="text-yellow u-no-tb u-no-pc">with akara</div>
                </div>
                <div class="text">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years</div>
                <div class="mv-swiper-nav-custom">
                  <!-- Add Arrows-->
                  <div class="mv-swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                  <div class="mv-swiper-button-next"><i class="fas fa-chevron-right"></i></div>
                </div>
              </div>
              <div class="box-swiper-mv-js">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="mainvisual-content">
                      <div class="box-image-wrapper">
                        <figure class="box-image"><img class="image" src="/assets/img/top/banner-cooking.jpg" alt="Akara Group" data-object-fit="cover"></figure>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="mainvisual-content">
                      <div class="box-image-wrapper">
                        <figure class="box-image"><img class="image" src="/assets/img/top/banner-fresh-egg.jpg" alt="Akara Group" data-object-fit="cover"></figure>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Add Pagination-->
                <div class="mv-swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="l-sec-cmn-01">
        <div class="inner">
          <div class="c-box-card-row-01 -reverse -yellow-egg">
            <div class="c-wave-yellow">
              <canvas id="canvas-yellow-02"></canvas>
            </div>
            <figure class="box-image">
              <div class="c-deco-yellow-egg animation-element slide-top"></div><img class="image animation-element slide-right" src="/assets/img/top/img_product_01.png" alt="Akara">
              <div class="c-open-package --yellow"></div>
            </figure>
            <div class="box-content"><a class="js-scroll c-scroll-down-button" href="#scroll_yellow_egg">
                <div class="c-scroll-down-line"></div></a>
              <div class="c-egg animation-element slide-top"></div>
              <div class="c-deco-yellow-egg-bg"></div>
              <div class="c-heading-cmn-01 animation-element slide-left">
                <figure class="box-image-heading"><img class="image" src="/assets/img/top/img_logo_01.svg" alt="Akara Egg"></figure>
              </div>
              <div class="c-text-cmn-01 animation-element slide-left">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics.</div>
              <div class="c-box-cmn-button animation-element slide-left"><a class="c-button-cmn-01"><span class="text">READ MORE</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
              <div class="c-product-akara-yellow animation-element slide-top"></div>
            </div>
            <div class="c-wave-yellow-bottom">
              <canvas id="canvas-yellow-bottom-02"></canvas>
            </div>
          </div>
          <div class="c-box-card-row-01 -green-egg">
            <figure class="box-image">
              <div class="c-deco-green-hen animation-element slide-top"></div><img class="image animation-element slide-left" src="/assets/img/top/img_product_02.png" alt="Akara Group">
              <div class="c-open-package --green animation-element slide-top"></div>
            </figure>
            <div class="box-content">
              <div class="c-egg animation-element slide-top" id="scroll_yellow_egg"></div>
              <div class="c-egg-deco-top animation-element slide-top"></div>
              <div class="c-egg-deco-bottom animation-element slide-top"></div>
              <div class="c-heading-cmn-01 animation-element slide-right">
                <figure class="box-image-heading"><img class="image" src="/assets/img/top/img_logo_02.svg" alt="Akara Eggology"></figure>
              </div>
              <div class="c-text-cmn-01 -white animation-element slide-right">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics.</div>
              <div class="c-box-cmn-button animation-element slide-right"><a class="c-button-cmn-01 animation-element slide-top"><span class="text">READ MORE</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
              <div class="c-product-akara-green animation-element slide-top"></div>
            </div>
            <div class="c-wave-green-bottom">
              <canvas id="canvas-green-bottom"></canvas>
            </div>
          </div>
          <div class="c-box-card-row-01 -reverse -orange-egg">
            <figure class="box-image">
              <div class="c-hen-deco-orange animation-element slide-top"></div>
              <div class="c-egg-deco-orange animation-element slide-top"></div>
              <div class="c-line-deco-orange animation-element slide-top"></div><img class="image animation-element slide-right" src="/assets/img/top/img_product_03.png" alt="Akaragroup">
              <div class="c-open-package --orange animation-element slide-top"></div>
            </figure>
            <div class="box-content">
              <div class="c-egg animation-element slide-top"></div>
              <div class="c-mori-tama-egg animation-element slide-top"></div>
              <figure class="box-image-heading animation-element slide-left"><img class="image" src="/assets/img/top/img_logo_03.svg" alt="Akara ISE"></figure>
              <div class="heading-orange">Mori-Tama</div>
              <div class="c-text-cmn-01 -white animation-element slide-left">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics.</div>
              <div class="c-box-cmn-button animation-element slide-left"><a class="c-button-cmn-01"><span class="text">READ MORE</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
              <div class="c-product-akara-orange animation-element slide-top"></div>
            </div>
            <div class="c-wave-orange-bottom">
              <canvas id="canvas-orange-bottom"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="l-sec-cmn-01 -story-about-top">
        <div class="c-wave-yellow">
          <canvas id="canvas-yellow"></canvas>
        </div>
        <div class="inner">
          <div class="c-box-card-row-01">
            <figure class="box-image animation-element slide-top"><img class="image u-no-sp" src="/assets/img/top/img_akara_story.png" alt="akara Story"><img class="image u-no-tb u-no-pc" src="/assets/img/top/BlackOak.svg" alt="akara Story"></figure>
            <div class="box-content">
              <div class="c-orange-egg animation-element slide-top"></div>
              <div class="c-heading-cmn-01 animation-element slide-top"><span class="text-white">akara</span><span> Story</span></div>
              <div class="c-text-cmn-01 animation-element slide-top">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics. No hormones are used in egg production either! Best of all, they come from happy hens who are free to roam and play.</div>
              <div class="c-box-cmn-button animation-element slide-top"><a class="c-button-cmn-01"><span class="text">READ MORE</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
            </div>
            <div class="c-wave-white-bottom">
              <canvas id="canvas-white-bottom"></canvas>
            </div>
          </div>
          <div class="c-box-card-row-01 -reverse">
            <figure class="box-image animation-element slide-top"><img class="image u-no-sp" src="/assets/img/top/img_about_akara.png" alt="About akara"><img class="image u-no-tb u-no-pc" src="/assets/img/top/everyday-with-akara2.svg" alt="About akara"></figure>
            <div class="box-content">
              <div class="c-about-akara-egg animation-element slide-top"></div>
              <div class="c-line-dotted-about-akara animation-element slide-top"></div>
              <div class="c-heading-cmn-01 animation-element slide-top"><span>About</span><span class="text-white"> akara</span></div>
              <div class="c-text-cmn-01 animation-element slide-top">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics. No hormones are used in egg production either! Best of all, they come from happy hens who are free to roam and play.</div>
              <div class="c-box-cmn-button animation-element slide-top"><a class="c-button-cmn-01"><span class="text">READ MORE</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
            </div>
          </div>
        </div>
        <div class="c-wave-yellow-bottom">
          <canvas id="canvas-yellow-bottom"></canvas>
        </div>
      </div>
      <div class="l-sec-cmn-01 -recipes-top-heading">
        <div class="c-wave-white">
          <canvas id="canvas-white-top"></canvas>
        </div>
        <div class="inner">
          <div class="c-box-heading-center-text">
            <div class="inner">
              <div class="box-heading animation-element slide-top">
                <div class="c-line-deco"></div>
                <div class="title"><span>RECIPIE</span><span class="text-yellow">S</span></div>
              </div>
              <div class="box-text animation-element slide-top">
                <div class="text">These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive no antibiotics. No hormones are used in egg production either!</div>
              </div>
              <div class="c-box-cmn-button animation-element slide-top"><a class="c-button-cmn-01 --border-base"><span class="text">READ MORE</span><span class="arrow"><i class="fa fa-arrow-right"></i></span></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="l-sec-cmn-01 l-sec-box-swiper-voice">
        <div class="inner">
          <div class="l-swiper-recipes">
            <!-- Slider main container-->
            <div class="product-swiper-container js-recipes-swiper">
              <!-- Additional required wrapper-->
              <div class="swiper-wrapper">
                <!-- Slides-->
                <div class="swiper-slide">
                  <div class="article-content">
                    <div class="c-shadow"></div>
                    <div class="c-box-card-01 -full">
                      <div class="c-badge__list">
                        <div class="c-badge__item -level">
                          <div class="icon"></div>
                          <div class="text">Easy</div>
                        </div>
                        <div class="c-badge__item -time">
                          <div class="icon"></div>
                          <div class="text">30 mins</div>
                        </div>
                      </div>
                      <div class="c-overlay"></div>
                      <figure class="box-image"><img class="image" src="/assets/img/top/img_recipes_top_02.jpg" alt="Cheesy Breaks"></figure>
                      <div class="box-content">
                        <div class="c-heading-cmn-01">Cheesy Breaks</div>
                        <div class="c-text-cmn-01">Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="article-content">
                    <div class="c-shadow"></div>
                    <div class="c-box-card-01 -full">
                      <div class="c-badge__list">
                        <div class="c-badge__item -level">
                          <div class="icon"></div>
                          <div class="text">Easy</div>
                        </div>
                        <div class="c-badge__item -time">
                          <div class="icon"></div>
                          <div class="text">30 mins</div>
                        </div>
                      </div>
                      <div class="c-overlay"></div>
                      <figure class="box-image"><img class="image" src="/assets/img/top/img_recipes_top_03.jpg" alt="Italian Fried Egg"></figure>
                      <div class="box-content">
                        <div class="c-heading-cmn-01">Italian Fried Egg</div>
                        <div class="c-text-cmn-01">Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="article-content">
                    <div class="c-shadow"></div>
                    <div class="c-box-card-01 -full">
                      <div class="c-badge__list">
                        <div class="c-badge__item -level">
                          <div class="icon"></div>
                          <div class="text">Easy</div>
                        </div>
                        <div class="c-badge__item -time">
                          <div class="icon"></div>
                          <div class="text">30 mins</div>
                        </div>
                      </div>
                      <div class="c-overlay"></div>
                      <figure class="box-image"><img class="image" src="/assets/img/top/img_recipes_top_04.jpg" alt="Rocky Egg Sunrise"></figure>
                      <div class="box-content">
                        <div class="c-heading-cmn-01">Rocky Egg Sunrise</div>
                        <div class="c-text-cmn-01">Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="article-content">
                    <div class="c-shadow"></div>
                    <div class="c-box-card-01 -full">
                      <div class="c-badge__list">
                        <div class="c-badge__item -level">
                          <div class="icon"></div>
                          <div class="text">Easy</div>
                        </div>
                        <div class="c-badge__item -time">
                          <div class="icon"></div>
                          <div class="text">30 mins</div>
                        </div>
                      </div>
                      <div class="c-overlay"></div>
                      <figure class="box-image"><img class="image" src="/assets/img/top/img_recipes_top_01.jpg" alt="Rocky Egg Salad"></figure>
                      <div class="box-content">
                        <div class="c-heading-cmn-01">Rocky Egg Salad</div>
                        <div class="c-text-cmn-01">Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
get_footer();
<?php
/**
 * The template for displaying single posts and pages.
 *
 * Template Name: Search Template
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
      $term_obj = get_queried_object();
      print_r($term_obj);
?>
      <main class="l-container">
        <div class="l-container__inner">
          <div class="p-search">
            <div class="c-search">
              <div class="c-search__heading">SEARCH RESULTS FOR</div>
              <div class="c-search__subheading"><span class="c-keyword">Fresh eggs</span><span class="c-search-result-number">(99 results)</span></div>
              <div class="c-search__list">
                <div class="c-search__list-item animation-element slide-top"><a class="c-search__list-link" href="#">
                    <div class="c-search-card">
                      <figure class="c-search-card__frame"><img class="c-search-card__image" src="/assets/img/search/img_search_dummy@2x.png" alt=""></figure>
                      <div class="c-search-card__heading">The quick, brown fox jumps over a lazy</div>
                      <div class="c-search-card__content">
                        <p>These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive.</p>
                      </div>
                    </div></a></div>
                <div class="c-search__list-item animation-element slide-top"><a class="c-search__list-link" href="#">
                    <div class="c-search-card">
                      <figure class="c-search-card__frame"><img class="c-search-card__image" src="/assets/img/search/img_search_dummy@2x.png" alt=""></figure>
                      <div class="c-search-card__heading">The quick, brown fox jumps over a lazy</div>
                      <div class="c-search-card__content">
                        <p>These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive.</p>
                      </div>
                    </div></a></div>
                <div class="c-search__list-item animation-element slide-top"><a class="c-search__list-link" href="#">
                    <div class="c-search-card">
                      <figure class="c-search-card__frame"><img class="c-search-card__image" src="/assets/img/search/img_search_dummy@2x.png" alt=""></figure>
                      <div class="c-search-card__heading">The quick, brown fox jumps over a lazy</div>
                      <div class="c-search-card__content">
                        <p>These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive.</p>
                      </div>
                    </div></a></div>
                <div class="c-search__list-item animation-element slide-top"><a class="c-search__list-link" href="#">
                    <div class="c-search-card">
                      <figure class="c-search-card__frame"><img class="c-search-card__image" src="/assets/img/search/img_search_dummy@2x.png" alt=""></figure>
                      <div class="c-search-card__heading">The quick, brown fox jumps over a lazy</div>
                      <div class="c-search-card__content">
                        <p>These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive.</p>
                      </div>
                    </div></a></div>
                <div class="c-search__list-item animation-element slide-top"><a class="c-search__list-link" href="#">
                    <div class="c-search-card">
                      <figure class="c-search-card__frame"><img class="c-search-card__image" src="/assets/img/search/img_search_dummy@2x.png" alt=""></figure>
                      <div class="c-search-card__heading">The quick, brown fox jumps over a lazy</div>
                      <div class="c-search-card__content">
                        <p>These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive.</p>
                      </div>
                    </div></a></div>
                <div class="c-search__list-item animation-element slide-top"><a class="c-search__list-link" href="#">
                    <div class="c-search-card">
                      <figure class="c-search-card__frame"><img class="c-search-card__image" src="/assets/img/search/img_search_dummy@2x.png" alt=""></figure>
                      <div class="c-search-card__heading">The quick, brown fox jumps over a lazy</div>
                      <div class="c-search-card__content">
                        <p>These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive.</p>
                      </div>
                    </div></a></div>
                <div class="c-search__list-item animation-element slide-top"><a class="c-search__list-link" href="#">
                    <div class="c-search-card">
                      <figure class="c-search-card__frame"><img class="c-search-card__image" src="/assets/img/search/img_search_dummy@2x.png" alt=""></figure>
                      <div class="c-search-card__heading">The quick, brown fox jumps over a lazy</div>
                      <div class="c-search-card__content">
                        <p>These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive.</p>
                      </div>
                    </div></a></div>
                <div class="c-search__list-item animation-element slide-top"><a class="c-search__list-link" href="#">
                    <div class="c-search-card">
                      <figure class="c-search-card__frame"><img class="c-search-card__image" src="/assets/img/search/img_search_dummy@2x.png" alt=""></figure>
                      <div class="c-search-card__heading">The quick, brown fox jumps over a lazy</div>
                      <div class="c-search-card__content">
                        <p>These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive.</p>
                      </div>
                    </div></a></div>
                <div class="c-search__list-item animation-element slide-top"><a class="c-search__list-link" href="#">
                    <div class="c-search-card">
                      <figure class="c-search-card__frame"><img class="c-search-card__image" src="/assets/img/search/img_search_dummy@2x.png" alt=""></figure>
                      <div class="c-search-card__heading">The quick, brown fox jumps over a lazy</div>
                      <div class="c-search-card__content">
                        <p>These tasty certified USDA Organic eggs come from farms that have been pesticide-free for at least three years and from free range flocks that receive.</p>
                      </div>
                    </div></a></div>
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
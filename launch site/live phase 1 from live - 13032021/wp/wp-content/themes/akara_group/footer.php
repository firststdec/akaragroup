<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

	<div class="p-pagetop js-pagetop"><a class="p-pagetop__trigger js-scroll" href="#"><span class="fas fa-chevron-up"></span></a></div>
	<div class="c-fix-panel">
		<div class="inner">
			<div class="c-call">
				<a href="tel:037349885" title="โทรหาเรา 037349885" class="c-call">
					<div class="icon -tel"></div>
					<div class="text">โทรหาเรา</div>
				</a>
			</div>
			<div class="c-message">
				<a href="https://m.me/akaragroupTH" target="_blank" class="c-message">
					<div class="icon -line"></div>
					<div class="text">ส่งข้อความ</div>
				</a>
			</div>
		</div>
	</div>
	<?php
		if(is_singular('recipe')):
			$page = get_queried_object();
			// print "<pre>"; print_r($page);
			$current_post_id = $page->ID;
			$args = array(
				'post_type' => array('recipe'),
				'post_status' => 'publish',
				'orderby'=> 'date',
				'order' => 'DESC',
				'posts_per_page' => -1,
				);
				$the_query = new WP_Query( $args );

				$ids = array();
				if ( $the_query->have_posts() ){
					while ( $the_query->have_posts() ) : $the_query->the_post();
						$ids[] = get_the_ID();
					endwhile;
				}
				//print "<pre>"; print_r($ids);
				// get and echo previous and next post in the same taxonomy
				$thisindex = array_search( $current_post_id, $ids);
				$previd = $ids[$thisindex+1];
				$nextid = $ids[$thisindex-1];
		endif;
	?>
	<?php // if(!empty($nextid) || !empty($previd)): ?>

	<footer data-next="<?php echo $nextid. ' '. $current_post_id; ?>" class="l-footer<?php echo (is_singular('recipe') && !empty($nextid))? ' u-no-pc u-no-tb':''; ?>">
		<div class="c-wave-footer">
			<canvas id="canvas-footer"></canvas>
		</div>
		<div class="inner">
			<div class="l-footer__in l-block">
				<nav class="l-footer__menu">
					<ul class="l-footer__menu-list">
						<li class="l-footer__menu-item -logo-footer"><a class="l-footer__menu-link" href="/akara/"><img src="/assets/img/common/img_logo_footer.png" alt=""></a></li>
						<li class="l-footer__menu-item -contact-detail">
							<div class="l-footer__menu-link">CONTACT INFO</div>
							<div class="l-footer__content">
								<div class="heading">บริษัท อัครากรุ๊ป จำกัด</div>
								<div class="txt">88 หมู่ 2 ต.ป่าขะ อ.บ้านนา จ.นครนายก 26110</div>
							</div>
							<div class="l-footer__content">
								<div class="heading">วันและเวลาทำการ</div>
								<div class="txt">วันจันทร์ – วันเสาร์ 08.00 – 17.00</div>
							</div>
						</li>
						<li class="l-footer__menu-item u-pl-40 u-pl-sp-0">
							<div class="l-footer__menu-link c-hide-sp"></div>
							<div class="l-footer__content">
								<div class="txt">
									<div><a href="tel:0923807771" class="c-link-cmn-03" title="โทรหาเรา 0923807771">092-3807771-3</a></div>
									<div class="email"><img src="/assets/img/common/fax-solid.svg" alt=""></div>
								</div>
								<div class="txt">
									<div><a href="tel:037349885" class="c-link-cmn-03" title="โทรหาเรา 037-349-885">037-349-885</a></div>
								</div>
								<div class="txt">
									<div><a href="mailto:webadmin@akaragroup.co.th" class="c-link-cmn-03" title="ติดต่อเรา">webadmin@akaragroup.co.th</a></div>
									<div class="fax"><img src="/assets/img/common/envelope-solid.svg" alt=""></div>
								</div>
							</div>
						</li>
						<li class="l-footer__menu-item">
							<div class="l-footer__menu-link">CUSTOMER SERVICE</div>
							<div class="l-footer__content -tel">
								<div class="text"><a href="tel:037349885" class="c-link-cmn-02" title="โทรหาเรา 037-349-885">037-349-885</a></div>
								<div class="icon-tel"><i class="fas fa-headset"></i></div>
							</div>
							<div class="l-footer__menu-link -sns-heading">FOLLOW US</div>
							<div class="l-footer__content -sns">
								<div class="c-footer-list-sns">
									<div class="c-footer-list-sns__item"><a class="c-footer-list-sns__link" href="https://www.facebook.com/akaragroupTH" target="_blank"><i class="fab fa-facebook"></i></a></div>
									<div class="c-footer-list-sns__item"><a class="c-footer-list-sns__link" href="https://www.youtube.com/channel/UCACP4vYwPZLgrucq-5mu1zQ" target="_blank"><i class="fab fa-youtube"></i></a></div>
									<div class="c-footer-list-sns__item"><a class="c-footer-list-sns__link" href="https://www.instagram.com/akarabrand/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a></div>
								</div>
							</div>
						</li>
					</ul>
				</nav>
			</div>
			<div class="l-footer__copyright">
				<div class="item">
					<div>Copyright <?php echo date('Y'); ?> Akaragroup | All Rights Reserved</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
<script src="/assets/js/libs/jquery.min.js"></script>
<script src="/assets/js/libs/objectFitPolyfill.min.js"></script>
<script src="/assets/js/libs/swiper.js"></script>
<script src="/assets/js/waveFooter.js"></script>
<script src="/assets/js/libs/slick.min.js"></script>
<script src="/assets/js/libs/modaal.min.js"></script>
<script src="/assets/js/libs/jquery.matchHeight.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.2/dist/lazyload.min.js"></script>
<script src="/assets/js/common.js?v=2021-2-1-2"></script>
<script src="/assets/js/loadmore.js?v=2020-01"></script>
<script src='/assets/js/libs/jquery.validationEngine.js'></script>
<?php if(ICL_LANGUAGE_CODE == 'en'): ?>
<script src='/assets/js/libs/jquery.validationEngine-en.js'></script>
<?php elseif(ICL_LANGUAGE_CODE == 'th'): ?>
<script src='/assets/js/libs/jquery.validationEngine-th.js?v=12'></script>
<?php endif; ?>
<script src='/assets/js/form.js?v=14'></script>
<?php if(is_front_page()): ?>
<script src="/assets/js/bundle.js?v=2021-01-31"></script>
<script src="/assets/js/top.js"></script>
<script>
		// then call from top level document
  var tag = document.createElement('script');
  tag.id = 'iframe-demo';
  tag.src = 'https://www.youtube.com/iframe_api';
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('c-iframe-top-video', {
        events: {
          'onReady': onPlayerReady,
          'onStateChange': onPlayerStateChange
        }
    });
  }
  function onPlayerReady(event) {
		lockScreen();
  }
  function changeBorderColor(playerStatus) {
    var color;
    if (playerStatus == -1) {
      color = "#37474F"; // unstarted = gray
    } else if (playerStatus == 0) {
      color = "#FFFF00"; // ended = yellow
    } else if (playerStatus == 1) {
      color = "#33691E"; // playing = green
    } else if (playerStatus == 2) {
      color = "#DD2C00"; // paused = red
    } else if (playerStatus == 3) {
      color = "#AA00FF"; // buffering = purple
    } else if (playerStatus == 5) {
      color = "#FF6DOO"; // video cued = orange
    }
    if (color) {

    }
  }
  function onPlayerStateChange(event) {
    changeBorderColor(event.data);
	}

	$('.js-video-close').on('click', function(){
		unlockScreen();
		player.stopVideo();
	});

	$(document).on('click', function (e) {
		let $popUpTop = $('.c-box-video-top');
		let $overlayTop = $('.c-box-video-overlay');

    if($(e.target).closest('.sec-owner-feature').length === 0) {
			$popUpTop.removeClass('is-active');
			$overlayTop.removeClass('is-active');
			unlockScreen();
			player.stopVideo();
    }
	});

</script>
<?php endif; ?>
<?php if(is_page_template("page-our-story.php")): ?>
<script src="/assets/js/topWaveYellow.js"></script>
<script src="/assets/js/bottomWaveYellow.js"></script>
<script src="/assets/js/topWaveYellow02.js"></script>
<script src="/assets/js/bottomWaveYellow02.js"></script>
<script src="/assets/js/waveMainVisualSub.js"></script>
<script src="/assets/js/our-story.js"></script>
<?php endif; ?>
<?php if(is_page_template('page-faq.php') 
|| is_page_template('page-where-to-buy.php') 
|| is_tax('media_category') 
|| is_tax('news_category') 
|| is_post_type_archive('media') 
|| is_post_type_archive('news')): ?>
<script src="/assets/js/waveWhiteTop.js"></script>
<?php endif; ?>
<?php if(is_page_template('page-about-us.php')): ?>
<script src="/assets/js/topWaveYellow02.js"></script>
<script src="/assets/js/bottomWaveYellow02.js"></script>
<script src="/assets/js/waveMainVisualSub.js"></script>
<?php endif; ?>
<?php if(is_page_template('page-careers.php')): ?>
<script src="/assets/js/waveCreamTop.js"></script>
<script src="/assets/js/waveCreamBottom.js"></script>
<script src="/assets/js/waveMainVisualSub.js"></script>
<?php endif; ?>
<?php if(is_page('contact-us') || is_singular('news') || is_singular('media') || is_post_type_archive('recipe') || is_tax('recipe_category')): ?>
<script src="/assets/js/waveMainVisualSub.js"></script>
<?php endif; ?>
<?php
	if(is_singular('product') || is_tax('product_category')):
		$terms = get_the_terms( $post->ID, 'product_category' );
		if ( $terms && ! is_wp_error( $terms ) ){
			foreach ( $terms as $term ) {
				$term_links[] = $term->name;
			}
		}
?>
<?php if(in_array('akara', $term_links)): ?>
<!-- <script src="/assets/js/topWaveYellow.js"></script> -->
<!-- <script src="/assets/js/bottomWaveYellow.js"></script> -->
<script src="/assets/js/waveCreamTop.js"></script>
<script src="/assets/js/waveCreamBottom.js"></script>
<?php elseif(in_array('AKARA EGGOLOGY', $term_links)): ?>
<script src="/assets/js/waveGreenTop.js"></script>
<script src="/assets/js/waveGreenBottom.js"></script>
<script src="/assets/js/waveCreamTop.js"></script>
<script src="/assets/js/waveCreamBottom.js"></script>
<?php elseif(in_array('AKARA ISE', $term_links)): ?>
<!-- <script src="/assets/js/waveOrangeTop.js"></script> -->
<!-- <script src="/assets/js/waveOrangeBottom.js"></script> -->
<script src="/assets/js/waveCreamTop.js"></script>
<script src="/assets/js/waveCreamBottom.js"></script>
<?php endif; ?>
<?php endif; //if(is_singular('product')): ?>
<?php
	if(is_tax('product_category')):
		$term_obj = get_queried_object();
		if($term_obj->parent == 3) :
?>
<!-- <script src="/assets/js/topWaveYellow.js"></script> -->
<!-- <script src="/assets/js/bottomWaveYellow.js"></script> -->
<script src="/assets/js/waveCreamTop.js"></script>
<script src="/assets/js/waveCreamBottom.js"></script>
<?php
		endif; // if($term_obj->parent == 3)
	endif; // if(is_tax('product_category')):
?>
	</body>
</html>

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
				<div class="icon -tel"></div>
				<div class="text">โทรหาเรา</div>
			</div>
			<div class="c-message">
				<div class="icon -line"></div>
				<div class="text">ส่งข้อความ</div>
			</div>
		</div>
	</div>
	<footer class="l-footer">
		<div class="c-wave-footer">
			<canvas id="canvas-footer"></canvas>
		</div>
		<div class="inner">
			<div class="l-footer__in l-block">
				<nav class="l-footer__menu">
					<ul class="l-footer__menu-list">
						<li class="l-footer__menu-item -logo-footer"><a class="l-footer__menu-link" href="/"><img src="/assets/img/common/img_logo_footer.svg" alt=""></a></li>
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
									<div>092-3807771-3</div>
								</div>
								<div class="txt">
									<div>037-349-886</div>
									<div class="email"><img src="/assets/img/common/fax-solid.svg" alt=""></div>
								</div>
								<div class="txt">
									<div>webadmin@akaragroup.co.th</div>
									<div class="fax"><img src="/assets/img/common/envelope-solid.svg" alt=""></div>
								</div>
							</div>
						</li>
						<li class="l-footer__menu-item">
							<div class="l-footer__menu-link">CUSTOMER SERVICE</div>
							<div class="l-footer__content -tel">
								<div class="text">037-349-885</div>
								<div class="icon-tel"><i class="fas fa-headset"></i></div>
							</div>
							<div class="l-footer__menu-link -sns-heading">FOLLOW US</div>
							<div class="l-footer__content -sns">
								<div class="c-footer-list-sns">
									<div class="c-footer-list-sns__item"><a class="c-footer-list-sns__link" href="#"><i class="fab fa-facebook"></i></a></div>
									<div class="c-footer-list-sns__item"><a class="c-footer-list-sns__link" href="#"><i class="fab fa-twitter"></i></a></div>
									<div class="c-footer-list-sns__item"><a class="c-footer-list-sns__link" href="#"><i class="fab fa-instagram"></i></a></div>
								</div>
							</div>
						</li>
					</ul>
				</nav>
			</div>
			<div class="l-footer__copyright">
				<div class="item">
					<div>Copyright 2020 Akaragroup | All Rights Reserved</div>
				</div>
			</div>
		</div>
	</footer>
</div>
		<?php wp_footer(); ?>
		<script src="/assets/js/libs/jquery.min.js"></script>
    <script src="/assets/js/libs/objectFitPolyfill.min.js"></script>
    <script src="/assets/js/libs/mobile-detect.min.js"></script>
    <script src="/assets/js/libs/swiper.js"></script>
    <script src="/assets/js/waveFooter.js"></script>
    <script src="/assets/js/libs/slick.min.js"></script>
    <script src="/assets/js/libs/modaal.min.js"></script>
    <script src="/assets/js/common.js"></script>
    <script src="/assets/js/libs/jquery.matchHeight.js"></script>
    <script src="/assets/js/libs/jquery.waypoints.js"></script>
	<?php if(is_front_page()): ?>
    <script src="/assets/js/topWaveYellow.js"></script>
    <script src="/assets/js/bottomWaveYellow.js"></script>
    <script src="/assets/js/topWaveYellow02.js"></script>
    <script src="/assets/js/bottomWaveYellow02.js"></script>
    <script src="/assets/js/waveGreenBottom.js"></script>
    <script src="/assets/js/waveWhiteTop.js"></script>
    <script src="/assets/js/waveWhiteBottom.js"></script>
    <script src="/assets/js/waveOrangeBottom.js"></script>
    <script src="/assets/js/waveMainVisual.js"></script>
	<?php endif; ?>
	<?php if(is_page_template("page-our-story.php")): ?>
    <script src="/assets/js/topWaveYellow.js"></script>
    <script src="/assets/js/bottomWaveYellow.js"></script>
    <script src="/assets/js/topWaveYellow02.js"></script>
    <script src="/assets/js/bottomWaveYellow02.js"></script>
    <script src="/assets/js/waveMainVisualSub.js"></script>
		<script src="/assets/js/our-story.js"></script>
	<?php endif; ?>
	<?php if(is_page_template('page-faq.php') || is_page_template('page-where-to-buy.php')): ?>
	<script src="/assets/js/waveWhiteTop.js"></script>
	<?php endif; ?>
	<?php if(is_page_template('page-about-us.php')): ?>
	<script src="/assets/js/topWaveYellow.js"></script>
	<script src="/assets/js/bottomWaveYellow.js"></script>
	<script src="/assets/js/topWaveYellow02.js"></script>
	<script src="/assets/js/bottomWaveYellow02.js"></script>
	<script src="/assets/js/waveMainVisualSub.js"></script>
	<?php endif; ?>
	<?php if(is_page_template('page-careers.php')): ?>
	<script src="/assets/js/waveCreamTop.js"></script>
	<script src="/assets/js/waveCreamBottom.js"></script>
	<script src="/assets/js/waveMainVisualSub.js"></script>
	<?php endif; ?>
	<?php if(is_page_template('page-contact-us.php')): ?>
	<script src="/assets/js/waveMainVisualSub.js"></script>
	<?php endif; ?>
	</body>
</html>

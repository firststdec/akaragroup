/**
 * slick.js
 */

 /* ----------------------------------------------------------
  init
---------------------------------------------------------- */
$(function () {
  employSlider();
  worksSlider();
});

/* ----------------------------------------------------------
  Employ Slider
---------------------------------------------------------- */
var employSlider = function () {
  var target = $('.js-employ-slider');
  if(target.length){
    target.slick({
      infinite: true,
      speed: 800,
      slidesToShow: 2,
      slidesToScroll: 2,
      responsive: [
        {
          breakpoint: 870,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  }
}
/* ----------------------------------------------------------
  About Works Slider
---------------------------------------------------------- */
var worksSlider = function () {
  var target = $('.js-works-slider');
  if(target.length){
    target.slick({
      infinite: false,
      centerMode: false,
      dots: true,
      slidesToShow: 1,
      slidesToScroll: 1
    });
  }
}


(function() {
  'use strict';

  window.onload = (function(){
    $(window).scroll(function () {
      if( $(window).scrollTop() > 200 ) {
        // Display something
        $('.c-box-scroll-spy').removeClass('-white');
      } else {
        $('.c-box-scroll-spy').addClass('-white');
      }
    })
  })
})();

$(function() {
  var link = $('.c-box-scroll-spy a');

  // Move to specific section when click on menu link
  link.on('click', function(e) {
    var target = $($(this).attr('href'));
    $('html, body').animate({
      scrollTop: target.offset().top - 100
    }, 600);
    $('.c-box-scroll-spy__item').removeClass('is-active');
    $(this).closest('.c-box-scroll-spy__item').addClass('is-active');
    e.preventDefault();
  });

  // Run the scrNav when scroll
  $(window).on('scroll', function(){
    scrNav();
  });

  // scrNav function
  // Change active dot according to the active section in the window
  function scrNav() {
    var sTop = $(window).scrollTop();
    $('.section-spy').each(function() {
      var id = $(this).attr('id'),
          offset = $(this).offset().top - 300,
          height = $(this).height();
      if(sTop >= offset && sTop < offset + height) {
        $('.c-box-scroll-spy__item').removeClass('is-active');
        $('.c-box-scroll-spy').find('[data-scroll="' + id + '"]').closest('.c-box-scroll-spy__item').addClass('is-active');
      }
    });
  }
  scrNav();
});
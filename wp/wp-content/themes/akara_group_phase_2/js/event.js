/**
 * event.js
 *
 */
$(function() {
  categoryOpen();
});

var categoryOpen = function() {
  var textClose = "カテゴリーを閉じる";
  var textOpen  = "カテゴリーをみる";

  $(".box-event-heading").find(".btn-cat-menu").click(function(e) {
    e.preventDefault();
    var $btn = $(this);
    var $container = $(this).closest(".box-heading-in").next();
    var text = $btn.text();

    $btn
      .toggleClass("is-open")
      .text( text == textClose ? textOpen : textClose );
    $container.stop(true,true).slideToggle(200);
  });

  $(".box-event-heading").find(".btn-close-sp").children("a").click(function(e) {
    e.preventDefault();
    var $btn = $(this).closest(".box-event-heading").find(".btn-cat-menu");

    $(this)
      .closest(".box-cat-container")
      .stop(true,true).slideUp(200);
    $btn.removeClass("is-open").text(textOpen);
  });
};
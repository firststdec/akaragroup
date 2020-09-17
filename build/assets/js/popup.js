/**
 * slick.js
 */

 /* ----------------------------------------------------------
  init
---------------------------------------------------------- */
$(function () {
  popupModal();
});

/* ----------------------------------------------------------
  popup-modal
---------------------------------------------------------- */
var popupModal = function () {
  $('.popup-modal').magnificPopup({
    type: 'inline',
    preloader: false,
    focus: '#username',
    modal: true
  });
  $(document).on('click', '.popup-modal-dismiss', function (e) {
    e.preventDefault();
    $.magnificPopup.close();
  });
}
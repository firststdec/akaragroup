jQuery(document).ready(function($){
	$("#form_contact, #form_catalog, .wpcf7-form, form[name='wp_email_capture']").validationEngine();
	$(".wpcf7-validates-as-required, #wp-email-capture-email-widget").addClass("validate[required]");
	$(".wpcf7-validates-as-email, #wp-email-capture-email-widget").addClass("validate[custom[email]]");
	$(".catalog-form input").addClass("validate[groupRequired[catalogue-number], custom[integerCustom]]");
	$("#your-tel").addClass("validate[custom[onlyNumber], minSize[10], maxSize[20]]");
	$("#form_contact #your-email-confirm").addClass("equals[your-email]");
  $("#your-postcode-01, #your-postcode-02").addClass("validate[custom[onlyNumber]]");
  $("#your-postcode-01").addClass("validate[maxSize[3]]");
  $("#your-postcode-02").addClass("validate[maxSize[4]]");
  $(".your-url").addClass("validate[custom[url]]");
  //$(".your-first-name, .your-last-name, .your-company, .your-department, .your-content").addClass("validate[custom[onlyfullwidth]]");
  //$("#form_catalog .your-address").addClass("validate[required]");
  // $("input:not(.your-first-name), input:not(.your-last-name), #form_catalog input, #form_contact textarea, #form_catalog textarea").attr('data-prompt-position', 'bottomLeft'); 
  // $("input.your-first-name, input.your-last-name").attr('data-prompt-position', 'bottomLeft');
  $('#reset-btn').on('click', function(){
    $('#form_contact, #form_catalog').validationEngine('hideAll');
  });
  $('.wpcf7-email').attr('pattern', '^[0-9a-zA-Z]+[\w-]+@[\w\.-]+\.\w{2,}$');
});
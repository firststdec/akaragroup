

(function(jQuery){



	if(jQuery(".wpcf7c-elm-step1").length != 0) {
		// 対象有り

		jQuery(".wpcf7c-elm-step1").each(function(){
			// 親のフォームを検索
			var parent = jQuery(this).parents("form");
			if(parent.attr("wpcf7c") == undefined) {
				// elm-submitをsubmitボタンへもセット
				parent.find(".wpcf7-submit").addClass("wpcf7c-elm-step2").addClass("wpcf7c-force-hide");
				parent.find(".ajax-loader").addClass("wpcf7c-elm-step2").addClass("wpcf7c-force-hide");

				// ajax用ID退避,処理済みフラグセット
				var hidden_wpcf7 = parent.find("input[name=_wpcf7]");
				var _wpcf7 = hidden_wpcf7.val();
				parent.attr("wpcf7c", _wpcf7);

				parent.attr("step", 1);

				hidden_wpcf7.after('<input type="hidden" name="_wpcf7c" value="step1" />');

				//parent.find("input[name=_wpcf7]").val("");

				// 不要要素非表示
				parent.find(".wpcf7c-elm-step2").addClass("wpcf7c-force-hide");
				parent.find(".wpcf7c-elm-step3").addClass("wpcf7c-force-hide");
				parent.find(".wpcf7c-elm-step1").removeClass("wpcf7c-force-hide");

				// 戻って編集ボタン挙動
				parent.find(".wpcf7c-btn-back").on("click", function(){
					wpcf7c_to_step1(parent, true);
					return false;
				});
			}




		});



	}

})(jQuery);

var wpcf7c_to_step1 = function(parent, scroll){
	parent.find(".wpcf7c-conf").each(function(){
		// 親フォーム
		var parent_form = jQuery(this).parents("form");

		jQuery(this).removeAttr("disabled").removeAttr("readonly").removeClass("wpcf7c-conf");

	});

	jQuery(".wpcf7c-conf-hidden").remove();

	parent.find(".wpcf7c-elm-step2").addClass("wpcf7c-force-hide");
	parent.find(".wpcf7c-elm-step3").addClass("wpcf7c-force-hide");
	parent.find(".wpcf7c-elm-step1").removeClass("wpcf7c-force-hide");

	parent.find("input[name=_wpcf7c]").val("step1");

	var responseOutput = parent.find('div.wpcf7-response-output');
	responseOutput.removeClass("wpcf7c-force-hide");
	responseOutput.removeClass("wpcf7-mail-sent-ng");
	responseOutput.css("display", "none");

	parent.find(".ajax-loader").addClass("wpcf7c-elm-step2").addClass("wpcf7c-force-hide");

	// スムーズスクロール
	if(scroll) {
		// スムーズスクロール
		setTimeout(function() { wpcf7c_scroll(parent.find("input[name=_wpcf7_unit_tag]").val()) }, 100);
	}

}


var wpcf7c_step1 = function(unit_tag){
	// 確認完了

	// 対象フォーム検索
	//var elm_unit_tag = jQuery.find("input[name=_wpcf7_unit_tag]");
	jQuery(jQuery.find("input[name=_wpcf7_unit_tag]")).each(function(){
		if(jQuery(this).val() == unit_tag) {
			var parent = jQuery(this).parents("form");


			var responseOutput = parent.find('div.wpcf7-response-output');
			responseOutput.addClass("wpcf7c-force-hide");

			// 確認画面表示
			// テキストエリアを伸ばす
			parent.find("textarea").each(function(){
				if(this.scrollHeight > this.offsetHeight){
					this.style.height = (this.scrollHeight + 10) + 'px';
				}
			});
			parent.find("textarea").attr("readonly", true).addClass("wpcf7c-conf");
			parent.find("select").each(function(){
				jQuery(this).attr("readonly", true).attr("disabled", true).addClass("wpcf7c-conf");
				jQuery(this).after(
					jQuery('<input type="hidden" />').attr("name", jQuery(this).attr("name")).val(jQuery(this).val()).addClass("wpcf7c-conf-hidden")
				);
			});
			parent.find("input").each(function(){
				switch(jQuery(this).attr("type")) {
					case "submit":
					case "button":
					case "hidden":
					case "image":
						// なにもしない
						break;
					case "radio":
					case "checkbox":
						// 選択されているものだけ対処
						jQuery(this).attr("readonly", true).attr("disabled", true).addClass("wpcf7c-conf");
						if(jQuery(this).is(":checked")) {
							jQuery(this).after(
								jQuery('<input type="hidden" />').attr("name", jQuery(this).attr("name")).val(jQuery(this).val()).addClass("wpcf7c-conf-hidden")
							);
						}
						break;
					case "file":
						jQuery(this).attr("readonly", true).addClass("wpcf7c-elm-step1").addClass("wpcf7c-force-hide");
						jQuery(this).after(
							jQuery('<input type="text" />').attr("name", (jQuery(this).attr("name") + "_conf")).val(jQuery(this).val()).addClass("wpcf7c-conf-hidden").addClass("wpcf7c-conf").attr("readonly", true).attr("disabled", true)
						);

						break;
					default:
						jQuery(this).attr("readonly", true).addClass("wpcf7c-conf");
						jQuery(this).after(
							jQuery('<input type="hidden" />').attr("name", jQuery(this).attr("name")).val(jQuery(this).val()).addClass("wpcf7c-conf-hidden")
						);
						break;
				}
			});

			// 表示切替
			parent.find(".wpcf7c-elm-step1").addClass("wpcf7c-force-hide");
			parent.find(".wpcf7c-elm-step3").addClass("wpcf7c-force-hide");
			parent.find(".wpcf7c-elm-step2").removeClass("wpcf7c-force-hide");

			parent.find(".ajax-loader").removeClass("wpcf7c-force-hide");

			parent.find("input[name=_wpcf7c]").val("step2");

			// スムーズスクロール
			setTimeout(function() { wpcf7c_scroll(unit_tag) }, 100);


		}
	});
}

var wpcf7c_scroll = function(unit_tag) {
	// エラーの時などにアンカーまでスクロール
	jQuery(jQuery.find("input[name=_wpcf7_unit_tag]")).each(function(){
		if(jQuery(this).val() == unit_tag) {
			var parent = jQuery(this).parents("form");
			var speed = 1000;
			var position = parent.offset().top;
			if(jQuery('.wpcf7c-anchor').length != 0) {
				position = jQuery('.wpcf7c-anchor').offset().top;
			}
			jQuery("html, body").animate({scrollTop:position}, speed, "swing");
		}
	});
}

var wpcf7c_step2 = function(unit_tag){
	// 確認完了

	// 対象フォーム検索
	//var elm_unit_tag = jQuery.find("input[name=_wpcf7_unit_tag]");
	jQuery(jQuery.find("input[name=_wpcf7_unit_tag]")).each(function(){
		if(jQuery(this).val() == unit_tag) {
			var parent = jQuery(this).parents("form");


			var responseOutput = parent.find('div.wpcf7-response-output');
			responseOutput.removeClass("wpcf7c-force-hide");

			// step1状態の画面表示
			wpcf7c_to_step1(parent);

			// step3の要素があれば、それに切り替える
			if(parent.find(".wpcf7c-elm-step3").length != 0) {
				// 表示切替
				parent.find(".wpcf7c-elm-step1").addClass("wpcf7c-force-hide");
				parent.find(".wpcf7c-elm-step2").addClass("wpcf7c-force-hide");
				parent.find(".wpcf7c-elm-step3").removeClass("wpcf7c-force-hide");
			}


		}
	});
}

var wpcf7c_step2_error = function(unit_tag) {
	jQuery(jQuery.find("input[name=_wpcf7_unit_tag]")).each(function(){
		if(jQuery(this).val() == unit_tag) {
			var parent = jQuery(this).parents("form");

			var responseOutput = parent.find('div.wpcf7-response-output');
			responseOutput.removeClass("wpcf7c-force-hide");
		}
	});

}


document.addEventListener( 'wpcf7submit', function( event ) {
	switch ( event.detail.status ) {
		case 'wpcf7c_confirmed':
		wpcf7c_step1(event.detail.id);
		break;
		case 'mail_sent':
		wpcf7c_step2(event.detail.id);
		break;

	}
}, false );

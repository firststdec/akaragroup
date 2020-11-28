$(document).ready(function() {
	$('.shikoto_loadmore').click(function(){
		var button = $(this),
			data = {
				'action': 'loadmore',
				'query': shikoto_loadmore_params.posts, // that's how we get params from wp_localize_script() function
				'query_banner' : shikoto_loadmore_params.posts_banner, // that's how we get params from wp_localize_script() function
				'current_banner_id' : shikoto_loadmore_params.current_banner_id,
				'page' : shikoto_loadmore_params.current_page,
				'banner_page' : shikoto_loadmore_params.current_page - 1,
			};
 
		$.ajax({
			url : shikoto_loadmore_params.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				//button.text('Loading...'); // change the button text, you can also add a preloader image
				$('.loader').show();
				button.hide();
			},
			success : function( data ){
				if( data ) { 
					button.show();
					$('.loader').hide();
					button.text( 'さらに読む' ).prev().after(data); // insert new posts
					shikoto_loadmore_params.current_page++;
 
					if ( shikoto_loadmore_params.current_page == shikoto_loadmore_params.max_page ) 
						button.remove(); // if last page, remove the button
 
					// you can also fire the "post-load" event here if you use a plugin that requires it
					// $( document.body ).trigger( 'post-load' );
				} else {
					button.remove(); // if no data, remove the button as well
				}
			},
		});
	}); 

	$('.akara_loadmore_dynamic').click(function(){
		console.log(1);
		var button = $(this),
			data = {
				'action': 'loadmore_dynamic',
				'query': akara_loadmore_params_dynamic.posts, // that's how we get params from wp_localize_script() function
				'page' : akara_loadmore_params_dynamic.current_page,
				'post_type' : akara_loadmore_params_dynamic.post_type,
			};
 
		$.ajax({
			url : akara_loadmore_params_dynamic.ajaxurl_dynamic, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				//button.text('Loading...'); // change the button text, you can also add a preloader image
				$('.loading').show();
				button.hide();
			},
			success : function( data ){
				if( data ) {
					console.log(data);
					button.show();
					$('.loading').hide();
					// button.text( 'load more..' ); // insert new posts
					$('.c-media-list').append(data);
					akara_loadmore_params_dynamic.current_page++;
 
					if ( akara_loadmore_params_dynamic.current_page == akara_loadmore_params_dynamic.max_page ) 
						button.remove(); // if last page, remove the button
 
					// you can also fire the "post-load" event here if you use a plugin that requires it
					// $( document.body ).trigger( 'post-load' );
				} else {
					button.remove(); // if no data, remove the button as well
				}
			}
		});
	}); 	
});
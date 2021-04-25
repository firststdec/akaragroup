<?php
/**
** A base module for [back]
**/

/* Shortcode handler */

add_action( 'wpcf7_init', 'wpcf7c_add_shortcode_back' );

function wpcf7c_add_shortcode_back() {

	if(function_exists('wpcf7_add_form_tag')) {
		wpcf7_add_form_tag( 'back', 'wpcf7c_back_shortcode_handler' );
	} else {
		wpcf7_add_shortcode( 'back', 'wpcf7c_back_shortcode_handler' );
	}



}

function wpcf7c_back_shortcode_handler( $tag ) {
	if ( version_compare(WPCF7_VERSION, "4.6", ">=") ) {
		$tag = new WPCF7_FormTag( $tag );
	} else {
		$tag = new WPCF7_Shortcode( $tag );
	}

	$class = wpcf7_form_controls_class( $tag->type );

	$atts = array();

	$atts['class'] = $tag->get_class_option( $class ) . " wpcf7c-elm-step2 wpcf7c-btn-back wpcf7c-force-hide";
	$atts['id'] = $tag->get_option( 'id', 'id', true );
	$atts['tabindex'] = $tag->get_option( 'tabindex', 'int', true );

	$value = isset( $tag->values[0] ) ? $tag->values[0] : '';

	if ( empty( $value ) )
		$value = __( 'Backedit', 'contact-form-7-add-confirm' );

	$atts['type'] = 'button';
	$atts['value'] = $value;

	$atts = wpcf7_format_atts( $atts );

	$html = sprintf( '<input %1$s />', $atts );

	return $html;
}


/* Tag generator */

//add_action( 'admin_init', 'wpcf7c_add_tag_generator_back', 55 );

if(WPCF7_VERSION >= "4.2.0") {

	if ( is_admin() ) {
		add_action( 'admin_init', 'wpcf7c_add_tag_generator_back', 55 );
	}

	function wpcf7c_add_tag_generator_back() {
		if(!class_exists('WPCF7_TagGenerator')) {
			return false;
		}
		$tag_generator = WPCF7_TagGenerator::get_instance();
		$tag_generator->add( 'back', __( 'Back button', 'contact-form-7-add-confirm' ),
			'wpcf7c_tg_pane_back', array( 'nameless' => 1 ) );
	}

	function wpcf7c_tg_pane_back( $contact_form, $args = '' ) {
		$args = wp_parse_args( $args, array() );

		$description = __( "Generate a form-tag for a back button. For more details, see %s.", 'contact-form-7-add-confirm' );

		$desc_link = wpcf7_link( __( 'http://www.eyeta.jp/archives/908', 'contact-form-7-add-confirm' ), __( 'Back Button', 'contact-form-7-add-confirm' ) );

		?>
		<div class="control-box">
			<fieldset>
				<legend><?php echo sprintf( esc_html( $description ), $desc_link ); ?></legend>

				<table class="form-table">
					<tbody>
					<tr>
						<th scope="row"><label
								for="<?php echo esc_attr( $args['content'] . '-values' ); ?>"><?php echo esc_html( __( 'Label', 'contact-form-7' ) ); ?></label>
						</th>
						<td><input type="text" name="values" class="oneline"
						           id="<?php echo esc_attr( $args['content'] . '-values' ); ?>"/></td>
					</tr>

					<tr>
						<th scope="row"><label
								for="<?php echo esc_attr( $args['content'] . '-id' ); ?>"><?php echo esc_html( __( 'Id attribute', 'contact-form-7' ) ); ?></label>
						</th>
						<td><input type="text" name="id" class="idvalue oneline option"
						           id="<?php echo esc_attr( $args['content'] . '-id' ); ?>"/></td>
					</tr>

					<tr>
						<th scope="row"><label
								for="<?php echo esc_attr( $args['content'] . '-class' ); ?>"><?php echo esc_html( __( 'Class attribute', 'contact-form-7' ) ); ?></label>
						</th>
						<td><input type="text" name="class" class="classvalue oneline option"
						           id="<?php echo esc_attr( $args['content'] . '-class' ); ?>"/></td>
					</tr>

					</tbody>
				</table>
			</fieldset>
		</div>

		<div class="insert-box">
			<input type="text" name="back" class="tag code" readonly="readonly" onfocus="this.select()"/>

			<div class="submitbox">
				<input type="button" class="button button-primary insert-tag"
				       value="<?php echo esc_attr( __( 'Insert Tag', 'contact-form-7' ) ); ?>"/>
			</div>
		</div>
		<?php
	}

} else {

	add_action( 'admin_init', 'wpcf7c_add_tag_generator_back', 55 );

	function wpcf7c_add_tag_generator_back() {
		if ( ! function_exists( 'wpcf7_add_tag_generator' ) )
			return;

		wpcf7_add_tag_generator( 'back', __( 'Back button', 'contact-form-7-add-confirm' ),
			'wpcf7-tg-pane-back', 'wpcf7c_tg_pane_back', array( 'nameless' => 1 ) );
	}

	function wpcf7c_tg_pane_back( $contact_form ) {
	?>
	<div id="wpcf7-tg-pane-back" class="hidden">
	<form action="">
	<table>
	<tr>
	<td><code>id</code> (<?php echo esc_html( __( 'optional', 'contact-form-7' ) ); ?>)<br />
	<input type="text" name="id" class="idvalue oneline option" /></td>

	<td><code>class</code> (<?php echo esc_html( __( 'optional', 'contact-form-7' ) ); ?>)<br />
	<input type="text" name="class" class="classvalue oneline option" /></td>
	</tr>

	<tr>
	<td><?php echo esc_html( __( 'Label', 'contact-form-7' ) ); ?> (<?php echo esc_html( __( 'optional', 'contact-form-7' ) ); ?>)<br />
	<input type="text" name="values" class="oneline" /></td>

	<td></td>
	</tr>
	</table>

	<div class="tg-tag"><?php echo esc_html( __( "Copy this code and paste it into the form left.", 'contact-form-7' ) ); ?><br /><input type="text" name="back" class="tag wp-ui-text-highlight code" readonly="readonly" onfocus="this.select()" /></div>
	</form>
	</div>
	<?php
	}

}
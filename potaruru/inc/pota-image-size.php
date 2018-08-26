<?php
if ( ! function_exists( 'pota_add_image_size' ) ) :
	function pota_add_image_size() {
		// blog card
		add_image_size('pota_750x450', 750, 450, true);
		// single post
		add_image_size('pota_945x550', 945, 550, true);
	}
endif;
add_action( 'after_setup_theme', 'pota_add_image_size' );

function pota_image($field, $size, $type = 'wp', $echo = true ) {
	if ($type == 'acf') {
		$image = is_array($field) ? $field['sizes']['pota_'.$size] : $field;		
	} elseif ($type == 'wp') {
		$image = get_the_post_thumbnail_url( $field, 'pota_'.$size );
	}

	if (!$image) {
		$image = pota_placeholder('pota_'.$size);
	}

	if ($echo) 
		echo $image;
	else 
		return $image;

}

function pota_placeholder($size) {
	return get_template_directory_uri() . '/src/img/'.$size.'.jpg';
}
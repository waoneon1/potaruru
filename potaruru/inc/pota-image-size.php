<?php
if ( ! function_exists( 'pota_add_image_size' ) ) :
	function pota_add_image_size() {
		add_image_size('pota_750x450', 750, 450, true); // block - blog card
		add_image_size('pota_945x550', 945, 550, true); // single post
		add_image_size('pota_360x235', 360, 235, true); // block - games
		add_image_size('pota_320x180', 320, 180, true); // block - blog medium
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

	if ($echo) echo $image;
	else return $image;
}

function pota_placeholder($size) {
	return get_template_directory_uri() . '/src/img/'.$size.'.jpg';
}

function pota_post_thumbnail($id, $size, $alt = '', $link = '') {
	$open_link = $close_link = '';
	if ($link) {
		$open_link = '<a href="'.$link.'">';
		$close_link = '</a>';
	}

	echo '<div class="post-thumbnail">' .
		$open_link .
			'<img src="' . pota_image($id, $size, 'wp', false) . '" alt="' . $alt . '">' .
		$close_link .
	'</div>';
}
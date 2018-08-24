<?php
function pota_blurb_autofill() {
	global $post;

	$meta_blurb = get_post_meta($post->ID, 'blurb', true);
	$trim   = 30; //max length of words to display

	if (!$meta_blurb || empty($meta_blurb))
	{
		$content = strip_tags($post->post_content);

		$old_arr = array_map('trim', explode(' ', $content));
		$new_arr = array_slice($old_arr, 0, $trim);

		$content = implode(' ',$new_arr).' ...';
		echo '<p>'.$content.'</p>';
	} else {
		echo '<p>'.$meta_blurb.'</p>';
	}
}
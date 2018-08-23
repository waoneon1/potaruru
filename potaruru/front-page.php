<?php
/**
 * The template Front Page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Potaruru
 */

get_header(); 
$type = get_field('type'); ?>

<section>
	<div class="container">
		<div class="row">
			<?php get_template_part( 'template/partial/featured', $type ) ?>
			<?php get_template_part( 'template/partial/blog', 'cards' ) ?>
		</div>
	</div>
</section>

<?php get_footer() ?>

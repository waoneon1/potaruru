<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Potaruru
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="row">
			<div class="col-lg-1 hidden-md-down">
				<!-- widget share -->
				<?php //get_template_part( 'template/partial/widget', 'share' ) ?>
			</div>
			<div class="col-lg-10">
				<!-- post -->
				<div class="post post-single">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

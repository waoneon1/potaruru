<?php
/**
 * Template part for displaying posts
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
				<?php get_template_part( 'template/partial/widget', 'share' ) ?>
			</div>
			<div class="col-lg-10">
				
				<!-- post -->
				<div class="post post-single">
					<h2 class="post-title"><?php the_title() ?></h2>
					<?php pota_component( 'post-meta' ) ?>
					<?php pota_post_thumbnail($post->ID, '945x550', $post->title) ?>
					<?php the_content() ?>	
				</div>

				<div class="post-actions">
					<?php pota_component( 'post-tags' ) ?>
					<?php pota_component( 'social-share' ) ?>
				</div>

				<?php if ( comments_open() || get_comments_number() ) :
					comments_template(); 
				endif ?>
				
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->



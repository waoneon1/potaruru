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
					<?php echo do_shortcode('[ajax_load_more nextpage="true" nextpage_urls="true" nextpage_scroll="0:30"  pause="true" pause_override="true"  nextpage_post_id="'. get_the_ID() .'" transition="fade" container_type="div" images_loaded="true" button_label="Next Page"]'); ?>
				</div>

				<?php $href = $btn_effect = '' ?>
				<?php if (get_previous_post()->ID): ?>
					<?php $prev_link = get_permalink(get_previous_post()->ID) ?>
					<?php $href = 'href="'.esc_url($prev_link).'"' ?>
					<?php $btn_effect = ' btn-effect' ?>
				<?php endif ?>
				<div class="text-center">
					<a class="btn btn-primary btn-shadow btn-rounded btn-lg m-t-10 <?php echo $btn_effect ?>" <?php echo $href ?>>Load More</a>
				</div>

				<div class="post-actions">
					<?php pota_component( 'post-tags' ) ?>
					<?php //pota_component( 'social-share' ) ?>
				</div>

				<?php get_template_part( 'template/partial/feature', 'showmore' ) ?>

				<?php if ( comments_open() || get_comments_number() ) :
					//comments_template(); 
				endif ?>
				
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

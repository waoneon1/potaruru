<?php
/**
 * The template Block - Blog Cards
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Potaruru
 */

$post_type = 'post';

$arg = array(
	'posts_per_page'	=> 4,
	'post_type' 		=> $post_type,
	'post_status'       => 'publish',
	'order' 			=> 'DESC'
);

// front page
if (is_front_page()) {
	$arg['offset'] = 3;
}

// category page
if (is_category()) {
	$cat_ID = get_query_var('cat');
	$arg['category'] = $cat_ID;
}

$posts = get_posts($arg);
?>

<?php foreach ($posts as $key => $post): ?>
	<?php setup_postdata($post) ?>
	<div class="col-sm-6 col-card">
		<div class="post post-card">
			<!-- <div>
				<a href="profile.html">
					<img src="img/user/user-3.jpg" alt="">
				</a>
			</div> -->
			<div>
				<h2 class="post-title">
					<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
				</h2>
				<?php pota_component( 'post-meta' ) ?>
			</div>
			
			<?php $image = has_post_thumbnail() ? pota_image($post->ID, '750x450', 'wp', false) : pota_placeholder('pota_750x450'); ?>

			<div class="post-thumbnail">
				<a href="<?php the_permalink() ?>">
					<img src="<?php echo $image ?>" alt="<?php the_title() ?>">
				</a>
			</div>

			<?php pota_blurb_autofill() ?>
			<div class="post-footer">
				<a class="float-right p-t-10 btn btn-secondary" href="<?php the_permalink() ?>" role="button">Read More</a> 
			</div>
		</div>
	</div>
	<?php wp_reset_postdata() ?>
<?php endforeach ?>
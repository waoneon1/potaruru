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
$posts = get_posts(array(
	'posts_per_page'	=> 4,
	'post_type' 		=> $post_type,
	'post_status'       => 'publish',
	'order' 			=> 'DESC'
));
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
				 <img src="<?php echo $image ?>" alt="<?php the_title() ?>">
			</div>

			<?php pota_blurb_autofill() ?>
			<div class="post-footer">
				<a class="btn btn-secondary" href="<?php the_permalink() ?>" role="button">Read More</a> 
				<a class="float-right p-t-10" href="#"><i class="fa fa-heart-o"></i> 21 likes</a>
			</div>
		</div>
	</div>
	<?php wp_reset_postdata() ?>
<?php endforeach ?>
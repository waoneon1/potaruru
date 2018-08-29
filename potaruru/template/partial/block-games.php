<?php
/**
 * The template Block - Games
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Potaruru
 */
$post_type = 'product_post';
$posts = get_posts(array(
	'posts_per_page'	=> 6,
	'post_type' 		=> $post_type,
	'post_status'       => 'publish',
	'order' 			=> 'DESC'
));
?>

<div class="toolbar-custom">
	<form method="post" class="float-left cold-12 col-sm-6 p-l-0 p-r-10">
		<div class="form-group input-icon-right">
			<i class="fa fa-search"></i>
			<input type="text" class="form-control search-game" placeholder="Search Game...">
		</div>
	</form>
</div>	

<div class="row col-card-wraper">
	<?php foreach ($posts as $key => $post): ?>
		<?php setup_postdata($post) ?>
		<?php $pp 	= get_field("product_page") ?>
		<?php $b 	= $pp['platform']; ?>
		<div class="col-12 col-sm-6 col-md-4 col-card">
			<div class="card card-lg">
				<div class="card-img">
					<a href="<?php the_permalink() ?>">
						<img src="<?php pota_image($pp['image'], '360x235', 'acf') ?>" class="card-img-top" alt="<?php the_title() ?>">
					</a>
					<!-- <div class="badge badge-<?php //echo $b['value'] ?>"><?php //echo $b['label'] ?></div> -->
					<div class="card-likes">
						<a href="#"><?php echo rand(10,100) ?></a>
					</div>
				</div>
				<div class="card-block">
					<h4 class="card-title">
						<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					</h4>
					<div class="card-meta">
						<span><?php echo $pp['release_date'] ?></span>
					</div>
					<p class="card-text"><?php echo $pp['blurb'] ?></p>
				</div>
			</div>
		</div>
		<?php wp_reset_postdata() ?>
	<?php endforeach ?>
</div>

<div class="text-center">
	<a class="btn btn-primary btn-shadow btn-rounded btn-effect btn-lg m-t-10" href="games.html">Show More</a>
</div>
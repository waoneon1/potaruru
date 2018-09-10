<?php
/**
* The template Block - Videos
*
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Potaruru
*/

$videos = get_field('product_video')['list'];
?>

<div class="row row-5">
	<?php foreach ($videos as $video): ?>
		<div class="col-12 col-sm-6 col-md-6">
			<div class="card card-video">
				<!-- PC -->
				<div class="card-img hidden-sm-down">
					<a href="<?php echo $video['url'] ?>" data-lightbox="">
						<img src="<?php echo pota_video_support::get_thumb_url($video['url']) ?>" alt="<?php echo $video['title'] ?>">
					</a>
					<div class="card-meta">
						<span><i class="fa fa-play-circle"></i></span>
					</div>
				</div>
				<!-- Mobile -->
				<div class="card-img hidden-md-up">
					<div class="video-play" data-src="<?php echo pota_video_support::render_video($video['url'], true) ?>">
						<div class="embed-responsive embed-responsive-16by9">
							<img class="embed-responsive-item" src="<?php echo pota_video_support::get_thumb_url($video['url']) ?>">
							<div class="video-play-icon"><i class="fa fa-play"></i></div>
						</div>
					</div>
				</div>
				<div class="card-block">
					<h4 class="card-title"><?php echo $video['title'] ?></h4>
				</div>
			</div>
		</div>
	<?php endforeach ?>
</div>

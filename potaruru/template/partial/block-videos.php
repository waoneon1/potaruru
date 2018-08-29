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
		<div class="col-12 col-sm-6 col-md-4">
			<div class="card card-video">
				<div class="card-img">
					<a href="<?php echo $video['url'] ?>" data-lightbox="">
						<img src="<?php echo pota_video_support::get_thumb_url($video['url']) ?>" alt="<?php echo $video['title'] ?>">
					</a>
					<div class="card-meta">
						<span><i class="fa fa-play-circle"></i></span>
					</div>
				</div>
				<div class="card-block">
					<h4 class="card-title"><?php echo $video['title'] ?></h4>
					<div class="card-meta">
						<span><i class="fa fa-clock-o"></i> <?php echo $video['date'] ?></span>
						<span><?php echo $video['view'] ?> views</span>
					</div>
					<p><?php echo $video['blurb'] ?></p>
				</div>
			</div>
		</div>
	<?php endforeach ?>
</div>
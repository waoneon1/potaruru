<?php
/**
* The template Block - Gallery
*
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Potaruru
*/

$product_images = get_field('product_images');
$gallerys = $product_images['gallery'];
?>

<div class="row row-3 figure-effect">
	<?php foreach ($gallerys as $gallery): ?>
		<div class="col-12 col-sm-6 col-md-4">
			<figure>
				<div class="figure-img">
					<a href="<?php pota_image($gallery, '1280x720', 'acf') ?>" data-lightbox="{&quot;gallery&quot;: &quot;uncharted&quot;}">
						<img src="<?php pota_image($gallery, '320x180', 'acf') ?>" alt="">
					</a>
					<a class="figure-likes" href="#">32</a>
				</div>
			</figure>
		</div>
	<?php endforeach ?>
</div>
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Potaruru
 */

?>

	</div><!-- #content -->
	
	<?php $middle_section = get_field('middle_section', 'option') ?>
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-5">
					<h4 class="footer-title"><?php the_field('left_section_title', 'option') ?></h4>
					<?php the_field('left_section', 'option') ?>
				</div>
				<div class="col-sm-12 col-md-3">
					<h4 class="footer-title"><?php the_field('middle_section_title', 'option') ?></h4>
					<div class="row">
						
						<?php if ( $middle_section['type'] == 'platform'): ?>
							<?php $platforms	= $middle_section['platforms'] ?>
							<?php $pl_count 	= count($middle_section['platforms']) ?>
							<?php $pl_md 		= round(($pl_count/2), 0, PHP_ROUND_HALF_UP) ?>
							<?php if ($platforms): ?>
								<div class="col">
									<ul>
										<?php foreach ($platforms as $key => $platform): ?>
											<?php if ($pl_md == $key): ?>
												</ul></div><div class="col"><ul>
											<?php endif ?>
											<li><a href="<?php echo $platform['link'] ?>"><?php echo $platform['text'] ?></a></li>
										<?php endforeach ?>
									</ul>
								</div>
							<?php endif ?>
						<?php endif ?>
						<?php  ?>
						<?php if ( $middle_section['type'] == 'text'): ?>
							<?php echo $middle_section['content']; ?>
						<?php endif ?>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<h4 class="footer-title">Subscribe</h4>

					<?php the_field('subscribe_section', 'option')  ?>

					<div class="input-group m-t-25">
						<input type="text" class="form-control" placeholder="Email">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="button">Subscribe</button>
						</span>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="footer-social">
					<?php foreach (get_field('social', 'option') as $social): ?>
						<a href="<?php echo $social['link'] ?>" target="_blank" data-toggle="tooltip" title="<?php echo $social['title'] ?>">
							<i class="fa fa-<?php echo $social['title'] ?>"></i>
						</a>
					<?php endforeach ?>
				</div>
				<?php the_field('copyright', 'option') ?>
			</div>
		</div>
	</footer> <!-- #footer -->


</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	(function($) {
		"use strict";
		$('[data-lightbox]').lightbox({});
	})(jQuery);
</script>

<!-- Product Post Type -->
<?php if (is_singular('product_post')): ?>
	<script>
		(function($) {
			"use strict";
		    // easyPieChart
		    $('.chart').easyPieChart({
		    	barColor: '#5eb404',
		    	trackColor: '#e3e3e3',
		    	easing: 'easeOutBounce',
		    	onStep: function(from, to, percent) {
		    		$(this.el).find('span').text(Math.round(percent));
		    	}
		    });
		    $('.search-game, .navbar-search .form-control').keyup(function() {
		    	var search = $(this).val().toLowerCase();
		    	$.each($('.card-title'), function() {
		    		if ($(this).text().toLowerCase().indexOf(search) === -1) {
		    			$(this).parent().parent().parent().hide();
		    		} else {
		    			$(this).parent().parent().parent().show();
		    		}
		    	});
		    });
		})(jQuery);
	</script>
<?php endif ?>

</body>
</html>

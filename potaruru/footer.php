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
			<div class="footer-bottom" style="margin-top:10px">
				<a href="<?php echo get_home_url() ?>" class="logo">
					<img src="<?php echo get_template_directory_uri() ?>/src/img/logo.png" alt="Potaruru">
				</a>
			</div>
			<div class="footer-bottom">
				<div class="footer-social">
					<?php foreach (get_field('social', 'option') as $social): ?>
						<a href="<?php echo $social['link'] ?>" target="_blank" title="<?php echo $social['title'] ?>">
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
<?php if (is_singular('product_post') || is_page_template( 'template-product-page.php' )): ?>
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

<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ba1dde5736f4214"></script>

</body>
</html>

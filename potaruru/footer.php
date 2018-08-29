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

	<footer id="footer">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-12 col-md-5">
	        <h4 class="footer-title">About Gameforest</h4>
	        <p>Gameforest is a Bootstrap Gaming theme. Build your own gaming theme with gameforest and you will love to use it. Clean and pure coded HTML, CSS files what is included in your downloaded package.</p>
	        <p>Attached more then 60+ HTML pages and customized elements. Copy and paste your favourite section or build your own so easily.</p>
	      </div>
	      <div class="col-sm-12 col-md-3">
	        <h4 class="footer-title">Platform</h4>
	        <div class="row">
	          <div class="col">
	            <ul>
	              <li><a href="#">Playstation 4</a></li>
	              <li><a href="#">Xbox One</a></li>
	              <li><a href="#">PC</a></li>
	              <li><a href="#">Steam</a></li>
	            </ul>
	          </div>
	          <div class="col">
	            <ul>
	              <li><a href="games.html">Games</a></li>
	              <li><a href="reviews.html">Reviews</a></li>
	              <li><a href="videos.html">Videos</a></li>
	              <li><a href="forums.html">Forums</a></li>
	            </ul>
	          </div>
	        </div>
	      </div>
	      <div class="col-sm-12 col-md-4">
	        <h4 class="footer-title">Subscribe</h4>
	        <p>Subscribe to our newsletter and get notification when new games are available.</p>
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
	        <a href="https://facebook.com/yakuthemes" target="_blank" data-toggle="tooltip" title="facebook"><i class="fa fa-facebook"></i></a>
	        <a href="https://twitter.com/yakuthemes" target="_blank" data-toggle="tooltip" title="twitter"><i class="fa fa-twitter"></i></a>
	        <a href="https://steamcommunity.com/id/yakuzi" target="_blank" data-toggle="tooltip" title="steam"><i class="fa fa-steam"></i></a>
	        <a href="https://www.twitch.tv/" target="_blank" data-toggle="tooltip" title="twitch"><i class="fa fa-twitch"></i></a>
	        <a href="https://www.youtube.com/user/1YAKUZI" target="_blank" data-toggle="tooltip" title="youtube"><i class="fa fa-youtube"></i></a>
	      </div>
	      <p>Copyright &copy; 2017 <a href="https://themeforest.net/item/gameforest-responsive-gaming-html-theme/5007730" target="_blank">Gameforest</a>. All rights reserved.</p>
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

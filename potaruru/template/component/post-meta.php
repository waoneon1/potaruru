<?php global $post ?>
<div class="post-meta">
	<span>
		<i class="fa fa-clock-o"></i>
        <?php echo get_the_date('j F Y') ?>
		by <a href="<?php echo get_home_url().'/author/'.get_the_author() ?>"><?php the_author() ?></a>
	</span>
	<!-- <span><a href="#comments"><i class="fa fa-comment-o"></i> <?php echo get_comments_number() ?> comments</a></span> -->
</div>

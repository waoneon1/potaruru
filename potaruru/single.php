<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Potaruru
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			echo "<section>";
				get_template_part( 'template/template-parts/content', get_post_type() );

				?>
				
			<?php echo "</section>";

		endwhile; // End of the loop.
		?>
		<section class="demo dynamicContent">
			<div id="content">
				
			</div>
			<div id="loader">
				LOADING...
			</div>
		</section>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

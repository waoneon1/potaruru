<?php
/**
 * The template Block - Blog Medium
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Potaruru
 */

$get = ($_GET['ppage'] == 'guides') ? 'guides' : 'news';
$pn = get_field('product_'.$get);
$post_type = 'post';


if ($pn['news']) {
    $product_news = new WP_Query(
        array(
            'tag__in' 		=> $pn['news'],
            'post_type'		=> $post_type,
            'post_status'	=> 'publish',
            'order' 		=> 'DESC'
        )
    ); ?>

    <?php if ($product_news->have_posts()): ?>
    	<?php foreach ($product_news->posts as $key => $post): ?>
    		<?php setup_postdata($post) ?>
    		<!-- post -->
    		<div class="post post-md">
    			<?php pota_post_thumbnail($post->ID, '320x180', $post->title, get_permalink($post->ID)) ?>
    			<div class="post-block">
    				<h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
    				<?php pota_component('post-meta') ?>
    				<?php pota_blurb_autofill() ?>
    			</div>
    		</div>
    	<?php endforeach ?>
    	<?php wp_reset_postdata() ?>
    <?php else: ?>
        <?php get_template_part( 'template/partial/alert', 'post' );  ?>
    <?php endif ?>
<?php 
} else {
    get_template_part( 'template/partial/alert', 'post' );
} ?>
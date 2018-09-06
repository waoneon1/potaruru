<?php
/**
 * The template for displaying single product
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Potaruru
 */

get_header(); 
$subnav = array(
    'news',
    'reviews',
    'images',
    'videos'
);

if (get_field('product_guides')['news']) {
    $subnav[] = 'guide';
}

$page = $_GET['ppage'];
$page = (in_array($page, $subnav)) ? $_GET['ppage'] : 'news';

$subnav_title = array(
    'news' => 'News',
    'reviews' => 'Review',
    'images' => 'Image',
    'videos' => 'Video',
    'guides' => 'Guide'
)
?>
<!-- --------------------Subtitle------------------- -->
<section class="toolbar toolbar-links" data-fixed="true">
    <div class="container">
        <h5><?php the_title() ?></h5>
        <div class="dropdown float-right hidden-md-up">
            <a class="btn btn-secondary btn-icon float-right" href="#" data-toggle="dropdown" role="button"><i class="fa fa-bars"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <?php foreach ($subnav as $nav): ?>
                    <?php $nav_val = $subnav_title[$nav] ?>
                    <a class="dropdown-item <?php echo ($page == $nav) ? 'active' : '' ?>" href="?ppage=<?php echo $nav ?>"><?php echo $nav_val ?></a>
                <?php endforeach ?>            
            </div>
        </div>
        <ul class="toolbar-nav m-r-25 hidden-sm-down">
            <?php foreach ($subnav as $nav): ?>
                <?php $nav_val = $subnav_title[$nav] ?>
                <li <?php echo ($page == $nav) ? 'class="active"' : '' ?> >
                    <a href="?ppage=<?php echo $nav ?>"><?php echo $nav_val ?></a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</section>

<!-- --------------------Content------------------- -->
<?php if ($page == 'reviews'): ?>
    <div class="product-review-page">
        <?php get_template_part( 'template/partial/widget', 'review' ); ?>
    </div>
<?php endif ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <?php switch ($page) {
                    
                    case 'reviews':
                        get_template_part( 'template/partial/block', 'review-post' );
                        break;
                                
                    case 'images':
                        get_template_part( 'template/partial/block', 'gallery' );
                        break;
                    
                    case 'videos':
                        get_template_part( 'template/partial/block', 'videos' );
                        break;
                    
                    case 'guides':
                        get_template_part( 'template/partial/block', 'blog-medium' );
                        break;
                    
                    default:
                        get_template_part( 'template/partial/block', 'blog-medium' );
                        break;
                } ?>
            </div>

            <div class="col-lg-4">
                <div class="sidebar">
                    <?php get_template_part( 'template/partial/widget', 'game' ) ?>    
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>

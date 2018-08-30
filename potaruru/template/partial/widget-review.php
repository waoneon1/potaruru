<?php
/**
 * The template Widget - Review Stat
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Potaruru
 */

$product            = get_field('product_page'); 
$prod_review        = get_field('product_reviews'); 
$background_image   = ($prod_review['background_image']) ? $prod_review['background_image'] : $product['image'];
?>

<section class="bg-image bg-image-sm" style="
        background-image: url('<?php pota_image($background_image, '1280x720', 'acf') ?>');
        background-position: <?php echo $prod_review['background_position'] ?>;
    ">
    <div class="overlay-dark"></div>
    <div class="container">
        <div class="review">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <h2 class="review-title text-center"><?php the_title() ?></h2>
                    <!-- <p><?php echo $prod_review['review_text'] ?></p> -->
                </div>
                <div class="col-12 col-sm-2" style="position: absolute; right: 0">
                    <?php $percentage = $prod_review['percentage'] ?>
                    <?php echo '<div class="chart easypiechart" data-percent="'.$percentage.'" data-scale-color="#e3e3e3"><span>'.$percentage.'</span>%</div>' ?>
                </div>
            </div>
            <div class="row m-t-20">

               <!--  <div class="col-lg-5">
                    <?php $gameplay = $prod_review['feature']['gameplay'] ?>
                    <?php $graphics = $prod_review['feature']['graphics'] ?>
                    <?php $sounds   = $prod_review['feature']['sounds'] ?>
                    <p class="m-b-10">Gameplay <span class="float-right"><?php echo $gameplay ?>%</span></p>
                    <div class="progress progress-loaded">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $gameplay ?>" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                            <span class="sr-only"><?php echo $gameplay ?>% Complete</span>
                        </div>
                    </div>
                    <p class="m-b-10">Graphics <span class="float-right"><?php echo $graphics ?>%</span></p>
                    <div class="progress progress-loaded">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $graphics ?>" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                            <span class="sr-only"><?php echo $graphics ?>% Complete</span>
                        </div>
                    </div>
                    <p class="m-b-10">Sounds <span class="float-right"><?php echo $sounds ?>%</span></p>
                    <div class="progress progress-loaded">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php echo $sounds ?>" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                            <span class="sr-only"><?php echo $sounds ?>% Complete</span>
                        </div>
                    </div>
                </div> -->

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12 col-sm-2"></div>
                        <div class="col-12 col-sm-4">
                            <div class="review-good">
                                <h5>Pros:</h5>
                                <?php foreach ($prod_review['positive']  as $positive): ?>
                                    <p><?php echo $positive['+'] ?></p>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="review-bad">
                                <h5>Cons:</h5>
                                <?php foreach ($prod_review['negative']  as $negative): ?>
                                    <p><?php echo $negative['-'] ?></p>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <div class="col-12 col-sm-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
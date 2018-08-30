<?php
/**
 * The template Widget - Game
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Potaruru
 */

$product = get_field('product_page'); 
?>

<div class="widget widget-game">
    <div class="widget-block" style="background-image: url('<?php pota_image($product['image'], '750x450', 'acf') ?>')">
        <div class="overlay"></div>
        <div class="widget-item">
            <h4><?php the_title() ?></h4>
            <span class="meta">Released Date: <?php echo $product['release_date'] ?></span>

            <?php if ($product['platform']): ?>
                <h5>Platforms</h5>
                <?php foreach ($product['platform'] as $platform): ?>
                    <span class="badge badge-<?php echo $platform['value'] ?>"><?php echo $platform['label'] ?></span>
                <?php endforeach ?>
            <?php endif ?>
            
            <?php if ($product['developer']): ?>
                <h5>Developer</h5>
                <ul>
                   <?php foreach ($product['developer'] as $dev): ?>
                       <li><a href="<?php echo $dev['link'] ?>" target="_blank"><?php echo $dev['name'] ?></a></li>
                   <?php endforeach ?>
                </ul>
            <?php endif ?>

            <?php if ($product['publisher']): ?>
                <h5>Publisherx</h5>
                <ul>
                    <?php foreach ($product['publisher'] as $publisher): ?>
                         <li><a href="<?php echo $publisher['link'] ?>" target="_blank"><?php echo $publisher['name'] ?></a></li>
                    <?php endforeach ?>
                </ul>
            <?php endif ?>

            <?php echo $product['description'] ?>

            <?php if ($product['download_link']): ?>
                <a href="<?php echo $product['download_link'] ?>" target="_blank" class="btn btn-outline-default btn-block">Download <i class="fa fa-arrow-circle-down"></i></a>
            <?php endif ?>
            
            <?php if ($product['buy_link']): ?>
                <a href="<?php echo $product['buy_link'] ?>" target="_blank" class="btn btn-outline-default btn-block">Buy <i class="fa fa-cart-arrow-down"></i></a>
            <?php endif ?>
            
        </div>
    </div>
</div>
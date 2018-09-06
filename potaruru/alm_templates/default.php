<div class="col-sm-6 float-left col-card">
    <div class="post post-card">
        <!-- <div>
            <a href="profile.html">
                <img src="img/user/user-3.jpg" alt="">
            </a>
        </div> -->
        <div>
            <h2 class="post-title">
                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
            </h2>
            <?php pota_component( 'post-meta' ) ?>
        </div>
        
        <?php if (has_post_thumbnail()): ?> 
            <div class="post-thumbnail">
                <a href="<?php the_permalink() ?>">
                    <img src="<?php pota_image($post->ID, '750x450') ?>" alt="<?php the_title() ?>">
                </a>
            </div>
        <?php else: ?>
            <div class="post-thumbnail">
                <a href="<?php the_permalink() ?>">
                    <img src="<?php echo pota_placeholder('pota_750x450') ?>" alt="<?php the_title() ?>">
                </a>
            </div>
        <?php endif ?>

        <?php pota_blurb_autofill() ?>
        <div class="post-footer">
            <a class="btn btn-secondary float-right p-t-10" href="<?php the_permalink() ?>" role="button">Read More</a> 
        </div>
    </div>
</div>
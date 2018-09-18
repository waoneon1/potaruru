<?php $tags = get_the_tags($post->ID) ?>
<?php if ($tags): ?>
    <div class="post-tags">
        <?php foreach ($tags as $tag): ?>
            <a href="<?php echo get_tag_link($tag->term_id) ?>">
            	<?php echo $tag->name ?>
            </a>
        <?php endforeach ?>
    </div>
<?php endif ?>
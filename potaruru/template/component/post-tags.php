<?php $tags = get_the_tags($post->ID) ?>
<div class="post-tags">
	<?php foreach ($tags as $tag): ?>
		<a href="#"><?php echo $tag->name ?></a>
	<?php endforeach ?>
</div>
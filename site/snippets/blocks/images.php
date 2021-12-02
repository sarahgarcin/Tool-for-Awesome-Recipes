<section class="images">
	<?php $images = $date->images()->toFiles();
	foreach($images as $image): ?>
		<figure>
			<img src="<?= $image->url() ?>">
		</figure>
	<?php endforeach ?>
</section>
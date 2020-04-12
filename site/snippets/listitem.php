<article class="list-item">
	<ul class="row image-gallery">
		<?php if($child->images()):?>
			<?php foreach($child->images() as $image):?>
				<li class="col-xs-4 col-md-12">
					<?= $image->crop(300, 200, 'center');?>
				</li>
			<?php endforeach?>
		<?php endif;?>
	</ul>
	<span><?= $child->datefield()->toDate('Y-m-d') ?></span>
	<h1><?= $child->title()->html()?></h1>
	<?= $child->text()->kt()?>
	<?php $related = $child->related()->toPages();
		if ($related->count() > 0):?>
		<div class="related">
		  <h2>En savoir plus&thinsp;:</h2>
		  <ul>
		    <?php foreach($related as $article): ?>
		    <li>
		      <a href="<?= $article->url() ?>">
		        <?= $article->title() ?>
		      </a>
		    </li>
		    <?php endforeach ?>
		  </ul>
		</div>
		<?php endif ?>
</article>
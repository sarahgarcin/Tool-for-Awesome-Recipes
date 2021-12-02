<section class="ingredients">
	<?php if($data->title()):?>
		<h2><?= $data->title() ?></h2>
	<?php endif; ?>
	<ul>
	<?php foreach($data->ingredients()->toStructure() as $ingredient):?>
		<li>
			<span class="quantite"><?= $ingredient->quantite()?></span>
			<span><?= $ingredient->unite()?></span>
			<span><?= $ingredient->ingredient()?></span>
		</li>
	<?php endforeach?>
	</ul>
</section>
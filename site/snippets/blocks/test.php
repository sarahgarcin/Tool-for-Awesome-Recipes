<section class="ingredients">
	<?php if($data->title()):?>
		<h2><?= $data->title() ?></h2>
	<?php endif; ?>
	<ul>
	<?php foreach($data->ingredients()->toStructure() as $ingredient):?>
		<?php $ing = $ingredient->ingredient();?>
		<?php $id = searchForIng(strval($ing), $ingredientsArr);?>
		<?php //print($id);?>
		<li>
			<span class="quantite"><?= $ingredient->quantite()?></span>
			<?php if($ingredient->quantite()->isNotEmpty()):?>
				<span class="unite"><?= $ingredientsArr[$id]['unite']?></span>
			<?php endif?>
			<span class="ingredient"><?= $ingredient->ingredient()?></span>
			<?php //$ingPrice = intval($ingredientsArr[$id]['prix']) * intval($ingredient->quantite());?>
			<?php 
				$price = floatval($ingredientsArr[$id]['prix']);
				$quant = $ingredient->quantite()->float();
			?>
			<span class="ingPrice"><?= $price*$quant ?></span>
			<span class="allergene"><?= $ingredientsArr[$id]['allergene']?></span>
		</li>
	<?php endforeach?>
	</ul>
</section>


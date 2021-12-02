<?php snippet('header') ?>
<?php snippet('menu') ?>

<?php 
  // $ingredientsArr = $ingredients->toArray();
  print_r($ingredientsArr); 
?>


<main class="article recette">


<!-- 	<div class="arrow-back">
		<span>
			<a href="<?= $page->parent()->url()?>" title="<?= $page->parent()->title()?>">
				< <?= $page->parent()->title()?>
			</a>
				
		</span>
	</div> -->
  <article>
    <div class="meta-recipe row around-xs">
      <?php if($page->prepa()->isNotEmpty()):?>
        <div class="col-xs-6">
          <h2>Temps de préparation</h2>
          <p><?= $page->prepa() ?></p>
        </div>
      <?php endif?>
      <?php if($page->cuisson()->isNotEmpty()):?>
        <div class="col-xs-6">
          <h2>Temps de cuisson</h2>
          <p><?= $page->cuisson() ?></p>
        </div>
      <?php endif?>
      <div class="col-xs-12 tags">
        <?php foreach ($page->tags()->split() as $tag): ?>
          <a href="<?= url('', ['params' => ['tag' => $tag]]) ?>">
            <span class="tag"><?= $tag ?></span>
          </a>
        <?php endforeach ?>
      </div>
    </div>
  	<h1><?= $page->title()?></h1>
    <div class="box portion">
       <span class="screen">Nombre de portion:</span>
       <input id="portion" type="number" name="portion" value="<?= $page->portion() ?>"> 
       <span class="print">personnes</span>
       <div class="changeportion screen">ok</div>
        <?php if($page->price()->isNotEmpty()):?>
          <div>Prix client: <span id="prix"><?= $page->price() ?></span>€</div>
        <?php endif;?>
          <div>
            <span id="price"></span>
          </div>
    </div>
		<div class="article-cover">
      <figure>
        <?php if ($cover = $page->cover()->toFile()): ?>
          <?= $cover->crop(600, 300) ?>
        <?php endif ?>
      </figure>
    </div>
    <div class="article-text col-xs-12 col-md-12">
    	<?php
    		// builder (every block snippet is in /site/snippets/blocks/)
        

				foreach($page->builder()->toBuilderBlocks() as $block):
				  snippet('blocks/' . $block->_key(), array('data' => $block));
				endforeach;
			?>
    </div>
    
  </article>
</main>

<?php snippet('footer') ?>

  <?php 
  function searchForIng($ing, $array) {
     foreach ($array as $key => $val) {
         if ($val['ingredient'] === $ing) {
             return $key;
         }
     }
     return null;
  }
?>



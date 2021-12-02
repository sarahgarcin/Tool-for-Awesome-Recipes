<?php snippet('header') ?>
<?php snippet('menu') ?>

<?php $allergenes = [];?>

<main class="article menu">
  <?php print($ingredientsArr[0]['allergene']);?>
  <article>
    <div class="entrees">
      <h1>Entrées</h1>
      <?php foreach ($page->entrees()->split() as $entrees): ?>
        <div class="entree">
          <?php $entree = $site->find($entrees)?>
          <div class="entree-inner">
            <p>
              <span class="title"><?= $entree->title()?></span>
              --------
              <span class="prixClient"><?= $entree->price()?>€</span>
              <br>
            <?php 
              foreach($entree->builder()->toBuilderBlocks() as $block):
                foreach($block->ingredients()->toStructure() as $ingredient):?>
                  <?php $ing = $ingredient->ingredient();?>
                  <?php $id = searchForIng(strval($ing), $ingredientsArr);?>
                  <?php if($ingredientsArr[$id]['allergene'] != ''):
                    array_push($allergenes, $ingredientsArr[$id]['allergene']);
                  endif;?>
                <?php endforeach?>
              <?php endforeach;?>
            <?php $allergenes = array_unique($allergenes);?>
            <?php foreach ($allergenes as $allergene):?>
              <span><?= $allergene?> / </span>
            <?php endforeach;?>
            <!-- réinitialiser les allergènes pour la prochaine entrée -->
            <?php $allergenes = [];?>
            </p>
          </div>
          
        </div>
      <?php endforeach;?>
      
    </div>
    <div class="plats">
      
    </div>
    <div class="dessert">
      
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



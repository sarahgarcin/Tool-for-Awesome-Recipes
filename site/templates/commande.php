<?php snippet('header') ?>
<?php snippet('menu') ?>

<?php $liste = [];
$id = 0;
$prix = 0;
?>

<main class="article commande">
  <article>
    <?php 
      foreach ($page->commandes()->split() as $commandes): 
        $commande = $site->find($commandes);
        foreach($commande->builder()->toBuilderBlocks() as $block):
          foreach($block->ingredients()->toStructure() as $ingredient):
            $ing = $ingredient->ingredient();
            $id = searchForIng(strval($ing), $ingredientsArr);
            if($ingredient->quantite()->isNotEmpty() && $ingredient->ingredient() != 'Eau'):
              $liste[$id]["ingredient"] = $ingredientsArr[$id]['ingredient'];
              $liste[$id]["unite"] = $ingredientsArr[$id]['unite'];
              $liste[$id]["quantite"] = $ingredient->quantite()->float();
              $liste[$id]["prix"] = round($ingredientsArr[$id]['prix']*$liste[$id]["quantite"], 2);
              $id ++;
            endif; ?>
          <?php endforeach?>
        <?php endforeach;?>
      <?php endforeach;?>
      <?php 
      // supprimer les doublons
        $liste = array_unique($liste, SORT_REGULAR);
      // classer par ordre alphabétique
        array_multisort($liste);
      ?>
      <table>
        <tr>
          <th>Quantité</th>
          <th>Unité</th>
          <th>Ingédient</th>
          <th>Prix</th>
        </tr>
        <?php foreach ($liste as $li):?>
          <?php 
            $prix += $li['prix'];
          ?>
          <tr>
            <td class="quantite"><?= $li['quantite']?></td>
            <td class="unite"><?= $li['unite']?></td>
            <td class="ingredient"><?= $li['ingredient']?></td>
            <td class="prix"><?= $li['prix']?></td>
          </tr>
        <?php endforeach;?>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td>TOTAL : <?= $prix ?>€</td>
        </tr>
      </table>

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



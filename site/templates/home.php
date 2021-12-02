<?php snippet('header') ?>
<?php snippet('menu') ?>

<main>
  <section class="article-wrapper row">
    <?php foreach($recettes as $recette): ?>

      <article class="col-xs-12 col-md-4 box">
        <div class="article-meta">
          <?php foreach ($recette->tags()->split() as $tag): ?>
            <a href="<?= url('', ['params' => ['tag' => $tag]]) ?>">
              <span class="tag"><?= $tag ?></span>
            </a>
          <?php endforeach ?>
        </div>
        <a href="<?= $recette->url() ?>">
          <h2><?= $recette->title()->html() ?></h2>
          <div class="article-cover">
            <figure>
              <?php if ($cover = $recette->cover()->toFile()): ?>
                <?= $cover->crop(600, 400) ?>
              <?php endif ?>
            </figure>
          </div>
          
        </a>
      </article>

    <?php endforeach ?>
  </section>

</main>



<?php snippet('footer') ?>

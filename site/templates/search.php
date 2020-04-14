<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main class="row">
		<div class="sidebar-left col-xs-12 col-md-3">
			<?php snippet('breadcrumb') ?>
			<?= html($query) ?>
		</div>
		<div class="content col-xs-12 col-md-6">
			  <?php foreach ($results as $result): ?>
			  <article class="list-item">
			    <a href="<?= $result->url() ?>">
			    	<?php foreach($result->parents()->flip() as $parent):?>
			    		<?= $parent->title()?>
			    	<?php endforeach?>
			      <h1><?= $result->title() ?></h1>
			    </a>
			  </article>
			  <?php endforeach ?>
		</div>
		
	</main>

<?php snippet('footer') ?>

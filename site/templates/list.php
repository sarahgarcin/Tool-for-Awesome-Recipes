<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main class="row">
		<div class="sidebar-left col-xs-12 col-md-3">
			<div class="breadcrumb">
				<a href="<?= $page->parent()->url()?>" title="<?= $page->parent()->title()?>"><?= $page->parent()->title()?></a>
				 > <?= $page->title()?>
			</div>
		</div>
		<div class="content col-xs-12 col-md-6">
			<?php foreach($page->children()->listed() as $child):?>
				<article>
					<h1><?= $child->title()->html()?></h1>
					<?= $child->text()->kt()?>
				</article>
			<?php endforeach;?>
		</div>
		<div class="sidebar-right col-xs-12 col-md-3">
			<ul class="row">
			<?php if($page->notes()):?>
				<?php foreach($page->notes()->toStructure() as $note):?>
					<li class="note-wrapper col-xs-12">
						<?= $note->note()->kt()?>
					</li>
				<?php endforeach?>
			<?php endif;?>
			</ul>
		</div>
		
	</main>

<?php snippet('footer') ?>

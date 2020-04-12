<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main class="row">
		<div class="sidebar-left col-xs-12 col-md-3">
			<?php snippet("breadcrumb"); ?>
		</div>
		<div class="content col-xs-12 col-md-6">
			<?php 

			$events = $page->children()->listed()->filter(function ($child) {
			  return $child->datefield()->toDate() > time() - (1 * 24 * 60 * 60);
			});
			$events = $events->sortBy(function ($page) {
			  return $page->datefield()->toDate();
			}, 'asc');
			?>
			<?php foreach($events as $child):?>
				<?php snippet('listitem', ['child' => $child]);?>
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

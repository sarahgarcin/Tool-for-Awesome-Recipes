<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main class="row">
		<div class="sidebar-left col-xs-12 col-md-3">
			<?php snippet("breadcrumb"); ?>
		</div>
		<div class="content archives col-xs-12 col-md-6">
			<?php 

			$callback = function($p) {
			  return $p->datefield()->toDate('Y');
			};

			$events = $site->find('agenda')->children()->listed()->filter(function ($child) {
			  return $child->datefield()->toDate() < time() - (1 * 24 * 60 * 60);
			});
			$events = $events->sortBy(function ($page) {
			  return $page->datefield()->toDate();
			}, 'desc');

			// group items using $callback
			$groupedItems = $events->group($callback);

			// output items by year
			foreach($groupedItems as $year => $itemsPerYear): ?>
			    <h2 class="year">
			    	<?= $year ?>		
			    </h2>
			    <ul>
			      <?php foreach($itemsPerYear as $item) : ?>
			      	<?php snippet('listitem', ['child' => $item]);?>
			      <?php endforeach; ?>
			    </ul>
			<?php endforeach ?>
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

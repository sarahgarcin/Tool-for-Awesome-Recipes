<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
		<div class="home-grid-wrapper">
			<div class="grid-item actu span-5">
				<?php if($actu = $page->actu1()->toPage()): ?>
					<a href="<?=$actu->url()?>" title="<?=$actu->title()?>">
						<div class="cover-wrapper" style="background: url(<?=$actu->images()->first()->url()?>) 0 no-repeat; background-size: cover"></div>
					  <h2><?= $actu->title() ?></h2>
					  <div class="date">
					  	<?= $actu->datefield()->toDate('d/m/Y') ?>
					  </div>
				  </a>
				<?php endif ?>
			</div>
			<div class="grid-item presentation span-6 grid-item--width50">
				<?php $presentation = $site->find('le-snap-cgt/presentation')?>
				<a href="<?=$presentation->url()?>" title="<?=$presentation->title()?>">
					<?= $presentation->text()->chopper(50)?>
				</a>
			</div>
			<div class="grid-item agenda span-5">
				<?php 
					$events = $site->find('agenda')->children()->listed()->filter(function ($child) {
					  return $child->datefield()->toDate() > time() - (1 * 24 * 60 * 60);
					});
					$events = $events->sortBy(function ($page) {
					  return $page->datefield()->toDate();
					}, 'asc');
				?>
				<ul>
					<?php foreach($events as $child):?>
						<a href="<?=$child->url()?>" title="<?=$child->titmle()?>">
							<li class="row">
								<div class="date col-xs-4">
									<?=$child->datefield()->toDate('d/m')?>
								</div>
								<div class="event-title col-xs-8">
									<?=$child->title()->html()?>
								</div>
							</li>
						</a>
					<?php endforeach;?>
				</ul>

			</div>
			<div class="grid-item quote span-5">
				<?= $page->quote()->kt()?>
			</div>
			<div class="grid-item info span-2 grid-item--width10">
				<?= $page->info()->kt()?>
			</div>
			<div class="grid-item contact span-2 grid-item--width10">
				<?php if($selected = $page->lien1()->toPage()): ?>
					<a href="<?=$selected->url()?>" title="<?=$selected->title()?>">
						<?=$selected->title()?>
					</a>
				<?php endif;?>
			</div>
			<div class="grid-item guide span-2 grid-item--width10">
				<?php if($selected2 = $page->lien2()->toPage()): ?>
					<a href="<?=$selected2->url()?>" title="<?=$selected2->title()?>">
						<?=$selected2->title()?>
					</a>
				<?php endif;?>
			</div>
			<div class="grid-item publications span-5">
				<?php $publications = $site->find('ressources/publications');?>
				<a href="<?=$publications->url()?>" title="<?=$publications->title()?>">
					<h1><?=$publications->title()?></h1>
					<p>journaux — fiches techniques — tracts — bulletin d’adhésion  — éditions — expositions</p>
				</a>
			</div>
			<div class="grid-item newsletter span-2 grid-item--width15">
				<?php $newsletter = $site->find('newsletter');?>
				<p>nouvelles, infos, images: inscription à la <a href="<?= $newsletter->url()?>" title="<?= $newsletter->title()?>">newsletter</a> du SNAPcgt</p>
			</div>
			<div class="grid-item image span-3 grid-item--width20">
				<?php if($cover = $page->cover()->toFile()): ?>
					<?= $cover->crop(200, 241, 'center');?>
				<?php endif;?>
			</div>
			<div class="grid-item actu-small span-4 grid-item--width20">
				<?php if($actu = $page->actu2()->toPage()): ?>
					<a href="<?=$actu->url()?>" title="<?=$actu->title()?>">
						<div class="date">
					  	<?= $actu->datefield()->toDate('d/m/Y') ?>
					  </div>
					  <h2><?= $actu->title() ?></h2>
					  <?= $actu->text()->chopper(50)?>
				  </a>
				<?php endif ?>
			</div>
			<div class="grid-item liens span-2 grid-item--width10">
				<?php if($selected3 = $page->lien3()->toPage()): ?>
					<a href="<?=$selected3->url()?>" title="<?=$selected3->title()?>">
						<?=$selected3->title()?>
					</a>
				<?php endif;?>
			</div>

			<div class="grid-item adhesion span-2 grid-item--width15">
				<?php $adhesion = $site->find('adhesion');?>
				<a href="<?=$adhesion->url()?>" title="<?=$adhesion->title()?>">
					<h1><?=$adhesion->title()?></h1>
				</a>
			</div>	
			<div class="grid-item appel span-7 grid-item--width30">
				14. Appel 
			</div>			
		</div>
	</main>

<?php snippet('footer') ?>

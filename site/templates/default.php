<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main class="row">
		<div class="sidebar-left col-xs-12 col-md-3">
			<ul class="row">
				<?php if($page->images()):?>
					<?php foreach($page->images() as $image):?>
						<li class="col-xs-4 col-md-12">
							<?= $image->crop(300, 200, 'center');?>
						</li>
					<?php endforeach?>
				<?php endif;?>
			</ul>
		</div>
		<div class="content col-xs-12 col-md-6">
			<?= $page->text()->kt()?>
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

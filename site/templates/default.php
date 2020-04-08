<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main class="row">
		<div class="sidebar-left col-xs-12 col-md-3">
			<ul class="row">
				<?php if($page->images()):?>
					<?php foreach($page->images() as $image):?>
						<li class="col-xs-4 col-md-12">
							<?= $image->thumb([
						      'width'   => 300,
						      'height'  => 200,
						      'quality' => 80
						    ])->html();?>
						</li>
					<?php endforeach?>
				<?php endif;?>
			</ul>
		</div>
		<div class="content col-xs-12 col-md-6">
			<?= $page->text()->kt()?>
		</div>
		<div class="sidebar-right col-xs-12 col-md-3">
			<?php if($page->notes()):?>
				<?php foreach($page->notes()->toStructure() as $note):?>
					<div class="note-wrapper">
						<?= $note->note()->kt()?>
					</div>
				<?php endforeach?>
			<?php endif;?>
		</div>
		
	</main>

<?php snippet('footer') ?>

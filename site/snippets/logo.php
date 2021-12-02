<!-- MOBILE LOGO -->
<div class="mobile-menu show-for-small-only">
	<div class="mobile-menu_logo">
		<a href="<?= $site->url()?>" title="<?= $site->title()?>">
			<?php if($image = $site->logo()->toFile()): ?>
			<img src="<?= $image->url()?>" alt="<?= $image->alt()?>">
		<?php endif;?>
		</a>
	</div>
	<div class="mobile-menu_btn">
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>

<!-- DESKTOP LOGO -->
<div class="desktop-menu hide-for-small-only col-md-2">
	<div class="desktop-menu_logo">
		<a href="<?= $site->url()?>" title="<?= $site->title()?>">
			<?php if($image = $site->logo()->toFile()): ?>
				<img src="<?= $image->url()?>" alt="<?= $image->alt()?>">
			<?php endif;?>
		</a>
	</div>
</div>
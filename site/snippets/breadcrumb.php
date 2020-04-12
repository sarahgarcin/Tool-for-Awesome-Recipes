<div class="breadcrumb">
	<ol>
	<?php foreach($site->breadcrumb() as $crumb): ?>
		<?php if($crumb->uid() != 'home'):?>
			<li>
				<a href="<?= $crumb->url() ?>" <?= e($crumb->isActive(), 'class="active"') ?>>
		      <?= html($crumb->title()) ?>
		    </a>
	    </li>
	  <?php endif; ?>
	<?php endforeach ?>
	</ol>
</div>
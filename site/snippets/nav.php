<div class="nav col-md-8 row">
	<nav class="main-nav col-md-9">
		<ul class="main-nav_first-level">
			<?php foreach($pages->listed() as $p): ?>
				<li class="<?= r($p->isOpen(), 'active') ?>">
	    		<?php if($p->hasChildren()):?>
	        	<?= $p->title()->html() ?>
	        	<ul class="main-nav_submenu">
							<?php foreach($p->children()->listed() as $child): ?>
						  	<li>
						    	<a class="<?= r($child->isOpen(), 'active') ?>" href="<?= $child->url() ?>">
						      	<?= $child->title()->html() ?>
						    	</a>
						  	</li>
						  <?php endforeach ?>
						</ul>
	        <?php else: ?>
	        	<a href="<?= $p->url()?>" title="<?= $p->title()?>">
	        		<?= $p->title()->html() ?>
	        	</a>
	        <?php endif;?>
	      </li>
			<?php endforeach; ?>
		</ul>

	</nav>
</div>
<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
		<div class="home-grid-wrapper">
			<div class="grid-item actu span-5">
				1.actu
			</div>
			<div class="grid-item presentation span-6">
				2.presentation
				<?php $presentation = $pages->find('presentation')?>
			</div>
			<div class="grid-item agenda span-5">
				3.agenda
			</div>
			<div class="grid-item quote span-5">
				4.citation
			</div>
			<div class="grid-item info span-2">
				5.info
			</div>
			<div class="grid-item contact span-2">
				6.contact
			</div>
			<div class="grid-item guide span-2">
				7.guide
			</div>
			<div class="grid-item newsletter span-2">
				8.newsletter
			</div>
			<div class="grid-item image span-3">
				9.image cover
			</div>
			<div class="grid-item actu-small span-4">
				10. Actu small
			</div>
			<div class="grid-item liens span-2">
				11. liens
			</div>
			<div class="grid-item publications span-5">
				12.publications
			</div>
			<div class="grid-item adhesion span-2">
				13.adhesion
			</div>	
			<div class="grid-item appel span-7">
				14. Appel 
			</div>			
		</div>
	</main>

<?php snippet('footer') ?>

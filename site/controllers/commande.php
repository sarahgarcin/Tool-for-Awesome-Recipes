<?php

return function($page, $site) {

	$ingredients = $site->children()->findBy('uid', 'liste-des-ingredients')->ingredients()->toStructure();
	$ingredientsArr = $ingredients->toArray();

  return compact('ingredients', 'ingredientsArr');

};
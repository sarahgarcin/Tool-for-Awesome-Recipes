<?php

return function($page) {

  // fetch the basic set of pages
  $recettes = $page->children()->listed()->flip();

  // fetch all tags
  $tags = $recettes->pluck('tags', ',', true);

  // add the tag filter
  if($tag = param('tag')) {
    $recettes = $recettes->filterBy('tags', $tag, ',');
  }

  return compact('recettes', 'tags', 'tag');

};
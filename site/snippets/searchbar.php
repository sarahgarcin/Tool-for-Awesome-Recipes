
<?php 
$query   = get('q');
?>


<form action= <?= ($p = page('search')) ? $p->url() : '' ?> class="searchbar col-md-3">
  <input type="search" name="q" value="<?= html($query) ?>" placeholder="Recherche">
  <input type="submit" value="Ok">
</form>
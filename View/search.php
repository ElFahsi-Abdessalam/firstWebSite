<?php ob_start(); ?>
<h1 id="recherche"> Page de recherche</h1>

<form class="d-flex" id="ajaxSearch">
    <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>
<div id="gameSearch"></div>

<?php $content = ob_get_clean(); ?>
<?php require "template.php"; ?>

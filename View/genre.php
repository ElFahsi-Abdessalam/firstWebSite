<?php ob_start(); ?>

<?php foreach ($genre as $jeu): ?>
    <div class="container">
        <a href="<?= HOME ?>/genreDetail/<?= $jeu['GENRE_ID'] ?>"><h1><?php echo($jeu["GENRE_NAME"]) ?></h1></a>
    </div>
<?php endforeach; ?>
<?php $content = ob_get_clean(); ?>
<?php require "template.php"; ?>

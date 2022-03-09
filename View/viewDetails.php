<?php ob_start(); ?>

<?php foreach ($detail as $jeu): ?>
    <div class="container">
        <h1><?php echo($jeu["GAME_NAME"]) ?></h1>
        <img class="detailsImg" src="<?= $jeu['GAME_COVER_URL'] ?>">
        <div id="story">
            <h1>STORY:</h1>
            <p><?= $jeu['GAME_SUMMARY'] ?></p>
        </div>
        <div id="note">
            <a>Note :<?php echo round($jeu["GAME_AGGREGATED_RATING"], 2) ?></a>
        </div>
        <div id="lieen">
            <h2>Lien utiles:</h2>
            <?php foreach ($urls as $wenSite): ?>
                <div>
                    <a href="<?= $wenSite['WEBSITE_URL'] ?>"> <?= $wenSite['WEBSITE_CAT'] ?></a>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endforeach; ?>

    <div id="carrous">
        <h3 id="imageJeux">Image du jeux</h3>
        <div id="carousels" class="carousel slide w-50 carros-img" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousels" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousels" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousels" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <?php foreach ($screenshot as $k => $jeu): ?>
                    <?php $class = ($k == 0) ? " active" : ""; ?>
                    <div class="carousel-item <?= $class ?>">
                        <img src="<?= $jeu['SCREENSHOT_URL'] ?>" class="d-block w-100 tales">
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousels"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousels"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container">
        <?php foreach ($getGenre as $genre): ?>
            <a href="<?= HOME ?>genreDetail/<?= $genre['GENRE_ID'] ?>"><p><?= $genre['GENRE_NAME'] ?></p></a>
        <?php endforeach; ?>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require "template.php"; ?>
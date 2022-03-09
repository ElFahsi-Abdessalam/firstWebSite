<?php ob_start(); ?>

    <div id="carousels" class="carousel slide carrousel-img" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousels" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousels" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousels" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <?php foreach ($art as $k=> $jeu): ?>
                <?php $class=($k==0)?" active":""; ?>
                <div class="carousel-item <?= $class?>" >
                    <img src="<?=$jeu['ARTWORK_URL']?>" class="d-block w-100 taille" alt="">
                </div>
            <?php endforeach;?>
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
    <section id="containers">
        <div class="card">
            <div class="card-body">
                <img class=”card-img-top” id="img1" class="img-fluid" src="Content/image/PS5_logo.png" alt="job">
                <div class="card-body">
                    <h5 class="card-title">Jeux PS5</h5>
                    <p class="card-text">En cours de dev</p>
                    <button onclick="window.open('https://store.playstation.com/fr-fr/latest', '_blank');" type="button"
                            class="btn btn-info">Cliquez-ici
                    </button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <img class=”card-img-top” id="img2" src="Content/image/199-1991748_steam-logo-png-transparent-pngazd.png"
                     alt="job">
                <div class="card-body">
                    <h5 class="card-title">Steam</h5>
                    <p class="card-text">Site de steam</p>
                    <button onclick="window.open('https://store.steampowered.com/?l=french', '_blank');" type="button"
                            class="btn btn-info">Cliquez-ici
                    </button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <img class=”card-img-top” id="img3" src="Content/image/logo-xbox-series-x.png" alt="job">
                <div class="card-body">
                    <h5 class="card-title">Xbox</h5>
                    <p class="card-text">Site Xbox</p>
                    <button onclick="window.open('https://www.xbox.com/fr-BE/microsoft-store', '_blank');" type="button"
                            class="btn btn-info">Cliquez-ici
                    </button>
                </div>
            </div>
        </div>
    </section>
    <div id="video">
        <iframe width="780" height="455" src="https://www.youtube.com/embed/5xy4n73WOMM" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<?php $content = ob_get_clean(); ?>
<?php require "template.php"; ?>
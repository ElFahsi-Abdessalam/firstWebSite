<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="El Fahsi Abdessalam">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
          integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--CSS-->
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="Css/navBar.css">-->
    <link rel="stylesheet" type="text/css" media="screen" href="<?= HOME ?>Content/Css/style.css">

    <title>Gaming House</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= HOME ?>">Gaming House</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link navBarImg" href="<?= HOME ?>games">Game</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Social Media
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="https://www.youtube.com/" target="_blank">Youtube</a></li>
                        <li><a class="dropdown-item" href="https://www.instagram.com/" target="_blank">Instagram</a>
                        </li>
                        <li><a class="dropdown-item" href="https://www.facebook.com/" target="_blank">Facebook</a></li>
                        <li><a class="dropdown-item" href="https://twitter.com/" target="_blank">Twitter</a></li>
                        <li><a class="dropdown-item" href="https://www.snapchat.com/l/fr-fr/"
                               target="_blank">Snapchat</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= HOME ?>search">Search</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= HOME ?>genre">Genre</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
<main>

    <body id="contenu">
    <?= $content ?>
    </body> <!-- #contenu -->

</main>
<footer class="bg-light text-center text-lg-start">

    <div class="container p-4 col-lg-6 col-md-12 mb-4 mb-md-0">

        <div class="row">

            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Footer Content</h5>

                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                    molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                    voluptatem veniam, est atque cumque eum delectus sint!
                </p>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Usefull link</h5>

                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="contact.html" class="text-dark">Contact</a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com" class="text-dark">Youtube</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com" class="text-dark">Instagram</a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com" class="text-dark">twitter</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-0"> What's new news</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="https://www.clubic.com/mag/jeux-video/actualite-365083-doom-eternal-le-second-et-ultime-dlc-tease-par-bethesda.html"
                           class="text-dark">Doom</a>
                    </li>
                    <li>
                        <a href="https://www.rockstargames.com/fr/games/V" class="text-dark">GTA</a>
                    </li>
                    <li>
                        <a href="https://www.rocketleague.com/fr/" class="text-dark">Rocket League</a>
                    </li>
                    <li>
                        <a href="https://play.euw.leagueoflegends.com/fr_FR" class="text-dark">League of Legend</a>
                    </li>
                </ul>
            </div>

        </div>

    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">
            El Fahsi Abdessalam 2021-2021 WEB</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
            crossorigin="anonymous"></script>
    <script src="<?= HOME ?>Content/search.js"></script>
    <script src="<?= HOME ?>Content/slider.js"></script>

</footer>
</div> <!-- #global -->
</body>
</html>
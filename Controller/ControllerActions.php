<?php
require ROOT . "/Model/Post.php";
require_once ROOT . "/Model/Genre.php";

function start()
{
    $post = new Post();
    $hello = $post->getAllPosts();
    require ROOT . "/View/viewGame.php";
}

function viewDetails()
{
    $post = new Post();
    $getId = (!empty($_GET['id'])) ? $_GET['id'] : '';
    $detail = $post->getDetails($_GET['id']);
    $urls = $post->url($getId);
    $search = $post->search($getId);
    $screenshot = $post->screenA($getId);
    $similar = $post->similarµ_game($getId);
    $getGenre = $post->getGenre($getId);
    require ROOT . "/View/viewDetails.php";
}


function genre()
{
    $post = new Genre();
    $getId = (!empty($_GET['id'])) ? $_GET['id'] : '';
    $genre = $post->genres();
    require ROOT . "/View/genre.php";
}

function genreDetail()
{

    $post = new Genre();
    $getId = $_GET['id'];
    $genre = $post->getGenreGames($getId);
    $genreID = $post->genreID($getId);
    $genreID = $genreID[0];
    require ROOT . "/View/genrelist.php";
}

function screen()
{
    $post = new Post();
    $getId = (!empty($_GET['id'])) ? $_GET['id'] : '';
    $screenshot = $post->screenA($getId);

    require ROOT . "/View/viewDetails.php";
}


function search()
{
    $post = new Post();
    $getId = (!empty($_GET['id'])) ? $_GET['id'] : '';
    $detail = $post->search($getId);
    require ROOT . "/View/search.php";
}

function gameAjax()
{
    $post = new Post();
    $getId = (!empty($_GET['s'])) ? $_GET['s'] : '';
    $data = $post->search($getId);
    header('Content-Type: application/json');
    echo json_encode($data);

}

function games()
{
    start();

}

function displayGame()
{
    $post = new Post();
    $jeux = $post->getAllPosts();
    require ROOT . "/View/viewGame.php";

}

function accueil()
{
    $post = new Post();
    global $jeux;
    $jeux = $post->getAllPosts();
    $art = $post->getartwork();
    require ROOT . "/View/vueAccueil.php";
}

?>
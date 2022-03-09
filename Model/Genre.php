<?php require_once "Model.php";

class Genre extends Model
{

    function genres()
    {
        $sql = 'select GENRE_NAME,GENRE_ID from genre';
        return $this->executeRequest($sql);
    }

    function genreID($id)
    {
        $sql = 'select GENRE_NAME from genre where GENRE_ID = ' . $id;
        return $this->executeRequest($sql);
    }

    function getGenreGames($id)
    {
        $sql = ' SELECT gg.GENRE_ID,gg.GAME_ID,g.GAME_NAME,g.GAME_COVER_URL FROM game_genre as gg join games as g on gg.GAME_ID=g.GAME_ID  where GENRE_ID = ' . $id;
        return $this->executeRequest($sql);
    }
}

?>

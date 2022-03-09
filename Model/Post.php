<?php
require "Model.php";

class Post extends Model
{
    function getAllPosts()
    {
        $sql = 'select g.GAME_ID , g.GAME_NAME , g.GAME_AGGREGATED_RATING , g.GAME_COVER_URL ,g.GAME_STORYLINE from games as g';

        return $this->executeRequest($sql);

    }

    public function getDetails($id)
    {
        $sql = 'select g.GAME_ID , g.GAME_NAME , g.GAME_AGGREGATED_RATING ,g.GAME_SUMMARY, g.GAME_COVER_URL ,g.GAME_STORYLINE from games as g where g.GAME_ID =' . $id;

        return $this->executeRequest($sql);
    }

    public function search($id)
    {
        $sql = 'select g.GAME_ID , g.GAME_NAME , g.GAME_AGGREGATED_RATING , g.GAME_COVER_URL ,g.GAME_STORYLINE ,'
            . ' g.GAME_SUMMARY  as sum from games as g where g.GAME_NAME LIKE "%' . $id . '%" ';

        return $this->executeRequest($sql);
    }

    function screenA($id)
    {
        $sql = 'select SCREENSHOT_URL from screenshots where GAME_ID = ' . $id;;
        return $this->executeRequest($sql);
    }


    function url($id)
    {
        $sql = 'select GAME_ID , WEBSITE_URL ,WEBSITE_CAT from website  where GAME_ID = ' . $id;
        return $this->executeRequest($sql);
    }

    public function getartwork()
    {
        $sql = 'SELECT ARTWORK_URL FROM artworks';
        return $this->executeRequest($sql);
    }

    function similarµ_game($id)
    {
        $sql = 'select OTHER_GAME_NAME ,OTHER_GAME_COVER ,GAME_ID from similar_games';
        return $this->executeRequest($sql);
    }

    function getGenre($id)
    {
        $sql = 'SELECT GENRE_NAME,gg.GENRE_ID'
            . ' FROM game_genre AS gg'
            . ' LEFT JOIN genre AS g ON gg.GENRE_ID = g.GENRE_ID'
            . ' WHERE GAME_ID =' . $id;
        return $this->executeRequest($sql);
    }

}

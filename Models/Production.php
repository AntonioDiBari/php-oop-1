<?php

require_once __DIR__ . "./Genre.php";
class Production
{
    /* definisco gli attributi delle classe */
    public $title;
    public $lang;
    public $vote;
    public $genres;

    /* li assegno mediante la func costruct */

    public function __construct(
        string $titleParam,
        string $langParam,
        $voteParam,
        /* classe e parametro */
        array $genresParam
    ) {
        $this->title = $titleParam;
        $this->lang = $langParam;
        $this->vote = ($voteParam >= 0 && $voteParam <= 10) ? $voteParam : "Immettere nei parametri voto da 1 a 10";
        $this->set_genres($genresParam);

    }

    /* funzione che genera la percentuale dopo aver creato l'stanza */
    public function setPercentage()
    {
        if (gettype($this->vote) == "double" || gettype($this->vote) == "integer") {
            $percentage = $this->vote * 100 / 10;
            return "Gradito al " . $percentage . "%";
        } else {
            return "Metodo non applicabile, voto non da 1 a 10";
        }

    }
    public function set_genres($genres)
    {
        foreach ($genres as $genre) {
            if (!$genre instanceof Genre)
                throw new Exception("Genre Error");

        }
        $this->genres = $genres;
    }

}
<?php

class Production
{
    public $title;
    public $lang;
    public $vote;

    function __construct(
        string $titleParam,
        string $langParam,
        $voteParam,
    ) {
        $this->title = $titleParam;
        $this->lang = $langParam;
        $this->vote = ($voteParam >= 0 && $voteParam <= 10) ? $voteParam : "Immettere nei parametri voto da 1 a 10";
    }

    public function setPercentage()
    {
        if (gettype($this->vote) == "double" || gettype($this->vote) == "integer") {
            $percentage = $this->vote * 100 / 10;
            return "Gradito al " . $percentage . "%";
        } else {
            return "Metodo non applicabile, voto non da 1 a 10";
        }

    }
}
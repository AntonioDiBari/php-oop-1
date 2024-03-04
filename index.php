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

    public function getPercentage()
    {
        if (gettype($this->vote) == "double" || gettype($this->vote) == "integer") {
            $percentage = $this->vote * 100 / 10;
            return $this->title . " ha avuto un gradimento del " . $percentage . "%";
        } else {
            return "Metodo non applicabile, voto non da 1 a 10";
        }

    }
}

$gameOfThrones = new Production("Game of Thrones", "ENG", 8.9);
$lost = new Production("Lost", "ENG", 8);

var_dump($gameOfThrones, $gameOfThrones->getPercentage());
var_dump($lost, $lost->getPercentage());

$productions = [$gameOfThrones, $lost];

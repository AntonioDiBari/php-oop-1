<?php

class Production
{
    public $title;
    public $lang;
    public $vote;

    function __construct(
        string $titleParam,
        string $langParam,
        float $voteParam
    ) {
        $this->title = $titleParam;
        $this->lang = $langParam;
        $this->vote = $voteParam;
    }

    public function getPercentage()
    {
        return $this->vote * 100 / 10;
    }
}

$gameOfThrones = new Production("Game of Thrones", "ENG", 8.9);
$lost = new Production("Lost", "ENG", 8.3);
var_dump($gameOfThrones, $gameOfThrones->title . " ha avuto un gradimento del " . $gameOfThrones->getPercentage() . "%");
var_dump($lost, $lost->title . " ha avuto un gradimento del " . $lost->getPercentage() . "%");
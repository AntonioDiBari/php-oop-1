<?php

require_once __DIR__ . "/Production.php";
class TVSerie extends Production
{
    public $seasons;
    public $episodes;

    function __construct(
        string $titleParam,
        string $langParam,
        $voteParam,
        array $genresParam,
        int $seasonsParam,
        int $episodesParam,

    ) {
        parent::__construct($titleParam, $langParam, $voteParam, $genresParam);
        $this->seasons = $seasonsParam;
        $this->episodes = $episodesParam;
    }
}
<?php

require_once __DIR__ . "/Production.php";
class Movie extends Production
{
    public $profits;
    public $duration;

    function __construct(
        string $titleParam,
        string $langParam,
        $voteParam,
        array $genresParam,
        int $profitsParam,
        int $durationParam,

    ) {
        parent::__construct($titleParam, $langParam, $voteParam, $genresParam);
        $this->profits = $profitsParam;
        $this->duration = $durationParam;
    }
}
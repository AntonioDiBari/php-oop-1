<?php

/* importo le classi */
require_once __DIR__ . "/Models/Production.php";
require_once __DIR__ . "/Models/Genre.php";
require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/TVSerie.php";

/* creo le istanze con la classi in composizione */
$gameOfThrones = new TvSerie("Game of Thrones", "ENG", 8.9, new Genre("Fantasy", "Vicende di una storia Medioevale con draghi e lotte di potere."), 8, 73);
$lost = new TvSerie("Lost", "ENG", 8, new Genre("Adventure", "Avventura che narra di una tragedia aerea con delle complicazioni sulla terra di nessuno."), 6, 114);
$mrRobot = new TvSerie("Mr. Robot", "ENG", 8.3, new Genre("Techno-thriller", "Storia di un tormentato hacker che vuole combattere la ingiustizie del mondo"), 4, 45);
$titanic = new Movie("Titanic", "ENG", 7.2, new Genre("Romantic", "Storia del Titanic e di 2 passeggeri"), 2264743305, 194);
$pulpFiction = new Movie("Pulp Fiction", "ENG", 7.8, new Genre("Thriller", "Storia di 2 agenti speciali"), 4743305, 144);

// var_dump($gameOfThrones, $gameOfThrones->setPercentage(), $gameOfThrones->genre->getBetterDescription());
// var_dump($lost, $lost->setPercentage(), $lost->genre->getBetterDescription());

/* assegno le istanze ad un arrat */
$productions = [$gameOfThrones, $lost, $mrRobot, $titanic, $pulpFiction];

<?php

/* importo le classi */
require_once __DIR__ . "/Models/Production.php";
require_once __DIR__ . "/Models/Genre.php";

/* creo le istanze con la classi in composizione */
$gameOfThrones = new Production("Game of Thrones", "ENG", 8.9, new Genre("Fantasy", "Vicende di una storia Medioevale con draghi e lotte di potere."));
$lost = new Production("Lost", "ENG", 8, new Genre("Adventure", "Avventura che narra di una tragedia aerea con delle complicazioni sulla terra di nessuno."));
$mrRobot = new Production("Mr. Robot", "ENG", 8.3, new Genre("Techno-thriller", "Storia di un tormentato hacker che vuole combattere la ingiustizie del mondo"));

// var_dump($gameOfThrones, $gameOfThrones->setPercentage(), $gameOfThrones->genre->getBetterDescription());
// var_dump($lost, $lost->setPercentage(), $lost->genre->getBetterDescription());

/* assegno le istanze ad un arrat */
$productions = [$gameOfThrones, $lost, $mrRobot];

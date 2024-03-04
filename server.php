<?php

require_once __DIR__ . "./Models/Production.php";

$gameOfThrones = new Production("Game of Thrones", "ENG", 8.9);
$lost = new Production("Lost", "ENG", 8);

// var_dump($gameOfThrones, $gameOfThrones->setPercentage());
// var_dump($lost, $lost->setPercentage());

$productions = [$gameOfThrones, $lost];

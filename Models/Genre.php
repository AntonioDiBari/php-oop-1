<?php

class Genre
{
    /* definisco gli attributi delle classe */

    public $name;
    public $description;


    /* li assegno mediante la func costruct */

    public function __construct(
        string $nameParam,
        string $descriptionParam,
    ) {
        $this->name = $nameParam;
        $this->description = $descriptionParam;
    }
    public function getBetterDescription()
    {
        return $this->name . ": " . $this->description;
    }
}
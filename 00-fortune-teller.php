<?php

//**
// * Write a function that takes 4 arguments: color, name, location, item and
// * returns a fortune prediction like so: "You will meet X in Y, and find Z in a N room together."
// */
//
//function fortuneTeller(color: string, location: string, name: string, item: string) { }
//
//export { fortuneTeller };

class Fortune
{
    private string $color;
    private string $location;
    private string $name;
    private string $item;

    public function __construct(string $color, string $location, string $name, string $item)
    {

        $this->color = $color;
        $this->location = $location;
        $this->name = $name;
        $this->item = $item;
    }

    public function fortuneTeller()
    {
        echo "You will meet {$this->color} in {$this->location}, and find {$this->item} in a {$this->name} room together." . PHP_EOL;
    }
}

$fortune = new Fortune("blue", "forest", "Lote", "car keys");
$fortune->fortuneTeller();

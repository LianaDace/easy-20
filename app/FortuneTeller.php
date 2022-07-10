<?php

namespace App;

class FortuneTeller
{
    public function toTell($color, $location, $name, $item)
    {
        return "You will meet $name in $location, and find $item in a $color room together.";
    }
}


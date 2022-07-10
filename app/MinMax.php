<?php

namespace App;

class MinMax
{
    public static function getMinMax(array $numbers)
    {

        return [min($numbers), max($numbers)];
    }
}
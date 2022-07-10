<?php

namespace App;

class PupperAgeCalculator
{
    public static function calculate(int $dogAge)
    {
        return "Your doggie is " . $dogAge * 7 . " years old in dog years!";
    }
}

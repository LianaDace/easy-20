<?php

namespace App;

class FindingNemo
{
    public static function find(string $sentence)
    {
        $word = "Nemo";
        $split = explode(" ", $sentence);
        if (array_search($word, $split) !== false) {
            return "I found Nemo at " . (array_search($word, $split)) . "!";
        } else{
            return "I can't find Nemo :(";
        }
    }
}
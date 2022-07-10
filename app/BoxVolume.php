<?php

namespace App;

class BoxVolume
{
    public static function volume(array $boxes): int
    {
        $sumUp = [];
        foreach ($boxes as $values){
            $sumUp[] = array_product($values);
        }
        return array_sum($sumUp);
    }
}
<?php

namespace App;

class Burglary
{
    public static function value(array $items): string
    {
        $sum = [];
        foreach ($items as $item => $value){
            $sum[] = $value;
        }

        if(empty($sum) === true) {
            return "Lucky you!";
        }

        return array_sum($sum);

    }
}

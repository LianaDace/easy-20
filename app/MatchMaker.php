<?php

namespace App;

class MatchMaker
{
    public static function couples(array $names)
    {
        $count = count(reset($names));
        $newCouples = [];
        if(count($names[0]) === count($names[1])){
            for($i = 0; $i < $count; $i++){
                $newCouples[] = array_column($names, $i);
            }
            return $newCouples;
        }
           return "Cupid is on vacation";



    }
}

<?php

namespace App;

class LargestSwap
{
    public static function swap(int $number): bool
    {
        $rev = strrev($number);
        $revToInt = intval($rev);

        if(($number - $revToInt) > 0){
            return true;
        }else {
            return false;
        }
    }
}
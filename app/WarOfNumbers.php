<?php

namespace App;

class WarOfNumbers
{
    public static function result(array $numbers): string
    {

        $even = [];
        $odd = [];

        foreach ($numbers as $number){
            if($number % 2 === 0){
                $even[] = $number;
            }else{
                $odd[] = $number;
            }
        }

        $sumEven =  array_sum($even);
        $sumOdd = array_sum($odd);
        $oddWins = ($sumOdd-$sumEven);
        $evenWins = ($sumEven-$sumOdd);


        if($sumOdd > $sumEven){
            return "Odd numbers win by " . $oddWins;
        }elseif ($sumOdd < $sumEven){
            return "Even numbers win by " . $evenWins;
        }else{
            return "There are no winners";
        }
    }

}

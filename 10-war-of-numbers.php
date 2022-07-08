<?php
//**
// * There's a great war between the even and odd numbers.
// * Many numbers already lost their life in this war and it's your task to end this.
// * You have to determine which group is larger: the even, or the odd. The larger group wins.
// * Create a function that takes an array of integers, sums the even and odd numbers seperately,
// * then returns "Odd numbers win by X" or "Even numbers win by X", X is survivors.
// * If both groups are equal, return "There are no winners"
// */
//
//function warOfNumbers(numbers: number[]) { }

class WarOfNumbers
{
    public static function numberWar(array $numbers): string
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

        if($sumOdd > $sumEven){
            echo "Odd numbers win by " . bcsub($sumOdd, $sumEven) . PHP_EOL;
        }else{
            echo "Even numbers win by " . bcsub($sumEven, $sumOdd) . PHP_EOL;
        }
        return "Nothing to show!" . PHP_EOL;
    }
}



$numbers1 = [2, 8, 7, 5];
$numbers2 = [12, 90, 75];
$numbers3 = [5, 9, 45, 6, 2, 7, 34, 8, 6, 90, 5, 243];

WarOfNumbers::numberWar($numbers1);
WarOfNumbers::numberWar($numbers2);
WarOfNumbers::numberWar($numbers3);

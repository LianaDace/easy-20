<?php
//**
// * Write a function that takes a two-digit number and determines, if it's the largest of two possible digit swaps.
// */
//
//function largestSwap(number: number) { }

//test("should return true if it's the largest of two possible digit swaps, false if not", () => {
//        expect(largestSwap(27)).toEqual(false);
//        expect(largestSwap(43)).toEqual(true);
//        expect(largestSwap(14)).toEqual(false);
//    });

class Swap
{
    public static function checkIfSwaps(int $number): void
    {
        $rev = strrev($number);
        $revToInt = intval($rev);

        if(bcsub($number, $revToInt) > 0){
            echo "true" . PHP_EOL;
        }else {
            echo "false" . PHP_EOL;
        }
    }
}

$number = 27;
$number2 = 43;
$number3 = 14;

Swap::checkIfSwaps($number);
Swap::checkIfSwaps($number2);
Swap::checkIfSwaps($number3);


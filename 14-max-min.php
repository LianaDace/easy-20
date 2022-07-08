<?php
//**
// * Create a function that takes an array of numbers and return both the minimum and maximum numbers,
// in that order in a new array.
// */
//function maxMin(numbers: number[]) { }

//test("should return both the minimum and maximum numbers, in that order in a new array", () => {
//        expect(maxMin([1, 2, 3, 4, 5])).toEqual([1, 5]);
//        expect(maxMin([2334454, 5])).toEqual([5, 2334454]);
//        expect(maxMin([1])).toEqual([1, 1]);
//    });

class MaxMin
{
    public static function getMinMax(array $numbers)
    {
        return  min($numbers) . " " . max($numbers);
    }
}


$number = [1, 2, 3, 4, 5];
$number2 = [2334454, 5];
$number3 = [1];

echo MaxMin::getMinMax($number) . PHP_EOL;
echo MaxMin::getMinMax($number2) . PHP_EOL;
echo MaxMin::getMinMax($number3) . PHP_EOL;




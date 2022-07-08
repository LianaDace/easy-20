<?php

//**
// * You have decided to move to a new house and you have put all your stuff in boxes.
// * Unfortunately, you are not sure if they will fit in your car.
// * Given an array of boxes, create a function that returns the total volume of all those boxes combined together.
// * A box is represented by an array with three elements: length, width and height.
// *
// * Example:
// *
// * Input: [[2, 3, 2], [6, 6, 7], [1, 2, 1]]
// * Calculation: (2 x 3 x 2) + (6 x 6 x 7) + (1 x 2 x 1) = 12 + 252 + 2 = 266
// * Output: 266
// */

// test("should return sum of volumes of all boxes", () => {
//        expect(boxVolume([[4, 2, 4], [3, 3, 3], [1, 1, 2], [2, 1, 1]])).toEqual(63);
//        expect(boxVolume([[2, 2, 2], [2, 1, 1]])).toEqual(10);
//        expect(boxVolume([[1, 1, 1]])).toEqual(1);
//    });

class CalculateVolume
{
    public static function boxVolume(array $boxes): int
    {
        $sumUp = [];
        foreach ($boxes as $values){
            $sumUp[] = array_product($values);
        }
        return array_sum($sumUp);
    }
}


$array1 = [[2, 3, 2], [6, 6, 7], [1, 2, 1]];
$array2 = [[2, 2, 2], [2, 1, 1]];
$array3 = [[1, 1, 1]];

echo CalculateVolume::boxVolume($array1) . PHP_EOL;
echo CalculateVolume::boxVolume($array2) . PHP_EOL;
echo CalculateVolume::boxVolume($array3) . PHP_EOL;

<?php
//**
// * You have made a virtual onion and want to peel off the outer layer.
// * Given an array of arrays, return a new array of arrays containing every element, except for the outer elements.
// *
// * Example:
// *
// * Input:
//[
//  ["a", "b", "c", "d"],
//  ["e", "f", "g", "h"],
//  ["i", "j", "k", "l"],
//  ["m", "n", "o", "p"]
//]
// * Output:
//[
//  ["f", "g"],
//  ["j", "k"]
//]
// */


class Peel
{
    public static function peelOff(array $input)
    {
        array_shift($input);
        array_pop($input);

        for($i = 0; $i < count($input); $i++){
            array_shift($input[$i]);
            array_pop($input[$i]);
        }
        return $input;

    }
}

$input = [
    ["a", "b", "c", "d"],
    ["e", "f", "g", "h"],
    ["i", "j", "k", "l"],
    ["m", "n", "o", "p"]
];

$input2 = [
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 10],
    [11, 12, 13, 14, 15],
    [16, 17, 18, 19, 20],
    [21, 22, 23, 24, 25],
    [26, 27, 28, 29, 30],
    [31, 32, 33, 34, 35],
];

$input3 = [
    ["apple", "apple", "apple"],
    ["apple", "banana", "apple"],
    ["apple", "apple", "apple"]
];
var_dump(Peel::peelOff($input));
var_dump(Peel::peelOff($input2));
var_dump(Peel::peelOff($input3));

<?php

use App\PeelTheOnion;

test("should return a new array of arrays containing every element, except for the outer elements", function() {
    $peelTheOnion = new PeelTheOnion();
    expect($peelTheOnion->peel([
        ["a", "b", "c", "d"],
        ["e", "f", "g", "h"],
        ["i", "j", "k", "l"],
        ["m", "n", "o", "p"]
    ]))->toEqual([
        ["f", "g"],
        ["j", "k"]
    ]);
    expect($peelTheOnion->peel([
        [1, 2, 3, 4, 5],
        [6, 7, 8, 9, 10],
        [11, 12, 13, 14, 15],
        [16, 17, 18, 19, 20],
        [21, 22, 23, 24, 25],
        [26, 27, 28, 29, 30],
        [31, 32, 33, 34, 35]
    ]))->toEqual([
        [7, 8, 9],
        [12, 13, 14],
        [17, 18, 19],
        [22, 23, 24],
        [27, 28, 29]
    ]);
    expect($peelTheOnion->peel([
        ["apple", "apple", "apple"],
        ["apple", "banana", "apple"],
        ["apple", "apple", "apple"]
    ]))->toEqual([["banana"]]);
});
<?php

use App\MatchMaker;

test("should return a new array of arrays with couples, if given array sizes match and 'Cupid is on vacation' if not ", function() {
    $matchMaker = new MatchMaker();
    expect($matchMaker->couples([["Elise", "Mary"], ["John", "Rick"]]))->toEqual([["Elise", "John"], ["Mary", "Rick"]]);
    expect($matchMaker->couples([["Ana", "Amy", "Lisa"], ["Bob", "Josh"]]))->toEqual("Cupid is on vacation");
    expect($matchMaker->couples([["Ana", "Amy", "Lisa"], ["Bob", "Josh", "Tim"]]))->toEqual([["Ana", "Bob"], ["Amy", "Josh"],["Lisa", "Tim"]]);
});
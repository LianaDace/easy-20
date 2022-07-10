<?php

use App\RockPaperScissors;

test("should return the winner of the game or 'Tie!' when there is no winner ", function() {
    $rockPaperScissors = new RockPaperScissors();
    expect($rockPaperScissors->winner([["R", "P"], ["R", "S"], ["S", "P"]]))->toEqual("Abigail");
    expect($rockPaperScissors->winner([["R", "R"], ["S", "S"]]))->toEqual("Tie!");
    expect($rockPaperScissors->winner([["R", "P"], ["R", "P"], ["P", "R"]]))->toEqual("Benson");
});
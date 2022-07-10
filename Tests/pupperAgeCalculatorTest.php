<?php

use App\PupperAgeCalculator;


test("should return a fortune prediction", function () {
    $pupperAgeCalculator = new PupperAgeCalculator();
    expect($pupperAgeCalculator->calculate(1))->toEqual("Your doggie is 7 years old in dog years!");

    expect($pupperAgeCalculator->calculate(10))->toEqual("Your doggie is 70 years old in dog years!");

    expect($pupperAgeCalculator->calculate(15))->toEqual("Your doggie is 105 years old in dog years!");
});
<?php

use App\DoubleTrouble;

test("should remove duplicate values from array", function() {
    $doubleTrouble = new DoubleTrouble();
    expect($doubleTrouble->list(["John", "Taylor", "John"]))->toEqual(["John", "Taylor"]);
    expect($doubleTrouble->list(["Ann", "Ann", "Ann"]))->toEqual(["Ann"]);
    expect($doubleTrouble->list(["John", "Taylor"]))->toEqual(["John", "Taylor"]);
});
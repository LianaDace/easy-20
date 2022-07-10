<?php

use App\Burglary;

test("should return the total value of stolen items", function() {
    $burglary = new Burglary();
        expect($burglary->value([ "tv" => 30, "skate" => 20, "stereo" => 50 ]))->toEqual(100);
        expect($burglary->value([ "painting" => 20000 ]))->toEqual(20000);
        expect($burglary->value([ "ring" => 250, "neclace" => 500 ]))->toEqual(750);
    });
    test("should return a string 'Lucky you!', if nothing was stolen", function(){
    $burglary = new Burglary();
    expect($burglary->value([ ]))->toEqual("Lucky you!");
    });
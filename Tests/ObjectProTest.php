<?php

use App\ObjectPro;

test("should return the keys and values of object as separate arrays", function() {
    $objectPro = new ObjectPro();
        expect($objectPro->keysAndValues([ "a" => 1, "b" => 2, "c" => 3 ]))->toEqual([["a", "b", "c"], [1, 2, 3]]);
        expect($objectPro->keysAndValues([ "a" => "Apple", "b" => "Microsoft", "c" => "Google" ]))->toEqual([["a", "b", "c"], ["Apple", "Microsoft", "Google"]]);
        expect($objectPro->keysAndValues([ "key1" => true, "key2" => false, "key3" => "undefined" ]))->toEqual([["key1", "key2", "key3"], [true, false, "undefined"]]);
    });
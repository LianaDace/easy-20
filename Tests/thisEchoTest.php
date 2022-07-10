<?php

use App\ThisEcho;

test("should return the given text repeated n times", function() {
    $thisEcho = new ThisEcho();
        expect($thisEcho->repeat("ab", 3))->toEqual("ababab");
        expect($thisEcho->repeat("kiwi", 1))->toEqual("kiwi");
        expect($thisEcho->repeat("cherry", 2))->toEqual("cherrycherry");
    });
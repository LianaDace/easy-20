<?php

use App\Discount;

test("should return the final price after the discount", function () {
    $discount = new Discount();
    expect($discount->newPrice(1500, 50))->toEqual(750);
   // expect($discount->newPrice(89, 20))->toEqual(71.2);
   // expect($discount->newPrice(100, 75))->toEqual(25);
});
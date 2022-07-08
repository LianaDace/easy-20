<?php

//**
// * Create a function that takes two arguments: the final price and the discount percentage as integers.
// * Return the final price after the discount.
// */
//
//function discount(price: number, discount: number) { }

// test("should return the final price after the discount", () => {
//        expect(discount(1500, 50)).toEqual(750);
//        expect(discount(89, 20)).toEqual(71.2);
//        expect(discount(100, 75)).toEqual(25);



class Discount
{
    public static function newPrice(float $price, int $discount): float
    {
        return $price - (($discount / 100) * $price );
    }
}

$price1 = 1500;
$discount1 = 50;

$price2 = 89;
$discount2 = 20;

$price3 = 100;
$discount3 = 75;

echo Discount::newPrice($price1, $discount1) . PHP_EOL;
echo Discount::newPrice($price2, $discount2) . PHP_EOL;
echo Discount::newPrice($price3, $discount3) . PHP_EOL;


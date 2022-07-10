<?php

namespace App;

class Cashier
{
    public static function price(array $products): float
    {
        $sum = [];
        foreach ($products as $item){
            $sum[] = $item["quantity"] * $item["price"];
        }

        return array_sum($sum);
    }
}
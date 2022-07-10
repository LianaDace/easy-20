<?php

namespace App;

class Discount
{
    public function newPrice($price, $discount)
    {
        $discountPrice = $price - (($discount / 100) * $price );
        return $discountPrice;
    }
}
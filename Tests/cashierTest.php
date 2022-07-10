<?php

use App\Cashier;


test("should return the total price of all groceries", function() {
    $cashier = new Cashier();
    expect($cashier->price([
            [ "product" => "Milk", "quantity" => 1, "price" => 1.50 ]
        ]))->toEqual(1.5);
        expect($cashier->price([
            [ "product" => "Milk", "quantity" => 1, "price" => 1.50 ],
            [ "product" => "Cereals", "quantity" => 1, "price" => 2.50 ]
        ]))->toEqual(4);
        expect($cashier->price([
            [ "product" => "Milk", "quantity" => 1, "price" => 1.50 ],
            [ "product" => "Eggs", "quantity" => 12, "price" =>0.10 ],
            [ "product" => "Bread", "quantity" => 2, "price" => 1.60 ],
            [ "product" => "Cheese", "quantity" => 1,"price" => 4.50]
        ]))->toEqual(10.4);
    });
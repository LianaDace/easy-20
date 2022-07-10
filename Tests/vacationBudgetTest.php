<?php

use App\VacationBudget;

test("should return the sum of people's budgets", function() {
    $budget = new VacationBudget();
    expect($budget->budget([
            [ "name"=> "John", "age" => 21, "budget" => 23000 ],
            [ "name" => "Steve", "age" => 32, "budget" => 40000 ],
            [ "name" => "Martin", "age" => 16, "budget" => 2700 ],
        ]))->toEqual(65700);
    expect($budget->budget([
           [ "name"=> "John", "age" => 21, "budget" =>  29000 ],
           [ "name" => "Steve", "age" => 32, "budget" => 32000 ],
           [ "name" => "Martin", "age" => 16, "budget" => 1600 ]
        ]))->toEqual(62600);
    expect($budget->budget([
        [ "name"=> "John", "age" => 21, "budget" =>  0 ],
        [ "name" => "Steve", "age" => 32, "budget" => 1200 ],
        [ "name" => "Martin", "age" => 16, "budget" => 1200 ]
    ]))->toEqual(2400);
    });
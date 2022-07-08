<?php
//**
// * A family want's to go on a vacation, but don't know what is the total amount of money they can spend on the trip.
// * Create the function that takes an array with objects and returns the sum of people's budgets.
// */
//
//function vacationBudget(family: Person[]) { }
//
//export { vacationBudget };
//
//interface Person {
//    name: string;
//    age: number;
//    budget: number;
//}

class Budget
{
    public static function calculateBudget(array $family): int
    {
        $wholeBudget = [];
        foreach ($family as $familyMember){
            $wholeBudget[] = $familyMember->budget;
        }

        return array_sum($wholeBudget);
    }
}

$John = new stdClass();
$John->name = "John";
$John->age = 21;
$John->budget = 23000;

$Steve = new stdClass();
$Steve->name = "Steve";
$Steve->age = 32;
$Steve->budget = 40000;

$Martin = new stdClass();
$Martin->name = "Martin";
$Martin->age = 16;
$Martin->budget = 2700;

$family1 = [$John, $Steve, $Martin];


echo Budget::calculateBudget($family1) . PHP_EOL;

<?php
//**
// * Write a function that takes dog's age in human years as an argument and converts to dog years.
// * Return the result like so: "Your doggie is NN years old in dog years!"
// */
//
//function pupperAgeCalculator(age: number) { }
//
//export { pupperAgeCalculator };

class Age
{
    public static function dogAgeToHumanAge(int $dogAge)
    {
        return $dogAge * 7;
    }
}
$dogAge = readline("Enter dogs age: ");
echo "Your dog is {$dogAge} years old, but in human age: " . Age::dogAgeToHumanAge($dogAge) . PHP_EOL;
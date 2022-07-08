<?php
//**
// * A group of friends have decided to start a secret society.
// * The name will be the first letter of each of their names, sorted in alphabetical order.
// * Create a function that takes in an array of names and returns the name of the secret society.
// */
//
//function secretSociety(names: string[]) { }

//test("should return a string of first letters from array items", () => {
//    expect(secretSociety(["Adam", "Sarah", "Malcolm"])).toEqual("AMS");
//    expect(secretSociety(["Harry", "Newt", "Luna", "Cho"])).toEqual("CHLN");
//    expect(secretSociety(["Phoebe", "Chandler", "Rachel", "Ross", "Monica", "Joey"])).toEqual("CJMPRR");


class SecretName
{
    public static function secretSociety(array $names): string
    {
        $firstLetters = [];

        foreach ($names as $name){
            $firstLetters[] = substr($name, 0, 1);
        }
        sort($firstLetters);
        return $secretSocietyName = implode($firstLetters);
    }
}

$names1 = ["Adam", "Sarah", "Malcolm"];
$names2 = ["Harry", "Newt", "Luna", "Cho"];
$names3 = ["Phoebe", "Chandler", "Rachel", "Ross", "Monica", "Joey"];

echo SecretName::secretSociety($names1) . PHP_EOL;
echo SecretName::secretSociety($names2) . PHP_EOL;
echo SecretName::secretSociety($names3) . PHP_EOL;


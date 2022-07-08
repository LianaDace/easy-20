<?php

//**
// * You and your friends are visiting a huge cave and one of you decides to yell "Hello". To your surprise the cave answers.
// * Create a function that takes two parameters the first parameter is the string to be repeated and the second
// * parameter is the number of times the string is to be repeated.
// */
//
//function echo(text: string, repetition: number) { }

//test("should return the given text repeated n times", () => {
//        expect(echo("ab", 3)).toEqual("ababab");
//        expect(echo("kiwi", 1)).toEqual("kiwi");
//        expect(echo("cherry", 2)).toEqual("cherrycherry");
//    });

class Repeat
{
    public static function repeatString(string $string, int $times): string
    {
        return str_repeat($string, $times);
    }
}

$string = "ab";
$times = 3;

$string2 = "kiwi";
$times2 = 1;

$string3 = "cherry";
$times3 = 2;

echo Repeat::repeatString($string, $times) . PHP_EOL;
echo Repeat::repeatString($string2, $times2) . PHP_EOL;
echo Repeat::repeatString($string3, $times3) . PHP_EOL;

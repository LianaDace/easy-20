<?php

//**
// * You're given a string of words.
// * You need to find the word "Nemo", and return a string like so: "I found Nemo at X!", X is the index of the word.
// * If you can't find Nemo, return "I can't find Nemo :(".
// */
//
//function findingNemo(input: string) { }

//test("should return a string 'I found Nemo at X!', X being the index value of the word 'Nemo', if 'Nemo' is found", () => {
//        expect(findingNemo("I am finding Nemo !")).toEqual("I found Nemo at 3!");
//        expect(findingNemo("Nemo is me")).toEqual("I found Nemo at 0!");
//        expect(findingNemo("I Nemo am")).toEqual("I found Nemo at 1!");

class FindingNemo
{
    public static function find(string $sentence): void
    {
        $word = "Nemo";
        $split = explode(" ", $sentence);
        if (array_search($word, $split) !== false) {
            echo  "I found Nemo at " . (array_search($word, $split)) . PHP_EOL;
        }else {
            echo "I can't find Nemo :(" . PHP_EOL;
        }
    }
}

$str1 = "I am finding Nemo !";
$str2 = "Nemo is me";
$str3 = "I Nemo am";
FindingNemo::find($str1);
FindingNemo::find($str2);
FindingNemo::find($str3);





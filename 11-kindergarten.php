<?php
//**
// * You have decided to teach programming at a kindergarten, but you cannot understand half of what the children are saying.
// * Write a function that reverses all the words in a sentence that start with a particular letter.
// */
//
//function kindergarten(sentence: string, letter: string) { }

//test("should reverses all the words in a sentence that start with a particular letter", () => {
//        expect(kindergarten("First nam to walk on the noom", "n")).toEqual("First man to walk on the moon");
//        expect(kindergarten("reteP ate reppep", "r")).toEqual("Peter ate pepper");
//        expect(kindergarten("I dekcip delkcip onions for supper", "d")).toEqual("I picked pickled onions for supper");
//    });

class Reverse
{
    public static function reverseWords(string $sentence, string $letter): string
    {
        $splitSentence = explode(" ", $sentence);

        $word = [];
        foreach ($splitSentence as $words){
            if(substr($words, 0, 1) == $letter){
                $word[] = strrev($words);
            }else{
                $word[] = $words;
            }
        }

        return implode(" ", $word);
    }
}



$sentence1 = "First nam to walk on the noom";
$letter1 = "n";

echo Reverse::reverseWords($sentence1, $letter1) . PHP_EOL;

$sentence2 = "reteP ate reppep";
$letter2 = "r";

echo Reverse::reverseWords($sentence2, $letter2) . PHP_EOL;
<?php

///**
// * A lowercase word is hiding amongst a crowd of uppercase letters!
// * Write a function that returns the hidden name.
// */
//
//function hideAndSeek(crowd: string) { }
//
//export { hideAndSeek };


// test("should return all lowercase letters", () => {
//    expect(hideAndSeek("UcUNFYGaFYFYGtNUH")).toEqual("cat");
//    expect(hideAndSeek("bEEFGBuFBRrHgUHlNFYaYr")).toEqual("burglar");
//    expect(hideAndSeek("YFpHUFBrFBYFBYLGBYoEFGBMENT")).toEqual("pro");

class Word
{
    public static function hideAndSeek(string $input)
    {   $arr = str_split($input);
        $lower = [];
        foreach ($arr as $letter){
            if(ctype_lower($letter) === true ){
                $lower[] = $letter;
            }
        }
        return $hiddenWord = implode($lower);
    }
}
$str1 = "UcUNFYGaFYFYGtNUH";
$str2 = "bEEFGBuFBRrHgUHlNFYaYr";
$str3 = "YFpHUFBrFBYFBYLGBYoEFGBMENT";


echo Word::hideAndSeek($str1) . PHP_EOL ;
echo Word::hideAndSeek($str2) . PHP_EOL ;
echo Word::hideAndSeek($str3) . PHP_EOL ;


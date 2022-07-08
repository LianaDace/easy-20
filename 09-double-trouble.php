<?php
//**
// * You are organizing an event and asked people to add their name to a list, if they want to attend.
// * But, oh no, some people wrote their name twice.
// * Create a function that takes an array of items, removes all duplicate items and
// * returns a new array in the same sequential order as the old array (minus duplicates).
// */
//
//function doubleTrouble(list: string[]) { }

//test("should remove duplicate values from array", () => {
//        expect(doubleTrouble(["John", "Taylor", "John"])).toEqual(["John", "Taylor"]);
//        expect(doubleTrouble(["Ann", "Ann", "Ann"])).toEqual(["Ann"]);
//        expect(doubleTrouble(["John", "Taylor"])).toEqual(["John", "Taylor"]);
//    });

class Names
{
    public static function cleanNameList(array $nameList): string
    {
        $clenList = array_unique($nameList);
        return implode(" ", $clenList);
    }
}


$nameList = ["John", "Taylor", "John"];
$nameList2 = ["Ann", "Ann", "Ann"];
$nameList3 = ["John", "Taylor"];
echo Names::cleanNameList($nameList) . PHP_EOL;
echo Names::cleanNameList($nameList2) . PHP_EOL;
echo Names::cleanNameList($nameList3) . PHP_EOL;


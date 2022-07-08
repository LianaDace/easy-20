<?php
//**
// * You just returned home to find your mansion has been robbed!
// * Given an object of the stolen items, return the total amount of the burglary (number).
// * If nothing was robbed, return the string "Lucky you!".
// */
//
//function burglary(input: any) { }

//test("should return the total value of stolen items", () => {
//        expect(burglary({ tv: 30, skate: 20, stereo: 50 })).toEqual(100);
//        expect(burglary({ painting: 20000 })).toEqual(20000);
//        expect(burglary({ ring: 250, neclace: 500 })).toEqual(750);
//    });
//    test("should return a string 'Lucky you!', if nothing was stolen", () => {
//        expect(burglary({})).toEqual("Lucky you!");
//    });


class Burglary
{
    public static function valueOfStolenItems(array $items): string
    {
        $sum = [];
        foreach ($items as $item => $value){
            $sum[] = $value;
        }

        if(empty($sum) === true) {
            return "Lucky you!";
        }

            return array_sum($sum);

    }
}


$items1 = [
    "tv" => 30,
    "skate" => 20,
    "stereo" => 50,

];

$items2 = [
    "painting" => 20000,
];

$items3 = [

    "ring" => 250,
    "necklace" => 500,
];

$items4 = [];

echo Burglary::valueOfStolenItems($items1) . PHP_EOL;
echo Burglary::valueOfStolenItems($items2) . PHP_EOL;
echo Burglary::valueOfStolenItems($items3) . PHP_EOL;
echo Burglary::valueOfStolenItems($items4) . PHP_EOL;


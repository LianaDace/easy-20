<?php
//**
// * You have decided that you are an expert of love and want to start a dating service.
// * Given an array of women and an array of men,
// * return an array of pairs, with the first woman paired with the first man, second woman paired with the second man, etc.
// * If the array sizes don't match, return "Cupid is on vacation"
// */
//
//function matchMaker(women: string[], men: string[]) { }

class MatchMaker
{
    public static function makeAMatch(array $names): array
    {
        $newCouples = [];
        if(count($names[0]) === count($names[1])){
            for($i = 0; $i <=count($names); $i++){
                $newCouples[] = array_column($names, $i);
            }
        } else{
            echo "Cupid is on vacation" . PHP_EOL;
        }

        return $newCouples;
    }
}


$couples1 = [["Elise", "Mary"], ["John", "Rick"]];
$couples2 = [["Ana", "Amy", "Lisa"], ["Bob", "Josh"]];
$couples3 = [["Ana", "Amy", "Lisa"], ["Bob", "Josh", "Tim"]];

print_r(MatchMaker::makeAMatch($couples1));
print_r(MatchMaker::makeAMatch($couples2));
print_r(MatchMaker::makeAMatch($couples3));
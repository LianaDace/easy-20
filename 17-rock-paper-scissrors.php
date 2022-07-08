<?php

//        expect(rockPaperScissors([["R", "P"], ["R", "S"], ["S", "P"]])).toEqual("Abigail");
//        expect(rockPaperScissors([["R", "R"], ["S", "S"]])).toEqual("Tie!");
//        expect(rockPaperScissors([["R", "P"], ["R", "P"], ["P", "R"]])).toEqual("Benson");


class RockPaperScissors
{

    public static function game(array $winCases, array $games)
    {

        $player1 = 0;
        $player2 = 0;

        for($i = 0; $i < count($games); $i++) {
            if ($winCases[2] === $games[$i] || $winCases[5] === $games[$i] || $winCases[8] === $games[$i]) {
                echo "tie" . PHP_EOL;
                break;
            } elseif ($winCases[1] === $games[$i] || $winCases[3] === $games[$i] || $winCases[6] === $games[$i]) {
                $player1++;
            } elseif($winCases[0] === $games[$i] || $winCases[4] === $games[$i] || $winCases[7] === $games[$i]) {
                $player2++;
            }
        }

        if($player1 > $player2){
            echo "Abigail win!" . PHP_EOL;
        }elseif ($player1< $player2){
            echo "Benson win!" . PHP_EOL;
        }

    }
}

$winCases = [
    ["R", "P"], ["R", "S"],["R", "R"],
    ["P", "R"], ["P", "S"],["P", "P"],
    ["S", "P"], ["S", "R"],["S", "S"]
];

$games1 = [["R", "P"], ["R", "S"], ["S", "P"]];
$games2 = [["R", "R"], ["S", "S"]];
$games3 = [["R", "P"], ["R", "P"], ["P", "R"]];

RockPaperScissors::game($winCases, $games1);
RockPaperScissors::game($winCases, $games2);
RockPaperScissors::game($winCases, $games3);


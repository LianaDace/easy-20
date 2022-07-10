<?php

namespace App;

class RockPaperScissors
{

    public static function winner($games): string
    {
        $winCases = [
            ["R", "P"], ["R", "S"],["R", "R"],
            ["P", "R"], ["P", "S"],["P", "P"],
            ["S", "P"], ["S", "R"],["S", "S"]
        ];

        $player1 = 0;
        $player2 = 0;

        for ($i = 0; $i < count($games); $i++) {
            if ($winCases[2] === $games[$i] || $winCases[5] === $games[$i] || $winCases[8] === $games[$i]) {
                return "Tie!";
                break;
            } elseif ($winCases[1] === $games[$i] || $winCases[3] === $games[$i] || $winCases[6] === $games[$i]) {
                $player1++;
            } elseif ($winCases[0] === $games[$i] || $winCases[4] === $games[$i] || $winCases[7] === $games[$i]) {
                $player2++;
            }
        }

        if ($player1 > $player2) {
            return "Abigail";
        } elseif ($player1 < $player2) {
            return "Benson";
        }
    return "fail";
    }
}
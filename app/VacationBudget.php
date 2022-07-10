<?php

namespace App;

class VacationBudget
{
    public function budget(array $family): int
    {   $sum = [];
        foreach ($family as $members){
            $sum[] = $members["budget"];
        }

        $result = array_sum($sum);
        return $result;
    }
}
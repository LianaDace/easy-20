<?php

namespace App;

class DoubleTrouble
{
    public static function list(array $nameList): array
    {
        $clientList = array_unique($nameList);
        return $clientList;
    }
}
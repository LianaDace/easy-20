<?php

namespace App;

class ObjectPro
{
    public static function keysAndValues(array $array): array
    {
        $array_keys = array_keys($array);
        $array_value = array_values($array);
        $newArr = [$array_keys, $array_value];

        return $newArr;
    }
}
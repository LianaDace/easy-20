<?php

namespace App;

class ThisEcho
{
    public static function repeat(string $string, int $times): string
    {
        return str_repeat($string, $times);
    }
}
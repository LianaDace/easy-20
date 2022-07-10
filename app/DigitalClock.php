<?php

namespace App;

class DigitalClock
{
    public static function format(int $seconds): string
    {
        return gmdate("H:i:s", $seconds);
    }

}
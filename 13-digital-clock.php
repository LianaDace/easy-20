<?php

//**
// * Write a function that takes the number of seconds and returns the digital format clock time as a string.
// * Time should be counted from 00:00:00.
// */

//test("should convert seconds to a time string in format hh:mm:ss", () => {
//        expect(digitalClock(5025)).toEqual("01:23:45");
//        expect(digitalClock(61201)).toEqual("17:00:01");
//        expect(digitalClock(87000)).toEqual("00:10:00");
//    });

class DigitalClock
{
    public static function format(int $seconds): string
    {
        return gmdate("H:i:s", $seconds);
    }
}

$seconds1 = 5025;
$seconds2 = 61201;
$seconds3 = 87000;

echo DigitalClock::format($seconds1) . PHP_EOL;
echo DigitalClock::format($seconds2) . PHP_EOL;
echo DigitalClock::format($seconds3) . PHP_EOL;

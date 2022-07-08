<?php

//**
// * You are on your way to becoming a professional, time to master objects.
// * Create a function that takes an object and returns the keys and values as separate arrays.
// * Return the keys sorted alphabetically, and their corresponding values in the same order.
// */
//function objectPro(input: any) { }

class Separate
{
    public static function keysAndValues(array $array): array
    {
        $array_keys = array_keys($array);
        $array_value = array_values($array);
        $newArr = [$array_keys, $array_value];

        return $newArr;
    }
}


$array1 = [ "a" => 1, "b" => 2, "c" => 3 ];
$array2 = [ "a" => "Apple", "b" => "Microsoft", "c" => "Google"];
$array3 = [ "key1" => "true", "key2" => "false", "key3" => "undefined"];



print_r(Separate::keysAndValues($array1));
print_r(Separate::keysAndValues($array2));
print_r(Separate::keysAndValues($array3));




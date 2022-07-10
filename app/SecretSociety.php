<?php

namespace App;

/*
class SecretSociety
{
    public function name(string $input)
    {   $arr = str_split($input);
        $lower = [];
        foreach ($arr as $letter){
            if(ctype_lower($letter) === true ){
                $lower[] = $letter;
            }
        }
        return $hiddenWord = implode($lower);
    }
}
*/
class SecretSociety
{

    public static function name($names): string
    {
        $firstLetters = [];

        foreach ($names as $name){
            $firstLetters[] = substr($name, 0, 1);
        }
        sort($firstLetters);
        return $secretSocietyName = implode($firstLetters);
    }

}
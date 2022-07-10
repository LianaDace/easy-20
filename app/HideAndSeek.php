<?php

namespace App;

class HideAndSeek
{

    public static function seek(string $input)
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

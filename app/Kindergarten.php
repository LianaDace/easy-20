<?php

namespace App;

class Kindergarten
{
    public static function translate(string $sentence, string $letter): string
    {
        $splitSentence = explode(" ", $sentence);

        $word = [];
        foreach ($splitSentence as $words){
            if(substr($words, 0, 1) == $letter){
                $word[] = strrev($words);
            }else{
                $word[] = $words;
            }
        }
        $translation =  implode(" ", $word);
        return $translation;
    }
}

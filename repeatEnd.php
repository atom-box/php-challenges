<?php
// Given a string and an int n, return a string made of n repetitions of the last n characters of the string. 
// You may assume that n is between 0 and the length of the string, inclusive.

function repeatEnd($s, $n){
    $index = count($s) - $n; 
    $substring =  substr($s, $index - 1);
    $posterior = str_repeat($substring, $n);
    return $s.$posterior;
}


echo(repeatEnd("Hello", 3)."\n"); //  "llollollo"
echo(repeatEnd("Hello", 2)."\n"); //  "lolo"
echo(repeatEnd("Hello", 1)."\n"); //  "o"
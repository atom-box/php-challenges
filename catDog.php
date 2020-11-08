<?php 

interface Stringchecker {
    public function wordbalance (string $s);
}

class CatDog implements Stringchecker {
    public function wordbalance (string $s){
        return "Length is ". strlen($s)."\n";
    }
}



// Return true if the string "cat" and "dog" appear the same number of times in the given string.

$foo = new CatDog();

echo($foo->wordbalance("cat^dog")); // true
echo($foo->wordbalance("catcat")); // false
echo($foo->wordbalance("1cat1cadodog")); // true
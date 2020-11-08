<?php 

interface Stringchecker {
    public function wordbalance (string $s);
}

class CatDog implements Stringchecker {
    public function wordbalance (string $s){
        $dogcount = preg_match_all('/[\^|1]/i', $s, $matches);
        echo("\nCOUNT: ".count($matches[0]));
        echo("     OTHER: ");
        print_r($matches);
        $test1 = true;
        return $test1 ? 'TRUE!' : 'FALSE!';
    }
}



// Return true if the string "cat" and "dog" appear the same number of times in the given string.

$foo = new CatDog();

echo($foo->wordbalance("cat^dog")."\n"); // true
echo($foo->wordbalance("catcat")."\n"); // false
echo($foo->wordbalance("1cat1cadodog^^^^^")."\n"); // true
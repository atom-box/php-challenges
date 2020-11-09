<?php 

interface Stringchecker {
    public function wordbalance (string $s);
}

class CatDog implements Stringchecker {
    public function wordbalance (string $s){
        $dogcount = preg_match_all('/dog/i', $s, $matches);
        $catcount = preg_match_all('/cat/i', $s, $matches);

        echo("\nDOGS: " .$dogcount. " CATS: " .$catcount. " ");

        $test1 = $dogcount && $dogcount == $catcount;
        return $test1 ? 'TRUE!' : 'FALSE!';
    }
}



// Return true if the string "cat" and "dog" appear the same number of times in the given string.

$foo = new CatDog();

echo($foo->wordbalance("cat^dogdog")."\n"); // false
echo($foo->wordbalance("catcat")."\n"); // false
echo($foo->wordbalance("1cat1cadodog^^^^^")."\n"); // true
echo($foo->wordbalance("cat ca^dogdog 3444 catcacacaatatcat dog")."\n"); // true

<?php

// Given an array of strings, return a new List (e.g. an ArrayList) where 
// all the strings of the given length are omitted. 

interface ListShortener {
    public function enter(array $words, int $reave) : array ; 
    public function printNewList();
} 

class tooLongGone implements ListShortener {
    public function enter(array $words, int $reave) : array {
        echo "Hellow. ";
        return [1, 0];
    } 

    public function printNewList(){
        echo "Goodbyew. ";
    }
    
}


$foo = new tooLongGone();


$foo -> enter(["a", "bb", "b", "ccc"], 1); // ["bb", "ccc"]
$foo -> printNewList();
$foo -> enter(["a", "bb", "b", "ccc"], 3); // ["a", "bb", "b"]
$foo -> printNewList();
$foo -> enter(["a", "bb", "b", "ccc"], 4); // ["a", "bb", "b", "ccc"]
$foo -> printNewList();

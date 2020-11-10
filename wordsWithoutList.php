<?php

// Given an array of strings, return a new List (e.g. an ArrayList) where 
// all the strings of the given length are omitted. 

// TODO refactor to have __CONSTRUCT

interface ListShortener {
    public function enter(array $words, int $reave); 
    public function printNewList();
} 

class tooLongGone implements ListShortener {

    public function enter(array $words, int $unwanted_size) {
        $this->words = $words;
        $this->unwanted_size = $unwanted_size; 
        echo "Hellow.? ";
    } 

    public function printNewList(){
        echo("Unwanted size is $this->unwanted_size \n" );
        foreach($this->words as $word){
            if(strlen($word) != $this->unwanted_size){
                echo "$word \n";
            }
        }
        echo "There were no LENGTH[".$this->unwanted_size."] above.\n";
    }
    
}


$foo = new tooLongGone();


$foo -> enter(["a", "bb", "b", "ccc"], 1); // ["bb", "ccc"]
$foo -> printNewList();
$foo -> enter(["a", "bb", "b", "ccc"], 3); // ["a", "bb", "b"]
$foo -> printNewList();
$foo -> enter(["a", "bb", "b", "ccc"], 4); // ["a", "bb", "b", "ccc"]
$foo -> printNewList();

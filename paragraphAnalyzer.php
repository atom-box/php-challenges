<?php

// Return the number of times that the string "coney" appears anywhere in 
// the given string, except we'll accept any vowels 
// so "caney" and "cinoy" count.

interface Counter {
    public function countConeys(string $s) : int ;
}

interface EditorTools {
    public function worditize(string $wordString) : array;
    public function munch(string $dirtyWord) : string;
    public function standardize(string $chaosWord) : string;
}



class StringUtility implements Counter, EditorTools {
    
    public function countConeys(string $s) : int {
        return preg_match_all('/c[aeiouy]n[aeiouy]y/i', $s);
        // return 99;
    } 
    
    public function worditize(string $wordString) : array {
        return explode(' ', $wordString);
    }
    
    public function munch(string $dirtyWord) : string {
        return "canary";
    }
    
    public function standardize(string $chaosWord) : string {
        return "canary";
    }

}



// _                        
// | |                       
// _ __   _____  _| |_   _ __ __ ___      __
// | '_ \ / _ \ \/ / __| | '__/ _` \ \ /\ / /
// | | | |  __/>  <| |_  | | | (_| |\ V  V / 
// |_| |_|\___/_/\_\\__| |_|  \__,_| \_/\_/  
                         
//  https://algs4.cs.princeton.edu/53substring/Brute.java.html


// Is there a better place for this data? TODO
$testQuote = '“The art is not one of forgetting but letting go. And when everything else is gone, you can be rich in loss.”'; 


$editor = new StringUtility();

print_r($editor->worditize($testQuote)); 
// todo 1) constructor 2) allow for $solnit = new Wordmass


// extract words to array, trim, standardize case, find redundants, sort, histogram
// EditorTools
//  to array
//   trimarray
//   standardize casearray
  
//   ArrayTools 
//   find redundantsarray
//   sortarray
//   histogram

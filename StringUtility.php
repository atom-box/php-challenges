<?php

// Return the number of times that the string "coney" appears anywhere in 
// the given string, except we'll accept any vowels 
// so "caney" and "cinoy" count.

interface Counter {
    public function countConeys(string $s) : int ;
}

class StringUtility implements Counter {

    public function countConeys(string $s) : int {
        return preg_match_all('/c[aeiouy]n[aeiouy]y/i', $s);
        // return 99;
    }
 
}

$editor = new StringUtility();

echo($editor->countConeys("aaaconeybbb")."\n"); // 1
echo($editor->countConeys("caneyxxconey")."\n"); // 2
echo($editor->countConeys("cinayxcunoy")."\n"); // 2
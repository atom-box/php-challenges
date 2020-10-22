<?php
// adapted from Java at https://algs4.cs.princeton.edu/53substring/Brute.java.html 
// Given a string, return true if "bad" appears starting at index 0 or 1 in the string, such as with "badxxx" or "xbadxx" but not "xxbadxx". The string may be any length, including 0. Note: use .equals() to compare 2 strings.



// Return offset of first match or n if no match
function searcher($pattern, $text){
    $m = strlen($pattern);
    $n = strlen($text);

    for ($i = 0; $i <= $n - $m; $i++){
        for ($j =0; $j < $m; $j++){
            if ($text[$i+$j] !== $pattern[$j]){
                break;
            }
        }
        if ($j == $m){ 
            return $i;
        } // found at, wait for it... i!
    }
}

function hasBad($look_in){
    $look_for = 'bad';
    $found_at = searcher($look_for, $look_in);
    if ($found_at > -1 && $found_at < 2){
        return 'truuue';
    }
    return 'fffalse';
}

echo("Todo: put in types.\n");
echo(hasBad("badxx")."\n"); // true
echo(hasBad("xbadxx")."\n"); // true
echo(hasBad("xxbadxx")."\n"); // false
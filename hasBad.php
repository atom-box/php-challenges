<?php

// Given a string, return true if "bad" appears starting at index 0 or 1 in the string, such as with "badxxx" or "xbadxx" but not "xxbadxx". The string may be any length, including 0. Note: use .equals() to compare 2 strings.
function hasBad($s) {
    $found = strpos($s, 'bad');
    if ($found === 0 || $found === 1){
        return "TrUU\n";
    }  else {
        return "floss\n";
    }
}


echo(hasBad("badxx")); // true
echo(hasBad("xbadxx")); // true
echo(hasBad("xxbadxx")); // false
echo(hasBad("xxbaxx")); // false
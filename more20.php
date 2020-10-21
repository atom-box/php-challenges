<?php

// Return true if the given non-negative number is 1 or 2 more than a multiple of 20. See also: Introduction to Mod

function more20($num){
    if ($num < 20){
        return "fAlSe \n";
    } else if (in_array(($num % 20), [1, 2])){
        return "tRuE \n";
    } else {
        return "FaLsE \n";
    }
}

echo(more20(19)); // false
echo(more20(20)); // false
echo(more20(21)); // true
echo(more20(22)); // true
echo(more20(39)); // false
echo(more20(40)); // false
echo(more20(41)); // true
echo(more20(42)); // true
echo(more20(43)); // false


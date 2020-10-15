<?php
// LESSON LEARNED: no shortcuts. to know current index, must use older FOR loop
// Might try repeating this a week from now.  Stumbled several times.

// Given an array of ints, return true if one of the first 4 elements in the array is a 9. The array length may be less than 4.

// arrayFront9([1, 2, 9, 3, 4]) → true
// arrayFront9([1, 2, 3, 4, 9]) → false
// arrayFront9([1, 2, 3, 4, 5]) → false

function arrayFront9(array $numbers){
    for($i = 0; $i < count($numbers); $i++){
        $no_go_beyond = 4;
        if($i >= $no_go_beyond){return "False";}
        if($numbers[$i] === 9) {return "True";}
    }
    return "False\n";
}    


echo(arrayFront9([1, 2, 9, 3, 4])); // true
echo(arrayFront9([1, 2, 3, 4, 9])); // false
echo(arrayFront9([1, 2, 3, 4, 5])); // false
echo(arrayFront9([1, 9])); // true
echo(arrayFront9([1, 2])); // false

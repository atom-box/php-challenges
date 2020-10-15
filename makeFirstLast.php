<?php

// Given an array of ints, return true if the array is length 1 or more, and the first element and the last element are equal.

// sameFirstLast([1, 2, 3]) → false
// sameFirstLast([1, 2, 3, 1]) → true
// sameFirstLast([1, 2, 1]) → true

function sameFirstLast($nums){
    $length = count($nums);
    if (!$length) {return 'fals';} // no items
    if ($nums[0] != $nums[$length -1]) {return 'fals';} // no items
    return 'troo';
}

echo(sameFirstLast([1, 2, 3, 1])."\n"); //  true
echo(sameFirstLast([1000, 1000])."\n"); //  true
echo(sameFirstLast([])."\n"); //  false
echo(sameFirstLast([1, 2, 3])."\n"); //  false

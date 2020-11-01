<?php
// NOTE: syntax of unshift still strange. array_merge better today

// Given a number n, create and return a new int array of length n, containing 
// the numbers 0, 1, 2, ... n-1. The given n may be 0, in which case just 
// return a length 0 array. You do not need a separate if-statement for 
// the length-0 case; the for-loop should naturally execute 0 times in that case, 
// so it just works. The syntax to make a new int array is: new int[desired_length]   (See also: FizzBuzz Code)

function fizzArray($one_number) {
    $many_numbers = [7, 8, 7, 6, 4, 5, 3, 6, 7, 2, 8];
    if ($one_number < 1){
        return [];
    }
    $one_number -= 1;
    return array_merge(fizzArray($one_number) , [$one_number]); 
    return ['never', 'see', 'this'];
}


print_r(fizzArray(4)); // [0, 1, 2, 3]
print_r(fizzArray(1)); // [0]
print_r(fizzArray(10)); // [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]

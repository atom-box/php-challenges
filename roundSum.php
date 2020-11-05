<?php

// For this problem, we'll round an int value 
// up to the next multiple of 10 if its rightmost 
// digit is 5 or more, so 15 rounds up to 20. 
// Alternately, round down to the previous multiple 
// of 10 if its rightmost digit is less than 5, 
// so 12 rounds down to 10. Given 3 ints, a b c, 
// return the sum of their rounded values. To 
// avoid code repetition, write a separate helper 
// "public int round10(int num) {" and call it 3 
//     times. Write the helper entirely below and 
//     at the same indent level as roundSum().

function fiveAndUp($rawInt){
    $tailDigit = $rawInt % 10;
    if ( in_array($tailDigit,   [0, 1, 2, 3, 4]  ) ){
        return false;
    }
    return true;
}

function rounder(int $rawInt){
    $tailDigit = $rawInt % 10;
    if ( in_array($tailDigit,   [0, 1, 2, 3, 4]  ) ){
        $roundedInt = (int)($rawInt / 10) * 10;
        echo "Rounded int is [$roundedInt]";
        return $roundedInt;
    }


    $roundedInt = $rawInt;  // TODO TODO
    return $roundedInt;
}

function roundSum($numbers){
    $sum = 0;
    foreach($numbers as $number){
        $sum += rounder($number);
    }
    return $sum;
}

echo(roundSum([16, 17, 18])."\n");  // 60
echo(roundSum([12, 13, 14])."\n");  // 30
echo(roundSum([6, 4, 4])."\n");  // 10

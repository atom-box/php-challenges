<?php

// For this problem, we'll round an int value 
// up or down as we sum it


// TODO: This is not DRY
function rounder(int $rawInt){
    $tailDigit = $rawInt % 10;
    if ( in_array($tailDigit,   [0, 1, 2, 3, 4]  ) ){
        $roundedInt = (int)($rawInt / 10) * 10;
        echo "Rounded int is [$roundedInt]";
        return $roundedInt;
    } 
    $roundedInt = (int)($rawInt / 10);
    $roundedInt += 1;
    $roundedInt *= 10;
    echo "Rounded int is [$roundedInt]";
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

<?php

// We have a number of bunnies and each bunny has two big floppy ears. 
// We want to compute the total number of ears across all the 
// bunnies recursively (without loops or multiplication).

function bunnyEars($n){
    if ($n == 0){ return 0;}
    $n -= 1;
    return 2 + bunnyEars($n);
}


echo(bunnyEars(0)."\n"); // 0
echo(bunnyEars(1)."\n"); // 2
echo(bunnyEars(2)."\n"); // 4
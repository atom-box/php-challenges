<?php

// Given n of 1 or more, return the factorial of n, which is n * (n-1) * (n-2) ... 1. 
// Compute the result recursively (without loops).

function factorial($num){
    if ($num < 0){ return "Please enter a non-negative integer.";}
    if ($num == 0){
        return 1;   
    } else {
        return $num * factorial($num - 1);
    }
}

echo(factorial(0)."\n"); // 1
echo(factorial(1)."\n"); // 1
echo(factorial(2)."\n"); // 2
echo(factorial(3)."\n"); // 6
echo(factorial(-1)."\n"); // 6
echo(factorial(58)."\n"); // 6
<?php

// Given a string, compute recursively (no loops) a new string where all appearances of "pi" have been replaced by "3.14".
// SOLUTION COMMENT: I WENT TO SEDGEWICK FOR HIS DIAGRAMS OF A NAIVE STRING SEARCH
// https://www.cs.princeton.edu/courses/archive/spring14/cos226/lectures/53SubstringSearch.pdf 

// function toDigs($bite){
//     echo("received...[$bite]\n");
//     $BASE = 'pi';
//     $BETTER = '3.14';
//     if ($BASE === strtolower($bite)){
//         return $BETTER;
//     } else {
//         return $bite;
//     }
// }


function changePi($dirty){
    $bigness = strlen($dirty);
    $clean = '';
    $swap2 = '3.14';
    $swap1 = 'pi'; // CANNOT BE EMPTY
    for( $i = 0; $i < strlen($dirty); $i++){
        $found = false; // bad matchups will flip
        for( $j = $i; $j < ($i + strlen($swap1) - 1) ; $j++){
            $clean .= $dirty[$j];


        }

    }
    return $clean;
}

echo(changePi("xpix")."\n"); // "x3.14x"
echo(changePi("pipi")."\n"); // "3.143.14"
echo(changePi("pip")."\n"); // "3.14p"


 
Idea is check the Princeton brute string SEARCH
https://algs4.cs.princeton.edu/53substring/Brute.java.html 



<?php

// We want make a package of goal kilos of chocolate. We have small bars (1 kilo each) and 
// big bars (5 kilos each). Return the number of small bars to use, assuming we always use big bars before 
// small bars. Return -1 if it can't be done.

function makeChocolate($actual_tiny, $actual_big, $goal){
    $needed_tiny = $goal - ($actual_big * 5);
    if ($needed_tiny <= $actual_tiny){
        return $needed_tiny;
    }
    return -1;
}

echo(makeChocolate(4, 1, 9)."\n"); // 4
echo(makeChocolate(4, 1, 10)."\n"); // -1
echo(makeChocolate(4, 1, 7)."\n"); // 2


// Intended as a compliment but a comparison that will make neither happy: the vivacity of KROQ in the 80s is gone but we now have KCRW's Henry Rollins on Saturday Nights. 

<?php
// We have bunnies standing in a 
// line, numbered 1, 2, ... The odd bunnies (1, 3, ..) have 
// the normal 2 ears. The even bunnies (2, 4, ..) have 3 ears.
// Recursively return the number of "ears" in the 
// bunny line 1, 2, ... n (without loops or multiplication).

function bunnyEars2($bunnies){
    switch (($bunnies -1) % 2){
        case -1:
            return 0;
            break;
        case 0:
            $bunnies -= 1;
            return 2 + bunnyEars2($bunnies) ;
            break;
        case 1:
            $bunnies -= 1;
            return 3 + bunnyEars2($bunnies) ;
    }    
}


echo(bunnyEars2(0)."\n"); // 0
echo(bunnyEars2(2)."\n"); // 5 = 2 3 
echo(bunnyEars2(3)."\n"); // 7 = 2 3 2 
echo(bunnyEars2(7)."\n"); // 18 = 2 3 2 3 2 3 2  
echo(bunnyEars2(8)."\n"); // 19 = 2 3 2 3 2 3 2 3  


<?php

// Return the number of times that the string "code" appears anywhere in 
// the given string, except we'll accept any letter for the 'd', 
// so "cope" and "cooe" count.

interface Counter {
    public function countCode(string $s) : int ;
}

class StringUtility implements Counter {
    public function countCode(string $s) : int {
        return 99;
    }
 
}

$editor = new StringUtility();

echo($editor->countCode("aaacodebbb")."\n"); // 1
echo($editor->countCode("codexxcode")."\n"); // 2
echo($editor->countCode("cozexxcope")."\n"); // 2
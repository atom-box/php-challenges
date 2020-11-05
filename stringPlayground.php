<?php 

$singleQuoted = 'My dog
has fleas.
But it is a 
cat.';

echo $singleQuoted;

$doubleQuoted = "My dog
has fleas.
But it is a 
cat.";

echo $doubleQuoted;

$phpBreaks = 'My '. PHP_EOL . 'dog' . PHP_EOL . 'has ' . PHP_EOL . 'fleas' . PHP_EOL . 'but is happy'. PHP_EOL ;
// NOT SURE WHY EXAMPLE HAD THIS.  IS SUPERFLUOUS.
// MAYBE IT IS NEEDED WHEN DISPLAYING IN A BROWSER
// $phpBreaks = nl2br($phpBreaks);
echo $phpBreaks;

$input_string = "Theatergoer's Guide to Shakespeare";
echo('');
echo substr($input_string,2)."\n";
echo('');
echo substr($input_string,2,4)."\n";
echo('');
echo substr($input_string,-2)."\n";
echo('');
echo substr($input_string,-2,4)."\n";
echo('');
echo substr($input_string,2,-4)."\n";
echo('');
echo substr($input_string,-4,-2)."\n";
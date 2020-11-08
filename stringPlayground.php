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

$input_string = "ThatLazyfoxjumpedoverthed@mnfenceagain!";
echo('substr($input_string,2)=====> ');
echo substr($input_string,2)."\n";
echo('substr($input_string,2,4)=====> ');
echo substr($input_string,2,4)."\n";
echo('substr($input_string,-2)=====> ');
echo substr($input_string,-2)."\n";
echo('substr($input_string,-2,4)=====> ');
echo substr($input_string,-2,4)."\n";
echo('substr($input_string,2,-4)=====> ');
echo substr($input_string,2,-4)."\n";
echo('substr($input_string,-4,-2)=====> ');
echo substr($input_string,-4,-2)."\n";
echo('---'."\n");
$num = 42;
$bool = false;
$array = ['horse', 'tree'];
echo((bool)($bool));

echo "Let us ES\\CA\\PE\n";
echo "Here is the top row: !@#\$%^&*()_+-=\n";

 
$table_name_array = array("user","student","event","task"); 
foreach($table_name_array as $key=>$value) { 
$table_name = implode($table_name_array, ' SHEEP '); 
} 
echo "Table Name\n";
print $table_name;  

// RegEx match
$founds = [];
$lyrics = 'Fitter, happier, more productive
Comfortable (not drinking too much)
Regular exercise at the gym (3 days a week)
Getting on better with your associate employee contemporaries
At ease
Eating well (no more microwave dinners and saturated fats)
A patient, better driver
A safer car (baby smiling in back seat)';
$pattern = "/[a-z][a-z][a-z][a-z][a-z]/i";

preg_match($pattern, $lyrics, $founds);
echo "Found this many ". count($founds) ."\n"; 
print_r($founds);

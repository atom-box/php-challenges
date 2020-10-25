<?php

// Try to use all eleven array methods described at phppot

$row1 = ['name' => 'Martin', 'subject' => 'meteorology', 'grade' => 88];
$row2 = ['name' => 'Janet', 'subject' => 'meteorology', 'grade' => 70];
$row3 = ['name' => 'al Hadj', 'subject' => 'meteorology', 'grade' => 97];
$gradebook = [$row1, $row2, $row3];

$conifers = ['spruce', 'white pine', 'red pine']; 
$deciduous = ['pin oak', 'swamp oak', 'silver maple', 'ginko', 'sycamore']; 
$animals = ['goat', 'pig', 'sheep', 'dog', 'spider', 'cat', 'foal', 'mare', 'bull', 'cow', 'chicken', 'chick'];
$horsepower = [887, 763, 678, 908, 920, 934, 878, 767, 892, 727, 812, 763, 498, 450, 347, 287, 623, 478, 509, 342, 347, 128, 937, 468, 791, 624];

// Return every element from x to y
$thing = array_slice($deciduous, 2, 3);
echo('Array slice');
print_r($thing );
echo("\n");

// Create a range of all of the election years
$thing = range(1776, 2004, 4);
echo('Range');
print_r($thing );
echo("\n");

// Do a splice BUT mutate and replace some elements in original array
$took_out = array_splice($animals, 2, 5, ['OGRE', 'OGRE', 'OGRE', 'OGRE']);
echo('Splice will REPLACE   P    P  ');
echo("\nThe removed: \n");
print_r($took_out );
echo("\nHow the original looks now:\n");
print_r($animals);
echo("\n");

// Do chops
$thing = array_chunk($horsepower, 4);
echo('');
print_r($thing );
echo("\n");


// 
// $thing = 
// echo('');
// print_r($thing );
// echo("\n");


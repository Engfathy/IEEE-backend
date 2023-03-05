<?php
$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d = "$a $b $c";
echo $d;
// Method Two
$d= "{$a} {$b} {$c}";
echo $d;

// Method Three
$d=$a . " " . $b . " " . $c;
echo $d;

// // Method Four
$a .= " $b";
$a .= " $c";
$d=$a;
echo $d;

// echo $d; // Elzero Web School
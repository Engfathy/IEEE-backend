<?php

// // Code 1
// $a = $b;

// // Code 2
// $f = file("Not_A_File");

// // Code 3
// include("Not_A_File");


// ========> solution

// Code 1
$a = @$b or die("variable is not here come another time");

// Code 2
$f = @file("Not_A_File") or die("sorrrrrrrrrrry");

// Code 3
@include("Not_A_File") or die("error");
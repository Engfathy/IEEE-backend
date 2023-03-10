<?php
// Test Case 1
$a = 100;
$b = 200;
$c = 300;

if($a < $b || $a < $c){
    echo "A no larger than B or C"
}

// A Is Not Larger Than B Or C
// Test Case 2
$a = 200;
$b = 100;
$c = 300;
if($a > $b){
    echo "A Is Larger Than B"
}
// A Is Larger Than B
// Test Case 3
$a = 200;
$b = 200;
$c = 100;

if($a > $c){
    echo "A Is Larger Than C"
}
// A Is Larger Than c
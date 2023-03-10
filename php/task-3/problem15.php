<?php
$mix = [1, 2, "A", "B", "C", 3, 4];
$count=0;
$count1=0;
foreach($mix as $value){
    if(gettype($value)=="integer"){
        echo "$value <br>";
        $count++;
    }else{
        $count1++;
    }
}
echo "$count Numbers Printed <br>";
echo "$count1 Letters Ignored <br>";

// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"
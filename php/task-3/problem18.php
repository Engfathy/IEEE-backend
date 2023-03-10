<?php

$help_num = 4;
  $nums = [2, 4, 5, 6, 10];
  
  //-------------------------with foreach
  foreach($nums as $index => $value){
    echo $value . "+" . ($nums[$help_num -$index]) . "=" . ($value +$nums[$help_num -$index])."<br>";
  }
  

// Output
// "2 + 10 = 12"
// "4 + 6 = 10"
// "5 + 5 = 10"
// "6 + 4 = 10"
// "10 + 2 = 12"
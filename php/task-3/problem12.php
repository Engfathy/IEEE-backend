<?php
 $start = 10;
 $end = 0;
 $stop = 3;
 for($start;$start >= $stop;$start--){
     if($start < 10){
         echo $end . $start ."<br>";
     }else{
         echo $start . "<br>";
     }
 }
 
 // Needed Output with for loop
 // 10
 // 09
 // 08
 // 07
 // 06
 // 05
 // 04
 // 03
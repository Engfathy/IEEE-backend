<?php
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];
for($start;$start < count($mix) -1;){
  $start++;
  if(gettype($mix[$start]) == "integer"){
      echo $mix[$start]."<br>";
  }
}
// // Output
// 2
// 3
// 4
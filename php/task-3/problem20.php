<?php
 //Write Function Content Here
function get_arguments(...$arr){
    $all="";
   foreach($arr as $value){
    $all.=" $value";
   }
      return $all;
}
function get_arguments(...$arr){
    $all="";
   foreach(func_get_args() as $value){
    $all.=" $value";
   }
      return $all;
}
// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP
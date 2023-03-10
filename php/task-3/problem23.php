<?php
function check_status($a, $b, $c) {
    //write your code here
    $name;
    $age;
    $status;
    foreach(func_get_args() as $value ){
        if(gettype($value)=="integer") $age =$value;
        if(gettype($value)=="string") $name =$value;
        if(gettype($value)=="boolean") $status =$value;
    }
    return "Hello $name, Your Age Is $age, You Are ". ($status== true?"Available":"Not Available") ." For Hire";
  }
  
  // Needed Output
  echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
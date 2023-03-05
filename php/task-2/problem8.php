<?php
$a = "10";

// Needed Ouput
// 10
// "integer"
// 10
// "integer"
// 10
// "integer"

$a = "10";
  echo +$a;
  echo gettype(+$a);
  //------------------
  echo -(-$a);
  echo gettype(-(-$a));
  //------------------
  echo settype($a,"integer");
  echo gettype($a);
  //----------------------
  echo intval($a);
  echo gettype(intval($a));
  //------------------------
  echo (int) $a;
  echo gettype((int) $a);


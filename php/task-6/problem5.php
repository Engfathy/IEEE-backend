<?php
// With time() Function
echo time() . "<br>"; // 1668020233

//first
$t = getdate();
echo $t["0"]. "<br>";

//second
echo strtotime(date("Y-m-d H:i:s")). "<br>";
//third

$datetime = new DateTime(date("Y-m-d H:i:s"));
$timestamp = $datetime->getTimestamp();
echo $timestamp; 


// Output Needed With Other Ways
// 1668020233
// 1668020233
// 1668020233
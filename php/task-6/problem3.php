<?php
 $date = "1990-10-01";
 date_default_timezone_set("Africa/Cairo");
 $time =strtotime($date,strtotime("1980-1-1"));
 echo "From Epoch Time Till 1990-10-01 Is Approximately ".round($time / 60 / 60 / 24,1) . " Days"."<br>";
 echo "From Epoch Time Till 1990-10-01 Is Approximately ".round($time / 60 / 60 / 24 /365,1) . " Years";
 // Output Needed
 // "From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
 // "From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"
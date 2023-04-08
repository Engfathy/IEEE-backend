<?php

$date = "1990-10-01";
date_default_timezone_set("Africa/Cairo");
$start = date_create("1970-01-01");
$end = date_create($date);

$diff = date_diff($start, $end);

echo '<pre>';
print_r($diff);
echo '</pre>';
echo "From Epoch Time Till 1990-10-01 Is Approximately ".$diff->days. " Days"."<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately ".$diff->y. " Years";
// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"
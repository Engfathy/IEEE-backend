<?php

echo "Hello PHP";
echo '<br>';
echo "Hello PHP";

// Needed Output
//1
//integer

//                   solution

echo (bool)"Hello PHP"; // 1
echo gettype( (int) ((bool)'<br>')); // integer

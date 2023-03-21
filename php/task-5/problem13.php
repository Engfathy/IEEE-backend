<?php
$filename = "elzero.txt";
$content = file_get_contents($filename);
$content = str_replace("Osamaa", "Elzero", $content);
file_put_contents($filename, $content);
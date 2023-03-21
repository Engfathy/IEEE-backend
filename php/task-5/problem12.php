<?php
$fileHandle = fopen("elzero.txt", "r");
$content = fgets($fileHandle) . fgets($fileHandle);
fclose($fileHandle);
echo implode(" ", explode("\n", $content));
echo "\n";

$fileHandle = fopen("elzero.txt", "r");
$content = fgets($fileHandle) . fgets($fileHandle);
fclose($fileHandle);
echo str_replace("\n", " ", $content);
echo "\n";

$fileHandle = fopen("elzero.txt", "r");
echo fgets($fileHandle) . fgets($fileHandle);
fclose($fileHandle);
echo "\n";

$fileHandle = fopen("elzero.txt", "r");
echo fgets($fileHandle, 1024) . fgets($fileHandle, 1024);
fclose($fileHandle);
echo "\n";
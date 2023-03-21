<?php
echo number_format(round(disk_total_space("C:") / 1024 / 1024 / 1024/1024,2),2) . "<br>";
echo number_format(round(disk_total_space("D:") / 1024 / 1024 / 1024/1024,2),2) . "<br>";
// Output Examples
// "1.37 Terabyte"
// "0.46 Terabyte"
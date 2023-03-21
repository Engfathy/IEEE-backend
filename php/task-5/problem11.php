<?php
echo basename(__FILE__);
echo '<br>';
echo pathinfo(__FILE__,PATHINFO_BASENAME);

echo '<br>';
echo pathinfo(__FILE__)["basename"] . "<br>";
echo basename(realpath(__FILE__));

echo '<br>';
<?php
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";


if (filter_var($url4, FILTER_VALIDATE_URL)) { // Or ID "258"

    echo "A Valid URL";

  } else {

    echo "Not A Valid URL";

  }
// Output
// "Not A Valid URL"
// "Not A Valid URL"
// "A Valid URL"
// "Not A Valid URL"
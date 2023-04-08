<?php

$date = "2005-10-02";
  $ob =date_create($date);
  
  date_default_timezone_set("Africa/Cairo");
  echo date_default_timezone_get() . "<br>" ;

  date_add($ob, date_interval_create_from_date_string("15 hours 15 mins 15 seconds"));

  echo date_format($ob,"Y, F, l 'dS' H:i:s" );
// // Output Needed
// "Africa/Cairo"
// "2005, October, Sunday '02nd' 15:15:15"
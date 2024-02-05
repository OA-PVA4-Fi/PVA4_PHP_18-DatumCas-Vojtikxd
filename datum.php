<?php

//1
echo date("Y-m-d");
echo date("YYYY-MM-DD");
echo date("H:i:s");
echo date("Y-m-d H:i:s");
echo date("vzor: d. m. Y h:i");

//2
$today = strtotime("today");
$nextday = strtotime("+1day");
$firstdayofmonth = strtotime("first day of next month");
$lastdayofmonth = strtotime("last day of next month");

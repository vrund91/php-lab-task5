<?php

$d = date_create("2024-08-13");
date_sub($d,date_interval_create_from_date_string("1 days"));
echo date_format($d,"Y-m-d");

?>
<?php

$date1=date_create("2013-03-15");
$date2=date_create("2013-12-12");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%d days %M months %Y years / %H hours %M minutes %S seconds");

?>
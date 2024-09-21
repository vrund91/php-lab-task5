<?php
 
$datestring = '2024-08-13';

$date = strtotime($datestring);
 
$lastdate = strtotime(date("Y-m-t", $date ));

$day = date("l", $lastdate);

echo $day;

?>

<?php

$eventYear = 2024;
$eventMonth = 12;
$eventDay = 31;
$eventHour = 23;
$eventMinute = 59;
$eventSecond = 59;

$now = time();
$eventTime = mktime($eventHour, $eventMinute, $eventSecond, $eventMonth, $eventDay, $eventYear);

$timeRemaining = $eventTime - $now;

if ($timeRemaining > 0) {
    $days = floor($timeRemaining / (60 * 60 * 24));
    $hours = floor(($timeRemaining % (60 * 60 * 24)) / (60 * 60));
    $minutes = floor(($timeRemaining % (60 * 60)) / 60);
    $seconds = $timeRemaining % 60;

    echo "Time remaining until the event: $days days, $hours hours, $minutes minutes, $seconds seconds";
} else {
    echo "The event has already passed.";
}

?>

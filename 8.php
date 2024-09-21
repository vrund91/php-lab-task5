<?php

$givenYear = 2023;
$givenMonth = 8;
$givenDay = 15;

$now = time();
$givenDate = mktime(0, 0, 0, $givenMonth, $givenDay, $givenYear);

$timeDiff = $now - $givenDate;

if ($timeDiff > 0) {
    $secondsPerMinute = 60;
    $secondsPerHour = 60 * $secondsPerMinute;
    $secondsPerDay = 24 * $secondsPerHour;
    $secondsPerMonth = 30 * $secondsPerDay;
    $secondsPerYear = 365 * $secondsPerDay;

    if ($timeDiff >= $secondsPerYear) {
        $years = intdiv($timeDiff, $secondsPerYear);
        echo "$years year" . ($years > 1 ? "s" : "") . " ago";
    } elseif ($timeDiff >= $secondsPerMonth) {
        $months = intdiv($timeDiff, $secondsPerMonth);
        echo "$months month" . ($months > 1 ? "s" : "") . " ago";
    } elseif ($timeDiff >= $secondsPerDay) {
        $days = intdiv($timeDiff, $secondsPerDay);
        echo "$days day" . ($days > 1 ? "s" : "") . " ago";
    } elseif ($timeDiff >= $secondsPerHour) {
        $hours = intdiv($timeDiff, $secondsPerHour);
        echo "$hours hour" . ($hours > 1 ? "s" : "") . " ago";
    } elseif ($timeDiff >= $secondsPerMinute) {
        $minutes = intdiv($timeDiff, $secondsPerMinute);
        echo "$minutes minute" . ($minutes > 1 ? "s" : "") . " ago";
    } else {
        $seconds = $timeDiff;
        echo "$seconds second" . ($seconds > 1 ? "s" : "") . " ago";
    }
} else {
    echo "The given date is in the future.";
}

?>

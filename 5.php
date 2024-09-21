<?php

$birthYear = 2004;
$birthMonth = 11;
$birthDay = 22;

$today = time();
$birthDate = mktime(0, 0, 0, $birthMonth, $birthDay, $birthYear);

$ageYears = date('Y', $today) - date('Y', $birthDate);
$ageMonths = date('m', $today) - date('m', $birthDate);
$ageDays = date('d', $today) - date('d', $birthDate);

if ($ageDays < 0) {
    $ageMonths--;
    $ageDays += date('t', $birthDate); 
}

if ($ageMonths < 0) {
    $ageYears--;
    $ageMonths += 12;
}

echo "Age: $ageYears years, $ageMonths months, $ageDays days";

?>

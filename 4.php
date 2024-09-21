<?php

$birthdayMonth = 11;
$birthdayDay = 22;
$today = time();

$thisYearBirthday = mktime(0, 0, 0, $birthdayMonth, $birthdayDay, date('Y'));
if ($today > $thisYearBirthday) {
    $thisYearBirthday = mktime(0, 0, 0, $birthdayMonth, $birthdayDay, date('Y') + 1);
}
$secondsUntilBirthday = $thisYearBirthday - $today;
$daysUntilBirthday = floor($secondsUntilBirthday / (60 * 60 * 24));
echo "Days until birthday: $daysUntilBirthday";

?>

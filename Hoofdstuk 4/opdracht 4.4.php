<?php
/**
 * User: Steven Lee
 * Date: 18-05-2020
 * Time: 20:20 PM
 * File: opdracht4.4.php
 */
?>

<?php
include "../Inlcude/header.php"
?>

<?php

$weekDay = "";
$weekCalender = "";

for ($i = 0; $i < 7; $i++) {
    $dayWeek = date('w', strtotime("+$i days"));

    if ($dayWeek == 1)
    {
        $weekDay = "Monday";
    }

    else if ($dayWeek == 2)
    {
        $weekDay = "Tuesday";
    }

    else if ($dayWeek == 3)
    {
        $weekDay = "Wednesday";
    }

    else if ($dayWeek == 4)
    {
        $weekDay = "Thursday";
    }

    else if ($dayWeek == 5)
    {
        $weekDay = "Friday";
    }

    else if ($dayWeek == 6)
    {
        $weekDay = "Saturday";
    }

    else if ($dayWeek == 0)
    {
        $weekDay = "Sunday";
    }
    $weekCalender .= ("Day " . $i . " is " . $weekDay . " " . date("d-m-Y", strtotime("+$i days")) . "<br>");
}
    echo $weekCalender;
?>

<?php
include "../Inlcude/Footer.php"
?>
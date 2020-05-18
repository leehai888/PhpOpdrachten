<?php
/**
 * User: Steven Lee
 * Date: 18-05-2020
 * Time: 16:20 PM
 * File: opdracht4.3.php
 */
?>

<?php
include "../Inlcude/header.php";
?>

<?php
//ik declareer task 2 als variabele start van mijn while loop van 20 naar 0
$taak2 = "Lancering in: ";
$i = 19;
while($i > 0)
{
    $taak2 .= $i.',';
    $i--;
}

//hier maak ik een for loop ipv while loop van de counter
$taak3 = "Lancering in: ";
for($i2 = 19; $i2 >0; $i2--)
    $taak3 .= $i2.",";

// hier declareer ik een var task 4 en via de while loop maakt het 6 rondes
$taak4 = "";
$i3 = 1;
while($i3 <=6)
{
    $taak4 .= "<h$i3>Dit is de ". $i3. "e iteratie<h$i3>";
    $i3++;
}

//hier heb ik een for loop die 10 rondes maakt
$taak5 = " ";
$tableBegin = "<table>";
$tableEnd = "</table>";
$taak5 = $tableBegin;
for($i4 = 1; $i4 <= 10; $i4++)
{
    $taak5 .= "<tr><td> Dit is de " . $i4 . "e iteratie</td></tr>";
}
$taak5 .= $tableEnd;

// while loop die aftelt van mijn geboorte jaar
$taak6 = " ";
$i5 = 22;
$year = 2020;
while($year >= 1998)
{
    if ($i5 == 22)
    {
        $taak6 .= "<p> In " . $year . " word ik " .$i5 . " jaar oud</p>";
    }
    else
    {
        $taak6 .= "<p> In " . $year . " was ik " .$i5 . " jaar oud</p>";
    }
    $i5--;
    $year--;
}

// dit is een while loop van mijn levens fase
$taak7 = " ";
$i6 = 22;
$year2 = 2020;

while($year2 >= 1998)
{
    if($year2 == 2020)
    {
        $taak7 .= "<p> In " .$year2 ." word ik " .$i6 ." jaar oud </p>";
    }
    else if($year2 == 2018)
    {
        $taak7 .= "<p> In " .$year2 ." was ik " .$i6 ." jaar oud en werd ik een volwasenen </p>";
    }
    else if($year2 == 2016)
    {
        $taak7 .= "<p> In " .$year2 ." was ik " .$i6 ." jaar oud en werd ik een adolescent </p>";
    }
    else if($year2 == 2010)
    {
        $taak7 .= "<p> In " .$year2 ." was ik " .$i6 ." jaar oud en werd ik een puber </p>";
    }
    else if($year2 == 2006)
    {
        $taak7 .= "<p> In " .$year2 ." was ik " .$i6 ." jaar oud en werd ik een tiener </p>";
    }
    else if($year2 == 2002)
    {
        $taak7 .= "<p> In " .$year2 ." was ik " .$i6 ." jaar oud en werd ik een kleuter </p>";
    }
    else if($year2 == 2000)
    {
        $taak7 .= "<p> In " .$year2 ." was ik " .$i6 ." jaar oud en werd ik een peuter </p>";
    }
    else if($year2 == 1998)
    {
        $taak7 .= "<p> In " .$year2 ." ben ik " .$i6 ." geboren en was ik een baby </p>";
    }
    $i6--;
    $year2--;
}
?>

<?php
include "../Inlcude/Footer.php";
?>
<?php
/**
 * User: Steven Lee
 * Date: 1-03-2020
 * Time: 14:20 PM
 * File: opdracht3.2.php
 */
?>

<?php
include "../Inlcude/header.php"
?>

<?php
$courseName = "Engels";
$teacherName = "";

switch ($courseName)
    // dit zijn de lerearen en de vakken die zei geven.
{
    case    "Nederlands":
        $teacherName = "Meneer van de Ende";
        break;

    case    "PHP":
        $teacherName = "Meneer Saebu";
        break;

    case    "Engels":
        $teacherName = "Meneer Giessen";
        break;

    case    "Javascript":
        $teacherName = "Meneer Evers";
        break;

    case    "ASP":
        $teacherName = "Meneer van Meer";
        break;

    case    "SQL":
        $teacherName = "Meneer van de Wetering";
        break;

    case    "ComputerTekenen":
        $teacherName = "Meneer van de Berg";
        break;

    case    "Burgerschap":
        $teacherName = "Mevrouw de Ruiter";
        break;

    case    "Modelleren":
        $teacherName = "Meneer van Bijnen";
        break;

    case    "DigitaleVaardigheden":
        $teacherName = "Mevrouw Pielage";
        break;

}

echo '<p>Voor het vak <b>'.$courseName.'</b> heb je <b>'.$teacherName.'</b> als docent.'
?>


<?php
include "../Inlcude/Footer.php"
?>
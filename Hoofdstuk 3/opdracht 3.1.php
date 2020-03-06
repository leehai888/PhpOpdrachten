<?php
/**
 * User: Steven Lee
 * Date: 30-02-2020
 * Time: 11:06 PM
 * File: opdracht3.1.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>

    </title>

    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta charset="utf-8">
    <link href="../stylesheet.css" type="text/css" rel="stylesheet">

</head>
<body>
    <?php
    $elf = "<u>Elfstedentocht</u>";
    $alve = "<u>Alvestêdetocht</u>";
    $km = "<u>200</u>";
    $schaats = "<u>schaatstocht</u>";
    $natuur = "<u>natuurijs</u>";
    $kvdfes = "<u>Koninklijke Vereniging De Friesche Elf Steden</u>";
    $leeuw = "<u>Leeuwarden</u>";
    $fries = "<u>Friesland</u>";
    $num = "<u>15</u>";
    $jaar = "<u>1909</u>";
    $verhaal = "De $elf (Fries: $alve) is een $km
                kilometer lange $schaats over $natuur die wordt
                georganiseerd door de $kvdfes. $leeuw, de hoofdstad van $fries, is start- en
                aankomstplaats. De $elf is inmiddels $num maal
                verreden en werd voor het eerst in $jaar gereden en wordt
                maximaal 1 keer per winter gehouden.";
    echo ("<p>$verhaal</p>");
    echo ("<br>");

    $verhaal2 = "De " . $elf .  " (Fries: " . $alve . ") is een " . $km . " kilometer lange " . $schaats . " over " . $natuur . " die wordt
                georganiseerd door de " . $kvdfes .". " . $leeuw . ",  de hoofdstad van " . $fries . ",  is start- en
                aankomstplaats. De " . $elf . " is inmiddels " . $num . " maal
                verreden en werd voor het eerst in " . $jaar . " gereden en wordt
                maximaal 1 keer per winter gehouden.";
    echo ("<p>$verhaal2</p>");
    ?>
    <button><a href="../index.php">Home</a></button>
</body>
</html>
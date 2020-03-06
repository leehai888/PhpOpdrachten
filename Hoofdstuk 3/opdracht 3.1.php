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
    $elfStedenTocht = "<u>Elfstedentocht</u>";
    $alveStede = "<u>Alvestêdetocht</u>";
    $km = "<u>200</u>";
    $schaatsen = "<u>schaatstocht</u>";
    $nIce = "<u>natuurijs</u>";
    $Koninklijk = "<u>Koninklijke Vereniging De Friesche Elf Steden</u>";
    $leeuw = "<u>Leeuwarden</u>";
    $fries = "<u>Friesland</u>";
    $nummer = "<u>15</u>";
    $jaar = "<u>1909</u>";
    $verhaal = "De $elfStedenTocht (Fries: $alveStede) is een $km
                kilometer lange $schaatsen over $nIce die wordt
                georganiseerd door de $Koninklijk. $leeuw, de hoofdstad van $fries, is start- en
                aankomstplaats. De $elfStedenTocht is inmiddels $nummer maal
                verreden en werd voor het eerst in $jaar gereden en wordt
                maximaal 1 keer per winter gehouden.";
    echo ("<p>$verhaal</p>");
    echo ("<br>");

    $verhaal2 = "De " . $elfStedenTocht .  " (Fries: " . $alveStede . ") is een " . $km . " kilometer lange " . $schaatsen . " over " . $nIce . " die wordt
                georganiseerd door de " . $Koninklijk .". " . $leeuw . ",  de hoofdstad van " . $fries . ",  is start- en
                aankomstplaats. De " . $elfStedenTocht . " is inmiddels " . $nummer . " maal
                verreden en werd voor het eerst in " . $jaar . " gereden en wordt
                maximaal 1 keer per winter gehouden.";
    echo ("<p>$verhaal2</p>");
    ?>
    <button><a href="../index.php">Home</a></button>
</body>
</html>
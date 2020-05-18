<?php
/**
 * User: Steven Lee
 * Date: 22-03-2020
 * Time: 20:20 PM
 * File: opdracht5.1.php
 */
?>
<?php
$tableBegin = "<table>";
$tableEnd = "</table>";
//hier haal ik de gegevens van wat er ingevuld is op opdracht 5.1.php op via methode get en echo het hierdoor is het zichtbaar op deze page
$Code = $tableBegin . "<tr>" ."<td>Bedrijfsnaam: </td>" ."<td>" . $_GET["bedrijfsnaam"] ."</td>" . "</tr>";

$Code .= "<tr>" ."<td>Voornaam: </td>" ."<td>" .$_GET["Voornaam"] ."</td>" ."</tr>";

$Code .= "<tr>" ."<td>Achternaam</td>" ."<td>" .$_GET["Achternaam"] ."</td>". "</tr>";

$Code .= "<tr>" ."<td>Nummer:</td>" ."<td>" .$_GET["Nummer"] ."</td>" ."</tr>";

$Code .= "<tr>" ."<td>E-mail:</td>" ."<td>" .$_GET["E-mail"] ."</td>" ."</tr>";

$Code .= "<tr>" ."<td>Toevoeging:</td>: </td>"  ."<td>" .$_GET["Toevoeging"] ."</td>" ."</tr>" . $tableEnd;

echo $Code;

?>
<?php
include "../Inlcude/Footer.php"
?>
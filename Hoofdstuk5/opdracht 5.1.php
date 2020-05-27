<?php
/**
 * User: Steven Lee
 * Date: 22-03-2020
 * Time: 20:20 PM
 * File: opdracht5.1.php
 */
?>

<?php
include "../Inlcude/header.php"
?>

    <br><br>
    <h1>Restaria Kees Kroket</h1>
    <p>Visserstraat 12</p>
    <p>5211 DN s'Hertogenbosch</p>
    <p>073 613 6720</p>
    <p>info@restariaKeesKroket.nnl</p><br>

    <h3>Taak1</h3>
// dit is een form waar je data kan invullen meeste hebben type text somigge hebben andere type
        <form action="Form_data.php" method="get">
            <label>bedrijfsnaam: </label><br>
            <input name="bedrijfsnaam" type="text"><br><br>
            <label>Voornaam: </label><br>
            <input name="Voornaam" type="text"><br><br>
            <label>Achternaam: </label><br>
            <input name="Achternaam" type="text"><br><br>
            <label>Nummer: </label><br>
            <input name="Nummer" type="number"><br><br>
            <label>E-mail: </label><br>
            <input name="E-mail" type="email"><br><br>
            <label>Toevoeging: </label><br>
            <input name="Toevoeging" type="text"><br><br>
            <input type="submit" name="Toevoeging" value="verzend">
        </form>

    <br>
    <br>

<?php
include "../Inlcude/Footer.php"
?>
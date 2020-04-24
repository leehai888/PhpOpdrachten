<?php
/**
 * User: Steven Lee
 * Date: 31-03-2020
 * Time: 16:20 PM
 * File: opdracht5.2.php
 */
?>

<?php
include "../Inlcude/header.php"
?>


    <h2 xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"> Uitschrijfformulier KW1C </h2> <hr>


    <h1>Uitschrijfformulier KW1C</h1>
    <hr>
    <form action="Hoofdstuk5/opdracht5.2.php" method="get">
        <label>Voor en achternaam</label>
        <input name="Voor-Achternaam" type="text"><br>
        <br>
        <label>Studentennummer
        <input name="Studentennummer" type=number><br>
        <br>
        <label>Datum van uitschrijving</label>
        <input name="DatumUitschrijving" type="text"><br>
        <br>
        <label>Reden van uitschrijving</label>
        <select name="Reden">
            <option value="Geen leuke opleiding">niet wat ik dacht</option>
            <option value="Te moeilijk">Te moeilijk</option>
            <option value="Niks van berijpen">ik begrijp het niet</option>
            <option value="Switchen">Niks voor mij</option>
        </select><br>
        <br>
        <label>Leerjaar</label><br>
        <br>
        <input name="Leerjaar" type="radio" value="1e leerjaar">1e leerjaar</input><br>
        <input name="Leerjaar" type="radio" value="2e leerjaar">2e leerjaar</input><br>
        <input name="Leerjaar" type="radio" value="3e leerjaar">3e leerjaar</input><br>
        <input name="Aanmelden" type="checkbox" value="ja">Ik wil me aanmeldden bij de succesklas<br>
        <input name="Verwijder" type="checkbox" value="ja">verwijder gegevens van mij uit het systeem<br>
        <br>
        <label>reden van uitschrijving</label><br>
        <input name="Bericht" type="text"><br>

        <input type="submit" name="verzenden" value="verzenden">
    </form>

    <br>

<?php
include "../Inlcude/Footer.php"
?>
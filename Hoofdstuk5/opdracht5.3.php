<?php
/**
 * User: Steven Lee
 * Date: 5-04-2020
 * Time: 14:20 PM
 * File: opdracht5.3.php
 */
?>

<?php
include "../Inlcude/header.php"
?>


    <form action="Form_Data5.3.php"method="post">
        <hr>
        <label>Corona enquete:</label><br>
        <hr>
        <br>
        <label>Wat is je naam en achternaam:</label><input name="FirstLastName" type="text"><br>
        <label>Wat is je leeftijd:</label><input name="Age" type="number"><br>
        <label>Gemeente:</label>
        <select name="Town">
            <option value="Den Bosch">Den Bosch</option>
            <option value="Tilburg">Tilburg</option>
            <option value="Uden">Uden</option>
            <option value="waalwijk">waalwijk</option>
        </select><br>
        <label>Aantal inwoners gemeente:</label><input name="citizens" type="number"><br>
        <label>zijn er bekenden die besmet zijn in je omgeving</label>
        <input name="Question" type="radio" value="Ja">Ja</input>
        <input name="Question" type="radio" value="Nee">Nee</input><br>
        <label>Aantal mensen besmet in je gemeente?*</label><input name="infected" type="number"><br> <br>
        <input type="submit" name="verzenden" value="verzenden"><br><br>
        <label>* Zie aantallen per gemeente per 100.000 bewoners <a href="https://www.rivm.nl/coronavirus-kaart-van-nederland-per-gemeente">site RIVM</a></label>

    </form>
<?php

?>


<?php
include "../Inlcude/Footer.php"
?>
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
    <?php
    include "Form_data.php";
    ?>
    <br><br>
    <h1>Restaria Kees Kroket</h1>
    <p>Visserstraat 12</p>
    <p>5211 DN s'Hertogenbosch</p>
    <p>073 613 6720</p>
    <p>info@restariaKeesKroket.nnl</p><br>

    <h3>Taak1</h3>
    <div class="Test">
        <form action="Form_data.php" method="get">
            <label>bedrijfsnaam: </label><br>
            <input name="bedrijfsNaam" type="text"><br><br>
            <label>voornamen: </label><br>
            <input name="voorNamen" type="text"><br><br>
            <label>achternaam: </label><br>
            <input name="achterNamen" type="text"><br><br>
            <label>tell nummer: </label><br>
            <input name="Nummer" type="text"><br><br>
            <label>E-mail adres: </label><br>
            <input name="Mail" type="text"><br><br>
            <label>toevoeging: </label><br>
            <input name="Bericht" type="text"><br><br>
            <input type="submit" name="Verzend" value="verzend">
        </form>
    </div>



    <br><br>


<?php
include "../Inlcude/Footer.php"
?>
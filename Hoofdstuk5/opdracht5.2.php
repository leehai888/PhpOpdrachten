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

    <h1>Utischrijf KW1C</h1>
    <hr>
    <table>
        <tr>
            <th>Voor en achternaam</th>
            <td><?php echo $_GET["Voor-Achternaam"]; ?></td>
        </tr>

        <tr>
            <th>Studentennummer</th>
            <td><?php echo $_GET["Studentennummer"]; ?></td>
        </tr>

        <tr>
            <th>Datum van uitschrijving</th>
            <td><?php echo $_GET["DatumUitschrijving"]; ?></td>
        </tr>

        <tr>
            <th>Reden van uitschrijving</th>
            <td><?php echo $_GET["Reden"]; ?></td>
        </tr>

        <tr>
            <th>Leerjaar</th>
            <td><?php echo $_GET["Leerjaar"]; ?></td>
        </tr>

        <tr>
            <th>Aanmeldden bij de succesklas</th>
            <td><?php echo $_GET["Aanmelden"]; ?></td>
        </tr>

        <tr>
            <th>Verwijderen gegevens</th>
            <td><?php echo $_GET["Verwijder"]; ?></td>
        </tr>

        <tr>
            <th>Reden van uitschrijving</th>
        </tr>

        <tr>
            <td><?php echo $_GET["Bericht"]; ?></td>
        </tr>
    </table>



<?php
include "../Inlcude/Footer.php"
?>
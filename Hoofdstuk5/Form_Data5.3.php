<?php
/**
 * User: Steven Lee
 * Date: 5-04-2020
 * Time: 14:20 PM
 * File: opdracht5.4.php
 */
?>

<?php
include "../Inlcude/header.php"
?>
<?php
include "ffunctions5.3.php"
?>

    <table>
        <tr>
            <th>Vraag</th>
            <th>Antwoord</th>
        </tr>
        <tr>
            <th>Naam</th>
            <td><?php echo $_POST["FirstLastName"]; ?></td>
        </tr>
        <tr>
            <th>Leeftijd</th>
            <td><?php echo $_POST["Age"]; ?></td>
        </tr>
        <tr>
            <th>Gemeente</th>
            <td><?php echo $_POST["Town"]; ?></td>
        </tr>
        <tr>
            <th>Inwoners</th>
            <td><?php echo $_POST["citizens"]; ?></td>
        </tr>
        <tr>
            <th>Aantal besmet</th>
            <td><?php echo $_POST["infected"]; ?></td>
        </tr>
        <tr>
            <th>Kennissen besmet</th>
            <td><?php echo $_POST["Question"]; ?></td>
        </tr>
        <tr>
            <th colspan="2">De kans is groter omdat je via je eigen netwerk besmet kan raken.</th>
        </tr>
        <tr>
            <th>Kans per ontmoeting op besmetting</th>
            <td><?php echo $_POST[echoKans()]; ?>%</td>
        </tr>
        <tr>
            <th>Kans is 1 op</th>
            <td><?php echo $_POST[getKans1Op()]; ?>%</td>
        </tr>
        <tr>
            <td colspan="2">
                <?php echo $_POST[vergelijkOorzaken ()]; ?>
            </td>
        </tr>
    </table>

<?php

?>


<?php
include "../Inlcude/Footer.php"
?>
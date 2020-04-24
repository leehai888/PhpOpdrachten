<?php
/**
 * User: Steven Lee
 * Date: 22-03-2020
 * Time: 20:20 PM
 * File: opdracht5.1.php
 */
?>
<table>
    <tr>
        <td>bedrijfnaam:</td>
        <td><?php echo $_GET["bedrijfsnaam"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>Voornaam:</td>
        <td><?php echo $_GET["Voornaam"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>Achternaam:</td>
        <td><?php echo $_GET["Achternaam"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>Nummer:</td>
        <td><?php echo $_GET["Nummer"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>E-mail:</td>
        <td><?php echo $_GET["E-mail"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>Toevoeging:</td>
        <td><?php echo $_GET["Toevoeging"]; ?>.<br /></td>
    </tr>
</table>

<?php
include "../../Include/footer.php"
?>

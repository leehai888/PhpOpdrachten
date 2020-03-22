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
        <td>bedrijfsnaam:</td>
        <td><?php echo $_GET["bedrijfsNaam"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>voornamen:</td>
        <td><?php echo $_GET["voornamen"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>achternaam:</td>
        <td><?php echo $_GET["achterNamen"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>tell nummer:</td>
        <td><?php echo $_GET["Nummer"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>E-mail adres:</td>
        <td><?php echo $_GET["Mail"]; ?>.<br /></td>
    </tr>
    <tr>
        <td>toevoeging:</td>
        <td><?php echo $_GET["Bericht"]; ?>.<br /></td>
    </tr>
</table>
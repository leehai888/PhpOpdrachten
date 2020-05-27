<?php
/**
 * User: Steven Lee
 * Date: 24-05-2020
 * Time: 14:20 PM
 * File: opdracht6.1.php
 */

include "../Inlcude/header.php"
?>

    <form action="logincheck.php" method="post">
        <label>Username: </label>
        <label>
            <input type="text" name="username">
        </label><br>
        <label>Password: </label>
        <label>
            <input type="password" name="password">
        </label><br>
        <input type="submit" value="Submit">
    </form>


<?php
if (isset($faultyMsg))
{
    echo $faultyMsg;
}
?>


<?php
include "../Inlcude/Footer.php"
?>
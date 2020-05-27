<?php
/**
 * User: Steven Lee
 * Date: 24-05-2020
 * Time: 14:20 PM
 * File: opdracht6.1.php
 */

session_start();
$authUsers = Array(
    "Steven" => "Steven888",
    "Milad" => "Milad888",
    "Tim" => "Tim888",
    "Demi" => "Demi888",
    "Sandra" => "Sandra888",
    "Ash" => "Ash888");


$faultyMsg = "";
foreach($authUsers as $user => $password) {
    if ($_POST['username'] == $user && $_POST['password'] == $password) {
        $_SESSION['username'] = $_POST['username'];
        header('location: welcome.php');
    }
}

$faultyMsg = "faulty username or password try again";

header('location: Opd6.1.php');

?>
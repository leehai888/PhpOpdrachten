<?php
/**
 * User: Steven Lee
 * Date: 8-03-2020
 * Time: 20:43 PM
 * File: opdracht4.1.php
 */
?>

<?php
include "../Inlcude/header.php"
?>

<?php
date_default_timezone_set("Europe/Amsterdam");
// de variabel today geeft dag - maan- jaar en i is de tijd
$today = date("d-m-Y H:i");
echo "De datum en uur hier in Nederland is: $today";
?>
    <br>
<?php
date_default_timezone_set("Asia/Tokyo");
$today = date("d-m-Y H:i");
//de echo geeft de string weer en de variabel van tokyo
echo "De datum en uur in Japan is nu : $today";
?>
    <br>
<?php
date_default_timezone_set("America/New_York");
$today = date("d-m-Y H:i");
echo "De datum en uur in New York is nu : $today";
?>
<br>
<br>
<?php
include "../Inlcude/Footer.php"
?>
<?php
/**
 * User: Steven
 * Date: 12-2-2020
 * Time: 12:06 PM
 * File: index.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>

    </title>

    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta charset="utf-8">
    <link href="../stylesheet.css" type="text/css" rel="stylesheet">

</head>
<body>
<?php
$text1 = "Hallo";
$text2 = "een makkelijke taal";
$text3 = "toch zo'n makkelijke taal";
$text4 = "wat is";
$text5 = "PHP";
$text6 = "Nooit gedacht dat";
$text7 = "De installatie is bes ingewikkeld";
$text8 = "Fijn";
$text9 = "?";
$text10 = ".";
$text11 = ",";
$text12 = "<br>";
$text13 = "is";
$text14 = "Vind je niet";
$text15 = "toch";
$space = "&nbsp;";
?>

<?php
echo $text1; echo $text11; echo $space; echo $text4; echo $space; echo $text5; echo $space; echo $text15; echo $space; echo $text2; echo $text10; echo $text12;
echo $text7; echo $text10; echo $space; echo $text8; echo $space; echo $text15; echo $text9; echo $text12;
echo $text6; echo $space; echo $text5; echo $space; echo $text3; echo $space; echo $text13; echo $text10;
?>
<br>
<br>
<?php
echo $text1; echo $text11; echo $text12;
echo $text8; echo $space; echo $text15; echo $space; echo "dat"; echo $space; echo $text5; echo $space; echo "zo'n makkelijke taal"; echo $space; echo $text13; echo $text10; echo $text12;
echo $text7; echo $text10; echo $space; echo "Vind je niet?";
?>
<br>
<br>
<br>
<button><a href="../index.php">Home</a></button>
</body>
</html>




<button><a href="../index.php">Home</a></button>
<br>
<br>

<?php
date_default_timezone_set("Europe/Amsterdam");
$hour = date("H");
$year = date("Y");
$moment ='';

if($hour >= 0 && $hour <= 5){
    $moment = 'Goedennacht';
}
else if ($hour >= 5 && $hour <= 12){
    $moment = 'Goedenochtend';
}
else if($hour >= 12 && $hour <= 17){
    $moment = 'Goedenmiddag';
}
else if ($hour >= 17 && $hour <= 0){
    $moment = 'Goedenavond';
}

echo $moment . ' Steven Lee &copy;' . $year;


?>
<?php

print_r($_SESSION);
if (isset($_SESSION['username'])) {
    $bezoeker = $_SESSION['username']. "&nbsp;<a
href='../Hoofdstuk6/Logout.php'>Logout</a>";
}
else {
    $bezoeker = "onbekende bezoeker". "&nbsp;<a
href='../Hoofdstuk6/Opd6.1.php'>Login</a>";
}
echo  $bezoeker;

?>

</body>
</html>
<?php
/**
 * User: Steven Lee
 * Date: 1-03-2020
 * Time: 14:20 PM
 * File: opdracht3.2.php
 */
?>

<?php
include "../Inlcude/header.php"
?>

<?php
try
{
    $pdo = new PDO("odbc:odbc2sqlserver");
}
catch (PDOException $e)
{
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}
echo "database connectie gelukt";

try
{
    // Query schrijven
    $sql = 'SELECT * FROM joke';
    // Query uitvoeren
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}
// Lege Array aanmaken voor de results
$aJokes = array();
// Door de results heen loopen via een while
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    // Result wegschrijven in de $aJokes array
    $aJokes[] = $row;
}
// Tonen van de inhoud van aJokes
echo "<pre>";
var_dump($aJokes);
echo "</pre>";

foreach($aJokes as $grap) {
    echo "<br>".$grap['joketext'];
}

?>
<br>
<br>


<?php
include "../Inlcude/Footer.php"
?>
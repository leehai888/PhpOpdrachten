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
    echo "database connectie gelukt";
}

catch (PDOException $e)
{
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}

?>
<?php
try {
    $sql = 'SELECT * FROM joke';
    $result = $pdo->query($sql);
}
catch(PDOException $e)
{
    echo 'er is een probleem met ophalen jokes' . $e ->getMessage();
    exit();
}
$ajokes = array();
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    $ajokes[] = $row;
    $counter = $row['id'];
}
?>
<table>
    <tr>
        <th>id</th>
        <th>joketext</th>
        <th>jokeclou</th>
        <th>jokedate</th>
    </tr>
    <?php
    for ($i=0;$i<$counter;$i++)
    {
        echo "<tr><td>" . $ajokes[$i]['id'] . "</td><td>" . $ajokes[$i]['joketext'] . "</td><td>" . $ajokes[$i]['jokeclou'] . "</td><td>" . $ajokes[$i]['jokedate'] . "</td></tr>";
    }
    ?>
</table>


<?php
include "../Inlcude/Footer.php"
?>
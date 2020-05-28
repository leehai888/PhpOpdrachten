<?php
/**
 * User: Steven Lee
 * Date: 1-03-2020
 * Time: 14:20 PM
 * File: opdracht3.2.php
 */
?>

<style>
    img{
        width:100px;
    }
</style>
    <form id="gameFrm" method="get" action="Opd6.2.php">
        <div class="float">
            <label>
                <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="steen">
            </label>steen
            <img src="steen.jpg" alt="Steen">
        </div>
        <div class="float">
            <label>
            <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="papier">papier
            </label>
                <img src="papier.jpg" alt="Papier">
        </div>
        <div class="float">
            <label>
            <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="schaar">schaar
            </label>
                <img src="schaar.jpg" alt="Schaar">
        </div>
    </form>
<?php
if (isset($_SESSION['computer']) == false) {
    $_SESSION['computer'] = 0;
    $_SESSION['player'] = 0;
}
if (isset($_GET['keuze'])) {
    echo "Jij koos: <img src='Opd6.2{$_GET['keuze']}.jpg'> {$_GET['keuze']} <br>";
    $persoonkeuze = $_GET['keuze'];
    $opties = array("steen","papier","schaar");
    $computerkeuzegetal = rand(0,2);
    $computerkeuze = $opties[$computerkeuzegetal];
    echo "&nbsp;&nbsp;De computer koos: <img src='Opd6.2{$computerkeuze}.jpg'> $computerkeuze <br>";
    //schaar > papier
    if ($computerkeuze == 'schaar' && $persoonkeuze == 'papier'){
        $_SESSION['computer'] +=1;
    }elseif ($persoonkeuze == 'schaar' && $computerkeuze == 'papier'){
        $_SESSION['player'] +=1;
    }
    //steen > schaar
    elseif ($computerkeuze == 'steen' && $persoonkeuze == 'schaar'){
        $_SESSION['computer'] +=1;
    }elseif ($persoonkeuze == 'steen' && $computerkeuze == 'schaar'){
        $_SESSION['player'] +=1;
    }
    //papier > steen
    elseif ($computerkeuze == 'steen' && $persoonkeuze == 'papier'){
        $_SESSION['computer'] +=1;
    }elseif ($persoonkeuze == 'steen' && $computerkeuze == 'papier'){
        $_SESSION['player'] +=1;
    }
}
echo "De stand is: <br>";
echo $_SESSION['computer'] . ' voor de computer <br>';
echo $_SESSION['player'] . ' voor de jou <br>';
if($_SESSION['computer'] == 5){
    echo 'The winner is the computer';

    unset($_SESSION['computer']);
    unset($_SESSION['player']);
}
elseif($_SESSION['player'] == 5){
    echo 'The winner is the player';

    unset($_SESSION['computer']);
    unset($_SESSION['player']);
}
?>

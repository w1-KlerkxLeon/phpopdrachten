<?php
/*
 *  User:   Leon Klerkx
 *  Date:   29-4-2020
 *  Time:   19:30 uur
 *  File:   opdracht_6.2.php
 */
?>

<?php
    //Header inladen
    include "../../Includes/header.php";
    //Menu inladen
    include "../../Includes/menu.php";
?>

<?php
//Als gebruiker en computer niet bestaat
if(!isset($_SESSION['gebruiker']) && !isset($_SESSION['computer']))
{
    //De waarde van gebruiker en computer op 0 zetten
    $_SESSION['gebruiker'] = 0;
    $_SESSION['computer'] = 0;
}

?>

<main>
    <fieldset>
        <!--Titel-->
        <h1>
            Speel het spel steen - papier - schaar tegen de computer
        </h1>
        <form id="gameFrm" method="get" action="opdracht_6.2.php">
            <!--Steen-->
            <div class="float">
                <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" id="steen" value="steen">
                <label for="steen"><img src="images/steen.png" alt="Steen"></label>
            </div>
            <!--Papier-->
            <div class="float">
                <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" id="papier" value="papier">
                <label for="papier"><img src="images/papier.png" alt="Papier"></label>
            </div>
            <!--Schaar-->
            <div class="float">
                <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" id="schaar" value="schaar">
                <label for="schaar"><img src="images/schaar.png" alt="Schaar"></label>
            </div>
        <br>
    </form>
    </fieldset>


    <?php
        //Startsituatie: nog geen keuze gekozen
        if(!isset($_GET['keuze']))
        {
            echo "<fieldset>";
            echo "Start het spel door steen, papier of schaar te kiezen. De computer kiest tegelijkertijd met jou.";
            echo "</fieldset>";
        }

        //Als er een keuze is gekozen
        if(isset($_GET['keuze']))
        {
            echo "Jij koos: <img src='images/{$_GET['keuze']}.png'>";
            //keuze computer?

            //Wat kiest de computer
            //Random wordt er een getal tussen 0 en 2 gekozen
            $opties = array("steen","papier","schaar");
            $computerkeuzegetal = rand(0,2);
            $computerkeuze = $opties[$computerkeuzegetal];
            echo "&nbsp;&nbsp;De computer koos: <img src='images/{$computerkeuze}.png'>";

            //Als gebruiker steen kiest en computer schaar
            //Of als gebruiker papier kiest en computer steen
            //OF als gebruiker schaar kiest en computer papier
            if($_GET['keuze'] == $opties[0] && $computerkeuze == $opties[2] || $_GET['keuze'] == $opties[1] && $computerkeuze == $opties[0] || $_GET['keuze'] == $opties[2] && $computerkeuze == $opties[1])
            {
                echo "<h1>Jij scoort</h1>";
                //Stand van user1 verhogen met 1 punt
                $_SESSION['gebruiker'] += 1;

                //Stand laten zien
                echo "De score is " . $_SESSION['gebruiker'] . " tegen " . $_SESSION['computer'] . "";
            }
            //Als gebruiker steen kiest en computer papier
            //Of als gebruiker papier kiest en computer schaar
            //Of als gebruiker schaar kiest en computer steen
            elseif($_GET['keuze'] == $opties[0] && $computerkeuze == $opties[1] || $_GET['keuze'] == $opties[1] && $computerkeuze == $opties[2] || $_GET['keuze'] == $opties[2] && $computerkeuze == $opties[0])
            {
                echo "<h1>De computer scoort</h1>";
                //Stand van de computer verhogen met 1 punt
                $_SESSION['computer'] += 1;

                //Stand laten zien
                echo "De score is " . $_SESSION['gebruiker'] . " tegen " . $_SESSION['computer'] . "";
            }
            //ALs gebruiker hetzelfde kiest als de computer
            elseif($_GET['keuze'] == $opties[0] && $computerkeuze == $opties[0] || $_GET['keuze'] == $opties[1] && $computerkeuze == $opties[1] || $_GET['keuze'] == $opties[2] && $computerkeuze == $opties[2])
            {
                echo "<h1>Gelijk!</h1>";
                //Beide users verhogen met 1 punt
                $_SESSION['gebruiker'] += 1;
                $_SESSION['computer'] += 1;

                //Stand laten zien
                echo "De score is " . $_SESSION['gebruiker'] . " tegen " . $_SESSION['computer'] . "";
            }

            //Als gebruiker én computer 5 punten scoren
            if($_SESSION['gebruiker'] == 5 && $_SESSION['computer'] == 5)
            {
                echo "<br>Het is gelijkkspel!<br>";
                echo "Het spel start weer opnieuw als je een nieuwe keuze maakt";
                session_destroy();
            }
            //Als gebruiker 5 punten scoort
            elseif($_SESSION['gebruiker'] == 5)
            {
                echo "<br>De gebruiker wint!<br>";
                echo "Het spel start weer opnieuw als je een nieuwe keuze maakt";
                session_destroy();
            }
            //Als computer 5 punten scoort
            elseif($_SESSION['computer'] == 5)
            {
                echo "<br>De computer wint!<br>";
                echo "Het spel start weer opnieuw als je een nieuwe keuze maakt";
                session_destroy();
            }
        }
    ?>

<?php
    //Footer inladen
    include "../../Includes/footer.php";
?>
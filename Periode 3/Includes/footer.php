<?php
/*
 *  User:   Leon Klerkx
 *  Date:   19-2-2020
 *  Time:   14:40 uur
 *  File:   footer.php
 */

    //variabelen.php inladen (opdracht_3.3 taak 6)
    include "../../Hoofdstuk3/Opdracht_3.3/variabelen.php";
?>

<!--Elementen afsluiten-->
    </main>
    <!--Footer-->
    <footer>
        <!--Footer code-->
        <span>&copy; <?php echo $name;?> </span>
        <?php
        //Taak 6 opdracht 2
        echo $year . "&nbsp;";

        //Opdracht 4.1 tijdzone instellen taak 1 en 2
        date_default_timezone_set("Europe/Amsterdam");
        //variabele $uur declareren en initialiseren
        $uur = date("H");

        //Opdracht 4.1 taak 3 if/else
        //Tussen 0 en 5 uur
        if($uur >= 0 && $uur < 5)
        {
            echo "Goedennacht";
        }
        //Tussen 5 en 12 uur
        elseif($uur >= 5 &&  $uur < 12)
        {
            echo "Goedenochtend";
        }
        //Tussen 12 en 17 uur
        elseif($uur >= 12 && $uur < 17)
        {
            echo "Goedenmiddag";
        }
        //Tussen 17 en 24 uur
        elseif($uur >= 17 && $uur < 24)
        {
            echo "Goedenavond";
        }
        ?>

        <!--Sessie code-->
        <?php
        //session_start(); //Als ik deze in commentaar zet, krijg ik geen foutmeldingen te zien
        if(isset($_SESSION['username']))
        {
            $bezoeker = $_SESSION['username']. "&nbsp;<a href='../../Hoofdstuk6/Opdracht_6.1/loguit.php'>Loguit</a>";
        }
        else
        {
            $bezoeker = "onbekende bezoeker". "&nbsp;<a href='../../Hoofdstuk6/Opdracht_6.1/opdracht_6.1.php'>Login</a>";
        }
        //print vervolgens ook de $bezoeker zodat je de volgende visuele
        //weergave in de pagina ziet
        echo $bezoeker;
        ?>
    </footer>
</body>

<?php
/*
 *  User:   Leon Klerkx
 *  Date:   1-4-2020
 *  Time:   16:35 uur
 *  File:   opdracht_5.4.php
 */
?>

<?php
    //Header inladen
    include "../../Includes/header.php";
    //Menu inladen
    include "../../Includes/menu.php";
?>

<main>
    <form action="opdracht_5.4.php" method="post">
        <!--Titel-->
        <h2>
            Stoplicht
        </h2>
        <fieldset>
            <table>
                <!--Ambulance-->
                <tr>
                    <td>
                        <label>Komt er een ambulance aan?</label>
                    </td>
                    <td>
                        <!--Er komt een ambulance aan-->
                        <input type="radio" name="ambulanceComing" id="ja" value="ja">
                        <label for="ja">Ja</label>
                        <!--Er komt geen ambulance aan-->
                        <input type="radio" name="ambulanceComing" id="nee" value="nee">
                        <label for="nee">Nee</label>
                    </td>
                </tr>
                <!--Stoplicht-->
                <tr>
                    <td>
                        <label>Sop lichtkleur?</label>
                    </td>
                    <td>
                        <!--Stoplicht rood-->
                        <input type="radio" name="trafficLightColor" id="rood" value="Rood">
                        <label for="rood">Rood</label>
                        <!--Stoplicht groem-->
                        <input type="radio" name="trafficLightColor" id="groen" value="Groen">
                        <label for="groen">Groen</label>
                        <!--Stoplicht oranje-->
                        <input type="radio" name="trafficLightColor" id="oranje" value="Oranje">
                        <label for="oranje">Oranje</label>
                    </td>
                </tr>
                <!--Verzendknop-->
                <tr>
                    <td>
                        <input type="submit" name="submit">
                    </td>
                </tr>
            </table>
        </fieldset>
        <?php
        //Variabelen declareren  en initialisern
        $situation = "<h2>Wat is de situatie en wat moet ik doen?</h2>";
        //driveOn op false zetten
        $driveOn = false;

        //Als ambulance aangevinkt is
        if(isset($_POST["ambulanceComing"]))
        {
            //ambulance bericht tonen
            $ambulance = $_POST["ambulanceComing"];
        }
        else
        {
            //Anders leeg laten
            $ambulance = "";
        }

        //Als de stoplicht aangevinkt is
        if(isset($_POST["trafficLightColor"]))
        {
            //Bericht u mag doorrijden of u moet stoppen laten zien
            $traffic = $_POST["trafficLightColor"];
        }
        else
        {
            //Dit bericht niet laten zien
            $traffic = "";
        }

        //Antwoord
        //Als je op Verzenden drukt, komt er een vak met uitleg bij
        if(isset($_POST["submit"]))
        {
            //Als er een ambulance komt en de stoplicht staat op rood
            if($ambulance == "ja" && $traffic == "Rood")
            {
                echo $situation;
                echo "<fieldset>";
                echo "<p>Stoplicht staat op rood en er komt: ja een ambulance aan.</p>";
                //driveOn aanroepen (NIET echoën)
                //  $driveOn = false;
                echo "<p class='red'>U moet stoppen</p>";
            }
            //Als er een ambulance komt en de stoplicht staat op groen
            elseif($ambulance == "ja" && $traffic == "Groen")
            {
                echo $situation;
                echo "<fieldset>";
                echo "<p>Stoplicht staat op groen en er komt: ja een ambulance aan.</p>";
                echo "<p class='red'>U moet stoppen</p>";
            }
            //Als er een ambulance komt en de stoplicht staat op oranje
            elseif($ambulance == "ja" && $traffic == "Oranje")
            {
                echo $situation;
                echo "<fieldset>";
                echo "<p>Stoplicht staat op oranje en er komt: ja een ambulance aan.</p>";
                echo "<p class='red'>U moet stoppen</p>";
            }
            //Als er geen ambulance komt en de stoplicht staat op rood
            elseif($ambulance == "nee" && $traffic == "Rood")
            {
                echo $situation;
                echo "<fieldset>";
                echo "<p>Stoplicht staat op rood en er komt: nee een ambulance aan.</p>";
                echo "<p class='red'>U moet stoppen</p>";
            }
            //Als er geen ambulance komt en de stoplicht staat op groen
            elseif($ambulance == "nee" && $traffic == "Groen")
            {
                echo $situation;
                echo "<fieldset>";
                echo "<p>Stoplicht staat op groen en er komt: nee een ambulance aan.</p>";
                echo "<p class='green'>U mag doorrijden</p>";
            }
            //Als er geen ambulance komt en de stoplicht staat op oranje
            elseif($ambulance == "nee" && $traffic == "Oranje")
            {
                echo $situation;
                echo "<fieldset>";
                echo "<p>Stoplicht staat op oranje en er komt: nee een ambulance aan.</p>";
                echo "<p class='red'>U moet stoppen</p>";
            }
            //Als 1 van beide NIET is ingevuld
            elseif(empty($ambulance == "") || empty($traffic == "")) // || !isset($ambulance) || !isset($traffic))
            {
                echo $situation;
                echo "<fieldset>";
                echo "<p>Of stoplichtkleur is onbekend of het is onbekend of de ambulance komt.</p>";

            }
            //Als beide NIET zijn ingevuld
            elseif(empty($ambulance) && empty($traffic))
            {
                echo $situation;
                echo "<fieldset>";
                echo "<p>Of stoplichtkleur is onbekend of het is onbekend of de ambulance komt.</p>";
            }
        }

        //Fieldset afsluiten
        echo "</fieldset>";

/*  EINDE FORMULIER  */
        //Als er een ambulance komt en de stoplicht staat op rood
/*        if($ambulance == "ja" && $traffic == "Rood")
        {
            echo $situation;
            echo "<fieldset>";
            echo "<p>Stoplicht staat op rood en er komt: ja een ambulance aan.</p>";
            //driveOn aanroepen (NIET echoën)
          //  $driveOn = false;
            echo "<p class='red'>U moet stoppen</p>";
        }
        //Als er een ambulance komt en de stoplicht staat op groen
        elseif($ambulance == "ja" && $traffic == "Groen")
        {
            echo $situation;
            echo "<fieldset>";
            echo "<p>Stoplicht staat op groen en er komt: ja een ambulance aan.</p>";
           // $driveOn = false;
            echo "<p class='red'>U moet stoppen</p>";
        }
        //Als er een ambulance komt en de stoplicht staat op oranje
        elseif($ambulance == "ja" && $traffic == "Oranje")
        {
            echo $situation;
            echo "<fieldset>";
            echo "<p>Stoplicht staat op oranje en er komt: ja een ambulance aan.</p>";
          //  $driveOn = false;
            echo "<p class='red'>U moet stoppen</p>";
        }
        //Als er geen ambulance komt en de stoplicht staat op rood
        elseif($ambulance == "nee" && $traffic == "Rood")
        {
            echo $situation;
            echo "<fieldset>";
            echo "<p>Stoplicht staat op rood en er komt: nee een ambulance aan.</p>";
           // $driveOn = false;
            echo "<p class='red'>U moet stoppen</p>";
        }
        //Als er geen ambulance komt en de stoplicht staat op groen
        elseif($ambulance == "nee" && $traffic == "Groen")
        {
            echo $situation;
            echo "<fieldset>";
            echo "<p>Stoplicht staat op groen en er komt: nee eem ambulance aan.</p>";
          //  $driveOn = true;
            echo "<p class='green'>U mag doorrijden</p>";
        }
        */

        //Als er geen ambulance komt en de stoplicht staat op oranje
 /*       elseif($ambulance == "nee" && $traffic == "Oranje")
        {
            echo $situation;
            echo "<fieldset>";
            echo "<p>Stoplicht staat op oranje en er komt: nee een ambulance aan.</p>";
          //  $driveOn = false;
            echo "<p class='red'>U moet stoppen</p>";
        }
*/
     //   elseif(empty($ambulance == "") || empty($traffic == ""))
    /*    elseif(empty($ambulance == "") || empty($traffic == "") || !isset($ambulance) || !isset($traffic))
        {
            echo $situation;
            echo "<fieldset>";
            echo "Of stoplichtkleur is onbekend of het is onbekend of de ambulance komt.";

        } */

        /*//Als driveOn true is
        if($driveOn == true)
        {
            echo "<p class='green'>U mag doorrijden</p>";
        }
        //Als driveOn false is
        elseif($driveOn == false)
        {
            echo "<p class='red'>U moet stoppen</p>";
        }*/

        //echo print_r($_POST);
        ?>

    </form>


<?php
    //Footer inladen
    include "../../Includes/footer.php";
?>
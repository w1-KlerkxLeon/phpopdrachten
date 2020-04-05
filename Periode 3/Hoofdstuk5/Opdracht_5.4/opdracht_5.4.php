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
                        <input type="submit">
                    </td>
                </tr>
            </table>
        </fieldset>
        <?php
        //Variabelen declareren  en initialisern
        $situation = "<h2>Wat is de situatie en wat moet ik doen?</h2>";
        $ambulance = $_POST["ambulanceComing"];
        $traffic = $_POST["trafficLightColor"];


        //Antwoord
        //Als er een ambulance komt en de stoplicht staat op rood
            //Moet ik hier ook met isset() werken?
        if($ambulance == "ja" && $traffic == "Rood")
        {
            echo $situation;
            echo "<fieldset>";
            echo "Stoplicht staat op rood en er komt: ja een ambulance aan.";
            //driveOn aanroepen (NIET echoën)
            $driveOn = false;
        }
        //Als er een ambulance komt en de stoplicht staat op groen
        elseif($ambulance == "ja" && $traffic == "Groen")
        {
            echo $situation;
            echo "<fieldset>";
            echo "Stoplicht staat op groen en er komt: ja een ambulance aan.";
            $driveOn = false;
        }
        //Als er een ambulance komt en de stoplicht staat op oranje
        elseif($ambulance == "ja" && $traffic == "Oranje")
        {
            echo $situation;
            echo "<fieldset>";
            echo "Stoplicht staat op oranje en er komt: ja een ambulance aan.";
            $driveOn = false;
        }
        //Als er geen ambulance komt en de stoplicht staat op rood
        elseif($ambulance == "nee" && $traffic == "Rood")
        {
            echo $situation;
            echo "<fieldset>";
            echo "Stoplicht staat op rood en er komt: nee een ambulance aan.";
            $driveOn = false;
        }
        //Als er geen ambulance komt en de stoplicht staat op groen
        elseif($ambulance == "nee" && $traffic == "Groen")
        {
            echo $situation;
            echo "<fieldset>";
            echo "Stoplicht staat op groen en er komt: nee eem ambulance aan.";
            $driveOn = true;
        }
        //Als er geen ambulance komt en de stoplicht staat op oranje
        elseif($ambulance == "nee" && $traffic == "Oranje")
        {
            echo $situation;
            echo "<fieldset>";
            echo "Stoplicht staat op oranje en er komt: nee een ambulance aan.";
            $driveOn = false;
        }

        elseif(empty($ambulance == "") || empty($traffic == ""))
        {
            echo $situation;
            echo "<fieldset>";
            echo "Of stoplichtkleur is onbekend of het is onbekend of de ambulance komt.";

        }

        //Als driveOn true is
        if($driveOn == true)
        {
            echo "<p class='green'>U mag doorrijden</p>";
        }
        //Als driveOn false is
        elseif($driveOn == false)
        {
            echo "<p class='red'>U moet stoppen</p>";
        }


        //Fieldset afsluiten
        echo "</fieldset>";



        //echo print_r($_POST);
        //echo print_r($_POST);
        ?>
    </form>


<?php
    //Footer inladen
    include "../../Includes/footer.php";
?>
<?php
/*
 *  User:   Leon Klerkx
 *  Date:   20-5-2020
 *  Time:   20:45 uur
 *  File:   insert.php
 */
?>

<?php
    //Header inladen
    include "../../Includes/header.php";
    //Menu inladen
    include "../../Includes/menu.php";

    //Functions inladen
    include "Scripts/functions.php";
?>

<main>
    <!--Titel-->
    <h1>
        Nieuwe grap toevoegen
    </h1>
    <form action="insert.php" method="post">
        <table>
            <!--Joketext-->
            <tr>
                <td>
                    <label for="joketext">Joketext</label>
                </td>
                <td>
                    <input type="text" name="joketext" id="joketext" placeholder="Joketext komt hier">
                </td>
            </tr>
            <!--Jokeclou-->
            <tr>
                <td>
                    <label for="jokeclou">Jokeclou</label>
                </td>
                <td>
                    <input type="text" name="jokeclou" id="jokeclou" placeholder="Jokeclou komt hier">
                </td>
            </tr>
            <!--Verzenden-->
            <tr>
                <td>
                    <input type="submit" value="Verstuur" name="verstuur">
                </td>
            </tr>
        </table>
    </form>


<?php

    //Als het formulier verstuurd is
    if(isset($_POST['verstuur']))
    {
        //Variabelen declareren met de SELECT statement die in SQL hoort
        $query = "SELECT * FROM joke WHERE joketext = " . '&#39;' .$_POST['joketext'] . '&#39;' . " AND jokeclou = " . '&#39;' . $_POST['jokeclou'] . '&#39;' . "";
        //Variabelen echoën
        echo $query;

        //Tijdzone instellen
        date_default_timezone_set("Europe/Amsterdam");

        //Als joketext en jokeclou zijn ingevuld
        if(!empty($_POST['joketext']) && !empty($_POST['jokeclou']))
        {
            //Grappen toevoegen aan de database met de huidige datum en tijd
            $sql = "INSERT INTO joke VALUES('"  . $_POST['joketext'] . " ',' " . $_POST['jokeclou'] . "',  '" . date("Y/m/d H:i:s") . "')";

            //Grap toegevoegd
            echo "<h1>Grap toegevoegd!</h1>";
            echo "<p>Bedankt voor het toevoegen van je grap. Hieronder zie je een overzicht van je grap:</p>";
            echo "<span>Joketext:</span> " . $_POST['joketext'] . "<br>";
            echo "<span>Jokeclou:</span> " . $_POST['jokeclou'] . "<br> <br><br>";
            //Link naar opdracht 7.3
            echo "<a href='../Opdracht_7.3/index.php'>Bekijk grappen (opdracht 7.3)</a>";
        }
        //Als 1 of beide velden leeg zijn
        else
        {
            //Melding tonen
            echo $sql = "<br><h2>Joketext en/of jokeclou is niet ingevuld</h2>";
            //echo "<br>Joketext en/of jokeclou is niet ingevuld";
        }

        //Miliseconden worden toegevoegd
//        echo date('m-d-Y H:i:').sprintf('%0.3f', date('s')+fmod(microtime(true), 1));

        //Function aanroepen waar de try en catch van de database in zit
        startConnection();

        //Hiermee voeg je zelf een grap aan de database toe
        //Met $sql voeg je de gegevens aan de database toe
        executeQueryViaExec($sql);

    }

    //Footer inladen
    include "../../Includes/footer.php";
?>
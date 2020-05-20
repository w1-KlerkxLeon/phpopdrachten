<?php
/*
 *  User:   Leon Klerkx
 *  Date:   20-5-2020
 *  Time:   13:25 uur
 *  File:   index.php
 */
?>
<?php
    //Header inladen
    include "../../Includes/header.php";
    //Menu inladen
    include "../../Includes/menu.php";
?>
<!--Taak 3 HTML-->
<main>
    <p>
        SELECT * FROM joke WHERE joktext LIKE '%blondje%'
    </p>
    <!--Formulier-->
    <form action="index.php" method="get">
        <!--Label-->
        <label for="search">Zoekterm:</label>
        <!--Invoerveld-->
        <input type="text" name="search" id="search">
        <!--Button knop-->
        <input type="submit" value="Zoeken" name="submit">
    </form>
    <hr>
    <!--Table waar de jokes in komen te staan-->
    <table>
        <!--Table headers-->
        <tr>
            <th>
                Jokeid
            </th>
            <th>
                Joketext
            </th>
            <th>
                Jokeclou
            </th>
            <th>
                Jokedate
            </th>
        </tr>
    <?php

        // Inladen functies bestand
        include("instructie02/functions.php");

        // Starten van een database connectie
        startConnection();

        // Executeren van een SQL query
        // Alles uit de tabel joke tonen
        /*$query = "SELECT * FROM joke";*/

        //Als je op de zoekknop klikt
        if(isset($_GET['submit']))
        {
            //laat hij álle records zien wat je bij het zoeken hebt ingvuld
            $query = "SELECT * FROM joke WHERE joketext LIKE '%" . $_GET['search'] . "%'";
        }
        //ALs niks in het veld is ingevuld, alle records laten zien
        else
        {
            $query = "SELECT * FROM joke";
        }

        $jokes = executeQuery($query);

        // Resultaten rij voor rij ophalen
        while($row = $jokes->fetch(PDO::FETCH_ASSOC))
        {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row["joketext"] .  "</td>";
            echo "<td>" . $row["jokeclou"] .  "</td>";
            echo "<td>" . $row["jokedate"] . "</td>";
            echo "</tr>";
        }

        //Table afsluiten
        echo "</table>";

    ?>

    <?php
        //Footer inladen
        include "../../Includes/footer.php";
    ?>
